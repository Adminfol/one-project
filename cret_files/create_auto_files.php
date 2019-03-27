<?php
echo '<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">';
echo '<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/style.css">';
echo '<body style="width:100%;border:1px solid black;margin:0px;display:flex;justify-content:space-around;align-items:center;flex-direction:column;">
<form action="index.php" method="post">
<input style="font-size:27px;padding:5px;" type="submit" name="submit" value="Reset all files"></input>
</form>
<script src="script/script.js"></script>
<script type="text/javascript">
setInterval(function(){
	document.getElementsByTagName("body")[0].style.height=innerHeight+"px";
}, 777);
</script>
</body>';
if(isset($_POST["submit"])){
	$files = fopen("index.php", "w");
	fwrite($files, '<html>
    <head>
	<title>Page title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>

<script src="script/script.js"></script>
    </body>
	</html>');
	fclose($files);
	$file = fopen("style/style.css", "w");
	fwrite($file, '*{word-break:break-word;}
body{margin:0px;width:100%;}
/*Текст был автомотически добавлен*/');
	fclose($file);
	$fil = fopen("script/script.js", "w");
	fwrite($fil, 'window.onload=function(){
	alert("Текст был успешно добавлен.");
}');
	fclose($fil);
}
?>