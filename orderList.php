<?php
    include "./includes/html-start.php";
    include "./adminHeader.php";
?>

<div class="container">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">OrderID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Products</th>
                        <th scope="col">Date added</th>
                        <th scope="col">Total Cost</th>
                    </tr>
                </thead>
                <tbody id="orderList">
                    <template>
                        <tr>
                            <td class="OrderID"></td>
                            <td class="Name"></td>
                            <td class="Adress"></td>
                            <td class="Products"></td>
                            <td class="Date-added"></td>
                            <td class="Total-Cost"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
 
<?php
    include "./includes/html-end.php";
?>