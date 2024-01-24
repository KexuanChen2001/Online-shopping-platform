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
					Welcome on board!
				</h1>
				<?php
					session_start();
					echo "The BuyerID is:  " .$_SESSION['userID'];
				?>
				<p id = "Webpage-transferring-buttons">
					<p align="center">
						<input type="button" value="Collection" style="width: 100px;height:30px;"
								onclick="javascript:window.location.href='Buyer_collection.php'">
					</p>
					<p align="center">
						<input type="button" value="Comments" style="width: 100px;height:30px;"
								onclick="javascript:window.location.href='Buyer_comments.php'">
					</p>
					<p align="center">
						<input type="button" value="Reserve" style="width: 100px;height:30px;"
								onclick="javascript:window.location.href='Buyer_reserve.php'">
					</p>
					<p align="center">
						<input type="button" value="Shoppinglist" style="width: 100px;height:30px;"
								onclick="javascript:window.location.href='Buyer_shoppinglist.php'">
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
