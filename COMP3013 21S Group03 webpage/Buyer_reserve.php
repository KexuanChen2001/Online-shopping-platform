<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		<link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>
	<table width="1544" id="MAIN">
			<tr>
				  <td height="60"></td>
				  <td></td>
				  <td></td>
			</tr>
			<tr>
			  <td width="304" height="60">
				</td>
				<td width="789" align="center">
					<p style="font: italic;font-size: 40px">Personal Reservation List</p><br>
					<p>
						<?php
							session_start();
							echo "The BuyerID is:  " .$_SESSION['userID'];
						?>
					</p>
					<p id = "brand" style="font: italic;font-size: 30px">Please Enter Your Brand</p>
				</td>
				<td width="435"></td>
		    </tr>
			<tr>
				<td>
				<div class="logo" colspan="2" align="left" style="font: solid;18pxfont-size: 18px; line-height: 1.4">
					<p align="left">
						<input type="button" value="Logout"  style="width:100px;height:30px" onclick="javascript:window.location.href='loginPage.html'">
					</p>
					<br>
					<p align="left">
						<input type="button" value="Comments" style="width:100px;height:30px" onclick="javascript:window.location.href='Buyer_comments.php'">
					</p>
					<br>
					<p align="left">
						<input type="button" value="Reserve" style="width:100px;height:30px" onclick="javascript:window.location.href='Buyer_reserve.php'">
					</p>
					<br>
					<p align="left">
						<input type="button" value="Shoppinglist" style="width:100px;height:30px" onclick="javascript:window.location.href='Buyer_shoppinglist.php'">
					</p>
				  </div>
				</td>
				<td height="600">
					<div align="center" id = "collection-list">
					<form action = "view shoes2.php", method = "POST">
						<p id = "brand" align="center">
							please enter the brand you want to check
						</p>
						<input type = "text"  name = "brand">
						</input>
						<button id="brand-selection" type = "submit">
							view 
						</button>
					</form>
							<p>
								<img src = "nike.jpg" width = "200" height = "150">
								<img src = "adidas.jpg" width = "200" height = "150">
								<img src = "puma.jpg" width = "200" height = "150">
								<img src = "李宁.jpg" width = "200" height = "150">
							</p>
					</div>
				</td>
				<td>
					<p style="font: italic;font-size: 30px">Enter your shoe ID</p>
					<p style="font: italic;font-size: 20px">Your reservatioon : </p>
					<form action = "get reservation.php", method = "POST">
						<button type = "submit" id = "collection" type = "submit">
							Reservatioon
						</button>
					</form>
				<p>
				Enter your shoe ID:
				</p>
				<form action = "add reservation.php", method = "POST">
					<input type = "text"  name = "shoesID">
					</input>
					<button type = "submit" id="add-choice" type = "submit">
						ADD
					</button>
				</form>
				<form action = "delete reservation.php", method = "POST">
					<input type = "text"  name = "shoesID">
					</input>
					<button type = "submit" id="delete-choice" type = "submit">
						DELETE
					</button>
				</form>
				</td>
				</tr>
				
		<script src="common.js"></script>
        </table>
	</body>
</html>