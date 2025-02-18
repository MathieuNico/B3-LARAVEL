<x-nav-link>
</x-nav-link>

<div class="container">
    <div class="col-md-12">
        <table class="table table-hover- table-bordered mt-3">
            <thead>
            <tr>
                <th scope="row" class="text-center">N°</th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Montant</th>
              
                <th scope="col" class="text-center">Supprimer</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($bills as $bill)  
                @csrf
                <tr>
                    <th scope="row" class="text-center">{{$bill->id}}</th>
                    <td class="text-center">{{$bill->name}}</td>
                    <td class="text-center">{{$bill->paiement_montant}}</td>
                    <form action="{{route('bills.destroy', $bill->id)}}" method="POST">
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


<script>
    flatpickr("#timestamp", {
        enableTime: true,
        dateFormat: "Y-m-d", 
        time_24hr: true, 
        theme: "material_blue", 
    });
  </script>
