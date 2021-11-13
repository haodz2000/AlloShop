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
          @if($linkFromCategory)
            <form action="{{route('products-list')}}">
              <button type="submit" class="btn btn-info">Go to All Product</button>
            </form>
          @endif
          <form action="{{route('add-new-product')}}">
            <button type="submit" class="btn btn-success">Add Product</button>
          </form>
          <form action="{{route('category.index')}}">
            <button type="submit" class="btn btn-primary">Go to Category List</button>
          </form>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <div class="row align-items-center m-0">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                @if($linkFromCategory)
                  <h5>List product of <span class="text-danger">{{$linkFromCategory['category_name']}}</span></h5>
                @else
                  <select  class="form-select form-select-category">
                      <option value="0">All product</option>
                      @foreach ($category_name_list as $item)
                        <option value="{{$item['category_name']}}">{{$item['category_name']}}</option>
                      @endforeach
                  </select>
                @endif

            </div>
            <div class="col-lg-4 col-md-6 me-auto">
              <div class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input id="search" class="form-control ps-5" type="text" placeholder="Search product....">
              </div>
            </div>
            {{-- <div class="col-md-2 col-6">
                <input type="date" class="form-control">
            </div> --}}
            {{-- <div class="col-md-2 col-6">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div> --}}
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
                        <tr style="height: 120px !important">
                          <td class="productlist">
                            <a class="d-flex align-items-center gap-2" href="#">
                              <div class="product-box">
                                  @php
                                      $image = json_decode($item->url_image)
                                  @endphp
                                  <div class="row">
                                      <div class="col-md-12">
                                        <img style="max-width:100%" src="{{asset('./assets/storage/images/product/'.$image[0])}}" alt="{{ $item->product_name }}">
                                      </div>
                                  </div>
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
                              <div class="modal-body">
                                    <div class="col-12">
                                        <label class="form-label">Full description</label>
                                        <textarea readonly="true" rows="6" class="form-control">{{$item->description}}</textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" style="color: red">Now images</label>
                                        <img src="{{URL::asset('./assets/admin/images/products/' . $item['url_image'])}}" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Slug</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item['slug'] }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Category</label>
                                        <input readonly="true" type="text" class="form-control" value="{{$item->categories->category_name}}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Gender</label>
                                        <input readonly="true" type="text" class="form-control" value="@switch($item->gender) @case(1)Nam @break @case(2)Nữ@break @case(3)Cả hai @break @default   @endswitch">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label">Price</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item->price }}">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label">Discount</label>
                                        <input readonly="true" type="text" class="form-control" value="{{ $item->discount }}">
                                    </div>
                                </form>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                          </div>
                        </div>
                      @endforeach
                </tbody>
              </table>
            </div>
            <nav class="float-end mt-4" aria-label="Page navigation">
              <ul class="pagination">
                  {{$product_list->links()}}
              </ul>
            </nav>
          @else
              <span class="text-danger"><h3>No data!</h3></span>
          @endif
        </div>
</div>

  {{-- Filter to category --}}
    <script>
      $(document).ready(function() {
            $('.form-select-category').change(function(){
                filter_function();
            });
            $('table tbody tr').show();

            function filter_function(){
                $('table tbody tr').hide();

                let categoryFlag = 0;
                let categoryValue = $('.form-select-category').val();

                $('table tbody tr').each(function() {

                    if(categoryValue == 0){
                        categoryFlag = 1;
                    }
                    else if(categoryValue == $(this).find('td.category').data('category')){
                        categoryFlag = 1;
                    }
                    else{
                        categoryFlag = 0;
                    }
                    if(categoryFlag){
                        $(this).show();
                        if (categoryValue != 0) {
                          $('.pagination').hide();
                        }
                    }
                });
            }
      });
    </script>


@endsection
