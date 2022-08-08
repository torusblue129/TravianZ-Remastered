<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      spielregeln.php                                             ##
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
		<div id="country_select">
		</div>
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

	<h1>玩家守則</h1>

	<p class="submenu"><strong>任何擁有遊戲帳號密碼的玩家都應遵守Travian遊戲規則及服務條款。在確認帳號註冊後，即視為同意並承諾遵守本 規章。</strong><br><br>
	<ul class="rules">
		<li><strong style="color: #2A720B">§1密碼，註冊及帳號擁有權</strong><br>
	<ul>
	<li><strong style="color: #3BAE18">§1.1 註冊</strong><br>
	玩家在同一個伺服器中只允許註冊一個遊戲帳號。使用者註冊時使用的電子郵寄地址必須只屬於玩家個人使用，註冊時使用的電子郵件的擁有者將無條件被視作遊戲   帳號的擁有者。任何兩個玩家之間私下訂立的協議都不被考慮在內。帳號擁有者將對帳號的所有行為活動負全責。無論任何情況下，玩家不能在同一伺服器註冊多個  帳號進行遊戲，此類情況將視為多帳號行為。
	</li>
	<li><strong style="color: #3BAE18">§1.2 密碼</strong><br>
	密碼標誌著帳號的使用權。玩家帳號使用的密碼不得以任何理由給予同一伺服器中的另外一個玩家。若玩家將密碼透露給第三者，意味著將帳號的使用權也轉讓給了 第三者，由此產生的帳號損失不會得到任何賠償。<br><br>
	將密碼給予不同伺服器的玩家（或其他未在同一伺服器註冊travian遊戲的人）以便多人共同使用同一帳號是可接受的，並不違反遊戲規則。<br><br>
	任何知道密碼的人對帳號進行操作時遭到的損失都不會得到任何賠償。另外，由於密碼過於簡單，使其極易被破解或猜測出來而造成的帳號損失，玩家無權要求任何 賠償。<br><br>
	如果因為帳號被盜，由此造成玩家（帳號）的損失，除非因為伺服器被入侵而導致玩家帳號資料被修改，否則玩家都不會得到來自 <?php echo SERVER_NAME; ?> 管理團隊任何形式 的賠償。<br><br>
	被盜帳號的持有人若有需要通過法律途徑向盜取帳號者索取賠償，我們將會配合有關方面進行調查，提供相關資料，例如登入者的IP記錄等。<br><br>
	代管必須使用代管的設置程式，不能使用帳號原密碼進行登錄，詳情參見§2。<br><br>
	多人共用多個帳號，且直接以帳號密碼登入，亦以多重帳號處理。
	</li>
	<li><strong style="color: #3BAE18">&sect;1.3 Email changes / account transfers</strong><br />
	In order to change the email address of your account or to transfer your account to another player NOT playing on the same server, go into your account profile (/spieler.php?s=3) and fill out the new email information.
	</li>
	<li><strong style="color: #3BAE18">&sect;1.4 Switching accounts</strong><br />
	In order to switch an account with a person on the same game world, both persons must send an e-mail message to admin@travian.com from the e-mail address currently registered for the account. The e-mail must contain the following information:
	<ol>
	<li>The game world on which the account resides</li>
	<li>The nickname of the account</li>
	<li>The e-mail address of the new owner. </li>
	</ol>
	Afterwards both persons must request the password for their new account via the password retrieval function.
	</li>
	</ul>
	</li>
	<li><strong style="color: #2A720B">&sect;2 Sitting &amp; same pc usage</strong><br />
	<ul>
	<li><strong style="color: #3BAE18">&sect;2.1 Sitting</strong><br />
	Every player has the right to name two sitters who may play the account during an owner's absence. Sitters must play the account they are sitting to the account�s full benefit. Abuse of this function is punishable.
	<br />
	The sitter of an account must sit the account using the account sitting function in game. The sitter of an account may not tend to an account by logging on with the password of the account they are sitting (see &sect;1.2).
	<br />
	There is no compensation for damages done by a sitter. Owners of an account are fully responsible for the actions of any sitters for their account. In the event that sitters of an account do not follow these rules and the General Terms and Conditions of Travian, both the account owner and the sitter may be punished.
	</li>
	<li><strong style="color: #3BAE18">&sect;2.2 Same pc usage</strong><br />
	Players using the same computer and wanting to access each other's account must use the sitter function.
	</li>
	</ul>
	</li>
	<li><strong style="color: #2A720B">&sect;3 Use of externals</strong><br />
	The game must be played with an unmodified internet browser. The use of scripts or bots which automate is against the rules.
	</li>
	<li><strong style="color: #2A720B">&sect;4 Program errors</strong><br />
	Program errors (also called bugs) may not be used to one's benefit. Abuse can lead to a punishment of the account.
	</li>
	<li><strong style="color: #2A720B">&sect;5 Money transactions</strong><br />
	Any sales or purchases concerning real money regarding accounts, units, villages, resources, services or any other aspect of Travian are impermissible. The sale of Travian accounts as well as any indirect transfer (even as gifts) in connection with auction sites or other money transactions is impermissible.
	</li>
	<li><strong style="color: #2A720B">&sect;6 Netiquette</strong><br />
	Everyone must communicate in a polite, conversational tone. Multihunters may change inappropriate profiles and village names without warning.
	<ol>
	<li>Following behavior is punishable and applies to all descriptions, the account name, alliance names, village names and messages: <br />
	English is the only official language tolerated.
	<br />
	Participation in abusive, defamatory, sexist, racist or profane language; disparaging any religion, race, nation, gender, age group, or sexual orientation; threatening persons with actions in real life.
	<br />
	Posting or transmission of any material not suitable for underage persons.
	<br />
	Blackmailing players in a way that violates any of Travian's rules respective the general terms and conditions.
	<br />
	Displaying battle reports or messages in public without consent of both concerned persons.
	</li>
	<li>No real world politics are allowed in names, messages and descriptions. </li>
	<li>Impersonation of officials or official positions is illegal in any way.
	</li>
	<li>Advertisement of any kind that has not been permitted by the Travian Team is impermissible. </li>
	</ol>
	</li>
	<li><strong style="color: #2A720B">&sect;7 Punishments</strong><br />
	If there is an offence against these game rules, the Multihunters and, if necessary, the Administrators will ban the account(s) in question and decide on a proper punishment. Punishments will always exceed the gain of the violation of the rules.
	<br />
	Resources, buildings, villages or troops lost during the time of suspension do not count as punishment and will not be replaced by the Travian Team. No player has the right to claim payment or replacement for Plus/Gold time lost due to suspension.
	<br />
	here is no special treatment for Travian Plus/Gold users regarding the game rules neither in the time needed to deal with the case nor in the punishment.
	<br /><br />
	Players may talk to the Multihunter who banned them or an Administrator either via IGM (ingame message) or e-mail. Bans, punishments or deletions are not to be discussed in public (e.g. Chat or Forums). Appeals must be written in English.
	<br />
	Additionally, the Travian Team will not provide information to persons other than the account owner.
	<br /><br />
	Multi accounts on the speed server and multi accounts with less than 100 population may be deleted on sight with no warning.
	</li>
	<li><strong style="color: #2A720B">&sect;8 Changing of rules</strong><br />
	The Travian Team reserves the right to change the rules at any time.
	</li>
	<li><strong style="color: #2A720B">&sect;9 Correction clause</strong><br />
	If individual regulations of this set of rules should be ineffective, it does not affect the validity of the remaining regulations of this set of rules. The Administrators commit themselves to replace ineffective regulations with new regulations which replace the ineffective regulations as fast as possible.
	</li>
	</ul>
		</div>

<div class="footer"></div>

</div>

</div>

<div id="iframe_layer" class="overlay">



<div class="mask closer"></div>







<div class="overlay_content">

<a href="index.php" class="closer"><img class="dynamic_img" alt="Close" src="img/un/x.gif" /></a>

<h2>Anleitung</h2>



<div id="frame_box" >

</div>

<div class="footer"></div>

</div>



</div>




</body>
</html>
