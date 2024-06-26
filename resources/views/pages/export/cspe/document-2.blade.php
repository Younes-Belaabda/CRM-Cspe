<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Qwitcher Grypen';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('C:\Users\xx97\Desktop\cspe-1\public\fonts\qwitcher.woff2') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        * {
            font-size: 12px;
            line-height: 15px;
            font-family: 'Qwitcher Grypen';
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

<body>

    <div class="page-1">
        <p>Cher(e) client(e),</p>
        <p>Lors de la conversation téléphonique du {{ date('d/m/Y') }} que vous avez eue avec notre partenaire, vous
            avez
            souhaité souscrire au contrat <strong>CSPE</strong>, et nous tenons à vous souhaiter la bienvenue.</p>
        <p>Grâce à cet abonnement, vous bénéficiez d’un service de mise en relation avec des professionnels qualifiés de
            votre secteur pour vos travaux d’électricité,et de chauffage ainsi que d’un service d’aide à l’optimisation
            de vos factures du quotidien.</p>
        <p>Nous vous rappelons que vous disposez d’un délai de 14 jours calendaires à compter du {{ date('d/m/Y') }}
            pour
            renoncer à votre contrat en renvoyant le formulaire de renonciation se trouvant en bas des conditions
            générales, ou en nous adressant un email à l’adresse suivante : <strong>contact@cspe.fr</strong></p>
        <p>Votre service <strong>CSPE</strong> vous coûtera seulement 15,90€ TTC/trimestre soit 63,60 € TTC/an, avec un
            engagement de 12
            mois. A l'issue du délai de renonciation, nous vous prélèverons votre cotisation mensuelle de 15,90 € TTC
            sur votre compte bancaire le 5 de chaque trimestre, conformément à votre demande.</p>
        <p>Notre service client est joignable au 09 85 40 68 73 du lundi au vendredi de 10h à 19h. Vous trouverez en
            pièces jointes :</p>
        <div>
            <p>- Le bulletin de souscription de votre contrat</p>
            <p>- Les conditions générales de votre contrat</p>
            <p>- Votre mandat de prélèvement</p>
        </div>
        <p>Nous vous invitons à lire avec attention ces documents qui précisent l’ensemble de vos droits et obligations.
        </p>
        <p>Une nouvelle fois, nous vous remercions de la confiance que vous nous témoignez, et vous prions d'agréer,
            cher(e) client(e), nos salutations distinguées.</p>
        <p style="text-align: right"><span>La Direction de la Relation Client</span></p>
    </div>
    <div class="page-break"></div>
    <div class="page-2">
        <p style="text-align: right;color:rgb(44, 151, 223)">BULLETIN DE SOUSCRIPTION AU CONTRAT CSPE</p>
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
                <p style="margin-left: 5px">* Trimestriel, le 5 du mois</p>
                <div style="margin-left: 5px;">
                    <div></div>
                    <div>
                        <p>VOTRE CÔTISATION</p>
                        <p>15,90 €</p>
                        <p>TTC/Trimestre (*)</p>
                        <p>* soit 63,60 € TTC/an</p>
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
                Je demande ma souscription au contrat CSPE de la société CSPE, je déclare avoir pris connaissance des
                conditions générales, qui sont jointes à ce bulletin de souscription et notamment de mon droit de
                rétractation, en accepter les dispositions et en avoir conservé un exemplaire.
            </strong>
        </div>
        <div>
            <p>Je reconnais être informé que les informations recueillies sont nécessaires à l'appréciation et au
                traitement de mon dossier d'adhésion et que les informations administratives font l'objet de traitements
                informatiques par CSPE – 78 avenue des champs Elysees – 75008 - Paris. Conformément à la loi du 6
                janvier 1978 modifiée, je dispose d’un droit d’accès et le cas échéant, de rectification de toutes
                informations me concernant figurant sur ces fichiers en m’adressant par écrit à CSPE – 78 Avenue des
                champs Elysees – 75008 - Paris. Je peux m'opposer à recevoir des informations commerciales sur les
                offres et produits proposés par CSPE par courrier en écrivant à CSPE – 78 avenue des champs Elysees –
                75008 - Paris.</p>
            <p>Je déclare en outre avoir pris connaissance que mes communications téléphoniques avec les services de
                CSPE peuvent faire l'objet d'un enregistrement, pour les besoins de gestion interne et que je peux avoir
                accès aux enregistrements me concernant en m’adressant par écrit à CSPE, 78 avenue des champs Elysees –
                75008 - Paris. Je certifie avoir répondu avec exactitude et sincérité à l'ensemble des questions posées,
                n'avoir rien à déclarer ou omis de déclarer qui puisse induire en erreur CSPE.</p>
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
    <div class="page-break"></div>
    <div>
        <p style="color:rgb(44, 151, 223);font-weight:bold;text-align:center">
            CONDITIONS GÉNÉRALES DE VENTE
        </p>
        <div>
            Vous venez de souscrire auprès de CSPE un abonnement de service et nous vous remercions de votre confiance.
            Sur
            simple appel, ce contrat vous permet d’être mis en relation, pour vos petits travaux, avec un professionnel
            qualifié et d’obtenir un devis en moins de 24h.
            Votre contrat est régi par le Code de la consommation et se compose des présentes conditions générales,
            ainsi
            que des conditions particulières définies lors de votre souscription en fonction des éléments que vous nous
            avez
            communiqués.
        </div>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            QUELQUES DEFINITIONS POUR Y VOIR PLUS CLAIR
        </p>
        <p>
            Qu’entendons-nous par :
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">« Le Client » / « Vous » :</span> Toute personne physique qui agit à
            des fins qui n'entrent pas dans le cadre de
            son
            activité commerciale, industrielle, artisanale, libérale ou agricole, à l’exclusion des professionnels et
            non-professionnels tels que définis par l’article liminaire du Code de la consommation.
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">« Le Service Client » :</span> Le service téléphonique de CSPE,
            Société par Action Simplifiée au capital social de
            1.000 euros, 78 AV DES CHAMPS ELYSEES, 75008 PARIS - RCS Paris B 952 704 666 , et chargé de la prestation de
            service associée au contrat CSPE.
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">« Devis » :</span> Document remis au Client à titre gratuit par email
            suite à la commande du Client, décrivant
            précisément l’Intervention commandée et le tarif associé.
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">« Intervention » :</span> Prestation comprenant la réalisation de
            travaux de dépannage d’urgence dans le domaine
            des
            énergies, électricité et gaz.
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">« Prestataire » :</span> Professionnel chargé de réaliser
            l’Intervention.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            1. LES PRESTATIONS DONT VOUS BÉNÉFICIEZ
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            1.1 LE SERVICE DE MISE EN RELATION TRAVAUX
        </p>
        <div>
            <p>
                Pour bénéficier en toute sérénité du service de mise en relation, un seul numéro : 09 85 40 68 73
                accessible du
                lundi au samedi de 10h à 20h. CSPE vous accompagne dans la mise en relation et la constitution de vos
                dossiers
                auprès des professionnels pour les travaux suivants :
            </p>
        </div>
        <p>
            <span style="color: rgb(44, 151, 223)">- Electricité :</span> travaux, maintenance ou panne de
            l’installation électrique du domicile (plus de lumières,
            défaut
            des prises électriques, problème sur le compteur…).
        </p>
        <p>
            <span style="color: rgb(44, 151, 223)">- Chauffage :</span> installation, réparation de votre chaudière gaz,
            rénovation énergétique (isolation,
            ventilation…).
        </p>
        <p>
            Chacune des Interventions souhaitées doit faire l’objet d’un appel par le Client au Service Clientèle de
            CSPE
            pour la création d’un dossier de mise en relation. Le Service Clientèle définit avec vous les
            caractéristiques
            de votre installation et vos besoins. A cet effet, vous précisez la localisation, la nature de
            l’Intervention,
            le calendrier souhaité pour l’Intervention ainsi que les coordonnées de contact permettant la réalisation de
            l’Intervention. Si lors du diagnostic préliminaire, il apparaît qu’une intervention s’avère nécessaire, le
            Service Client vous propose un Prestataire qualifié pour l’Intervention et effectue, avec votre accord, la
            mise
            en relation. Vous restez libre de
            refuser le Prestataire proposé par le Service Clientèle ; dans ce cas, il reconnaît toutefois la réalisation
            de
            la mission de mise en relation effectuée par CSPE au titre du service.
        </p>
        <p>
            Le Service Clientèle organise l’Intervention auprès du Prestataire dans un délai de trois (24) heures pour
            le
            territoire de France métropolitaine (hors Corse), sauf demande explicite du Client. Le Service Clientèle
            accompagne le Client dans la détermination de la prestation et l’établissement d’une commande auprès du
            Prestataire.
        </p>
        <p>
            La validation de la commande et le recouvrement des factures issues de l’Intervention reste à la charge du
            Client dans le cadre du contrat
            entre le Client et le Prestataire ; CSPE n’intervenant pas dans la relation contractuelle établie entre le
            Client et le Prestataire.
        </p>
        <p>
            Il est de la responsabilité du Client de garantir la conformité de son installation électrique, de gaz ou de
            sa
            chaudière/chauffage aux normes réglementaires en vigueur. Si l’installation faisant l’objet du dépannage ne
            remplit pas ces conditions, le Prestataire peut refuser d’intervenir. Le Client reconnaît qu’en aucun cas,
            CSPE
            ne participe à la relation contractuelle existant entre lui et le Prestataire ni ne pourra être tenu
            responsable
            de la prestation réalisée par le Prestataire. Le Client peut utiliser le service de mise en relation proposé
            par
            Météore à sa convenance, sans limite du nombre de sollicitations.
        </p>
        <div class="page-break"></div>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            1.2. Le service d’optimisation des depenses
        </p>
        <p>
            Le service client CSPE vous accompagne et vous aide à détecter les aides financières disponibles telles que:
        </p>
        <div>
            <p>
                - Les chèques énergie (aide pour payer les factures d’électricité et de gaz)
            </p>
            <p>
                - Les CEE (changement de fenêtres, installation d'une nouvelle chaudière ou d'une pompe à chaleur,
                isolation des
                combles...)
            </p>
            <p>
                - Ma prime renov (aide qui permettra aux foyers modestes ou très modestes de réaliser des travaux de
                rénovation
                énergétique)
            </p>
        </div>
        <p>
            Le service client CSPE pourra également vous accompagner dans l’optimisation de vos factures d’électricité
            et de
            gaz en comparant les offres disponibles sur le marché.
        </p>
        <p>
            Les réponses délivrées sont en fonction des faits et situations exposées et revêtent un caractère informatif
            qui
            ne sauraient engager notre responsabilité.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            2. RÉCLAMATIONS
        </p>
        <p>
            Si vous avez une réclamation à formuler quant à la souscription du contrat de prestation de service ou à la
            délivrance de la prestation de service de mise en relation avec un professionnel, vous pouvez la formuler
            auprès
            de votre interlocuteur habituel : CSPE au 09 85 40 68 73 ou par email à l’adresse contact@cspe.me.
        </p>
        <p>
            En cas d’insatisfaction concernant la réponse apportée, en contactant CSPE à l’adresse suivante :
            CSPE – 78 AV DES CHAMPS ELYSEES - 75008 Paris
        </p>
        <p>
            Les services concernés accuseront réception de votre réclamation sous 10 jours ouvrables et étudieront votre
            réclamation afin de résoudre votre insatisfaction. Le maximum sera fait pour vous apporter une réponse dans
            un
            délai de 10 jours ouvrables à compter de l’envoi de votre réclamation écrite ; si ce délai devait être
            prolongé,
            vous serez tenu informé du déroulement du traitement de sa réclamation dans ce même délai, sans que le délai
            de
            traitement de la réclamation ne puisse dépasser deux mois à compter de l’envoi de votre réclamation écrite.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            3. MÉDIATION
        </p>
        <p>
            Dans le cas d'un désaccord entre vous et nous portant sur l'application ou l'interprétation du présent
            contrat,
            et uniquement après communication de notre position définitive suite au traitement de votre réclamation,
            vous
            pouvez faire appel à : Médiation de la Consommation et du Patrimoine – 12 square Desnouettes – 75015 Paris –
            mcpmediation.org
            Le Médiateur est une autorité indépendante et extérieure à notre société, qui examine et donne un avis sur
            le
            règlement des litiges liés au contrat.
        </p>
        <p>
            Le Médiateur peut être saisi uniquement après épuisement des procédures internes de traitement des
            réclamations
            propres à notre société, étant précisé que certains litiges ne relèvent pas de sa compétence.
        </p>
        <p>
            En application de l’article 2238 du Code civil, le recours à la médiation suspend le délai de prescription
            des
            actions.
        </p>
        <p>
            La suspension a pour effet d’arrêter temporairement le cours de la prescription, mais n’efface pas le délai
            ayant déjà couru (article 2230 du Code civil). Le délai de prescription ne recommence à courir, pour une
            durée
            minimale de six mois, qu’à compter de la date à laquelle la procédure de médiation est déclarée achevée.
        </p>
        <p>
            En cas d’échec de cette démarche, vous conservez naturellement l’intégralité de vos droits à agir en
            justice.
            Tout litige relatif à l’application de ce contrat relève de la seule compétence des tribunaux français.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            4. VIE DU CONTRAT
        </p>
        <p>
            Si vous avez une question concernant votre contrat ou une modification d'informations personnelles
            (changement
            d'adresse, de coordonnées bancaires...), un conseiller se tient à votre disposition du lundi au samedi de
            10h00
            à 19h00 au 09 85 40 68 73.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            5. PRISE D'EFFET DU CONTRAT
        </p>
        <p>
            Le contrat prend effet à compter de la date indiquée sur vos Conditions Particulières ou sur votre Bulletin
            de
            Souscription, sous réserve de l’encaissement effectif de votre premier prélèvement.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            6. DURÉE DE VOTRE CONTRAT
        </p>
        <p>
            Votre contrat est conclu pour un an à compter de sa prise d’effet, et est tacitement reconduit à chaque
            échéance, sauf si l’une des parties au contrat résilie le contrat suivant les conditions définies ci-après à
            la
            clause « résiliation » (Article 10)
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            7. PAIEMENT DU PRIX DE LA PRESTATION
        </p>
        <p>
            Le montant de votre abonnement est calculé forfaitairement. Des frais de gestion peuvent vous être demandés.
            Le montant de votre abonnement est assujetti à la Taxe sur la Valeur Ajouté en vigueur au jour du règlement
            de
            votre abonnement ou de la trimestrialité.
            Le détail du montant de votre abonnement, ainsi que les taxes sont indiqués dans les conditions
            particulières
            que vous avez signées et les modalités de règlement détaillées dans ces mêmes conditions particulières.

        </p>
        <p>
            Dans le cas d’une reconduction tacite, le prix appliqué sera celui en vigueur au moment de cette
            reconduction.
        </p>
        <p>
            En cas de non-paiement des cotisations, nous pouvons résilier votre contrat suivant les conditions prévues à
            l’article 10 des présentes conditions générales.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            8. RÉVISION DU TARIF
        </p>
        <p>
            Le tarif est modifié chaque année selon la variation annuelle de l’indice des prix à la consommation, hors
            tabac
            de l’ensemble des ménages établi par l’INSEE et publié au journal officiel du mois de janvier de l’année à
            laquelle intervient le renouvellement.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            9. RÉSILIATION
        </p>
        <p>
            Vous pouvez résilier votre contrat d’abonnement à l’expiration d’un délai d’un an en nous adressant une
            lettre
            recommandée avec accusé de réception à l’adresse suivante : Société CSPE – 78 Avenue des champs Elysees –
            75008
            -PARIS un mois avant la date d’échéance.
        </p>
        <p>
            Nous sommes titulaires du même droit, en vous notifiant notre décision de résilier votre contrat par lettre
            recommandée avec accusé de réception adressée à votre dernier domicile connu, dans les mêmes délais.
            Conformément aux dispositions des articles L215-1 à L215-3 et à l’article L241-3 du code de la consommation,
            en
            l’absence de courrier ou mail adressé par nos services vous informant de la possibilité de ne pas renouveler
            votre contrat au plus tard un mois avant la date anniversaire de votre contrat, vous pourrez mettre un terme
            au
            contrat, à tout moment à compter de la date de reconduction.
        </p>
        <p>
            - Article L215-1 du code de la consommation :
        </p>
        <p>
            « Pour les contrats de prestations de services conclus pour une durée déterminée avec une clause de
            reconduction
            tacite, le professionnel prestataire de services informe le consommateur par écrit, par lettre nominative ou
            courrier électronique dédiés, au plus tôt trois mois et au plus tard un mois avant le terme de la période
            autorisant le rejet de la reconduction, de la possibilité de ne pas reconduire le contrat qu’il a conclu
            avec
            une clause de reconduction tacite. Cette information, délivrée dans des termes clairs et compréhensibles,
            mentionne, dans un encadré apparent, la date limite de non-reconduction.
        </p>
        <p>
            Lorsque cette information ne lui a pas été adressée conformément aux dispositions du premier alinéa, le
            consommateur peut mettre gratuitement un terme au contrat, à tout moment à compter de la date de
            reconduction.
        </p>
        <p>
            Les avances effectuées après la dernière date de reconduction ou, s’agissant des contrats à durée
            indéterminée,
            après la date de transformation du contrat initial à durée déterminée, sont dans ce cas remboursées dans un
            délai de trente jours à compter de la date de résiliation, déduction faite des sommes correspondant, jusqu’à
            celle-ci, à l’exécution du contrat.
        </p>
        <p>
            Les dispositions du présent article s’appliquent sans préjudice de celles qui soumettent légalement certains
            contrats à des règles particulières en ce qui concerne l’information du consommateur. »
        </p>
        <p>
            Article L215-2 du code de la consommation :
        </p>
        <p>
            « Les dispositions du présent chapitre ne sont pas applicables aux exploitants des services d’eau potable et
            d’assainissement. »
        </p>
        <p>
            Article L215-3 du code de la consommation :
        </p>
        <p>
            « Les dispositions du présent chapitre sont également applicables aux contrats conclus entre des
            professionnels
            et des non professionnels.»
        </p>
        <p>
            Article L215-4 du code de la consommation :
        </p>
        <p>
            « Les dispositions des articles L215-1 à L215-3 et L241-3 sont intégralement reproduites dans les contrats
            de
            prestation de services auxquels elles s’appliquent. »
        </p>
        <p>
            Article L241-3 du code de la consommation :
        </p>
        <p>
            « Lorsque le professionnel n’a pas procédé au remboursement dans les conditions prévues à l’article L.
            215-1,
            les sommes dues sont productives d’intérêts au taux légal. »
        </p>
        <p>
            Vous pouvez également résilier votre contrat dans les conditions suivantes :
        </p>
        <p>
            En cas de révision du montant de votre abonnement autre que celle prévue au contrat ou imposée par la loi en
            vigueur. Dans ce cas, vous disposez d’un mois pour notifier la résiliation de votre contrat par lettre
            recommandée avec accusé de réception, laquelle prendra effet un mois après réception de ladite lettre. Vous
            devrez alors nous régler la mensualité sur la base du tarif avant révision, au prorata du temps écoulé entre
            la
            dernière échéance et la date d’effet de la résiliation.
        </p>
        <p>
            Nous pouvons également résilier votre contrat dans les conditions suivantes :
        </p>
        <p>
            En cas de non-paiement de vos mensualités, nous vous adressons une lettre de mise en demeure à votre dernier
            domicile connu. Si nous sommes sans réponse de votre part à cette lettre à l’expiration d’un délai de trente
            jours, et si vous n’avez pas régularisé la situation dans ce délai, votre contrat sera résilié de plein
            droit.
        </p>
    </div>
    <div>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            10. DONNÉES À CARACTÈRE PERSONNEL
        </p>
        <p>
            Les données personnelles recueillies font l’objet de traitements destinés à la souscription/l’adhésion, la
            gestion y compris commerciale et l’exécution du contrat par CSPE, responsable de traitement.
        </p>
        <p>
            Les données recueillies permettent également le traitement des réclamations, médiations et contentieux,
            l’élaboration de statistiques commerciales et d’études techniques, la mise en œuvre d’opérations de
            prospection
            et de fidélisation ainsi que l’exécution de nos obligations légales, réglementaires et administratives.
        </p>
        <p>
            Vos données sont conservées dans le respect de nos obligations légales et réglementaires. Nous et nos
            partenaires nous engageons à prendre les mesures techniques et organisationnelles appropriées pour garantir
            un
            niveau de sécurité et de confidentialité adapté au risque présenté par le traitement de vos données et à
            notifier à la CNIL et vous informer en cas de violation de vos données dans les limites et conditions des
            articles 33 et 34 du RGPD.
        </p>
        <p>
            Si vous avez donné votre consentement, nous pouvons transmettre vos données à nos partenaires pour recevoir
            leurs propositions commerciales. Elles sont conservées pendant toute la durée de votre contrat pour son
            suivi,
            l’exécution des prestations délivrées et le traitement des réclamations et après résiliation de votre
            contrat,
            elles seront conservées pendant une durée ne pouvant excéder les délais légaux de prescription de vos
            actions.
        </p>
        <p>
            La liste de nos partenaires peut vous être transmise sur demande auprès de notre Délégué à la Protection des
            Données.
        </p>
        <p>
            A ces fins, vos données sont traitées par nos soins et par nos prestataires sur le territoire de l’Union
            Européenne. Elles peuvent toutefois être susceptibles de faire l’objet de transferts hors de l’Union
            Européenne.
        </p>
        <p>
            Ces transferts sont encadrés par des règles de protection et de sécurité des données qui peuvent vous être
            transmises sur demande par notre Délégué à la Protection des Données.
        </p>
        <p>
            Afin de mesurer et améliorer notre qualité de service, vos échanges de courriers, télécopies, courriels et
            conversations téléphoniques avec notre société sont susceptibles d’être analysés et enregistrés et de faire
            l’objet de traitements informatiques et seront conservées 6 mois à cet effet. Vous pouvez vous opposer à
            l’enregistrement de vos appels en l’indiquant à votre interlocuteur téléphonique. Conformément à la loi
            informatique et Libertés n° 78-17 du 6 janvier 1978 modifiée par la loi n° 2004-801 du 6 août 2004, la loi
            n°
            2018-493
        </p>
        <p>
            du 20 juin 2018 relative à la protection des données personnelles (LPD) et au règlement (UE) 2016/679
            (Règlement
            Général sur la Protection des Données) du 27 avril 2016 relatif à la protection des personnes physiques à
            l’égard des traitements de données à caractère personnel et à la libre circulation de ces données (RGPD),
            vous
            bénéficiez d’un droit d’accès, de rectification, d’effacement (des données inexactes, incomplètes,
            équivoques,
            périmées ou dont le traitement serait illicite), de limitation des traitements (dans les cas prévus par la
            loi),
            d’opposition pour motif légitime, de suppression de vos données à caractère personnel.
        </p>
        <p>
            Vous possédez un droit à la portabilité de vos données (dans les cas prévus par la loi) ainsi que du droit
            de
            définir des directives relatives à la conservation, l’effacement et à la communication de ces données après
            votre décès. Vous pouvez enfin vous opposer, à tout moment et sans frais à la prospection commerciale. Ces
            droits peuvent être exercés, en justifiant de votre identité, par courrier auprès de :
        </p>
        <p>
            CSPE
        </p>
        <p>
            Délégué à la Protection des Données
        </p>
        <p>
            78 AVENUE DES CHAMPS ELYSEES 75008 Paris
        </p>
        <p>
            dpo@cspe.me
        </p>
        <p>
            Vous disposez également du droit de vous inscrire gratuitement sur la liste d’opposition au démarchage
            téléphonique gérée par la société Wordline. Pour plus d’informations : www.bloctel.gouv.fr
        </p>
        <p>
            Vous bénéficiez du droit d’introduire une réclamation auprès de la CNIL sur son site : www.cnil.fr ou par
            courrier à l’adresse Commission Nationale Informatique et Libertés - TSA 80715 - 3 Place de Fontenoy- 75334
            PARIS CEDEX 07, si vous considérez que le traitement de vos données à caractère personnel constitue une
            violation de la réglementation relative à la protection des données à caractère personnel.
        </p>
        <p style="background-color:rgb(44, 151, 223);color:white;font-weight:bold;">
            11. DROIT DE RÉTRACTATION
        </p>
        <p>
            Vous pouvez renoncer à votre contrat de prestation de service s’il a été souscrit dans le cadre d’un
            démarchage
            par téléphone, par le biais d’un moyen de communication à distance ou encore hors établissement (démarchage
            à
            domicile, sur lieu de travail) dans les conditions de l’article L221-18 du code de la consommation.
        </p>
        <p>
            Vous disposez alors d’un délai de quatorze (14) jours à compter du lendemain de la signature du contrat pour
            vous rétracter en nous renvoyant le formulaire ci-dessous notamment par courrier recommandé avec accusé
            réception. Conformément à l’article L221-22 du code de la consommation, il vous appartient d’apporter la
            preuve
            de l’exercice de votre droit de rétractation.
        </p>
        <p>
            Cette renonciation n’est valable que si elle est adressée dans le délai mentionné ci-dessus, lisiblement,
            parfaitement remplie et signée.
        </p>
        <p>
            A la suite de votre demande de renonciation, si le 1er prélèvement a été lancé, CSPE s’engage à vous
            rembourser
            dans les 30 jours suivants. Pour exercer votre droit de renonciation, vous pouvez utiliser le modèle en bas
            de
            page dûment complété par vos soins.
        </p>
        <p>
            En application des articles L 223-1 et suivants du Code de la Consommation, vous disposez d’un droit
            d’opposition au démarchage téléphonique que vous pouvez exercer auprès de BLOCTEL à l’adresse :
            https://www.bloctel.gouv.fr
        </p>
    </div>
    <!-- formulaire de retractation -->
    <div>
        <div
            style="background-color: rgb(44, 151, 223);color:white;text-align:center;padding:5px;border:2px solid black">
            <p style="margin: 0">FORMULAIRE DE RETRACTATION AU CONTRAT <strong>{{ $contrat['rum'] }}</strong></p>
        </div>
        <div style="border: 2px solid;border-top:none;margin-bottom:10px;padding:5px">
            <p style="margin-top: 0">Je soussigné(e), déclare renoncer à l'offre CSPE n°{{ $contrat['rum'] }}.</p>
            <p>Veuillez compléter et renvoyer le présent formulaire uniquement si vous souhaitez vous rétracter du
                contrat, à l’attention de :</p>
            <p>CSPE Service Qualité – 78 AVENUE DES CHAMPS ELYSEES - 75008 – PARIS</p>
            <p>Je/nous (*) vous notifie/notifions (*) par la présente ma/notre (*) rétractation du contrat portant sur
                la souscription de l’offre de prestation de
                services CSPE, numéro {{ $contrat['rum'] }}
            </p>
            <p>Commandé le (*)/reçu le (*) :</p>
            <p>
                Nom/Prénom du (des) consommateur(s) :
            </p>
            <p>
                Adresse du (des) consommateur(s) :
            </p>
            <p>
                Signature du (des) consommateur(s) (uniquement en cas de notification du présent formulaire sur papier)
                :
            </p>
            <p>
                Date :
            </p>
            <p>
                (*) Rayez la mention inutile.
            </p>
        </div>
    </div>
    <div class="page-break"></div>
    <!-- formulaire SEPA -->
    <div>
        <div style="border: 2px solid;padding:5px">
            <p style="color:rgb(44, 151, 223);font-weight:bold;text-align:center">MANDAT DE PRÉLÈVEMENT SEPA</p>
            <p>Vous autorisez CSPE à envoyer des instructions à votre banque pour débiter votre compte, et votre banque
                à débiter votre compte
                conformément aux instructions de CSPE. Vous bénéficiez du droit d'être remboursé par votre banque selon
                les conditions décrites
                dans la convention que vous avez passée avec elle. Une demande de remboursement doit être présentée dans
                les 8 semaines suivant la date de débit de votre compte pour un prélèvement autorisé.
            </p>
            <div>
                <div style="width: 50%;float: left;">
                    <p>
                        Créancier
                    </p>
                    <p>
                        Nom : CSPE
                    </p>
                    <p>
                        Adresse : 78 AVENUE DES CHAMPS ELYSEES
                    </p>
                    <p>
                        Code Postal : 75008
                    </p>
                    <p>
                        Ville : Paris
                    </p>
                    <p>
                        Pays : FRANCE
                    </p>
                </div>
                <div style="width: 50%;float: right;">
                    <p>
                        Débiteur
                    </p>
                    <p>
                        Votre nom : {{ $contrat['nom'] }}
                    </p>
                    <p>
                        Votre prénom : {{ $contrat['prenom'] }}
                    </p>
                    <p>
                        Votre adresse : {{ $contrat['adresse'] }}
                    </p>
                    <p>
                        Code Postal : {{ $contrat['zipcode'] }}
                    </p>
                    <p>
                        Ville : {{ $contrat['ville'] }}
                    </p>
                    <p>
                        Pays : FRANCE
                    </p>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div>
                <p>
                    IBAN: {{ $contrat['iban'] }}
                </p>
            </div>
            <div>
                <p>
                    Fait à: {{ $contrat['ville'] }}
                </p>
                <p>
                    Le: {{ $contrat['created_at']->format('d/m/Y') }}
                </p>
            </div>
            <div>
                <p>
                    Paiement : TRIMESTRIEL
                </p>
                <p>
                    Le 5 du mois
                </p>
            </div>
            <div>
                <p>
                    IDENTIFIANT ICS : FR72ZZZ8935D0 N°DE CONTRAT / RUM: {{ $contrat['rum'] }}
                </p>
            </div>
        </div>
    </div>
</body>

</html>
