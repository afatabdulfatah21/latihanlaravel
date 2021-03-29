<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fab fa-youtube"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PewsNews</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Master
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-list"></i>
        <span>Category</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category:</h6>
            <a class="collapse-item" href="{{ route('createCategory') }}">Add Category</a>
            <a class="collapse-item" href="{{ route('indexCategory') }}">List Category</a>
            
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-tag"></i>
        <span>Tags</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tags:</h6>
            <a class="collapse-item" href="{{ route('createTag') }}">Add Tags</a>
            <a class="collapse-item" href="{{ route('indexTag') }}">List Tags</a>
            
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-pen-square"></i>
        <span>Post</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Post:</h6>
            <a class="collapse-item" href="{{ route('createPost') }}">Add Post</a>
            <a class="collapse-item" href="{{ route('indexPost') }}">List Post</a>
            <a class="collapse-item" href="{{ route('trashedPost') }}">List Trashed Post</a>
            
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFourth"
        aria-expanded="true" aria-controls="collapseFourth">
        <i class="fas fa-users"></i>
        <span>User</span>
    </a>
    <div id="collapseFourth" class="collapse" aria-labelledby="headingFourth" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User:</h6>
            <a class="collapse-item" href="{{ route('createUser') }}">Add User</a>
            <a class="collapse-item" href="{{ route('indexUser') }}">List User</a>
            
        </div>
    </div>
</li>





<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

