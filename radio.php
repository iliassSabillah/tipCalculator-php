<?php 
	for($var = 10 ; $var < 21; $var = $var + 5) {
		echo "<label class='radio-inline'>
		<input type='radio' checked='". check_radio('tipPercentage')."' name='tipPercentage' value='".$var."'>".$var."%
		</label><br/>";
	}
?>
