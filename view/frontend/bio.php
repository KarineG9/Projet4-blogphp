<?php ob_start(); ?>

<div class="container-bio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titre-bio d-flex flex-wrap justify-content-between">
                    <h1>Jean Forteroche, <br>
                        écrivain aventurier</h1>
                    <img src="public/css/images/homme.jpg" alt="Responsive image" />
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