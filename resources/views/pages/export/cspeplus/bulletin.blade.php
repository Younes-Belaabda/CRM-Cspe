<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-size: 12px;
            line-height: 15px
        }

        p {
            margin: 0;
            margin-bottom: 15px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<div class="page-2">
    <p style="text-align: right;color:rgb(44, 151, 223)">BULLETIN DE SOUSCRIPTION AU CONTRAT CSPE PLUS</p>
    <div>
        <p>Numéro de contrat : {{ $contrat['rum'] }}</p>
        <p>Date d’adhésion le : {{ $contrat['created_at']->format('d/m/Y') }}</p>
    </div>
    <p style="color:rgb(44, 151, 223)">VOS COORDONNÉES</p>
    <div style="border: 2px solid;padding:5px;margin-bottom:15px;">
        <p>Nom : {{ $contrat['nom'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Prénom : {{ $contrat['prenom'] }}</p>
        <p>Adresse : {{ $contrat['adresse'] }}</p>
        <p>Code postal : {{ $contrat['zipcode'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ville : {{ $contrat['ville'] }}
        </p>
        <p>Tél domicile : {{ $contrat['mobile'] }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tél portable :
            {{ $contrat['telephone'] }}</p>
        <p>Date de naissance : {{ $contrat['date']->format('d-m-Y') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adresse
            e-mail : {{ $contrat['mail'] }}</p>
    </div>
    <div>
        <p style="width: 50%;float: left;color:rgb(44, 151, 223)">VOTRE PAIEMENT</p>
        <p style="width: 50%;float: right;color:rgb(44, 151, 223)">POUR NOUS CONTACTER</p>
    </div>
    <div style="clear: both"></div>
    <div style="border: 2px solid;min-height:246px;">
        <div style="width: 49%;float: left;border-right: 2px solid;padding: 5px 0">
            <p style="margin-left: 5px">Mode de paiement :</p>
            <p style="margin-left: 5px">* Prélèvement</p>
            <p style="margin-left: 5px">Règlement :</p>
            <p style="margin-left: 5px">* Mensuel, le 5 du mois</p>
            <div style="margin-left: 5px;">
                <div></div>
                <div>
                    <p>VOTRE CÔTISATION</p>
                    <p>15,90 €</p>
                    <p>TTC/Mois (*)</p>
                    <p>* soit 190,80 € TTC/an</p>
                </div>
            </div>
        </div>
        <div style="width: 49%;float: right;padding: 5px 0">
            <div>
                <p>Pour contacter</p>
                <p>Le Service Client</p>
            </div>
            <div>
                <p>09.85.40.67.96</p>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
    <div style="margin: 10px 0">
        <strong>
            Je demande ma souscription au contrat CSPE PLUS de la société CSPE PLUS, je déclare avoir pris connaissance
            des
            conditions générales, qui sont jointes à ce bulletin de souscription et notamment de mon droit de
            rétractation, en accepter les dispositions et en avoir conservé un exemplaire.
        </strong>
    </div>
    <div>
        <p>Je reconnais être informé que les informations recueillies sont nécessaires à l'appréciation et au
            traitement de mon dossier d'adhésion et que les informations administratives font l'objet de traitements
            informatiques par CSPE PLUS – 78 avenue des champs Elysees – 75008 - Paris. Conformément à la loi du 6
            janvier 1978 modifiée, je dispose d’un droit d’accès et le cas échéant, de rectification de toutes
            informations me concernant figurant sur ces fichiers en m’adressant par écrit à CSPE PLUS – 78 Avenue des
            champs Elysees – 75008 - Paris. Je peux m'opposer à recevoir des informations commerciales sur les
            offres et produits proposés par CSPE PLUS par courrier en écrivant à CSPE PLUS – 78 avenue des champs
            Elysees –
            75008 - Paris.</p>
        <p>Je déclare en outre avoir pris connaissance que mes communications téléphoniques avec les services de
            CSPE PLUS peuvent faire l'objet d'un enregistrement, pour les besoins de gestion interne et que je peux
            avoir
            accès aux enregistrements me concernant en m’adressant par écrit à CSPE PLUS, 78 avenue des champs Elysees –
            75008 - Paris. Je certifie avoir répondu avec exactitude et sincérité à l'ensemble des questions posées,
            n'avoir rien à déclarer ou omis de déclarer qui puisse induire en erreur CSPE PLUS.</p>
    </div>
    <div>
        <div style="text-align: center">
            <p style="width:max-content;margin:auto">signature</p>
            <div
                style="border: 1px solid black;border-radius:5px;margin:auto;padding:25px;width:100px;font-family: 'Qwitcher Grypen';">
                {{ $contrat['nom'] }} {{ $contrat['prenom'] }}
            </div>
            <p style="width:max-content;margin:auto">ELECTRONIQUE PAR MAIL</p>
        </div>
    </div>
</div>
</body>

</html>
