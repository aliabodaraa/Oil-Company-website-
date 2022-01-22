@extends('layouts.base')

@section('content')
<div class="container-fluid">
<h1 class=""> User Modification :</h1>
<div class="container-fluid" >

     <form method="post" action="{{route('admin.users.update',$user)}}" enctype="multipart/form-data">

          @method("PATCH")
          @csrf
         
     
          <div class="form-group">
     
               <label for="name"> Name:</label>
               <input type="text" name="name" class="form-control" value="{{$user->name}}" aria-description="" placeholder="{{$user->name}}">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
     
               <label for="name">E-mail :</label>
               <input type="text" name="email" class="form-control" value="{{$user->email}}" aria-description="" placeholder="{{$user->email}}">
               @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          <div class="form-group">
     
               <label for="password">Password: </label>
               <input type="text" name="password" class="form-control" value="" aria-description="" placeholder="">
               @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div>
          {{-- <div class="form-group">
     
               <label for="file">صورة المستخدم</label>
               <input type="file" name="image" class="form-control-file"  value="{{$user->image}}" placeholder="">
               <div class="container">
                    <img src="{{$user->image}}" alt="">
               </div>
               @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
               @enderror
          </div> --}}
          <button type="submit" class="btn btn-primary">Submit</button>
     </form>

</div>
</div>
    
@endsection