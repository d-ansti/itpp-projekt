<?php
include 'header.php';
include 'top.php';
?>

<div class="container">

<?php

if (mt_rand(0, 1) == 0) {
  echo "<img src=\"../img/heads.gif\">HEADS!";
} else {
  echo "<img src=\"../img/tails.gif\">TAILS!";
}

?>

</div>

<?php
include 'footer.php';
?>
