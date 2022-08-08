<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.07                                                  ##
##  Filename:      agb.php                                                     ##
##  Developed by:  ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
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

    <h1>服務條款</h1>
    <p>Terms of Use:<br><br>
      <a href="/Travian_EN_Terms.pdf" target="_blank">General Terms and Conditions Travian Games GmbH</a><br><br>
      <a href="/Travian_EN_Privacy.pdf" target="_blank">Privacy Policy</a><a name="buy"></a>
      <p class="f16">購買Travian <b><font color="#71d000">P</font><font color="#ff6f0f">l</font><font color="#71d000">u</font><font color="#ff6f0f">s</font></b> 金幣須知</p>
      <p>§ 誰在提供Travian <b><font color="#71d000">P</font><font color="#ff6f0f">l</font><font color="#71d000">u</font><font color="#ff6f0f">s</font></b> 金幣（「金幣」）服務？</p>
        <ul>
          <li>所有金幣服務都由Travian Games GmbH直接提供。</li>
        </ul>
      <p>§ 誰擁有金幣的使用權？</p>
        <ul>
          <li>只有帳號擁有人擁有該帳號內的金幣使用權。</li>
          <li>我們會根據帳號登記電郵地址資料來確認帳號的擁有權。</li>
        </ul>
      <p>§ 可以把金幣轉移到其他帳號嗎？</p>
        <ul>
          <li>金幣只能被轉移到<b>同一個地區內</b>伺服器的帳號。</li>
          <li>金幣亦只能被轉移到其他<b>單一帳號</b>內。</li>
          <li>需要轉移金幣的帳號內，必須<b>最少成功購買一次</b>金幣才能進行金幣轉移，並需要<b>刪除已購買金幣的帳號</b>，詳情請參閱遊戲世界內左邊選單「Travian Plus」＞「常見問題」內「我可以轉移帳號內的金幣到其他帳號嗎？」的內容及轉移程序細則。</li>
        </ul>
      <p>§ 金幣會否過期？</p>
        <ul>
          <li>若然同區內有其他伺服器，您必須在伺服器完結後<b>六個月內</b>，把金幣<b>轉移</b>到其他同區的伺服器或同一個伺服器重開後的帳號內，否則將會全部作廢。</li>
          <li>若然已完結的伺服器<b>不重開</b>，及同區在六個月內<b>不會開放其他伺服器</b>的話，金幣即在伺服器完結的那刻全部作廢。</li>
        </ul>
      <p>§ 餘下金幣可否退回現金或其他相同價值的物品？</p>
        <ul>
          <li>抱歉，所有已經購買的金幣均<b>不設退款服務</b>，並請於到期日前全數使用或轉移，否則過期的金幣將會全部作廢。</li>
        </ul>
      <p>§ 有關購買收據</p>
        <ul>
          <li>請玩家在繳費後必須保留有關收據以作憑證，例如信用卡月結單、銀行轉帳收據或存款收據，本公司將不會另發收據。</li>
          <li>確認繳費成功後，玩家將會在遊戲內收到一個遊戲訊息，內含收款收據及已撥出金幣通知，玩家如需保留購買証明，請自行列印此收據並保留相關訊息。</li>
        </ul>
      <p><i>請注意，在您登記使用本網站服務及接受本服務條款的同時，您亦同意接受「購買Travian <b><font color="#71d000">P</font><font color="#ff6f0f">l</font><font color="#71d000">u</font><font color="#ff6f0f">s</font></b>
        金幣須知」內有關金幣使用權及有效期的內容，內容有可能不時被更新而不另行通知。
        瀏覽本服務條款及購買Travian <b><font color="#71d000">P</font><font color="#ff6f0f">l</font><font color="#71d000">u</font><font color="#ff6f0f">s</font></b> 金幣須知的最新版本。</i>
      </p>
    </body>
  </html>
