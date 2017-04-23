<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Millenium.kz</title>
	<link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <script type="text/javascript">
        $(document).on('ready', function () {
            $(".carousel").slick({
                dots: true,
				infinite: true,
				autoplay:true,
  				autoplaySpeed:1500,
				speed: 300,
				slidesToShow: 1,
				//adaptiveHeight: true,
				//centerMode: true
            });
        });
  </script>


</head>
<body>
<div class="mainwrapper">

	<div class="topcontent">
		<img src="img/top.png">
	</div>

	<header>
		<div class="topwrapper">
			<img src="img/logo.png">
			<div class="reserve">
				<span> Выбрать услугу и записаться </span>
			</div>
		</div>
		<div class="mainmenu">
			<ul>
				<li> <a href="index.php"> Главная </a> </li>
				<li> <a href="services.php"> Услуги </a> </li>
				<li class="active"> <a href="masters.php"> Мастера </a> </li>
				<li> <a href="contacts.php"> Контакты </a> </li>
		</div> 
	</header>

	<div class="mainarea">
			<div class="masters">
				<ul>
					<li> 
						 <img src="img/3m.jpg" >
						 <div class="masterinfo"> 
						 	<span>  Дециева Камилла</span> 
						 	<span>  Мастер по женской эпиляции </span> 
						 </div>
					 </li>
					 <li> 
						 <img src="img/3m.jpg" >
						 <div class="masterinfo"> 
						 	<span>  Дециева Камилла</span> 
						 	<span>  Мастер по женской эпиляции </span> 
						 </div>
					 </li>
					 <li> 
						 <img src="img/3m.jpg" >
						 <div class="masterinfo"> 
						 	<span>  Дециева Камилла</span> 
						 	<span>  Мастер по женской эпиляции </span> 
						 </div>
					 </li>
				</ul>
			</div>

	   	<footer>
			<span class="left"> &copy Салон красоты MILLENIUM,2017</span> 
			<span class="right">  E-mail:salon-millenium@mail.ru </span>
	   	</footer>

	</div>	

</div>

</body>
</html>