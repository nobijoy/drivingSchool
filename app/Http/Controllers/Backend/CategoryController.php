<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 0;
        $datas = Category::where('is_active',1)->get();
        return view('admin.category.index', compact('sl', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => ['required', 'unique:categories,name,'.$request->id],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
        ]);

        DB::beginTransaction();
        try {

            $data = new Category;
            $data->name = $request->name;
            $data->desc = $request->desc;
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

            return redirect()->to('category')->with('success', 'Category Added Successfully');

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'Somethings went wrong. Try Again');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);

        return view('admin.category.edit', compact('data'));
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
            'name' => ['required', 'unique:categories,name,'.$id],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
        ]);

        DB::beginTransaction();

        try {
            $data = Category::findOrFail($id);
            $data->name = $request->name;
            $data->desc = $request->desc;
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

            return redirect()->to('category')->with('success', 'Category Updated Successfully');

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
            $data = Category::findorFail($id);
            $data->is_active = 0;
            $data->deleted_by = Auth()->user()->id;
            $data->save();
            DB::commit();
            return 'Category Inactive Successfully!';
        } catch (\Throwable $th) {
            DB::rollback();
            return 'Somethings Went Wrong!';
        }
    }
}
