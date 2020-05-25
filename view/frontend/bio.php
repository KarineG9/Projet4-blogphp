<?php ob_start(); ?>
<div class="container-bio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="titre-bio">
                    <h1>Jean Forteroche, </h1>
                    <h1>écrivain aventurier</h1>
                </div>


                <div class="col-lg-12">
                    <img src="public/css/images/homme.jpg" class='img-fluid' alt="Responsive image" />

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
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateFront.php'); ?>