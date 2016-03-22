<?php $title="Add a new post" ?>
<?php ob_start() ?>
    <form action= "add.php" method= "POST"> 
    <p>Message: </p><p> <textarea name= "message"></textarea></p> 
    <input type= "submit" value= "Add"> 
<?php $content = ob_get_clean()?>
<?php include 'layout.php'?>