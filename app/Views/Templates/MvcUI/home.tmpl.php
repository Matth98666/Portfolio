<?php
/**
 * MvcUI Template page d'accueil
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

$degres = MvcUIController::huerotate();


?>

<div class="container text-center py-2 py-md-4 py-lg-5">
    <div class="row">
        <div class="col">
            <figure class="card position-relative bg-light-subtle py-3 p-0 mt-4 mb-0 ms-xl-5 animated fadeIn" style="border: none;">
                <blockquote class="card-body mb-0">
                    <img src="<?= MvcUIController::assets('/imgs/logosimploncomplet.png'); ?>"  alt="...">
                    <br><br><br>
                    <h1>Matthias NEVIERE</h1>
                    <h2>25 ans<br><br>
                        Concepteur développeur d'applications en spécialité DevOps<br>  
                    </h2>
                </blockquote>
            </figure>
        </div>
    </div>
</div>


