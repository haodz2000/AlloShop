<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{asset('./assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Skodash</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu"  data-simplebar="true">
    <li class="menu-label">Dashboard</li>
    <li>
      <a href="/admin" class="">
        {{-- <div class="parent-icon"><i class="bi"></i>
        </div> --}}
        <div class="bi">Dashboard</div>
      </a>
      {{-- <ul>
        <li> <a href="index-2.html"><i class="bi bi-arrow-right-short"></i>Sales</a>
        </li>
        <li> <a href="index2.html"><i class="bi bi-arrow-right-short"></i>Analytics</a>
        </li>
        <li> <a href="index3.html"><i class="bi bi-arrow-right-short"></i>Project Management</a>
        </li>
        <li> <a href="index4.html"><i class="bi bi-arrow-right-short"></i>CMS Dashboard</a>
        </li>
      </ul> --}}
    </li>
    <li class="menu-label">Orders</li><li>
      <a href="{{route('orders')}}"><i class="bi"></i>Orders</a>
      {{-- <a href="#" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-award"></i>
        </div>
        <div class="menu-title">Orders</div>
      </a> --}}
      {{-- <ul>
        <li> <a href="{{route('orders')}}"><i class="bi bi-arrow-right-short"></i>Orders</a>
        </li>
        <li> <a href="{{route('order-details')}}"><i class="bi bi-arrow-right-short"></i>Order-details</a>
        </li>
      </ul> --}}
    </li>
    <li class="menu-label">Code-discount</li>
      <li>
        <a href="{{route('code')}}"><i class="bi"></i>Code-discount</a>
          {{-- <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="bi bi-award"></i>
              </div>
              <div class="menu-title">Code</div>
          </a> --}}
          {{-- <ul>
              <li> <a href="{{route('code')}}"><i class="bi bi-arrow-right-short"></i>Code-discount</a>
              </li>
              <li> <a href="{{route('order-details')}}"><i class="bi bi-arrow-right-short"></i>Order-details</a>
              </li>
          </ul> --}}
      </li>
    <li>
      <li class="menu-label">Banners</li>
      <li>
      <a href={{Route('banner.index')}}><i class="bi"></i>Banners List</a>
      </li>
      <li>
      <a href="{{Route('banner.create')}}"><i class="bi"></i>Add New Banner</a>
      </li>
      {{-- <a href="#" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-award"></i>
        </div>
        <div class="menu-title">Banners</div>
      </a> --}}
      {{-- <ul>
        <li> <a href={{Route('banner.index')}}><i class="bi bi-arrow-right-short"></i>Banners List</a>
        </li>
        <li> <a href="{{Route('banner.create')}}"><i class="bi bi-arrow-right-short"></i>Add New Banner</a>
        </li>
      </ul> --}}
    </li>
    <li>
      <li class="menu-label">Posts</li>
      <li>
        <a href="{{route('post.index')}}"><i class="bi"></i>Post List</a>
      </li>
      <li>
        <a href="{{route('post.create')}}"><i class="bi"></i>Add New Post</a>
      </li>
        {{-- <a href="{{route('post.index')}}" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-award"></i>
        </div>
        <div class="menu-title">Posts</div>
      </a> --}}
      {{-- <ul>
        <li> <a href="{{route('post.index')}}"><i class="bi bi-arrow-right-short"></i>Post List</a>
        </li>
        <li> <a href="{{route('post.create')}}"><i class="bi bi-arrow-right-short"></i>Add New Post</a>
        </li>
      </ul> --}}
    </li>
    <li>
      <li class="menu-label">Products</li>
      <li>
        <a href="{{route('products-list')}}"><i class="bi"></i>Products List</a>
      </li>
      {{-- <li>
        <a href="{{route('products-grid')}}"><i class="bi"></i>Products Grid</a>
      </li> --}}
      <li>
        <a href="{{route('add-new-product')}}"><i class="bi"></i>Add New Product</a>
      </li>
        {{-- <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-bag-check"></i>
        </div>
        <div class="menu-title">eCommerce</div>
      </a> --}}
      {{-- <ul> --}}
        {{-- <li> <a href="{{route('products-list')}}"><i class="bi bi-arrow-right-short"></i>Products List</a>
        </li>
        <li> <a href="{{route('products-grid')}}"><i class="bi bi-arrow-right-short"></i>Products Grid</a>
        </li>
        <li> <a href="{{route('category.index')}}"><i class="bi bi-arrow-right-short"></i>Categories</a>
        </li> --}}
        {{-- <li> <a href="{{route('orders')}}"><i class="bi bi-arrow-right-short"></i>Orders</a>
        </li>
        <li> <a href="{{route('orders-detail')}}"><i class="bi bi-arrow-right-short"></i>Order details</a>
        </li> --}}
        {{-- <li> <a href="{{route('add-new-product')}}"><i class="bi bi-arrow-right-short"></i>Add New Product</a>
        </li> --}}
        {{-- <li> <a href="{{route('update-product')}}"><i class="bi bi-arrow-right-short"></i>Update Product</a>
        </li> --}}
        {{-- <li> <a href="ecommerce-transactions.html"><i class="bi bi-arrow-right-short"></i>Transactions</a>
        </li> --}}
      {{-- </ul> --}}
    </li>
    <li>
      <li class="menu-label">Category</li>
      <li>
        <a href="{{route('category.index')}}"><i class="bit"></i>Categories</a>
      </li>
    </li>
    <li class="menu-label">Authentication</li>
    <li>
      <li> <a href="{{route('signin.index')}}" ><i class="bi"></i>Sign In</a>
      </li>
      <li> <a href="{{route('signup.index')}}" ><i class="bi"></i>Sign Up</a>
      </li>
      {{-- <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="bi bi-lock"></i>
        </div>
        <div class="menu-title">Authentication</div>
      </a> --}}
      {{-- <ul>
        <li> <a href="{{route('signin.index')}}" ><i class="bi bi-arrow-right-short"></i>Sign In</a>
        </li>
        <li> <a href="{{route('signup.index')}}" ><i class="bi bi-arrow-right-short"></i>Sign Up</a>
        </li>
        <li> <a href="authentication-forgot-password.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Forgot Password</a>
        </li>
        <li> <a href="authentication-reset-password.html" target="_blank"><i class="bi bi-arrow-right-short"></i>Reset Password</a>
        </li>
      </ul> --}}
    </li>

  </ul>
  <!--end navigation-->
</aside>