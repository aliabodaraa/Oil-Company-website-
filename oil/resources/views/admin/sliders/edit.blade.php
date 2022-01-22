@extends('layouts.admin')
@section('content')
<div class="container-fluid">


     <div style="overflow-x:auto;">
          <div class="card-body">
               <form action="{{ route('admin.sliders.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @method("PATCH")
                    @csrf


                    <div id="InputEmails" class="form-group">
                            <label for="Emails">Title: </label><br>
                            <input type="text" class="form-control form-control-edit" name="title"  value={{$slider->title}} ><br>

                            <label for="Emails">Description: </label>
                            <input type="text" class="form-control form-control-edit" name="description"  value={{$slider->description}} ><br>



                              <div class="form-group">
                                   <label for="image_link">Link of Slider image </label>
                                   <input type="link" name="image_link" class="form-control" value=""  placeholder="@if (strpos($slider->image, 'https://') !== FALSE) {{$slider->image}} @endif">
                                   @error('image_link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="form-group">
                                   <label for="image">Slider Image</label>
                                   <input type="file" name="image"  placeholder="">
                                   @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                              </div>
                              <img src="{{$slider->image}}" alt="">

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
</div>
@endsection
