<?php

namespace marie\Controller;

use marie\Helper\Controller;


class PageController extends Controller
{

    /**
     * Affiche la page par defaut
     * @return string
     */
    public function homeAction()
    {
        return $this->render(
            "index.php"
        );
    }

    public function villeAction()
    {
        return $this->render(
            "ville.php"
        );
    }

    public function contactAction()
    {
        return $this->render(
            "contact.php"
        );
    }


    public function mentionsLegalesAction()
    {
        return $this->render(
            "mentions-legales.php"
        );
    }


}
