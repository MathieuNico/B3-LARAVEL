<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>Nom du modèle : {{$template_contrats->name}}
    </h2>
    
    <div id="editor-container"></div>

</div>

<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        readOnly: true,
        modules: { toolbar: false }

    });

    var savedContent = {!! json_encode($template_contrats->content) !!};
    
    if (savedContent) {
        try {
            quill.setContents(JSON.parse(savedContent)); // Convertit en objet JS
        } catch (e) {
            console.error("Erreur de parsing du JSON:", e);
        }
    }

</script>
