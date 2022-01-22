<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index()
    {
        return view('admin.sliders.index',['sliders'=>Slider::all()]);
    }

    public function create(){

        return view('admin.sliders.create');
    }
    public function store(Request $request){
        //dd($request);
            $request->validate([
                'title'=>'required|min:3|max:255',
                'description'=>'required',
                'image.*'=>'sometimes|image'
            ]);
            if($request->image_link){
                $input=$request->image_link;
                //dd($input);
            } 
            else if($request->hasFile('image')){
                //dd(55);
                $input=time() . $request->image->getClientOriginalName();
                $request->image->move(public_path('storage/images/sliders'),$input);
            }else{
                $input=null;
            }
            Slider::create([
                'title'=>$request->title ,
                'description'=>$request->description,
                'image'=> $input ,

            ]);
            $request->session()->flash('user-created-message',"Slider created successfuly");
            return redirect()->route('admin.sliders.index');
    }
    
    public function edit(Slider $slider){
       // $this->authorize('view',$post);
        return view('admin.sliders.edit',['slider'=>$slider]);
    }
    public function update(Slider $slider,Request $request){
    
        if($request->title ){
            $slider->title=$request->title;
          
        }
        if($request->description ){
            $slider->description=$request->description;

        }

        if($request->image_link){
            $slider->image=$request->image_link;
            //dd($request->image_link);
        } 
        else if($request->hasFile('image')){
            $request->validate(['image.*'=>'image']);
            //dd($request->image);
            $input=time().$request->file('image')->getClientOriginalName();
            $request->image->move(public_path('storage/images/sliders'),$input);
            $slider->image=$input;
        }
        //dd($request);
        $slider->save();
        $request->session()->flash('slider-updated-message','Slider modified successfuly');
        //dd($request);
        return redirect()->route('admin.sliders.index');
    }
    public function destroy(Slider $slider,Request $request){
        $slider->delete();
        $request->session()->flash('slider-deleted-message','Slider deleted successfuly');
        //$request->session()->flash('key', $value);
        return back();
    }
}
