<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>千姬大亂鬥 中文 WIKI - 遊戲內說明功能</title>	
		<?php include_once("config.php") ?>
		<style type="text/css">
			ul, li {
				margin: 0;
				padding: 0;
				list-style: none;
			}
			#qaContent {
				width: 500px;
			}
			#qaContent h3 {
				width: 500px;
				height: 22px;
			}
			#qaContent ul.accordionPart {
				margin: 10px 10px 50px 30px;
			}
			#qaContent ul.accordionPart li {
				border-bottom: solid 1px #e3e3e3;
				padding-bottom: 12px;
				margin-top: 12px;
			}
			#qaContent ul.accordionPart li .qa_title {
				padding-left: 28px;
				color: #1186ec;
				cursor: pointer;
			}
			#qaContent ul.accordionPart li .qa_title_on {
				text-decoration: underline;
			}
			#qaContent ul.accordionPart li .qa_content {
				margin: 6px 0 0;
				padding-left: 28px;
				color: #666;
			}
			</style>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			    // 幫 div.qa_title 加上 hover 及 click 事件
				// 同時把兄弟元素 div.qa_content 隱藏起來
				$('#qaContent ul.accordionPart li div.qa_title').hover(function(){
					$(this).addClass('qa_title_on');
				}, function(){
					$(this).removeClass('qa_title_on');
				}).click(function(){
					// 當點到標題時，若答案是隱藏時則顯示它；反之則隱藏
					$(this).next('div.qa_content').slideToggle();
				}).siblings('div.qa_content').hide();

				$('#qaContent ul.accordionPart li div.qa_content:first').show();
			});
		</script>
	</head>
	<body>
		<?php include_once("ga.php") ?>
		<?php include_once("nav.php") ?>
		<div class="container">
			<div class="row">
				<div class="span-170 pull-left" >
					<?php include_once("side.php") ?>
				</div>
				<div class="span-800 pull-right">
		    		<?php include("ad.php") ?> 
					<div id="qaContent">
						<h3>關於武將</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">關於屬性</div>
								<div class="qa_content">所有的武將都擁有「火」「水」「木」「陽」「月」其中一種屬性，相剋的屬性造成的傷害會增加，受到的傷害會減少</br></br>‧「火」剋「木」被「水」所剋</br>‧「水」剋「火」被「木」所剋</br>‧「木」剋「水」被「火」所剋</br>‧「陽」與「月」互為增加傷害</br></br>※只有固定傷害的屬性不會有任何增減</div>
							</li>
							<li>
								<div class="qa_title">關於武器類型</div>
								<div class="qa_content">所有武將都擁有「斬」「打」「突」「投」「射」「彈」的其中一種武器類型，武將只能裝備與自己同類型的武器，每個武器類型在射程距離及數值上都有其特色</br></br>‧「斬」近距離射程，體力高，攻擊力低</br>‧「打」近距離射程，攻擊力高，命中率低</br>‧「突」中距離射程，均衡型，行動速度中等</br>‧「投」中距離射程，均衡型，攻擊力中等</br>‧「射」遠距離射程，行動速度高，防禦低</br>‧「彈」遠距離射程，攻擊力高，體力少</div>
							</li>
							<li>
								<div class="qa_title">關於武將等級</div>
								<div class="qa_content">當武將等級提升時，綜合‧HP‧攻擊‧防禦力會上升，達到一定等級時，就會開放秘技的學習欄位及武器欄位</br></br>武將的最高等級可透過進化提升上限，可是武將等級無法超越城主等級</br></br>例：</br>城主等級20級，武將等級上限為30級時</br>→武將目前可達最高等級為20級</br>城主等級40級，武將等級上限為30級時</br>→武將可達最高等級為30級</div>
							</li>
							<li>
								<div class="qa_title">關於忠誠度</div>
								<div class="qa_content">提升武將的忠誠度，就能提議建築物建設、改建或提議武器設計圖，可讓城下町蓬勃發展，而且奧義也會變更強，所以提升忠誠度有利於戰鬥</div>
							</li>
							<li>
								<div class="qa_title">何謂奧義</div>
								<div class="qa_content">奧義是指當奧義計量集滿時，便可使用武將特有的強力技能，只要點擊戰鬥畫面右下方的武將圖案就會發動，當忠誠度達到一定值時，奧義就會升級，威力及效果都會強化</br></br>被選為奧義對象的武將行動會被取消，只要奧義對象是敵方，選在最佳時機發動的話，就能取消敵人的行動</div>
							</li>
							<li>
								<div class="qa_title">何謂秘技</div>
								<div class="qa_content">秘技是指經過一定時間就會自動發動的武將技能，尚未學習的秘技欄，只要使用秘技卷軸就能學到新的秘技</br></br>學到1個以上秘技的武將，會因為秘技數量的增加，而增加行動次數</div>
							</li>
							<li>
								<div class="qa_title">關於秘技強化</div>
								<div class="qa_content">秘技能透過提升等級增加威力或效果</br>提升秘技需要(1)相同秘技的卷軸(2)秘技指南書</br></br>※提升秘技可在武將情報裡點擊已學習的秘技圖示後進行</div>
							</li>
							<li>
								<div class="qa_title">關於學習秘技</div>
								<div class="qa_content">為了學習秘技，需要相同武器類型的秘技卷軸，學習過的秘技也能進行忘卻，不過一旦忘卻了，學習時使用的卷軸是不會退還的</br></br>※學習秘技可在武將情報裡，點擊秘技的欄位後顯示</br>※秘技欄位會在武將提升到指定等級時開放，開放數量依武將稀有度而有差異</div>
							</li>
							<li>
								<div class="qa_title">關於武將強化</div>
								<div class="qa_content">藉由強化能提升武將的等級，武將等級提升後，綜合‧HP‧攻擊‧防禦力都會上升，但是武將等級無法超越城主等級</br></br>例：</br>城主等級20級，武將等級上限為30級時</br>→武將等級最高可到達20級</br>城主等級40級，武將等級上限為30級時</br>→武將等級最高可到達30級</br></br>武將強化選單可在武將選單中選擇強化後顯示</div>
							</li>
							<li>
								<div class="qa_title">關於武將進化</div>
								<div class="qa_content">使用進化素材與錢就能進化武將，進化武將後，最高等級與命中/迴避/行動速度/暴擊率等都會提升，且依武器類型不同，會強化特定數值，使強化後的成長度大幅上升，進化素材可在曜日副本及魔將戰中取得</br></br>※武將進化可在武將選單中選擇進化圖示</br>※進化最高為第三階段，之後無法再進化</div>
							</li>
							<li>
								<div class="qa_title">關於武將覺醒</div>
								<div class="qa_content">取得相同武將時，武將就能覺醒，覺醒度上升並獲得秘技經驗值，還可獲得各武將特有的秘技卷軸</br></br>覺醒可獲得秘技卷軸，獲得時機會因武將的稀有度而有差異</br>2★ = 覺醒+5時，一秘技卷軸製成</br>3★ = 覺醒+3時，一秘技卷軸製成</br>4~6★ = 覺醒+1時，一秘技卷軸製成</br></br>※使用覺醒度上升道具時，無法獲得秘技經驗值</div>
							</li>
							<li>
								<div class="qa_title">關於大將</div>
								<div class="qa_content">被設定為大將的武將，會顯示在城下町的城主圖案、城主情報裡，並且大將武將會作為其他玩家的援軍登場</br></br>※大將設定可在武將一覽及城主情報中設定</div>
							</li>
							<li>
								<div class="qa_title">關於後備武將</div>
								<div class="qa_content">後備武將是指將武將欄擴張到最大數100之後，會在「使用神玉」的一覽中變更顯示為後備武將欄擴張</br>移到後備欄的武將不會在城下町/魔將戰/御前試合/攻城戰等處出現，也無法進行強化或進化</div>
							</li>
							<li>
								<div class="qa_title">關於覺醒技</div>
								<div class="qa_content">覺醒技是根據武將的覺醒度而學會的武將特有技能，覺醒技是有著各種效果的技能，伴隨著覺醒度的提升有可能會擁有複數效果</br></br>覺醒技因各武將的稀有度不同，開放時的覺醒度也會有所差異</br></br>4★武將</br>覺醒技Lv1：覺醒度達到＋5時開放</br>覺醒技Lv2：覺醒度達到+25時開放</br>覺醒技Lv3：覺醒度達到+45時開放</br></br>5★武將</br>覺醒技Lv1：覺醒度達到＋5時開放</br>覺醒技Lv2：覺醒度達到+15時開放</br>覺醒技Lv3：覺醒度達到+25時開放</div>
							</li>
						</ul>
						<h3>關於武器</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">關於武器</div>
								<div class="qa_content">武將可裝備與武器類型相同的武器</br>武器裝備後武將戰鬥力會提升</br></br>※武器裝備可在武將情報中點擊武器欄後顯示</div>
							</li>							
							<li>
								<div class="qa_title">關於武器數值</div>
								<div class="qa_content">裝備武器可讓武將的攻擊力及防禦力增加，各個武器都存在其「特性」，會增加各種數值</br></br>※武器的裝備效果只會對武將原有的數值產生效果</div>
							</li>							
							<li>
								<div class="qa_title">何謂熟練度</div>
								<div class="qa_content">熟練度是指同一把武器不斷使用後，所發生的武將數值提升的效果</br></br>裝備武器的狀態下參與戰鬥時，武器的熟練度會上升，達到最高熟練度後，武器會變為熟練的狀態，可獲得武器精通Bonus，使武將的數值上升</br></br>※武器從裝備裡卸下時，熟練度依然會存在</br>※熟練度只會對武將原有的數值發揮效果</div>
							</li>							
							<li>
								<div class="qa_title">何謂主要裝備</div>
								<div class="qa_content">主要裝備是指最上方的武器欄位，設定為主要裝備的武器會反映在武將戰鬥時的角色上</div>
							</li>							
							<li>
								<div class="qa_title">何謂次要裝備</div>
								<div class="qa_content">次要裝備是指主要裝備以外的武器欄位，次要裝備在裝備狀態下進行戰鬥時，會和主要裝備一起提高熟練度，武器欄位在武將提升至指定等級時會開放，最高開放數量依武將稀有度而有差異</br></br>※為了達到可開放武器欄位的武將等級，需進化武將</div>
							</li>							
							<li>
								<div class="qa_title">何謂武器特性</div>
								<div class="qa_content">武器特性是指裝備武器後附加於武將身上的效果，武器特性能在武器情報中確認</br></br>當裝備在次要裝備時，附加在武將的特性效果會以1０％計算(部分例外)</br></br>※效果相同的特性也會疊加計算(部分例外)</br>※只有在裝備武器時才會附加該武器的特性效果</br>※武器特性只會以武將的原有數值計算加成效果</div>
							</li>							
						</ul>
						<h3>關於城下町</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">何謂城主等級</div>
								<div class="qa_content">城主等級是指玩家的等級</br>進擊時所得到的經驗值達到指定數值時，城主等級就會提升，主城以及城下町的外觀會因此變得豪華，但因為武將等級無法超越城主等級，所以當武將強化到極限時，請提升城主等級</div>
							</li>	
							<li>
								<div class="qa_title">何謂人口</div>
								<div class="qa_content">人口是指城下町發展度的指標，藉由武將的忠誠度提升可增加人口，人口增加到指定數量時，城下町的居民們會提議建設或改建，來協助城下町的發展</div>
							</li>							
							<li>
								<div class="qa_title">關於對話框事件</div>
								<div class="qa_content">點擊出現對話框的武將或村民後會發生事件</br></br>‧ 摸摸頭事件</br>會出現愛心圖示對話框</br>點擊後可增加武將忠誠度及人口數</br></br>‧ 提議事件</br>會出現電燈泡圖示對話框</br>點擊武將或村民後，會提議發展城下町</br></br>‧ 劍禮事件：</br>會出現寶箱圖示對話框</br>其他玩家的大將偶爾會帶著寶箱造訪城下町</br>點擊後會獲得道具或錢幣</div>
							</li>							
							<li>
								<div class="qa_title">何謂劍禮</div>
								<div class="qa_content">劍禮是指與其他玩家互相打招呼</br>進行劍禮後會得到召喚所需的盟友Pt、兵糧或錢幣其中一項</br>對同1個玩家每天只能進行1次劍禮，積極與其他玩家進行劍禮並獲得報酬吧！</br></br>※透過發送劍禮獲得的盟友Pt，1天最多獲得2000Pt</br>※盟友發送的劍禮紀錄，可在城下町聊天室選單裡的「記錄」中確認</div>
							</li>							
							<li>
								<div class="qa_title">關於雜貨</div>
								<div class="qa_content">城下町右側的隱藏式選單中的【交換所】可以兌換各式道具、限定武將或秘技指南書等報酬</br></br>‧御前試合交換所</br>※通過第3章4話後開放御前試合</br></br>‧攻城戰交換所</br>※通過第4章16話後開放攻城戰</br></br>‧錢商店</br>※第1章全部通關後開放</br></br>‧各活動交換所</br>※各活動舉辦時登場。</div>
							</li>														
						</ul>		
						<h3>關於戰鬥</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">關於奧義連擊</div>
								<div class="qa_content">一旦發動複數奧義，當攻擊命中敵人瞬間就會產生連擊，連擊所造成的傷害會提升</br></br>※固定傷害就算連擊，傷害也不會提升</br>※固定傷害也能連擊</div>
							</li>
							<li>
								<div class="qa_title">何謂狀態變化</div>
								<div class="qa_content">狀態變化是指，在戰鬥中武將受到特殊狀態變化，發生數值的增加或減少，秘技或奧義能讓敵方武將產生各種狀態變化，狀態變化會因時間、移除效果秘技或奧義而失去效果</br></br>‧識破：迴避率上升</br>‧集中：命中率上升</br>‧增速：速度上升</br>‧祝福：HP漸漸回復</br>‧重力：迴避率減少</br>‧黑暗：命中率減少</br>‧緩速：速度減少</br>‧火傷：受到持續性的傷害</br>‧猛毒：受到持續性的傷害</br>‧中毒：受到持續性的傷害</br>‧麻痺：無法進行攻擊/發動秘技</br>‧石化：無法行動</br>‧睡眠：無法行動，受到攻擊會移除效果</br>‧沉默：無法發動秘技/奧義</br>‧混亂：攻擊同伴，無法發動秘技/奧義</br>‧魅惑：對同伴進行普通攻擊，無法發動秘技/奧義</br>‧〇〇預防：可抵銷1次〇〇狀態的效果（預防發動時，原本已有的異常狀態不會回復）</br>‧〇〇耐性：移除〇〇狀態並預防〇〇狀態</br>‧即死：無論HP多少，對象都會變成無法戰鬥</br>‧還魂：當HP變成0時，會回復一定量的HP並復活</br>‧復活：目標武將會回復一定量的HP並復活</br>‧憂鬱：奧義計量會漸漸減少</br>‧高揚：奧義計量會漸漸增加</div>
							</li>
							<li>
								<div class="qa_title">關於援軍應援</div>
								<div class="qa_content">其他玩家的大將可以加入應援與我方一同進行戰鬥，援軍應援請求會於戰鬥開始時同時進行</br></br>進行援軍應援請求的對象為</br>(1)最近曾登入的盟友</br>(2)最近曾登入的非盟友玩家</br></br>當援軍武將的等級比自己的城主等級高時，援軍武將會弱化到與城主等級相同後進行應援</div>
							</li>
							<li>
								<div class="qa_title">關於我方應援</div>
								<div class="qa_content">不在隊伍內的持有武將，會隨機加入他人戰鬥進行應援，持有武將越多，發生加入他人的應援機率也會提升</div>
							</li>
						</ul>
						<h3>關於進擊</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">關於進擊</div>
								<div class="qa_content">進擊需要消耗兵糧</br>兵糧消耗的數量因進擊關卡不同而有所差異</br>兵糧未達上限時，每3分鐘回復1兵糧，兵糧已達上限或是超過上限時，則不繼續回復兵糧</br></br>※兵糧持有最高上限為999個，超過999個的兵糧都會消失</br>※章節內全通關後，該章節的上級難度關卡將被開啟</br>※上級難度的敵方會變更強，但是報酬的等級也會提升</div>
							</li>
							<li>
								<div class="qa_title">何謂曜日副本</div>
								<div class="qa_content">曜日副本是指以一星期為週期，每天變換關卡內容，通關後可獲得武將的進化素材</br>曜日副本行程表：</br></br>全屬性武將皆可參加且全天候開放</br></br>星期一：月與木的試煉</br>星期二：陽與火的試煉</br>星期三：月與水的試煉</br>星期四：陽與木的試煉</br>星期五：月與火的試煉</br>星期六：火水木的試煉</br>星期日：陽與水的試煉</br></br>每天都有不同屬性的試煉等你挑戰喔！</div>
							</li>
							<li>
								<div class="qa_title">何謂錢副本</div>
								<div class="qa_content">錢副本是指每天開放３次，每次限時１小時的進擊關卡，通關後可獲得大量的錢</br></br>錢副本每天開放時間如下：</br>每天１２：００ＰＭ－１３：００ＰＭ</br>每天１８：００ＰＭ－１９：００ＰＭ</br>每天２１：００ＰＭ－２２：００ＰＭ</div>
							</li>
							<li>
								<div class="qa_title">關於上級難度的挑戰次數</div>
								<div class="qa_content">各上級難度的關卡一日最多可挑戰3次，每天凌晨0點會重置挑戰次數</div>
							</li>
							<li>
								<div class="qa_title">關於掃蕩券與掃蕩功能</div>
								<div class="qa_content">可透過消耗「掃蕩券」，瞬間完成關卡進擊</br>※城主Lv20時開放掃蕩券功能</br></br>決定想進擊的關卡後，在進擊準備畫面中就能使用掃蕩功能，使用掃蕩券進擊的次數，每次每個關卡的上限為10次</br>※會消耗進擊時所需之兵糧</br></br>「掃蕩券」的取得方法</br>‧使用神玉進行兌換</br>‧有機會從曜日副本或活動副本的掉落報酬中獲得</br>‧交換所</div>
							</li>
						</ul>
						<h3>關於魔將戰</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">何謂魔將戰</div>
								<div class="qa_content">魔將戰是指與其他玩家合作擊倒魔將的戰鬥，擊倒魔將後能得到武將的進化素材及魔將戰限定武將或武器</br></br>可在自己進擊時遭遇魔將，或是當其他玩家遭遇魔將時，消耗鬪力參與魔將戰，消耗一次鬪力參與魔將戰後，能戰鬥到自己的武將全滅為止，魔將經過一定時間後就會撤退，請在限制時間內與盟友或其他玩家合作打倒魔將吧!</br></br>※鬪力除了使用道具或神玉回復外，只要未滿鬪力上限，每10分鐘就會回復1點鬪力</br>※進化過一次以上的武將才能參與魔將戰，為了有利魔將戰的進行，請多多進化武將</br>※擊倒魔將後會依戰鬥的貢獻度獲得報酬，造成大量傷害，賺取大量貢獻度能使報酬變得更加豐富</div>
							</li>
							<li>
								<div class="qa_title">關於魔將戰鬥</div>
								<div class="qa_content">挑戰魔將前請先編列隊伍進行戰鬥</br>就算戰鬥結束，還是會保留前ㄧ次戰鬥剩餘的HP/奧義計量/異常狀態的數值，若魔將在戰鬥的限制時間內沒被擊倒，就算隊伍全滅，只要還有武將能參戰，在魔將撤退之前可以無數次對魔將進行挑戰</div>
							</li>
							<li>
								<div class="qa_title">關於暴走計量與魔將狀態的變化</div>
								<div class="qa_content">魔將擁有會因應傷害而變動的暴走計量，依據暴走計量使魔將的狀態產生變化，行動模式及數值也會有變化</br></br>‧正常狀態</br>正常狀態的魔將受到傷害時會增加暴走計量，暴走計量達到Max時，魔將會變為暴走狀態</br></br>‧暴走狀態</br>暴走狀態的魔將比正常狀態時的攻擊力更強，對暴走狀態的魔將造成傷害能減少暴走計量，暴走計量降到0時，魔將會變為鎮壓狀態</br></br>‧鎮壓狀態</br>鎮壓狀態的魔將比正常狀態時的攻擊力還弱，並且無法發動真奧義，鎮壓狀態的魔將經過一定時間後會回到正常狀態</div>
							</li>
							<li>
								<div class="qa_title">關於剩餘HP與魔將狀態的變化</div>
								<div class="qa_content">當魔將的HP所剩不多時會轉為覺醒狀態</br></br>覺醒狀態的魔將，所使用的秘技或奧義會變得更加強力，要是變為覺醒狀態時，請一口氣打倒她</div>
							</li>
							<li>
								<div class="qa_title">關於魔將戰的道具</div>
								<div class="qa_content">能提供武將各種效果的魔將戰道具，可於每次魔將戰鬥後隨機獲得，所獲得的魔將戰道具，在該局魔將戰結束後就會消失，請積極使用</br></br>※魔將戰鬥中，我軍全滅而失敗時，不會獲得魔將戰道具</div>
							</li>
							<li>
								<div class="qa_title">應援請求</div>
								<div class="qa_content">應援請求能招募魔將戰中一起戰鬥的夥伴，每10分鐘能再次發送請求</br></br>※玩家不一定會參加您的應援請求</div>
							</li>
							<li>
								<div class="qa_title">關於魔將戰援軍應援</div>
								<div class="qa_content">其他玩家會隨機作為援軍，一同與自己挑戰魔將，參加魔將戰者越多，援軍出現的機率越高</div>
							</li>
						</ul>
						<h3>關於御前試合</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">何謂御前試合</div>
								<div class="qa_content">御前試合是指與其他玩家互相競爭排名的戰鬥，消耗BP後就能進行挑戰，戰勝時排名順位會和試合的玩家順位交換，戰敗時順位則不變</br></br>※御前試合1天能挑戰3次，每天凌晨0點重置BP</br>※御前試合報酬在每天20點時，依御前試合順位分發報酬至禮物箱裡</div>
							</li>
							<li>
								<div class="qa_title">何謂防禦隊伍</div>
								<div class="qa_content">防禦隊伍是指御前試合時專用的隊伍，當其他玩家在御前試合向你發起挑戰時出擊的隊伍，所以請設定為最強隊伍</br></br>【防衛報酬】：當其他玩家在御前試合向你發起挑戰並獲勝時，可獲得的報酬</br></br>※獲得的防衛報酬會配發至禮物箱中</div>
							</li>
							<li>
								<div class="qa_title">何謂報酬交換所</div>
								<div class="qa_content">御前試合報酬所取得的御前試合幣能兌換武將、素材或道具，交換所中的物品，每天僅限兌換一次，每天0點重置後可再重複兌換</div>
							</li>
						</ul>
						<h3>關於鍛冶屋</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">何謂武器鍊成</div>
								<div class="qa_content">武器鍊成是指在鍛冶屋中消秏鍊成素材及錢來鍊成武器</br></br>想進行武器鍊成，需要武器設計圖與武器鍊成所需的素材，鍊成素材可透過進擊或曜日副本中獲得，武器設計圖則可透過武將的提議或是進擊後取得</div>
							</li>
							<li>
								<div class="qa_title">關於鍊成的時間</div>
								<div class="qa_content">每個武器完成鍊成的時間都不同，也可消耗神玉直接縮短鍊成時間</div>
							</li>
							<li>
								<div class="qa_title">關於武器大成功</div>
								<div class="qa_content">有一定機率會發生武器大成功，大成功時會以覺醒度較高的狀態下將武器鍊成</div>
							</li>
							<li>
								<div class="qa_title">想獲得設計圖時</div>
								<div class="qa_content">在鍛冶屋鍊成時需要持有武器設計圖，武器設計圖可透過武將的提議或是進擊後取得</div>
							</li>
							<li>
								<div class="qa_title">想增加同時鍊成的數量時</div>
								<div class="qa_content">提升鍛冶屋的等級就能同時鍊成一把以上的武器，增加城下町人口後村民會提議改建鍛冶屋來提升鍛冶屋的等級</div>
							</li>
							<li>
								<div class="qa_title">關於武器覺醒</div>
								<div class="qa_content">武器合成時會覺醒武器，武器覺醒度上升後，武器的數值與特性也會跟著提升</div>
							</li>
						</ul>
						<h3>關於攻城戰</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">何謂攻城戰</div>
								<div class="qa_content">攻城戰是指以淘汰賽的方式和其他玩家進行連續戰鬥，進行攻城戰需要消耗1個挑戰權，每天最多只有2個挑戰權，攻城戰勝利後可獲得報酬，連續勝利能獲得更豐富的報酬，所獲得的報酬會發送至禮物箱中</br></br>滿足參加條件的武將才可參加攻城戰，參加條件可在攻城戰中確認，只要還有符合條件的武將存在，就能不斷進行攻城戰，就算已經沒有可編隊的武將，攻城戰無法再繼續，也還能使用挑戰權再重新開始進行攻城戰</br></br>攻城戰行程表</br>攻城戰【初級】為全屬性武將皆可參加且全天候開放(城主Lv21時開啟)</br></br>星期一</br>月之試煉【中級】：限定陽屬性武將</br>月之試煉【上級】：限定陽屬性武將</br></br>星期二</br>火之試煉【中級】：限定水屬性武將</br>火之試煉【上級】：限定水屬性武將</br></br>星期三</br>水之試煉【中級】：限定木屬性武將</br>水之試煉【上級】：限定木屬性武將</br></br>星期四</br>木之試煉【中級】：限定火屬性武將</br>木之試煉【上級】：限定火屬性武將</br></br>星期五</br>陽之試煉【中級】：限定月屬性武將</br>陽之試煉【上級】：限定月屬性武將</br></br>星期六 星期日</br>攻城戰【中級】：全屬性武將</br>攻城戰【上級】：全屬性武將</div>
							</li>
						</ul>
						<h3>常見問題</h3>
						<ul class="accordionPart">
							<li>
								<div class="qa_title">應用程式強制結束</div>
								<div class="qa_content">進行以下步驟可能可以改善應用程式強制結束的情形，麻煩玩家依照以下步驟執行</br></br>▼步驟說明 </br>‧啟動遊戲→點擊左下角「修復檔案」</br>‧請在通訊良好的環境下操作</br></br>※當進行「修復檔案」後，遊戲中所下載的內容可能會增加</div>
							</li>
							<li>
								<div class="qa_title">遊戲開頭畫面的下載進度停止</div>
								<div class="qa_content">進行以下步驟可能可以改善下載進度停止的情形，麻煩玩家依照以下步驟執行</br></br>▼步驟說明 </br>‧啟動遊戲→點選左下角「修復檔案」</br>‧請更換網路且在良好的的通訊環境下進行(Wi-fi更換為行動網路，行動網路更換為Wi-fi連接等）</br> </br>※初次下載/檔案清除後/檔案更新後/版本更新後的啟動，建議您使用Wi-fi接收數據更新</br>※「修復檔案」後，遊戲中所下載的內容可能會增加</div>
							</li>
							<li>
								<div class="qa_title">更換手機後雖然有備份卻無法啟動</div>
								<div class="qa_content">進行以下步驟可能可以改善此情形，</br>麻煩玩家依照以下步驟執行。</br></br>▼步驟說明 </br>‧啟動遊戲→點選畫面左下方的「修復檔案」</br></br>※「修復檔案」後，遊戲中所下載的內容可能會增加</div>
							</li>
							<li>
								<div class="qa_title">無法販售武將</div>
								<div class="qa_content">下列情況皆有可能造成無法販售武將，還請您進行各項確認</br></br>‧欲販售的武將被編列在進擊隊伍1～5其中之一 </br>‧欲販售的武將被編列在御前試合的防禦隊伍裡 </br>‧欲販售的武將為上鎖的狀態</br>‧欲販售的武將有裝備武器</div>
							</li>
							<li>
								<div class="qa_title">曜日與錢副本的通關顯示</div>
								<div class="qa_content">每週的每一天都有各自會開放的副本，若在上週前該副本就已通關，頁面中會顯示[CLEAR！]，且無法再次取得首次通關報酬</div>
							</li>
							<li>
								<div class="qa_title">提升忠誠度也不會進行提議</div>
								<div class="qa_content">每個武將提議武器設計圖時的忠誠度都不同，於武將情報中可確認武將的提議內容，並不是全部武將都有武器設計圖的提議</div>
							</li>
							<li>
								<div class="qa_title">豐臣秀吉的必殺技無法發動</div>
								<div class="qa_content">「刀狩」奧義只有在對方有斬類型的武將時，才能發動</br>※不存在斬類型武將時，就算奧義計量達MAX都無法發動</div>
							</li>
							<li>
								<div class="qa_title">御前試合的BP無法回復</div>
								<div class="qa_content">「御前試合」1天最多3次， BP回復時間顯示的是換日的倒數計時</br></br>當顯示【15: 20】時，是指【15(小時)20(分鐘)】後會回復全部BP</br></br>如果顯示時間有問題想進行確認時，請依照以下設定，也許會有改善，請您嘗試看看</br></br>▼iPhone手機</br>1.[設定]＞[一般]＞點擊[日期與時間] </br>2.開啟「自動設定」</br></br>▼Android手機　</br>※有可能因機型而異 </br>1.[設定]＞點擊[日期與時間] </br>2.開啟「自動設定日期與時間」和「自動設定時區」</div>
							</li>
							<li>
								<div class="qa_title">關於武器的Q&A</div>
								<div class="qa_content">Q.如果戰鬥前選擇了最強武器時，裝備在武將身上的武器會如何？</br>A.會選擇未裝備在武將身上中最強的武器進行裝備</br></br>Q.如果比裝備的武器還強的話，會更換武器嗎？</br>A.不會更換，以手動裝備的武器為優先</br></br>Q.未裝備任何武器時，選擇最強武器後，就會自動裝備武器嗎？</br>A.如果持有同類型的武器就會自動裝備</br></br>Q.魔將戰時如果不裝備武器的話，就不會自動裝備最強武器嗎？</br>A.不會</div>
							</li>
							<li>
								<div class="qa_title">關於召喚的Q&A</div>
								<div class="qa_content">Q.盟友Pt無法擴張嗎？</br>A.盟友Pt的上限為99999Pt，無法擴張</br></br>Q.我不能召喚！</br>A.當無法召喚時，有可能是以下原因造成</br>‧武將欄無空位</br>‧武器欄無空位</br>‧神玉或是盟友Pt不足</div>
							</li>
							<li>
								<div class="qa_title">關於城下町的Q&A</div>
								<div class="qa_content">Q.自己沒有的1★武將居然會提議</br>A.就算不是自己持有的武將，也有可能透過人口提議出現村民的武將</br></br>Q.就算城主等級提升，兵糧也沒有全部回復！</br>A.就算城主等級提升也不一定會回復全部兵糧，只會回復固定值。</br></br>Q.獲得的兵糧消失了</br>A.兵糧上限數為【999個】，如果獲得比上限數還高的兵糧時，超過的部分會消失</div>
							</li>
						</ul>
					</div>
				</div>
			</div>			
			<?php include_once("footer.php") ?>				
		</div>
	</body>
</html>