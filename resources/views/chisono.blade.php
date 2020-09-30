@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row"> 
        <div class="col-md-4 order-md-2 layer">
            <img src="svg/memento.jpg" class="img">
        </div>
        <div class="col-md-6 order p-md-5 order-md-3">
            <h2>Chi sono </h2>
            <p class="bio">Classe 1996,nata e vivo a Empoli (Fi).<br>
                Attraverso i miei studi all'accademia per Digital Communication e un esperienza da freelance per un associazione per cui 
                sto lavorando, ho già esperienza e praticità 
                nell'organizzazione e gestione delle pagine social 
                media,copywriting,bootstrap e progettato e gestito il loro sito web WordPress creando anche i suoi contenuti.

                Scrittura creativa,grande interesse per il design e arti grafiche,mi piace viaggiare in posti anche fuori l'Italia .Passione e gusto per la moda ,design e accessori. Guardo serie tv e leggo libri in lingua inglese per migliorare il mio inglese. Molta curiosità e interesse per il web design e web developer cercando di rimanere sempre aggiornata alle ultime novità e trends.
                Sono open mind per tutto quello che c'è da 
                imparare di nuovo, sono sveglia, solare e ho 
                grande forza di volontà.
            </p>
        </div>
        <div class="col-md-1 d-flex align-items-center">
            <div class="list-social d-md-block order-md-1">
                <a href="#" class="list-item"> <i class="fab fa-linkedin"></i></a>
                <a href="#" class="list-item"> <i class="fab fa-instagram"></i></a>
                <a href="#" class="list-item"> <i class="fab fa-facebook-square"></i></a>
                <a href="#" class="list-item"> <i class="fab fa-github"></i></a>
                <a href="#" class="list-item"> <i class="fab fa-skype"> </i> </a>
            </div>
        </div>
       
         
    </div>

    <div class="row">
        <div class="col-sm-6 py-5 my-3">
            <h6>Competenze professionali</h6>
            <ul class="list">
                <li>Ottima esperienza e praticità con il pacchetto grafico di Adobe (Photoshop,Illustrator,XD,Premiere)</li>
                <li>Esperienze web design Front end </li>
                <li>UX design user centered</li>
                <li>Copywriting </li>
                <li>Social media manager</li>
                <li>Esperienza web developer (Html5,CSS,SASS,Boostrap4,Javascript,php,SQL,Laravel,GIT)</li>
                
            </ul>
        </div>
    </div>
<scipt src="./app.js"></script>

</div>
            
@endsection