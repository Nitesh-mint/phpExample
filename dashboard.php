<?php
// echo "hi";
session_start();
if(isset($_SESSION['username'])){


?>
<h1>
    Hi
<?php echo $_SESSION['username'] ?>
</h1>

<?php }else{ ?>
    <h1>Please Login first</h1>

    <?php } ?>
