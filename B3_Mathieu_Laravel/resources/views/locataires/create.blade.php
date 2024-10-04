<x-nav-link>
    
</x-nav-link>

<div class="container mt-4">

  <form action="{{route('locataires.store')}}" method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
          <label for="Nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="lastname" placeholder="Entrer un nom">
        </div>
      <div class="mb-3">
        <label for="Prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="firstname" placeholder="Entrer un prénom">
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" class="form-control" name="mail" placeholder="Entrer un Email">
      </div>
      <div class="mb-3" class="form-label">
        <label for="N° de téléphone">N° de téléphone</label>
        <input type="text" class="form-control" name="phone" placeholder="Entrer un N° de téléphone">
      </div>
      <div class="mb-3" class="form-label">
        <label for="Adresse">Adresse</label>
        <input type="text" class="form-control" name="address" placeholder="Entrer l'adresse du locataire">
      </div>
      <div class="mb-3" class="form-label">
          <label for="Ville">Ville</label>
          <input type="text" class="form-control" name="city" placeholder="Entrer la ville">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>