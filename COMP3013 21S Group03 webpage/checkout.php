<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		 <style>
			body{margin:0px;}
			#Personal-inforamtion, #Edition{postion:center; width:300px; height:440px; margin:5px; display:inline-block; padding:5px;}
			#Personal-inforamtion{background-color:#abc; display:inline-block;}
			#Edition{position:absolute; background-color:#def; }
			#Webpage-transferring-buttons{position:absolute; bottom:92px;}
			#editing-button{position:absolute; bottom:0px;}
		</style>
	</head>
	<body>
		<table width="4027" id="MAIN">
			<tr>
			  <td width="301"></td>
			  <td width="410"></td>
				<td width="192"></td>
				<td width="3104"> </td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
				<td height="485">
				<div id= "Personal-inforamtion">
					<?php
					$start = microtime(true);
					session_start();
					$_SESSION['userID'] = $_POST['username'];
					$choice = $_POST['choice'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$con=mysqli_connect("localhost","root","","databaseproject");
					// 检测连接
					if (mysqli_connect_errno())
					{
						
					}else{
						
					}
					if($choice == 0){
						$result = mysqli_query($con,"SELECT *
						FROM buyers 
						WHERE buyerID = $username and password = $password");
						if($row = mysqli_fetch_array($result))
						{
							echo "You have sucessfully login in !". "<br>";
							?>
							<button type="submit" align="center"><a href="Buyer_website.php">start shopping</a>
							</button>
							<?php
						}
						else 
						{
							echo "login faliure you need check your id or password !". "<br>";
							?>
							
							<button type="submit" align="center"><a href="loginPage.html">back</a>
							</button>
							<?php
						}
					}
					if($choice == 1){
						$result = mysqli_query($con,"SELECT *
						FROM sellers 
						WHERE sellingID = $username and password = $password");
						if($row = mysqli_fetch_array($result))
						{
							// the seller page
							echo "You have sucessfully login in !". "<br>";
							?>
							<button type="submit" align="center"><a href="Seller_website.php">going into the seller page</a>
							</button>
							<?php
							
						}
						else 
						{
								echo "login faliure you need check your id or password !". "<br>";
								?>
								
								<button type="submit" align="center"><a href="loginPage.html">back</a>
								</button>
								<?php
						}
					}
					 
						
					$stop = microtime(true);
					$spend = $stop - $start;
					echo "<br>the time you spend is :".$spend;
					?>
					
				</div>
				</td>
				<td width="192" rowspan="2">
				</td>
			</tr>
	</table>
	</body>
</html>

