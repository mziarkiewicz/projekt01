<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form style="margin: 20px; padding: 10px 10px 10px 10px; border-radius: 5px; background-color: #c8c8c8; width:300px;" action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_val">Kwota kredytu: </label>
	<input id="id_val" type="text" name="amo" value="<?php print(isset($amo) ? $amo : '' ); ?>" /><br />
	<label for="id_yr">Liczba lat: </label>
    <input id="id_yr" type="text" name="yr" value="<?php print(isset($yr) ? $yr : '' ); ?>" /><br />
	<label for="id_pct">Oprocentowanie: </label>
	<input id="id_pct" type="text" name="pct" value="<?php print(isset($pct) ? $pct : '' ); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
//	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #ff9c95; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
//}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ffff67; width:300px;">
<?php echo 'Wynik: '.number_format($result, 2,'.',''); ?>
</div>
<?php } ?>

</body>
</html>