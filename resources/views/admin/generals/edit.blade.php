@extends('layouts.admin')
@section('content')
<div class="container-fluid">


     <div style="overflow-x:auto;">
          <div class="card-body">
               <form action="{{ route('admin.generals.update') }}" method="POST" enctype="multipart/form-data">
                    @method("PATCH")
                    @csrf
                    <div class="form-group">

                         <label for="number"> Number :</label>
                         <input type="text" name="number" class="form-control" id="" aria-description=""  value="{{ $general->number }}" placeholder="">
                         @error('number')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> Country :</label>
                         <input type="text" name="country" class="form-control" id="" aria-description=""  value="{{ $general->country }}" placeholder="">
                         @error('country')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="city"> City :</label>
                         <input type="text" name="city" class="form-control" id="" aria-description=""  value="{{ $general->city }}" placeholder="">
                         @error('city')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="startworkdays"> Start WorkDays :</label>
                         <input type="text" name="startworkdays" class="form-control" id="" aria-description="" value="{{ $general->startworkdays }}" placeholder="">
                         @error('startworkdays')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="endworkdays"> End WorkDays :</label>
                         <input type="text" name="endworkdays" class="form-control" id="" aria-description=""  value="{{ $general->endworkdays }}" placeholder="">
                         @error('endworkdays')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="startworktimes"> Start WorkTimes :</label>
                         <input type="text" name="startworktimes" class="form-control" id="" aria-description="" value="{{ $general->startworktimes }}" placeholder="">
                         @error('startworktimes')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="endworktimes"> End WorkTimes :</label>
                         <input type="text" name="endworktimes" class="form-control" id="" aria-description=""  value="{{ $general->endworktimes }}" placeholder="">
                         @error('endworktimes')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">

                         <label for="email">  E-mail :</label>
                         <input type="email" name="email" class="form-control" id="" aria-description="" value="{{ $general->email }}" placeholder=" ">
                         @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                    </div>



                    <ul class="nav nav-pills">
                        <li class="active" style="margin-left: 140px;"><a data-toggle="pill" href="#logo">Link of logo</a></li>
                        <li style="background-color:white"><a data-toggle="pill" href="#logoInput">logo</a></li>
                    </ul>


                    <div class="tab-content form-group">
                        <div id="logo" class="form-group tab-pane fade in active">
                            <label for="image_link">Link of logo : </label>
                            <input type="link" name="image_link" class="form-control" value="@if (strpos($general->image, 'https://') !== FALSE) {{$general->image}} @endif " placeholder="">
                            @error('image_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="logoInput" class="form-group tab-pane fade">
                            <label for="image">logo : </label>
                        <input type="file" name="image"  placeholder="">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div id="InputServices" class="form-group">
                        <label for="Service">Services </label>
                        @if ($general->services)
                            @foreach ($general->services as $item)
                                @if ($item)
                                    <input type="text" class="form-control" name="services[]" value="{{$item}}"><br>
                                @endif
                            @endforeach
                        @endif
                        <input type="text" class="form-control" name="services[]" value=""><br>
                    </div>
                        <a id="add-Service" class="btn-custom-submit addBtn" style="    padding: 3px 3px 3px 20px;
                            display: block;
                            width: 30%;
                            direction: rtl;
                            height: 32px;"> Add Service </a>

                        <div id="InputSuppliers" class="form-group">
                            <label for="Supplier"> Suppliers </label>
                            @if ($general->supplies)
                                @foreach ($general->supplies as $item)
                                    @if ($item)
                                        <input type="text" class="form-control" name="supplies[]" value="{{$item}}"><br>
                                    @endif
                                @endforeach
                            @endif
                            <input type="text" class="form-control" name="supplies[]" value="" ><br>
                        </div>
                        <a id="add-Supplier" class="btn-custom-submit addBtn" style="    padding: 3px 3px 3px 20px;
                            display: block;
                            width: 30%;
                            direction: rtl;
                            height: 32px;"> Add Suppliers </a>
                    <div class="form-group">

                         <label for="AboutUs">  About Us :</label>
                         <textarea name="aboutus" class="form-control" id="" cols="30" rows="10">{{$general->aboutus}}</textarea>
                    </div>








                   {{-- <div class="form-group">

                    <label for="file">صورة المستخدم</label>
                    <input type="file" name="image" class="form-control-file"  placeholder="">
                    @error('image')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                   <button type="submit" class="btn-custom-submit">Submit</button>

               </form>
          </div>
     </div>
</div>
@endsection
