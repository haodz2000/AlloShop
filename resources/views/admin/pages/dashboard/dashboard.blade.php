
@extends('admin.index')  
@section('title','Dashboard')

@section('content')

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
      <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Orders</p>
                <h4 class="mb-0">8245</h4>
              </div>
              <div class="ms-auto fs-2 text-primary">
                <i class="bi bi-cart-check"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0"><span class="text-success">+2.5 <i class="bi bi-arrow-up"></i></span> Compared to last month</small>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Total Sales</p>
                <h4 class="mb-0">$4,562</h4>
              </div>
              <div class="ms-auto fs-2 text-success">
                <i class="bi bi-piggy-bank"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0"><span class="text-success">+2.5 <i class="bi bi-arrow-up"></i></span> Compared to last month</small>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Purchase</p>
                <h4 class="mb-0">$9,482</h4>
              </div>
              <div class="ms-auto fs-2 text-pink">
                <i class="bi bi-bag-check"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0"><span class="text-success">+2.5 <i class="bi bi-arrow-up"></i></span> Compared to last month</small>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1">Return</p>
                <h4 class="mb-0">146</h4>
              </div>
              <div class="ms-auto fs-2 text-orange">
                <i class="bi bi-recycle"></i>
              </div>
            </div>
            <div class="border-top my-2"></div>
            <small class="mb-0"><span class="text-danger">+2.5 <i class="bi bi-arrow-up"></i></span> Compared to last month</small>
          </div>
        </div>
       </div>
    </div><!--end row-->


    <div class="row">
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
    </div><!--end row-->
  
    {{-- JS,Css riêng --}}
    <script src="{{asset('./assets/admin/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <link href="{{asset('./assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    

    @endsection



