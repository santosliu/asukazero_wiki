<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>千姬大亂鬥 中文 WIKI - 武器查詢</title>	
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
			    
			    <table class="table table-bordered table-striped">
						<tr>
							<th style='vertical-align: middle; text-align: center;'>武器名稱</th>
							<th style='vertical-align: middle; text-align: center;'>圖片</th>
							<th style='vertical-align: middle; text-align: center;'>星等</th>
							<th style='vertical-align: middle; text-align: center;'>種類</th>
							<th style='vertical-align: middle; text-align: center;'>屬性</th>							
							<th style='vertical-align: middle; text-align: center;'>專精</th>
							<th style='vertical-align: middle; text-align: center;'>出處</th>
						</tr>
					<?php 

						$sql = "SELECT * FROM Weapon";
			
						if ($search == "6s") $sql .= " WHERE weaponRarity = 6 ";
						if ($search == "5s") $sql .= " WHERE weaponRarity = 5 ";
						if ($search == "4s") $sql .= " WHERE weaponRarity = 4 ";
						if ($search == "3s") $sql .= " WHERE weaponRarity = 3 ";
						if ($search == "2s") $sql .= " WHERE weaponRarity = 2 ";
						if ($search == "1s") $sql .= " WHERE weaponRarity = 1 ";

						if ($search == "1c") $sql .= " WHERE weaponType = '斬' ";
						if ($search == "2c") $sql .= " WHERE weaponType = '打' ";
						if ($search == "3c") $sql .= " WHERE weaponType = '突' ";
						if ($search == "4c") $sql .= " WHERE weaponType = '投' ";
						if ($search == "5c") $sql .= " WHERE weaponType = '射' ";
						if ($search == "6c") $sql .= " WHERE weaponType = '彈' ";

						if (strstr($sql,"WHERE")) $sql .= " AND weaponNote != '?' ";
						else $sql .= " WHERE weaponNote != '?' ";

						$sql .= " ORDER BY weaponRarity DESC";

						$result = $conn->query($sql);		
						
						while ($row = $result->fetch_assoc()){
							echo "<tr>";	
							// echo "<tr class='clickable-row' data-href='weapon_details.php?id=".$row['weaponId']."'>";	
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['weaponName']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'><img src='http://gameas.cayenneark.com.tw/multi/product/images/webview/material/w_sm".$row['weaponId'].".png' /></td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['weaponRarity']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['weaponType']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>攻擊：+".$row['weaponAttack']."<br/>防禦：+".$row['weaponDefense']."<br/>特性：".$row['weaponProficient']."</td>";							
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['weaponMaster']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['weaponNote']."</td>";
							echo "</tr>";	
						}

					?>
					</table>
				</div>
			</div>			
			<?php include_once("footer.php") ?>				
		</div>
	</body>
</html>