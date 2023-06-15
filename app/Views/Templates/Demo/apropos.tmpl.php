<?php
use SYRADEV\app\DemoController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>A propost</title>
</head>
<body>
<div class="container py-2 py-md-4 py-lg-5">
    <div class="row">
        <div class="col">
            <figure class="card position-relative bg-light-subtle py-3 p-0 mt-4 mb-0 ms-xl-5 animated fadeIn" style="border: none;">
                <blockquote class="card-body mt-2 mb-0">
                <h2><strong>Mon parcours</strong></h2>
                    <br>
                        <br>
                            <?php require_once DemoController::partial('/MvcUI/frise.part.php'); ?>
                        <br> 
                      <h3>Expériences professionnelles</h3><br> 
                      
                      <div class="container">
                        <div class="row row-cols-2 bg-primary">
                          <div class="g-col-8">
                            <h3><strong>Stages</strong></h3>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <p>Création d'un site vitrine sur Wordpress avec Elementor<br>
                                    <ul>
                                      <li>Installation de Wordpress en locale</li>
                                      <li>Mise en place des plugins</li>
                                      <li>Maquettages</li>
                                      <li>Développement sur Elementor</li>
                                    </ul><br>
                                    Compographique (Mars 2023)
                                </p>
                              </li>
                              <li class="list-group-item">
                                <p>Perchman<br>
                                  Prise de son:
                                    <ul>
                                      <li>Intérieur</li>
                                      <li>Extérieur</li>
                                    </ul><br>
                                    Plus belle la vie (Novembre - Décembre 2021)
                                </p>
                              </li>
                              <li class="list-group-item">
                                <p>Sonorisation de spectacles<br>
                                  Théâtre Joliette et Cîté de la musique (Octobre 2021)
                                </p>
                              </li>
                              <li class="list-group-item">
                                <p>Prise de son et post - production<br>
                                  Komeco Consulting (Mai - Juin 2020)
                                </p>
                              </li>
                              <li class="list-group-item">
                                <p>Observation post - production<br>
                                    <ul>
                                      <li>Montage, mixage son</li>
                                      <li>Bruitage</li>
                                    </ul><br>
                                  France 3 Méditerannée (Mai - Juin 2019)
                                </p>
                              </li>
                            </ul>
                          <br>
                          </div>
                          <div class="g-col-4">
                            <div class="row">
                              <h3><strong>Bénévolat</strong></h3>
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <p>Sécurisation des coureurs<br>
                                    Algernon (Octobre 2021 et 2022)
                                </p>
                              </li>
                              <li class="list-group-item">
                                <p>Prise de son de tournage<br>
                                    Projet MEMENTO <br>
                                    Cie Bleu (Août 2022)
                                </p>
                              </li>
                              </li>
                            </ul>
                            </div>
                            <br>
                            <div class="row"><h3><strong>Intérim</strong></h3>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                  <p>Intérim<br>
                                      Manutentionnaire <br>
                                      La Fermière, le yahourt depuis 1952 (Juillet - Août 2019)
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    <p class="mt-1 mb-5"></p>
                    <h2><strong>Mes compétences</strong></h2>
                    <br>
                    <h3 class="display-text-center"><strong>Techniques</strong></h3>

                    <div class="container py-2 py-md-4 py-lg-5">
                        <div class="row">
                            <div class="col">
                                <figure class="card position-relative bg-light-subtle py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5 animate__animated animate__fadeIn" style="border: none;">

                                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                        <div class="cards-wrapper">

                                        </div>
                                          <img src="<?= DemoController::assets('/imgs/front_end.png'); ?>" class="d-block w-100" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Front-end</h5>
                                          </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                        <div class="cards-wrapper">

                                        </div>
                                          <img src="<?= DemoController::assets('/imgs/back_end.png'); ?>" class="d-block w-100" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Back - end</h5>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                        <div class="cards-wrapper">

                                        </div>
                                          <img src="<?= DemoController::assets('/imgs/framework.png'); ?>" class="d-block w-100" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Framework</h5>
                                          </div>
                                        </div>

                                        <div class="carousel-item">
                                          <img src="<?= DemoController::assets('/imgs/outils.png'); ?>" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                              <h5>Outils</h5>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                          <img src="<?= DemoController::assets('/imgs/divers.png'); ?>" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                              <h5>Divers</h5>
                                            </div>
                                          </div>
                                      </div>
                                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                      </button>
                                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                      </button>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    
                    <h3><strong>Personnelles</strong></h3>
                    <div class="container my-5 text-center">
                      <div class="row">
                        <div class="col">
                          Créativité
                        </div>
                        <div class="col">
                          Rigueur
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          Persévérence
                        </div>
                        <div class="col">
                          Curiosité
                        </div>
                        <div class="col">
                          Travail en équipe
                        </div>
                      </div>
                    </div>

                    <h2><strong>Mes centres d'intérêts</strong></h2>
                    <div class="container text-center my-5">
                      <div class="row">
                        <div class="col">
                          Musique
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                          Batterie
                        </div>
                        <div class="col">
                          Guitare
                        </div>
                        <div class="col">
                          Basse
                        </div>
                        <div class="col">
                          Clavier
                        </div>
                      </div>
                    </div>
                    <div class="container text-center my-5">
                      <div class="row">
                        <div class="col">
                          Montage vidéo
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                          Clonages
                        </div>
                        <div class="col">
                          Stop-motion
                        </div>
                      </div>
                    </div>
                    <div class="container text-center my-5">
                      <div class="row">
                        <div class="col">
                          Photographie
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                          (Mosaïque photos)
                        </div>
                      </div>
                    </div>
                    <div class="container text-center my-5">
                      <div class="row">
                        <div class="col">
                          Composition de fiction sonore et son d'ambiance
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                          Son de la nature
                        </div>
                        <div class="col">
                          Divers scènes 
                        </div>

                      </div>
                    </div>
                    <div class="container text-center my-5">
                      <div class="row">
                        <div class="col">
                          Sport
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                          VTT
                        </div>
                        <div class="col">
                          Randonnée
                        </div>
                        <div class="col">
                          Natation
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          Ski
                        </div>
                        <div class="col">
                          Longboard
                        </div>
                        <div class="col">
                          Stand-up paddle
                        </div>
                      </div>
                    </div>
                </blockquote>
            </figure>
        </div>
    </div>
</div>

</body>
</html>