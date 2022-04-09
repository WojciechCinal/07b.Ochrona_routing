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
            <p>Zadanie 7a. Kontroler  - role</p>
            <ul class="actions special">
                <li><a href="#one" class="button scrolly">Przejdź do kalkulatora</a></li>
            </ul>
        </div>
    </section>
{/block} 

{block name=content}

<div class="bottom-margin">
    <button><a href="{$conf->action_url}logout">wyloguj</a></button>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

    <section id="one" class="main style1">
        <div class="container">
            <header class="major special">
                <h2>Kalkulator</h2>
            </header>
            <section>
                <form action="{$conf->action_url}calcCompute" method="post">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <label for="kwota">Kwota kredytu: </label>
                            <input id="id_kw" type="text" name="kwota" value="{$form->kwota}" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_op">Oprocentowanie: </label>
                            <input id="id_op" type="text" name="oprocentowanie" value="{$form->oprocentowanie}" /><br />
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
                                {if $user->role == "admin"}
                                <option value="25r">25 lat</option>
                                {/if}
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="primary">Oblicz</button>
                        </div>
                    </div>
                </form>
            </section>

            {include file='messages.tpl'}

            <div class="messages">
                {if isset($res->rata)}
                    <h4>Rata</h4>
                    <p class="res">
                        {$res->rata}
                    </p>
                {/if}
            </div>
        </div>
    </section>

{/block}