@extends('layouts.admin')
@section('content')
<div class="container-fluid">
     <div class="card-body">

          <div class="card">
               <input type="checkbox" id="slideImg">

               @for ($i = 1; $i <= $sliders->count(); $i++)
                    <input type="radio" class="{{$i}}" name="select" id="slide_{{$i}}" @if ($i==1) checked @endif>
               @endfor

               <div class="slider">
                    @for ($i = 1; $i <= $sliders->count(); $i++)
                         <label for="slide_{{$i}}" class="slide slide_{{$i}}"></label>
                    @endfor
               </div>

               @php
                    $x=1;
               @endphp
               @foreach ($sliders as $slider)
                    <div class="inner_part {{$x}}">
                         <label for="slideImg" class="img">
                         <img class="img_{{$x}} img-responsive" src="{{$slider->image}}">
                         </label>
                         <div class="content content_{{$x}}">
                              <b class="slider-n">Slider @php echo $x; $x++; @endphp </b>
                              <div class="title">Title</div>
                              <div class="text">{{$slider->title}}.
                              </div>
                              <div class="title">Paragraph</div>
                              <div class="text">{{$slider->description}}.
                              </div>
                              <a href="{{route('admin.sliders.edit',$slider->id)}}"><button class="button-edit">Edit</button></a>
                              <form method="post" action="{{route('admin.sliders.destroy',$slider->id)}}" enctype="multipart/form-data">
                                   @csrf
                                   @method('DELETE')
                                   <button class="button-delete">Delete</button>
                              </form>
                         </div>
                    </div>
               @endforeach



            <a id="add-email" class="btn-custom add" style="top: 370px;
                width: 100%;
                position: absolute;
                border-radius: 21px;
                margin: auto;
                direction: rtl;" href="{{route('admin.sliders.create')}}"> Add A New Slider </a>
         </div>



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
