<?php
		if(!empty($_POST)){
			$msg = "<p> Olá, eu sou o {$_POST['nome']}, tenho {$_POST['idade']}, etc. </p>";
			echo $msg;
			
		}