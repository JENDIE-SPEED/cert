<?php
include 'Mobile_Detect.php';

$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile()){
  include 'mobileheader.php' ;
   include 'mobilependingren.php';
   

   
}
else {
  include 'header.php' ;
   include 'desktoppendingren.php';
  
}


 ?>
 