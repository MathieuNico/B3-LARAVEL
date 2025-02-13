<x-nav-link>
    
</x-nav-link>

<div class="container mt-4">

  <form action="{{route('locataires.store')}}" method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
          <label for="Nom" class="form-label">Nom</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
            <input type="text" class="form-control" name="lastname" placeholder="Entrer un nom">
          </div>
        </div>
      <div class="mb-3">
        <label for="Prenom" class="form-label">Prénom</label>
        <div class="input-group mb-2">
          <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
          <input type="text" class="form-control" name="firstname" placeholder="Entrer un prénom">
        </div>
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <div class="input-group mb-2">
          <div class="input-group-text">@</div>
          <input type="text" class="form-control" name="mail" placeholder="Entrer un Email">
        </div>
      </div>
      <div class="mb-3">
        <label for="N° de téléphone" class="form-label">N° de téléphone</label>
        <div class="input-group mb-2">
          <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
          <input type="text" class="form-control" name="phone" placeholder="Entrer un N° de téléphone">
        </div>
      </div>
      <div class="mb-3">
        <label for="Adresse" class="form-label">Adresse</label>
        <div class="input-group mb-2">
          <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
          <input type="text" class="form-control" name="address" placeholder="Entrer l'adresse du locataire">
        </div>
      </div>
      <div class="mb-3">
          <label for="Ville" class="form-label">Ville</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-city"></i></div>
            <input type="text" class="form-control" name="city" placeholder="Entrer la ville">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>