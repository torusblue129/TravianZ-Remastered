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

			<p class="submenu"><strong>任何擁有遊戲帳號密碼的玩家都應遵守 <?php echo SERVER_NAME; ?> 遊戲規則及服務條款。在確認帳號註冊後，即視為同意並承諾遵守本規章。</strong><br><br>
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
					<ul><li>或，帳號的原始擁有者使用註冊時所填寫的電子郵箱發送一封申請信至 admin@ca.x10.mx，郵件中應包含以下內容：
						<ul><li>帳號所在的伺服器</li>
							<li>玩家的用戶名</li>
							<li>帳號新擁有者的電郵地址</li>
						</ul>
					</ul></li>
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
						</ul>
					</li>
				</ul>
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
					</ul>
				</li>
				<li><strong style="color: #2A720B">§3 資源運輸</strong><br>
					<ul><li>玩家不得以輔助他人進行遊戲為目的註冊帳號。當遭到惡意的過度運輸時，資源運輸方將受到懲罰，而資源接受方不會受到懲罰，但需要向MH進行報備說明，如不報備將視為協議交收一同處分。除補充說明的情況外，遊戲守則將不限制且不檢查玩家間的過度運輸行為（Pushing）<br>
						<ul><li>Pushing 系統對玩家的限制方式取決於玩家間的帳號登入/連接遊戲方式（Connection Type，下稱 CT）來分類。<br><br></li>
							<li>類別1（下稱 CT1）：指來自不同地區、互不相識的玩家。</li>
							<li>類別2（下稱 CT2）：使用區域網路，例如無線網域區域、辦公室網路等的玩家。</li>
							<li>類別3（下稱 CT3）：指使用相同電腦或曾在相同電腦登入的玩家。<br>
								CT 3將比 CT 2及CT 1受到更嚴格的 Pushing 限制。<br><br/>
						</ul>
							<li>帳號登入/連接遊戲方式說明<br><br>
								<ul>
									<li>CT1. 最近一段時間裡(系統內置設定)，兩個帳號沒有使用同一台電腦登入遊戲，也沒有在同一區網（IP）內登入遊戲。<br></li>
									<li>CT2. 最近一段時間裡(系統內置設定)，兩個帳號在同一區網（IP）內登入遊戲，或帳號間設置代管關係。<br></li>
									<li>CT3. 最近一段時間裡(系統內置設定)，兩個帳號曾使用同一台電腦登入遊戲，或均為另一帳號的代管（帳號擁有者最近無登入記錄）。<br><br></li>
								</ul>
							<li>CT1 規則<br>
								<ol>
									<li>可以向高人口帳號運送2小時產量的資源（可預支7天）。<br></li>
									<li>可以向低人口帳號運送3小時產量的資源（可預支7天）。<br></li>
									<li>可以增援高人口帳號並且運送150%的糧食供給（可預支24小時所需的100%的資源），多出的50%只能是糧食供給（即一批運輸內糧 &gt; 泥+木+鐵 ）。<br></li>
									<li>可以增援低人口帳號並且運送300%的糧食供給（可預支24小時所需的100%的資源），多出的200%只能是糧食供給。<br></li>
									<li>可以無限量搶奪高人口帳號。<br> （如果處於同一聯盟，則適用上列第2條，即可搶奪3小時產量）<br></li>
									<li>可以無限量搶奪低人口帳號。<br> （如果處於同一聯盟，則適用上列第1條，即可搶奪2小時產量）<br></li>
									<li>可以征服村莊，但必須滿足：兩個帳號最近14天內無代管關係，並且最近二天內兩個帳號不處於同一聯盟或友好聯盟內。<br></li>
								</ol>
							</li>
							<li>CT2 規則<br>
								<ol>
									<li>可以向高人口帳號運送1小時產量的資源（可預支3天），但人口低於50時無法運送。<br></li>
									<li>可以向低人口帳號運送2小時產量的資源（可預支3天），但人口低於50時無法運送。<br></li>
									<li>可以增援高人口帳號並且運送125%的糧食供給（可預支12小時所需的100%的資源），多出的25%只能是糧食供給。<br></li>
									<li>可以增援低人口帳號並且運送150%的糧食供給（可預支12小時所需的100%的資源），多出的50%只能是糧食供給。<br></li>
									<li>可以無限量搶奪高人口帳號。<br> （如果處於同一聯盟，則適用上列第2條，即可搶奪2小時產量）<br></li>
									<li>搶奪低人口帳號時適用上列第1條，即可搶奪1小時產量。<br></li>
									<li>可以征服村莊，但必須滿足：兩個帳號最近14天內無代管關係，並且最近二天內兩個帳號不處於同一聯盟或友好聯盟內。<br></li>
								</ol>
							</li>
							<li>CT3 規則<br>
								<ol>
									<li>無法直接向高人口帳號運送資源，需要高人口帳號先運送。<br></li>
									<li>可以向低人口帳號運送2小時產量的資源（可預支1天），但低於50人口時無法運送。<br></li>
									<li>代管間如非在同一電腦上以帳密直接登入，可以增援高人口帳號並且運送100%的糧食供給（可預支6小時所需的100%的資源）。這6小時的資源只能是糧食 供給。<br></li>
									<li>代管間如非在同一電腦上以帳密直接登入，可以增援低人口帳號並且運送100%的糧食供給（可預支12小時所需的100%的資源）。這12小時的資源只能是 糧食供給。<br></li>
									<li>搶奪高人口帳號時適用第2條，即可搶奪2小時產量。<br></li>
									<li>搶奪低人口帳號時適用第1條，即搶奪不到任何資源。<br></li>
									<li>無法征服村莊<br>
									<li>無法搶奪在最近6小時內與你是CT3關係的帳號運送過資源的村莊，即指當關係者運資給第三方後，你在6小時內不能搶奪該地三方的村莊。<br><br>
								</ol>
							</li>
								<li>定義說明：<br>
										《可預支 X 天》指可以一次性運送共計 X 天的許可量。<br>
										例如：“可以運送2小時產量的資源（可預支7天）”，表示可以一次性運送14小時產量的資源，但這7天的許可量也就被用盡，無法再運送資源。<br>
										<ul>
											<li>小時產量 = 帳號下所有村莊的泥、木、鐵、糧的產量總和<br> （其中糧食計算以淨產量 = 總糧產 – 建築人口 計算）<br></li>
											<li>搶奪利潤 = 最近7天總共搶奪的資源利潤 / 7*24<br> （其中資源利潤 = 搶奪而來的資源 – 被搶走的資源）<br></li>
											<li>小時總產量 = 每小時資源產量 + 每小時搶奪利潤<br><br></li>
										</ul>
									</li>
					</ul>
					<ul>
						<li>資源平衡的計算內容<br> 運送的資源<br> 搶奪的資源<br> 增援部隊的供給<br></li>
						<li>例外<br>
							<ol>
								<li>可無限制向奇蹟村(WW)運送資源。<br></li>
								<li>攻擊或增援奇蹟村(WW)可以不受登入狀態的限制。<br></li>
								<li>征服奇蹟村(WW)可以不受登入狀態的限制（前提：非單村、無皇宮）。<br></li>
								<li>向神器村運送糧食無限制，運送其他資源有限制。<br></li>
								<li>征服神器村可以不受登入狀態的限制（前提：非單村、無皇宮）。<br></li>
								<li>通過市場交易：如果兩個帳號間的交易差額（不計算搶奪和增援供給）小於20%，並且帳號是 CT1 ，則可以無限制地交易。<br><br></li>
							</ol>
						</li>
						<li><strong style="color: #3BAE18">§3.4 新開伺服及新手保護期間之資源交易特殊條例</strong><br></li>
							在一般伺服開啟及玩家建立帳號後一百六十八小時（七天）內(三倍服以七十二小時、即三天計算)全面禁止任何形式的資源運送，包括增援兵力的糧食消耗。違規者以超送及超收處理。唯不限制1:1的市場交易，如玩家須交換其他種類的物資，請利用市場功能。如玩家發現有玩家以非1:1設定交易量，請勿接受有關交易要求，以免違反資源交易條例。</li>
							<ul><br/><span style="text-decoration:underline;">資源運輸條例補充</span><br>
								<ul><li>就算每一次資源交易是規則內許可的比例， <?php echo SERVER_NAME; ?> 管理團隊仍會以多方面的查證看玩家是否惡意獲得利益，來確定是否違規。</li>
									<li>多次和多帳戶違規玩家進行資源交易，MH有權根據實際情況裁定雙方是聯合作弊，雙方ID都將會被封。</li>
									<li>如果玩家打算退出遊戲並刪除帳號，而讓其他玩家使用軍隊攻擊，獲取資源或村莊，也屬於Pushing的一種。另可能 會再 處友好攻擊處分‧</li>
									<li>如果玩家打算刪除帳號，卻向其他玩家不間斷的進貢，就算數量在規則允許之內，也可被視為Pushing。<span style="color:#ff0000;">如果情況嚴重，接收者將視為惡意利用遊戲設定漏洞進行操作，有關帳號可能被即時刪除而不另行通知。因此如有不正常資源送達，請即向MH回報處理。</span></li>
								</ul>
							</ul>
					</ul>
				</li>
				<li><strong style="color: #2A720B">§4 友好攻擊</strong><br>
					與自身有公共電腦使用或代管關係玩家的攻擊是不允許的，<strong>而且在結束有關關係後7天仍會受有關條件限制</strong>。代管關係帳號、設置公共電腦帳號，禁止攻擊、搶奪同一玩家目標。<br>
				</li>
				<ul><li><strong style="color: #3BAE18">§4.1 征服村莊</strong><br>
					征服的定義，以該次攻擊有可降下村莊忠誠度之兵種參戰為主，是否成功降低忠誠度不在考慮之列。而以下行為都是不被允許的：
					<ul><li>在取消代管關係後的兩星期內，對你曾經代管過的玩家的村莊進行征服。</li>
						<li>在取消代管關係後的兩星期內，對曾經作為你的代管玩家的村莊進行征服。</li>
						<li>在取消公共電腦使用關係後的兩星期內，對曾經共用電腦的玩家的村莊進行征服。</li>
						<li>當與有關玩家還在同一公會內，或離開所在公會的兩天之內，對其村莊進行征服。</li>
						<li>在解除聯盟關係後，包括玩家離開或是公會間改變外交關係，於兩天之內對原盟友的村莊進行征服。</li>
						<li>征服聯盟盟友的村莊。</li>
					</ul></li>
					<ul><br/><span style="text-decoration:underline;">友好攻擊條例補充</span>
						<ul><li>攻擊的定義，不包括偵察行為，只以攻擊及搶奪為標準。</li>
							<li>如果出現玩家互相攻擊對方同IP的小玩家，MH可以根據情況裁定為聯合作弊，帳號將馬上被封。</li>
							<li>友攻條例設有追溯限期，即有關違反友好攻擊條例的舉報，如果超過攻擊出現後7天方提出，MH有權不接受有關投訴。</li>
						</ul>
					</ul>
				</ul>
				<li><strong style="color: #2A720B">§5 遊戲中的錯誤及漏洞</strong><br>
					玩家在發現遊戲中的程式錯誤（也被稱為遊戲bug）後，必須立即向遊戲管理員進行彙報，並且不能利用這些錯誤牟取個人利益。濫用遊戲中的程式錯誤將受到嚴 厲懲罰。包括：
					<ul>
						<li>惡意利用規則的漏洞或遊戲管理員職權，從而令到自己的帳號有所得益者，包括但不限於以任何理由故意封鎖帳號，都將會受到嚴厲處罰。</li>
						<li>連續舉報沒有觸犯遊戲規則的玩家訊息而不提合理證明。</li>
						<li>帳號通過故意違規的方式逃避其他帳號對其進行的攻擊、搶奪或由於其他個人原因故意導致封鎖帳號，MH將直接對其進行相應的違規處罰並在以IGM通知後即時解封，或是對其帳號進行永久凍結，情節嚴重者將即時刪除帳號。</li>
					</ul>
				</li>
				<li><strong style="color: #2A720B">§6 現金交易</strong><br>
				在遊戲伺服內，任何以現金貨幣出售或購買遊戲中各類資源例如帳號，軍事單位，村莊或資源的行為都將受到懲罰。另外，玩家在遊戲中也不能進行任何收費的行為 活動。帳號的銷 售是違規的。有關帳號將永久凍結，如當中有金幣亦會凍結至伺服完結方會退回。</li>
				<li><strong style="color: #2A720B">§7 網路行為準則</strong><br>
					每個人在遊戲中都應遵守相應的行為準則：
					<ul>
						<li>下列行為都將受到處罰，其範圍包括所有玩家撰寫的介紹，帳號名稱，聯盟名稱，村莊名稱及短消息中，而形式不限文字，圖示 及拼組圖形亦在限制之列：
							<ul>
								<li>含有政治性、含有不堪入耳的、帶誹謗性質的、含有性別歧視、種族歧視、宣傳邪教的內容；任何輕視他人信仰、種 族、國籍、性別、年齡的語句及淫褻及不雅內容；</li>
								<li>發佈任何對未成年人有害的，或違反當地及國際法規的內容，包括淫褻及不雅的、非法的圖片或連結；</li>
								<li>騷擾其他玩家，包括而不限於惡意向其他玩家、MH發出大量信息；</li>
								<li>違反遊戲服務條款及情況及附加規則對其他玩家進行勒索敲詐；</li>
								<li>在公開場合未經防守及攻擊兩方玩家允許發佈的戰鬥報告。</li>
							</ul>
						<li>玩家的個人資訊中不得含有破壞 <?php echo SERVER_NAME; ?> 標準介面的內容。</li>
						<li>所有企圖或意圖令遊戲玩家誤會聯盟或帳號與遊戲管理員有關的名稱或內容描述，都屬違反守則的行為。即遊戲者的名字不可以 衍生於Multihunter、MH、GM、Admin、管理員或者其他團隊成員的名字。如有此類情況，嚴重者將會立即被開除出遊戲。</li>
						<li>任何形式的未經 <?php echo SERVER_NAME; ?> 管理團隊允許的廣告都是不允許的。</li>
					</ul>
				<li><strong style="color: #2A720B">§8 相關處罰</strong><br>
					玩家在遊戲過程中若有違反遊戲規則的行為，將由Multihunter（MH）和管理員處即時處分或凍結其帳號並根據違規的程度來進行相應的處罰。<br><br>
					相應的處罰包括但不限於下列條目：
					<ul>
						<li>部分或全部刪除玩家人口（即降低建築等級和資源田等級）；</li>
						<li>刪除村莊；</li>
						<li>倉庫/糧倉內存儲資源全部清空；</li>
						<li>刪除玩家全部的部隊；</li>
						<li>從聯盟中開除或解除其創建的聯盟；</li>
						<li>刪除帳號或永久凍結其對遊戲的訪問。</li>
					</ul><br>
					有關所有違規情況的標準罰則如下，請留意，以下只為基數參考，非每一個案都一定以有關說明處分。<br><br>
					<ul>
						<li>超越資源運送上限</li>
					</ul>
						<dl>
							<dd>接收的總資源數量　除以　玩家人口，若得到答案（四捨五入）：</dd>
						</dl>
						<dl><dd>0 - 150：清倉</dd>
							<dd>151 - 300：5% + 清倉</dd>
							<dd>301 - 450：10% + 清倉</dd>
							<dd>451 - 600：25% + 清倉</dd>
							<dd>601 - 750：33% + 清倉 + 清兵</dd>
							<dd>751 - 900：50% + 清倉 + 清兵</dd>
							<dd>901 或以上：另行定奪（交ADMIN處理）</dd>
							<dd>***舉例：玩家人口250，傳送總資源數量160000，160000 / 250 = 640 =&gt; 601 - 750：33% + 清倉 + 清兵</dd>
							<dd>***一個月內二犯及再犯者清兵</dd>
							<dd><br></dd>
						</dl>
					<ol>
						<li>違反「同電腦攻擊」、「共用/代管關係者攻擊同一目標」或「共用電腦之帳號相互聯防」，一律處10% + 清倉，再犯者以多重帳號處理</li>
						<li>違反玩家守則「遊戲輔助工具的使用」或「遊戲中的錯誤及漏洞」，一律最少處50%處分，嚴重者將被永久封鎖帳號。 </li>
						<li> 違反玩家守則「網路行為準則」一律10%，嚴重者將被永久封鎖帳號。 </li>
						<li>擁有「多重帳號」者只能選擇重開其中一個帳號，並處最少25%人口處分。若玩家亦有違反以上玩家守則，亦會依例懲罰。</li>
					</ol>
				</li>
				<li><strong style="color: #2A720B">§9 非法登錄</strong><br>
				通過非法的途徑來得到其他帳號是禁止的，違規者將被開除出遊戲。 <?php echo SERVER_NAME; ?> 管理團隊成員絕對不會詢問你的密碼。<br>
				</li>
				<li><strong style="color: #2A720B">§10 利誘</strong><br>
				誘導其他玩家觸犯遊戲規則也是禁止的，比如，惡意向玩家運送過多資源，或者公開密碼等等。違者將由官方依個別情況處理。<br>
				</li>
				<li><strong style="color: #2A720B">§11 遊戲輔助工具的使用</strong><br>
					非 <?php echo SERVER_NAME; ?> 公司授權，而擅自修改遊戲代碼、添加外掛程式、進行遊戲後臺的控制、任務的自動完成（如建造營地或者調運軍隊）、遊戲介面的改變，都是禁止的。此遊戲只允許通過傳統的網路瀏覽器來進行。所有將可能導致伺服器超載的代碼都是不允許的。 <?php echo SERVER_NAME; ?> 官方從未發佈過任何腳本與輔助程式， <?php echo SERVER_NAME; ?> 助手、MultiSession、搜田工具等均為非法外掛和腳本，均禁止使用。通過非法的途徑來得到其他帳號是禁止的。本遊戲只須基本瀏覽器即可運行，一切透過虛疑系統(如vmware)、網上作業平台再登入本遊戲都以使用非法遊戲輔助工具處理。注意：如出現上述情況，根據造成後果嚴重性，帳號將被凍結直至刪除。<br>
				</li>
				<li><strong style="color: #2A720B">§12 帳號刪除</strong><br>
					那些準備要刪除帳號或者在刪除帳號階段的玩家，也必須遵守以上所有規則。在此期間尤其要注意，在規則2中所提到的贈送資源的數量上限，或者把村莊留給其他玩家隨意佔領的行為，都是禁止的。<br>
				</li>
				<li><strong style="color: #2A720B">§13 金幣處理</strong>
					<ul>
						<li><strong style="color: #3BAE18">§13.1 盜號</strong><br>
							如果因為帳號被盜，由此造成玩家金幣損失，除非因為伺服器被入侵而導致玩家帳號資料被修改，否則玩家都不會得到來自 <?php echo SERVER_NAME; ?> 管理團隊任何形式的賠償。 被盜帳號的持有人若有需要透過法律途徑向盜取帳號者索取賠償，我們將會配合有關方面進行調查，提供相關資料，例如登入者的IP記錄等。<br><br>
						</li>
						<li><strong style="color: #3BAE18">§13.2 違規</strong><br>
							如果同一玩家擁有多個帳號，導致違規並封號處理，被封帳號中的金幣將不予退回。玩家須自行發信向 admin@travianca.x10.mx 申請轉移，唯只限轉移至同一地區的各伺服。<br>
						</li>
						<li><strong style="color: #3BAE18">§13.3 不明來源的金幣</strong><br>
							接收金幣是須確認的，如果你收到不明來源的轉入金幣通知，請勿接受！並即向 admin@travianca.x10.mx 回報。否則須自行承擔一切後果，可能之法律責任包括接贓及盜竊之罪行，如有舉報，官方將即時永久封鎖有關帳號及不會重開。<br>
						</li>
						<li><strong style="color: #3BAE18">§13.4 世界奇觀</strong><br>
							在完成世界奇觀建造後，伺服器將重設所有遊戲資訊，並開始新的遊戲。玩家原有帳號中的金幣可以進行同區跨服轉讓或保留給重啟後新伺服器中的相同帳號。<br>
						</li>
					</ul>
				</li>
				<li><strong style="color: #2A720B">§14 世界奇觀、藍圖及工藝品特殊條例：</strong><br>
					如果奇觀村持有人違反多重帳 號或使用外掛，除依例處分外，有關奇觀村或工藝品村可能將被即時刪除。<br>
				</li>
				<li><strong style="color: #2A720B">§15 更改遊戲規則</strong><br>
					 <?php echo SERVER_NAME; ?> 管理團隊保留關於遊戲規則更改的權利。<br>
				</li>
				<li><strong style="color: #2A720B">§16 規則修正條款</strong><br>
					如果上述規則中有任何一條不再有效或者將不再有效，其他的規則還是有效的。管理員有權使用合法的適用於遊戲的新規則來取代無效的規則。 新規則一旦設立，即時生效。相同的，這點也適用於在規則中出現的漏洞。管理員有責任在尊重原來規則的基礎上，設法彌補這個漏洞。<br>
				</li>
			</ul>

			</div>
				<div class="clear"></div>
			</div>

			<div id="footer">
				<div class="container">
					<a href="index.php" class="closer"><img class="dynamic_img" alt="Close" src="img/un/x.gif" /></a>
					<ul class="menu">
						<li><a href="anleitung.php?s=3"><?php echo $lang['index'][0][15]; ?></a>|</li>
						<li><a href="index.php?screenshots"><?php echo $lang['index'][0][16]; ?></a>|</li>
						<li><a href="spielregeln.php"><?php echo $lang['index'][0][17]; ?></a>|</li>
						<li><a href="agb.php"><?php echo $lang['index'][0][18]; ?></a>|</li>
						<li><a href="impressum.php"><?php echo $lang['index'][0][19]; ?></a></li>
						<li class="copyright">&copy; 2011-<?php echo date('Y'); ?> - TravianZ - All rights reserved</li>
					</ul>
				</div>
			</div>
	</body>
</html>
