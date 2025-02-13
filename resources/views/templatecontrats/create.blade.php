<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>Créer un Modèle de Contrat</h2>

    <!-- Formulaire pour envoyer le modèle -->
    <form id="contract-form" action="{{ route('templatecontrats.store') }}" method="POST">
        @csrf
        <label for="name">Nom du modèle :</label>
        <input type="text" name="name" required>

        <div id="editor-container"></div>

        <!-- Champ caché pour stocker le contenu JSON -->
        <input type="hidden" name="content" id="content-input">

        <button type="submit">Sauvegarder le Modèle</button>
    </form>
</div>

<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    document.getElementById('contract-form').addEventListener('submit', function () {
        // Récupère le contenu JSON de Quill
        var content = JSON.stringify(quill.getContents());
        
        // Ajoute le contenu au champ caché avant d'envoyer le formulaire
        document.getElementById('content-input').value = content;
    });
</script>
