<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";
    include '../DatabaseApi/db.php';
?>

<?php

if(isset($_POST['submit'])){
    $query="INSERT INTO 'news-letter' (id, title, content),
    VALUES (id, title, content)";
    $sending_mail_query= mysqli_query($db,$query);
    header("Location: admin/news-letter.php"); 
}

?>
<br>
<div class="container">

  <h2>Sending News-letters form</h2>

    <form action="admin/news-letter.php">

        <div class="form-group">
        <label for="title">Subject:</label>
        <input type="title" class="form-control" rows="1" id="title" placeholder="Enter the Subject" name="title">
        </div>

        <div class="form-group">
            <label for="content">News letter:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            <br>
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>


<?php
    include "../includes/html-end.php";
?>