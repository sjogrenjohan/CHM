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
                        <th scope="col">CustomerID</th>
                        <th scope="col">OrderDET_ID</th>
                        <th scope="col">Order-status</th>
                        <th scope="col">Date-added</th>
                        <th scope="col">Total-Cost</th>
                    </tr>
                </thead>
                <tbody id="orderList">
                    <template>
                        <tr>
                            <td class="OrderID"></td>
                            <td class="CustomerID"></td>
                            <td class="OrderDET_ID"></td>
                            <td class="Order-status"></td>
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