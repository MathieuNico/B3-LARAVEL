<x-nav-link>
</x-nav-link>


    <form action="{{route('locataires.update', $locataires->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="lastname" placeholder="Entrer un nom" value={{$locataires->lastname}}>
          </div>
        <div class="form-group">
          <label for="Prénom">Prénom</label>
          <input type="text" class="form-control" name="firstname" placeholder="Entrer un prénom" value={{$locataires->firstname}}>
        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="text" class="form-control" name="mail" placeholder="Entrer une adresse mail" value={{$locataires->mail}}>
        </div>
        <div class="form-group">
          <label for="N° de téléphone">N° de téléphone</label>
          <input type="text" class="form-control" name="phone" placeholder="Entrer un N° de téléphone" value={{$locataires->phone}}>
        </div>
        <div class="form-group">
          <label for="Adresse">Adresse</label>
          <input type="text" class="form-control" name="address" placeholder="Entrer l'adresse" value={{$locataires->address}}>
        </div>
        <div class="form-group">
            <label for="Ville">Ville</label>
            <input type="text" class="form-control" name="city" placeholder="Entrer la ville" value={{$locataires->city}}>
        </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</body>