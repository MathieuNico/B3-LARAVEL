<x-nav-link>
    
</x-nav-link>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="accordion " id="accordionExample">
                <div class="accordion-item shadow-lg mb-5 bg-white rounded ">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Mot clés
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table ">
                            <thead class="text-center">
                            <tr>
                                <th scope="row" class="text-center">Nom balise</th>
                                <th scope="row" class="text-center">Correspondance</th>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        !Nom!
                                    </td>
                                    <td>
                                        Nom de famille du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Prenom!
                                    </td>
                                    <td>
                                        Prenom du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Mail!
                                    </td>
                                    <td>
                                        Mail du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Telephone!
                                    </td>
                                    <td>
                                        Telephone du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Adresse!
                                    </td>
                                    <td>
                                        Adresse du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !CodePostal!
                                    </td>
                                    <td>
                                        Code Postal du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Ville!
                                    </td>
                                    <td>
                                        Ville du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !Pays!
                                    </td>
                                    <td>
                                        Pays du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !RIB!
                                    </td>
                                    <td>
                                        RIB du locataire
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxNom!
                                    </td>
                                    <td>
                                        Nom du box loué
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxPrix!
                                    </td>
                                    <td>
                                        Prix du box loué
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxAdresse!
                                    </td>
                                    <td>
                                        Adresse du box loué
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxCodePostal!
                                    </td>
                                    <td>
                                        Code Postale du box loué
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxVille!
                                    </td>
                                    <td>
                                        Ville du box loué
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        !BoxPays!
                                    </td>
                                    <td>
                                        Pays du box loué
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>


        </div>
    </div>
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
