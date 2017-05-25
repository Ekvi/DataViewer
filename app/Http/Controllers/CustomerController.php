<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function getData()
    {
        $model = Customer::searchPaginateAndOrder();
        $columns = Customer::$columns;

        //dd($model);
        return response()->json([
            'model' => $model,
            'columns' => $columns
        ]);
    }
}
