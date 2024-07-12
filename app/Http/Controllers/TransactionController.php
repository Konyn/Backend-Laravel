<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $transactions = Transactions::orderBy('real_profit', 'asc')->get();
        return $this->response(200, 'Transactions', $transactions);
    }
}