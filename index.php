<?php include_once 'minifyCSS.class.php' ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Minify CSS</title>
	<link rel="stylesheet" type="text/css" href="<?php minifyCSS::minify(array('normalize.css', 'style.css')) ?>" />
</head>
<body>

	<h1 class="title">Minify CSS</h1>
	<h2>Title</h2>
	
</body>
</html>