<html>
    <!-- comments-->
    <!-- add reservation.php : add the reservation
            !!when add the reservation, shoes information will be deleted from shoes enetity and add it into reservation
                as well as add it into the  collection. Actually, collection contain the reservation part, 
                but other buyers can not reserve the reservation you have reserved, but can collect the shoes that you collected.-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
    $argument1 = $_POST['shoesID'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    $argument2 = time();
	date_default_timezone_set('PRC');
	$argument3 = date("Y-m-d H: i: s",$argument2);
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
	//select from the collection
    ?>
    <form action="Buyer_reserve.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM shoes");
    while($check = mysqli_fetch_array($shoes)){
     if($argument1 == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist!";
    }else{
    $getting = mysqli_query($con, "SELECT * FROM shoes WHERE  shoesID = $argument1");
    $row=mysqli_fetch_array($getting);
    $argument4 = $row["price"]; 
    $argument5 = $row["size"]; 
	$argument6 = $row["brand"]; 	
	
	mysqli_query($con, "INSERT INTO collection (buyerID, shoesID, price, size, brand) 
                                    VALUES ($id, $argument1, $argument4, $argument5, '$argument6')" );
		
    mysqli_query($con, "INSERT INTO reservation (buyerID, shoesID, specificTime) 
        VALUES ($id, $argument1, '$argument3')" );
									
	mysqli_query($con, "DELETE FROM shoes WHERE shoesID = $argument1 ");
	
    echo"The shoes you add in the reservation: " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>BuyerID</th><th>ShoesID</th><th>Time</th>";
    echo"</tr>";
    
    echo"<tr>";
    echo
        "<td>" . $id . "</td>" .
        "<td>" . $argument1 . "</td>" .
        "<td>" . $argument3 . "</td>" ;
    echo"</tr>";
    
    echo"</table>";
	echo "<br>";
	echo "insert sucessfully";
    }
	echo"<br><br>"."Here are the your reservation";
	$result = mysqli_query($con, "SELECT * FROM reservation WHERE buyerID = $id ");
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>BuyerID</th>  <th>ShoesID</th>  <th>Time</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo
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
