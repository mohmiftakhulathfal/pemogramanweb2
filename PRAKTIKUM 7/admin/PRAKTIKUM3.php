<?php
require_once 'navbar.html' ; 
require_once 'sidebar.html' ;
?>

<?php
$username = $_POST['username'];
$password = $_POST['password'];

?>

<div>
    <h1>mari kita login islam</h1>
    <h1>username : <?php echo $username ?></h1>
    <h1>password : <?php echo $password ?></h1>
</div>





<?php require_once 'sidebar.html' ; ?>