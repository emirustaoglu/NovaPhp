<?php
/*
 * Dosya Adı => HomeController
 * Eklenme Tarihi => 2025-03-13 21:03:35
 *
 */

namespace App\Controllers;

use NovaPhp\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('welcome');
    }
}

