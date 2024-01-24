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
				<div id = "shoppinglist">
					<p>
					<?php
						session_start();
						echo "The seller is:  " .$_SESSION['userID'];
					?>
					</p>
					<p id = "add">
						<form action = "showrecording.php", method = "POST">
							<p align="center">To show selling recordings from all buyers</p>
							<button id = "collection" type = "submit" value="show recording" style="width:100px;height:30px">
								show
							</button>
						</form>
						<br>
						<br>
						<form action = "deleterecording.php", method = "POST">
							<input type = "text"  name = "orderID" value="Input the orderID that you want to delete" style="width:300px;height:30px"></input>
							<br>
							<p align="justify">
								(the deleted order information means the shoes has already been sent to the seller, and the shopping cycle finished.)
							</p>
							<br>
							<button id = "delete recording" type = "submit">
								Delete recording
							</button>
						</form>
						<br>
						<a href = "Seller_website.php">
							Exit
						</a>
					</p>
				</div>
				</td>
				<td width="48" rowspan="2">
				</td>
			</tr>
	<script src="common.js"></script>
	</table>
	</body>
</html>
		
		
