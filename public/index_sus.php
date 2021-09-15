<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suspended Account</title>
</head>
<body>
	<section class="info">
		<div class="info-content">
			<div class="info-text">
				<h1>402</h1>
				<h2>Oops !</h2>
				<h3>This is Awkward.</h3>
				<p>Something went wrong here. It is possible that the further
				payment has not been made for the domain hosting.
				Either way we are investigating soon.</p>
				<a href="#">Reload</a>
			</div>
			<div class="info-img">
				<img src="ubsad.png">
			</div>
		</div>
	</section>
</body>
</html>

<style>
	body{
		padding: 50px 0 0 200px;
	}
	.info-content{
		display: flex;
		position: relative;
	}
	.info-text h1{
		font-size: 200px;
		font-weight: 600;
		color: #254e25;
		margin: 0;
		text-shadow: 3px 2px 3px #001000;
	}
	.info-text h2{
		font-size: 50px;
		margin: 0;
		font-weight: 600;
	}
	.info-text h3{
		margin: 0px;
		font-size: 40px;
	}
	.info-text p{
		font-size: 22px;
		text-align: justify;
		color: #2d2d2d;
		padding-bottom: 20px;
	}
	.info-img{
		padding-left: 200px;
		padding-top: 50px;
		margin-top: -107px;
	}
	.info-img img{
		height: 800px;
		width: 800px;
	}
	.info-text a{
		margin-top: 20px;
		padding: 7px;
		text-decoration: none;
		background: #254e25;
		color: white;
		font-weight: 600;
	}
	@media (max-width: 500px){
		.info-content{
			display: block;
			position: relative;
		}
		.info-text{
			position: absolute;
			bottom: -470px;
			left: -107px;
			padding-bottom: 20px;
		}
		.info-img{
			margin-left: -405px;
		}
		.info-img img{
			height: 500px;
			width: 500px;
		}
	}

</style>
