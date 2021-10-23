@extends('admin.index')
@section('title','Category')

@section('content')
    {{--  Alert Block  --}}
    <div class="alert alert-success alert-dismissible d-none" id="alert-success-category" role="alert">
      <strong></strong>
    </div>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" id="category_index">
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
                   <form action="" id="add_category" class="row g-3">
                     <div class="col-12">
                       <label class="form-label">Name</label>
                       <input type="text" id="add_name_category" name="add_name_category edit_name_category" class="edit_name_category form-control" placeholder="Category name">
                       <span class="text-danger">Require, max 100 characters</span>
                     </div>
                      @error('category_name')
                        <div class='alert alert-danger' role='alert'>
                          {{ $message }}
                        </div>
                      @enderror
                      <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="add_description_category edit_description_category" id="add_description_category" class="edit_description_category form-control" rows="3" cols="3" placeholder="Product Description"></textarea>
                       <span class="text-danger">Require</span>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button onclick="addCategory()" type="button" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                      @error('description')
                        <div class='alert alert-danger' role='alert'>
                          {{ $message }}
                        </div>
                      @enderror
                   </form>
                 </div>
               </div>
             </div>
             <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive-md" >
                     <table class="table align-middle" id="data_category" >
                       <thead class="table-light">
                         <tr>
                           <th><input class="form-check-input" type="checkbox"></th>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                         @foreach($listCategory as $category)
                         <tr id="category_{{$category->category_id}}">
                           <td><input class="form-check-input" type="checkbox"></td>
                           <td>{{$category->category_id}}</td>
                           <td>{{$category->category_name}}</td>
                           <td>{{$category->description}}</td>
                           <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" data-id="{{$category->category_id}}" data-name="{{$category->category_name}}" data-description="{{$category->description}}" data-id="{{$category->category_id}}" class="editCategory text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" data-id="{{$category->category_id}}" class="deleteCategory text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                           </td>
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
                  </div>
                  <nav class="float-end mt-0" aria-label="Page navigation">
                    {{$listCategory->links()}}
                  </nav>
                </div>
              </div>
            </div>
           </div><!--end row-->
        </div>
      </div>


      
  {{-- AJAX --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset("./assets/admin/js/category-curd-ajax.js")}}"></script>
      
@endsection