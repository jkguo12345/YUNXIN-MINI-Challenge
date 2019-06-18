<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/mainshuju.css" />
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<title>遮罩弹窗居中demo</title>
<style>
body
{
	background-image:url('jmqs.jpg');
	background-repeat:no-repeat;
}
</style>
</head>

<body>

<div>
	<button type="button" id="ClickMe">点击显示弹窗遮罩</button>
    
</div>

<div class="goodtxt">

<div id="code">
  <div class="close1"><a href="javascript:void(0)" id="closebt"><img src="images/close.gif"></a></div>
 	 <?php	
		$servername = "localhost";
		$username = "root";
		$password = "crb";
		$dbname = "myDB";
		session_start();
// 创建连接
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	    $username = $_SESSION['views'];
		$sql="select yanwu,jifen from cgq where username='$username'";
        $result=mysqli_query($conn,$sql);
		
		while($row = mysqli_fetch_assoc($result)) {
			echo $row["jifen"];
			echo "<br>";
			echo $row["yanwu"];
		}
		
		?>
  	
     

  
  <div class="code-img"> <img id="ewmsrc"  src="images/code.jpg"/></div>
	</div>
</div>

<script>
$(function() {
    //alert($(window).height());
    $('#ClickMe').click(function() {
        $('#code').center();
        $('#goodcover').show();
        $('#code').fadeIn();
    });
    $('#closebt').click(function() {
        $('#code').hide();
        $('#goodcover').hide();
    });
	$('#goodcover').click(function() {
        $('#code').hide();
        $('#goodcover').hide();
    });
    /*var val=$(window).height();
	var codeheight=$("#code").height();
    var topheight=(val-codeheight)/2;
	$('#code').css('top',topheight);*/
    jQuery.fn.center = function(loaded) {
        var obj = this;
        body_width = parseInt($(window).width());
        body_height = parseInt($(window).height());
        block_width = parseInt(obj.width());
        block_height = parseInt(obj.height());

        left_position = parseInt((body_width / 2) - (block_width / 2) + $(window).scrollLeft());
        if (body_width < block_width) {
            left_position = 0 + $(window).scrollLeft();
        };

        top_position = parseInt((body_height / 2) - (block_height / 2) + $(window).scrollTop());
        if (body_height < block_height) {
            top_position = 0 + $(window).scrollTop();
        };

        if (!loaded) {

            obj.css({
                'position': 'absolute'
            });
            obj.css({
                'top': ($(window).height() - $('#code').height()) * 0.5,
                'left': left_position
            });
            $(window).bind('resize', function() {
                obj.center(!loaded);
            });
            $(window).bind('scroll', function() {
                obj.center(!loaded);
            });

        } else {
            obj.stop();
            obj.css({
                'position': 'absolute'
            });
            obj.animate({
                'top': top_position
            }, 200, 'linear');
        }
    }

})
</script>

</body>

</html>