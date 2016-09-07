<?php
if(!strstr($_SERVER['SERVER_NAME'], "yerich.net")) {
	header("Location: http://www.yerich.net".$_SERVER['REQUEST_URI']);
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<title>Richard Ye / <?php echo $_PAGETITLE ?></title>

	<link rel="stylesheet" type="text/css" href="/style.css" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link href="/scripts/lightbox.css" rel="stylesheet" />

	<script type="text/javascript" src="/jquery.js"></script>
	<script type="text/javascript" src="/main.js"></script>
	<script type="text/javascript" src="/scripts/lightbox.js"></script>
	<?php echo $_HEADCONTENT ?>
</head>

<body class="<?php echo $_BODYCLASS ?>">

<div id="wrapper">
    <div id="nav">
        <strong><a href="/">Richard Ye</a>:</strong> <a href="/projects/">Projects</a>
    </div>
	<div id="content">
		<div id="main">
			<?php if (!$_NOH1) { ?>
			<h1 id="pagetitle"><?php echo $_PAGETITLE ?></h1>
			<?php } ?>