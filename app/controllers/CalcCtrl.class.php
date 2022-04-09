<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $rata;

	public function __construct() {
        $this->form = new CalcForm();
        $this->rata = new CalcResult();
    }
    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->oprocentowanie = getFromRequest('oprocentowanie');
        $this->form->czas = getFromRequest('czas');
    }
	
	public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->oprocentowanie))) {
            return false;
        }


        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        if (!getMessages()->isError()) {

            if (!is_numeric($this->form->kwota)) {
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->oprocentowanie)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }

        return !getMessages()->isError();
    }
	
	public function action_calcCompute() {

        $this->getParams();

        if ($this->validate()) {

            $this->form->kwota = intval($this->form->kwota);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            getMessages()->addInfo('Parametry poprawne.');
            $this->form->opr = intval($this->form->oprocentowanie / 100);

            switch ($this->form->czas) {

                case '6m' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 6;
                    break;
                case '12m' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 12;
                    break;
                case '2r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 24;
                    break;
                case '3r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 3);
                    break;
                case '5r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 5);
                    break;
                case '10r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 10);
                    break;
                case '15r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 15);
                    break;
                case '20r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 20);
                    break;
                case '25r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 25);
                    break;
            }

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
        
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->rata);
		
		getSmarty()->display('CalcView.tpl');
	}
}