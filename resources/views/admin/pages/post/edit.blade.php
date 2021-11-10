@extends('admin.index')
@section('title','Edit Post')

@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
     <div class="card">
       <div class="card-header py-3 bg-transparent"> 
         <div class="d-sm-flex align-items-center">
           <h5 class="mb-2 mb-sm-0">Update My Post</h5>
           <div class="ms-auto">
             <form action="{{route('post.index')}}" method="get">
               <button type="submit" class="btn btn-primary">List Posts</button>
             </form>
           </div>
         </div>
       </div>
       <div class="card-body">
          <div class="row g-3">
            <div class="col-12 col-lg-12">
               <div class="card shadow-none bg-light border">
                 <div class="card-body">
                   <form class="row g-3" enctype="multipart/form-data" id="add-new-product" method="POST" action="{{route('post.update',$post->post_id)}}">
                     @csrf @method('put')
                     <input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
                     <div class="col-12 col-lg-6">
                       <label class="form-label">Title</label>
                       <input type="text" class="form-control" onkeyup="ChangeToSlug()" required value="{{$post->title}}" name="title" id="slug">
                     </div>
                     @error('title')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                     <div class="col-12 col-lg-6">
                       <label class="form-label">Slug</label>
                       <input type="text" class="form-control" required value="{{$post->slug}}" name="slug" id="convert_slug">
                     </div>
                     @error('slug')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                     <div class="col-12 col-lg-6">
                        <label class="form-label">Images</label>
                        <input class="form-control" type="file" name="url_image" id="">
                        <br><strong class="text-danger">Ảnh hiện tại</strong><br>
                        <img src="{{asset('assets/admin/images/posts/'.$post->url_image)}}" alt="" width="85%">
                     </div>
                     @error('url_image')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror

                     <div class="col-12 col-lg-6">
                       <label class="form-label">Status</label>
                       <select class="form-select" aria-label="Default select example" name="status" id="category_id">
                        <option value="1">Kích hoạt</option>
                        <option @if($post->status ==0) 'selected' @endif value="0">Không kích hoạt</option>
                       </select>
                     </div>    

                     <div class="col-12">
                       <label class="form-label">Content</label>
                       <textarea class="form-control" required rows="8" cols="4" name="content" id="">{{$post->content}}</textarea>
                     </div>
                     @error('content')
                        <div class='alert alert-danger' role='alert'>
                            {{ $message }}
                        </div>
                     @enderror
                     
                     <button type="submit" class="btn btn-primary add-new-product">Update Now</button>
                   </form>
                 </div>
               </div>
            </div>
          </div><!--end row-->
        </div>
       </div>
    </div>
 </div><!--end row-->

 <script src="{{ asset('./assets/admin/js/convert-slug.js')}}"></script>

@endsection