<?php ob_start(); ?>
<div class="container-bio">
    <div class="row">
        <div class="col-lg-12">


            <div class="titre-bio">
                <h1>Jean Forteroche</h1>
                <h2>écrivain et acteur avide d'aventure</h2>
            </div>
            <div class='img-responsive'>
                <img src="public/css/images/homme.jpg" class='img-responsive' alt="Responsive image" />

            </div>

            <p class="texte-biographie">
                Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus
                enim Montium
                sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae
                molitioni
                pollicitos.Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi.
                praediximus
                enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut
                adminicula
                futurae molitioni pollicitos.Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum
                gentilitatem
                oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum
                culpasse
                tribunos ut adminicula futurae molitioni pollicitos.Primi igitur omnium statuuntur Epigonus et
                Eusebius ob
                nominum gentilitatem oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis
                appellatos
                fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos.
            </p>

        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>