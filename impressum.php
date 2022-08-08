<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      impressum.php                                               ##
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
					<td><a href="tutorial.php"><span><?php echo $lang['index'][0][2]; ?></span></a></td>
					<td><a href="anleitung.php"><span><?php echo $lang['anleitung']; ?></span></a></td>
					<td><a href="<?php echo $lang['forumlink']; ?>" target="_blank"><span><?php echo $lang['forum']; ?></span></a></td>
					<td><a href="?signup" class="signup_link mark"><span><?php echo $lang['register']; ?></span></a></td>
					<td><a href="?login" class="login_link"><span><?php echo $lang['login']; ?></span></a></td>
				</tr>
			</table>
		</div>

		<div id="content">
		<div class="grit">
			<h1>關於我們</h1>
			<p class="submenu">
				Travian Games GmbH<br>
				Wilhelm-Wagenfeld-Strabe 22<br>
				80807 Munchen<br>
				Germany<br><br>
				<b>管轄權：</b><br>
				Amtsgericht Munchen, HRB 173511<br>
				Ust-IdNr. DE 246258085<br>
				CEO: Florian Bohn<br>
				Phone: 004989/32 49 15 93 8 (非遊戲支援)<br>
				Fax: 004989/32 49 15 97 3 (美金繳費 plus support only)<br><br>
				<b>電郵：</b><br>
				一般查詢：
				<script language="JavaScript"><!--
				var name = "admin";
				var domain = "travianca.x10.mx";
				document.write("<a href=\"mailto:" + name + "@" + domain + "\"><span class=\"t\">");
				document.write(name + "@" + domain + "</span></a>");
				// --></script>
				<br>
				遊戲支援：
				<script language="JavaScript"><!--
				var name = "support";
				var domain = "travianca.x10.mx";
				document.write("<a href=\"mailto:" + name + "@" + domain + "\"><span class=\"t\">");
				document.write(name + "@" + domain + "</span></a>");
				// --></script>
				<br>
				Travian PLUS支援：
				<script language="JavaScript"><!--
				var name = "plus";
				var domain = "travianca.x10.mx";
				document.write("<a href=\"mailto:" + name + "@" + domain + "\"><span class=\"t\">");
				document.write(name + "@" + domain + "</span></a>");
				// --></script>
				<br><br>
				<b>Youth protection officer:</b><br>
				Rechtsanwalt Dr. Andreas Lober<br>
				Schulte Riesenkampff Rechtsanwaltsgesellschaft mbH<br>
				<script language="JavaScript"><!--
				var name = "jugendschutz";
				var domain = "traviangames.com";
				document.write("<a href=\"mailto:" + name + "@" + domain + "\"><span class=\"t\">");
				document.write(name + "@" + domain + "</span></a>");
				// --></script>
				<br>
				<br>
				<b>Data protection officer:</b><br>
				Robin Houben<br>
				<script language="JavaScript"><!--
				var name = "privacy";
				var domain = "traviangames.com";
				document.write("<a href=\"mailto:" + name + "@" + domain + "\"><span class=\"t\">");
				document.write(name + "@" + domain + "</span></a>");
				// --></script>
				<br><br>
				<b>要求協助的同時，請務必要寫上您所在的伺服器及玩家名稱。</b>
				<br><br>
				All rights to texts, graphics and source codes are held by Travian Games GmbH.
				Travian is a registered trade mark of Travian Games GmbH.
			</p>
		</div>

		<div id="footer">
        <div class="container">
            <a href="#" class="logo"><img src="img/x.gif" alt="Travian Games" class="logo_traviangames" /></a>
            <ul class="menu">
                <li><a href="anleitung.php?s=3">FAQ</a>|</li>
                <li><a href="index.php?screenshots">遊戲畫面</a>|</li>
                <li><a href="spielregeln.php">玩家守則</a>|</li>
                <li><a href="agb.php">服務條款</a>|</li>
                <li><a href="impressum.php">關於我們</a></li>
                <li class="copyright">&copy; 2010 - <?php echo date('Y') . ' ' . (defined('SERVER_NAME') ? SERVER_NAME : 'TravianZ');?> All rights reserved</li>
            </ul>
        </div>
    </div>
	</body>
</html>
