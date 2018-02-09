<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>				
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<script type="text/javascript">		
	$(function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons,
      heightStyle: "content"
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  });
</script>

<div id="accordion">
	<h3>新手知識篇</h3>
	<div>
		<ul>
			<li><a target="_blank" href="helper.php">遊戲內說明功能</a></li>
			<li><a target="_blank" href="https://forum.gamer.com.tw/C.php?bsn=28771&snA=386">摸頭、提高人口以及武將選擇</a></li>
			<li><a target="_blank" href="https://forum.gamer.com.tw/C.php?bsn=28771&snA=401">劍禮、轉蛋與提高城主等級</a></li>
			<li><a target="_blank" href="https://forum.gamer.com.tw/C.php?bsn=28771&snA=424">摸頭完整解說</a></li>
			<li><a target="_blank" href="history.php">過往活動與轉蛋紀錄</a></li>
		</ul>
	</div>	
	<h3>武將星等查找</h3>
	<div>
		<ul>
			<li><a href="cards.php">全部</a></li>
			<li><a href="cards.php?search=6s">六星</a></li>
			<li><a href="cards.php?search=5s">五星</a></li>
			<li><a href="cards.php?search=4s">四星</a></li>
			<li><a href="cards.php?search=3s">三星</a></li>
			<li><a href="cards.php?search=2s">二星</a></li>
		</ul>
	</div>
	<h3>武將職業查找</h3>
	<div>
		<ul>
			<li><a href="cards.php?search=1c">斬</a></li>
			<li><a href="cards.php?search=2c">打</a></li>
			<li><a href="cards.php?search=3c">突</a></li>
			<li><a href="cards.php?search=4c">投</a></li>
			<li><a href="cards.php?search=5c">射</a></li>
			<li><a href="cards.php?search=6c">彈</a></li>
		</ul>
	</div>	
	<h3>武將屬性查找</h3>
	<div>
		<ul>
			<li><a href="cards.php?search=1e">陽</a></li>
			<li><a href="cards.php?search=2e">月</a></li>
			<li><a href="cards.php?search=3e">火</a></li>
			<li><a href="cards.php?search=4e">水</a></li>
			<li><a href="cards.php?search=5e">木</a></li>
		</ul>
	</div>
	<h3>奧義種類查找</h3>
	<div>
		<ul>
			<li><a href="cards.php?search=1t">傷害</a></li>
			<li><a href="cards.php?search=2t">回復</a></li>
			<li><a href="cards.php?search=3t">輔助</a></li>
			<li><a href="cards.php?search=4t">盾</a></li>
			<li><a href="cards.php?search=5t">強化</a></li>
			<li><a href="cards.php?search=6t">弱化</a></li>
			<li><a href="cards.php?search=7t">特殊</a></li>
			
		</ul>
	</div>
	<h3>武器星等查找</h3>
	<div>
		<ul>
			<li><a href="weapons.php?search=6s">六星</a></li>
			<li><a href="weapons.php?search=5s">五星</a></li>
			<li><a href="weapons.php?search=4s">四星</a></li>
			<li><a href="weapons.php?search=3s">三星</a></li>
			<li><a href="weapons.php?search=2s">二星</a></li>
			<li><a href="weapons.php?search=1s">一星</a></li>
		</ul>
	</div>
	<h3>武器職業查找</h3>
	<div>
		<ul>
			<li><a href="weapons.php?search=1c">斬</a></li>
			<li><a href="weapons.php?search=2c">打</a></li>
			<li><a href="weapons.php?search=3c">突</a></li>
			<li><a href="weapons.php?search=4c">投</a></li>
			<li><a href="weapons.php?search=5c">射</a></li>
			<li><a href="weapons.php?search=6c">彈</a></li>
		</ul>
	</div>
	<h3>資料列表</h3>
	<div>
		<ul>
			<li><a href="building.php">建物列表</a></li>
			<li><a href="skills.php">秘技奧義列表</a></li>
			<li><a href="arousals.php">覺醒列表</a></li>
		</ul>
	</div>		
</div>


