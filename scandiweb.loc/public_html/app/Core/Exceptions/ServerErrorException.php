<?php

namespace App\Core\Exceptions;

use Exception;

class ServerErrorException extends Exception
{
    function render()
    {
        http_response_code(500);
        require APP_ROOT . '/public_html/views/errors/500.view.php';
        die();
    }
}