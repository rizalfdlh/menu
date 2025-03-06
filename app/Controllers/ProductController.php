<?php

namespace App\Controllers;

use Support\BaseController;
use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;

class ProductController extends BaseController
{
    // Controller logic here
    public function product()
    {
        return view('interface/product/product', [], 'navbar/navbar');
    }
}
