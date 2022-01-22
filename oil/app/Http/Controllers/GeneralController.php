<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class GeneralController extends Controller
{
    //

    public function index()
    {
        $general = General::firstOrCreate(['id' => 1]);
        return view('admin.generals.index', ['general' => $general]);
    }

    public function edit()
    {
        return view('admin.generals.edit', ['general' => General::findOrFail(1)]);
    }

    public function update(Request $request)
    {
        $general = General::findOrFail(1);
        //dd($general);
        //dd($request);
        //"logo" => null

        if ($request->image_link) {
            $general->logo = $request->image_link;
            //dd($input);
        } else if ($request->image) {
            $request->validate(['image' => 'image']);
            $input = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('storage/images/generals'), $input);
            $general->logo = $input;
        }
        if ($request->number) {
            $general->number = $request->number;
        }

        if ($request->country) {
            $general->country = $request->country;
        }

        if ($request->city) {
            $general->city = $request->city;
        }

        if ($request->startworktimes) {
            $general->startworktimes = $request->startworktimes;
        }

        if ($request->endworktimes) {
            $general->endworktimes = $request->endworktimes;
        }

        if ($request->startworkdays) {
            $general->startworkdays = $request->startworkdays;
        }

        if ($request->endworkdays) {
            $general->endworkdays = $request->endworkdays;
        }

        if ($request->email) {
            $general->email = $request->email;
        }

        if ($request->aboutus) {
            $general->aboutus = $request->aboutus;
        }
        if ($request->supplies) {
            $general->supplies = $request->supplies;
        }
        if ($request->services) {
            $general->services = $request->services;
        }

        $general->save();
        //dd($general);
        $request->session()->flash('general-updated-message', 'General Info. modified successfuly');


        return view('admin.generals.index', ['general' => $general]);
    }
}
