<?php
$title	= "BrowserTop RPG - Character Sheet";
$navLvl	= "";
include $navLvl."includes/doc-top.php";
?>

<div class="lt-paper">

<fieldset>
	<legend>Role playing details</legend>

	<div class="line">
		<span id="name" class="item"><label>Character name:</label><span class="value">Eddard Stark</span></span>
		<span id="player-name" class="item"><label>Player name:</label><span class="value">David Hoyt</span></span>
	</div>
	<div class="line">
		<span id="class-levels" class="item"><label>Class levels:</label><span class="value">Fighter 6</span></span>
		<span id="ecl" class="item"><label>ECL:</label><span class="value">6</span></span>
		<span id="race" class="item"><label>Race:</label><span class="value">Human</span></span>
		<span id="gender" class="item"><label>Gender:</label><span class="value">Male</span></span>
	</div>
	<div class="line">
		<span id="alignment" class="item"><label>Alignment:</label><span class="value">LG</span></span>
		<span id="religion" class="item"><label>Religion/deity:</label><span class="value">Old Gods</span></span>
	</div>
	<div class="line">
		<span id="size" class="item"><label>Size:</label><span class="value">Med</span></span>
		<span id="height" class="item"><label>Height:</label><span class="value">6'1"</span></span>
		<span id="weight" class="item"><label>Weight:</label><span class="value">180 lbs</span></span>
	</div>
	<div class="line">
		<span id="looks" class="item"><label>Looks:</label><span class="value">Old and grizzled</span></span>
	</div>

</fieldset>

<fieldset>
	<legend>Ability scores</legend>

	<table>
		<tr class="hor">
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>Modifier</th>
		</tr>
		<tr>
			<th>Strength (STR)</th>
			<td id="str-formula"><span class="formula"></span></td>
			<td id="str-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Dexterity (DEX)</th>
			<td id="dex-formula"><span class="formula"></span></td>
			<td id="dex-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Constitution (CON)</th>
			<td id="con-formula"><span class="formula"></span></td>
			<td id="con-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Inteligence (INT)</th>
			<td id="int-formula"><span class="formula"></span></td>
			<td id="int-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Wisdom (WIS)</th>
			<td id="wis-formula"><span class="formula"></span></td>
			<td id="wis-mod"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Charisma (CHA)</th>
			<td id="cha-formula"><span class="formula"></span></td>
			<td id="cha-mod"><span class="value"></span></td>
		</tr>
	</table>

</fieldset>

<fieldset>
	<legend>Armor class</legend>

	<table>
		<tr>
			<th>Total AC</th>
			<td id="ac-formula"><span class="formula">
				<span id="ac-total">
					<span class="element">
						<span class="value">15</span><label><br/>Total</label>
					</span>
				</span><!-- id="ac-total" -->
				<span id="ac-base">
					<span class="operator">=</span>
					<span class="element">
						<span class="value">10</span>
					</span>
				</span><!-- id="ac-base" -->
				<span id="ac-armor-bonus">
					<span class="operator">+</span>
					<span class="element">
						<span class="value">5</span><label><br/>Armor<br />bonus</label>
					</span>
				</span><!-- id="ac-armor-bonus" -->
			</span></td>
		</tr>
		<tr>
			<th>Touch AC</th>
			<td id="ac-touch"><span class="value"></span></td>
		</tr>
		<tr>
			<th>Flat-footed AC</th>
			<td id="ac-flat-footed"><span class="value"></span></td>
		</tr>
	</table>

</fieldset>

<fieldset>
	<legend>Saving throws</legend>

	<table>
		<tr>
			<th><span class="element">Fortitude<label><br />(constitution)</label></span></th>
			<td id="fort-formula"><span class="formula"></span></td>
		</tr>
		<tr>
			<th><span class="element">Reflex<label><br />(dexterity)</label></span></th>
			<td id="-formula"><span class="formula"></span></td>
		</tr>
		<tr>
			<th><span class="element">Will<label><br />(wisdom)</label></span></th>
			<td id="-formula"><span class="formula"></span></td>
		</tr>
	</table>

</fieldset>

</div>

<?php include $navLvl."includes/doc-bot.php"; ?>