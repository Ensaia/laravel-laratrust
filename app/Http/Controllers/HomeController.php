<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PrayerTimes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    //
    public function index(){
        $city_id_object = DB::connection('prayer_times')
            ->table('default_setting')
            ->select('city_id')
            ->first();
        $city_name_object = DB::connection('prayer_times')
            ->table('city')
            ->select('city_name')
            ->where('city_id','=',$city_id_object->city_id)
            ->first();
        $data = [];
        $data['posts'] = Post::orderBy('id', 'desc')->get();
        $data['images'] = File::files(public_path('carousel'));
        $data['city_name'] = $city_name_object->city_name;
        $data['prayer_times'] = PrayerTimes::Where('city_id','=',$city_id_object->city_id)
            ->where('month_number','=',Carbon::now()->month)
            ->where('day_number','=',Carbon::now()->day)
            ->get();
        return view('home.index',$data);
    }

    public function profile(){
        return view('home.profile');
    }
}
