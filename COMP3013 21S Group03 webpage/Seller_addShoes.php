<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		<link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>
	<table width=auto id="MAIN">
		<h1 id = "header" align="center">
			View New Added Shoes
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
				</td>
				<td width="435"></td>
		    </tr>
			<tr>
				<td>
				<div class="logo" colspan="2" align="left" style="font: solid;18pxfont-size: 18px; line-height: 1.4">
				<p id = "Webpage-transferring-buttons">
					<p align="center">
						<input id = "SubtractShoes" type="button" value="SubtractShoes"  style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_SubtractShoes.php'">
					</p>
					<p align="center">
						<input id = "comments" type="button" value="Check Comments" style="height:30px;width:120px"
								onclick="javascript:window.location.href='Seller_comments.php'">
					</p>
					<p align="center">
						<input id = "sellingRecord" type="button" value="SellingRecord" style="height:30px;width:120px"
								onclick="javascript:window.location.href='Seller_sellingRecording.php'">
					</p>
					<p align="center">
						<input type="button" value="Exit" style="height:30px;width:120px"
								onclick="javascript:window.location.href='Seller_website.php'">
					</p>
				</p>
				  </div>
				</td>
				<td height="600">
				<div id = "collection-list">
					<form action = "view shoes4.php", method = "POST">
					<p id = "brand">
						please enter the brand you want to check
					</p>
					<input type = "text"  name = "brand">
					</input>
					<button id="brand-selection" type = "submit">
						view 
					</button>
					</form>
					<p id = "user-id">
					</p>
					<p>
						<img src = "nike.jpg" width = "240" height = "180">
						<img src = "adidas.jpg" width = "240" height = "180">
						<img src = "puma.jpg" width = "240" height = "180">
						<img src = "李宁.jpg" width = "240" height = "180">
					</p>
					</div>
				</td>
				<td>
					<p align="justify">
						Enter the information of the new shoes that you want to add:
					</p>
					<p id = "add">
						<form action = "add shoes.php", method = "POST">
							<input type = "text"  name = "shoesID" style="height:auto;width:auto">ShoesID</input>
							<br>
							<input type = "text"  name = "brand" style="height:auto;width:auto">Brand</input>
							<br>
							<input type = "text"  name = "size" style="height:auto;width:auto">Size</input>
							<br>
							<input type = "text"  name = "price" style="height:auto;width:auto">Price</input>
							<br>
							<button id = "addshoes" type = "submit" style="height:auto;width:auto">Add new shoes</button>
						</form>
					</p><br>
				</td>
				</tr>
		<script src="common.js"></script>
        </table>
	</body>
</html>