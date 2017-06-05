<?php

namespace marie\Controller;
class ErrorController
{
    /**
     * @return string
     */
    public static function notFoundAction()
    {
        return self::errorMethod(404,"Not found");
    }

    /**
     * @return string
     */
    public static function badRequestAction()
    {
        return self::errorMethod(400, "Bad request");
    }

    /**
     * @param int $code
     * @param string $message
     * @return string
     */
    private static function errorMethod($code, $message)
    {
        http_response_code($code);
        return $message;
    }
}
