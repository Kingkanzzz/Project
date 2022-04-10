<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Star rating</title>
	<link rel="stylesheet" href="stylestar.css">
	<style>
		.margin{
			margin-top: 30px;
			color: white;
		}
	</style>
</head>
<body background="BgPAGEALL.png">
	<form action="insertdatastar.php" method="POST">
	<div class="container && margin ">
		<div class="rating-wrap ">
			<h2>Star Rating</h2>
			<div class="center">
				<fieldset class="rating">
					<input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="full" title="Awesome"></label>
					<input type="radio" id="star4.5" name="rating" value="4.5"/><label for="star4.5" class="half"></label>
					<input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
					<input type="radio" id="star3.5" name="rating" value="3.5"/><label for="star3.5" class="half"></label>
					<input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
					<input type="radio" id="star2.5" name="rating" value="2.5"/><label for="star2.5" class="half"></label>
					<input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
					<input type="radio" id="star1.5" name="rating" value="1.5"/><label for="star1.5" class="half"></label>
					<input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
					<input type="radio" id="star0.5" name="rating" value="0.5"/><label for="star0.5" class="half"></label><br>
					<div class="post-box">
			<textarea name="comment" rows="3" value="" placeholder="comment"></textarea>
		</div>
				</fieldset>
			</div>
			<h4 id="rating-value"></h4>
		</div>
		
	</div > 
	<script src="star-ratings.js"></script>
	<div class="center">
	<input type="submit" value="บันทึกข้อมูล" >
	</div>
	
	</form>
	
</body>
</html>