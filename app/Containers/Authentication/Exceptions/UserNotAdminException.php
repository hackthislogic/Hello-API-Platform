<?php

namespace App\Containers\Authentication\Exceptions;

use App\Port\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserNotAdminException.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserNotAdminException extends Exception
{
    public $httpStatusCode = Response::HTTP_UNAUTHORIZED;

    public $message = 'User is not an Admin.';
}
