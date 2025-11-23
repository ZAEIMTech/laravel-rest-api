<?php

namespace ZAEIMTech\RestAPI\Exceptions\Parse;

use ZAEIMTech\RestAPI\Exceptions\ApiException;
use ZAEIMTech\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}