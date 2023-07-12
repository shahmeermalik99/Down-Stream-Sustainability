@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
</style>
    <div class="position-relative">
        <img class="img-fluid img-bg-both-web" src="{{asset('assets/images/web-pu.png')}}" alt="">
        <img class="img-fluid img-bg-both-mobile" src="{{asset('assets/images/mob-purple.png')}}" alt="">

        <div class="container-fluid">
            <div class="data-mai">
                <div class="purple-poly">
                    <p class="geng-both ">RMT</p>
                </div>


                <div class="pur-poly">
                    <div class="both-para">
                        <p>With the establishment of Refining, Marketing & Trading, the portfolio and assets geography
expansion made the sector’s culture more diversified and inclusive. It establishes a conducive
environment to spurs collaboration and innovation.
Refining, Marketing & Trading exhibition booth outlines the achievements and strategic plans
towards becoming a progressive midstream solutions partner in-line with Net Zero Carbon
Emission (NZCE 2050) aspiration with positive social impact and adherence to business ethics
and corporate governance.
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
                        <img class="img-fluid w-100" src="{{asset('assets/images/ply-vid.png')}}" alt="">
                    </div>
                </div>
                <img class="img-fluid slides-imges" src="{{asset('assets/images/booth-slide.png')}}" alt="">
              <button type="button" class="btn both-btns both-down btn-hov"data-bs-toggle="modal" data-bs-target="#pdf-down">Download PDF</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#examplesilder"class="btn both-btns  both-viewall btn-hov">View Slides</button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#examplevideo"class="btn both-btns both-watch btn-hov"><i
                            class="fa-solid fa-play icon-play"></i>Watch Video</button>
                <div class=" nostyle-btn">
                    <a href="{{route('pages.mainstage')}}"> <img class="main-stage-btn btn-hov" src="{{asset('assets/images/back-main-stage.png')}}"
                            alt="img"></a>
                </div>
                <div class=" nostyle-btn">
                    <a href="{{route('pages.exhibition_hall')}}"><img class="img-fluid hall-btn  btn-hov" src="{{asset('assets/images/back-hall.png')}}"
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
                                <iframe src="https://player.vimeo.com/video/832536850?h=412ad69d04" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832536756?h=823603e73b" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832536654?h=5be2f4a551" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832536607?h=0bf76bf4d2" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832536517?h=fdf778f130" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832536402?h=2ea5b9e107" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
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
                         <a href="{{ asset('assets/images/rmt-1.png')}}" data-lightbox="image-1" >  
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/rmt-1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/rmt-2.png')}}"data-lightbox="image-1" >  
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/rmt-2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/rmt-3.png')}}" data-lightbox="image-1" >  
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/rmt-3.png')}}" alt="">
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
                    <img class="w-100 img-topp " src="{{ asset('assets/images/top-d.png')}}" alt="">

                    <img class="w-100 img-bottom" src="{{ asset('assets/images/bottom-d.png')}}" alt="">
                    <div class="d-grid gap-2 btn-d pt-4">
                      <a target="_blank" href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_Maritime%20Decarbonization%20Initiatives.pdf?dl=0" class="btn btn-primary btn-1-col " type="button">RMT - Maritime Decarbonization Initiatives</a>
                       <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_LNG%20Introduction.pdf?dl=0" class="btn btn-primary btn-2-col " type="button">RMT - LNG Introduction</a>  
                        <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_IONA%20Key%20Slides%20for%20PETRONAS%20Sustainability%20Day%202023.pdf?dl=0"
                            class="btn btn-primary btn-3-col " type="button">RMT - IONA Key Slides for PETRONAS Sustainability Day 2023</a>
                       <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_GHG%20Reduction%20Success%20Stories%20in%20PP%28T%29SB.pdf?dl=0" class="btn btn-primary btn-4-col " type="button">RMT - GHG Reduction Success Stories in PP(T)SB</a> 
                       <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_Dual%20Fuel%20Green-Ammonia%20Tankers.pdf?dl=0" class="btn btn-primary btn-5-col " type="button">RMT - Dual Fuel Green-Ammonia Tankers</a> 
                      <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Doc_Mercedes%20AMG%20Sustainability%20Day.pdf?dl=0" class="btn btn-primary btn-1-col  " type="button">RMT - Mercedes AMG Sustainability Day</a> 

                       <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/RMT%20Slide_Engen%20Energy%20Efficiency%20_%20Solar%20Poster.pdf?dl=0" class="btn btn-primary btn-2-col " type="button">RMT - Engen Energy Efficiency Solar Poster</a> 
                       <!-- <a target="_blank"href="url"-->
                       <!--     class="btn btn-primary btn-3-col " type="button">Button</a>-->
                       <!-- <a target="_blank" href="url" class="btn btn-primary btn-4-col " type="button">Button></a>-->
                       <!--<a target="_blank"href="url" class="btn btn-primary btn-5-col" type="button">Button</a>  -->

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