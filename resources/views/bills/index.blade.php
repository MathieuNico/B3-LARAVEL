<x-nav-link>
</x-nav-link>

<div class="container">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mt-3">
            <a href="{{route('bills.create')}}" class="btn btn-success">Créer une facture</a>
          </div>
        <table class="table table-hover- table-bordered mt-3">
            <thead>
            <tr>
                <th scope="row" class="text-center">N°</th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Supprimer</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($bills as $bill)  
                @csrf
                <tr>
                    <th scope="row" class="text-center">{{$bill->id}}</th>
                    <td class="text-center">{{$bill->name}}</td>
                    <form action="{{route('contrats.destroy', $bill->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td class="text-center"><button type="submit" class="btn btn-danger"><span class="bi-trash"></span></button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
