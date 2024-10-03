<x-nav-link>
    
</x-nav-link>


<form action="{{route('boxes.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom">
      </div>
    <div class="form-group">
      <label for="Ville">Ville</label>
      <input type="text" class="form-control" name="city" placeholder="Entrer la Ville">
    </div>
    <div class="form-group">
      <label for="Adresse">Adresse</label>
      <input type="text" class="form-control" name="address" placeholder="Entrer une adresse">
    </div>
    <div class="form-group">
      <label for="Code Postal">Code Postal</label>
      <input type="text" class="form-control" name="postal_code" placeholder="Entrer un code postal">
    </div>
    <div class="form-group">
      <label for="Pays">Pays</label>
      <input type="text" class="form-control" name="country" placeholder="Entrer le pays">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>