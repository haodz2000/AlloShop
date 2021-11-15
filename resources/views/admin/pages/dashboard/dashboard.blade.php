
@extends('admin.index')  
@section('title','Dashboard')

@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
      <h2 class="col-12">Thống kê chung của tháng {{date('m')}}/{{date('Y')}}</h2>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">   
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Orders</p>
                <h4 class="mb-0">{{$total_order_in_this_month}}</h4>
              </div>
              <div class="ms-auto fs-2 text-primary">
                <i class="bi bi-cart-check"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0">
              <span class="text-{{$total_order_in_this_month>=$total_order_in_last_month ? 'success' : 'danger'}}">
                {{$total_order_in_this_month>=$total_order_in_last_month ? '+'.($total_order_in_this_month-$total_order_in_last_month) : '-'.(-$total_order_in_this_month+$total_order_in_last_month)}}
               <i class="bi bi-arrow-{{$total_order_in_this_month>=$total_order_in_last_month ? 'up' : 'down'}}"></i>
              </span> Compared to last month
            </small>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Sales </p>
                <h4 class="mb-0">
                    ${{$total_price_in_this_month}}
                </h4>
              </div>
              <div class="ms-auto fs-2 text-success">
                <i class="bi bi-piggy-bank"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0">
              <span class="text-{{$total_price_in_this_month>=$total_price_in_last_month ? 'success' : 'danger'}}">
                {{$total_price_in_this_month>=$total_price_in_last_month ? '+$'.($total_price_in_this_month-$total_price_in_last_month) : '-'.(-$total_price_in_this_month+$total_price_in_last_month)}}
              <i class="bi bi-arrow-{{$total_price_in_this_month>=$total_price_in_last_month ? 'up' : 'down'}}"></i>
              </span> Compared to last month
            </small>
          </div>
        </div>
       </div>     
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Orders Completed </p>
                <h4 class="mb-0">{{$total_order_complete_in_this_month}}</h4>
              </div>
              <div class="ms-auto fs-2 text-primary">
                <i class="bi bi-cart-check"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0">
              <span class="text-{{$total_order_complete_in_this_month>=$total_order_complete_in_last_month ? 'success' : 'danger'}}">
                {{$total_order_complete_in_this_month>=$total_order_complete_in_last_month ? '+'.($total_order_complete_in_this_month-$total_order_complete_in_last_month) : '-'.(-$total_order_complete_in_this_month+$total_order_complete_in_last_month)}}
               <i class="bi bi-arrow-{{$total_order_complete_in_this_month>=$total_order_complete_in_last_month ? 'up' : 'down'}}"></i>
              </span> Compared to last month
            </small>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Older Canceled</p>
                <h4 class="mb-0">{{$total_order_cancel_in_this_month}}</h4>
              </div>
              <div class="ms-auto fs-2 text-orange">
                <i class="bi bi-recycle"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0">
              <span class="text-{{$total_order_cancel_in_this_month>=$total_order_cancel_in_last_month ? 'danger' : 'success'}}">
                {{$total_order_cancel_in_this_month>=$total_order_cancel_in_last_month ? '+'.($total_order_cancel_in_this_month-$total_order_cancel_in_last_month) : '-'.(-$total_order_cancel_in_this_month+$total_order_cancel_in_last_month)}}
              <i class="bi bi-arrow-{{$total_order_cancel_in_this_month>=$total_order_cancel_in_last_month ? 'up' : 'down'}}"></i>
              </span> Compared to last month
            </small>
          </div>
        </div>
       </div>
       
    </div> 
    <br><br>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
      <h2 class="col-12">Thông tin chung</h2>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">    
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Account Customer</p>
                <h4 class="mb-0">{{$total_account_customer}}</h4>
              </div>
              <div class="ms-auto fs-2 text-pink">
                <i class="bi bi-person-fill"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <a href="#">
              <small class="mb-0"><span class="text-success"><i class="bi bi-arrow-down-circle"></i></span> View Detail</small>
            </a>  
          </div>        
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Account Admin</p>
                <h4 class="mb-0">{{$total_account_admin}}</h4>
              </div>
              <div class="ms-auto fs-2 text-pink">
                <i class="bi bi-person-check-fill"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <a href="#">
              <small class="mb-0"><span class="text-success"><i class="bi bi-arrow-down-circle"></i></span> View Detail</small>
            </a>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Products</p>
                <h4 class="mb-0">{{$total_product}}</h4>
              </div>
              <div class="ms-auto fs-2 text-pink">
                <i class="bi bi-bag-check"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
              <a href="{{route('products-list')}}">
                <small class="mb-0"><span class="text-success"><i class="bi bi-arrow-down-circle"></i></span> View Detail</small>
              </a>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Category</p>
                <h4 class="mb-0">{{$total_category}}</h4>
              </div>
              <div class="ms-auto fs-2 text-pink">
                <i class="bi bi-border-all"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
              <a href="{{route('category.index')}}">
                <small class="mb-0"><span class="text-success"><i class="bi bi-arrow-down-circle"></i></span> View Detail</small>
              </a>
          </div>
        </div>
       </div>
    </div><!--end row-->

    {{-- <div class="container-fluid mt--6">
      <div class="row">
          <div class="col-xl-8">
              <div class="card bg-default">
                  <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                          <div class="col">
                              <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                              <h5 class="h3 text-white mb-0">Sales value</h5>
                          </div>
                          <div class="col">
                              <ul class="nav nav-pills justify-content-end">
                                  <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}" data-prefix="$" data-suffix="k">
                                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                          <span class="d-none d-md-block">Month</span>
                                          <span class="d-md-none">M</span>
                                      </a>
                                  </li>
                                  <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}" data-prefix="$" data-suffix="k">
                                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                          <span class="d-none d-md-block">Week</span>
                                          <span class="d-md-none">W</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <!-- Chart -->
                      <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                          <!-- Chart wrapper -->
                          <canvas id="chart-sales-dark" class="chart-canvas chartjs-render-monitor" style="display: block; height: 350px; width: 577px;" width="865" height="525"></canvas>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="card">
                  <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                          <div class="col">
                              <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                              <h5 class="h3 mb-0">Total orders</h5>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <!-- Chart -->
                      <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                          <canvas id="chart-bars" class="chart-canvas chartjs-render-monitor" width="375" height="525" style="display: block; height: 350px; width: 250px;"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-4">
              <!-- Members list group card -->
              <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                      <!-- Title -->
                      <h5 class="h3 mb-0">Team members</h5>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <!-- List group -->
                      <ul class="list-group list-group-flush list my--3">
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                      </a>
                                  </div>
                                  <div class="col ml--2">
                                      <h4 class="mb-0">
                                          <a href="#!">John Michael</a>
                                      </h4>
                                      <span class="text-success">●</span>
                                      <small>Online</small>
                                  </div>
                                  <div class="col-auto">
                                      <button type="button" class="btn btn-sm btn-primary">Add</button>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                      </a>
                                  </div>
                                  <div class="col ml--2">
                                      <h4 class="mb-0">
                                          <a href="#!">Alex Smith</a>
                                      </h4>
                                      <span class="text-warning">●</span>
                                      <small>In a meeting</small>
                                  </div>
                                  <div class="col-auto">
                                      <button type="button" class="btn btn-sm btn-primary">Add</button>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                      </a>
                                  </div>
                                  <div class="col ml--2">
                                      <h4 class="mb-0">
                                          <a href="#!">Samantha Ivy</a>
                                      </h4>
                                      <span class="text-danger">●</span>
                                      <small>Offline</small>
                                  </div>
                                  <div class="col-auto">
                                      <button type="button" class="btn btn-sm btn-primary">Add</button>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                      </a>
                                  </div>
                                  <div class="col ml--2">
                                      <h4 class="mb-0">
                                          <a href="#!">John Michael</a>
                                      </h4>
                                      <span class="text-success">●</span>
                                      <small>Online</small>
                                  </div>
                                  <div class="col-auto">
                                      <button type="button" class="btn btn-sm btn-primary">Add</button>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <!-- Checklist -->
              <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                      <!-- Title -->
                      <h5 class="h3 mb-0">To do list</h5>
                  </div>
                  <!-- Card body -->
                  <div class="card-body p-0">
                      <!-- List group -->
                      <ul class="list-group list-group-flush" data-toggle="checklist">
                          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-success checklist-item-checked">
                                  <div class="checklist-info">
                                      <h5 class="checklist-title mb-0">Call with Dave</h5>
                                      <small>10:30 AM</small>
                                  </div>
                                  <div>
                                      <div class="custom-control custom-checkbox custom-checkbox-success">
                                          <input class="custom-control-input" id="chk-todo-task-1" type="checkbox" checked="">
                                          <label class="custom-control-label" for="chk-todo-task-1"></label>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-warning">
                                  <div class="checklist-info">
                                      <h5 class="checklist-title mb-0">Lunch meeting</h5>
                                      <small>10:30 AM</small>
                                  </div>
                                  <div>
                                      <div class="custom-control custom-checkbox custom-checkbox-warning">
                                          <input class="custom-control-input" id="chk-todo-task-2" type="checkbox">
                                          <label class="custom-control-label" for="chk-todo-task-2"></label>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-info">
                                  <div class="checklist-info">
                                      <h5 class="checklist-title mb-0">Argon Dashboard Launch</h5>
                                      <small>10:30 AM</small>
                                  </div>
                                  <div>
                                      <div class="custom-control custom-checkbox custom-checkbox-info">
                                          <input class="custom-control-input" id="chk-todo-task-3" type="checkbox">
                                          <label class="custom-control-label" for="chk-todo-task-3"></label>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                              <div class="checklist-item checklist-item-danger checklist-item-checked">
                                  <div class="checklist-info">
                                      <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                                      <small>10:30 AM</small>
                                  </div>
                                  <div>
                                      <div class="custom-control custom-checkbox custom-checkbox-danger">
                                          <input class="custom-control-input" id="chk-todo-task-4" type="checkbox" checked="">
                                          <label class="custom-control-label" for="chk-todo-task-4"></label>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <!-- Progress track -->
              <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                      <!-- Title -->
                      <h5 class="h3 mb-0">Progress track</h5>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <!-- List group -->
                      <ul class="list-group list-group-flush list my--3">
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/bootstrap.jpg">
                                      </a>
                                  </div>
                                  <div class="col">
                                      <h5>Argon Design System</h5>
                                      <div class="progress progress-xs mb-0">
                                          <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/angular.jpg">
                                      </a>
                                  </div>
                                  <div class="col">
                                      <h5>Angular Now UI Kit PRO</h5>
                                      <div class="progress progress-xs mb-0">
                                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/sketch.jpg">
                                      </a>
                                  </div>
                                  <div class="col">
                                      <h5>Black Dashboard</h5>
                                      <div class="progress progress-xs mb-0">
                                          <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item px-0">
                              <div class="row align-items-center">
                                  <div class="col-auto">
                                      <!-- Avatar -->
                                      <a href="#" class="avatar rounded-circle">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/react.jpg">
                                      </a>
                                  </div>
                                  <div class="col">
                                      <h5>React Material Dashboard</h5>
                                      <div class="progress progress-xs mb-0">
                                          <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-5">
              <div class="card">
                  <div class="card-header">
                      <h5 class="h3 mb-0">Activity feed</h5>
                  </div>
                  <div class="card-header d-flex align-items-center">
                      <div class="d-flex align-items-center">
                          <a href="#">
                              <img src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg" class="avatar">
                          </a>
                          <div class="mx-3">
                              <a href="#" class="text-dark font-weight-600 text-sm">John Snow</a>
                              <small class="d-block text-muted">3 days ago</small>
                          </div>
                      </div>
                      <div class="text-right ml-auto">
                          <button type="button" class="btn btn-sm btn-primary btn-icon">
                              <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                              <span class="btn-inner--text">Follow</span>
                          </button>
                      </div>
                  </div>
                  <div class="card-body">
                      <p class="mb-4">
                          Personal profiles are the perfect way for you to grab their attention and persuade recruiters to continue reading your CV
                          because you’re telling them from the off exactly why they should hire you.
                      </p>
                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/img-1-1000x600.jpg" class="img-fluid rounded">
                      <div class="row align-items-center my-3 pb-3 border-bottom">
                          <div class="col-sm-6">
                              <div class="icon-actions">
                                  <a href="#" class="like active">
                                      <i class="ni ni-like-2"></i>
                                      <span class="text-muted">150</span>
                                  </a>
                                  <a href="#">
                                      <i class="ni ni-chat-round"></i>
                                      <span class="text-muted">36</span>
                                  </a>
                                  <a href="#">
                                      <i class="ni ni-curved-next"></i>
                                      <span class="text-muted">12</span>
                                  </a>
                              </div>
                          </div>
                          <div class="col-sm-6 d-none d-sm-block">
                              <div class="d-flex align-items-center justify-content-sm-end">
                                  <div class="avatar-group">
                                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg" class="">
                                      </a>
                                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Audrey Love">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg" class="rounded-circle">
                                      </a>
                                      <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis">
                                          <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg" class="rounded-circle">
                                      </a>
                                  </div>
                                  <small class="pl-2 font-weight-bold">and 30+ more</small>
                              </div>
                          </div>
                      </div>
                      <!-- Comments -->
                      <div class="mb-1">
                          <div class="media media-comment">
                              <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                              <div class="media-body">
                                  <div class="media-comment-text">
                                      <h6 class="h5 mt-0">Michael Lewis</h6>
                                      <p class="text-sm lh-160">Cras sit amet nibh libero nulla vel metus scelerisque ante sollicitudin. Cras purus odio
                                          vestibulum in vulputate viverra turpis.</p>
                                      <div class="icon-actions">
                                          <a href="#" class="like active">
                                              <i class="ni ni-like-2"></i>
                                              <span class="text-muted">3 likes</span>
                                          </a>
                                          <a href="#">
                                              <i class="ni ni-curved-next"></i>
                                              <span class="text-muted">2 shares</span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="media media-comment">
                              <img alt="Image placeholder" class="avatar avatar-lg media-comment-avatar rounded-circle" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                              <div class="media-body">
                                  <div class="media-comment-text">
                                      <h6 class="h5 mt-0">Jessica Stones</h6>
                                      <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                          Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                      <div class="icon-actions">
                                          <a href="#" class="like active">
                                              <i class="ni ni-like-2"></i>
                                              <span class="text-muted">10 likes</span>
                                          </a>
                                          <a href="#">
                                              <i class="ni ni-curved-next"></i>
                                              <span class="text-muted">1 share</span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="media align-items-center">
                              <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mr-4" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                              <div class="media-body">
                                  <form>
                                      <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-7">
              <div class="row">
                  <div class="col">
                      <div class="card">
                          <!-- Card header -->
                          <div class="card-header border-0">
                              <h3 class="mb-0">Light table</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table align-items-center table-flush">
                                  <thead class="thead-light">
                                      <tr>
                                          <th scope="col" class="sort" data-sort="name">Project</th>
                                          <th scope="col" class="sort" data-sort="budget">Budget</th>
                                          <th scope="col" class="sort" data-sort="status">Status</th>
                                          <th scope="col">Users</th>
                                          <th scope="col" class="sort" data-sort="completion">Completion</th>
                                          <th scope="col"></th>
                                      </tr>
                                  </thead>
                                  <tbody class="list">
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/bootstrap.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $2500 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-warning"></i>
                                                  <span class="status">pending</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">60%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/angular.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $1800 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-success"></i>
                                                  <span class="status">completed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">100%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/sketch.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Black Dashboard</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $3150 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-danger"></i>
                                                  <span class="status">delayed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">72%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/react.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">React Material Dashboard</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $4400 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-info"></i>
                                                  <span class="status">on schedule</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">90%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/vue.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $2200 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-success"></i>
                                                  <span class="status">completed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">100%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/bootstrap.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Argon Design System</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $2500 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-warning"></i>
                                                  <span class="status">pending</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">60%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/angular.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $1800 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-success"></i>
                                                  <span class="status">completed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">100%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/sketch.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Black Dashboard</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $3150 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-danger"></i>
                                                  <span class="status">delayed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">72%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th scope="row">
                                              <div class="media align-items-center">
                                                  <a href="#" class="avatar rounded-circle mr-3">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/angular.jpg">
                                                  </a>
                                                  <div class="media-body">
                                                      <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                                  </div>
                                              </div>
                                          </th>
                                          <td class="budget">
                                              $1800 USD
                                          </td>
                                          <td>
                                              <span class="badge badge-dot mr-4">
                                                  <i class="bg-success"></i>
                                                  <span class="status">completed</span>
                                              </span>
                                          </td>
                                          <td>
                                              <div class="avatar-group">
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-1.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-2.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-3.jpg">
                                                  </a>
                                                  <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                                      <img alt="Image placeholder" src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/theme/team-4.jpg">
                                                  </a>
                                              </div>
                                          </td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <span class="completion mr-2">100%</span>
                                                  <div>
                                                      <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-right">
                                              <div class="dropdown">
                                                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="fas fa-ellipsis-v"></i>
                                                  </a>
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                              </div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-deck">
                  <div class="card bg-gradient-default">
                      <div class="card-body">
                          <div class="mb-2">
                              <sup class="text-white">$</sup> <span class="h2 text-white">3,300</span>
                              <div class="text-light mt-2 text-sm">Your current balance</div>
                              <div>
                                  <span class="text-success font-weight-600">+ 15%</span> <span class="text-light">($250)</span>
                              </div>
                          </div>
                          <button class="btn btn-sm btn-block btn-neutral">Add credit</button>
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <small class="text-light">Orders: 60%</small>
                                  <div class="progress progress-xs my-2">
                                      <div class="progress-bar bg-success" style="width: 60%"></div>
                                  </div>
                              </div>
                              <div class="col"><small class="text-light">Sales: 40%</small>
                                  <div class="progress progress-xs my-2">
                                      <div class="progress-bar bg-warning" style="width: 40%"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Username card -->
                  <div class="card bg-gradient-danger">
                      <!-- Card body -->
                      <div class="card-body">
                          <div class="row justify-content-between align-items-center">
                              <div class="col">
                                  <img src="https://argon-dashboard-pro-laravel.creative-tim.com/argon/img/icons/cards/bitcoin.png" alt="Image placeholder">
                              </div>
                              <div class="col-auto">
                                  <span class="badge badge-lg badge-success">Active</span>
                              </div>
                          </div>
                          <div class="my-4">
                              <span class="h6 surtitle text-light">
                          Username
                          </span>
                              <div class="h1 text-white">@johnsnow</div>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <span class="h6 surtitle text-light">Name</span>
                                  <span class="d-block h3 text-white">John Snow</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xl-8">
              <div class="card">
                  <div class="card-header border-0">
                      <div class="row align-items-center">
                          <div class="col">
                              <h3 class="mb-0">Page visits</h3>
                          </div>
                          <div class="col text-right">
                              <a href="#!" class="btn btn-sm btn-primary">See all</a>
                          </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr>
                                  <th scope="col">Page name</th>
                                  <th scope="col">Visitors</th>
                                  <th scope="col">Unique users</th>
                                  <th scope="col">Bounce rate</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">
                                      /argon/
                                  </th>
                                  <td>
                                      4,569
                                  </td>
                                  <td>
                                      340
                                  </td>
                                  <td>
                                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      /argon/index.html
                                  </th>
                                  <td>
                                      3,985
                                  </td>
                                  <td>
                                      319
                                  </td>
                                  <td>
                                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      /argon/charts.html
                                  </th>
                                  <td>
                                      3,513
                                  </td>
                                  <td>
                                      294
                                  </td>
                                  <td>
                                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      /argon/tables.html
                                  </th>
                                  <td>
                                      2,050
                                  </td>
                                  <td>
                                      147
                                  </td>
                                  <td>
                                      <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      /argon/profile.html
                                  </th>
                                  <td>
                                      1,795
                                  </td>
                                  <td>
                                      190
                                  </td>
                                  <td>
                                      <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="card">
                  <div class="card-header border-0">
                      <div class="row align-items-center">
                          <div class="col">
                              <h3 class="mb-0">Social traffic</h3>
                          </div>
                          <div class="col text-right">
                              <a href="#!" class="btn btn-sm btn-primary">See all</a>
                          </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr>
                                  <th scope="col">Referral</th>
                                  <th scope="col">Visitors</th>
                                  <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">
                                      Facebook
                                  </th>
                                  <td>
                                      1,480
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <span class="mr-2">60%</span>
                                          <div>
                                              <div class="progress">
                                                  <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      Facebook
                                  </th>
                                  <td>
                                      5,480
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <span class="mr-2">70%</span>
                                          <div>
                                              <div class="progress">
                                                  <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      Google
                                  </th>
                                  <td>
                                      4,807
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <span class="mr-2">80%</span>
                                          <div>
                                              <div class="progress">
                                                  <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      Instagram
                                  </th>
                                  <td>
                                      3,678
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <span class="mr-2">75%</span>
                                          <div>
                                              <div class="progress">
                                                  <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <th scope="row">
                                      twitter
                                  </th>
                                  <td>
                                      2,645
                                  </td>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <span class="mr-2">30%</span>
                                          <div>
                                              <div class="progress">
                                                  <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
  <div class="row align-items-center justify-content-lg-between">
  <div class="col-xl-6">
      <div class="copyright text-center text-lg-left text-muted">
          © 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp; <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
      </div>
  </div>
  <div class="col-xl-6">
      <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
                  <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
          </li>
          <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
          </li>
      </ul>
  </div>
</div></footer>    </div>

    {{-- <div class="row">
      <div class="col-12 col-lg-8 col-xl-8">
        <div class="card radius-10">
          <div class="card-body">
             <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                <div class="col">
                  <h5 class="mb-0">Sales Figures</h5>
                </div>
                <div class="col">
                  <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                     <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Sales</span></div>
                     <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2">Orders</span></div>
                  </div>
                </div>
             </div>
             <div id="chart1"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-xl-4">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center gap-4">
              <div class="">
                <span class="donut" data-peity='{ "fill": ["#8932ff", "rgba(135, 50, 255, 0.15)"], "innerRadius": 28, "radius": 50, "width": 67, "height": 67}'>3/5</span>
              </div>
              <div class="">
                <h4 class="mb-0">68%</h4>
                <p class="mb-1">Conversation Rate</p>
              </div>
              <div class="dropdown ms-auto">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="border-top my-4"></div>
            <div class="d-flex align-items-center gap-4">
              <div class="">
                <span class="donut" data-peity='{ "fill": ["#ff6632", "rgba(255, 101, 50, 0.15)"], "innerRadius": 28, "radius": 50, "width": 67, "height": 67}'>3.5/5</span>
              </div>
              <div class="">
                <h4 class="mb-0">76%</h4>
                <p class="mb-1">Traffic this year</p>
              </div>
              <div class="dropdown ms-auto">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card radius-10">
          <div class="card-body">
             <div id="chart2"></div>
             <div class="d-flex align-items-end">
                <div>
                  <h4 class="mb-1">256.2K</h4>
                  <p class="mb-0">Visitors this year</p>
                </div>
                <div class="ms-auto">
                  <p class="mb-0 text-danger">1.5% <i class="bi bi-arrow-up"></i></p>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div><!--end row-->

    <div class="row">
       <div class="col-12 col-lg-6 col-xl-6 d-flex">
         <div class="card radius-10 w-100">
          <div class="card-body">
            <div class="row g-3 align-items-center">
              <div class="col">
                <h5 class="mb-0">Statistics</h5>
              </div>
              <div class="col">
                <div class="d-flex">
                  <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
           </div>
            <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
               <div class="col text-center">
                    <div class="w_chart" id="chart3" data-percent="68">
                    <span class="w_percent"></span>
                  </div>
                    <h5 class="mt-3 mb-0">2.4K</h5>
                    <p class="mb-0 font-13">Customers</p>
                  </div>
                  <div class="col text-center">
                    <div class="w_chart" id="chart4" data-percent="78">
                    <span class="w_percent"></span>
                  </div>
                  <h5 class="mt-3 mb-0">1.8K</h5>
                   <p class="mb-0 font-13">Item Sold</p>
                </div>
                <div class="col text-center">
                  <div class="w_chart" id="chart5" data-percent="46">
                  <span class="w_percent"></span>
                </div>
                   <h5 class="mt-3 mb-0">2.6K</h5>
                   <p class="mb-0 font-13">Tickets</p>
              </div>
            </div>
            <div class="bg-light p-3 radius-10 mt-3">
              <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
            </div>
          </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-6 d-flex">
        <div class="card radius-10 w-100">
          <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
              <div class="col">
                <h5 class="mb-0">Product Actions</h5>
              </div>
              <div class="col">
                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                   <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Views</span></div>
                   <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2">Clicks</span></div>
                </div>
              </div>
             </div>
              <div id="chart6"></div>
            </div>
          </div>
       </div>
    </div><!--end row-->


    <div class="card radius-10">
       <div class="card-body">
         <div class="row g-3">
           <div class="col-12 col-lg-4 col-xl-4 d-flex">
            <div class="card mb-0 radius-10 border shadow-none w-100">
              <div class="card-body">
                <h5 class="card-title">Top Sales Locations</h5>
                <h4 class="mt-4">$36.2K <i class="flag-icon flag-icon-us rounded"></i></h4>
                <p class="mb-0 text-secondary font-13">Our Most Customers in US</p>
                <ul class="list-group list-group-flush mt-3">
                  <li class="list-group-item border-top">
                    <div class="d-flex align-items-center gap-2">
                       <div><i class="flag-icon flag-icon-us"></i></div>
                       <div>United States</div>
                       <div class="ms-auto">289</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-au"></i></div>
                      <div>Malaysia</div>
                      <div class="ms-auto">562</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-in"></i></div>
                      <div>India</div>
                      <div class="ms-auto">354</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-ca"></i></div>
                      <div>Indonesia</div>
                      <div class="ms-auto">147</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-ad"></i></div>
                      <div>Turkey</div>
                      <div class="ms-auto">652</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-cu"></i></div>
                      <div>Netherlands</div>
                      <div class="ms-auto">287</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-is"></i></div>
                      <div>Italy</div>
                      <div class="ms-auto">634</div>
                   </div>
                 </li>
                 <li class="list-group-item">
                   <div class="d-flex align-items-center gap-2">
                      <div><i class="flag-icon flag-icon-ge"></i></div>
                      <div>Canada</div>
                      <div class="ms-auto">524</div>
                   </div>
                 </li>
                </ul>
              </div>
            </div>
           </div>
           <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card mb-0 radius-10 border shadow-none w-100">
              <div class="card-body">
                <div class="" id="geographic-map"></div>
               </div>
              </div>
          </div>
         </div><!--end row-->
       </div>
    </div>

    <div class="row">
       <div class="col-12 col-xl-12 col-xxl-4 d-flex">
         <div class="card radius-10 w-100">
           <div class="card-body">
            <div class="row g-3 align-items-center">
              <div class="col-9">
                <h5 class="mb-0">New Customers</h5>
              </div>
              <div class="col-3">
                <div class="d-flex">
                  <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
           </div>
          </div>
           <div class="new-customer-list p-3 mb-3">
              <div class="d-flex align-items-center gap-3 customer-list-item">
                 <img src="{{asset('./assets/admin/images/avatars/avatar-1.png')}}" class="rounded-circle" width="50" height="50" alt="">
                 <div>
                   <h6 class="mb-0">Thomas Hardy</h6>
                   <p class="mb-0 font-13">Customer ID #84586</p>
                 </div>
                  <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                    <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                    <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                  </div>
               </div>
               <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-2.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Pauline Bird</h6>
                  <p class="mb-0 font-13">Customer ID #86572</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-3.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Ralph Alva</h6>
                  <p class="mb-0 font-13">Customer ID #98657</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-4.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">John Roman</h6>
                  <p class="mb-0 font-13">Customer ID #78542</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-5.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">David Buckley</h6>
                  <p class="mb-0 font-13">Customer ID #68574</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-6.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Maria Anders</h6>
                  <p class="mb-0 font-13">Customer ID #86952</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-7.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Martin Loother</h6>
                  <p class="mb-0 font-13">Customer ID #83247</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-8.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Victoria Hardy</h6>
                  <p class="mb-0 font-13">Customer ID #67523</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-9.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">David Buckley</h6>
                  <p class="mb-0 font-13">Customer ID #94256</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
              <div class="d-flex align-items-center gap-3 customer-list-item">
                <img src="{{asset('./assets/admin/images/avatars/avatar-10.png')}}" class="rounded-circle" width="50" height="50" alt="">
                <div>
                  <h6 class="mb-0">Victoria Hardy</h6>
                  <p class="mb-0 font-13">Customer ID #48759</p>
                </div>
                 <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Message" aria-label="Message"><i class="bi bi-envelope-fill"></i></a>
                   <a href="javascript:;" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                 </div>
              </div>
            </div>
         </div>
       </div>
       <div class="col-12 col-xl-12 col-xxl-8 d-flex">
        <div class="card radius-10 w-100">
          <div class="card-body">
            <div class="row g-3 align-items-center">
              <div class="col-9">
                <h5 class="mb-0">Transaction History</h5>
              </div>
              <div class="col-3">
                <div class="d-flex">
                  <div class="dropdown ms-auto">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a>
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
           </div>
           <div class="table-responsive mt-4">
            <table class="table align-middle mb-0 table-hover" id="Transaction-History">
              <thead class="table-light">
                <tr>
                  <th>Payment Name</th>
                  <th>Date & Time</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-1.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 10, 2021</td>
                  <td>+256.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-2.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 12, 2021</td>
                  <td>+566.00</td>
                  <td>
                    <div class="badge rounded-pill alert-warning text-dark w-100">In Progress</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-3.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 14, 2021</td>
                  <td>+636.00</td>
                  <td>
                    <div class="badge rounded-pill alert-danger w-100">Declined</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-4.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from John Roman</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 15, 2021</td>
                  <td>+246.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-7.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 16, 2021</td>
                  <td>+876.00</td>
                  <td>
                    <div class="badge rounded-pill alert-warning text-dark w-100">In Progress</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-8.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 18, 2021</td>
                  <td>+536.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-9.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 18, 2021</td>
                  <td>+536.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-10.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 19, 2021</td>
                  <td>+536.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-11.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 20, 2021</td>
                  <td>+86.00</td>
                  <td>
                    <div class="badge rounded-pill alert-danger w-100">Declined</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-12.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 18, 2021</td>
                  <td>+536.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-13.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 22, 2021</td>
                  <td>+854.00</td>
                  <td>
                    <div class="badge rounded-pill alert-warning text-dark w-100">In Progress</div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="">
                        <img src="{{asset('./assets/admin/images/avatars/avatar-14.png')}}" class="rounded-circle" width="46" height="46" alt="" />
                      </div>
                      <div class="ms-2">
                        <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                        <p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
                      </div>
                    </div>
                  </td>
                  <td>Jan 18, 2021</td>
                  <td>+536.00</td>
                  <td>
                    <div class="badge rounded-pill alert-success w-100">Completed</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div><!--end row--> --}} 
  
    {{-- JS,Css riêng --}}
    <script src="{{asset('./assets/admin/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <link href="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    

    @endsection



