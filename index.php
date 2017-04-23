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
				<li class="active"> <a href="index.php"> Главная </a> </li>
				<li> <a href="services.php"> Услуги </a> </li>
				<li> <a href="masters.php"> Мастера </a> </li>
				<li> <a href="contacts.php"> Контакты </a> </li>
		</div> 
	</header>

	<div class="mainarea">
		<div class="actionswrapper">
			<ul>
				<li> 
					<h3> 1.Выберите </h3>
					<span> Выберите услуги по красоте и здоровью </span>
				</li>
				<li> 
					<h3> 2.Забронируйте </h3>
					<span> Забронируйте прямо на сайте в календаре  </span>
				</li>
				<li> 
					<h3> 3.Наслаждайтесь </h3>
					<span> Распологайтесь максимально комфортно </span>
				</li>
		</div>

		<div class="carouselwrapper">
			 <section class="carousel reqular">
			 	<div>
		        	<img class="carouselimg" src="img/01.jpg">
		        </div>
		        <div>
		        	<img class="carouselimg" src="img/1.jpg">
		        </div>
		        <div>
		            <img class="carouselimg" src="img/2.jpg">
		        </div>
		        <div>
		            <img class="carouselimg" src="img/3.jpg">
		        </div>
		        <div>
		            <img class="carouselimg" src="img/4.jpg">
		        </div>
		        <div>
		            <img class="carouselimg" src="img/5.jpg">
		        </div>
		        <div>
		            <img class="carouselimg" src="img/6.jpg">
		        </div>
	   		</section>
	   	</div>

	   	<footer>
			<span class="left"> &copy Салон красоты MILLENIUM,2017</span> 
			<span class="right">  E-mail:salon-millenium@mail.ru </span>
	   	</footer>
	</div>	

</div>

</body>
</html>