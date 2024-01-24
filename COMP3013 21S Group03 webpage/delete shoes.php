<html>
    <!-- comments-->
    <!-- delete shoes.php : For sellers, delete the shoes information from the shoes databse(entity)-->
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
    <form action="Seller_SubtractShoes.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    $shoesID = $_POST['shoesID'];
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM shoes");
    while($check = mysqli_fetch_array($shoes)){
     if($shoesID == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist!";
    }else{
    $getting = mysqli_query($con, "SELECT * FROM shoes WHERE  shoesID = $shoesID");
    $row=mysqli_fetch_array($getting);
    $brand = $row["brand"]; 
    $size = $row["size"]; 
	$price = $row["price"]; 
    //get the information of the deleting shoes and output the whole information of the deleted shoes
    // $sql = "INSERT INTO shoes (shoesID, brand, size, price ) 
    //                                 VALUES ($shoesID, '$brand', $size, $price)";
    
    //delete the shoes
    mysqli_query($con, "DELETE FROM shoes WHERE shoesID = $shoesID ");

    echo"The shoes you delete : " . "<br>";
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
    }
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "<br>"."the time you spend is :".$spend;
?>

</html>
