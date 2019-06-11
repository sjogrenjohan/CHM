<?php
    include "../includes/admin-start.php";
    
    include '../DatabaseApi/db.php';
?>

<?php
error_reporting(E_ALL); ini_set('display_errors','Off');
$title='';
$content='';
if($_REQUEST["new"]=='new'){

    $title=$_REQUEST["title"];
    $content=$_REQUEST["content"];
    $mailTo = "samer-senbol@hotmail.com";

    //mail($mailTo, $title, $content);
    $query="INSERT INTO `news-letter`(`title`, `content`)VALUES('$title', '$content')";
    $sending_mail_query= mysqli_query($db,$query);
    header("Location:news-letter.php"); 
}
include "../includes/adminHeader.php";
?>
<br>
<div class="container">

  <h2>Sending News-letters form</h2>

    <form action="admin/news-letter.php">

        <div class="form-group">
        <label for="title">Subject:</label>
        <input name="title" type="title" class="form-control" rows="1" id="title" placeholder="Enter the Subject">
        </div>

        <div class="form-group">
            <label for="content">News letter:</label>
            <textarea name="content" class="form-control" rows="5" id="comment"></textarea>
            <br>
        </div>
        <input type="hidden" name="new" value="new">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>


<?php
    include "../includes/html-end.php";
?>