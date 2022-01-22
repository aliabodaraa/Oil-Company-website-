@extends('layouts.admin')
@section('content')
<div class="container-fluid">
     @if (Session::has('general-updated-message'))
     <div class="alert alert-info">
          {{Session::get('general-updated-message')}}
     </div>
@endif

          <div class="card-body">
                    <div class="part-info">

                         <label for="Country"> Country :</label>
                         <p>{{$general->country}}</p>

                    </div>

                    <div  class="part-info">

                         <label for="name"> City :</label>
                         <p>{{$general->city}}</p>

                    </div>
                    <div  class="part-info">
                         <label for="Number"> Number :</label>
                         <p> {{$general->number}}</p>
                    </div>
                    <div  class="part-info">
                         <label for="StartWorkDays"> Start WorkDays :</label>
                         <p> {{$general->startworkdays}} </p>
                    </div>

                    <div  class="part-info">

                         <label for="EndWorkDays"> End WorkDays :</label>
                         <p> {{$general->endworkdays}}</p>

                    </div>

                    <div  class="part-info">

                         <label for="StartWorkTimes"> Start WorkTimes :</label>
                         <p>{{$general->startworktimes}}</p>

                    </div>

                    <div  class="part-info">

                         <label for="EndWorkTimes"> End WorkTimes :</label>
                         <p>{{$general->endworktimes}}</p>

                    </div>
                    <div  class="part-info">

                         <label for="E-mail">  E-mail :</label>
                          <p>{{$general->email}}</p>

                    </div>
                    <div  class="part-info">
                         <label for="image-logo">logo:</label>
                         <div class="">
                             <img src="{{$general->image}}" alt="">
                         </div>

                    </div>

                    <div  class="part-info">
                         <label for="supplies">  Supplies :</label>
                        <p>Ali Abodaraa - Asem Dribati </p>

                    </div>

                    <div  class="part-info">

                         <label for="services">  Services :</label>
                        <p>Web developer -web designer</p>

                    </div>

                    <div  class="part-info">

                         <label for="AboutUs">  About Us :</label>
                        <p>{{$general->aboutus}}</p>
                    </div>








                   {{-- <div  class="part-info">

                    <label for="file">صورة المستخدم</label>
                    <input type="file" name="image" class="form-control-file"  placeholder="">
                    @error('image')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                   <a href="{{route('admin.generals.edit')}}"><button type="" class="btn-custom-submit btn-block">Edit</button></a>

          </div>

</div>
@endsection
