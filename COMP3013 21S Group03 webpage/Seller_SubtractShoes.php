<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		<link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>
	<table width="1544" id="MAIN">
		<h1 id = "header" align="center">
			Deleting shoes page
		</h1>
		<tr>
			  <td height="60"></td>
			  <td></td>
			  <td></td>
		</tr>
			<tr>
			  <td width="304" height="60">
				</td>
				<td width="789" align="center">
					<p>
						<?php
							session_start();
							echo "The SellerID is:  " .$_SESSION['userID'];
						?>
					</p>
					<br>
					<br>
					<br>
						<form action = "view shoes5.php", method = "POST">
							<p id = "brand" style="align-content: center;font-size: 40px">
								<h3>please enter the brand you want to check</h3>
							</p>
							<input type = "text"  name = "brand"></input>
							<button id="brand-selection" type = "submit" value="View">check brand</button>
						</form>
				</td>
				<td width="435"></td>
		    </tr>
			<tr>
				<td>
				<div class="logo" colspan="2" align="left" style="font: solid;18pxfont-size: 18px; line-height: 1.4">
				<p id = "Webpage-transferring-buttons">
					<p align="center">
						<input id="addShoes" type="button" value="AddShoes" style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_addShoes.php'">
					</p>
					<p align="center"> 
						<input id = "comments" type="button" value="Check Comments" style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_comments.php'">
					</p>
					<p align="center">
						<input id = "sellingRecord" type="button" value="SellingRecord" style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_sellingRecording.php'">
					</p>
					<p align="center">
						<input type="button" value="Exit" style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_website.php'">
					</p>
				</p>
				  </div>
				</td>
				<td height="600">
				<div id = "collection-list">
					<p id = "user-id">
					</p>
					<p>
						<img src = "nike.jpg" width = "200" height = "150">
						<img src = "adidas.jpg" width = "200" height = "150">
						<img src = "puma.jpg" width = "200" height = "150">
						<img src = "李宁.jpg" width = "200" height = "150">
					</p>
					</div>
				</td>
				<td>
					<p>
						<p style="font-size: 30px">
							Enter the shoesID that you want to delete:
						</p>
						<p id = "add">
							<form action = "delete shoes.php", method = "POST">
								<input type = "text"  name = "shoesID" value="shoesID" style="width:150px;height:50px"></input>
								<button id = "deleteshoes" type = "submit" value="Delete the shoes" style="width:90px;height:50px">delete</button>
							</form>
						</p>
					</p><br>
				</td>
				</tr>
		<script src="common.js"></script>
        </table>
	</body>
</html>