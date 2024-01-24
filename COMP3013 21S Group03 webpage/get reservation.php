<html>
    <!-- comments-->
    <!-- get reservation.php : show the information of the reservation-->
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
      <form action="Buyer_reserve.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
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
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>

</html>
