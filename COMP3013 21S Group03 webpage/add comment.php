<html>
    <!-- comments-->
    <!-- add comments.php : add the comments -->
    <!-- html to write the back operation-->
<?php
	$start = microtime(true);
	session_start();
	$id = $_SESSION['userID'];//the one assigned before
    $argument1 = $_POST['content'];
	$argument2 = $_POST['shoesID'];
    $con=mysqli_connect("localhost","root","","databaseproject");
    

    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    else{
        // good connection
    }
    ?>
    <form action="Buyer_comments.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    $exist = 0;
    $shoes= mysqli_query($con, "SELECT * FROM shoes");
    while($check = mysqli_fetch_array($shoes)){
     if($argument2 == $check['shoesID']){
      $exist = 1;
      
      break;
     }
    }
    if($exist == 0){
     echo "the shoes is not exist!";
    }else{
    $getting = mysqli_query($con, "SELECT * FROM buyers WHERE  buyerID = $id");
	$row=mysqli_fetch_array($getting);
    $argument3 = $row["nickname"]; 
    mysqli_query($con, "INSERT INTO comments (buyerID , nickname, shoesID, content) 
                                    VALUES ($id, '$argument3', $argument2, '$argument1')" );
    echo"<table align='middle'>";
	echo" Here is comment you add !";
    echo"<tr>";
    echo"<th>buyerID</th><th>Nickname</th><th>ShoesID</th><th>Content</th>";
    echo"</tr>";
    
    echo"<tr>";
    echo
        "<td>" . $id . "</td>" .
        "<td>" . $argument3 . "</td>" .
		"<td>" . $argument2 . "</td>" .
		"<td>" . $argument1 . "</td>" ;
    echo"</tr>";
    
    echo"</table>";
    }
	echo"<br><br>"."Here are all the comments";
	$result = mysqli_query($con, "SELECT * FROM comments ");
    echo"<table align='middle'>";
    echo"<tr>";
    echo"<th>buyerID</th><th>Nickname</th><th>ShoesID</th><th>Content</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo
            "<td>" . $row["buyerID"] . "</td>" .
            "<td>" . $row["nickname"] . "</td>" .
			 "<td>" . $row["shoesID"] . "</td>" .
            "<td>" . $row["content"] . "</td>" ;
        echo"</tr>";
    }
    echo"</table>";
    
	$stop = microtime(true);
	$spend = $stop - $start;
    echo "<br>";
	echo "the time you spend is :".$spend;
?>
	
</html>
