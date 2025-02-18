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
        Impots
    </div>

    <div class="content">
        <p><strong>Impots</strong> 
            @if ($revenutotal < 15000)
                <p>Tu es un régime micro-foncier, tu dois donc inscrire {{$revenutotal}} dans la case case 4 BE déclaration n°2042</p>
                <p> Sur quel montant sera tu imposé ? {{$revenutotal * 0.70}}</p>
            @else
                <p>Tu es un régime réél, tu dois inscrire {{$revenutotal}} case 4 BA déclaration n°2044</p>
                <p> Sur quel montant sera tu imposé ? {{$revenutotal}}</p>
                <p>voila</p>
            @endif
        </p>
    </div>

</body>
</html>
