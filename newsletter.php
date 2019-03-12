<?php
    include "./includes/html-start.php";
    include "./adminHeader.php";
?>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody id="newsletterContainer">
                    <template>
                        <tr>
                            <td class="name"></td>
                            <td class="email"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
 
<script type="text/javascript" src="./JS/newsletter.js"></script>
<script>
    getNewsletter();
</script>
<?php
    include "./includes/html-end.php";
?>