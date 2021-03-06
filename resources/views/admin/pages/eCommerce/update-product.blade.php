@extends('admin.index')
@section('title', 'Update Product')
<style>
    .box-image figure img{
        max-width: 100px ;
        margin: 5px;
        display: inline;
        border-radius: 5px;
    }
    figure i.delete{
        position: relative;
        margin-right: -18px;
        top: 6px;
        color: red;
    }
    .opacity{
        opacity: 0.1;
    }
</style>
@section('content')
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
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                        href="javascript:;">Action</a>
                    <a class="dropdown-item" href="{{ route('productdetail.create',['id'=>$product->product_id]) }}">Tạo biến thể</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
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
                        <form class="row g-3" action="{{ route('products-grid.update', $product['product_id']) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Product name</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Product name"
                                    value="{{ $product['product_name'] }}" id="slug"  onkeyup="ChangeToSlug()">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Full description</label>
                                <textarea id="summernote" class="form-control" placeholder="Full description"
                                    name="description" rows="4" cols="4">{{ $product['description'] }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file" name="url_image[]" accept="image/*" multiple id="url_image">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color: red">Now images</label>
                                @php
                                    $image = json_decode($product->url_image)
                                @endphp
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-image">
                                            <div class="col-md-3">
                                                <figure style="display: flex">
                                                    @foreach ($image as $item)
                                                    <i data-id="{{ '#'.$item }}" data-name ="{{ $item }}" class="delete bi  bi-trash-fill"></i>
                                                    <img id="{{ $item }}" style="width:100px" src="{{ URL::asset('./assets/storage/images/product/'.$item) }}"
                                                        alt="{{ $product->product_name }}" class="">
                                                    @endforeach
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label id="preview" class="form-label" style="color: red"></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-image box-image2">
                                            <div class="col-md-3">
                                                <figure style="display: flex">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="image_delete" id="image-delete">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" placeholder="Slug" name="slug"
                                    value="{{ $product['slug'] }}" id="convert_slug">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category_id">
                                    @foreach ($category as $item)
                                        <option @if ($product['category_id'] == $item['category_id'])
                                            {{ 'selected' }}
                                            @endif value="{{ $item['category_id'] }}">{{ $item['category_name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="1" @if ($product['gender'] == 1)
                                        {{ 'selected' }}
                                        @endif>Nam</option>
                                    <option value="2" @if ($product['gender'] == 2)
                                        {{ 'selected' }}
                                        @endif>Nữ</option>
                                    <option value="3" @if ($product['gender'] == 3)
                                        {{ 'selected' }}
                                        @endif>Cả hai</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="Price" name="price"
                                    value="{{ $product['price'] }}">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Discount</label>
                                <input type="text" class="form-control" placeholder="Discount" name="discount"
                                    value="{{ $product['discount'] }}">
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
    </div>
    <script src="{{ asset('./assets/admin/js/convert-slug.js')}}"></script>
    <script>
        $(function() {
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#url_image').on('change', function() {
                // $('.box-image figure').html('');
                imagesPreview(this, '.box-image2 figure');
                $('#preview').html('Images Preview')
            });
        });
        var valueImageDel = []
        $(document).on('click','figure i.delete',function(){
            var image = $(this).data('name');
            var value = [];
            valueImageDel.push(image)
            console.log(valueImageDel);
            $('input#image-delete').val(valueImageDel);
            value =  $('input#image-delete').val();
            console.log(value);
            $(this).removeClass('delete bi bi-trash-fill');
            $(this).html('Hủy');
            $(this).addClass('undo')
        })
        $(document).on('click','figure i.undo',function(){
            var image = $(this).data('name');
            valueImageDel.pop(image)
            $('input#image-delete').val(valueImageDel);
            value =  $('input#image-delete').val();
            $(this).removeClass('undo');
            $(this).html('');
            $(this).addClass('delete bi bi-trash-fill');
        })
    </script>
@endsection
