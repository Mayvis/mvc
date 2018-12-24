<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('App/routes.php')
	->direct(Request::uri(), Request::method());