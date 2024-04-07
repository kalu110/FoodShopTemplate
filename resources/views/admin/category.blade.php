
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Franš - Kategorije
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
       <h1 class="m-4">Kategorije!</h1>
       </div>
      
      <div class="col-12 shadow addCategoryCard text-center">
        @if(Session::has('message'))

<p class="alert {{ Session::get('alert-class', 'alert-info') }} text-left">{{ Session::get('message') }} <span><i onclick="closeAlert(this)" class="fa fa-close closeAlert"></i></span></p>

@endif
       <div class="col-10 offset-1 text-center">
<p class="d-inline-flex gap-1">

  <button class="btn AddCatBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <h2> Dodajte novu kategoriju <i class="fa-solid fa-angles-down"></i><hr class="mt-2 mb-2"></h2>
   
   
  </button>
</p>
<div class="collapse" id="collapseExample" style="transition: 1s;">
  <div class="card card-body">
    <div class="row dodavanjeNoveKategorije">
          <div class="col-12 col-lg-4 offset=lg-2">
        <div class="row cardCategoryIndex" >
          <div class="col-12" style="border:1px solid rgba(0,0,0,0.2)"  >
            <img id="outputIMGCategory"  src="" alt="Fotografija nije odabrana!">
          </div>

          <div class="col-12 text-left">
            <h5 id="duplicateNameCategory">Naziv Kategorije</h5>
          </div>
        </div>
      
      

          </div>
       <div class="col-12 col-lg-5 offset-lg-3   text-center ">
         <form action="/categoryAdd" method="POST" id="categoryAddForm" enctype="multipart/form-data">
           @csrf
           <input type="text" name="nameCategory" onkeyup="nazivKategorijeDuplicat(this)" placeholder="Naziv Kategorije" class="form-control">
           <input type="file" id="imgInp" name="imageCategory" placeholder="" class="form-control">
           <textarea name="descriptionCategory" rows="5" id="" placeholder="Opis Kategorije" class="form-control"></textarea>
           <div class="text-right">
           <button class="btn btn-primary">DODAJ</button>
         </div>
         </form>
       </div>
     </div>
  </div>
</div>

        
   </div>
   </div>
@include('layouts.adminCategoryTable')


@include('layouts.adminFooter')
  </div>

  <script>
   
      let category = <?php echo json_encode($category)?>;
       let product = <?php echo json_encode($product)?>;

      imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    outputIMGCategory.src = URL.createObjectURL(file)
  }
}
  </script>
</body>

</html>