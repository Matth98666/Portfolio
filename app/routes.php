<?php
/**
 * MvcUI Définition des Routes de l'application
 *
 * MvcUI Sample App
 *
 * @package    MvcUI
 * @author     Regis TEDONE
 * @email      syradev@proton.me
 * @copyright  Syradev 2023
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GNU General Public License
 * @version    1.5.0
 */

use SYRADEV\app\MvcUIController;
use SYRADEV\app\DemoController;
use SYRADEV\app\UsersController;

return [

    'home' => [
        'access' => 'web',
        'privacy' => 'public',
        'method' => 'get',
        'route' => '/',
        'class' => MvcUIController::class,
        'action' => 'home',
        'info' => 'Affiche la page d\'accueil.'
    ],
    'apropos' => [
        'access' => 'web',
        'privacy' => 'public',
        'method' => 'get',
        'route' => '/a_propos',
        'class' => DemoController::class,
        'action' => 'apropos',
        'info' => 'Affiche la page a\propos.'
    ],
    'realisations' => [
        'access' => 'web',
        'privacy' => 'public',
        'method' => 'get',
        'route' => '/realisations',
        'class' => DemoController::class,
        'action' => 'realisations',
        'info' => 'Affiche les realisations.'
    ],
    'contact' => [
        'access' => 'web',
        'privacy' => 'public',
        'method' => 'get',
        'route' => '/contact',
        'class' => DemoController::class,
        'action' => 'contact',
        'info' => 'Affiche la page de contact.'
    ],
];