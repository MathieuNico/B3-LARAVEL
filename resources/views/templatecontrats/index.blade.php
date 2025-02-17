<x-nav-link>
</x-nav-link>


<div class="container">
    <div class="col-md-12">
      <div class="d-flex justify-content-between mt-3">
        <a href="{{route('templatecontrats.create')}}" class="btn btn-success">Créer un modèle de contrat</a>
      </div>
      <table class="table ">
          <thead>
            <tr>
              <th scope="row" class="text-center">N°</th>
              <th scope="col" class="text-center">Nom</th>
              <th scope="row" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($template_contrats as $template_contrats)
              @csrf
              <tr>
                  <th scope="row" class="text-center">{{$template_contrats->id}}</th>
                  <td class="text-center">
                    {{$template_contrats->name}}
                  </td>
                  <td class="text-center">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                      <a href="{{route('templatecontrats.edit', $template_contrats->id)}}"class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <form action="{{route('templatecontrats.destroy', $template_contrats->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                          <i class="bi-trash"></i>
                        </button>
                      </form>
                      <a href="{{route('templatecontrats.show', $template_contrats->id)}}" class="btn btn-info">
                        <i class="bi bi-eye"></i>
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>