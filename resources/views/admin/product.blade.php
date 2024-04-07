
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Franš - Proizvodi
  </title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
 
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/argon-dashboard.min.css','resources/css/admincss.css'])

</head>

<body class="">
  @include('layouts.adminNavAside')

  <div class="main-content">
   @include('layouts.adminNavMain')
    
   <div class="container-fluid mt-5">
    <div class="col-12 m-0 headingBackAdmin">
       <h1 class="m-4">Proizvodi</h1>
       </div>

       <div class="card shadow addCategoryCard ">
      @if(Session::has('message'))

<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }} <span><i onclick="closeAlert(this)" class="fa fa-close closeAlert"></i></span></p>

@endif

    <div class="col-12  text-center">
<p class="d-inline-flex gap-1">

  <button class="btn AddCatBtn" onclick="changeIconFontUp()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <h2> Dodajte novi proizvod <i id="down-up-arrow" class="fa-solid fa-angles-down"></i><hr class="mt-2 mb-2"></h2>
  </button>
</p>
<div class="collapse" id="collapseExample" style="transition: 1s;">
  <div class="card card-body">
    <div class="row">
      <div class="col-12 col-lg-5">
        

        <div class="row cardCategoryIndex text-center" >

            <div class="row text-left" style="width:100%;">
          <div class="col-5 p-0" style="border:1px solid rgba(0,0,0,0.2)">
          <img id="outputIMGCategory"  src="" alt="Fotografija nije odabrana!">
           </div>
          <div class="col-7">
             <h4 id="duplicateNameCategory">Naziv</h4>
            <p id="opisProizvodaAddChange">Opis</p>
          </div>
          <div class="col-10 mt-3"><span id="cenaKarticaShopSoutpute" class="cenaKarticaShopS" >00.00 KM</span></div>
          <div class="col-2 mt-3 text-center">
            <i class="fa fa-circle-plus fa-2xl btnAddProducttoCart"></i>
          </div>
        </div>

        </div>
      </div>
      <div class="col-12 col-lg-7">
        
 <form action="/productAdd" id="formaAddProduct" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="col-12">
      <div class="row">
        <div class="col-lg-6">
          <input type="text" placeholder="Naziv proizvoda" onkeyup="nazivKategorijeDuplicat(this)" name="nameProduct" class="form-control">
        </div>
         <div class="col-lg-6">
          <select name="categoryID" aria-label="Default select example" class="form-control" id="">
            <option value="x" class="form-control" disabled selected>Izaberite kategoriju</option>
            @foreach($category as $a)
            <option value="{{$a->id}}" class="form-control">{{$a->nameCategory}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-lg-6">
          <div><input type="number" name="priceProduct" id="priceInp" onkeyup="cenaProductDuplicat(this)" placeholder="00.00 KM" class="form-control"></div>
 
          
          <div><input  type="file" name="imageProduct" id="imgInp"  placeholder=""  class="form-control"></div>

        </div>
        <div class="col-lg-6">
          <textarea type="text" rows="4" name="descriptionProduct" id="dscInp" onkeyup="descProductDuplicat(this)" placeholder="Opis proizvoda" class="form-control"></textarea>
        </div>
          <div class="col-lg-2 ml-auto mt-2">
         <button class="btn btn-primary">DODAJ</button>
        </div>
      </div>      
    </div>
  </form>

      </div>


    </div>
    
</div>
</div>
</div>
</div>

@include('layouts.adminProductTable')



@include('layouts.adminFooter')
  </div>

  <script>


      let category = <?php echo json_encode($category)?>;
      let product =  <?php echo json_encode($product)?>;


      imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    outputIMGCategory.src = URL.createObjectURL(file)
  }
}
  </script>
</body>

</html>