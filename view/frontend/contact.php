<?php ob_start(); ?>
<div class="container-contact">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1">

            <form id="contact-form" method="post" action="" role="form">

                <h1 class="text_form">Pour vos demandes, contactez moi via formulaire.</h1>
                <div class="divider"></div>
                <div class="row">

                    <div class="col-md-6">
                        <label for="firstname">Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control"
                            placeholder="Votre prénom">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email <span class="blue">*</span></label>
                        <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Téléphone</label>
                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-12">
                        <label for="message">Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message"
                            rows="4"></textarea>
                        <p class="comments"></p>
                    </div>
                    <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>