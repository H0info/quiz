<?php
include "header.php";
?>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="pin/jquery.pinlogin.min.js"></script>
		<link href="pin/jquery.pinlogin.css" rel="stylesheet" type="text/css" />

		<section class="price-table-area" id="single_ad_section" style="visibility: hidden; opacity: 0; height: 0; padding: 0"> </section>
		<section class="price-table-area" id="ads_section" style="visibility: hidden; opacity: 0; height: 0; padding: 0"> </section>
        
        <center>
		<section class="evviede-venir-area" id="quest_section" style="visibility: visible; opacity:1">
            <div class="container">
                <div class="evviede-venir-wrapper-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="evviede-venir-title" id="quizz">
                                <h2>
                                    Avant de commencer <br>
                                    <span>Entrer le matricule de Taxi</span>
                                </h2>
                                <p><div id="loginpin"></div></p>
                                <a href="javascript:void(0)">Commencer le quizz</a>
                            </div>
                            <div class="evviede-venir-title" id="question" style="visibility: hidden; opacity: 0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </center>


<?php

$sql_all = $conn->query("SELECT * FROM quizz ORDER BY rand() LIMIT 3");
$i = 1;
while ($row_all = $sql_all->fetch_assoc())
{
	echo '<input id="qst_'.$i.'" value="'.$row_all['id'].'" hidden>';
    echo '<input id="rep_'.$i.'" value="" placeholder="rep_'.$i.'" hidden>';
	$i++;
}
?>
		<script type="text/javascript">
			$(function(){
						
				var loginpin = $('#loginpin').pinlogin({
					fields : 5,
					
					complete : function(pin){

							 $.ajax({
							    url : 'taxi_serial.php',
							    type : 'POST',
							    data : ({pin:pin}),
							    success: function(html) 
							    {	
							    	if(html==1)
							    	{
							    		var step = 1;
							    		question(step);
							    	} else {
							    		loginpin.reset();
							    	}
							    }
							  });
					},
					
				});	

			});

            function question(step)
            {

                let qst = $('#qst_'+step+'').val();


                if(step<=3)
                {
                    $.ajax({
                        url : 'question.php',
                        type : 'POST',
                        data : ({step:step,qst:qst}),
                        success: function(html) 
                        {   
                            $('#question').html(html);
                             document.getElementById("single_ad_section").style="z-index: 0; position:relative; visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
                             document.getElementById("quizz").style="z-index: 0; position:relative; visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
                             document.getElementById("quest_section").style="z-index: 1; position:relative; visibility: visible; opacity: 100; transition: all 0.5s";
                             document.getElementById("question").style="z-index: 1; position:relative; visibility: visible; opacity: 100; transition: all 0.5s";
                        }
                      });
                } else {
                    let rep_1 = $('#rep_1').val();
                    let rep_2 = $('#rep_2').val();
                    let rep_3 = $('#rep_3').val();

                    let qst_1 = $('#qst_1').val();
                    let qst_2 = $('#qst_2').val();
                    let qst_3 = $('#qst_3').val();

                         $.ajax({
                            url : 'question.php',
                            type : 'POST',
                            data : ({step:step,rep_1:rep_1,rep_2:rep_2,rep_3:rep_3,qst_1:qst_1,qst_2:qst_2,qst_3:qst_3}),
                            success: function(html) 
                            {   
                                $('#question').html(html);
                                 document.getElementById("single_ad_section").style="z-index: 0; position:relative; visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
                                 document.getElementById("quizz").style="z-index: 0; position:relative; visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
                                 document.getElementById("quest_section").style="width: 50%; z-index: 1; position:relative; visibility: visible; opacity: 100; transition: all 0.5s";
                                 document.getElementById("question").style="z-index: 1; position:relative; visibility: visible; opacity: 100; transition: all 0.5s";
                            }
                          });
                }
            }

			function ad()
			{
                 let step = $('#step').val();
                 let answer = $('#answer').val();
                 document.getElementById("rep_"+step+"").value=answer;
				  $.ajax({
					    url : 'ads.php',
					    type : 'POST',
					    data : ({step:step}),
					    success: function(html) 
					    {
					      $('#ads_section').html(html);
					     	 document.getElementById("quest_section").style="visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
	                 		 document.getElementById("ads_section").style="z-index: 1; position:relative; visibility: visible; opacity: 100; transition: all 0.5s";
					    }
					  });
			}

			function single_ad(id)
			{
				let step = $('#step').val();
				$.ajax({
					    url : 'single_ad.php',
					    type : 'POST',
					    data : ({step:step,id:id}),
					    success: function(html) 
					    {
					        $('#single_ad_section').html(html);
					     	 document.getElementById("ads_section").style="visibility: hidden; opacity: 0; height:0; padding: 0; transition: all 0.5s";
	                 		 document.getElementById("single_ad_section").style="visibility: visible; opacity: 100; transition: all 0.5s";
					    }
					  });
                document.getElementById("single_ad_section").scrollIntoView(true);

			}

			 function logout()
            {
				$.ajax({
	                url : 'logout.php',
	                type : 'POST',
	              });
				location.reload();
            }

		</script>


<!-- footer-area-start -->
        <footer>
            <div class="container">
                <div class="footer-container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer-left-item">
                                <img src="images/LOWXY.png" class="img-fluid" alt="">
                                <p>Faire de chaque avenir une <br> réussite.</p>
                                <form action="#">
                                    <span>Langue</span>
                                    <select >
                                        <option value="francais">Francais</option>
                                        <option value="anglais">Anglais</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-menus">
                                <h2>À propos</h2>
                                <ul>
                                    <li><a href="#">CGU</a></li>
                                    <li><a href="#">Mentions légales</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Utilisation des cookies</a></li>
                                    <li><a href="#">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-menus">
                                <h2>Liens utiles</h2>
                                <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Geo Quiz</a></li>
                                    <li><a href="#">Audio-Guige Geo</a></li>
                                    <li><a href="#">Support the Start-up</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-footer">
                <div class="moblilef-logos">
                    <div class="m-logos">
                        <img src="images/LOWXY.png" class="img-fluid" alt="">
                        <p>Faire de chaque avenir une <br> réussite.</p>
                    </div>
                    <div class="m-selete">
                        <div class="footer-left-item">
                            <form action="#">
                                <span>Langue</span>
                                <select name="ss" id="ll">
                                    <option value="francais">Francais</option>
                                    <option value="anglais">Anglais</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-faq">
                    <div class="ziehharmonika">
                        <h3>À propos</h3>
                        <div>
                            <div class="footer-menus">
                                <ul>
                                    <li><a href="#">CGU</a></li>
                                    <li><a href="#">Mentions légales</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Utilisation des cookies</a></li>
                                    <li><a href="#">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ziehharmonika">
                        <h3>Liens utiles</h3>
                        <div>
                            <div class="footer-menus">
                                <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Geo Quiz</a></li>
                                    <li><a href="#">Audio-Guige Geo</a></li>
                                    <li><a href="#">Support the Start-up</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>