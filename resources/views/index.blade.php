@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row p-4 m-4">
        <div class="col-sm-8 section1">
            <p> Ciao,sono </p>
            <h1> Giada Lotti <br> creative designer </h1>
            <p>Sono responsabile e professionale nei progetti,visual sophisticated con un curioso occhio per il graphic design 
                e la progettazione di siti web. </p>

                <button type="button" class="btn btn-outline purple m-4">Download the CV</button>
        </div>
        <div class="col-sm-4 p-0 giada">
            <img src="svg/memento.jpg" style="width:100%;">
        </div>
    </div>

    <div class="social-link"> </div>
    <a href="https://www.facebook.com/giada.lotti.10 " class="text-decoration-none"> Facebook </a> - <a href="https://it.linkedin.com/in/giada-lotti-507052186" class="text-decoration-none">LinkedIn</a> - <a href="https://www.instagram.com/desdemonax/?hl=it" class="text-decoration-none">Instagram</a> - <a href="https://dribbble.com/Desde>Dribbble" class="text-decoration-none"> Dribbble </a> - <a href="https://github.com/Giada-Lotti" class="text-decoration-none">Github</a> 
</div>


<div class="container sezione">
    <p> Cosa so fare </p>
    <h2> I servizi che offro </h2>
    <div class="row servizi">
    <div class="col-sm m-3">Web Design</div>
    <div class="col-sm m-3">Pacchetto Adobe </div>
    <div class="col-sm m-3">Web Development</div>
    <div class="w-100"></div>
    <div class="col-sm m-3">Social Media strategist</div>
    <div class="col-sm m-3">Content Copywriting</div>
  </div>
</div>
            

<div class="container sezione">
    <p class="title"> Portfolio  </p>
        <h2>Date un occhiata ai miei lavori</h2>
        <div class="row justify-content-center portfolio">
                <div class="col-sm-6 py-5">
                    <button type="button" class="btn btn-purple">
                        <a  href="/portfolio" target="_blank"> Guarda di più </a>
                    </button>
                </div>
                <div class="col-sm">
                    <image class=" w-100" src="svg/girl.png" >
                </div>
        </div>
</div>

<div class="container sezione contatti">
    <h5 class="title"> Contattami  </h5>
        <p>Se ti piace ciò che vedi o per qualsiasi cosa<br> non esitare a scrivermi o a chiamarmi <br>per qualsiasi nuovo progetto!</p>
        <div class="row justify-content-center ">
        <div class="col-sm py-3">
                <h6> Tel </h6>
                <p>3339729448</p>
            </div>
            <div class="col-sm py-3">
                <h6> Email </h6>
                <p>giadalotti996@gmail.com</p>
            </div>
            <div class="col-sm py-3">
                <h6> Telegram </h6>
                <p>Desdemona Nephalia</p>
            </div>
        </div>
</div>
@endsection