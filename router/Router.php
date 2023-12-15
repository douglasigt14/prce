<?php

include 'database/DataBase.php';

class Router
{
    private $routes = array(
        "admin" => "adminLogin",
        "admin/home" => "adminHome",
        "admin/uploads" => "adminUploads",
        "admin/sobre" => "adminSobre",
        "admin/contato" => "adminContato",
        "admin/trabalheconosco" => "adminTrabalheConosco",
        "admin/empreendimentos" => "adminEmpreendimentos",
        "admin/info" => "adminInfoGeral",
        "home" => "home",
        "empreendimentos" => "empreendimentos",
        "sobre" => "sobre",
        "trabalheConosco" => "trabalheConosco",
        "contato" => "contato",
    );


    public function run(string $requestUri) {
        $route = substr($requestUri, 1);
        if ($route === '') {
            $this->buildRoute('home');
        } else {
            $this->buildRoute($route);
        }
    }

    private function buildRoute($route) {
        $pdo = new Database();
        $rows = $pdo->select("empreendimentos");

        foreach ($rows as $row) {
            $this->routes["empreendimentos/".$row['id']] = "template_emp";
        }

        if (array_key_exists($route, $this->routes)) {
            session_start();
            $_SESSION['currentPage'] = $this->routes[$route];
            require_once __DIR__ . '/../pages/'.$this->routes[$route].'.php';
        } else {
            http_response_code(404);
            require __DIR__ . '/../pages/notFound.php';
        }
    }
}