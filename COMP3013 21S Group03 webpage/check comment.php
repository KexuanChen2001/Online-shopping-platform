<html>
<body>
    <!-- comments-->
    <!-- check comments.php : For the sellers, check the comment of one shoes, but he can not comment the shoes -->
    <!-- html to write the back operation-->
<p align="center">
<?php
	$start = microtime(true);
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
   
	$shoesID = $_POST['shoesID'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    

    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    ?>
    	<form action="Seller_comments.php" method="POST">
	<button id = "1" type = "submit" value = "2" style="width:100px;height:30px" align="center">
		back
    </button>
    </form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM shoes");
    while($check = mysqli_fetch_array($shoes)){
     if($shoesID == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist, can not check the comment!";
    }else{
    $sql = mysqli_query($con, "SELECT * FROM comments WHERE  shoesID = $shoesID ");
	
    echo "The comments of this shoes:" . "<br>";
    if (!$sql) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    echo"<table border=1 cellspacing=0>";
    
    echo"<tr>";
    echo"<th>shoesID</th><th>nickname</th><th>content</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($sql)){
        echo"<tr>";
        echo
            "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["nickname"] . "</td>" .
            "<td>" . $row["content"] . "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
    echo "(if nothing shows means there are no comment for this shoes yet)"."<br>";
}
	$stop = microtime(true);
	$spend = $stop - $start;

	echo "<br>"."the time you spend is :".$spend;
?>


	</body>
</html>
