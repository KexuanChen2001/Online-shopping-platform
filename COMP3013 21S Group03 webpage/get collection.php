<html>
    <!-- comments-->
    <!-- get collection.php : get all the shoes of that person-->
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
    $result = mysqli_query($con, "SELECT * FROM collection WHERE buyerID = $id ");
    ?>
     <form action="Buyer_collection.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    echo"The collection displays : " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>ShoesID</th><th>Size</th><th>Price</th><th>Brand</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo
            "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["size"] . "</td>" .
            "<td>" . $row["price"] . "</td>" .
			 "<td>" . $row["brand"] . "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>
 
</html>
