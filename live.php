<!DOCTYPE html>
<html lang="sr">
<?php
include('tekstovi.php');
?>
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php echo _T('Naslov sajta'); ?> - пренос уживо</title>
	<meta name="description" content="<?php echo _T('Opis sajta'); ?>">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">

	<style>
		html, body {
			margin: 0;
			padding: 0;
			background-color: black;
		}

		#container {
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			margin: auto;
			width: 640px;
			height: 385px;
		}
	</style>
</head>

<body>
	<div id="container">
		<iframe src="http://cdn.maksnet.tv/embed/livetv01/?streamname=konsek&width=640&height=385" width="640" height="385" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"></iframe>
	</div>
</body>
</html>
