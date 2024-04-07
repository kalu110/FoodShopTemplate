<nav class="navbar navbar-expand-lg navbar-dark bg-dark navMain">
 <a class="navbar-brand" href="#">Navbar</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse justify-content-center" id="navbarSupportedContent">

    <ul class="navbar-nav px-5">
      <li class="nav-item active">
        <a class="nav-link" href="{{asset('/')}}">Pocetna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('/shop')}}">Meni</a>
      </li>
    </ul>

    <ul class="navbar-nav text-center">
     <input onkeyup="chechkifInputEmptyNav(this)" onblur="this.placeholder = 'Pretrazi'" onfocus="this.placeholder = ''" class="form-control serachInputNav" placeholder="Pretrazi" type="search" />
     <div id="idSearchInputButton"><i class="fa fa-search buttonSearchNav"></i></div>
    </ul>
<i class=""></i>
    <ul class="navbar-nav mr-auto px-5" >
 <li class="nav-item" style="width: 100%;">
        <a class="nav-link" href=""><i class="fa fa-shop"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('/login')}}"><i class="fa fa-user"></i></a>
      </li>
    </ul>
      <ul class="navbar-nav mr-auto">
      </ul>
  </div>
</nav>
