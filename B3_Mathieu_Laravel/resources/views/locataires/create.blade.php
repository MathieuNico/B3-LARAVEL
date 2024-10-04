<x-nav-link>
    
</x-nav-link>


<form action="{{route('locataires.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" name="lastname" placeholder="Entrer un nom">
      </div>
    <div class="form-group">
      <label for="Prenom">Prénom</label>
      <input type="text" class="form-control" name="firstname" placeholder="Entrer un prénom">
    </div>
    <div class="form-group">
      <label for="Email">Email</label>
      <input type="text" class="form-control" name="mail" placeholder="Entrer un Email">
    </div>
    <div class="form-group">
      <label for="N° de téléphone">N° de téléphone</label>
      <input type="text" class="form-control" name="phone" placeholder="Entrer un N° de téléphone">
    </div>
    <div class="form-group">
      <label for="Adresse">Adresse</label>
      <input type="text" class="form-control" name="address" placeholder="Entrer l'adresse du locataire">
    </div>
    <div class="form-group">
        <label for="Ville">Ville</label>
        <input type="text" class="form-control" name="city" placeholder="Entrer la ville">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>