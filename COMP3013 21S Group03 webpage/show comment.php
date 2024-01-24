<html>
    <!-- comments-->
    <!-- show comments.php : show all comments -->
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
    <form action="Buyer_comments.php" method="POST">
	<button id = "1" type = "submit" value = "2">
		back
    </button>
    </form>
    <?php
    
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
	echo "the time you spend is :".$spend;
?>
	
</html>
