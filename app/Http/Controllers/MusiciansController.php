<?php

namespace App\Http\Controllers;

use App\Models\Musicians;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class MusiciansController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $musicians = Musicians::all();
        return $this->response(200, 'Metricas músicos', $musicians);
    }
}