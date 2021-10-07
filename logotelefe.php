<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<style type="text/css">
#te {
	background-color: blue;
	color: white;
	margin: 10px;
	float: left;
	width: 200px;
	height: 200px;
	text-align: center;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: xx-large;
	border-radius: 100px;
	border-width: 50px;
}
#le {
	background-color: green;
	color: white;
	margin: 10px;
	float: left;
	width: 200px;
	height: 200px;
	text-align: center;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	border-radius: 100px;
	font-size: xx-large;
	border-width: 50px;
}
#fe {
	background-color: red;
	color: white;
	margin: 10px;
	float: left;
	width: 200px;
	height: 200px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: xx-large;
	text-align: center;
	border-radius: 100px;
	border-width: 50px;
}
</style>
</head>

<body>
	<p id="te">TE</p>
    <p id="le">LE</p>
    <p id="fe">FE</p>
    <script type="text/javascript">
		$("p").click(function(){
			$(this).fadeOut("slow");
			
		});
	</script>
</body>
</html>