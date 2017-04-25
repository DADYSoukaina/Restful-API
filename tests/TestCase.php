<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $baseUrl ='http://localhost:8000/';
    use CreatesApplication;
}
