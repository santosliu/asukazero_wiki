<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>千姬大亂鬥 中文 WIKI - 武將查詢</title>	
		<?php include_once("config.php") ?>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $(".clickable-row").click(function() {
			        window.location = $(this).data("href");
			    });

			    $('table').filterTable({
	                label: '搜尋：',
	                placeholder: '輸入任意文字搜尋'
            	});
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
			    
			    <table id="list" class="tablesorter table table-bordered table-striped">
						<tr>
							<th style='vertical-align: middle; text-align: center;'>武將名稱</th>
							<th style='vertical-align: middle; text-align: center;'>圖片</th>
							<th style='vertical-align: middle; text-align: center;'>星等</th>
							<th style='vertical-align: middle; text-align: center;'>屬性</th>
							<th style='vertical-align: middle; text-align: center;'>職業</th>
							<th style='vertical-align: middle; text-align: center;'>出現時間</th>
						</tr>
					<?php 

						$sql = "SELECT * FROM Card";

						if ($search == "217g") $sql .= " WHERE joinDate = '2017-07-05' ";
						if ($search == "212g") $sql .= " WHERE joinDate = '2017-07-03' ";
						if ($search == "210g") $sql .= " WHERE joinDate = '2017-06-29' ";
						if ($search == "209g") $sql .= " WHERE joinDate = '2017-06-26' ";
						if ($search == "205g") $sql .= " WHERE joinDate = '2017-06-21' ";
						if ($search == "211g") $sql .= " WHERE joinDate = '2017-06-19' ";
						if ($search == "207g") $sql .= " WHERE joinDate = '2017-06-16' ";
						if ($search == "206g") $sql .= " WHERE joinDate = '2017-06-12' ";
						if ($search == "204g") $sql .= " WHERE joinDate = '2017-06-08' ";
						if ($search == "203g") $sql .= " WHERE joinDate = '2017-06-04' ";
			
						if ($search == "6s") $sql .= " WHERE cardRarity = 6 ";
						if ($search == "5s") $sql .= " WHERE cardRarity = 5 ";
						if ($search == "4s") $sql .= " WHERE cardRarity = 4 ";
						if ($search == "3s") $sql .= " WHERE cardRarity = 3 ";
						if ($search == "2s") $sql .= " WHERE cardRarity = 2 ";

						if ($search == "1c") $sql .= " WHERE cardType = '斬' ";
						if ($search == "2c") $sql .= " WHERE cardType = '打' ";
						if ($search == "3c") $sql .= " WHERE cardType = '突' ";
						if ($search == "4c") $sql .= " WHERE cardType = '投' ";
						if ($search == "5c") $sql .= " WHERE cardType = '射' ";
						if ($search == "6c") $sql .= " WHERE cardType = '彈' ";

						if ($search == "1e") $sql .= " WHERE cardElement = '陽' ";
						if ($search == "2e") $sql .= " WHERE cardElement = '月' ";
						if ($search == "3e") $sql .= " WHERE cardElement = '火' ";
						if ($search == "4e") $sql .= " WHERE cardElement = '水' ";
						if ($search == "5e") $sql .= " WHERE cardElement = '木' ";						

						if ($search == "1t") $sql .= " WHERE cardMainSkillType like '%傷害%' ";
						if ($search == "2t") $sql .= " WHERE cardMainSkillType like '%回復%' ";
						if ($search == "3t") $sql .= " WHERE cardMainSkillType like '%輔助%' ";
						if ($search == "4t") $sql .= " WHERE cardMainSkillType like '%盾%' ";
						if ($search == "5t") $sql .= " WHERE cardMainSkillType like '%強化%' ";
						if ($search == "6t") $sql .= " WHERE cardMainSkillType like '%弱化%' ";
						if ($search == "7t") $sql .= " WHERE cardMainSkillType like '%特殊%' ";

						$sql .= " ORDER BY joinDate DESC, cardRarity DESC";
						$result = $conn->query($sql);		
							    			
						while ($row = $result->fetch_assoc()){	
							echo "<tr class='clickable-row' data-href='card_details.php?id=".$row['cardNo']."'>";	
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['cardName']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'><a href='card_details.php?id=".$row['cardNo']."'><img src='".$picPath."weapon/c_sm".$row['cardNo']."0.png' /></a></td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['cardRarity']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['cardElement']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['cardType']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['joinDate']."</td>";
							echo "</tr>";	
						}

					?>
					</table>
					<script type="text/javascript">
						$(document).ready(function() { 
					        // $("#list").tablesorter(); 
					        $("#list").tablesorter({sortList:[[0,0]], widgets: ['zebra']});	
					    });		
					</script>					
				</div>
			</div>			
			<?php include_once("footer.php") ?>				
		</div>
	</body>
</html>