<x-nav-link>
</x-nav-link>

<div class="container">
    <form action="{{route('bills.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
        <label for="Nom" class="form-label">Nom de la facture</label>
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom">
        </div>
        <div class="mb-3">
        <label for="Ville" class="form-label">Prix par mois</label>
        <input type="text" class="form-control" name="monthly_price" placeholder="Entrer un prix par mois">
        </div>
        <div class="col-auto my-1">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Contrat</label>
        <select class="form-select" name="contrat_id">
            <option selected>Choose...</option>
            @foreach($contrats as $contrat){
            <option value="{{$contrat->id}}">{{$contrat->name}}</option>
            }
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>
</div>