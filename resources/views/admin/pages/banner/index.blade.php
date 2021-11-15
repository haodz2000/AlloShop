@extends('admin.index')
@section('title', "Banner")
@section('content')

    {{--  Alert Block  --}}
    <div class="alert alert-success alert-dismissible d-none" id="alert-success-banner" role="alert">
      <strong></strong>
    </div>
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Banners</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Banners List</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

      <div class="card">
         <div class="card-header py-3"> 
          <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-xl-2">
              <a href="{{route('banner.create')}}" class="btn btn-primary mb-3 mb-lg-0"><i class="bi bi-plus-square-fill"></i>Add Banner</a>
            </div>
          </div>
         </div>
         <div class="card-body">          
           <div class="product-grid" id="banner-list">
             <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3 banner-list">
               @if ($banner_list)
                   @foreach ($banner_list as $item)
                   <div class="col" style="width: 500px">
                    <div class="card border shadow-none mb-0">
                      <div class="card-body text-center">
                        <img src="{{asset('./assets/storage/images/banner/'.$item['url_banner'])}}" style="width: 500px" class="img-fluid mb-3" alt=""/>
                        <h6 class="product-title">{{$item['name']}}</h6>
                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                          <a href="{{route('banner.edit',$item['banner_id'])}}" class="btn btn-sm btn-outline-primary" data-id=""><i class="bi bi-pencil-fill"></i>Edit</a>
                          <a href=""><button class="btn btn-sm btn-outline-danger deleteBanner" data-id="{{$item['banner_id']}}"><i class="bi bi-trash-fill"></i>Delete</button></a>
                          <span class="badge rounded-pill alert-{{$item['status']==0 ? 'danger' : 'success'}}">{{$item['status']==0 ? 'Hidden' : 'Show'}}</span>
                        </div>
                      </div>
                    </div>
                 </div>
                   @endforeach
               @endif
          </div>
      </div><!--end row-->
      <nav class="float-end mt-4" aria-label="Page navigation">
        <ul class="pagination">
            {{$banner_list->links()}}
        </ul>
      </nav>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $(document).on('click','.deleteBanner',function(e) {
          e.preventDefault();
          let id = $(this).data('id');
          let token   = $('meta[name="csrf-token"]').attr('content');
              
        if(confirm('Are you sure you want to delete this banner?')) {
          $.ajax({
                  type: "DELETE",
                  url: "/admin/banner/" + id,
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function(response) {
                    $("#alert-success-banner").removeClass('d-none');
                    $("#alert-success-banner strong").html('Delete banner is successfully!');
                    setTimeout(function() { 
                      $("#alert-success-banner").addClass('d-none');
                    }, 3000);
                    $("#banner-list").load(" #banner-list");
                  }
          });
        }  
      });
    });
  </script>
 
@endsection