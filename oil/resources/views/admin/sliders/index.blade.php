@extends('layouts.admin')
@section('content')
<div class="container-fluid">



          <div class="card-body">


                    <div id="InputEmails" class="form-group">
                         <label for="Emails">Sliders: </label>
                         @foreach ($sliders as $slider)
                              <div class="">
                                   <h2>{{$slider->title}}</h2>
                                   <h2>{{$slider->description}}</h2>
                                   <img src="{{$slider->image}}" alt="">

                                   <a href="{{route('admin.sliders.edit',$slider->id)}}"><button class="btn btn-primary">Edit</button></a>
                                   <form method="post" action="{{route('admin.sliders.destroy',$slider->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                   </form>
                              </div>

                         @endforeach
                    </div>
   <div class="card">
    <input type="radio" name="select" id="slide_1" checked>
    <input type="radio" name="select" id="slide_2">
    <input type="radio" name="select" id="slide_3">
    <input type="radio" name="select" id="slide_4">

    <input type="checkbox" id="slideImg">

    <div class="slider">
        <label for="slide_1" class="slide slide_1"></label>
        <label for="slide_2" class="slide slide_2"></label>
        <label for="slide_3" class="slide slide_3"></label>
                <label for="slide_4" class="slide slide_4"></label>

    </div>

    <div class="inner_part">
        <label for="slideImg" class="img">
      <img class="img_1" src="https://c4.wallpaperflare.com/wallpaper/978/131/617/kiz-kulesi-turkey-istanbul-maiden-s-tower-wallpaper-preview.jpg">
        </label>
        <div class="content content_1">
            <b class="slider-n">Slider 1</b>
              <div class="title">Title</div>
            <div class="text">Located on the shores of the Aegean Sea, west of the Anatolian Peninsula, İzmir is the third-largest city in Turkey.
            </div>
             <div class="title">Paragraph</div>
            <div class="text">Located on the shores of the Aegean Sea, west of the Anatolian Peninsula, İzmir is the third-largest city in Turkey.
            </div>
             <button class="button-delete">Delete</button>
             <button class="button-edit">Edit</button>
        </div>
    </div>




</div>
     <a id="add-email" class="btn btn-info" style="width: 30%;direction:rtl;" href="{{route('admin.sliders.create')}}"> Add new slider </a>


                   {{-- <div class="form-group">

                    <label for="file">صورة المستخدم</label>
                    <input type="file" name="image" class="form-control-file"  placeholder="">
                    @error('image')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}



          </div>

</div>
@endsection
