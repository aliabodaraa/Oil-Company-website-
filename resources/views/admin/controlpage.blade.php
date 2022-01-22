@extends('layouts.admin')
@section('content')
<div class="container-fluid">
          <div class="card-body">
               <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf


                    <div class="form-group">

                         <label for="name"> Country :</label>
                         <input type="text" name="country" class="form-control" id="" aria-description=""  value="{{ old('country') }}" placeholder="">
                         @error('country')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> City :</label>
                         <input type="text" name="City" class="form-control" id="" aria-description=""  value="{{ old('City') }}" placeholder="">
                         @error('City')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> Start WorkDays :</label>
                         <input type="text" name="City" class="form-control" id="" aria-description=""  value="{{ old('City') }}" placeholder="">
                         @error('City')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> End WorkDays :</label>
                         <input type="text" name="City" class="form-control" id="" aria-description=""  value="{{ old('City') }}" placeholder="">
                         @error('City')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> Start WorkTimes :</label>
                         <input type="text" name="City" class="form-control" id="" aria-description=""  value="{{ old('City') }}" placeholder="">
                         @error('City')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div class="form-group">

                         <label for="name"> End WorkTimes :</label>
                         <input type="text" name="City" class="form-control" id="" aria-description=""  value="{{ old('City') }}" placeholder="">
                         @error('City')
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

                         <label for="password">  Sliders : </label>
                         @foreach ($sliders as $slider)
                              <img src="{{$slider->image}}" alt="">
                              <h3>{{$slider->title}}</h3>
                              <h3>{{$slider->description}}</h3>
                         @endforeach
                         <input type="password" name="password" class="form-control" id="" aria-description="" placeholder="">
                         @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                    </div>

                    <div id="InputEmails" class="form-group">
                         <label for="Emails">Sliders: </label>
                         @foreach ($sliders as $slider)
                              <input type="text" class="form-control form-control-edit" name="title[]"  value={{$slider->title}} ><br>
                              <input type="text" class="form-control form-control-edit" name="description[]"  value={{$slider->description}} ><br>
                              <input type="file" class="form-control form-control-edit" name="images[]"  value={{$item}} ><br>
                              <img src="{{$slider->image}}" alt="">

                         @endforeach
                    </div>
                    <a id="add-email" class="btn btn-info" style="width: 30%;direction:rtl;"> Add new slider </a>



                    <div class="form-group">

                         <label for="password_confirmation"> Password Confirmation : </label>
                         <input type="password" name="password_confirmation" class="form-control" id="" aria-description="" placeholder="">
                         @if (Session::has('user-password-message'))
                         <div class="alert alert-danger">

                           {{Session::get('user-password-message')}}
                         </div>
                         @endif

                    </div>
                   {{-- <div class="form-group">

                    <label for="file">صورة المستخدم</label>
                    <input type="file" name="image" class="form-control-file"  placeholder="">
                    @error('image')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> --}}
                   <button type="submit" class="btn btn-primary btn-block">Submit</button>

               </form>
          </div>

</div>
@endsection
