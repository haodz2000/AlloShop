@extends('admin.index')
@section('title', 'Orders')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Orders</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
         <div class="col-12 col-lg-9 d-flex">
           <div class="card w-100">
            <div class="card-header py-3">
              <div class="row g-3">
                <div class="col-lg-4 col-md-6 me-auto">
                  <div class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search products">
                  </div>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                  <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Pending</option>
                    <option>Show All</option>
                  </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                  <select class="form-select">
                    <option>Show 10</option>
                    <option>Show 30</option>
                    <option>Show 50</option>
                  </select>
                </div>
              </div>
             </div>
             @if ($order_list)
             <div class="card-body">
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>ID</th>
                      <th>Customer name</th>
                      <th>Total price</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($order_list as $item)
                    <tr>
                      <td>{{$item->order_id}}</td>
                      <td>{{$item->user_name}}</</td>
                      <td>{{$item->total_price}}</</td>
                      <td><span class="badge rounded-pill alert-success">{{$item->status}}</</span></td>
                      <td>{{$item->created_at}}</</td>
                      <td>
                       <div class="d-flex align-items-center gap-3 fs-6">
                         <a href="{{route('order-details', [$item->order_id, $item->user_id, $item->shipper_id])}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                         <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                         <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                       </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <nav class="float-end" aria-label="Page navigation">
               <ul class="pagination">
                 <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">Next</a></li>
               </ul>
             </nav>
            </div>
             @endif
           </div>
         </div>
         <div class="col-12 col-lg-3 d-flex">
          <div class="card w-100">
            <div class="card-header py-3">
              <h5 class="mb-0">Filter by</h5>
            </div>
            <div class="card-body">
              <form class="row g-3">
                <div class="col-12">
                  <label class="form-label">Order ID</label>
                  <input type="text" class="form-control" placeholder="Order ID">
                </div>
                <div class="col-12">
                 <label class="form-label">Customer</label>
                 <input type="text" class="form-control" placeholder="Customer name">
               </div>
               <div class="col-12">
                 <label class="form-label">Order Status</label>
                 <select class="form-select">
                   <option>Published</option>
                   <option>Draft</option>
                 </select> 
               </div>
               <div class="col-12">
                <label class="form-label">Total</label>
                <input type="text" class="form-control">
               </div>
               <div class="col-12">
                <label class="form-label">Date Added</label>
                <input type="date" class="form-control">
               </div>
               <div class="col-12">
                <label class="form-label">Date Modified</label>
                <input type="date" class="form-control">
               </div>
               <div class="col-12">
                 <div class="d-grid">
                   <button class="btn btn-primary">Filter Product</button>
                 </div>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--end row-->
@endsection