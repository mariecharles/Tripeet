<?php

namespace marie\Helper;

use marie\Controller\PageController;

class FrontController
{

    /**
     * FrontController constructor.
     */
    public function __construct()
    {

        $page = $_GET['page'] ?? $_POST['page'] ?? '';
        try {
            switch($page){

                case "paris":
                    $controller = new PageController();
                    $output = $controller->villeAction();
                    break;

                case "contact":
                    $controller = new PageController();
                    $output = $controller->contactAction();
                    break;

                case "mentions-legales":
                    $controller = new PageController();
                    $output = $controller->mentionsLegalesAction();
                    break;

                default:
                    $controller = new PageController();
                    $output = $controller->homeAction();
                    break;

            }
        } catch (\PDOException $e) {
            die('Erreur PDO '. $e->getMessage());
//        } catch ( ) {
//
        }
        echo $output;
    }
}