{extends file="main.tpl"}

{block name=footer}
    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </section>
{/block}

{block name=header}
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
{/block}

{block name=content}
    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="{$conf->action_url}login" method="post">
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

    {include file='messages.tpl'}

{/block}
