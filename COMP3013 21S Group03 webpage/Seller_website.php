<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		 <link rel="stylesheet" href="Ourstyle.css"/>
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
				<h1 align="center">
					Welcome on board to the seller webpage!
				</h1>
				<?php
					session_start();
					echo "The sellingID is:  " .$_SESSION['userID'];
				?>
				<p id = "Webpage-transferring-buttons" style="width: auto">
					<p align="center">
						<input id="addShoes" type="button" value="AddShoes" style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_addShoes.php'">
					</p>
					<p align="center">
						<input id = "SubtractShoes" type="button" value="SubtractShoes"  style="width:120px;height:30px" 
								onclick="javascript:window.location.href='Seller_SubtractShoes.php'">
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
								onclick="javascript:window.location.href='loginPage.html'">
					</p>
				</p>
				</div>
				</td>
				<td width="192" rowspan="2">
				</td>
			</tr>
	</table>
	</body>
</html>
