<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use DB;
use App\Media;
use App\Neighborhood;
use App\Payment;
use App\Report_ad;
use App\State;
use App\Sub_Category;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller {
  public function filter(Request $request) {
    dd( $request );
  }
}