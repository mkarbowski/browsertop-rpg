<?php
// Title:		Document Top
// Description:	Top of HTML documents
// Options:
//	$title - Text to appear in the <title> tag of the header.
//	$navLvl - Distance from root represented as linux parent directory call (i.e. "../").
// Author: 		David Hoyt
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta data -->
	<meta name="description" content="Web based table top for Dungeons and Dragons 3.5e." />
	<meta name="keywords" content="" />
	<meta name="author" content="David Hoyt, Mitch Karbowski" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- Title -->
	<title><?php echo $title; ?></title>
	<!-- jQuery Ready -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<?php include $navLvl."includes/ui/layer.php"; ?>
	<!-- Styles -->
	<?php include $navLvl."includes/styles.php"; ?>
</head>
<body>