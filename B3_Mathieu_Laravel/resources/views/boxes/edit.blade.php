<x-nav-link>
</x-nav-link>

<div class="container mt-4">
    <form action="{{route('boxes.update', $boxe->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <div class="input-group mb-2">
                <div class="input-group-text"><i class="fa-regular fa-address-card"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Entrer un nom" value={{$boxe->name}}>
            </div>
        </div>
        <div class="mb-3">
          <label for="Ville" class="form-label">Ville</label>
          <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-city"></i></div>
              <input type="text" class="form-control" name="city" placeholder="Entrer la Ville" value={{$boxe->city}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="Adresse" class="form-label">Adresse</label>
          <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
              <input type="text" class="form-control" name="address" placeholder="Entrer une adresse" value={{$boxe->address}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="Code Postal" class="form-label">Code Postal</label>
          <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-signs-post"></i></div>
              <input type="text" class="form-control" name="postal_code" placeholder="Entrer un code postal" value={{$boxe->postal_code}}>
          </div>
        </div>
        <div class="mb-3">
          <label for="Pays" class="form-label">Pays</label>
          <div class="input-group mb-2">
            <div class="input-group-text">
                <i class="fa-solid fa-earth-americas"></i>
            </div>
            <input type="text" class="form-control" name="country" placeholder="Entrer le pays" value={{$boxe->country}}>
          </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
