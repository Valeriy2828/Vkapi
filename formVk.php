<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<title><?php //echo $config['title1']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />
</head>
<body>

<div class="col-md-4">
	<form method="post" action="getUser.php">
	  <div class="form-group">
		<label for="exampleInput">GET USER INFO</label>
		<input type="text" name="user_id" class="form-control" placeholder="user ID">		
	  </div>	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<div class="col-md-4">
	<form method="post" action="getGroup.php">
	  <div class="form-group">
		<label for="exampleInput">GET GROUPS INFO</label>
		<input type="text" name="group_id" class="form-control" placeholder="group ID">		
	  </div>	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<div class="col-md-4">
	<form method="post" action="getFriends.php">
	  <div class="form-group">
		<label for="exampleInput">GET FRIENDS INFO</label>
		<input type="text" name="friends_id" class="form-control" placeholder="user ID">		
	  </div>	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>