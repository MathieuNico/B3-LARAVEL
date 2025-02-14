<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
      <div class="d-flex justify-content-between mt-3">
        <a href="{{route('contrats.create')}}" class="btn btn-success">Créer un contrat</a>
      </div>
      <table class="table table-hover- table-bordered mt-3">
          <thead>
            <tr>
              <th scope="row" class="text-center">N°</th>
              <th scope="col" class="text-center">Nom du contrat</th>
              <th scope="col" class="text-center">Locataire</th>
              <th scope="col" class="text-center">Boxe</th>
              <th scope="row" class="text-center">Supprimer</th>
              <th scope="row" class="text-center">Modifier</th>
              <th scope="row" class="text-center">Voir</th>
              
            </tr>
          </thead>
          <tbody>
              @foreach ($contrats as $contrat)
              @csrf
              <tr>
                  <th scope="row" class="text-center">{{$contrat->id}}</th>
                  <td class="text-center">{{$contrat->name}}</td>
                  <td class="text-center">{{ $contrat->locataire->lastname}}, {{$contrat->locataire->firstname}}</td>
                  <td class="text-center">{{$contrat->boxe->name}}</td>
                  <form action="{{route('contrats.destroy', $contrat->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                  </form>
                  <td class="text-center"><a href="{{route('contrats.edit', $contrat->id)}}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                  <td class="text-center"><a href="{{route('contrats.show', $contrat->id)}}" class="btn btn-info"><i class="bi bi-eye"></i></a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>