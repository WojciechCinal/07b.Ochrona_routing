{if $msgs->isError()}
    <div class="messages">
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
    </div>
{/if}
{if $msgs->isInfo()}
<div class="messages">
        <h4>Informacje: </h4>
	<ol>
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>

    </div>
{/if}