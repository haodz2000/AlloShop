@extends('admin.index')
@section('title', "Products List")
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">eCommerce</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products List</li>
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
          <div class="row align-items-center m-0">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                <select class="form-select">
                    <option>All category</option>
                    <option>Fashion</option>
                    <option>Electronics</option>
                    <option>Furniture</option>
                    <option>Sports</option>
                </select>
            </div>
            <div class="col-md-2 col-6">
                <input type="date" class="form-control">
            </div>
            <div class="col-md-2 col-6">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div>
         </div>
        </div>
        <div class="card-body" id="product-list">
          @if (count($product_list)>0)
            <div class="table-responsive">
              <table class="table align-middle table-striped" id="myTable">
                <thead>
                  <tr>
                    <th>
                      Product Name
                    </th>
                    <th>Category</th>
                    <th>Slug</th>
                    <th>
                      Price
                    </th>
                    <th>
                      Gender
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($product_list as $item)
                        <tr>
                          <td class="productlist">
                            <a class="d-flex align-items-center gap-2" href="#">
                              <div class="product-box">
                                  <img src="{{asset('./assets/admin/images/products/'.$item->url_image)}}" alt="">
                              </div>
                              <div>
                                  <h6 class="mb-0 product-title">{{$item->product_name}}</h6>
                              </div>
                            </a>
                          </td>
                          <td class="category" data-category="{{$item->categories->category_name}}">{{$item->categories->category_name}}</td>
                          <td><span>{{$item->slug}}</span></td>
                          <td><span>${{$item->price}}.00</span></td>
                          <td>
                            @switch($item->gender)
                                @case(1)
                                    <span>Nam</span>
                                    @break
                                @case(2)
                                    <span>Nữ</span>
                                    @break
                                @case(3)
                                    <span>Cả hai</span>
                                    @break
                                @default
                                    
                            @endswitch
                          </td>
                          {{-- <td><span>{{$item->size}}</span></td> --}}
                          {{-- <td><span>{{$item->quantity}}</span></td> --}}
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-toggle="modal" data-target="#detailProduct{{$item->product_id}}" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi   bi-eye-fill"></i></a>
                              <a  href="{{route('products-grid.update-view', $item['product_id'])}}" class="text-warning" data-id="{{$item['product_id']}}" aria-label="Edit"><i class="bi  bi-pencil-fill"></i></a>
                              <a href="#" class="delete-list" class="text-danger" data-id="{{$item->product_id}}" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-original-title="Delete" aria-label="Delete"><i class="bi  bi-trash-fill"></i></a>
                            </div>
                          </td>
                        </tr>
                        <!-- The Modal -->
                        <div class="modal" id="detailProduct{{$item->product_id}}">
                          <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-name" id="nameDetailProduct">{{$item->product_name}}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body row">
                                    <div class="col-12">
                                        <label class="form-label">Full description</label>
                                        <textarea readonly="true" rows="6" class="form-control">{{$item->description}}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" style="color: red">Now images</label>
                                        <img width="50%" src="{{URL::asset('./assets/admin/images/products/' . $item['url_image'])}}" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Slug</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item['slug'] }}">
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class="form-label">Category</label>
                                        <input readonly="true" type="text" class="form-control" value="{{$item->categories->category_name}}">
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label class="form-label">Gender</label>
                                        <input readonly="true" type="text" class="form-control" value="@switch($item->gender) @case(1)Nam @break @case(2)Nữ@break @case(3)Cả hai @break @default   @endswitch">                                                                            
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <label class="form-label">Price</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item->price }}">
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <label class="form-label">Discount</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item->discount }}">
                                    </div>
                                    <br><hr>
                                    <div class="col-12 col-md-12">
                                      <label class="form-label"><h5>Product Detail</h5></label>
                                    </div>
                                    @if(count($item->product_details)>0)
                                      @foreach($item->product_details as $detail) 
                                          <div class="col-3 col-lg-3">
                                            <label class="form-label">
                                                @foreach($list_color as $color)
                                                  @foreach($list_size as $size)
                                                      @if($color->color_id == $detail->color_id && $size->size_id == $detail->size_id)
                                                          @php
                                                              echo $color->color.'-'.$size->size
                                                          @endphp
                                                      @endif
                                                  @endforeach
                                                @endforeach
                                            </label>
                                            <input readonly="true" type="text" class="form-control" value="{{ $detail->quantity }}">
                                          </div>
                                      @endforeach
                                    @endif
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                        </div>
                    @endforeach
                @endif
              </tbody>
            </table>
          </div>

    <nav class="float-end mt-4" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

</div>
</div>

@endsection