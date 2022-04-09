<?php
/* Smarty version 3.1.30, created on 2022-04-09 14:14:29
  from "C:\xampp\htdocs\07a.Ochrona_role\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625178a5713745_13037669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5845d050de00dc5b2002b081fb1bc6526000bd8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07a.Ochrona_role\\app\\views\\CalcView.tpl',
      1 => 1649506467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625178a5713745_13037669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426446716625178a5707b97_28034275', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12168861625178a57086c7_63074329', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1815744473625178a5713243_54528422', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_1426446716625178a5707b97_28034275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </section>
<?php
}
}
/* {/block 'footer'} */
/* {block 'header'} */
class Block_12168861625178a57086c7_63074329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <span class="icon solid major fa-cloud"></span>
            <h1>Witaj w prostym kalkulatorze kredytowym.<br />
                Wykorzystano szablon <strong>PHOTON</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
            <p>Zadanie 7a. Kontroler  - role</p>
            <ul class="actions special">
                <li><a href="#one" class="button scrolly">Przejdź do kalkulatora</a></li>
            </ul>
        </div>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1815744473625178a5713243_54528422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
    <button class="col-6 col-12-xsmall"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">wyloguj</a></button>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

    <section id="one" class="main style1">
        <div class="container">
            <header class="major special">
                <h2>Kalkulator</h2>
            </header>
            <section>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <label for="kwota">Kwota kredytu: </label>
                            <input id="id_kw" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_op">Oprocentowanie: </label>
                            <input id="id_op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /><br />
                        </div>
                        <div class="col-12">
                            <label for="id_cz">Czas spłaty: </label>
                            <select name="czas">
                                <option value="6m">6 miesięcy</option>
                                <option value="12m">12 miesięcy</option>
                                <option value="2r">2 lata</option>
                                <option value="3r">3 lata</option>
                                <option value="5r">5 lat</option>
                                <option value="10r">10 lat</option>
                                <option value="15r">15 lat</option>
                                <option value="20r">20 lat</option>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->role == "admin") {?>
                                <option value="25r">25 lat</option>
                                <?php }?>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="primary">Oblicz</button>
                        </div>
                    </div>
                </form>
            </section>

            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <div class="messages">
                <?php if (isset($_smarty_tpl->tpl_vars['res']->value->rata)) {?>
                    <h4>Rata</h4>
                    <p class="res">
                        <?php echo $_smarty_tpl->tpl_vars['res']->value->rata;?>

                    </p>
                <?php }?>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
