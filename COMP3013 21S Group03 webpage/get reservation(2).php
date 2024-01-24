<html>
    <!-- comments-->
    <!-- get reservation2.php : this select the information and show the shoppinglist as well-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
    session_start();
    // $_SESSION = $argument;
    // $year = $_POST['year'];
    $id = $_SESSION['userID'];//the one assigned before
    $con=mysqli_connect("localhost","root","","databaseproject");
    // 检测连接
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    $result = mysqli_query($con, "SELECT * FROM reservation WHERE buyerID = $id ");
    ?>
    <form action="Buyer_shoppinglist.php" method="POST">
		<button id = "1" type = "submit" value = "2">
			back
		</button>
	</form>
    <form action="generate shoppinglist.php" method="POST">
		<button id = "1" type = "submit" value = "2">
			generate your shoppinglist now!
		</button>
    </form>
    <?php
    echo"The reservation displays here !: " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>BuyerID</th><th>ShoesID</th><th>time</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo
            "<td>" . $row["buyerID"] . "</td>" .
            "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["specificTime"] . "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
	
	echo"<br><br>"."Here are the your shoppinglist";
	$result = mysqli_query($con, "SELECT * FROM shoppinglist WHERE buyerID = $id");
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>OrderID</th> <th>BuyerID</th>  <th>ShoesID</th>  <th>Time</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo
			"<td>" . $row["orderID"] . "</td>" .
            "<td>" . $row["buyerID"] . "</td>" .
            "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["specificTime"]. "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>
	
	
	
</html>