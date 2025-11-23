<?php

namespace ZAEIMTech\RestAPI\Tests\Controllers;

use ZAEIMTech\RestAPI\ApiController;
use ZAEIMTech\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}