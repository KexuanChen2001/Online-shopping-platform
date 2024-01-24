<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		<link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>
	<table width="1544" id="MAIN">
		<h1 id = "header">
			personal shopping list
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
					<p style="font: italic;font-size: 40px">Personal Collection List</p><br>
					<p>
						<?php
							session_start();
							echo "The userID is:  " .$_SESSION['userID'];
						?>
					</p>
					
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
				<div id = "shoppinglist">
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
					<p>
					<p id = "add">
				<form action = "get reservation(2).php", method = "POST">
					<button id = "collection" type = "submit">
					 add to shoppinglist
					</button>
				</form>
					</p><br>
				</td>
				</tr>
				
		<script src="common.js"></script>
        </table>
	</body>
</html>