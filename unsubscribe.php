<?php
include("app/UserManager.php");
include("header.php");

if (isset($_GET['id'])) {
    UserManager::unsubscribe($_GET['id']);
    ?>
    <h1> You have unsubscribed</h1>
    <?php
} else {
?>

<h1>Error, please try again</h1>
<?php }
include("footer.php"); 
