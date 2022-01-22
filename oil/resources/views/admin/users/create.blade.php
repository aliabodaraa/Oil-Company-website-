@extends('layouts.admin')
@section('content')
<div class="container-fluid">
<h1 class="">create User : </h1>
{{-- <div class="container-fluid" >

     <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">

          @csrf

          <div class="form-group">

               <label for="name">اسم القسم</label>
               <input type="text" name="name" class="form-control" id="" aria-description="" placeholder="الاسم">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
         <button type="submit" class="btn btn-primary">Submit</button>





     </form>

</div> --}}


<div class="card-body">
     <form action="{{ route('admin.users.store') }}" method="POST">
          @csrf


          <div class="form-group">

               <label for="name"> Name :</label>
               <input type="text" name="name" class="form-control" id="" aria-description=""  value="{{ old('name') }}" placeholder="">
               @error('name')
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

               <label for="password">  Password : </label>
               <input type="password" name="password" class="form-control" id="" aria-description="" placeholder="">
               @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
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
         <button type="submit" class="btn-custom-submit btn-block">Submit</button>

     </form>
</div>
</div>
@endsection
