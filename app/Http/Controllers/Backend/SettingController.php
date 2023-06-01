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

                $inputData = $request->except(['_token', 'company_logo', 'company_favicon']);

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

                if($request->file('company_logo')){
                    $image = $request->file('company_logo');
                    $input = time() . 'company_logo.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(120, 120)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    Setting::updateOrCreate(['key' => 'company_logo'], ['value' => $input]);
                    $tmpImg = public_path('thumbnail/'.$input);
                    if (file_exists($tmpImg)) {
                        unlink($tmpImg);
                    }
                }
                if($request->file('company_favicon')){
                    $image = $request->file('company_favicon');
                    $input = time() . 'company_favicon.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('uploads/image');
                    $img = Image::make($image->getRealPath());
                    $img->orientate();
                    $img->resize(30, 30)->save($destinationPath.'/'.$input);
                    $destinationPath = public_path('/thumbnail');
                    $image->move($destinationPath,$input);
                    Setting::updateOrCreate(['key' => 'company_favicon'], ['value' => $input]);
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
//dd($datas);
//        return View::make('form')->with('inputs', $inputs);
        return view('admin.settings.settings');
    }

    public function emailSetup(Request $request){
        $emailSetup = Setting::where('key', 'mail_setup')->first();
        if($request->isMethod('post')){
            $data = $request->except('_token');
            $emailSetup = new Setting;
            $emailSetup->key = 'mail_setup';
            $emailSetup->value = json_encode($data);
            $emailSetup->save();
            $emailSetup = Setting::where('key', 'mail_setup')->first();
            return back()->with('success', 'Data updated successfully!');
        }

        return view('admin.settings.mailSetup', compact('emailSetup'));
    }


}
