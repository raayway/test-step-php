<?php $title="Add a new post" ?>
<?php ob_start() ?>
    <form action= "/post/" method= "POST"> 
        <p>Message: </p><p> <input type="text" name= "title"></input></p> 
        <textarea name="text"></textarea>
        <input type="submit" value="Add"/> 
    </form>
<?php $content = ob_get_clean()?>
<?php include 'layout.php'?>