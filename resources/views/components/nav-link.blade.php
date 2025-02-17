@props(['active'])


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="canonical" href="https://icons.getbootstrap.com/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css"> <!-- Style moderne -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('boxes.index')}}">Boxes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('locataires.index')}}">Locataires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('templatecontrats.index')}}">Template Contrats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contrats.index')}}">Contrats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bills.index')}}">Factures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tax.index')}}">Impots</a>
          </li>
        </ul>
    
      </div>
    </div>
  </nav>

  <body class="bg-light">
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script src="https://kit.fontawesome.com/bc49ec5b07.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>