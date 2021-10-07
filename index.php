<!--............-->
<?php 
include("inc_head.php");
include("inc_body_nav.php");
?>
<!--............-->

<!--<body>-->
	<div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes" style="border-bottom:#EEE solid 1px;">
		<div class="fh5co-cover-text">
			<div class="container">
				<div class="row">
					<div class="col-md-push-6 col-md-6 full-height js-full-height">
						<div class="fh5co-cover-intro" style="height: 800px">
							<h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color:#FFF;" id="title">
								Olá, eu sou Felipe Reis
							</h1>
							<h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s" style="color:#FFF;">
								<span id="subtitle1">
									Engenheiro de Computação.
								</span>
								<br> 
							</h2>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="fh5co-features-style-2" style="background-color:#FFF;border-bottom:#EEE solid 1px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h2 class="fh5co-heading wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" id="opt_bio"></h2>
					<div class="col-md-3 col-sm-12 col-xs-12 col-xxs-12">
						<span style="display:table-cell; vertical-align: middle;">
							<img src="images/falreis_linkedin_branco.jpg" style="max-height: 250px;max-width: 250px;border-radius: 50%;" />
						</span>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12 col-xxs-12">
							<span style="display:table-cell; vertical-align: middle;">
								<div id="about_content1" class="about-content"></div>
								<div id="about_content2" class="about-content"></div>
							</span> 
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 col-xxs-12" id="about_content3" class="about-content" style="text-align: left;"></div>
				</div>
			</div>
			<div style="height:30px; color:#000;"></div>
			<div class="row" style="margin:0 7%;">
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
					<div class="fh5co-icon"><i class="icon-linkedin"></i></div>
					<div class="fh5co-desc">
						<h3 id="about_prof_title"></h3>
						<p><a href="http://br.linkedin.com/in/falreis" target="_blank" id="about_prof_content"></a></p>
					</div>	
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
					<div class="fh5co-icon"><i class="icon-file"></i></div>
					<div class="fh5co-desc">
						<h3 id="about_curr_title"></h3>
						<p><a href="curriculum/pt_felipe-reis.pdf" target="_blank" id="about_curr_content"></a></p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
			</div>
		</div>
	</div>
	<div class="fh5co-features-style-1" style="background-color:#FFF;border-bottom:#EEE solid 1px;" data-stellar-background-ratio="0.5">
		<div class="container" style="z-index: 3; position: relative;">
			<div class="row p-b">
				<div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
					<h2 class="fh5co-heading" id="opt_cons"></h2>
				</div>
			</div>
			<div class="row">
				<div class="fh5co-features">
					<div class="fh5co-feature wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
						<!-- <a href="development.php"> -->
							<center><div class="icon"><i class=" icon-monitor"></i></div></center>
							<h3 id="serv_develop_title"></h3>
							<p id="serv_develop_content"></p>
						<!-- </a> -->
					</div>
					<!--
					<div class="fh5co-feature wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
						<center><div class="icon"><i class="icon-cloud"></i></div></center>
						<h3 id="serv_consult_title"></h3>
						<p id="serv_consult_content"></p>
					</div>
					-->
					<div class="fh5co-feature wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s" style="border: 0px #FFF;">
						<!-- <a href="research.php"> -->
							<center><div class="icon"><i class="icon-search"></i></div></center>
							<h3 id="serv_research_title"></h3>
							<p id="serv_research_content"></p>
						<!-- </a> -->
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--............-->
	<?php 
		include("inc_body_footer.php");
	?>
	<!--............-->
</div>

<!--............-->
<?php 
    include("inc_body_script_home.php");
?>
<!--............-->
</body>
</html>