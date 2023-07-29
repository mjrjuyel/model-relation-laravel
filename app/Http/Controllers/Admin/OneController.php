<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use Session;
use carbon\carbon;

class OneController extends Controller
{
   public function city_add(){
    return view('admin.city.add');
   }
   public function city(){
    $city=City::all();
    return $city;
    return view('admin.city.all');
   }

   public function country(){
    $country=Country::get();

    return $country;
   }

}
