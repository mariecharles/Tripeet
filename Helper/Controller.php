<?php

namespace marie\Helper;

abstract class Controller
{
    /**
     * Cette fonction permet de générer les pages à travers le "templating" natif
     * @param string $fileName
     * @return string
     */
    public function render($fileName)
    {
        if (!file_exists(APP_DIR_VIEW.$fileName)) {

            throw new \InvalidArgumentException('Fichier de vue '.$fileName.' non trouvé');
        }
        ob_start();

        require APP_DIR_VIEW.$fileName;

        return ob_get_clean();
    }

}
