<?php

namespace App\Http\Controllers;

use App\Models\Downloads;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $downloads = Downloads::all();
        return $this->response(200, 'Metricas músicos', $downloads);
    }
}