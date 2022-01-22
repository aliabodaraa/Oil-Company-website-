@extends('layouts.admin')
@section('content')
<div class="container-fluid">
@if (Session::has('user-created-message'))
     <div class="alert alert-info">
          {{Session::get('user-created-message')}}
     </div>
@endif

@if (Session::has('user-updated-message'))
     <div class="alert alert-success">
          {{Session::get('user-updated-message')}}
     </div>
@endif
@if (Session::has('user-deleted-message'))
     <div class="alert alert-danger">
          {{Session::get('user-deleted-message')}}
     </div>
@endif


          <div class="">
               <a href="{{ route('admin.users.create') }}"><button class="btn-custom btn-block" >create a new User </button></a>
          </div>

     <table id="customers">
               <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>edit</th>
                    <th>delete</th>
               </tr>
               @foreach ($users as $user)
                    <tr>
                         <td>{{$user->name}}</td>
                         {{-- <td><img src="{{$user->image}}" alt=""   width="50px" height="50px"></td> --}}
                         <td>{{ $user->email}}</td>
                         {{-- <td>{{ json_encode($user->phone)}}</td> --}}
                         <td class="text-center">
                              @if(Auth::user() && Auth::user()->id == $user->id)
                                   <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-primary" style="width:60px;border-radius:0;background-color:#19a7d3;border:1px solid #19a7d3" >edit</button></a>
                              @else
                                   <button class="btn btn-primary" style="width:60px;border-radius:0;background-color:#19a7d3;border:1px solid #19a7d3" disabled>edit</button>
                              @endif
                         </td>
                         <td>
                              @if(Auth::user() && Auth::user()->id == $user->id)
                                   <form method="post" action="{{route('admin.users.destroy',$user->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" style="width:60px;border-radius:0">delete</button>
                                   </form>
                              @else
                                   <button class="btn btn-danger" style="width:60px;border-radius:0" disabled>delete</button>
                              @endif
                         </td>
                    </tr>
               @endforeach
          </table>


</div>
@endsection
