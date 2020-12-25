    <!-- jQuery -->
	<script src="js/jquery.min.js" async onload="startIt()"></script>
	<!-- Bootstrap -->
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- WOW -->
	<!--<script src="js/wow.min.js" async onload="startWow()"></script>-->
		
	<script type="text/javascript">
		function startIt(lang="None"){
			$("#menu_bio").click(function() { $('html, body').animate({scrollTop: $("#opt_bio").offset().top}, 1500); });
			$("#menu_cons").click(function() { $('html, body').animate({scrollTop: $("#opt_cons").offset().top}, 1500); });
			$("#menu_solu").click(function() { $('html, body').animate({scrollTop: $("#opt_solu").offset().top}, 1500); });
			$("#menu_cont").click(function() { $('html, body').animate({scrollTop: $("#footer_contact").offset().top}, 1500); });
			$("#year").text(new Date().getFullYear());

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					myObj = JSON.parse(this.responseText);
					//document.title = myObj.title;
					$("#title").text(myObj["title"]);
					$("#subtitle1").text(myObj["subtitle1"]);
					/*$("#subtitle2").text(myObj["subtitle2"]);*/

					$("#menu_bio").text(myObj["about_title"]);
					$("#menu_cons").text(myObj["services_title"]);
					$("#menu_solu").text(myObj["methods_title"]);
					$("#menu_cont").text(myObj["footer_contact"]);

					$("#opt_bio").text(myObj["about_title"]);
					$("#about_content1").text(myObj["about_content1"]);
					$("#about_content2").text(myObj["about_content2"]);
					$("#about_content3").text(myObj["about_content3"]);
					$("#about_prof_title").text(myObj["about_prof_title"]);
					$("#about_prof_content").text(myObj["about_prof_content"]);
					$("#about_curr_title").text(myObj["about_curr_title"]);
					$("#about_curr_content").text(myObj["about_curr_content"]);
					$("#about_curr_content").attr("href", myObj["about_curr_link"]);

					$("#opt_cons").text(myObj["services_title"]);
					$("#serv_develop_title").text(myObj["serv_develop_title"]);
					$("#serv_develop_content").text(myObj["serv_develop_content"]);
					$("#serv_consult_title").text(myObj["serv_consult_title"]);
					$("#serv_consult_content").text(myObj["serv_consult_content"]);
					$("#serv_research_title").text(myObj["serv_research_title"]);
					$("#serv_research_content").text(myObj["serv_research_content"]);
					
					$("#footer_contact").text(myObj["footer_contact"]);
					$("#footer_follow").text(myObj["footer_follow"]);
					$("#footer_about").text(myObj["footer_about"]);
				}
			};

			if(lang == "None"){
				var language = window.navigator.userLanguage || window.navigator.language;
				if(language.indexOf("pt") < 0){
					xmlhttp.open("GET", "lang/lang_en.txt", true);
				}else{
					xmlhttp.open("GET", "lang/lang_pt.txt", true);
				}
			}
			else if(lang == "PT"){
				xmlhttp.open("GET", "lang/lang_pt.txt", true);
			}else{
				xmlhttp.open("GET", "lang/lang_en.txt", true);
			}
			
			xmlhttp.send();
		}

		function loadPT(){
			startIt("PT");
		}

		function loadEN(){
			startIt("EN");
		}
	</script>