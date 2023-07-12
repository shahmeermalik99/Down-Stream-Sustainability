@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
.audio-id{
    display:none;
}
</style>
    <div class="bg-img-exi">
        
        <div class="text-exihall">
            <img class="d-none d-lg-block w-100" src="{{ asset('assets/images/exb-web.png')}}" alt="">
            <img class="d-lg-none w-100" src="{{ asset('assets/images/exb-mob.png')}}" alt="">
            <a href="{{route('pages.seed')}}" class="booth-text booth-1"><span> Social<br>Enterprise<br>Education Lab</span><br>(SEEd.Lab)</a>
            <a href="{{route('pages.rmt')}}" class="booth-text booth-2">RMT</a>
            <a href="{{route('pages.dbe')}}" class="booth-text booth-3">DBE<br><span>on Social <br>&  Value<br> Creation</span></a>
            <a href="{{route('pages.dbe_vcrg')}}" class="booth-text booth-4"> DBE<br><span>on Governance <br>& <br>Environment</span></a>
            <a href="{{route('pages.prpc')}}" class="booth-text booth-5"><span> Pengerang<br>Integrated <br>Complex<br>Sustainability<br>Journey</span></a>
            <a href="{{route('pages.petrosains')}}" class="booth-text booth-6">Petrosains <br>Sdn. Bhd.</a>
            <a href="{{route('pages.gsc')}}" class="booth-text booth-7"><span>PETRONAS<br>Net Zero Carbon<br>Emissions<br>2050</span></a>
            <a href="{{route('pages.pcg')}}" class="booth-text booth-8">PCG<br> <span> Sustainability <br> at the Core</span></a>
            <a href="{{route('pages.gpi')}}" class="booth-text booth-9">Geng <br> Plastik <br> Ija</a>
             <a href="{{route('pages.pdb')}}" class="booth-text booth-10">PDB<br> <span> Sustainability</a>
             <a href="{{route('pages.pdt')}}" class="booth-text booth-11"><span>PD&T<br> Innovations <br>for a<br>Sustainable<br>Future</span></a> 
            
            
            <div class=" nostyle-btn bgn-sm">
                    <a href="https://downstreamsustainability.com/staging/mainstage"> <img class="main-stage-btn btn-hov" src="https://downstreamsustainability.com/assets/images/back-main-stage.png" alt="img"></a>
                </div>

        <div class="copy-right-m-rp">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All rights reserved.
        </div>

<div class=vol-btn-bg>
    <button onclick="myFunction()" type="button" class=" vol-btn"><img class="img-w"
            src="{{ asset('assets/images/volume-up-fill.svg') }}" alt="">
    </button>
    <audio class="audio-music" id="audio-m" controls>

        <source src="{{ asset('assets/leva-eternity-149473.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
</div>
<script>
let flag=true;
function myFunction() {

 let audio = document.getElementById("audio-m");

if(flag==true){
    audio.play();
    flag=false;
}
else{
    audio.pause();
    flag=true;
}
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60112247a9a34e36b970d056/1h2mp9vda';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection