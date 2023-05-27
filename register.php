<?php
include "header.php";

?>

<!-- audioguide-hero-area-start -->
<section class="price-table-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="price-box-inner wow">
                    <div class="price-box">
                        <div id="inscription_1" style="visibility: visible; opacity: 100;">
                            <h5>Inscription</h5>
                            <p>Accédez à l'univers LOWXY depuis un seul compte</p>

                            <form id="inscription_form" method="post" action="process_inscription.php" onsubmit="return validateForm()">
                                <center>
                                    <ul style="display: inline-flex;">
                                        <li style="width: 50%; border: 1px solid #e4e4e4; margin: 15px; padding: 10px 30px 10px 10px; border-radius: 15px;">
                                            <input type="radio" value="1" id="acc_type" name="acc_type" checked style="margin: 10px;" />Individuel
                                        </li>
                                        <li style="width: 50%; border: 1px solid #e4e4e4; margin: 15px; padding: 10px 30px 10px 10px; border-radius: 15px;">
                                            <input type="radio" value="2" id="acc_type" name="acc_type" style="margin: 10px;" />Business
                                        </li>
                                    </ul>
                                    <br />
                                    <input type="email" id="email" name="email" required style="width: 50%; border: 1px solid #e4e4e4; margin: 15px; padding: 15px; border-radius: 15px; width: 90%;" placeholder="Adresse e-mail" />
                                    <div class="ui pointing red basic label" id="email_error" style="display:none;">
                                        Veuillez saisir une adresse e-mail valide.
                                    </div>
                                </center>

                                <div class="evviede-venir-title" style="margin: 20px;">
                                    <button type="submit">Inscription</button>
                                </div>
                            </form>
                            <p style="margin: 20px;"></p>
                        </div>
                        <div id="inscription_2" style="visibility: hidden; opacity: 0;"></div>
                        <div id="inscription_3" style="visibility: hidden; opacity: 0;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Validation du formulaire côté client
    function validateForm() {
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("email_error");

        // Validation de l'adresse e-mail
        var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
        if (!emailPattern.test(email)) {
            emailError.style.display = "block";
            return false;
        } else {
            emailError.style.display = "none";
        }

        // Ajoutez d'autres validations si nécessaire

        return true;
    }
</script>

<?php
include "footer.php";
?>
