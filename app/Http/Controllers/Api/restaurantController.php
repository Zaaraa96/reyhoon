<?php

namespace App\Http\Controllers\Api;
use App\restaurant;
use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class restaurantController extends Controller
{
    public function index()
    {
      $restaurant = restaurant::all();
      return response()->json($restaurant);
    }

    public function a($areaa)
    {

    }
}
