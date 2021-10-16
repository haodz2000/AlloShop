@extends('admin.index')
@section('title', 'Update Product')
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
            <li class="breadcrumb-item active" aria-current="page">Update Product</li>
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
         <div class="col-lg-8 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent"> 
               <h5 class="mb-0">Update product</h5>
              </div>
            <div class="card-body">
              <div class="border p-3 rounded">
              <form class="row g-3" action="{{route('products-grid.update', $product['product_id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label class="form-label">Product name</label>
                  <input type="text" class="form-control" name="product_name" placeholder="Product name" value="{{$product['product_name']}}">
                </div>
                <div class="col-12">
                  <label class="form-label">Full description</label>
                  <textarea class="form-control" placeholder="Full description" name="description" rows="4" cols="4">{{$product['description']}}</textarea>
                </div>
                <div class="col-12">
                  <label class="form-label">Images</label>
                  <input class="form-control" type="file" name="url_image" src="{{ URL::asset('./assets/admin/images/products/'.$product['url_image']) }}">
                </div>
                <div class="col-12">
                  <label class="form-label">Slug</label>
                  <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{$product['slug']}}">
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label">Category</label>
                  <select class="form-select" name="category_id">
                    @foreach ($category as $item)
                        <option @if ($product['category_id'] == $item['category_id'])
                            {{'selected'}}
                        @endif value="{{$item['category_id']}}">{{$item['category_name']}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label">Gender</label>
                  <select class="form-select" name="gender">
                    <option value="1" @if ($product['gender'] == 1)
                        {{'selected'}}
                    @endif>Nam</option>
                        <option value="2" @if ($product['gender'] == 2)
                        {{'selected'}}
                    @endif>Nữ</option>
                        <option value="3" @if ($product['gender'] == 3)
                        {{'selected'}}
                    @endif>Cả hai</option>
                  </select>
                </div>
                <div class="col-12 col-lg-6">
                    <label class="form-label">Price</label>
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{$product['price']}}">
                </div>
                <div class="col-12 col-lg-6">
                    <label class="form-label">Discount</label>
                    <input type="text" class="form-control" placeholder="Discount" name="discount" value="{{$product['discount']}}">
                </div>
                {{-- <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Publish on website
                    </label>
                  </div>
                </div> --}}
                <div class="col-12">
                  <button class="btn btn-primary px-4" name="update">Update Product</button>
                </div>
              </form>
              </div>
             </div>
            </div>
         </div>
      </div><!--end row-->

  </main>
@endsection