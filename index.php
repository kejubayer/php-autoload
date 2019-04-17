<?php

include_once 'vendor/autoload.php';

$admin = new \App\Admin\User();
$admin->great();

$manager = new \App\Manager\User();
$manager->great();
