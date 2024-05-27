<?php

namespace App\Http\Controllers;

use App\Http\Resources\Advert\AdvertIndexResource;
use App\Http\Resources\Image\ImageResource;
use App\Models\Advert;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TestController extends Controller
{
    public function index()
    {

      return URL::route('advert.show', 1);
    }
}
