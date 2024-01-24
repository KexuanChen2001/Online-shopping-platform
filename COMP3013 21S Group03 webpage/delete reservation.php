<html>
    <!-- comments-->
    <!-- delete reservation.php : delete the reservation, as you delete it, this shoe will show in the shoes enetity again,
            which means others can buy it or reserve it-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
    //previse
	//session_start();
	//$_SESSION['AAAAA'] = $id;

	//future
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
	//$id
    $argument = $_POST['shoesID'];
    
    $con=mysqli_connect("localhost","root","","databaseproject");
    

    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    ?>
        <form action="Buyer_reserve.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM reservation");
    while($check = mysqli_fetch_array($shoes)){
     if($argument == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist!";
    }else{
    $result = mysqli_query($con, "DELETE FROM reservation WHERE buyerID = $id AND shoesID = $argument ");
	
	$getting = mysqli_query($con, "SELECT * FROM collection WHERE  shoesID = $argument");
    $row=mysqli_fetch_array($getting);
    $argument4 = $row["price"]; 
    $argument5 = $row["size"]; 
	$argument6 = $row["brand"];
	
	mysqli_query($con, "INSERT INTO shoes (shoesID, brand, size, price) 
                                    VALUES ($argument, '$argument6', $argument5, $argument4)" );
									
    echo"Already delete the reservation of shoesID = " . $argument ;
    }
	$result = mysqli_query($con, "SELECT * FROM reservation WHERE buyerID = $id ");
	echo "<br>";
    
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

echo "<br>";
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>

</html>
