<?php
/**
 * Created by PhpStorm.
 * User: qap
 * Date: 2019/10/8
 * Time: 14:58
 */

use App\Controller\IndexController;
use Hyperf\HttpServer\Router\Router;

Router::get('', [IndexController::class, 'index']);
Router::get('hall', [IndexController::class, 'hall']);