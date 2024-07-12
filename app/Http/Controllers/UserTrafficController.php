<?php

namespace App\Http\Controllers;

use App\Models\UserTraffic;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class UserTrafficController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $userTraffic = UserTraffic::all();
        return $this->response(200, 'trafego de usuários', $userTraffic);
    }
}