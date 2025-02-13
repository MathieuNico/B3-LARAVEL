<x-nav-link>
</x-nav-link>

<div class="container mt-4">
    <form action="{{route('locataires.update', $locataires->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-regular fa-address-card"></i></div>
              <input type="text" class="form-control" name="lastname" placeholder="Entrer un nom" value={{$locataires->lastname}}>
            </div>
          </div>
        <div class="mb-3">
          <label for="Prénom" class="form-label">Prénom</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-regular fa-address-card"></i></div>
            <input type="text" class="form-control" name="firstname" placeholder="Entrer un prénom" value={{$locataires->firstname}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <div class="input-group mb-2">
            <div class="input-group-text">@</div>
            <input type="text" class="form-control" name="mail" placeholder="Entrer une adresse mail" value={{$locataires->mail}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="N° de téléphone" class="form-label">N° de téléphone</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
            <input type="text" class="form-control" name="phone" placeholder="Entrer un N° de téléphone" value={{$locataires->phone}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="Adresse" class="form-label">Adresse</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
            <input type="text" class="form-control" name="address" placeholder="Entrer l'adresse" value={{$locataires->address}}>
          </div>
        </div>
        <div class="mb-3">
            <label for="Ville" class="form-label">Ville</label>
            <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-city"></i></div>
              <input type="text" class="form-control" name="city" placeholder="Entrer la ville" value={{$locataires->city}}>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>

</div>
</body>