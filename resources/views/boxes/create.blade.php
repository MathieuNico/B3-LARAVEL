<x-nav-link>
    
</x-nav-link>

<div class="container mt-4">
  <form action="{{route('boxes.store')}}" method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="Nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom">
      </div>
      <div class="mb-3">
        <label for="Ville" class="form-label">Ville</label>
        <input type="text" class="form-control" name="city" placeholder="Entrer une Ville">
      </div>
      <div class="mb-3">
        <label for="Adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="address" placeholder="Entrer une adresse">
      </div>
      <div class="mb-3">
        <label for="Code Postal"class="form-label">Code Postal</label>
        <input type="text" class="form-control" name="postal_code" placeholder="Entrer un code postal">
      </div>
      <div class="mb-3">
        <label for="Pays" class="form-label">Pays</label>
        <input type="text" class="form-control" name="country" placeholder="Entrer le pays">
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Locataire du box</label>
        <select class="form-select" name="locataire_id">
          <option selected>Choose...</option>
          @foreach($locataires as $locataire){
            <option value="{{$locataire->id}}">{{$locataire->lastname}}, {{$locataire->firstname}}</option>
          }
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
  
    </form>
</div>
