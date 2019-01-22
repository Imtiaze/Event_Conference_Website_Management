<?php include 'connection.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

	<title>Eventr - One Page Event Template</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Eventr - One Page Event Template">
	<meta name="author" content="themecube">

	<!-- viewport settings -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="css/helper.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/salvattore.css">
	<link rel="stylesheet" href="css/jquery.countdown.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="stylesheet" href="css/revolution.css">
	<link rel="stylesheet" href="css/revolution-extralayers.css">

	<link rel="stylesheet" href="css/main.css">


	<!-- Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">


</head>

<body>

	<!-- PRELOADING -->
	<div id="preload">
		<div class="preload">
			<div class="spinner"></div>
		</div>
	</div>

	<!-- NAVIGATION -->
	<nav id="nav-primary" class="navbar navbar-custom" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- logo change				 -->
				<a href="index.php">
					<?php
					$res = mysqli_query($link, "SELECT * FROM logo");
					while($row = mysqli_fetch_array($res)){
						?>
						<img src="<?php echo "../admin/images/logo/".$row['logo']; ?>" alt="logo" height="53" width="120">
						<?php
					}
					?>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="nav">
				<ul class="nav navbar-nav navbar-right uppercase">
					<li><a data-toggle="elementscroll" href="#info">About</a></li>
					<li><a data-toggle="elementscroll" href="#speakers">Speakers</a></li>
					<li><a data-toggle="elementscroll" href="#program">Program</a></li>
					<li><a data-toggle="elementscroll" href="#venue">Venue</a></li>
					<li><a data-toggle="elementscroll" href="#register">Register</a></li>
					<li><a data-toggle="elementscroll" href="#gallery">Gallery</a></li>
					<li><a data-toggle="elementscroll" href="#sponsors">Sponsors</a></li>
					<li><a data-toggle="elementscroll" href="#footer">Contact</a></li>
				</ul>
			</div>

		</div>
	</nav>

	<!-- FULLSCREEN SLIDER -->
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
				<!-- SLIDE 1 -->
				<?php

				$res = mysqli_query($link, "SELECT * FROM slider");

				while($row = mysqli_fetch_array($res)){
					?>
					<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="img/slide_thumb_1.jpg" data-saveperformance="off" data-title="Slide">
						<!-- MAIN IMAGE -->


						<img src="<?php echo "../admin/images/slider/".$row['image']; ?>" alt="fullslide1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme" data-x="center" data-hoffset="250" data-y="center" data-voffset="-70" data-speed="600" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
						data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $row['title']; ?>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme" data-x="center" data-hoffset="205" data-y="center" data-voffset="-10" data-speed="600" data-start="900" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none"
					data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $row['short_description']; ?>
				</div>
			</li>
			<?php
		}
		?>

	</ul>
	<div class="tp-bannertimer"></div>
</div>
</div>

<!-- HIGHLIGHT -->
<section id="highlight">
	<div class="container-fluid">
		<div class="row">

			<div id="left" class="left col-lg-9 col-md-8 text-right">
				<h2>Join the conference</h2>
				<p>Lorem ipsum dolor sit amet
				</div>

				<div id="right" class="col-lg-3 col-md-4 text-left">
					<div id="countdown"></div>
				</div>

			</div>
		</div>
	</section>

	<!-- INFO -->
	<section id="info">
		<div class="container">
			<div class="row">


				<?php
				$temp_event_result = mysqli_query($link, "SELECT * FROM event");

				$id =  mysqli_num_rows($temp_event_result);

				//echo $id;

				$event_query = "SELECT * FROM event WHERE id='$id'";
				$event_result = mysqli_query($link, $event_query);

				//echo mysqli_num_rows($event_result);

				while($row = mysqli_fetch_array($event_result)){
					?>

					<div class="col-lg-12 text-center">
						<h1><?php echo $row['event_title']; ?></h1>
						<p class="lead"><?php echo $row['event_description']; ?></p>
					</div>

					<div class="col-lg-10 col-lg-offset-1 col-md-12 text-center">
						<div class="row">

							<div class="feature col-lg-4 col-md-4 col-sm-4">
								<i class="pe-4x pe-7s-refresh-2"></i>
								<h4><?php echo $row['event_topic']; ?></h4>
								<p><?php echo $row['topic_description']; ?></p>
							</div>

							<div class="feature col-lg-4 col-md-4 col-sm-4">
								<i class="pe-4x pe-7s-micro"></i>
								<h4><?php echo $row['event_speaker']; ?></h4>
								<p><?php echo $row['speaker_description']; ?></p>
							</div>

							<div class="feature col-lg-4 col-md-4 col-sm-4">
								<i class="pe-4x pe-7s-headphones"></i>
								<h4><?php echo $row['event_language']; ?></h4>
								<p><?php echo $row['language_description']; ?></p>
							</div>

						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>

	<!-- SPEAKERS -->
	<section id="speakers">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<h2 class="uppercase">speakers</h2>
					<p class="lead">Nam pellentesque fringilla faucibus. Aliquam tortor ex, egestas porta eget, pretium at lorem.</p>
				</div>

				<ul id="list-speaker" class="list-unstyled">

					<!-- SPEAKER 1 -->
					<?php

					$speakerQuery = "SELECT * From speakers ORDER BY id DESC LIMIT 8";
					$spekaerResult = mysqli_query($link, $speakerQuery);
					while($speakerRow = mysqli_fetch_array($spekaerResult)){
						?>
						<li class="col-lg-3 col-md-3 col-sm-4">
							<div class="speaker">
								<figure class="effect-ming">
									<img class="img-responsive" src="<?php echo "../admin/images/speakers/".$speakerRow['speaker_image']; ?>" alt="" height="350" width="350"/>
									<figcaption>
										<span><a class="html-popup" href="speaker_details.php?id=<?php echo $speakerRow['id']; ?>"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
									</figcaption>
								</figure>

								<div class="caption text-center">
									<h4><?php echo $speakerRow['speaker_firstname']." ".$speakerRow['speaker_lastname']; ?></h4>
									<p class="company"><?php echo $speakerRow['speaker_company']; ?></p>
								</div>
							</div>
						</li>
						<?php
					}
					?>


					<!-- SPEAKER 2 -->
					<!-- <li class="col-lg-3 col-md-3 col-sm-4">
					<div class="speaker">
					<figure class="effect-ming">
					<img class="img-responsive" src="img/speaker2.png" alt="" />
					<figcaption>
					<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
				</figcaption>
			</figure>

			<div class="caption text-center">
			<h4>Jane Richards</h4>
			<p class="company">Hipmunk</p>
		</div>
	</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker3.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Martin Pearson</h4>
<p class="company">Kitten Co.</p>
</div>
</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker4.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Jessica Green</h4>
<p class="company">Magna</p>
</div>
</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker5.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Herman Russell</h4>
<p class="company">Zenquoace</p>
</div>
</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker6.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Joan Graves</h4>
<p class="company">Howtech</p>
</div>
</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker7.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Peter Reid</h4>
<p class="company">Ventolax</p>
</div>
</div>
</li>


<li class="col-lg-3 col-md-3 col-sm-4">
<div class="speaker">
<figure class="effect-ming">
<img class="img-responsive" src="img/speaker8.png" alt="" />
<figcaption>
<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="img/plus.png" alt=""></a></span>
</figcaption>
</figure>

<div class="caption text-center">
<h4>Tracey Curtis</h4>
<p class="company">Zathmedia</p>
</div>
</div>
</li> -->

</ul>

<div class="col-lg-12 col-md-12 col-sm-12 text-center">
	<a id="loadmore" class="button button-small button-line-dark">load more</a>
</div>

</div>
</div>
</section>

<!-- PROGRAM -->
<section id="program">
	<div class="container">
		<div class="row">

			<div class="col-lg-12">

				<h2 class="uppercase">PROGRAM</h2>
				<p class="lead">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>

				<!-- SCHEDULE TAB -->
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#day1" id="day1-tab" role="tab" data-toggle="tab" aria-controls="day1" aria-expanded="true">Day 1</a></li>
					<li role="presentation" class=""><a href="#day2" role="tab" id="day2-tab" data-toggle="tab" aria-controls="day2" aria-expanded="false">Day 2</a></li>
					<li role="presentation" class=""><a href="#day3" role="tab" id="day3-tab" data-toggle="tab" aria-controls="day3" aria-expanded="false">Day 3</a></li>
				</ul>

				<!-- CONTENT -->
				<div id="myTabContent" class="tab-content">

					<!-- DAY 1 -->
					<div role="tabpanel" class="tab-pane fade active in" id="day1" aria-labelledby="day1-tab">
						<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

							<!-- PROGRAM 1-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading1">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">08.00</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program1" aria-expanded="true" aria-controls="Program1">
													Mauris rhoncus scelerisque lacus
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker1.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Stanley Willis</p>
												<h4>Mauris rhoncus scelerisque lacus</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Stanley Willis</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 2-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading2">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">08.45</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program2" aria-expanded="true" aria-controls="Program2">
													Sed porta ex purus ut commodo est facilisis sit amet
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker2.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Jane Richards</p>
												<h4>Sed porta ex purus, ut commodo est facilisis sit amet</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Jane Richards</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 3-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading3">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">09.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program3" aria-expanded="true" aria-controls="Program3">
													Phasellus tellus libero placerat quis amet
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker3.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Martin Pearson</p>
												<h4>Phasellus tellus libero, placerat quis amet</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Martin Pearson</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 4-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading4">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">10.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program4" aria-expanded="true" aria-controls="Program4">
													Proin et augue massa
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker4.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Jessica Green</p>
												<h4>Proin et augue massa</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">120mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Intermediate</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Jessica Green</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 5-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading5">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">12.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program5" aria-expanded="true" aria-controls="Program5">
													Maecenas efficitur justo sed accumsan rhoncus
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker5.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Herman Russell</p>
												<h4>Maecenas efficitur justo sed accumsan rhoncus</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">60mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Intermediate</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Herman Russell</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

						</div>
					</div>

					<!-- DAY 2 -->
					<div role="tabpanel" class="tab-pane fade in" id="day2" aria-labelledby="day2-tab">
						<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">

							<!-- PROGRAM 6-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading6">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">09.00</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program6" aria-expanded="true" aria-controls="Program6">
													Cum sociis natoque penatibus
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker6.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Joan Graves</p>
												<h4>Cum sociis natoque penatibus</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">60mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Expert</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Joan Graves</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 7-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading7">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">10.00</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program7" aria-expanded="true" aria-controls="Program7">
													Maecenas ut iaculis lorem eu suscipit
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker7.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Peter Reid</p>
												<h4>Maecenas ut iaculis lorem eu suscipit</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Peter Reid</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 8-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading8">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">10.45</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program8" aria-expanded="true" aria-controls="Program8">
													Sed et molestie nulla bibendum
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker8.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Tracey Curtis</p>
												<h4>Sed et molestie nulla bibendum</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">60mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Tracey Curtis</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 9-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading9">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">11.45</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program9" aria-expanded="true" aria-controls="Program9">
													Praesent dapibus semper nisi sit amet hendrerit
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker1.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Stanley Willis</p>
												<h4>Praesent dapibus semper nisi sit amet hendrerit</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">120mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Intermediate</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Stanley Willis</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 10-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading10">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">13.45</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program10" aria-expanded="true" aria-controls="Program10">
													Ut posuere ipsum a laoreet
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker2.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Jane Richards</p>
												<h4>Ut posuere ipsum a laoreet</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">60mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beinner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Jane Richards</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

						</div>
					</div>

					<!-- DAY 3 -->
					<div role="tabpanel" class="tab-pane fade in" id="day3" aria-labelledby="day3-tab">
						<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">

							<!-- PROGRAM 11-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading11">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">08.00</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program11" aria-expanded="true" aria-controls="Program11">
													Mauris rhoncus scelerisque lacus
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker1.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Stanley Willis</p>
												<h4>Mauris rhoncus scelerisque lacus</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Stanley Willis</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 12-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading12">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">08.45</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program12" aria-expanded="true" aria-controls="Program12">
													Sed porta ex purus ut commodo est facilisis sit amet
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker2.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Jane Richards</p>
												<h4>Sed porta ex purus, ut commodo est facilisis sit amet</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Jane Richards</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 13-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading13">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">09.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program13" aria-expanded="true" aria-controls="Program13">
													Phasellus tellus libero placerat quis amet
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker3.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Martin Pearson</p>
												<h4>Phasellus tellus libero, placerat quis amet</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">45mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Beginner</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Martin Pearson</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 14-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading14">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">10.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program14" aria-expanded="true" aria-controls="Program14">
													Proin et augue massa
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker4.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Jessica Green</p>
												<h4>Proin et augue massa</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">120mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Intermediate</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Jessica Green</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

							<!-- PROGRAM 15-->
							<div class="panel panel-default">

								<!-- Program Heading -->
								<div class="panel-heading" role="tab" id="heading15">

									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1">
											<p class="date">12.30</p>
										</div>

										<div class="col-lg-11 col-md-11 col-sm-11">

											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#Program15" aria-expanded="true" aria-controls="Program15">
													Maecenas efficitur justo sed accumsan rhoncus
												</a>
											</h4>
										</div>
									</div>

								</div>

								<div id="Program15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
									<!-- Program Content -->
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-2">
												<img class="img-responsive img-circle" src="img/speaker5.png" alt="">
											</div>

											<div class="col-lg-7 col-md-7 col-sm-10">
												<p class="speaker-name uppercase">Herman Russell</p>
												<h4>Maecenas efficitur justo sed accumsan rhoncus</h4>
												<p>Sed facilisis justo vitae risus viverra vulputate. Mauris vel ipsum dignissim diam viverra condimentum. Donec sodales, diam eget mattis condimentum, quam neque tempus purus, dictum viverra risus nisl quis metus.</p>

												<p><i class="fa fa-lg fa-clock-o"></i> <span class="small">60mins</span></p>
												<p><i class="fa fa-lg fa-map-marker"></i> <span class="small">Saloon A</span></p>
												<p><i class="fa fa-lg fa-signal"></i> <span class="small">Intermediate</span></p>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-10">
												<h5>About Herman Russell</h5>
												<p class="small">Sed non congue nunc. Fusce pulvinar elementum rhoncus. Duis sit amet metus erat. Sed et ligula mattis, dictum nisl et, vestibulum urna.</p>
												<span class="about-speaker"><i class="fa fa-lg fa-globe"></i> <a class="small" href="#">themecube.net</a></span>
											</div>

										</div>
									</div>

								</div>

							</div>

						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</section>

<!-- DOWNLOAD -->
<section id="download">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-3">
						<img class="img-responsive" src="img/download.png" alt="">
					</div>

					<div class="col-lg-8 col-md-8 col-sm-9">
						<h3>Quisque mollis est justo<br>nec pretium elit vulputate sit amet.</h3>
						<p>In at velit eu est vehicula posuere. Sed sagittis, urna nec pellentesque molestie, est nisi laoreet metus. Nam ac turpis ut orci eleifend suscipit eu in odio. Morbi volutpat mattis urna, et fringilla eros ultrices eu.</p>

						<a class="button button-small button-line-dark" href="#">download pdf</a>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<!-- VENUE -->
<section id="venue">

	<div class="venue">
		<div class="venue-inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-8 col-md-8 col-sm-8">
						<h2 class="uppercase">venue</h2>
						<p class="lead">Donec finibus porta ultricies.<br>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
						<h4>Recrea Hotel on Broadway</h4>
						<img class="img-responsive" src="img/hotel-logo.png" alt="hotel">
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4">
						<i class="pe-4x pe-7s-map-2"></i>
						<h4 class="uppercase">address</h4>
						<p>49 West 32nd Street, New York, NY 10001<br>
							1 212 736-3800<br>
							4.9 mi / 7.9 km from Downtown</p>

							<a class="button button-xsmall button-line-light" href="">more information</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-3">
					<h3>Accomodation Alternatives</h3>
					<p>Quisque ut dui eget nibh ultrices pulvinar sit amet ut lectus.</p>
				</div>

				<div class="col-lg-9 col-md-9">

					<!-- hotel carousel -->
					<div id="hotel-carousel">
						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="img/hotel-img1.png" alt="">

								<div class="caption">
									<h5 class="uppercase">Magna Resort</h5>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>

									<p class="small">Pellentesque habitant morbi tristique et<br>netus et malesuada fames ac turpis egestas.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>

							</div>
						</div>

						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="img/hotel-img2.png" alt="">

								<div class="caption">
									<h5 class="uppercase">Quisque Plaza</h5>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>

									<p class="small">Proin nibh augue eget massa vel<br>semper imperdiet integer vitae orci mauris.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>

							</div>
						</div>

						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="img/hotel-img3.png" alt="">

								<div class="caption">
									<h5 class="uppercase">convallis</h5>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</span>

									<p class="small">Pellentesque habitant tristique senectus<br>et netus et malesuada fames ac turpis egestas.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

	</section>

	<!-- FUNFACTS -->
	<section id="funfacts">
		<div class="funfacts-inner">
			<div class="container">
				<div class="row">

					<h2 class="hidden">funfacts</h2>

					<div class="col-lg-10 col-lg-offset-1">
						<div id="funfacts-carousel">

							<div class="item">
								<i class="pe pe-4x pe-7s-world"></i>
								<div class="desc">
									<p class="number">72</p>
									<p class="description">countries</p>
								</div>
							</div>

							<div class="item">
								<i class="pe pe-4x pe-7s-micro"></i>
								<div class="desc">
									<p class="number">38</p>
									<p class="description">speakers</p>
								</div>
							</div>

							<div class="item">
								<i class="pe pe-4x pe-7s-display2"></i>
								<div class="desc">
									<p class="number">126</p>
									<p class="description">programs</p>
								</div>
							</div>

							<div class="item">
								<i class="pe pe-va pe-4x pe-7s-id"></i>
								<div class="desc">
									<p class="number">495</p>
									<p class="description">attenders</p>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- REGISTER -->
	<section id="register">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<h2 class="uppercase text-center">register</h2>
					<p class="lead text-center">Nam pellentesque fringilla faucibus. Aliquam tortor ex, egestas porta eget, pretium at lorem.</p>
				</div>

				<div class="col-lg-12">
					<!-- PRICE TABLES -->
					<div id="price-carousel">

						<div class="price-table early-bird">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i>
							</div>

							<div class="table-header">
								<h3>Early Bird</h3>
								<p class="price">$150</p>
							</div>

							<ul class="desc list-unstyled">
								<li>Conference Kit</li>
								<li>Coffee break</li>
								<li>Lunch</li>
								<li>All seasons</li>
							</ul>
						</div>

						<div class="price-table standart">
							<div class="icon">
								<i class="pe-5x pe-va pe-7s-ribbon"></i>
							</div>

							<div class="table-header">
								<h3>Standart</h3>
								<p class="price">$175</p>
							</div>

							<ul class="desc list-unstyled">
								<li>Conference Kit</li>
								<li>Coffee break</li>
								<li>Lunch</li>
								<li>All seasons</li>
							</ul>
						</div>

						<div class="price-table vip">
							<div class="icon">
								<i class="pe-5x pe-va pe-7s-diamond"></i>
							</div>

							<div class="table-header">
								<h3>Exclusive</h3>
								<p class="price">$250</p>
							</div>

							<ul class="desc list-unstyled">
								<li>Conference Kit</li>
								<li>Coffee break</li>
								<li>Lunch</li>
								<li>All seasons</li>
							</ul>
						</div>

					</div>
				</div>

				<div class="col-lg-12 text-center">
					<a class="button button-small button-line-dark html-popup" href="register.html">register now</a>
				</div>

			</div>
		</div>
	</section>

	<!-- GALLERY -->
	<section id="gallery">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<?php
					$gallery_result = mysqli_query($link, "SELECT * FROM gallery_status");
					while($gallery_row = mysqli_fetch_array($gallery_result)){
						?>

						<h2 class="uppercase"><?php echo $gallery_row['title']; ?></h2>
						<p class="lead"><?php echo $gallery_row['description']; ?></p>
						<?php
					}
					?>
					<div id="timeline" data-columns>

						<?php
						$gallery_photo_result = mysqli_query($link, "SELECT * FROM gallery_photo ORDER BY id DESC LIMIT 8");
						while($gallery_photo_row = mysqli_fetch_array($gallery_photo_result)){
							?>
							<div class="item wrap">
								<img class="img-responsive" src="<?php echo "../admin/images/gallery/".$gallery_photo_row['photo']; ?>" alt="">
								<div class="overlay"></div>
								<div class="icon">
									<a class="image-popup" href="<?php echo "../admin/images/gallery/".$gallery_photo_row['photo']; ?>" title="<h4>Sed at rutrum felis</h4>Curabitur nec metus tempor, malesuada quam a, laoreet urna."><i class="pe-3x pe-7s-plus"></i></a>
								</div>
							</div>
							<?php
						}

						?>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- TESTIMONIAL -->
	<section id="testimonial">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 no-padding">
					<div class="testimonial-inner">
						<h2 class="hidden">testimonial</h2>

						<div id="testimonial-carousel">
							<div class="item">
								<img class="img-circle" src="img/testimonial1.png" alt="">
								<p class="lead">Nulla euismod sit amet ligula in vehicula. Vestibulum cursus ex non ante dignissim ultricies.Sed egestas hendrerit neque tincidunt mattis. Duis euismod porta tempus.</p>
								<p class="name">Todd Stone</p>
							</div>

							<div class="item">
								<img class="img-circle" src="img/testimonial2.png" alt="">
								<p class="lead">Nulla euismod sit amet ligula in vehicula. Vestibulum cursus ex non ante dignissim ultricies. Sed egestas hendrerit neque tincidunt mattis. Duis euismod porta tempus.</p>
								<p class="name">Minnie Pierce</p>
							</div>

							<div class="item">
								<img class="img-circle" src="img/testimonial3.png" alt="">
								<p class="lead">Nulla euismod sit amet ligula in vehicula. Vestibulum cursus ex non ante dignissim ultricies. Sed egestas hendrerit neque tincidunt mattis. Duis euismod porta tempus.</p>
								<p class="name">Lena Kim</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- SPONSORS -->
	<section id="sponsors">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<?php
					$sponsors_result = mysqli_query($link, "SELECT * FROM sponsors_status");
					while($sponsors_row = mysqli_fetch_array($sponsors_result)){
						?>
						<h2 class="uppercase"><?php echo $sponsors_row['title']; ?></h2>
						<p class="lead"><?php echo $sponsors_row['description']; ?></p>
						<?php
					}
					?>
					<div id="sponsors-carousel">

						<?php
						$sponsors_photo_result = mysqli_query($link, "SELECT * FROM sponsors_photo ORDER BY id DESC LIMIT 5");
						while($sponsors_photo_row = mysqli_fetch_array($sponsors_photo_result)){
							?>

							<div class="sponsor">
								<img class="img-responsive" src="<?php echo "../admin/images/sponsors/".$sponsors_photo_row['photo']; ?>"  height="200" width="400" >
							</div>
							<?php
						}

						?>

					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- google map -->
	<div id="gmap_canvas"></div>

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-3 col-sm-6">
					<h4 class="uppercase">eventr'15</h4>
					<p class="small">Vestibulum in ultrices justo. Praesent placerat justo metus, vitae malesuada lacus eleifend vel. Vivamus viverra volutpat leo, a gravida dolor posuere congue.</p>
					<ul class="list-unstyled list-inline uppercase">
						<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6">
					<h4 class="uppercase">FAQ</h4>
					<!--<p class="small">Etiam nec porta risus. Aliquam id odio orci. Duis accumsan feugiat feugiat.</p>-->

					<dl class="faqs">
						<dt>Is this the first question?</dt>
						<dd class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</dd>

						<dt>Mauris ac metus in justo rhoncus?</dt>
						<dd class="small">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</dd>

						<dt>Praesent eleifend lacinia?</dt>
						<dd class="small">Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo.</dd>

						<dt> Cras id metus vitae?</dt>
						<dd class="small">Vivamus dignissim urna id condimentum lacinia. Fusce tristique ultrices est, at semper turpis ullamcorper eu.</dd>
					</dl>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-12">
					<h4 class="uppercase">newsletter</h4>

					<div class="row">
						<div class="col-lg-8">
							<input type="email" id="newsletter_email">
						</div>
						<div class="col-lg-4">
							<button class="button button-big button-line-light" onclick="newsletter_send();">subscribe</button>
						</div>
					</div>

					<p class="small">Pellentesque laoreet leo ut suscipit feugiat. Sed ultricies convallis nunc quis malesuada.</p>

				</div>

			</div>
		</div>
	</footer>

	<!-- SUBFOOTER -->
	<div class="subfooter">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<ul class="list-unstyled list-inline pull-right uppercase">
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Press Kit</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>



	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.themepunch.tools.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/salvattore.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/retina.js"></script>

	<script src="js/main.js"></script>




	<!-- GOOGLE ANALYTICS -->
	<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
		m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-XXXXXXX-XX', 'yourdomain.com');
	ga('send', 'pageview');
	</script>

</body>

</html>
