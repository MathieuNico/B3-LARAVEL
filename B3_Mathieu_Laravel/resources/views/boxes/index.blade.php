<x-nav-link>
    
</x-nav-link>

<div class="container">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
          <h1>Liste des Boxes</h1>
          <a href="{{route('boxes.create')}}" class="btn btn-success">Créer une boxe</a>
        </div>
     
    
    
    
      <table class="table table-hover- table-bordered">
          <thead>
            <tr>
              <th scope="col" class="text-center">Nom</th>
              <th scope="col" class="text-center">Ville</th>
              <th scope="col" class="text-center">Adresse</th>
              <th scope="col" class="text-center">Code Postal</th>
              <th scope="col" class="text-center">Pays</th>
              <th scope="col" class="text-center">Supprimer</th>
              <th scope="col" class="text-center">Modifier</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($boxes as $box)
              @csrf
              <tr>
                  <td class="text-center">{{$box->name}}</td>
                  <td class="text-center">{{$box->city}}</td>
                  <td class="text-center">{{$box->address}}</td>
                  <td class="text-center">{{$box->postal_code}}</td>
                  <td class="text-center">{{$box->country}}</td>
                  <form action="{{route('boxes.destroy', $box->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                  </form>
                  <td class="text-center"><a href="{{route('boxes.edit', $box->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>

