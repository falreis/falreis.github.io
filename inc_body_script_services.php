    <!-- jQuery -->
	<script src="js/jquery.min.js" async onload="startIt()"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js" async></script>
	<!-- WOW -->
	<!--<script src="js/wow.min.js" async onload="startWow()"></script>-->
		
	<script type="text/javascript">
		function startIt(lang="None"){
			$("#menu_bio").click(function() { $('html, body').animate({scrollTop: $("#opt_bio").offset().top}, 1500); });
			$("#menu_cons").click(function() { $('html, body').animate({scrollTop: $("#opt_cons").offset().top}, 1500); });
			$("#menu_solu").click(function() { $('html, body').animate({scrollTop: $("#opt_solu").offset().top}, 1500); });
			$("#menu_cont").click(function() { $('html, body').animate({scrollTop: $("#footer_contact").offset().top}, 1500); });

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					myObj = JSON.parse(this.responseText);
					$("#menu_bio").text(myObj["about_title"]);
					$("#menu_cons").text(myObj["services_title"]);
					$("#menu_solu").text(myObj["methods_title"]);
					$("#menu_cont").text(myObj["footer_contact"]);

					$("#opt_cons").text(myObj["services_title"]);
					$("#serv_develop_title").text(myObj["serv_develop_title"]);
					$("#serv_develop_content").text(myObj["serv_develop_content"]);
					$("#serv_consult_title").text(myObj["serv_consult_title"]);
					$("#serv_consult_content").text(myObj["serv_consult_content"]);
					$("#serv_research_title").text(myObj["serv_research_title"]);
					$("#serv_research_content").text(myObj["serv_research_content"]);
					
					$("#opt_solu").text(myObj["methods_title"]);
					$("#methods_os_title").text(myObj["methods_os_title"]);
					$("#methods_os_content").text(myObj["methods_os_content"]);
					$("#methods_light_title").text(myObj["methods_light_title"]);
					$("#methods_light_content").text(myObj["methods_light_content"]);
					$("#methods_agile_title").text(myObj["methods_agile_title"]);
					$("#methods_agile_content").text(myObj["methods_agile_content"]);
					$("#methods_dry_title").text(myObj["methods_dry_title"]);
					$("#methods_dry_content").text(myObj["methods_dry_content"]);
					$("#methods_continuous_title").text(myObj["methods_continuous_title"]);
					$("#methods_continuous_content").text(myObj["methods_continuous_content"]);
					$("#methods_love_title").text(myObj["methods_love_title"]);
					$("#methods_love_content").text(myObj["methods_love_content"]);

					$("#footer_contact").text(myObj["footer_contact"]);
					$("#footer_follow").text(myObj["footer_follow"]);
					$("#footer_about").text(myObj["footer_about"]);
				}
			};

			if(lang == "None"){
				var language = window.navigator.userLanguage || window.navigator.language;
				if(language.indexOf("pt") < 0){
					xmlhttp.open("GET", "lang_en.txt", true);
				}else{
					xmlhttp.open("GET", "lang_pt.txt", true);
				}
			}
			else if(lang == "PT"){
				xmlhttp.open("GET", "lang_pt.txt", true);
			}else{
				xmlhttp.open("GET", "lang_en.txt", true);
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