<?php
use SYRADEV\app\DemoController;
?>

<div class="container py-2 py-md-4 py-lg-5">
    <div class="row">
        <div class="col">
            <figure class="card position-relative bg-light-subtle py-3 p-0 mt-4 mb-0 ms-xl-5 animated fadeIn" style="border: none;">
                <blockquote class="card-body mt-2 mb-0">
                <h1>Développement web et web mobile</h1>
                    <ul class="list-group list-group-flush my-5">
                      <li class="list-group-item">
                      <a href="https://github.com/Matth98666/artucreating" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="row">
                          <div class="col">
                            <img src="<?= DemoController::assets('/imgs/LOGOArtucreatingcomplet.png'); ?>" width="100px" alt="">
                          </div>
                          <div class="col">
                            Art U Creating
                          </div>
                          <div class="col">
                            Réalisation d'un blog de partage de création multimédias (vidéo, son et photo) et des tutorielles permettant d'acquérir des astuces pour réaliser du contenu multimédias
                          </div>
                        </div>
                      </a>
                      </li>

                      <li class="list-group-item">
                      <a href="https://github.com/Matth98666/MVC-Countries" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="row">
                          <div class="col">
                            <img src="<?= DemoController::assets('/imgs/android-chrome-512x512.png'); ?>" width="100px" alt="">
                          </div>
                          <div class="col">
                            MVC Countries
                          </div>
                          <div class="col">
                            Application affichant les information sur tous les pays du monde
                          </div>
                        </div>
                      </a>
                      </li>

                      <li class="list-group-item">
                      <a href="https://github.com/Matth98666/fetch-login" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="row">
                          <div class="col">
                            <img src="<?= DemoController::assets('/imgs/login.png'); ?>" width="100px" alt="">
                          </div>
                          <div class="col">
                            Login + CRUD Utilisateurs
                          </div>
                          <div class="col">
                            Création d'un interface de connexion, d'un espace utilisateur ainsi q'un CRUD permettant à un utilisateur de gérer les compte de chaque utilisateur. 
                          </div>
                        </div>
                      </a>
                      </li>

                      <li class="list-group-item">
                      <a href="https://github.com/Matth98666/ECF1-Frontend-Responsive-Design-C2-LV3" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="row">
                          <div class="col">
                            <img src="<?= DemoController::assets('/imgs/logosimplon.png'); ?>" width="100px" alt="">
                          </div>
                          <div class="col">
                            Responsive design
                          </div>
                          <div class="col">
                            Réalisation d'une maquette + réalisation d'un projet front-end (HTML/CSS/JS)
                          </div>
                        </div>
                      </a>
                      </li>
                    </ul>
                <h1>Divers</h1>
                <div class="container text-center">
                  <div class="row my-5">
                    <div class="col">
                      <button type="button" class="btn btn-outline-light"><a href="https://www.youtube.com/channel/UCE-vS7Z2HPjcbg3Hbu2uDjQ"><img src="<?= DemoController::assets('/imgs/youtube.png'); ?>" width="200px" alt=""></a></button>
                      <h1>Vidéos</h1>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-outline-light"><a href="https://soundcloud.com/user-646538650"><img src="<?= DemoController::assets('/imgs/soundcloud.png'); ?>" width="200px" alt=""></a></button>
                      <h1>Sons</h1>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="<?= DemoController::assets('/imgs/camera.png'); ?>" width="200px" alt=""></button>
                      <h1>Photos</h1>
                    </div>
                  </div>
                </div>
                </blockquote>
            </figure>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>