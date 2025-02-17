<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrat PDF</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; font-size: 20px; font-weight: bold; margin-bottom: 20px; }
        .content { border: 1px solid #ddd; padding: 10px; }
    </style>
</head>
<body>

    <div class="header">
        Contrat N° {{ $contrat->id }}
    </div>

    <div class="content">
        <p><strong>Locataire :</strong> {{ $contrat->locataire->firstname }}</p>
        <p><strong>Date de début :</strong> {{ $contrat->start_date }}</p>
        <p><strong>Date de fin :</strong> {{ $contrat->end_date }}</p>
        <p><strong>Contenu :</strong> {!! $contrat->content !!}</p>
    </div>

</body>
</html>
