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

	<p class="submenu"><strong>任何擁有遊戲帳號密碼的玩家都應遵守Travian遊戲規則及服務條款。在確認帳號註冊後，即視為同意並承諾遵守本規章。</strong><br><br>
	<ul class="rules">
		<li><strong style="color: #2A720B">§1密碼，註冊及帳號擁有權</strong><br>
	<ul>
		<li><strong style="color: #3BAE18">§1.1 註冊</strong><br>
			玩家在同一個伺服器中只允許註冊一個遊戲帳號。使用者註冊時使用的電子郵寄地址必須只屬於玩家個人使用，註冊時使用的電子郵件的擁有者將無條件被視作遊戲帳號的擁有者。任何兩個玩家之間私下訂立的協議都不被考慮在內。帳號擁有者將對帳號的所有行為活動負全責。無論任何情況下，玩家不能在同一伺服器註冊多個帳號進行遊戲，此類情況將視為多帳號行為。
		</li>
		<li><strong style="color: #3BAE18">§1.2 密碼</strong><br>
			密碼標誌著帳號的使用權。玩家帳號使用的密碼不得以任何理由給予同一伺服器中的另外一個玩家。若玩家將密碼透露給第三者，意味著將帳號的使用權也轉讓給了第三者，由此產生的帳號損失不會得到任何賠償。<br><br>
			將密碼給予不同伺服器的玩家（或其他未在同一伺服器註冊 <?php echo SERVER_NAME; ?> 遊戲的人）以便多人共同使用同一帳號是可接受的，並不違反遊戲規則。<br><br>
			任何知道密碼的人對帳號進行操作時遭到的損失都不會得到任何賠償。另外，由於密碼過於簡單，使其極易被破解或猜測出來而造成的帳號損失，玩家無權要求任何賠償。<br><br>
			如果因為帳號被盜，由此造成玩家（帳號）的損失，除非因為伺服器被入侵而導致玩家帳號資料被修改，否則玩家都不會得到來自 <?php echo SERVER_NAME; ?> 管理團隊任何形式的賠償。<br><br>
			被盜帳號的持有人若有需要通過法律途徑向盜取帳號者索取賠償，我們將會配合有關方面進行調查，提供相關資料，例如登入者的IP記錄等。<br><br>
			代管必須使用代管的設置程式，不能使用帳號原密碼進行登錄，詳情參見§2。<br><br>
			多人共用多個帳號，且直接以帳號密碼登入，亦以多重帳號處理。
		</li>
		<li><strong style="color: #3BAE18">§1.3 帳號轉讓</strong><br>
			帳號轉讓必須通過以下程序來完成：
		</li>
		<ul><li>或，帳號的原始擁有者使用註冊時所填寫的電子郵箱發送一封申請信至 admin@travianca.x10.mx，郵件中應包含以下內容：<ul>
			<li>帳號所在的伺服器</li>
			<li>玩家的用戶名</li>
			<li>帳號新擁有者的電郵地址</li>
		</ul></ul>
		如果要與同一伺服器內的玩家交換帳號，帳號出讓者和帳號獲取者都需要進行以上的郵箱確認程序並且使用取回密碼功能獲取新的密碼。除此之外禁止一切帳號轉讓和交易。</li>
		<li><strong style="color: #3BAE18">§1.4 帳號刪除</strong><br>
		準備刪除或正在刪除階段的帳號，也必須遵守所有遊戲規則。<br><br>
		系統將定期刪除長期封鎖或未上線的帳號。<br><br>
		帳號刪除後，帳號先前剩餘的服務均不予退還。扣除遊戲贈送及補償的金幣後，餘下的金幣可轉移至同地區的各伺服器。<br><br>
		<span style="text-decoration:underline;">密碼，註冊及帳號擁有權條例補充：</span>
		<ul><li>玩家在一個伺服器中只允許註冊/使用一個遊戲帳號。同時，每一個帳號只能有一個擁有者，就算是您的親人、朋友、同學，如果他們已持有同一伺服器內的帳號，都是不能直接使用您的帳號。使用超過一個帳號是嚴格禁止的，而且會導致您的帳號被永久封鎖。任何玩家都沒有任何理由去擁有兩個以上的帳號。</li>
			<li>如果因為您自己的舉動導致紀錄混亂，因而被MH封鎖，您必須為自己的行為負責。</li>
			<li>在使用新的帳號前，請先將舊的帳號完全「刪除」，或是將原先的帳號轉讓（轉讓條款請參見玩家守則1.3），否則，會以多重帳號處理。</li>
			<li>所有相近或刻意造成不同之帳號名稱、電郵註冊地址的帳號，並在同一電腦上使用，將視為「多重帳號」處理。</li>
			<li>如果不同帳號的帳密相同，加上在同一電腦上使用，將視為「多重帳號」處理。任何「不知情」、「公用帳密」均不接納為辯解理由，請使用安全度較高之帳號密碼。此例包括於跟據§1.2「由於密碼過於簡單，使其極易被破解或猜測出來而造成的帳號損失，玩家無權要求任何賠償。」</li>
			<li>當您有任何行為可能會產生多重帳號的情況下，最好事先通知MH(訊息請注明報備)。</li>
			<li>玩家須自行保管有關註冊的資訊，無論MH或是官方人員都不會提供任何有關註冊的資料。</li>
		</ul></li>
		<li><strong style="color: #2A720B">§2 代管及公用電腦設置</strong><br>
			<ul>
				<li><strong style="color: #3BAE18">§2.1 代管</strong><br>
					每個玩家有權設定2個臨時代管人--在玩家不在的時候幫助管理自己的帳號。代管人必須保證其代管帳號在代管期間發生的行為都基於此帳號的獨立利益。代管人無法使用金幣功能（電腦商人1對1交易資源及高級建築師功能除外）、無法更改個人資料、不可以選擇攻擊選項中的普通/偵察、不能使用衝撞車、投石車、族長、參議員和司令官來進行攻擊。<br><br>
					在帳號被代管期間由代管人操作引起的所有損失，都不會得到賠償，每個玩家必須自己為自己的代管者負責。當代管者在代管期間有違反遊戲規則及通常條款的行為 時，違規的帳號將受到相應懲罰，一切後果由帳號持有人承擔。<br><br>
					對一個帳號進行代管，玩家必須使用遊戲內的代管功能進行帳號的使用（使用被代管帳號的用戶名及代管者自己的帳戶密碼）。直接使用所代管帳號的原始密碼登陸 遊戲是不被允許的，有關帳號將被視為多重帳號。（參見規則§1.2）<br><br>
					帳號代管期不能超過兩個星期，長期的代管狀態是不被允許的。如帳號擁有者事先能預知帳號的長期閒置而需要他人長期代管，則必須在代管狀態開始前先向 admin@travianca.x10.mx 進行彙報。當 admin@travianca.x10.mx 同意後才能設置長期代管關係；在代管期結束後必須立即解除代管關係。
				</li>
				<li><strong style="color: #3BAE18">§2.2 在公用電腦上使用</strong><br>
					如果兩個或更多個玩家長期在同一台電腦上於同一伺服器中進行遊戲，則必須依資源運輸的限制操作。互相操作對方帳號必須使用代管功能。
				</li>
				<span style="text-decoration:underline;">代管及公共電腦設置條例補充</span>
					<ul><li>代管期不能超過2個星期的說明：
					<ul><li>代管2星期上限者，定義為14天內只交人代管而沒有獨立上線紀錄、或每天平均上線時間不足五分鐘者，判為長期代管。</li>
					<li>官方有理由相信其原持有人已沒有再進行遊戲，而令另一帳號持有人同時獨管一個或以上帳號。加上在長期代管期間有大量資源交易者，以多重帳號處理。</li>
					<li>MH有權先行封鎖長期代管之帳號，如原持有人需要解封，須以登記電郵向 admin@travianca.x10.mx 證實其使用權再於無處分下解封。</li>
					<li>如原持有人一直有獨立之使用其帳號，一般不須每2星期設定代管關係一次，可長期設定合適之代管人不用更改。</li>
					<li>請注意：設定代管關係後，請依照守則之限制操作可登入之帳號。</li>
					</ul></li>
					<li style="color:#ff0000;font-weight:bold;">為避免有關功能被濫用，同機直接使用帳密登入的帳號有以下的操作限制：
					<ul><li>注意1：同機帳號間，在同機使用時期起至沒有同機登入後的7天內，不可互相增援</li>
					<li>注意2：同機帳號間，在同機使用時期起至沒有同機登入後的7天內，不可互相攻擊、搶奪，亦禁止攻擊、搶奪同一玩家目標。(世界奇觀除外)</li>
					<li>注意3：如帳號並非以帳密直接登入在同機使用（即以代管方式登入），可以互相增援。但代管間不可互相攻擊、搶 奪，亦禁止攻擊、搶奪同一玩家目標。(世界奇觀除外)</li>
					</ul></li>
					<li>為免被惡意引用條例，如果玩家發現被不認可的玩家設為代管人，請勿登入有關帳號及立即向MH回報，則回報帳號並不會被代管條例規管。如果被發現有登入有關帳號的紀錄，則視為一般情況處理，一切友好攻擊及資源交易均須依守則限制。</li>
					<li>官方將詳細查看同機登入帳號的登入情況，例如只是在個別情況有同機現象，而又有在其他地方有長期的穩定獨立使用。類似的情況可視為在公用地方上網或在學校的公用電腦，一般而言，有關情況不會以多重處理或限制送資、攻擊等行為。亦可不受上列情況限制。</li>
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
