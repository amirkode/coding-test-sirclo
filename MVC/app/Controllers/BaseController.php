<?php

namespace CodingTest\Sirclo\SimpleMVC\Controllers;

abstract class BaseController {
    abstract public function index();
    abstract public function show(...$args);
    abstract public function create(...$args);
    abstract public function update(...$args);
    abstract public function delete(...$args);
}