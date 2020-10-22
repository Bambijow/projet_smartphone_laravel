<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    private $smartphones;
    public function __construct()
    {
        $this->smartphones = Smartphone::factory(40)->make();
    }

    public function liste()
    {
        return view('smartphone.liste', ['smartphones' => $this->smartphones]);
    }
}
