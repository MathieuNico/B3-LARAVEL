<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>Modifier un Contrat</h2>

    <!-- Formulaire pour envoyer le modèle -->
    <form id="contract-form" action="{{ route('contrats.update', $contrats->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nom du contrat :</label>
        <input type="text" name="name" required value="{{ $contrats->name }}">

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

    var savedContent = {!! $contrats->content !!};

    
    
    try {
        if (typeof savedContent === "string") {
            savedContent = JSON.parse(savedContent); // Si c'est une string, la convertir en objet
        }
        
        if (savedContent && savedContent.ops) {
            quill.setContents(savedContent);
        }
    } catch (e) {
        console.error("Erreur de parsing du JSON:", e);
    }

    document.getElementById('contract-form').addEventListener('submit', function () {
        // Récupère le contenu JSON de Quill
        var content = JSON.stringify(quill.getContents());
        
        // Ajoute le contenu au champ caché avant d'envoyer le formulaire
        document.getElementById('content-input').value = content;
    });
</script>
