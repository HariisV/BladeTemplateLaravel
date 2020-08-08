 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index3.html" class="brand-link">
  <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
<div class="sidebar">
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <li class="nav-item has-treeview menu-open">
  <a href="{{route('home')}}" class="nav-link active">
      <i class="nav-icon fas fa-home"></i>
      <p>
        Dashboard
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('table')}}" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Data Table
        <span class="right badge badge-danger">New</span>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{route('pertanyaan.index')}}" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
          Daftar Pertanyaan
        </p>
    </a>
  </li>
<small>
  <li class="nav-item ml-4">
    <a href="{{route('pertanyaan.create')}}" class="nav-link">
        <i class="nav-icon fas fa-plus"></i>
        <p>
           Tambah Pertanyaan
        </p>
    </a>
  </li>
</small>

</ul>
</nav>
</div>
</aside>