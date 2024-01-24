<html>
    <!-- comments-->
    <!-- add shoes.php : For the seller, add nes shoes information to the website and the entity-->
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
    ?>
    <form action="Seller_addShoes.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    
    $shoesID = $_POST['shoesID'];
    $brand = $_POST['brand'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM shoes");
    while($check = mysqli_fetch_array($shoes)){
     if($shoesID == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 1){
     echo "the shoes has already exists!";
    }else{
    $sql = "INSERT INTO shoes (shoesID, brand, size, price ) 
                                    VALUES ($shoesID, '$brand', $size, $price)";
    if (mysqli_query($con, $sql)) {
        echo"The shoes you add : " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>shoesID</th><th>brand</th><th>size</th><th>price</th>";
    echo"</tr>";
    
    
    echo    "<td>" . $shoesID . "</td>" .
            "<td>" . $brand . "</td>" .
			 "<td>" . $size . "</td>" .
            "<td>" . $price . "</td>" ;
        echo"</tr>";
    
    echo"</table>";
	
	echo "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    // $sql = "INSERT INTO shoes
    //     (`shoesID`, `brand`,`size`,`price`)
    //      VALUES ( $shoesID,'$brand', $size , $price )";
    
    // $result = mysqli_query($con, "INSERT INTO shoes (shoesID, brand, size, price) 
    //                                 VALUES ($shoesID, '$brand', $size, $price)" );
    
}
	$stop = microtime(true);
	$spend = $stop - $start;

	echo "<br>"."the time you spend is :".$spend;
?>

</html>
