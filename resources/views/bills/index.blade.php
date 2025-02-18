<x-nav-link>
</x-nav-link>

<div class="container">
    <div class="col-md-12">
        <div class="d-flex justify-content-between mt-3">
            <form action="{{route('bills.store')}}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">Génerer facture une facture</button>
            </form>
          </div>
        <table class="table table-hover- table-bordered mt-3">
            <thead>
            <tr>
                <th scope="row" class="text-center">N°</th>
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">Montant</th>
                <th scope="col" class="text-center">Date de paiement</th>
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
                    <form action="{{route('bills.update', $bill->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <td class="text-center d-flex">
                            <div class="input-group">
                                <input type="text" id="timestamp" name="start_date" class="form-control" required value="{{$bill->payment_date}}">
                                <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                            </div>
                            <button type="submit">Sauvegarder</button>
                        </td>
                    </form>
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
