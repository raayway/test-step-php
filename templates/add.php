<?php $title="Add a new post" ?>
<?php ob_start() ?>
    <form action= "index.php/create/post/" method= "POST"> 
        <p>Message: </p><p> <input type="text" name= "title"></input></p> 
        <textarea name="text"></textarea>
    </form>
    <input type= "submit" value= "Add"> 
<?php $content = ob_get_clean()?>
<?php include 'layout.php'?>