<?php include("header.php");?>

<form method="post" action="bulk-email-proc.php">
    <input name="emails" type="text" class="form-control" placeholder="Enter emails">
    <input name="message" type="text" class="form-control" placeholder="Enter message">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php 
include("footer.php");