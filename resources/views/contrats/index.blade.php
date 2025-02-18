<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
      <div class="d-flex justify-content-between mt-3">
        <a href="{{route('contrats.create')}}" class="btn btn-success">Créer un contrat</a>
      </div>
      <table class="table">
          <thead>
            <tr>
              <th scope="row" class="text-center">N°</th>
              <th scope="col" class="text-center">Nom du contrat</th>
              <th scope="col" class="text-center">Locataire</th>
              <th scope="col" class="text-center">Boxe</th>
              <th scope="row" class="text-center">Options</th>
            
              
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
                  <td class="text-center d-flex justify-content-center gap-3 align-items-center">
                    <form action="{{route('contrats.destroy', $contrat->id)}}" class="d-flex align-items-center m-0" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button>
                    </form>
                    <a href="{{route('contrats.show', $contrat->id)}}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                    <a href="{{route('contrats.edit', $contrat->id)}}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                    <a class="btn btn-secondary" href="{{route('contrats.export.pdf', $contrat->id)}}">Export</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>