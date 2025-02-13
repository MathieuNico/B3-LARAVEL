<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>{{$contrat->name}}</h2>

    <!-- Formulaire pour envoyer le modèle -->
        <div id="editor-container"></div>

        <!-- Champ caché pour stocker le contenu JSON -->
        

</div>

<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        readOnly: true,
        modules: { toolbar: false }
    });

    var savedContent = {!! $contrat->content !!};

    
    
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


</script>
