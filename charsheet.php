<?php
$title	= "BrowserTop RPG - Character Sheet";
$navLvl	= "";
include $navLvl."includes/doc-top.php";
?>

<fieldset>
	<legend>Role playing details:</legend>

	<div class="line">
		<span id="name" class="item"><label>Character name:</label><span class="value">Stuff</span></span>
		<span id="player-name" class="item"><label>Player name:</label><span class="value"></span></span>
	</div>
	<div class="line">
		<span id="class-levels" class="item"><label>Class levels:</label><span class="value"></span></span>
		<span id="ecl" class="item"><label>ECL:</label><span class="value"></span></span>
		<span id="race" class="item"><label>Race:</label><span class="value"></span></span>
		<span id="gender" class="item"><label>Gender:</label><span class="value"></span></span>
	</div>
	<div class="line">
		<span id="alignment" class="item"><label>Alignment:</label><span class="value"></span></span>
		<span id="religion" class="item"><label>Religion/deity:</label><span class="value"></span></span>
	</div>
	<div class="line">
		<span id="size" class="item"><label>Size:</label><span class="value"></span></span>
		<span id="height" class="item"><label>Height:</label><span class="value"></span></span>
		<span id="weight" class="item"><label>Weight:</label><span class="value"></span></span>
	</div>
	<div class="line">
		<span id="looks" class="item"><label>Looks:</label><span class="value"></span></span>
	</div>

</fieldset>

<fieldset>
	<legend>Ability scores:</legend>

	<table>
		<tr class="hor">
			<th width="16%">&nbsp;</th>
			<th width="14%">Total</th>
			<th width="14%">Base score +<br />racial mod</th>
			<th width="14%">Enhancement<br />bonus</th>
			<th width="14%">Miscellaneous<br />bonuses</th>
			<th width="14%">Miscellaneous<br />penalties</th>
			<th width="14%">Modifier</th>
		</tr>
		<tr>
			<th>Strength (STR)</th>
			<td id="str-total"><span class="value"></span></td>
			<td id="str-base"><span class="value"></span></td>
			<td id="str-enhance"><span class="value"></span></td>
			<td id="str-misc-bonus"><span class="value"></span></td>
			<td id="str-misc-pen"><span class="value"></span></td>
			<td id="str-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Dexterity (DEX)</th>
			<td id="dex-total"><span class="value"></span></td>
			<td id="dex-base"><span class="value"></span></td>
			<td id="dex-enhance"><span class="value"></span></td>
			<td id="dex-misc-bonus"><span class="value"></span></td>
			<td id="dex-misc-pen"><span class="value"></span></td>
			<td id="dex-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Constitution (CON)</th>
			<td id="con-total"><span class="value"></span></td>
			<td id="con-base"><span class="value"></span></td>
			<td id="con-enhance"><span class="value"></span></td>
			<td id="con-misc-bonus"><span class="value"></span></td>
			<td id="con-misc-pen"><span class="value"></span></td>
			<td id="con-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Inteligence (INT)</th>
			<td id="int-total"><span class="value"></span></td>
			<td id="int-base"><span class="value"></span></td>
			<td id="int-enhance"><span class="value"></span></td>
			<td id="int-misc-bonus"><span class="value"></span></td>
			<td id="int-misc-pen"><span class="value"></span></td>
			<td id="int-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Wisdom (WIS)</th>
			<td id="wis-total"><span class="value"></span></td>
			<td id="wis-base"><span class="value"></span></td>
			<td id="wis-enhance"><span class="value"></span></td>
			<td id="wis-misc-bonus"><span class="value"></span></td>
			<td id="wis-misc-pen"><span class="value"></span></td>
			<td id="wis-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Charisma (CHA)</th>
			<td id="cha-total"><span class="value"></span></td>
			<td id="cha-base"><span class="value"></span></td>
			<td id="cha-enhance"><span class="value"></span></td>
			<td id="cha-misc-bonus"><span class="value"></span></td>
			<td id="cha-misc-pen"><span class="value"></span></td>
			<td id="cha-mod"><span class="value"></span></td>
		</tr>

</fieldset>

<?php include $navLvl."includes/doc-bot.php"; ?>