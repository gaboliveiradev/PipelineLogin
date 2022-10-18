<?php
use App\Controller\{
    DashboardController,
    LoginController,
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {
    case "/login":
        LoginController::index();
    break;

    case "/logout":
        LoginController::logout();
    break;

    case "/login/auth":
        LoginController::auth();
    break;

    case "/dashboard":
        DashboardController::index();
    break;

    default:
        header("Location: /login");
    break;
}
