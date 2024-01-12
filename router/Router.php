<?php

include 'database/DataBase.php';

class Router
{
    private $routes = array(
        "login" => "adminLogin",
        "logout" => "logout",
        "admin" => "adminHome",
        "admin/home" => "adminHome",
        "admin/uploads" => "adminUploads",
        "admin/sobre" => "adminSobre",
        "admin/contato" => "adminContato",
        "admin/trabalheconosco" => "adminTrabalheConosco",
        "admin/empreendimentos" => "adminEmpreendimentos",
        "admin/empreendimentos/detalhes" => "adminEmpreendimentosDetalhes",
        "admin/info" => "adminInfoGeral",
        "admin/formularios" => "adminFormularios",
        "home" => "home",
        "empreendimentos" => "empreendimentos",
        "sobre" => "sobre",
        "trabalheConosco" => "trabalheConosco",
        "contato" => "contato",
    );

    public function run(string $requestUri) {
        session_start();
        $route = substr($requestUri, 1);

        // Verifica se o usuário está autenticado para rotas protegidas
        if ($this->isRouteProtected($route) && !isset($_SESSION['user_authenticated'])) {
            header("Location: /login");
            exit;
        }

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
            $_SESSION['currentPage'] = $this->routes[$route];
            require_once __DIR__ . '/../pages/'.$this->routes[$route].'.php';
        } else {
            http_response_code(404);
            require __DIR__ . '/../pages/notFound.php';
        }
    }

    private function isRouteProtected($route) {
        // Adicione aqui as rotas que requerem autenticação
        $protectedRoutes = array(
            "admin",
            "admin/home",
            "admin/uploads",
            "admin/sobre",
            "admin/contato",
            "admin/trabalheconosco",
            "admin/empreendimentos",
            "admin/info",
        );

        return in_array($route, $protectedRoutes);
    }

    function urlBase(string $file = '', string $baseUrl = 'localhost:8082') {
        $urlBase = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $urlBase .= $baseUrl ?: $_SERVER['SERVER_NAME'];
    
        if ($file === '' || $file === null) {
            return $urlBase;
        } else {
            return $urlBase . '/' . $file;
        }
    }
}