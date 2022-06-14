<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="logo text-center  ">
     <h1>Bunga Busana</h1>
    </div>
    <hr>
     <div class="position-sticky">
       <ul class="nav flex-column">
         <li class="nav-item">
           <a class="nav-link {{ Request::is('dashboard')? 'active':'' }}" aria-current="page" href="{{ url('dashboard') }}">
             <span data-feather="home" class="align-text-bottom"></span>
             Dashboard
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ Request::is('categories')? 'active':'' }}" aria-current="page" href="{{ url('categories') }}">
             <span data-feather="file" class="align-text-bottom"></span>
             Category
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ Request::is('produk')? 'active':'' }}" aria-current="page" href="{{ url('produk') }}">
             <span data-feather="file-plus" class="align-text-bottom"></span>
             product
           </a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link {{ Request::is('add-produk')? 'active':'' }}" aria-current="page" href="{{ url('add-produk') }}">
             <span data-feather="file-plus" class="align-text-bottom"></span>
             Add product
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ Request::is('orders')? 'active':'' }}" aria-current="page" href="{{ url('orders') }}">
             <span data-feather="file-plus" class="align-text-bottom"></span>
             Order list
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ Request::is('user-list')? 'active':'' }}" aria-current="page" href="{{ url('user-list') }}">
             <span data-feather="file-plus" class="align-text-bottom"></span>
             User
           </a>
         </li>
        
        
        
         
       </ul> 
     </div>
   </nav>