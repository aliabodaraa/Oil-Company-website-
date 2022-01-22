@extends('layouts.admin')
@section('content')
<div class="container-fluid">


     <div style="overflow-x:auto;">
          <div class="card-body">
               <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div id="InputEmails" class="form-group">
                            <label for="Emails">Title: </label><br>
                            <input type="text" class="form-control form-control-edit" name="title"  value={{old('title')}} ><br>

                            <label for="Emails">Description: </label>
                            <input type="text" class="form-control form-control-edit" name="description"  value={{old('description')}} ><br>

                     <ul class="nav nav-pills">
                        <li class="active" style="margin-left: 140px;"><a data-toggle="pill" href="#logo">Link of logo</a></li>
                        <li style="background-color:white"><a data-toggle="pill" href="#logoInput">logo</a></li>
                    </ul>


                    <div class="tab-content form-group">
                        <div id="logo" class="form-group tab-pane fade in active">
                             <label for="image_link">Link of Slider image </label>
                                   <input type="link" name="image_link" class="form-control"  placeholder="">
                                   @error('image_link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                        </div>
                        <div id="logoInput" class="form-group tab-pane fade">
                              <label for="image">Slider Image</label>
                                   <input type="file" name="image"  placeholder="">
                                   @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                        </div>
                    </div>

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
