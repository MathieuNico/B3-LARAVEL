<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
      <table class="table table-hover- table-bordered mt-3">
          <thead>
            <tr>
              <th scope="row" class="text-center">N°</th>
              <th scope="col" class="text-center">Nom</th>
              <th scope="row" class="text-center">Supprimer</th>
              <th scope="row" class="text-center">Modifier</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($template_contrats as $template_contrats)
              @csrf
              <tr>
                  <th scope="row" class="text-center">{{$template_contrats->id}}</th>
                  <td class="text-center">{{$template_contrats->name}}</td>
                  <form action="{{route('templatecontrats.destroy', $template_contrats->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                  </form>
                  <td class="text-center"><a href="{{route('templatecontrats.edit', $template_contrats->id)}}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>