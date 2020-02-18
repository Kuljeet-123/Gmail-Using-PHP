<?php
$img=scandir("ImagesAdv");
array_shift($img);
array_shift($img);
$randimg=array_rand($img);
?>
<html>
<head>
<style>
#testing {
	position: absolute;
	left: 0px;
	top: 0px;
}
</style>
<meta charset="utf-8" http-equiv="refresh" content="5">
<title>Untitled Document</title>
</head>

<body>
<img src="ImagesAdv/<?php echo $img[$randimg]; ?>" width="100%" height="588" id="testing"/>
</body>
</html>
