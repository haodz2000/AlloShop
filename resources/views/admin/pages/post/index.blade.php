@extends('admin.index')
@section('title','List Post')

@section('content')
    @if (count($listPost)== 0) 
        <div class="alert alert-primary" role="alert">
            There are no posts yet. Click <a href="{{route('post.create')}}" class="alert-link">here</a> to create a new post!
        </div>
    @else
      <div class="alert alert-success d-none" id="alert-success-post" role="alert">
          <strong></strong>
      </div> 
      <div class="col-12 col-lg-12 d-flex">
        <div class="card border shadow-none w-100">
          <div class="card-header py-3 bg-transparent"> 
            <div class="d-sm-flex align-items-center">
              <h5 class="mb-2 mb-sm-0">List Posts</h5>
              <div class="ms-auto">
                <form action="{{route('post.create')}}" method="get">
                  <button type="submit" class="btn btn-primary">Create new Post</button>
                </form>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive col-12">
               <table class="table align-middle" id="data_post" data-public="{{asset('assets/storage/images/post/')}}">
                 <thead class="table-light">
                   <tr>
                     <th><input class="form-check-input" type="checkbox"></th>
                     <th>ID Post</th>
                     <th>Author</th>
                     <th>Title</th>
                     <th style="width: 10% !important;">Content</th>
                     <th>Image</th>
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($listPost as $post)
                   <tr id="category_{{$post->post_id}}">
                     <td><input class="form-check-input" type="checkbox"></td>
                     <td>{{$post->post_id}}</td>
                     <td>{{$post->Users->name}}</td>
                     <td>{{$post->title}}</td>
                     <td ><textarea disabled rows="4" cols="50">{{$post->content}}</textarea></td>
                     <td><img src="{{asset('assets/storage/images/post/'.$post->url_image)}}" width="120px"></td>
                     <td>{{$post->status==1?'Activate':'Disactivate'}}</td>
                     <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" data-id="{{$post->post_id}}" data-title="{{$post->title}}" data-content="{{$post->content}}" data-image="{{$post->url_image}}" data-author="{{$post->Users->name}}" class="text-primary show-detail" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="View detail" aria-label="Views" data-toggle="modal" data-target="#detailPost"><i class="bi bi-eye-fill"></i></a>
                        @if($post->Users->name== Auth::user()->name)
                        <a href="{{route('post.edit',$post->post_id)}}"  class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" data-id="{{$post->post_id}}" class="deletePost text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        @endif
                      </div>
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>
            </div>
            <nav class="float-end mt-0" aria-label="Page navigation">
              {{$listPost->links()}}
            </nav>
          </div>
        </div>
      </div>
  
      <!-- The Modal -->
      <div class="modal" id="detailPost">
        <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h4 class="modal-title" id="titleDetailPost"></h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                  <div id="authorDetailPost">
                      <h6></h6>
                  </div>
                  <br>
                  <div id="imageDetailPost">
                      <img src="" alt="" width="50%">
                  </div>
                  <br>
                  <div id="contentDetailPost" style="font-size: 16px">
                      
                  </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
         </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{asset('assets/admin/js/post-ajax.js')}}"></script>
    @endif

@endsection