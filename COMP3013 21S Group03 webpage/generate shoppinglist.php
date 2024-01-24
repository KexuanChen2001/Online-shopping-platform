<html>
    <!-- comments-->
    <!-- generate shopping list.php : generate the shoppinglist according to the reservation
										as well as add inforamtion into selling recording for sellers to check-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
	$con=mysqli_connect("localhost","root","","databaseproject");
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
	//select from the collection
	?>
	<form action="Buyer_shoppinglist.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
	<?php
	$result = mysqli_query($con, "SELECT * FROM shoppinglist WHERE buyerID = $id");
	$temp = 6000000;
	while($row2 =  mysqli_fetch_array($result)){
		if($row2["orderID"]>=6000000){
			$temp = $row2["orderID"]+1;
		}
		
	}
    $getting = mysqli_query($con, "SELECT * FROM reservation WHERE buyerID = $id");
    while($row=mysqli_fetch_array($getting)){
		$argument1 = $row["buyerID"]; 
		$argument2 = $row["shoesID"]; 
		$argument3 = $row["specificTime"]; 	
		$duplicate = 0;
		
		$result = mysqli_query($con, "SELECT * FROM shoppinglist WHERE buyerID = $id");
		while($row2 =  mysqli_fetch_array($result)){
			if($argument2 == $row2["shoesID"]){
				$duplicate = 1;
				echo "The shoes id =" .$argument2."has already exist in the shoppinglist";
				echo "<br>";
				break;
			}
		}
		if($duplicate == 1){
			continue;
		}else{
			mysqli_query($con, "INSERT INTO shoppinglist (orderID, buyerID, shoesID, specificTime) 
                                    VALUES ($temp, $argument1, $argument2, '$argument3')" );
			//also insert one into the windows of sellers
			mysqli_query($con, "INSERT INTO sellingrecording (orderID, shoesID) 
            VALUES ($temp, $argument2)" );
		}
	}
	
	echo"<br>"."Here are the your shoppinglist";
	$result = mysqli_query($con, "SELECT * FROM shoppinglist where buyerID = $argument1");
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
	
	$sql = "INSERT INTO shoppinglist (orderID, buyerID, shoesID, specificTime) 
			VALUES ($temp, $argument1, $argument2, '$argument3')";
	//also insert one into the windows of sellers
	$sql = "INSERT INTO sellingrecording (orderID, shoesID) 
			VALUES ($temp, $argument2)";
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;

?>


</html>
