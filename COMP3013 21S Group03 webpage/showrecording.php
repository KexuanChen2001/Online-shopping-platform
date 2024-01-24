<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		 <link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>
		<table id="MAIN">
			<tr>
			  <td width="179"></td>
			  <td width="802"></td>
				<td width="48"></td>
				<td width="69"> </td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
				<td height="485">
				<h1 id = "header" align="center">
					Selling Recording
				</h1>
					<!-- comments-->
					<!-- show recording.php : show the selling recording of all buyers
							selcet all the information from shoppinglist, and put some of the information
							into the sellingRecording-->
				<?php
					$start = microtime(true);
					session_start();
					// $_SESSION = $argument;
					// $year = $_POST['year'];
					$id = $_SESSION['userID'];//the one assigned before
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
							<button id = "1" type = "submit" value = "2" style="width: 200px;height:60px;">
								Back
							</button>
						</form>
					<?php
					$result = mysqli_query($con, "SELECT * FROM sellingrecording");
					echo"The selling recording displays here !: " . "<br>";
					echo"<table align='middle' border=1 cellspacing=0>";
					echo"<tr>";
					echo"<th>orderID</th><th>ShoesID</th>";
					echo"</tr>";
					while($row = mysqli_fetch_array($result)){
						echo"<tr>";
						echo
							"<td>" . $row["orderID"] . "</td>" .
							
							"<td>" . $row["shoesID"] . "</td>" 
							;
						echo"</tr>";
					 
					}
					echo"</table>";

					$stop = microtime(true);
					$spend = $stop - $start;
					echo "the time you spend is :".$spend;
				?>
				</td>
				<td width="48" rowspan="2">
						
				</td>
			</tr>
	<script src="common.js"></script>
	</table>
	</body>
</html>
		
		
