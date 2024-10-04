<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
          <h1>Liste des Boxes</h1>
          <a href="{{route('locataires.create')}}" class="btn btn-success">Ajouter un locataire</a>
        </div>
     
    
    
    
      <table class="table table-hover- table-bordered">
          <thead>
            <tr>
              <th scope="col" class="text-center">Nom</th>
              <th scope="col" class="text-center">Prénom</th>
              <th scope="col" class="text-center">Mail</th>
              <th scope="col" class="text-center">N° Téléphone</th>
              <th scope="col" class="text-center">Adresse postale</th>
              <th scope="col" class="text-center">Ville</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($locataires as $locataire)
              @csrf
              <tr>
                  <td class="text-center">{{$locataire->lastname}}</td>
                  <td class="text-center">{{$locataire->firstname}}</td>
                  <td class="text-center">{{$locataire->mail}}</td>
                  <td class="text-center">{{$locataire->phone}}</td>
                  <td class="text-center">{{$locataire->address}}</td>
                  <td class="text-center">{{$locataire->city}}</td>
                  {{-- <form action="{{route('boxes.destroy', $box->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                  </form>
                  <td class="text-center"><a href="{{route('boxes.edit', $box->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td> --}}
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>