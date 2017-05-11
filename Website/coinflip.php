<?php
include 'header.php';
include 'top.php';
?>

<script>
function coinflip() {
  if (Math.round(Math.random()) == 0) {
    <img src="../img/heads.gif">HEADS!
  } else {
    <img src="../img/tails.gif">
  }
}
</script>

<div class="container">
<button type="submit" class="login-button" onClick="coinflip();">Flip</button>

</div>

<?php
include 'footer.php';
?>
