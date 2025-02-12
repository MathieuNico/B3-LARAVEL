<x-nav-link>
    
</x-nav-link>

<div class="container">
    <h2>Créer un Modèle de Contrat</h2>
    <div id="editor-container"></div>
    <button onclick="saveTemplate()">Sauvegarder le Modèle</button>

</div>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    function saveTemplate() {
        var content = quill.getContents(); // JSON format
        localStorage.setItem("contract_template", JSON.stringify(content)); // Stocke le JSON dans localStorage
        alert("Modèle de contrat enregistré !");
    }
</script>