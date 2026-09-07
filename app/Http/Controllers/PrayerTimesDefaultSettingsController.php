<?php

namespace App\Http\Controllers;

use App\Models\PrayerTimesDefaultSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class PrayerTimesDefaultSettingsController extends Controller
{
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
        $data['cities'] = DB::connection('prayer_times')->table('city')->get();
        $data['city_name'] = $city_name_object->city_name;
        $data['city_id'] = $city_id_object->city_id;
        return view('dashboard.prayer-times-default.index',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'city_id' => 'required',
        ];
        $messages = [
            'city_id.required' => 'يرجى اختيار مدينة من القائمة',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->route('prayerTimeDefaultSettingsIndex')->withErrors($validator)->withInput();
        }else{
        $update_default_setting = DB::connection('prayer_times')
            ->table('default_setting')
            ->where('default_id', 1)
            ->update(
                ['city_id' => $request->input('city_id')]
            );
            if($update_default_setting){
                return redirect()->route('prayerTimeDefaultSettingsIndex')->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
            }else{
                return redirect()->route('prayerTimeDefaultSettingsIndex')->with('error', Config::get('constants.message.UPDATE_ERROR'));
            }
        }
    }
}
