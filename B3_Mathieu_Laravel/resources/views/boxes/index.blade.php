<x-nav-link>
    
</x-nav-link>

<div class="container">
    <div class="col-md-6">
        <h1>Liste des Boxes</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Pays</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($boxes as $box)
                @csrf
                <tr>
                    <td>{{$box->name}}</td>
                    <td>{{$box->city}}</td>
                    <td>{{$box->address}}</td>
                    <td>{{$box->postal_code}}</td>
                    <td>{{$box->country}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
<a href="{{route('boxes.create')}}" class="btn btn-outline-success">Success</a>
