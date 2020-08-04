<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"></script>

  <link rel="icon" href="{{ asset('assets/images/logo-icon-v2.png') }}" type="image/x-icon">

  <title>Landing | Sigma</title>
</head>
<body>
  <div class="container">
    <div class="landing">
      <div class="mx-auto text-center pt-3 pb-3">
        <img src="{{ asset('assets/images/sigma-logo.png') }}" alt="logo">
      </div>
      <div class="mx-auto text-center title">
        <h1>Prueba de Desarrollo Sigma</h1> 
      </div>
      <div class="introduction mx-auto text-center mt-3 col-10">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium odit voluptatum perspiciatis dolorum alias labore modi tempora vel qui, illum, animi ducimus libero error rem numquam ipsa! Inventore unde ullam, eaque fugiat nemo aliquam ex laborum autem cum hic expedita, recusandae rem alias molestias esse eos corporis sapiente laudantium quis! </p>
      </div>
      <div class="row">
        <div class="col pl-5 ml-5">
          <img src="{{ asset('assets/images/sigma-image.png') }}" alt="sigma-image" class="img-fluid">
        </div>
        <div class="col pr-5 mr-5">
          <form id="contact-form" method="POST" action="/contacts/add">
            <div class="form-group section-form-right">
              <label for="state">Departamento*</label>
              <select name="state" id="states" class="form-control @error('states') is-invalid @enderror" required>
                <option value="">-- Seleccione --</option>
                @foreach($states as $state)
                  <option value="{{$state}}">{{$state}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="cities">Ciudad*</label>
              <select name="city" id="cities" class="form-control @error('cities') is-invalid @enderror" required>
                <option selected value="">-- Seleccione --</option>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Nombre*</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Pepito de Jesus" maxlength="255" required>
            </div>
            <div class="form-group">
              <label for="email">Correo*</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="pepitodejesus@gmail.com" required>
            </div>
            <div class="col text-center">
              <button type="submit" class="btn btn-accent">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal" tabindex="-1" id="modal-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gracias!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="success">Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>