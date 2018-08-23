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
					/*$("#about_lattes_title").text(myObj["about_lattes_title"]);
					$("#about_lattes_content").text(myObj["about_lattes_content"]);
					$("#about_papers_title").text(myObj["about_papers_title"]);
					$("#about_papers_content").text(myObj["about_papers_content"]);
					$("#about_github_title").text(myObj["about_github_title"]);
					$("#about_github_content").text(myObj["about_github_content"]);*/

					$("#opt_cons").text(myObj["services_title"]);
					$("#services_web_title").text(myObj["services_web_title"]);
					$("#services_web_content").text(myObj["services_web_content"]);
					$("#services_ti_title").text(myObj["services_ti_title"]);
					$("#services_ti_content").text(myObj["services_ti_content"]);
					/*$("#services_seo_title").text(myObj["services_seo_title"]);
					$("#services_seo_content").text(myObj["services_seo_content"]);
					$("#services_optim_title").text(myObj["services_optim_title"]);
					$("#services_optim_content").text(myObj["services_optim_content"]);
					$("#services_cloud_title").text(myObj["services_cloud_title"]);
					$("#services_cloud_content").text(myObj["services_cloud_content"]);*/
					$("#services_mining_title").text(myObj["services_mining_title"]);
					$("#services_mining_content").text(myObj["services_mining_content"]);
					
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