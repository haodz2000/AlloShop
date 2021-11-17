@extends('admin.index')
@section('title','Edit Banner')

@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
     <div class="card">
       <div class="card-header py-3 bg-transparent"> 
         <div class="d-sm-flex align-items-center">
           <h5 class="mb-2 mb-sm-0">Update Banner</h5>
           <div class="ms-auto">
             <form action="{{route('banner.index')}}" method="get">
               <button type="submit" class="btn btn-primary">List Banners</button>
             </form>
           </div>
         </div>
       </div>
       <div class="card-body">
          <div class="row g-3">
            <div class="col-12 col-lg-12">
               <div class="card shadow-none bg-light border">
                 <div class="card-body">
                   <form class="row g-3" enctype="multipart/form-data" method="POST" action="{{route('banner.update',$banner->banner_id)}}">
                     @csrf @method('put')
                     
                     <div class="col-12 col-lg-12">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" required value="{{$banner->name}}" name="name">
                     </div>
                     @error('title')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                     <div class="col-12 col-lg-12">
                      <label class="form-label">Status</label>
                      <select class="form-select" aria-label="Default select example" name="status" id="">
                       <option value="1">Show</option>
                       <option {{$banner->status==0 ? 'selected' :''}} value="0">Hidden</option>
                      </select>
                     </div>    

                     <div class="col-12 col-lg-12">
                        <label class="form-label">Banner</label>
                        <input class="form-control" type="file" name="url_banner" id="">
                        <br><strong class="text-danger">Ảnh hiện tại</strong><br>
                        <img src="{{asset('assets/storage/images/banner/'.$banner->url_banner)}}" alt="" width="50%">
                     </div>
                     @error('url_banner')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror
                     
                     <button type="submit" class="btn btn-primary">Update Now</button>
                   </form>
                 </div>
               </div>
            </div>
          </div><!--end row-->
        </div>
       </div>
    </div>
 </div><!--end row-->

@endsection