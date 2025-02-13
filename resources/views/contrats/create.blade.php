<x-nav-link>
    
</x-nav-link>

<div class="container mt-4">
<div class="col-6">
    <form action="{{route('contrats.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
              <input type="text" class="form-control" name="name" placeholder="Entrer un nom de contrat">
            </div>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <div class="input-group mb-2">
              <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
              <select class="form-select" name="locataire_id">
                <option disabled>Choose...</option>
                @foreach($locataires as $locataire)
                    <option value="{{ $locataire->id }}" >
                        {{ $locataire->lastname }}
                    </option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="mb-3">
          <label for="Prenom" class="form-label">Prénom</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
            <select class="form-select" name="locataire_id">
              <option disabled>Choose...</option>
              @foreach($locataires as $locataire)
                  <option value="{{ $locataire->id }}" >
                      {{ $locataire->firstname }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <div class="input-group mb-2">
            <div class="input-group-text">@</div>
            <select class="form-select" name="locataire_id">
              <option disabled>Choose...</option>
              @foreach($locataires as $locataire)
                  <option value="{{ $locataire->id }}" >
                      {{ $locataire->mail }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="mb-3">
            <label for="timestamp" class="form-label">Date de début de location : </label>
            <div class="input-group">
                <input type="text" id="timestamp" name="start_date" class="form-control" required>
                <span class="input-group-text"><i class="bi bi-calendar-event"></i></span> <!-- Icône calendrier -->
            </div>
        </div>
        <div class="mb-3">
          <label for="timestamp" class="form-label">Date de fin de location : </label>
          <div class="input-group">
              <input type="text" id="timestamp" name="end_date" class="form-control" required>
              <span class="input-group-text"><i class="bi bi-calendar-event"></i></span> <!-- Icône calendrier -->
          </div>
        </div>
      
        <div class="mb-3">
          <label for="Adresse" class="form-label">Boxe</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
            <select class="form-select" name="boxe_id">
              <option disabled>Choose...</option>
              @foreach($boxes as $boxe)
                  <option value="{{ $boxe->id }}" >
                      {{ $boxe->name }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>



        <div class="mb-3">
          <label for="Adresse" class="form-label">Modèle de contrats</label>
          <div class="input-group mb-2">
            <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
            <select class="form-select" name="templatecontrat_id">
              <option disabled>Choose...</option>
              @foreach($templatecontrats as $templatecontrat)
                  <option value="{{ $templatecontrat->id }}" >
                      {{ $templatecontrat->name }}
                  </option>
              @endforeach
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>

<script>
  flatpickr("#timestamp", {
      enableTime: true, // Active l'heure
      dateFormat: "Y-m-d H:i:S", // Format SQL
      time_24hr: true, // Format 24h
      theme: "material_blue", // Thème Flatpickr
  });
</script>