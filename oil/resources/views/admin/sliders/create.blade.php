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



                              <div class="form-group">
                                   <label for="image_link">Link of Slider image </label>
                                   <input type="link" name="image_link" class="form-control"  placeholder="">
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
