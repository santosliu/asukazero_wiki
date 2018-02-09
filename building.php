<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>千姬大亂鬥 中文 WIKI - 建物列表</title>	
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
							<th style='vertical-align: middle; text-align: center;'>名稱</th>
							<th style='vertical-align: middle; text-align: center;'>效果</th>
							<th style='vertical-align: middle; text-align: center;'>相關武將</th>							
						</tr>
					<?php 

						$sql = "SELECT * FROM Proposal WHERE proposalType = '' ";
						$sql .= " ORDER BY proposalName";						

						$result = $conn->query($sql);				
			
						while ($row = $result->fetch_assoc()){	
							echo "<tr>";	
							
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['proposalName']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'>".$row['proposalDesc']."</td>";
							echo "<td style='vertical-align: middle; text-align: center;'><a target='_blank' href='card_details.php?id=".$row['cardID']."'>".$row['cardName']."</a></td>";

							echo "</tr>";	
						}

						mysqli_close($conn);

					?>
					</table>
				</div>
			</div>			
			<?php include_once("footer.php") ?>				
		</div>
	</body>
</html>