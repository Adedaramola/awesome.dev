<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return $this->view('index');
    }

    public function resume()
    {
        return $this->view('resume');
    }

    public function notFound()
    {
        
    }
}
