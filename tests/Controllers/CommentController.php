<?php

namespace ZAEIMTech\RestAPI\Tests\Controllers;

use ZAEIMTech\RestAPI\ApiController;
use ZAEIMTech\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}