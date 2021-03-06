@extends('admin.index')
@section('title', 'Order details')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Orders</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order details</li>
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
            <div class="col-12 col-lg-4 col-md-6 me-auto">
                @if ($orders)
                    @foreach ($orders as $item)
                    <h5 class="mb-1">{{$item->created_at}}</h5>
                    <p class="mb-0">Order ID : #{{$item->order_id}}</p>
                    @endforeach
                @endif
            </div>
            <div class="col-12 col-lg-4 col-md-6 me-auto">
            @if ($orders)
                @foreach ($orders as $item)
            <form method="POST" class="row g-3">
              @csrf
                @if($item->status != 4) 
                <div class="col-9 col-lg-9">
                  <select class="form-select status" name="status" class="col-12 col-lg-6">
                    <option>Change Status</option>
                    <option value="0">Ch??? x??c nh???n</option>
                    <option value="1">??ang giao h??ng</option>
                    <option value="2">???? nh???n h??ng</option>
                    <option value="3">Ho??n th??nh ????n h??ng</option>
                    <option value="4">H???y ????n h??ng</option>
                  </select>
                </div>
                @else 
                  <div class="col-9 col-lg-9">
                      <h6 class="text-success">???? ho??n th??nh ????n h??ng</h6>
                  </div>
                @endif
                <div class="col-3 col-lg-3"><button type="submit" class="btn btn-primary save" name="save" data-id="{{$item->order_id}}">Save</button></div>
            </form>
                @endforeach
            @endif
          </div>
          </div>
         </div>
         {{-- <div class="card-header py-3">
          <div class="row g-3 align-items-center">
            <div class="col-12 col-lg-4 col-md-6 me-auto">
              <h5 class="mb-1">Tue, Apr 15, 2020, 8:44PM</h5>
              <p class="mb-0">Order ID : #8965327</p>
            </div>
            <div class="col-12 col-lg-3 col-6 col-md-3">
              <select class="form-select">
                <option>Change Status</option>
                <option>Awaiting Payment</option>
                <option>Confirmed</option>
                <option>Shipped</option>
                <option>Delivered</option>
              </select>
            </div>
            <div class="col-12 col-lg-3 col-6 col-md-3">
               <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
         </div> --}}
        <div class="card-body" id="card-body">
            <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
               <div class="col">
                 <div class="card border shadow-none radius-10">
                   <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box bg-light-primary border-0">
                        <i class="bi bi-person text-primary"></i>
                      </div>
                      <div class="info">
                         <h6 class="mb-2">Customer</h6>
                         @if ($customers)
                            @foreach ($customers as $item)
                            <p class="mb-1">{{$item->name}}</p>
                            <p class="mb-1">{{$item->email}}</p>
                            <p class="mb-1">{{$item->phone}}</p>
                            @endforeach
                         @endif
                      </div>
                   </div>
                   </div>
                 </div>
               </div>
               <div class="col">
                <div class="card border shadow-none radius-10">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box bg-light-success border-0">
                        <i class="bi bi-truck text-success"></i>
                      </div>
                      <div class="info">
                         <h6 class="mb-2">Shipper</h6>
                         @if ($shippers)
                          @foreach ($shippers as $item)
                          <p class="mb-1"><strong>Name</strong> : {{$item->name}}</p>
                          <p class="mb-1"><strong>Phone</strong> : {{$item->phone}}</p>
                          <p class="mb-1"><strong>Address</strong> : {{$item->address}}</p>
                          @endforeach
                         @endif
                      </div>
                   </div>
                   </div>
                  </div>
               </div>
              <div class="col">
                <div class="card border shadow-none radius-10">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                      <div class="icon-box bg-light-danger border-0">
                        <i class="bi bi-geo-alt text-danger"></i>
                      </div>
                      <div class="info">
                        <h6 class="mb-2">Deliver to</h6>
                            @if ($orders)
                                @foreach ($orders as $item)
                                <p class="mb-1"><strong>City</strong> : {{$item->address}}</p>
                                <p class="mb-1"><strong>Address</strong> : {{$item->address}}</p>
                                @endforeach
                            @endif
                      </div>
                    </div>
                  </div>
                 </div>
            </div>
          </div><!--end row-->

          <div class="row">
              @if ($order_details)
              <div class="col-12 col-lg-8">
                <div class="card border shadow-none radius-10">
                  <div class="card-body">
                      <div class="table-responsive">
                        <table class="table align-middle mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>Product</th>
                              <th>Unit Price</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($order_details as $item)
                            <tr style="height: 120px !important">
                              <td>
                                <div class="orderlist">
                                 <a class="d-flex align-items-center gap-2" href="javascript:;">
                                   <div class="product-box">
                                      {{-- {{$item->pro duct_image}} --}}
                                      @php
                                          $image = json_decode($item->product_image);
                                      @endphp
                                       <img  src="{{asset('assets/storage/images/product/'.$image[0])}}" alt="">
                                   </div>
                                   <div>
                                       <P class="mb-0 product-title">{{$item->product_name}}</P>
                                   </div>
                                  </a>
                                </div>
                              </td>
                              <td>${{$item->price}}.00</td>
                              <td>{{$item->quantity}}</td>
                              <td>${{$item->total_price}}.00</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
             </div>
              @endif
              <div class="col-12 col-lg-4">
                @if ($order_details)
                    @foreach ($order_details as $item)
                    <div class="card border shadow-none bg-light radius-10">
                      <div class="card-body">
                          <div class="d-flex align-items-center mb-4">
                             <div>
                                <h5 class="mb-0">Order Summary</h5>
                             </div>
                             <div class="ms-auto">
                               @if ($orders)
                                   @foreach ($orders as $val)
                                   @switch($val->status)
                                   @case(0)
                                       <td><span class="badge rounded-pill alert-warning">Ch??? x??c nh???n</span></td>
                                       @break
                                   @case(1)
                                       <td><span class="badge rounded-pill alert-primary">??ang giao h??ng</span></td>
                                       @break
                                   @case(2)
                                       <td><span class="badge rounded-pill alert-info">???? nh???n h??ng</span></td>
                                       @break
                                   @case(3)
                                       <td><span class="badge rounded-pill alert-success">Ho??n th??nh</span></td>
                                       @break
                                   @case(4)
                                       <td><span class="badge rounded-pill alert-danger">H???y ????n h??ng</span></td>
                                       @break
                                   @default

                               @endswitch
                                   @endforeach
                               @endif
                            </div>
                          </div>
                            <div class="d-flex align-items-center mb-3">
                              <div>
                                <p class="mb-0">Total price</p>
                              </div>
                              <div class="ms-auto">
                                <h5 class="mb-0">${{$item->total_price}}.00</h5>
                            </div>
                          {{-- </div>
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <p class="mb-0">Shipping Price</p>
                            </div>
                            <div class="ms-auto">
                              <h5 class="mb-0">$0.00</h5>
                          </div>
                        </div>
                          <div class="d-flex align-items-center mb-3">
                            <div>
                              <p class="mb-0">Taxes</p>
                            </div>
                            <div class="ms-auto">
                              <h5 class="mb-0">$24.00</h5>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                          <div>
                            <p class="mb-0">Payment Fee</p>
                          </div>
                          <div class="ms-auto">
                            <h5 class="mb-0">$14.00</h5>
                        </div>
                      </div>
                        <div class="d-flex align-items-center mb-3">
                          <div>
                            <p class="mb-0">Discount</p>
                          </div>
                          <div class="ms-auto">
                            <h5 class="mb-0 text-danger">-$36.00</h5>
                        </div> --}}
                      </div>
                      </div>
                    </div>
                    @endforeach
                @endif
                <div class="card border shadow-none bg-warning radius-10">
                  <div class="card-body">
                      <h5>Payment info</h5>
                       <div class="d-flex align-items-center gap-3">
                          <div class="fs-1">
                            <i class="bi bi-credit-card-2-back-fill"></i>
                          </div>
                          <div class="">
                            <p class="mb-0 fs-6">Master Card **** **** 8956 </p>
                          </div>
                       </div>
                      <p>Business name: Template Market LLP <br>
                         Phone: +91-9910XXXXXX
                      </p>
                  </div>
                </div>


             </div>
          </div><!--end row-->

        </div>
      </div>

@endsection
