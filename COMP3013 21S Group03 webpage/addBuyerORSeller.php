<html>
	<meta charset = "UTF-8">
	<header>
		<style>
			body{margin:0px;}
			#Personal-inforamtion, #Edition{postion:center; width:300px; height:440px; margin:5px; display:inline-block; padding:5px;}
			#Personal-inforamtion{background-color:#abc; display:inline-block;}
			#Edition{position:absolute; background-color:#def; }
			#Webpage-transferring-buttons{position:absolute; bottom:92px;}
			#editing-button{position:absolute; bottom:0px;}
		</style>
	</header>
	<body>
<?php

	$start = microtime(true);
	$choice = $_POST['choice'];
	$id = $_POST['userID'];
	$pd = $_POST['password'];
	$nickname = $_POST['nickname'];
	$email = $_POST['e-mail'];
	$phoneNumber = $_POST['phoneNumber'];
	$gender = $_POST['gender'];
	$con=mysqli_connect("localhost","root","","databaseproject");

	//previse
	//session_start();
	//$_SESSION['AAAAA'] = $id;

	//future
	//session_start();
	//$id = $_SESSION['AAAAA']
	//$id

	// 检测连接
	if (mysqli_connect_errno())
	{
		echo "连接失败: " . mysqli_connect_error();
	}
	else{
		echo "连接成功: " ;
	}
	if($choice == 0){
		$sql = "INSERT INTO buyers
        (`buyerID`, `password`,`nickname`,`e-mail`,`phoneNumber`,`gender`)
         VALUES ($id,$pd,'$nickname','$email',$phoneNumber,'$gender')";
	
	}
	if($choice == 1){
		$sql = "INSERT INTO sellers
        (`sellingID`, `password`,`nickname`,`e-mail`,`phoneNumber`,`gender`)
         VALUES ($id,$pd,'$nickname','$email',$phoneNumber,'$gender')";
	
	}
    
	if ($con->query($sql) === TRUE){
        $last_id = $con->insert_id;
        echo "Insert successfully！"."<br>";
    } 
    else{
        echo "Error " . $sql ."<br>".$con->error."<br>";
    }
	$stop = microtime(true);
	$spend = $stop - $start;
	echo "the time you spend is :".$spend;
?>
	<button type="submit" align="center"><a href="loginPage.html">back</a>
	</button>
</body>
</html>
