<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>Modifier un Modèle de Contrat</h2>

    <!-- Formulaire pour envoyer le modèle -->
    <form id="contract-form" action="{{ route('templatecontrats.update', $template_contrats->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nom du modèle :</label>
        <input type="text" name="name" required value="{{ $template_contrats->name }}">

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

    var savedContent = {!! json_encode($template_contrats->content) !!};
    
    if (savedContent) {
        try {
            quill.setContents(JSON.parse(savedContent)); // Convertit en objet JS
        } catch (e) {
            console.error("Erreur de parsing du JSON:", e);
        }
    }

    document.getElementById('contract-form').addEventListener('submit', function () {
        // Récupère le contenu JSON de Quill
        var content = JSON.stringify(quill.getContents());
        
        // Ajoute le contenu au champ caché avant d'envoyer le formulaire
        document.getElementById('content-input').value = content;
    });
</script>
