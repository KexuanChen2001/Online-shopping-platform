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
					<p style="font: italic;font-size: 40px">Personal Collection List</p><br>
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
					<form action = "view shoes.php", method = "POST">
					<p id = "brand">
						please enter the brand you want to check
					</p>
					<input type = "text"  name = "brand">
					</input>
					<button id="brand-selection" type = "submit">
						view 
					</button>
					</form>
							<p>
								<img src = "nike.jpg" width = "240" height = "180">
								<img src = "adidas.jpg" width = "240" height = "180">
								<img src = "puma.jpg" width = "240" height = "180">
								<img src = "李宁.jpg" width = "240" height = "180">
							</p>
					</div>
				</td>
				<td>
					
						<form action = "get collection.php", method = "POST">
							<button id = "collection" style="width:100px;height:30px" value="collection" type = "submit">
								collection
							</button>
						</form>
					</p><br>
					<p>
						<form action = "add collection.php", method = "POST">
						<p style="font: italic;font-size: 30px">Enter your shoe ID</p>
						<input type = "text" id = "shoe-ID" style="width:100px;height:30px" name = "shoesID">
						</input>
					<p>
							<button id="add-choice" style="width:100px;height:30px" value="Add" type = "submit">
								add
							</button>
						</form>
					</p><br>
					<p>
						<form action = "delete collection.php", method = "POST">
						<p style="font: italic;font-size: 30px">Enter your shoe ID</p>
						<input type = "text" id = "shoe-ID" style="width:100px;height:30px" name = "shoesID">
						</input>
					<p>
							<button id="delete-choice" style="width:100px;height:30px" type = "submit">
								Delete
							</button>
						</form>
					</p>
				</td>
				</tr>
				
		<script src="common.js"></script>
        </table>
	</body>
</html>