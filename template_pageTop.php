<?php

$envelope = '<img src="images/note_dead.png" height="30px" alt="Notes" title="This envelope is for logged in members">';
$loginLink = '<a href="login.php"><button class="button button2">Log In</button></a> &nbsp; | &nbsp; <a href="signup.php"><button class="button button2">Sign Up</button></a>';
if($user_ok == true) {
	$sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_row($query);
	$notescheck = $row[0];
	$sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
    if ($numrows == 0) {
		$envelope = '<a href="notifications.php" title="Your notifications and friend requests from various other Alumnis"><img src="images/note_dead.png" width="22" height="25" alt="Notes"></a>';
    } else {
		$envelope = '<a href="notifications.php" title="You have new notifications"><img src="images/note_flash.gif" width="22" height="12" alt="Notes"></a>';
  }
  //----
  // if($log_username==='Admin') {
  //   $loginLink = '<button class="button button2"><a href="admin.php?u='.$log_username.'">'.$log_username.'</a></button> &nbsp; | &nbsp; <a href="logout.php"><button class="button button2"><b>Log Out</b></button></a>';
  // }
  // else {
  //----
    $loginLink = '<button class="button button2"><a href="user.php?u='.$log_username.'">'.$log_username.'</a></button> &nbsp; | &nbsp; <a href="logout.php"><button class="button button2"><b>Log Out</b></button></a>';
  // }
}
?>
<div id="pageTop">
  <div id="pageTopWrap">
    <div id="pageTopLogo">
      <a href="http://localhost/ST3Project/">
        <img src="images/logo.jpg" height="90px" alt="logo" title="Alumni Connect">
      </a>
    </div>
    <div id="pageTopRest">
      <div id="menu1">
        <div>
          <?php echo $envelope; ?> &nbsp; &nbsp; <?php echo $loginLink; ?>
        </div>
      </div>
    </div>
  </div>
</div>