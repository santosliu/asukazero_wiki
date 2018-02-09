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
	<h3>新增功能</h3>
	<div>
		<ul>
        <li><a target="_blank" href="card.php">新增武將</a></li>
        <li><a target="_blank" href="weapon.php">新增武器</a></li>
        <li><a target="_blank" href="skill.php">奧義秘技</a></li>
        <li><a target="_blank" href="building.php">新增提案</a></li>
		</ul>
	</div>	
</div>


