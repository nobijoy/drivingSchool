<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;
use Image;


class SettingController extends Controller
{
//    public function setting(){
//        return view('admin.settings.settings');
//    }
    public function setting(Request $request){

        if($request->isMethod('post')){
            DB::beginTransaction();
            try{

                $inputData = $request->except(['_token', 'logo', 'favicon']);

                foreach ($inputData as $fieldName => $fieldValue) {
                    $input = Setting::where('key', $fieldName)->first();

                    if ($input) {
                        $input->update(['value' => $fieldValue]);
                    } else {
                        Setting::create([
                            'key' => $fieldName,
                            'value' => $fieldValue,
                        ]);
                    }
                }

                if($request->file('logo')){
                    $image = $request->file('logo');
                    $input = time() . 'logo.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(120, 120)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    Setting::updateOrCreate(['key' => 'logo'], ['value' => $input]);
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('favicon')){
                    $image = $request->file('favicon');
                    $input = time() . 'favicon.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(30, 30)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    Setting::updateOrCreate(['key' => 'favicon'], ['value' => $input]);
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }

                DB::commit();
//                $datas = Setting::all();
                return back()->with('success', 'Data updated successfully!');
            } catch (Throwable $th) {
                DB::rollback();
                return back()->with('error', $th->getMessage());
            }
        }
        $datas = []; // Retrieve all inputs from the database
//dd($datas);
//        return View::make('form')->with('inputs', $inputs);
        return view('admin.settings.settings', compact('datas'));
    }

    public function emailSetup(Request $request){

    }

    public function copyright(Request $request){

    }

}
