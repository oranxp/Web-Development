<!--  Oran Ofzer, id 205633423
      Tal Alter, id 206292450 -->
<?php include ('header-2.php'); ?>
<div class="content">
    <div class="container">
        <div class="row">
            <h3> Order Summary:</h3>
        </div>
         <div class="row">
            <div class="col">
                <table class="table table-light">
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <?php for($i = 0; $i < count($_POST['names']); $i+=1)
                        {   echo "<tr>\n";
                            for ($j = 0; $j < 1; $j+=1) {
                                echo "<td>"; echo $_POST['names'][$i]; echo"</td>\n";
                                echo "<td>"; echo $_POST['prices'][$i]; echo"</td>\n";
                                echo "<td>"; echo $_POST['qty'][$i]; echo"</td>\n";
                                echo "<td>"; echo $_POST['totalItem'][$i]; echo"</td>\n";
                            }
                        } ?>
                </table>
                <?php echo "<h4>Total Cost: "; echo $_POST['totalCost']; echo "</h4>";
                echo "<h5>Thank you for your purchase and Good Bye!</h5>"; ?>
                <br>
            </div>
        </div>
    </div>
</div>
<?php include ('footer.php'); ?>
