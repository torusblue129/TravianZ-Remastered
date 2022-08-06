<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      anleitung.php                                               ##
##  Edited by:     Torusblue129                                                ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     TravianZ (c) 2011 - All rights reserved                     ##
##  URLs:          http://travianca.x10.mx/                                    ##
##  Source code:   https://github.com/torusblue129/TravianZ-Remastered         ##
##                                                                             ##
#################################################################################
use App\Utils\AccessLogger;

include_once("GameEngine/config.php");
include_once("GameEngine/Database.php");
include_once("GameEngine/Lang/".LANG.".php");
AccessLogger::logRequest();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo SERVER_NAME; ?></title>
		<link rel="stylesheet" type="text/css" href="img/tutorial/main.css"/>
		<link rel="stylesheet" type="text/css" href="img/tutorial/flaggs.css"/>
		<meta name="content-language" content="en"/>
		<meta http-equiv="imagetoolbar" content="no"/>
		<script src="mt-core.js" type="text/javascript"></script>
		<script src="new.js" type="text/javascript"></script>
		<style type="text/css" media="screen"></style>
	</head>

	<body class="webkit contentPage">
		<div class="wrapper">
		<div id="country_select"></div>
		<div id="header">
			<h1>Welcome to <?php echo SERVER_NAME; ?></h1>
		</div>

		<div id="navigation">
			<a href="index.php" class="home"><img src="img/x.gif" alt="Travian"/></a>
				<table class="menu">
					<tr>
						<td><a href="tutorial.php"><span>遊戲教學</span></a></td>
						<td><a href="anleitung.php"><span>玩家指南</span></a></td>
						<td><a href="https://discord.gg/aADXs3bR" target="_blank"><span>遊戲論壇</span></a></td>
						<td><a href="index.php?signup"><span>登記帳號</span></a></td>
						<td><a href="index.php?login"><span>登入遊戲</span></a></td>
					</tr>
				</table>
		</div>

		<div id="content">
		<div class="grit">

		<h1>玩家指南</h1>
			<p class="submenu">
				<a href="anleitung.php">種族</a> |
				<a href="anleitung.php?s=1">建築物</a> |
				<a href="anleitung.php?s=3">常見問題</a> |
				<a href="anleitung.php?s=4">文明點</a>
			</p>

		<?php
		if(!isset($_GET['s'])) {
			$_GET['s'] = ""; }
			if ($_GET['s'] == "") {
				include("Templates/Anleitung/0.tpl"); }
				if ($_GET['s'] == "1") {
					include("Templates/Anleitung/1.tpl"); }
					if ($_GET['s'] == "3") {
						include("Templates/Anleitung/3.tpl"); }
						if ($_GET['s'] == "4") {
							include("Templates/Anleitung/4.tpl"); }
							?>

		<div class="footer"></div>

		<div id="iframe_layer" class="overlay"></div>
		<div class="mask closer"></div>

		<div class="overlay_content">
			<a href="index.php" class="closer"><img class="dynamic_img" alt="Close" src="img/un/x.gif" /></a>

		<div id="frame_box" >
			</div>
				<div class="footer"></div>
			</div>
		</div>
	</body>
</html>
