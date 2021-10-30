@extends('admin.index')
@section('title', "Add Banner")
@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
     <div class="card">
       <div class="card-header py-3 bg-transparent"> 
         <div class="d-sm-flex align-items-center">
           <h5 class="mb-2 mb-sm-0">Create New Post</h5>
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
                   <form class="row g-3" enctype="multipart/form-data" id="add-new-banner" method="POST" action="{{route('banner.store')}}">
                     @csrf
                     <div class="col-12 col-lg-12">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" required placeholder="Name" name="name">
                     </div>
                     @error('name')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                    <div class="col-12 col-lg-12">
                      <label class="form-label">Status</label>
                      <select class="form-select" aria-label="Default select example" name="status">
                       <option selected value="1">Show</option>
                       <option value="0">Hidden</option>
                      </select>
                    </div>    

                     <div class="col-12 col-lg-12">
                        <label class="form-label">Banner</label>
                        <input class="form-control" required type="file" name="url_banner" id="">
                     </div>
                     @error('url_banner')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror
                     
                     <button type="submit" class="btn btn-primary add-new-product">Create New Banner</button>
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