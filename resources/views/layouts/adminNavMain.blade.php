 <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a style="cursor: pointer;" class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"><h2 style="color:white;">Admin Panel - Restoran Franš <hr class="m-0 mt-2"></h2>Korisnik ~ {{ Auth::user()->name }}</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->


        <div class="dropdown">
  <button class="btn dropdown-toggle" style="padding: 0;border-radius: 100px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <a href=""><img id="avatarAdminIcon" src="{{asset('/images/avatarIcon.png')}}" alt=""> </a>
  
  </button>
  <ul class="dropdown-menu" style="left:-100px;" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="{{asset('/profile')}}"> <i class="fas fa-user ml-1 mr-2"></i> Profil</a></li>
    <li><a class="dropdown-item" href="{{asset('/settings')}}"> <i class="fas fa-gear ml-1 mr-2"></i> Podešavanja</a></li>
    <li><a class="dropdown-item" href="{{asset('/logout')}}"> <i class="fa-solid fa-right-from-bracket ml-1 mr-2"></i>  Odjavi se</a></li>
  </ul>
</div>

      </div>
    </nav>