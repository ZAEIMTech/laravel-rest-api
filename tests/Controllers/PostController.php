<?php

namespace ZAEIMTech\RestAPI\Tests\Controllers;

use ZAEIMTech\RestAPI\ApiController;
use ZAEIMTech\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}