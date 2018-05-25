<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Empezando JavaScript</title>
	<script type="text/javascript">
		function mostraralerta(){
			alert("Hizo Clic");
		}
		function hacerclic(){
			document.getElementsByTagName('input')[0].onclick = mostraralerta;
		}
		window.onload = hacerclic;
	</script>
</head>
<body>
	<div id="principal">
		<input type="button" name="Hacer clic" value="clic">
	</div>
</body>
</html>