<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 0;
        $datas = Course::where('is_active',1)->get();
        return view('admin.course.index', compact('sl', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => ['required', 'unique:courses,title,'.$request->id],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
        ]);

        DB::beginTransaction();
        try {

            $data = new Course;
            $data->title = $request->title;
            $data->video = $request->video;
            $data->short_desc = $request->short_desc;
            $data->desc = $request->desc;
            $data->fee = $request->fee;
            $data->duration = $request->duration;
            $data->min_deposit = $request->min_deposit;
            $data->transmission_type = $request->transmission_type;
            $data->utility = $request->utility;
            $data->is_featured = $request->is_featured;
            if($request->file('image')){
                $image = $request->file('image');
                $input = time() . 'image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');
                $image->move($destinationPath,$input);
                $data->image = $input;
            }
            $data->is_active = 1;
            $data->created_by = Auth()->user()->id;
            $data->save();

            DB::commit();

            return redirect()->to('course')->with('success', 'Course Added Successfully');

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Something went wrong. Try Again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::findOrFail($id);

        return view('admin.course.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:courses,title,'.$id],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
        ]);

        DB::beginTransaction();

        try {
            $data = Course::findOrFail($id);
            $data->title = $request->title;
            $data->video = $request->video;
            $data->short_desc = $request->short_desc;
            $data->desc = $request->desc;
            $data->fee = $request->fee;
            $data->duration = $request->duration;
            $data->min_deposit = $request->min_deposit;
            $data->transmission_type = $request->transmission_type;
            $data->utility = $request->utility;
            $data->is_featured = $request->is_featured;
            if ($request->file('image')) {
                $image = $request->file('image');
                $input = time() . 'image.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/image');

                // Check if the category already has an image
                if ($data->image) {
                    // If it does, unlink the previous image
                    $previousImagePath = $destinationPath . '/' . $data->image;
                    if (file_exists($previousImagePath)) {
                        unlink($previousImagePath);
                    }
                }

                $image->move($destinationPath, $input);
                $data->image = $input;
            }
            $data->updated_by = Auth()->user()->id;
            $data->save();

            DB::commit();

            return redirect()->to('course')->with('success', 'Course Updated Successfully');

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Somethings went wrong. Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $data = Course::findorFail($id);
            $data->is_active = 0;
            $data->deleted_by = Auth()->user()->id;
            $data->save();
            DB::commit();
            return 'Course Inactive Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
    }
}
