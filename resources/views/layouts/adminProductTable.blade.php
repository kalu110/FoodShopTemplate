<div class="row mt-5 mb-5" style="min-height: 300px;">
        <div class="col">
          <div class="card shadow" style="height: 80%;">
            <div class="card-header border-0 text-center">
              <h2  class="mb-3">Proizvodi</h2>
              <input type="text" onkeyup="searchProductInput(this)" placeholder="Pretraga" id="kategorijeTableSearch">
            </div>
            <div class="table-responsive"  style="min-height: 100%">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th   scope="col">Naziv Proizvoda</th>
                    <th scope="col">Opis Proizvoda</th>
                    <th scope="col">Cena</th>
                       <th scope="col">Kategorija</th>
                    <th scope="col">Procenat Poručivanja</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="ispisProductJS">
                  @foreach($product as $i)
                  <form action="{{asset('editProduct/'.$i->id)}}" id="formEditProduct{{$i->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-4">
                          <img alt="Image placeholder" src="{{asset('/storage/image/'.$i->imageProduct)}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{$i->nameProduct}}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <span class="tableinputfontOpaciy">{{$i->descriptionProduct}}</span>
                    
                    </td>
                    <td>
                      <span id="spanBRCategoryPR" style="font-size: 15px;">{{$i->priceProduct}} KM</span>                      
                    </td>
                    <td>
                       <span class="tableinputfontOpaciy">
                      @foreach($category as $c)
                      @if($c->id == $i->idCategory)
                      {{$c->nameCategory}}
                      @endif
                      @endforeach
                      </span>
                    </td>
                   
                    <td >
                      <div class="d-flex align-items-center" style="color:rgba(0, 0, 0, 0.4); width:60%;">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td  class="text-right" id='tdOption{{$i->id}}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editProduct(this,{{$i->id}})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="{{asset('/deleteProduct/'.$i->id)}}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>
                  </form>
                  @endforeach
                 

                
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>