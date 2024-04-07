<div class="row mt-5 CategoryRowTable"  style="min-height: 300px; margin-bottom: 100px;">
        <div class="col">
          <div class="card shadow" style="height: 80%; " >
            <div class="card-header  text-center" >
              <h2  class="mb-3">Kategorije</h2>
              <input type="text" onkeyup="searchCategoryInput(this)" placeholder="Pretraga" id="kategorijeTableSearch">
            </div>
            <div class="table-responsive"  style="min-height: 100%;">
              <table class="table align-items-center table-flush" >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Naziv Kategorije</th>
                    <th scope="col">Opis Kategorije</th>
                    <th scope="col">Broj Proizvoda</th>
                    <th scope="col">Procenat Poručivanja</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="ispisCategoryJS">
                  @foreach($category as $i)
                  <form action="{{asset('/editCategory/'.$i->id)}}" enctype="multipart/form-data" method="POST" id="editCategoryForm{{$i->id}}">
                        @csrf
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-5">
                          <img alt="Image placeholder" src="{{asset('/storage/image/'.$i->imageCategory)}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{$i->nameCategory}}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <span class="tableinputfontOpaciy">
                    {{$i->descriptionCategory}}
                  </span>
                    </td>
                    <td>
                        @php
                        $suma = 0;
                       foreach($product as $p){
                       if($p->idCategory == $i->id){
                       $suma++;
                       }
                       }
                         @endphp 
                        
                     
                         <span id="spanBRCategoryPR">{{$suma}}</span>
                    </td>
                   
                    <td>
                      <div style="color:rgba(0,0,0,0.4);" class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="text-right" id='tdOption{{$i->id}}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editCategory(this,{{$i->id}})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="{{asset('/deleteCategory/'.$i->id)}}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
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