<x-nav-link>
    
</x-nav-link>


<form action="{{route('boxes.update', $boxe->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom" value={{$boxe->name}}>
      </div>
    <div class="form-group">
      <label for="Ville">Ville</label>
      <input type="text" class="form-control" name="city" placeholder="Entrer la Ville" value={{$boxe->city}}>
    </div>
    <div class="form-group">
      <label for="Adresse">Adresse</label>
      <input type="text" class="form-control" name="address" placeholder="Entrer une adresse" value={{$boxe->address}}>
    </div>
    <div class="form-group">
      <label for="Code Postal">Code Postal</label>
      <input type="text" class="form-control" name="postal_code" placeholder="Entrer un code postal" value={{$boxe->postal_code}}>
    </div>
    <div class="form-group">
      <label for="Pays">Pays</label>
      <input type="text" class="form-control" name="country" placeholder="Entrer le pays" value={{$boxe->country}}>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>