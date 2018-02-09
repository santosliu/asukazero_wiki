<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_once("config.php") ?>

		<?php
			$sql = "SELECT * FROM Card WHERE cardNo = '".$cardId."'";
			$result = $conn->query($sql);		
			
			while ($row = $result->fetch_assoc()){	
				echo "<title>".$row['cardName']." - 千姬大亂鬥 中文 WIKI</title>";	
			}
		?>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $(".switchimg").click(function() {
			        $(".mainimg").attr('src',$(this).attr('data-href'));
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
			    			    
				<table style="text-align:center;" class="table table-bordered table-striped">
						
					<?php 

						$sql = "SELECT * FROM Card WHERE cardNo = '".$cardId."'";

						$result = $conn->query($sql);		
						
						while ($row = $result->fetch_assoc()){	
							// echo "<script>document.title = '".$row['cardName']." - 千姬大亂鬥 WIKI';</script>";	

							echo "<tr>";
							//http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_ca16407010.png
							//http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm15003010.png?t=0
							echo "<td style='vertical-align: middle; text-align: center;' class='switchimg' data-href='".$picPath."weapon/c_ca".$row['cardNo']."0.png'><img src='http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm".$row['cardNo']."0.png'/></td>";
							echo "<td style='vertical-align: middle; text-align: center;' rowspan='4'><img class='mainimg' src='".$picPath."weapon/c_ca".$row['cardNo']."0.png' /></td>";
							echo "</tr>";

							echo "<tr><td style='vertical-align: middle; text-align: center;' class='switchimg' data-href='".$picPath."weapon/c_ca".$row['cardNo']."1.png'><img src='http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm".$row['cardNo']."1.png' /></td></tr>";
							echo "<tr><td style='vertical-align: middle; text-align: center;' class='switchimg' data-href='".$picPath."weapon/c_ca".$row['cardNo']."2.png'><img src='http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm".$row['cardNo']."2.png' /></td></tr>";
							echo "<tr><td style='vertical-align: middle; text-align: center;' class='switchimg' data-href='".$picPath."weapon/c_ca".$row['cardNo']."3.png'><img src='http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm".$row['cardNo']."3.png' /></td></tr>";

							echo "<tr><td>故事</td><td>".$row['cardStory']."</td></tr>";
							echo "<tr><td>星等</td><td>".$row['cardRarity']."</td></tr>";
							echo "<tr><td>屬性</td><td>".$row['cardElement']."</td></tr>";
							echo "<tr><td>職業</td><td>".$row['cardType']."</td></tr>";
							echo "<tr><td>奧義</td><td>".$row['cardMainSkill']." (".GetSkillDesc($row['cardMainSkill']).")</td></tr>";
							echo "<tr><td>秘技</td><td>".$row['cardSkill']." (".GetSkillDesc($row['cardSkill']).")</td></tr>";

							GetArousal($row['cardNo']);
							GetPorposal($row['cardNo']);

						}

						function GetArousal($cardId){
							$dbhost = '127.0.0.1';
							$dbuser = 'asuka';
							$dbpass = 'Fu0ru284xj042.4';
							$dbname = 'asukazero';
							
							$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
							$sql = "SET NAMES 'utf8'";
							$result = $conn->query($sql);	
							$sql = "SELECT * FROM Arousal WHERE cardID = '".$cardId."' ORDER BY arousalLv ASC";
							$result = $conn->query($sql);		
							
							while ($row = $result->fetch_assoc()){	
								echo "<tr><td>覺醒</td><td>LV".$row['arousalLv']."：".$row['arousalDesc']."</td></tr>";
							}
						}

						function GetPorposal($cardId){
							$dbhost = '127.0.0.1';
							$dbuser = 'asuka';
							$dbpass = 'Fu0ru284xj042.4';
							$dbname = 'asukazero';
							
							$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
							$sql = "SET NAMES 'utf8'";
							$result = $conn->query($sql);	
							$sql = "SELECT * FROM Proposal WHERE cardID = '".$cardId."'";
							$result = $conn->query($sql);		
							
							while ($row = $result->fetch_assoc()){	
								if ($row['proposalType'] == '武器') echo "<tr><td>提案</td><td>".$row['proposalName']." (".GetWeaponDetails($row['proposalName']).")</td></tr>";
								else echo "<tr><td>提案</td><td>".$row['proposalName']." (".$row['proposalDesc'].")</td></tr>";
							}
						}

						function GetWeaponDetails($weaponName){
							$dbhost = '127.0.0.1';
							$dbuser = 'asuka';
							$dbpass = 'Fu0ru284xj042.4';
							$dbname = 'asukazero';
							
							$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
							$sql = "SET NAMES 'utf8'";
							$result = $conn->query($sql);	
							$sql = "SELECT * FROM Weapon WHERE WeaponName = '".$weaponName."' LIMIT 1";
							$result = $conn->query($sql);			    			
							while ($row = $result->fetch_assoc()){	
								$string = "攻擊：+".$row['weaponAttack']."、防禦：+".$row['weaponDefense']."、特性：".$row['weaponProficient']."、專精：".$row['weaponMaster']."、出處：".$row['weaponNote'];
								return $string;
							}
							
						}

						function GetSkillDesc($skillName){
							$dbhost = '127.0.0.1';
							$dbuser = 'asuka';
							$dbpass = 'Fu0ru284xj042.4';
							$dbname = 'asukazero';
							
							$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
							$sql = "SET NAMES 'utf8'";
							$result = $conn->query($sql);	
							$sql = "SELECT SkillDesc FROM Skill WHERE SkillName = '".$skillName."' LIMIT 1";
							
							$result = $conn->query($sql);
										    			
							while ($row = $result->fetch_assoc()){	
								return $row['SkillDesc'];							
							}
							
						}
					?>
					</table>
				</div>
			</div>			
			<?php include_once("footer.php") ?>				
		</div>
	</body>
</html>
