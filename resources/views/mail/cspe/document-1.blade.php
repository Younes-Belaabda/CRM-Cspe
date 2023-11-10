<p>Bonjour,</p>
<p>Votre contrat CSPE portant le numero {{ $contrat->rum }} est en ligne et n'attend plus que votre signature.</p>
<p>Vous trouverez ci-joint les documents pre-contractuels relatifs à votre contrat, dont nous vous invitons à prendre connaissance.</p>
<p>Pour signer votre contrat en quelques secondes, il vous suffit ensuite de cliquer sur le lien suivant :</p>
<p>
     <a href="{{ str_replace('http://127.0.0.1:8000' , 'https://prod.cspe.me' , route('client.contrat.signature.cspe' , ['contrat' => $contrat])) }}">{{ str_replace('http://127.0.0.1:8000' , 'https://prod.cspe.me' , route('client.contrat.signature.cspe' , ['contrat' => $contrat])) }}</a>
    {{-- <a href="{{ route('client.contrat.signature.cspe' , ['contrat' => $contrat]) }}">{{ route('client.contrat.signature.cspe' , ['contrat' => $contrat]) }}</a> --}}
</p>
<p>Pour la mise en place du prélèvement nécessaire au paiement de votre service CSPE, il vous suffit de cliquer sur le lien suivant :</p>
<p>
    <a href="https://pay.gocardless.com/AL0009JCSXVPTF">https://pay.gocardless.com/AL0009JCSXVPTF</a>
</p>
<p>Cordialement.</p>




