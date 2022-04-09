<?php
/* Smarty version 3.1.30, created on 2022-04-09 14:12:31
  from "C:\xampp\htdocs\07a.Ochrona_role\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6251782fc847a1_37366848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f769fa0b6f1a078f2e02062ed40279f2cf1b0175' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07a.Ochrona_role\\app\\views\\LoginView.tpl',
      1 => 1649505470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6251782fc847a1_37366848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17963071466251782fc7e758_31912654', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14577473736251782fc7f240_73202643', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14159414476251782fc84276_04613275', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_17963071466251782fc7e758_31912654 extends Smarty_Internal_Block
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
class Block_14577473736251782fc7f240_73202643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <span class="icon solid major fa-cloud"></span>
            <h1>Witaj w prostym kalkulatorze kredytowym.<br />
                Wykorzystano szablon <strong>PHOTON</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
            <p>Zadanie 7. Kontroler  - Ochrona</p>
            <ul class="actions special">
                <li><a href="#one" class="button scrolly">Przejdź do logowania</a></li>
            </ul>
        </div>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_14159414476251782fc84276_04613275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                    <legend>Logowanie do systemu</legend>
                    <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <label for="id_login">Login: </label>
                            <input id="id_login" type="text" name="login"/>
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_pass">Hasło: </label>
                            <input id="id_pass" type="password" name="pass" /><br />
                        </div>

                        <div>
                            <input type="submit" value="Zaloguj" class="primary"/>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </section>
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
