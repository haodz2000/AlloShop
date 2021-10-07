@extends('admin.index')
@section('title', "Products Grid")
@section('content')
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">eCommerce</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products Grid</li>
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
      <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-xl-2">
                                <a href="javascript:;" class="btn btn-primary mb-3 mb-lg-0"><i class="bi bi-plus-square-fill"></i>Add Product</a>
                            </div>
                            <div class="col-lg-9 col-xl-10">
                                <form class="float-lg-end">
                                    <div class="row row-cols-lg-auto g-2">
                                        <div class="col-12">
                                            <a href="javascript:;" class="btn btn-light mb-3 mb-lg-0"><i class="bi bi-download"></i>Export</a>
                                        </div>
                                        <div class="col-12">
                                            <a href="javascript:;" class="btn btn-light mb-3 mb-lg-0"><i class="bi bi-upload"></i>Import</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </div>

      <div class="card">
         <div class="card-header py-3"> 
          <div class="row g-3 align-items-center">
            <div class="col-lg-3 col-md-6 me-auto">
              <div class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input class="form-control ps-5" type="text" placeholder="search produts">
              </div>
            </div>
            <div class="col-lg-2 col-6 col-md-3">
              <select class="form-select">
                <option>All category</option>
                <option>Fashion</option>
                <option>Electronics</option>
                <option>Furniture</option>
                <option>Sports</option>
              </select>
            </div>
            <div class="col-lg-2 col-6 col-md-3">
              <select class="form-select">
                <option>Latest added</option>
                <option>Cheap first</option>
                <option>Most viewed</option>
              </select>
            </div>
          </div>
         </div>
         <div class="card-body">
           <div class="product-grid">
             <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
               @if ($product_grid)
                   @foreach ($product_grid as $item)
                   <div class="col">
                    <div class="card border shadow-none mb-0">
                      <div class="card-body text-center">
                        <img src="{{asset('./assets/admin/images/products/'.$item['url_image'])}}" class="img-fluid mb-3" alt=""/>
                        <h6 class="product-title">{{$item['product_name']}}</h6>
                        <p class="product-price fs-5 mb-1"><span>${{$item["price"]}}.00</span></p>
                        <div class="rating mb-0">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <small>74 Reviews</small>
                        <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                          <a href="" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill" id="delete"></i> Edit</a>
                          <a href="{{route('products-grid.delete', $item['product_id'])}}"><button class="btn btn-sm btn-outline-danger delete" data-id="{{$item['product_id']}}"><i class="bi bi-trash-fill"></i>Delete</button></a>
                        </div>
                      </div>
                    </div>
                 </div>
                   @endforeach
               @endif
          </div>
      </div><!--end row-->
</div>
<nav class="float-end mt-4" aria-label="Page navigation">
<ul class="pagination">
<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
{{-- <script src="{{asset('./assets/admin/js/jquery-3.6.0.min.js')}}"></script>
<script>
  $(document).ready(function () {
    // e.preventDefault();
    $(".delete").click(function(){
      var id = $(this).data("id");
      var token = $("meta[name='csrf-token']").attr("content");
      var url = "{{route('products-grid')}}";
      $.ajax({
        type: "GET",
        url: "/admin/products-grid/"+id,
        data: {
          "id": id,
          "_token": token,
        },
        success: function (response) {
          console.log("Ok");
          // window.location.reload();
          // $(".col").html(ajax_load).load(url);
        }
      });
    });
  });
</script> --}}
</ul>
</nav>

</div>
</div>

</main>   
@endsection