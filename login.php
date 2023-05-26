<?php

include "header.php";
if($_SESSION['email']=="")

{

?>

        <!-- audioguide-hero-area-start -->
        <section class="price-table-area">
            <div class="container">
                <div class="row">
                    <center>
                        <div class="col-md-8 col-lg-6" style="">
                            <div class="price-box-inner wow ">
                                <div class="price-box">
                                    <div id="connexion_1" style="visibility: visible; opacity: 100; ">
                                    <h5>Connexion</h5>

                                    <p>Accédez à l'univers LOWXY depuis un seul compte</p>

                                    <center>
                                        <input value="" id="email" name="text" style="width: 50%; border: 1px solid #e4e4e4; margin: 15px; padding: 15px; border-radius: 15px; width: 90%;" placeholder="Email address" />
                                        <input value="" id="password" name="password" type="password" style="width: 50%; border: 1px solid #e4e4e4; margin: 15px; padding: 15px; border-radius: 15px; width: 90%;" placeholder="Password" />
                                    </center>

                                    <div class="evviede-venir-title" style="margin: 20px;">
                                        <a href="javascript:void(0)" onclick="connexion()">Connexion</a>
                                    </div>
                                    <p style="margin: 20px;"></p>
                                </div>
                                    <div id="connexion_2" style="visibility: hidden; opacity: 0;"></div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </section>

<?php

} else { 

        ?>
        <!-- audioguide-hero-area-start -->
        <section class="price-table-area">
            <div class="container">
                <div class="row">
                    <center>
                        <div class="col-md-8 col-lg-6" style="">
                            <div class="price-box-inner wow ">
                                <div class="price-box">
                                    <div id="connexion_1" style="visibility: visible; opacity: 100; ">
                                        <img src="images/error.png" style="padding: 20px" />
                                        <h2>Accés interdit.</h2>
                                        <p>Vous êtes déjà connecté.</p>
                                        <div class="evviede-venir-title" style="margin: 20px;">
                                            <a href="index.php">Pas d'acceuil</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </section>
        <?php
}
include "footer.php";

?>