<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use JWTAuth;
use App\Product;

class ProductController extends Controller
{
    /**
     * @var
     */
    protected $user;

    /**
     * ProductController constructor
     */
    public function __contruct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    
}
