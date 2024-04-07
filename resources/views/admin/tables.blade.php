
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Franš - Tabela
  </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/argon-dashboard.min.css','resources/css/admincss.css'])

</head>

<body class="">
    @include('layouts.adminNavAside')

  <div class="main-content">
       @include('layouts.adminNavMain')
       <div class="container-fluid mt-5">
<div class="col-12 m-0 headingBackAdmin">
       <h1 class="m-4">Tabele</h1>
       </div>
       @include('layouts.adminCategoryTable')

       @include('layouts.adminProductTable')
     </div>

@include('layouts.adminFooter') 
    </div>
  
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    let category = <?php echo json_encode($category)?>;
      let product =  <?php echo json_encode($product)?>;
    let mtnull =  document.querySelector('.CategoryRowTable');
    mtnull.classList.replace('mt-5','mt-0');

  </script>
</body>

</html>