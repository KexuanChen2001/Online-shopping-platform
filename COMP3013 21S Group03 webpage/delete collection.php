<html>
    <!-- comments-->
    <!-- delete collection.php : delete the collection of that shoe ID-->
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
        <form action="Buyer_collection.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM collection");
    while($check = mysqli_fetch_array($shoes)){
     if($argument == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist!";
    }else{
    $result = mysqli_query($con, "DELETE FROM collection WHERE buyerID = $id AND shoesID = $argument ");
    echo"Already delete the collection of shoesID = " . $argument ;
    }
	echo"<br><br>"."Here are the remainning shoes";
	$result = mysqli_query($con, "SELECT * FROM collection WHERE buyerID = $id ");
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
