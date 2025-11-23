<?php

namespace ZAEIMTech\RestAPI\Exceptions\Parse;

use ZAEIMTech\RestAPI\Exceptions\ApiException;
use ZAEIMTech\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}