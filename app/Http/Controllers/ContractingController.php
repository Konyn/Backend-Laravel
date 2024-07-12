<?php

namespace App\Http\Controllers;

use App\Models\Contractings;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ContractingController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $contractings = Contractings::all();
        return $this->response(200, 'Metricas contratantes', $contractings);
    }
}