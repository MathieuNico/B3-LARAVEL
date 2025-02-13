<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
      <table class="table table-hover- table-bordered mt-3">
          <thead>
            <tr>
              <th scope="row" class="text-center">N°</th>
              <th scope="col" class="text-center">Nom</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($contrats as $contrat)
              @csrf
              <tr>
                  <th scope="row" class="text-center">{{$contrat->id}}</th>
                  <td class="text-center">{{$contrat->name}}</td>
                  <form action="{{route('contrats.destroy', $contrat->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                  </form>
                  <td class="text-center"><a href="{{route('contrats.edit', $contrat->id)}}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>