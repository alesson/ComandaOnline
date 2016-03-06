<?php
  // $tempo = 1000;
  if (!isset($_SESSION)) session_start();
  if(!isset($_SESSION['idkeyuser']) || ($_SESSION['status'] != 1)) {
    ?>
    <script type="text/javascript">
      window.location.href="logout.php";
    </script>
    <?php 
    exit;
  } 
  // if (!isset($_SESSION['CREATED'])) {
  //     $_SESSION['CREATED'] = time();
  // } else if (time() - $_SESSION['CREATED'] > $tempo) { 
  //     session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
  //     $_SESSION['CREATED'] = time();  // update creation time
  // } 
   
  // if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $tempo)) {  
  //     session_unset();     // unset $_SESSION variable for the run-time 
  //     session_destroy();   // destroy session data in storage
  // }
  // $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp 
?>

