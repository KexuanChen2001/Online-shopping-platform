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
					Comments checking for sellers!
				</h1>
				<div id = "collection-list" background-color = "blue">
					<p>
						<?php
							session_start();
							echo "The sellingID is:  " .$_SESSION['userID'];
						?>
					</p>
					<form action = "check comment.php", method = "POST">
						<p align="center">Input the shoes you want to check the comment (ShoesID)</p>
						<input id = "shoesID" name = "shoesID">
						</input>
						<br>
						<button type = "submit" id = "check-comments">
							Check Comments
						</button>
					</form>
					<br>
						<a href = "Seller_website.php">
							Exit
						</a>
				</div>
				</td>
				<td width="48" rowspan="2">
				</td>
			</tr>
	<script src="common.js"></script>
	</table>
	</body>
</html>
		
		
