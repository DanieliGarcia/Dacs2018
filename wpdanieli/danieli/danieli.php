<!DOCKTYPE html>
<html>
<head>
	<meta meta charset= "utf-8">
	<title> Danieli/</title>
	<style type="text/css">
		.imagem img {
			width: 500px;
			height: auto;
		}
	</style>

</head>

<body>

<?php
$rand = (string) rand(1,128);
//var_dump($rand);
$image_rand = "images/imagem%20(".$rand.").jpeg";

?>

<div class="imagem">
<a href="<php echo $image_rand;?>" target="blank"> <img src="<?php echo $image_rand; ?>" /> </a>
</div>

</body>
</html>
