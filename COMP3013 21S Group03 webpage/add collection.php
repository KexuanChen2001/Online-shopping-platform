<html>
    <!-- comments-->
    <!-- add collection.php : add the collection of that shoe ID-->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
    $argument1 = $_POST['shoesID'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    

    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    ?>
    <form action="Buyer_collection.php" method="POST">
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
    $argument2 = $row["price"]; 
    $argument3 = $row["size"]; 
	$argument4 = $row["brand"]; 
    mysqli_query($con, "INSERT INTO collection (buyerID, shoesID, price, size, brand) 
                                    VALUES ($id, $argument1, $argument2, $argument3, '$argument4')" );
    echo"The shoes you add in the collection: " . "<br>";
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>ShoesID</th><th>Size</th><th>Price</th><th>Brand</th>";
    echo"</tr>";
    
    echo"<tr>";
    echo
        "<td>" . $argument1 . "</td>" .
        "<td>" . $argument3 . "</td>" .
        "<td>" . $argument2 . "</td>" .
		"<td>" . $argument4 . "</td>" ;
    echo"</tr>";
    
    echo"</table>";
	echo "<br>";
	echo "insert sucessfully";
    }
	echo"<br><br>"."Here is the collection:";
	$result = mysqli_query($con, "SELECT * FROM collection WHERE buyerID = $id ");
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>ShoesID</th>  <th>Size</th>  <th>Price</th>  <th>Brand</th>";
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
