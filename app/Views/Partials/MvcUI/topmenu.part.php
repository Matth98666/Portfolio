<?php
/**
 * MvcUI Menu du haut
 *
 * Application MvcUI
 *
 * @package    MvcUI
 * @author     Regis TEDONE
 * @email      syradev@proton.me
 * @copyright  Syradev 2023
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GNU General Public License
 * @version    1.5.0
 */

use SYRADEV\app\MvcUIController;

/**
 * @var $logo
 * @var $title
 * @var $toptitle
 */


?>

<nav class="navbar navbar-expand-lg d-flex justify-content-start" id="top-menu">
    <a href="<?= MvcUIController::getRoute('home'); ?>" class="navbar-brand align-middle">
        <img id="top-logo" src="<?= MvcUIController::assets($logo); ?>"
             class="d-inline-block animated fadeIn" alt="<?= $title; ?>">
    </a>
    <h1 id="top-title" class="float-left align-middle"><?= $toptitle; ?></h1>
    <button class="navbar-toggler" id="hamburger" type="button"
            aria-controls="navbarMvcui" aria-expanded="false" aria-label="Basculer la navigation">
        <span id="animated-hamburger"><span></span><span></span><span></span><span></span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMvcui">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link<?= MvcUIController::isActive(['home']); ?>"
                   href="<?= MvcUIController::getRoute('home'); ?>">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= MvcUIController::isActive(['apropos']); ?>"
                   href="<?= MvcUIController::getRoute('apropos'); ?>">A propos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link<?= MvcUIController::isActive(['realisations']); ?>"
                   href="<?= MvcUIController::getRoute('realisations'); ?>">Réalisations</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                   Réalisations
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= MvcUIController::getRoute('500'); ?>">Erreur 500</a></li>
                    <li><a class="dropdown-item" href="<?= MvcUIController::getRoute('404'); ?>">Erreur 404</a></li>
                </ul>
            </li> -->

            <li class="nav-item">
                <a class="nav-link<?= MvcUIController::isActive(['contact']); ?>"
                   href="<?= MvcUIController::getRoute('contact'); ?>">Contact</a>
            </li>
        </ul>
    </div>
</nav>