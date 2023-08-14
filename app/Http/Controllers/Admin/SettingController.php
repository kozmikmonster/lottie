<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function Composer\Autoload\includeFile;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Setting::first();
        if ($data===null) // If database is empty add one record
        {

            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data= Setting::first();
        }
        return view('admin.setting_edit',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $id=$request->input('id');

        $data = Setting::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address= $request->input('address');
        $data->openinghours= $request->input('openinghours');
        $data->phone = $request->input('phone');
        $data->companyslogan= $request->input('companyslogan');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        $data->instagram = $request->input('instagram');
        $data->youtube = $request->input('youtube');
        $data->facebook = $request->input('facebook');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_setting');





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
