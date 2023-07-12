@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
</style>
    <div class="position-relative">
          <img loading="lazy" class="img-fluid img-bg-both-web" src="{{asset('assets/images/web-green.png')}}" alt="">
        <img loading="lazy" class="img-fluid img-bg-both-mobile" src="{{asset('assets/images/mob-green.png')}}" alt="">


        <div class="container-fluid">
            <div class="data-mai">
                <div class="green-poly">
                    <p class="geng-both ">DBE<br>on Social<br>& Value<br>Creation</p>
                </div>


                <div class="white-poly"">
                    <div class="both-para">
                        <p>
                    <strong>DOWNSTREAM BUSINESS EXCELLENCE</strong><br>
                    <strong>Oversight</strong> on safe, reliable, and efficient operations of Downstream Business operating assets through a <strong>structured governance and compliance framework.</strong><br>
                    <br>
                    Perform a holistic enterprise approach by providing insight and foresight to the operational excellence realm of Downstream Business through value optimization, governance & assurance, integration & standardization, and organizational culture.<br>
                    <br>
                    <strong>Our ACCOUNTABILITIES</strong><br>
                    •	Steer Downstream Business Excellence agenda towards a Best-in-Class performance via maximizing value<br>
                    •	Central pool of expertise that is shared across all Downstream Businesses<br>
                    •	Integrate Downstream value chain with integrated system & framework as well as promoting simplification & standardization.<br>
                    •	Provide enterprise-wide stewardship, oversight, and assurance for Downstream Operations & Projects<br>
                    <br>
                    <strong>DBE FOCUSED AREAS</strong><br>
                    1.	<strong>Championing</strong> Greenhouse Gas (GHG) emissions reduction efforts through process integration, technology, and innovation<br>
                    2.	<strong>Strengthening</strong> First Line Assurance (FLA) implementation & practices at OPUs, focusing on PCG, RMT & PRPC<br>
                    3.	<strong>Drive</strong> Self-Regulation (SR) certification implementation across Downstream (until 2025)<br>

                       </p>
                    </div>
                    <button class="read-more-btn">Read More</button>
                </div>
                
                <div class="info-popup">
                    <button type="button" class="btn-close info-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                    <p class="mb-0"> </p>
                </div>
                <div class="info-overlay"></div>

                <div class="video-both">
                    <div class="vid-section3 ">
                        <img loading="lazy" class="img-fluid w-100" src="{{asset('assets/images/ply-vid.png')}}" alt="">
                    </div>
                </div>
                <img loading="lazy" class="img-fluid slides-imges" src="{{asset('assets/images/booth-slide.png')}}" alt="">
              <button type="button" class="btn both-btns both-down btn-hov"data-bs-toggle="modal" data-bs-target="#pdf-down">Download PDF</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#examplesilder"class="btn both-btns  both-viewall btn-hov">View Slides</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#examplevideo"class="btn both-btns both-watch btn-hov"><i
                            class="fa-solid fa-play icon-play"></i>Watch Video</button>
                <div class=" nostyle-btn">
                    <a href="{{route('pages.mainstage')}}"> <img loading="lazy" class="main-stage-btn btn-hov" src="{{asset('assets/images/back-main-stage.png')}}"
                            alt="img"></a>
                </div>
                <div class=" nostyle-btn">
                    <a href="{{route('pages.exhibition_hall')}}"><img loading="lazy" class="img-fluid hall-btn  btn-hov" src="{{asset('assets/images/back-hall.png')}}"
                            alt="img"></a>

                </div>
                <div class="copy-right-m">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All
                    rights
                    reserved.
                </div>
            </div>

        </div>

        

    </div>
    <div class="modal fade " id="examplevideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content1">
            <div class="container  ">
                <div class="text-end">
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/834257779?h=b1b54a5a71" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/834257848?h=5ab1b9285c" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/834257898?h=5e99c328d9" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/834258206?h=09788d8efd" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                                </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/835330119?h=2ad74e3e5f" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                                </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/835328779?h=4f7c25caa2" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                  

                </div>
                <div id="counter"></div>



            </div>

        </div>
    </div>
</div>
<div class="modal fade " id="examplesilder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content1">
            <div class="container  ">
                <div class="text-end">
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="owl-carousel owl-theme">
                   
                    <div class="item"> 
                    <a href="{{ asset('assets/images/Poster-EVSI-Advanced Process-Control-(APC).png')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Poster-EVSI-Advanced Process-Control-(APC).png')}}" alt="">
                        </a> 
                  </div>
                  
                    
                    <div class="item">
                       <a href="{{ asset('assets/images/Poster-EVSI-BoC-Episode1.png')}}" data-lightbox="image-1" >  
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Poster-EVSI-BoC-Episode1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">   
                    <a href="{{ asset('assets/images/Poster-EVSI-BoC-Episode-2.png')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Poster-EVSI-BoC-Episode-2.png')}}" alt="">
                        </a> 
                    </div>
                    <div class="item">   
                    <a href="{{ asset('assets/images/Poster-EVSI-BoC-Episode-3.png')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Poster-EVSI-BoC-Episode-3.png')}}" alt="">
                         </a> 
                    </div>
                    
                   

                </div>
                <div id="counter"></div>



            </div>

        </div>
    </div>
</div>
<div class="modal fade " id="pdf-down" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content1">
            <div class="container  ">
                <div class="text-end">
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class=section-pdf>
                    <img loading="lazy" class="w-100 img-topp " src="{{ asset('assets/images/top-d.png')}}" alt="">

                    <img loading="lazy" class="w-100 img-bottom" src="{{ asset('assets/images/bottom-d.png')}}" alt="">
                    <div class="d-grid gap-2 btn-d pt-4">
                      <a target="_blank" href="https://downstreamsustainability.com/assets/pdf/Poster-EVSI-Social-Risk-Assessment.pdf" class="btn btn-primary btn-1-col " type="button">Social Risk Assessment</a>
                       
<!--                       <a href="url" class="btn btn-primary btn-5-col " type="button">Button</a> -->
<!--                      <a href="url" class="btn btn-primary btn-1-col  " type="button">Button</a> -->
<!--AZR-->
<!--Success!-->
<!--                       <a href="url" class="btn btn-primary btn-2-col " type="button">Button</a> -->
<!--                        <a href="url"-->
<!--                            class="btn btn-primary btn-3-col " type="button">Button</a>-->
<!--                        <a href="url" class="btn btn-primary btn-4-col " type="button">Button></a>-->
<!--                       <a href="url" class="btn btn-primary btn-5-col" type="button">Button</a>  -->

                    </div>


                </div>




            </div>

        </div>
    </div>
</div>
     <script src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
    <script>
        const paragraph = document.querySelector(".both-para");
        const infoPopup = document.querySelector(".info-popup");
        const overlay = document.querySelector(".info-overlay");
        const infoClose = document.querySelector(".info-close");
        const infoPopupPara = document.querySelector(".info-popup p");
        const text = paragraph.innerHTML;
        infoPopupPara.innerHTML = text
        const latestString = text.trimStart()
        console.log(text)
        const maxWords = 150;
        const newContent = latestString.slice(0, maxWords) + "...";
        paragraph.innerHTML = newContent;
        
        let readMoreBtn = document.querySelector(".read-more-btn");
        readMoreBtn.addEventListener("click",function(){
            infoPopup.style.top = "50%"
            overlay.style.visibility = "visible"
            overlay.style.opacity = "1"
        })
        overlay.addEventListener("click",function(){
            infoPopup.style.top = "-150%"
            overlay.style.visibility = "hidden"
            overlay.style.opacity = "0"
        })
        infoClose.addEventListener("click",function(){
            infoPopup.style.top = "-150%"
            overlay.style.visibility = "hidden"
            overlay.style.opacity = "0"
        })
     
  

    </script>

@endsection()