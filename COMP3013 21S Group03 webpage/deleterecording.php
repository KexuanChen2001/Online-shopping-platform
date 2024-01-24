<html>
    <!-- comments-->
    <!-- delete recording.php : delete the recording in the selling recording database, 
    !!!!which means that buyers done the selling work and can not see the information
        but buyers can see the information as a review of product consumption.
            into the sellingRecording-->
    
<?php
	$start = microtime(true);
    session_start();
    // $_SESSION = $argument;
    // $year = $_POST['year'];
    $id = $_SESSION['userID'];//the one assigned before
    $orderID = $_POST['orderID'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    // 检测连接
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    ?>
    <form action="Seller_sellingRecording.php" method="POST">
		<button id = "1" type = "submit" value = "2">
			back
		</button>
	</form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM sellingrecording");
    while($check = mysqli_fetch_array($shoes)){
     if($orderID == $check['orderID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the recording ooderID is not exist!";
    }else{
    $sql = mysqli_query($con, "SELECT * FROM sellingrecording WHERE orderID = $orderID");
    $result = mysqli_query($con, "DELETE FROM sellingrecording WHERE orderID = $orderID");
    echo"The deleted selling recording which has already done : " . "<br>";
    echo"<table align='middle' border=1 cellspacing=0>";
    echo"<tr>";
    echo"<th>orderID</th><th>ShoesID</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($sql)){
        echo"<tr>";
        echo
            "<td>" . $row["orderID"] . "</td>" .
           
            "<td>" . $row["shoesID"] . "</td>" 
            ;
        echo"</tr>";
     
    }
    echo"</table>";
}
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "<br>"."the time you spend is :".$spend;
?>
	
	
</html>