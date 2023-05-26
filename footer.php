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
        <!-- footer-area-end -->
        


        <!--Main-jquery-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!--wow jQuery animated  -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>

            $(document).ready(function() {
                $( window ).scroll(function() {
                    var height = $(window).scrollTop();
                    if(height >= 1) {
                        $('.customss2 ').addClass('fixed-menu2');
                    } else {
                        $('.customss2 ').removeClass('fixed-menu2');
                    }
                });
            });

            const validateEmail = (email) => {
              return email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
              );
            };

            function inscription_2 ()
            {
                 let acc_type = $('#acc_type:checked').val();
                 let email = $('#email').val();
                 var error = 0;
                 if(validateEmail(email)) {error=0;} else {error=1}
                 if(email=="" || error==1) {error = 1; document.getElementById("email_error").style="display: inline-block;";}
                 else{
                    $.ajax({
                    url : 'inscription_2.php',
                    type : 'POST',
                    data : ({acc_type:acc_type, email:email}),
                    success: function(html) 
                    {
                      $('#inscription_2').html(html);
                      document.getElementById("inscription_1").style="visibility: hidden; opacity: 0; height:0; transition: all 0.5s";
                      document.getElementById("inscription_2").style="visibility: visible; opacity: 100; transition: all 0.5s";
                    }
                  });
                 }
                  
            }

            function inscription_3()
            {
            	let type = $('#type').val();
            	if (type == 1)
            	{
            		let nom = $('#nom').val();
	            	let prenom = $('#prenom').val();
	            	let date = $('#date').val();
	            	let ville = $('#ville').val();
	            	let tel = $('#tel').val();
	            	let email = $('#email').val();
	            	let password = $('#password').val();

                    var error = 0;
                    if(validateEmail(email)) {error=0;} else {error=1}
                    if(email=="" || error==1) {error = 1; document.getElementById("email_error").style="display: inline-block;";}

                    if(nom=="") {error = 1; document.getElementById("nom_error").style="margin-bottom: 15px; display: inline-block;";}
                    else {document.getElementById("nom_error").style="display:none"}
                    if(prenom=="") {error = 1; document.getElementById("prenom_error").style="margin-bottom: 15px; display: inline-block;";}
                    else {document.getElementById("prenom_error").style="display:none"}
                    if(date=="") {error = 1; document.getElementById("date_error").style="display: inline-block;";}
                    else {document.getElementById("date_error").style="display:none"}
                    if(password=="") {error = 1; document.getElementById("password_error").style="display: inline-block;";}
                    else {document.getElementById("password_error").style="display:none"}
                    if(error==0)
                    {
                        $.ajax({
                            url : 'inscription_3.php',
                            type : 'POST',
                            data : ({type:type,nom:nom,prenom:prenom,date:date,ville:ville,tel:tel,email:email,password:password}),
                            success: function(html) 
                            {
                              $('#inscription_3').html(html);
                              document.getElementById("inscription_2").style="visibility: hidden; opacity: 0; height:0; transition: all 0.5s";
                              document.getElementById("inscription_3").style="visibility: visible; opacity: 100; transition: all 0.5s";
                            }
                          });
                    }
	            	

            	} else {
                    var error = 0;
                    

            		let company = $('#company').val();
            		let industry = $('#industry').val();
            		let owner = $('#owner').val();
            		let town = $('#town').val();
            		let address = $('#address').val();
            		let tel = $('#tel').val();
	            	let email = $('#email').val();
	            	let password = $('#password').val();

                    if(validateEmail(email)) {error=0;} else {error=1}
                    if(email=="" || error==1) {error = 1; document.getElementById("email_error").style="display: inline-block;";}

                    if(company=="") {error = 1; document.getElementById("company_error").style="margin-bottom: 15px; display: inline-block;";}
                    else {document.getElementById("company_error").style="display:none"}
                    if(owner=="") {error = 1; document.getElementById("owner_error").style="margin-bottom: 15px; display: inline-block;";}
                    else {document.getElementById("owner_error").style="display:none"}
                    if(password=="") {error = 1; document.getElementById("password_error").style="display: inline-block;";}
                    else {document.getElementById("password_error").style="display:none"}
                   
                   if(error==0)
                   {
                        $.ajax({
                            url : 'inscription_3.php',
                            type : 'POST',
                            data : ({type:type,industry:industry,company:company,owner:owner,town:town,address:address,tel:tel,email:email,password:password}),
                            success: function(html) 
                            {
                              $('#inscription_3').html(html);
                              document.getElementById("inscription_2").style="visibility: hidden; opacity: 0; height:0; transition: all 0.5s";
                              document.getElementById("inscription_3").style="visibility: visible; opacity: 100; transition: all 0.5s";
                            }
                          });
                    }
            	}
            	
            }

            function connexion()
            {
            	let email = $('#email').val();
	            let password = $('#password').val();

	            $.ajax({
	                url : 'connexion_1.php',
	                type : 'POST',
	                data : ({email:email,password:password}),
	                success: function(html) 
	                {
	                  $('#connexion_2').html(html);
	                  document.getElementById("connexion_1").style="visibility: hidden; opacity: 0; height:0; transition: all 0.5s";
	                  document.getElementById("connexion_2").style="visibility: visible; opacity: 100; transition: all 0.5s";
	                }
	              });

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
        <!-- Accordian Script -->
        <script src="js/ziehharmonika.js"></script>
        <!--Bootstrap-js-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!--Custom-js-->
        <script src="js/custom.js"></script>
        <!--Scroll-top	-->
        <a href="#" class="scrolltotop"><i class="fa-solid fa-angle-up"></i></a>
    </body>
</html>

