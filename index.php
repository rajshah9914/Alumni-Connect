<?php 

include_once("php_includes/check_login_status.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Alumni Connect</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    fadeloop('#pageBottom',1500,1200,true);
    function fadeloop(el,timeout,timein,loop){
    var $el = $(el),intId,fn = function(){
         $el.fadeOut(timeout).fadeIn(timein);
    };
    fn();
    if(loop){
        intId = setInterval(fn,timeout+timein+100);
        return intId;
    }
    return false;
}
});
  // });
// });
</script>
</head>
<body>
<?php include_once("template_pageTop.php"); ?>
<div id="pageMiddle" style="background-image: url('images/cover.png');">
  &nbsp;
</div>
<div>
<!-- <p>Our Latest Connects</p> -->
<hr>
<h1>
    <p align='center'>
        <b>
            <u>Our Latest Connects</u>
        </b>
    </p>
</h1>
</div>
<?php 
$sql="SELECT username FROM users WHERE activated='1'";
$query=mysqli_query($db_conx,$sql);
$usernumrows=mysqli_num_rows($query);
$userlist="";
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
  $u=$row["username"];
  if($u!='Admin') {
  echo '<h1><a href="user.php?u='.$u.'">'.$u. '</a> &nbsp; | &nbsp;</h1>';
  $userlist.='<a href="user.php?u='.$u.'">'.$u. '</a> &nbsp; | &nbsp;';
  } 
}
?>
<?php include_once("template_pageBottom.php"); ?>
</body>
</html>