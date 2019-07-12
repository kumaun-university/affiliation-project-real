<nav class="navbar navbar-light justify-content-center" >
  <a class="navbar-brand" href="#">
    <img src="{{asset('images/name.png')}}"  class="img-fluid" >      
  </a>
</nav>
<nav class="navbar navbar-expand navbar-dark static-top justify-content-between" style="background-color:#cb5452d9;">
<div>
        <a class="navbar-brand mr-1" href="{{ route('admin.dashboard') }}">Online Affiliation Portal</a>
  
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>
  
      </div>
      <div>
  
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0 ">
         
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Settings</a>
              
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>              
            </div>
          </li>
          
        </ul>
      </div>
      </nav>