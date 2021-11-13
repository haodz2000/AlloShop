@extends('admin.index')
@section('title', 'Update Product')
<style>
    .box-image figure img{
        max-width: 120px ;
        margin: 5px;
        display: inline;
        border-radius: 5px
    }
    .row ul{
        display: flex;
    }
    .row ul li{
        display: block;
        list-style-type: none;
        min-width: 50px;
        padding: 5px 0;
        border: 1px solid black;
        margin: 2px;
        z-index: 10000;
        text-align:  center;
        border-radius: 5px;
        background-color: rgb(233, 230, 230)
     }
     .table{
         border-right: 1px solid black;
     }
     .hidden{
         display: none;
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
                    <li class="breadcrumb-item active" aria-current="page">Create Product Detail</li>
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
                    <a class="dropdown-item" href="javascript:;">Tạo biến thể</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Create Product Detail</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                            <div class="row">
                                <div class="col-12">
                                    <legend class="form-label">Sản phẩm hiện tại</legend>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="box-image">
                                        <figure>
                                            @isset($image)
                                                @foreach ($image as $item )
                                                    <img  src="{{ asset('assets/storage/images/product/'.$item) }}" alt="">
                                                @endforeach
                                            @endisset
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="row data-table">
                                <div class="col-md-5 col-lg-5">
                                    <strong>Trong kho đang có</strong>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Color</th>
                                                <th>Số lượng(sản phẩm)</th>
                                                <th>Active</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-data">
                                            @isset($listItem)
                                                @foreach ($listItem as $item )
                                                    <tr id="{{ $item->sku }}" data-sku="{{ $item->sku }}">
                                                        <td>{{ $item->sizes->size }}</td>
                                                        <td>{{ $item->colors->color }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td><i data-sku="{{ $item->sku }}" class="bi  bi-trash-fill text-danger"></i></td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-7 col-lg-7">
                                    <div class="alert alert-danger hidden"></div>
                                    <div class="alert alert-success hidden"></div>
                                    <form class="form-update" action=""method="POST">
                                        @csrf
                                        <div style="margin: 0 auto" class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <h3>Update Product</h3>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="color-area">
                                                            <strong>Select Color</strong>
                                                            <ul>
                                                                @isset($color)
                                                                    @foreach ($color as $item )
                                                                        <li type="button" data-id="{{ $item->color_id }}" class="color">{{ $item->color }}</li>
                                                                    @endforeach
                                                                @endisset
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="color-area">
                                                            <strong>Select Size</strong>
                                                            <ul>
                                                                @isset($size)
                                                                    @foreach ($size as $item )
                                                                        <li type="button" data-id="{{ $item->size_id }}" class="size">{{ $item->size }}</li>
                                                                    @endforeach
                                                                @endisset
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="color-area">
                                                            <strong>Số lượng:</strong>
                                                            <input required type="number" min="0" id="quantity" value="100" name="quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                        <input required  type="hidden" name="color" id="color">
                                                        <input required  type="hidden" name="size" id="size">
                                                        <input required id="product-id" type="hidden" name="id" value="{{ $product->product_id }}">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('./assets/admin/js/convert-slug.js')}}"></script>
    <script>
        const urlProductDetailStore ='{{ route('productdetail.store') }}'
    </script>
    <script>
        $(document).on('click','ul li.size',function(){
            $('ul li.size').removeClass('bg-danger');
            var idSize = $(this).data('id');
            $(this).addClass('bg-danger');
            $("form input#size").val(idSize);
        })
        $(document).on('click','ul li.color',function(){
            $('ul li.color').removeClass('bg-danger');
            var idColor = $(this).data('id');
            $(this).addClass('bg-danger');
            $("form input#color").val(idColor);
        })
        $(document).on('blur','form input#quantiy',function(){
            var quantity = parseInt($(this).val());
            quantity = quantity>=0?quantity:0;
            $(this).val(quantity);
        })
        $(document).on('submit','form.form-update' ,function(e){
            e.preventDefault();
            var size = parseInt($('input#size').val());
            var color = parseInt($('input#color').val());
            var id = parseInt($('input#product-id').val());
            if(!Number.isInteger(size) || !Number.isInteger(color) || !Number.isInteger(id))
            {
                $("div.alert-success").addClass('hidden');
                $("div.alert-danger").html("Bạn phải chọn size hoặc màu color");
                $("div.alert-danger").removeClass('hidden');
                setTimeout(() => {
                    $("div.alert-danger").addClass('hidden');
                }, 4000);
            }
            else
            {
                $("div.alert-danger").html('');
                $("div.alert-danger").addClass('hidden');
                $('div.alert-success').addClass('hidden');
                $.ajax({
                    url: urlProductDetailStore,
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data){
                        $('ul li.size').removeClass('bg-danger');
                        $('ul li.color').removeClass('bg-danger');
                        $('input#color').val('');
                        $('input#size').val('');
                        $('div.alert-success').html('Update Success');
                        $('div.alert-success').removeClass('hidden');
                        $('.table').load(' #list-data');
                        // var html = '<tr>\
                        //             <td>'+data.item.size+'</td>\
                        //             <td>'+data.item.color+'</td>\
                        //             <td>'+data.item.quantity+'</td>\
                        //             </tr>';
                        // if(data.item.status == 'new' ){
                        //     $('table tbody#list-data').append(html);
                        // }
                        // else{
                        //     console.log(data.listItem);
                        //     let sku = data.item.sku;
                        //     $('#'+sku).html(html);
                        // }
                        // setTimeout(() => {
                        //     $('div.alert-success').addClass('hidden');
                        // }, 4000);

                    },
                    error: function(){
                        console.log('error');
                    }
                })

            }
        })
    </script>
@endsection
