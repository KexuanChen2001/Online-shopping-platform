<html>
    <!-- comments-->
    <!-- view shoes.php : get all the shows from the optioned brand
        , same function just in different websites-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
    $argument = $_POST['brand'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    //session_start();
    //$_SESSION = $argument;
    // 检测连接
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    $result = mysqli_query($con, "SELECT shoesID, size, price FROM shoes WHERE brand = '".$argument."' " ); 
    echo"This brand has shoes: " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>ShoesID</th><th>Size</th><th>Price</th>";
    echo"</tr>";
?>

	<form action="Buyer_shoppinglist.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>

<?php	
    while($row=mysqli_fetch_array($result)){
        echo"<tr>";
        echo
            "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["size"] . "</td>" .
            "<td>" . $row["price"] . "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
    $stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>
	
</html>
