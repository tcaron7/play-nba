<?php
// On affiche la page (vue)
if($_GET['section'] == 'injuryDisplay')
{
	$injuries = getCurrentInjuries();
	include_once('view/injury/displayCurrentInjuries.php');
}
elseif($_GET['section'] == 'transactionDisplay')
{
	echo 'transaction';
	
    // include_once('view/game/recapPlayedGameStats.php');
}