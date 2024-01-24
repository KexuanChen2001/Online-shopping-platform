<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<head>
		<link rel="stylesheet" href="Ourstyle.css"/>
	</head>
	<body>	
	<table width="1544" id="MAIN">
		<h1 id = "header" align="center">Comments</h1>
		<p>
			<?php
				session_start();
				echo "The BuyerID is:  " .$_SESSION['userID'];
			?>
		</p>
		<tr>
			  <td height="60"></td>
			  <td></td>
			  <td></td>
		</tr>
			<tr>
			  <td width="304" height="60">
				<div class="logo" colspan="2" align="left" style="font: solid;18pxfont-size: 18px; line-height: 1.4">
					<p align="left">
						<input type="button" value="Logout" style="width:100px;height:30px"
								onclick="javascript:window.location.href='loginPage.html'">
					</p>
					<br>
					<p align="left">
						<input type="button" value="Collection" style="width:100px;height:30px"
								onclick="javascript:window.location.href='Buyer_collection.php'">
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
				<td width="789" align="center">
					<div id = "comments" style="font: italic;font-size: 30px">
					<form action = "show comment.php", method = "POST">
							
							
							<button type = "submit" id = "add-comments">
								show all comments
							</button>
							<br>
							<br>
						</form>
						<p>
							<h6>Please input the content of the new comment of the specific shoesID</h6>
						</p>
						<br>
						<p id = "add">
						<form action = "add comment.php", method = "POST">
						<h6>Input the shoes you want to comment (ShoesID)</h6>
							<input id = "shoesID" name = "shoesID"> </input>
							<h6>The comment you want to put!</h6>	
							<input id = "new-comment" name = "content"></input>
							
							<br>
							<button type = "submit" id = "add-comments">
								add Comments
							</button>
						</form>
						</p>
					</div>
				</td>
				<td width="435"></td>
		    </tr>
			<tr>
				<td></td>
				<td height="500">
					
				</td>
				</tr>
		<script src="common.js"></script>
        </table>
	</body>
</html>