<?php

$usernames = array("eddy123","tedybear","teddys","eddie123","edwards");
if  (in_array($_GET['username'], $usernames)) {
  echo "Unavailable";
} else {
  echo "Available";
}

?>