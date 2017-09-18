<style type="text/css">
	.debug{
		background-color: #2980b9;
		border: 2px solid black;

	}
</style>

<?php 

ini_set('display_errors','1');
ini_set('error_reporting()',E_ALL);

 function my_var_dump ($var)
 {
 	echo "<pre class='debug'> ";
 	echo "<b>MY VAR DUMP</b></br>";
	var_dump($var);
	echo "</pre>";	
 }