<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<style>
			.container{
				width: 600px;
				margin: auto; 
				background-color: lightgrey;
				padding: 20px;
				border-radius: 7px;
			}
			form ul{ padding:0;}
			form li{ list-style: none;}
			form input[type=text],
			form textarea{ 
				margin-bottom: 1.5em;
				width: 100%;
				border-radius: 3px;
			}
			form textarea{ height: 300px;}
			label {display: block;}
		</style>
	</head>
	<body>
		<div class="container">
			<?php include($path); ?>
		</div>
	</body>
</html>
