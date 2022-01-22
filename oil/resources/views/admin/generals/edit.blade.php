@extends('layouts.admin')
@section('content')
<div class="container-fluid">


     <div style="overflow-x:auto;">
          <div class="card-body">
               <form action="{{ route('admin.generals.update') }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <div class="form-group">

                         <label for="number"> Number :</label>
                         <input type="text" name="number" class="form-control" id="" aria-description=""  value="{{ old('number') }}" placeholder="">
                         @error('number')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> Country :</label>
                         <input type="text" name="country" class="form-control" id="" aria-description=""  value="{{ old('country') }}" placeholder="">
                         @error('country')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="city"> City :</label>
                         <input type="text" name="city" class="form-control" id="" aria-description=""  value="{{ old('city') }}" placeholder="">
                         @error('city')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="startworkdays"> Start WorkDays :</label>
                         <input type="text" name="startworkdays" class="form-control" id="" aria-description=""  value="{{ old('startworkdays') }}" placeholder="">
                         @error('startworkdays')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="endworkdays"> End WorkDays :</label>
                         <input type="text" name="endworkdays" class="form-control" id="" aria-description=""  value="{{ old('endworkdays') }}" placeholder="">
                         @error('endworkdays')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="startworktimes"> Start WorkTimes :</label>
                         <input type="text" name="startworktimes" class="form-control" id="" aria-description=""  value="{{ old('startworktimes') }}" placeholder="">
                         @error('startworktimes')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="endworktimes"> End WorkTimes :</label>
                         <input type="text" name="endworktimes" class="form-control" id="" aria-description=""  value="{{ old('endworktimes') }}" placeholder="">
                         @error('endworktimes')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">

                         <label for="email">  E-mail :</label>
                         <input type="email" name="email" class="form-control" id="" aria-description=""   value="{{ old('email') }}" placeholder=" ">
                         @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">
                         <label for="image_link">Link of logo: </label>
                         <input type="link" name="image_link" class="form-control" value="@if (strpos($general->image, 'https://') !== FALSE) {{$general->image}} @endif " placeholder="">
                         @error('image_link')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="form-group">
                         <label for="image">logo:</label>
                         <input type="file" name="image"  placeholder="">
                         @error('image')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">
                         <label for="supplies">  Supplies :</label>
                         @if ($general->supplies)
                              @foreach ($general->supplies as $item)
                              <input type="text" name="supplies[]" class="form-control" id="" aria-description=""   value="{{$item}}" placeholder=" ">
                              @endforeach
                         @endif
                    </div>

                    <div class="form-group">

                         <label for="services">  Services :</label>
                         @if ($general->services)
                              @foreach ($general->services as $item)
                              <input type="text" name="services[]" class="form-control" id="" aria-description=""   value="{{$item}}" placeholder=" ">
                              @endforeach
                         @endif
                    </div>

                    <div class="form-group">

                         <label for="services">  About Us :</label>
                         <textarea name="aboutus" id="" cols="30" rows="10">{{$general->aboutus}}</textarea>
                    </div>








                   {{-- <div class="form-group">

                    <label for="file">صورة المستخدم</label>
                    <input type="file" name="image" class="form-control-file"  placeholder="">
                    @error('image')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                   <button type="submit" class="btn btn-primary btn-block">Edit</button>

               </form>
          </div>
     </div>
</div>
@endsection
