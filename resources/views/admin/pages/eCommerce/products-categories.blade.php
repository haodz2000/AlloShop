@extends('admin.index')
@section('title', 'Categories')
@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">eCommerce</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
          <h6 class="mb-0">Add Product Category</h6>
        </div>
        <div class="card-body">
           <div class="row">
             <div class="col-12 col-lg-4 d-flex">
               <div class="card border shadow-none w-100">
                 <div class="card-body">
                   <form class="row g-3">
                     <div class="col-12">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" placeholder="Category name">
                     </div>
                     <div class="col-12">
                      <label class="form-label">Slug</label>
                      <input type="text" class="form-control" placeholder="Slug name">
                    </div>
                    <div class="col-12">
                      <label class="form-label">Parent</label>
                      <select class="form-select">
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>Sports</option>
                      </select> 
                    </div>
                    <div class="col-12">
                      <label class="form-label">Description</label>
                      <textarea class="form-control" rows="3" cols="3" placeholder="Product Description"></textarea>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                   </form>
                 </div>
               </div>
             </div>
             <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table align-middle">
                       <thead class="table-light">
                         <tr>
                           <th><input class="form-check-input" type="checkbox"></th>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Slug</th>
                           <th>Order</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td><input class="form-check-input" type="checkbox"></td>
                           <td>#85462</td>
                           <td>Fashion</td>
                           <td>Some lorem ipsum</td>
                           <td>/fashion</td>
                           <td>54</td>
                           <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                           </td>
                         </tr>
                         <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#63524</td>
                          <td>Jeans</td>
                          <td>Some lorem ipsum</td>
                          <td>/jeans</td>
                          <td>24</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#758426</td>
                          <td>Shoes</td>
                          <td>Some lorem ipsum</td>
                          <td>/shoes</td>
                          <td>26</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#98653</td>
                          <td>Electronics</td>
                          <td>Some lorem ipsum</td>
                          <td>/electronics</td>
                          <td>52</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#85426</td>
                          <td>Furniture</td>
                          <td>Some lorem ipsum</td>
                          <td>/furniture</td>
                          <td>14</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#36867</td>
                          <td>Mobiles</td>
                          <td>Some lorem ipsum</td>
                          <td>/mobiles</td>
                          <td>40</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#85697</td>
                          <td>Women</td>
                          <td>Some lorem ipsum</td>
                          <td>/women</td>
                          <td>75</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#36758</td>
                          <td>Kids Cloths</td>
                          <td>Some lorem ipsum</td>
                          <td>/sids</td>
                          <td>25</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#98620</td>
                          <td>Sports</td>
                          <td>Some lorem ipsum</td>
                          <td>/sports</td>
                          <td>10</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>#84253</td>
                          <td>Accessories</td>
                          <td>Some lorem ipsum</td>
                          <td>/accessories</td>
                          <td>12</td>
                          <td>
                           <div class="d-flex align-items-center gap-3 fs-6">
                             <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                             <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                             <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                           </div>
                          </td>
                        </tr>
                       </tbody>
                     </table>
                  </div>
                  <nav class="float-end mt-0" aria-label="Page navigation">
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
            </div>
           </div><!--end row-->
        </div>
      </div>

  
@endsection