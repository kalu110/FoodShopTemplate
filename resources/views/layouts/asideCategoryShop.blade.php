<div class="AsideMenuShopCategory d-flex flex-column flex-shrink-0 p-3 bg-light " style="width: 100%;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-5">Restoran Franš <i class="fa-solid fa-clipboard" style="color: rgb(0, 102, 0);"></i>  </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

      @foreach($category as $c)
      @if($loop->iteration == 1)
       <li class="nav-item">
        <a id="clickWithLoad" onclick="changeCategory(this)" class="nav-link active" aria-current="page">
          {{$c->nameCategory}}
        </a>
      </li>
      @else
       <li class="nav-item">
        <a onclick="changeCategory(this)" class="nav-link" aria-current="page">
          {{$c->nameCategory}}
        </a>
      </li>
      @endif
 
      @endforeach
    </ul>
    <hr>
    
  </div>
