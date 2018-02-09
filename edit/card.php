<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>千姬大亂鬥 中文 WIKI - 新增武將</title>	
	<?php include_once("../config.php") ?>
    <script type="text/javascript">
        $(function(){
            $("#cardId").blur(function(){
                //check regex
                var cardid = $(this).val();
                var n = cardid.search(/^1\d{6}0$/i);

                if (n == 0){
                    var picurl = "http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm"+cardid+".png";
                    $("#cardPic").append("<img src='"+picurl+"'>");
                } else {
                    alert("武將編號格式錯誤");
                    $(this).val('');
                }

                //http://gameas.cayenneark.com.tw/multi/product/dl/manual/image/weapon/c_sm16105020.png
                //http://gameas.cayenneark.com.tw/multi/product/images/webview/material/w_sm26040012.png?t=0
                
            });

            //檢查是否有漏填資訊
            $("#cardSubmit").click(function(){
                var status = 0;
                if ($("#cardId").val() == "") status = 1;

                if (status == 0) {
                    //submit
                } else {
                    alert('仍有欄位未填');
                }
            });
        });
    </script>
</head>
    
<body>
<?php include_once("../nav.php") ?>
<div class="container">
	<div class="row">
        <div class="span-170 pull-left" >
            <?php include_once("side.php") ?>
        </div>
        <?php 
        //檢查是否有輸入資料
        if (isset($_POST["ingresslog"])){
            
//切完之後丟進資料庫
// $sql = "INSERT INTO ingress_log (actionDateTime,playerName,actionDescription) VALUES"; 
// $sql .= "('".$date."','".$player."','".$action."')"; 
// mysql_query($sql,$conn) or die('MySQL query error : '.$sql);
                  
        } 
        ?>
        <div class="span-800 pull-right">
            <form action="card.php" method="post" name="query">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>編號</td>
                        <td><input id="cardId" value="" placeholder="請輸入8碼武將編號" maxlength="8" /></td>
                        <td id="cardPic"></td>
                    </tr>
                    <tr>
                        <td>名稱</td>
                        <td><input id="cardName" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>星等</td>
                        <td>
<select id="cardRarity">
    <option value="4">四星</option>
    <option value="5">五星</option>
    <option value="6">六星</option>
</select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>屬性</td>
                        <td>
<select id="cardElement">
    <option value="火">火</option>
    <option value="水">水</option>
    <option value="木">木</option>
    <option value="陽">陽</option>
    <option value="月">月</option>
</select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>職業</td>
                        <td>
<select id="cardType">
    <option value="斬">斬</option>
    <option value="打">打</option>
    <option value="突">突</option>
    <option value="投">投</option>
    <option value="射">射</option>
    <option value="彈">彈</option>
</select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>故事</td>
                        <td><input id="cardStory" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>奧義名稱</td>
                        <td><input id="cardMainSkill" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>奧義種類</td>
                        <td>
<select id="cardMainSkillType">
    <option value="傷害">傷害</option>
    <option value="回復">回復</option>
    <option value="護盾">護盾</option>
    <option value="輔助">輔助</option>
</select>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>秘技名稱</td>
                        <td><input id="cardSkill" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">
<input id="cardSubmit" type="button" value="新增武將" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>	    

	</div>
	<?php include_once("../footer.php") ?>	
</div>

</body>
</html>