@extends('admin.index')
@section('title', "Add new product")
@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">eCommerce</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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

      <div class="row">
         <div class="col-lg-12 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent"> 
              <div class="d-sm-flex align-items-center">
                <h5 class="mb-2 mb-sm-0">Add New Product</h5>
                <div class="ms-auto">
                  {{-- <button type="button" class="btn btn-secondary">Save to Draft</button> --}}
                  {{-- <button type="button" class="btn btn-primary">Publish Now</button> --}}
                </div>
              </div>
             </div>
            <div class="card-body">
               <div class="row g-3">
                 <div class="col-12 col-lg-12">
                    <div class="card shadow-none bg-light border">
                      <div class="card-body">
                        <form class="row g-3" enctype="multipart/form-data" id="add-new-product" method="POST" action="{{route('add-new-product.add')}}">
                          @csrf
                          <div class="col-12 col-lg-6">
                            <label class="form-label">Product name</label>
                            <input type="text" class="form-control" required placeholder="Product name" name="product_name" id="product_name">
                          </div>
                          <div class="col-12 col-lg-6">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" required placeholder="Slug" name="slug" id="slug">
                          </div>
                          <div class="col-12 col-lg-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                              <option selected>Please select category</option>
                              @foreach ($category_name_list as $item)
                                <option value="{{$item['category_id']}}">{{$item['category_name']}}</option>
                                {{-- <option value="2">Two</option>
                                <option value="3">Three</option> --}}
                              @endforeach
                            </select>
                          </div>
                          <div class="col-12 col-lg-3">
                            <label class="form-label">Gender</label>
                            {{-- <input type="text" class="form-control" placeholder="Gender"> --}}
                            <select class="form-select" aria-label="Default select example" name="gender" id="gender">
                                <option selected>Please select gender</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                                <option value="3">Cả hai</option>
                            </select>
                          </div>
                          <div class="col-12 col-lg-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" required placeholder="Price" name="price" id="price">
                          </div>
                          <div class="col-12 col-lg-3">
                            <label class="form-label">Discount</label>
                            <input type="text" class="form-control" required placeholder="Discount" name="discount" id="discount">
                          </div>
                          {{-- <div class="col-12">
                            <label class="form-label">Brand</label>
                            <input type="text" class="form-control" placeholder="Brand">
                          </div> --}}
                          <div class="col-12">
                            <label class="form-label">Images</label>
                            <input class="form-control" required type="file" name="url_image" id="url_image">
                          </div>
                          <div class="col-12">
                            <label class="form-label">Full description</label>
                            <textarea class="form-control" required placeholder="Full description" rows="4" cols="4" name="description" id="description"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary add-new-product" value="submit" name="add">Add New Product</button>
                        </form>
                      </div>
                    </div>
                 </div>

                 {{-- <div class="col-12 col-lg-4">
                    <div class="card shadow-none bg-light border">
                      <div class="card-body">
                          <div class="row g-3">
                            <div class="col-12">
                              <label class="form-label">Price</label>
                              <input type="text" class="form-control" placeholder="Price">
                            </div>
                            <div class="col-12">
                              <label class="form-label">Status</label>
                              <select class="form-select">
                                <option>Published</option>
                                <option>Draft</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <label class="form-label">Tags</label>
                              <input type="text" class="form-control" placeholder="Tags">
                            </div>
                            <div class="col-12">
                              <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Woman <i class="bi bi-x"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Fashion <i class="bi bi-x"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm bg-white">Furniture <i class="bi bi-x"></i></a>
                              </div>
                            </div>
                            <div class="col-12">
                              <h5>Categories</h5>
                              <div class="category-list">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="Jeans">
                                  <label class="form-check-label" for="Jeans">
                                    Jeans
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="FormalShirts">
                                  <label class="form-check-label" for="FormalShirts">
                                    Formal Shirts
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="WomenShirts">
                                  <label class="form-check-label" for="WomenShirts">
                                    Women Shirts
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="Electronics">
                                  <label class="form-check-label" for="Electronics">
                                    Electronics
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="SportsShoes">
                                  <label class="form-check-label" for="SportsShoes">
                                    Sports Shoes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="Mobiles">
                                  <label class="form-check-label" for="Mobiles">
                                    Mobiles
                                  </label>
                                </div>
                              </div>
                             
                            </div>

                          </div><!--end row-->
                      </div>
                    </div>  
                </div> --}}

               </div><!--end row-->
             </div>
            </div>
         </div>
      </div><!--end row-->


@endsection