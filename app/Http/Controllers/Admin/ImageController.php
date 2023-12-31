<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($product_id)
    {
        $data = Product::find($product_id);
        $images = DB::table('images')->where('product_id','=',$product_id)->get();
        return view('admin.image_add',['data' => $data,'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$product_id)
    {

        $data = new Image;
        $data->title = $request->input('title');
        $data->product_id= $product_id;
        $data->image = Storage::putFile('images', $request->file('image')); //File Upload
        $data->save();
        return redirect()->route('admin_image_add',['product_id'=>$product_id]);



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image,$id,$product_id)
    {

       $data = Image::find($id);
       $data->delete();
       return redirect()->route('admin_image_add',['product_id'=>$product_id]);
    }
}
