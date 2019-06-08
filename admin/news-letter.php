<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";
?>


<br>
<div class="container">

  <h2>Sending News-letters form</h2>

    <form action="news-letter.php">

        <div class="form-group">
        <label for="title">Subject:</label>
        <input type="title" class="form-control" rows="1" id="title" placeholder="Enter the Subject" name="title">
        </div>

        <div class="form-group">
            <label for="news-letter">News letter:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
            <br>
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>