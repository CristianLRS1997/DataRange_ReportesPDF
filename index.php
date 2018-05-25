<?php

require 'conexion.php';


$query = "SELECT * FROM tbl_order ORDER BY order_id desc";
$result = $mysqli->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h2 align="center">Ajax PHP MySQL Date Range Search using jQuery DatePicker</h2>
    <h3 align="center">Order Data</h3><br />


    <form name="formulario" method="post" action="REPORTE.php">

        <div class="col-md-3">
            <input type="text" name="start" id="start" class="form-control" placeholder="From Date" />
        </div>
        <div class="col-md-3">
            <input type="text" name="end" id="end" class="form-control" placeholder="To Date" />
        </div>
        <div class="col-md-5">
            <input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info" />
        </div>
        <div style="clear:both"></div>
        <br />
        <div id="order_table">
            <table class="table table-bordered">
                <tr>
                    <th width="5%">ID</th>
                    <th width="30%">Customer Name</th>
                    <th width="43%">Item</th>
                    <th width="10%">Value</th>
                    <th width="12%">Order Date</th>
                </tr>
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row["order_id"]; ?></td>
                        <td><?php echo $row["order_customer_name"]; ?></td>
                        <td><?php echo $row["order_item"]; ?></td>
                        <td>$ <?php echo $row["order_value"]; ?></td>
                        <td><?php echo $row["order_date"]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>

    </form>


</div>
</body>
</html>

