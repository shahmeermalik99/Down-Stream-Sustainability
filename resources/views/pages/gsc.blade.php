@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
</style>
    <div class="position-relative">
        <img loading="lazy" class="img-fluid img-bg-both-web" src="{{asset('assets/images/web-blue.png')}}" alt="">
        <img loading="lazy" class="img-fluid img-bg-both-mobile" src="{{asset('assets/images/mob-blue.png')}}" alt="">

        <div class="container-fluid">
            <div class="data-mai">
                <div class="blue-poly">
                    <p class="geng-both ">PETRONAS Net <br>Zero Carbon<br> Emissions 2050</p>
                </div>


                <div class="blu-poly">
                    <div class="both-para">
                        <p>PETRONAS has already begun its sustainability journey for more than two decades by integrating sustainable practices into its business and decision-making. The aspiration capitalises on the maturity of our ESG practices while securing long term value for the company.

Net zero carbon emissions 2050 will stretch PETRONAS' efforts to reduce carbon emissions to net zero and create new and inclusive opportunities that contribute towards a Just Transition where we operate.

Our Pathway to Net Zero

PETRONAS became Southeast Asia’s first oil and gas company to declare its aspiration of achieving net zero carbon emissions by 2050. In the PETRONAS Pathway to Net Zero Carbon Emissions 2050, we have set out the details and actions the organisation will be taking to fulfil this commitment.

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
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/831386812?h=c8c108e673"allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/831386870?h=78b7884e2a" allowfullscreen=""
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
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="owl-carousel owl-theme">
               
                    <div class="item">  
                    <a href="{{ asset('assets/images/01-Pathway-to-Net-Zero-Carbon-Emissions-2050-Internal-Launch-02.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/01-Pathway-to-Net-Zero-Carbon-Emissions-2050-Internal-Launch-02.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/02-Pathway-to-Net-Zero-Carbon-Emissions-2050-Internal-Launch-01-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/02-Pathway-to-Net-Zero-Carbon-Emissions-2050-Internal-Launch-01-01.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/03-ADIPEC-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/03-ADIPEC-01.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/04-ADIPEC-01-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/04-ADIPEC-01-01.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/05-CERAWeek-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/05-CERAWeek-01.jpg')}}" alt="">
                            </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/06-Masterclass-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/06-Masterclass-01.jpg')}}" alt="">
                            </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/07-Masterclass petrosains-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/07-Masterclass petrosains-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/08-Union-leaders-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/08-Union-leaders-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/09-Media-engagement-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/09-Media-engagement-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/10-Media engagement.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/10-Media engagement.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/11-Media-engagement-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/11-Media-engagement-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/12-Sustainability-Townhall-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/12-Sustainability-Townhall-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/13-Sustainability-Townhall-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/13-Sustainability-Townhall-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/14-Sustainability-Townhall-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/14-Sustainability-Townhall-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/15-Sustainability-Workshop-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/15-Sustainability-Workshop-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/16-Sustainability-Workshop-01.jpg')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/16-Sustainability-Workshop-01.jpg')}}" alt="">
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
                    <button type="button" class="btn-close btn-close1 " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class=section-pdf>
                    <img loading="lazy" class="w-100 img-topp " src="{{ asset('assets/images/top-d.png')}}" alt="">
                    <img loading="lazy" class="w-100 img-bottom" src="{{ asset('assets/images/bottom-d.png')}}" alt="">
                    <div class="d-grid gap-2 btn-d pt-4">
                      <a target="_blank"  href="https://downstreamsustainability.com/assets/pdf/PETRONAS%20Pathway%20to%20NZCE%202050%20Third%20Edition%20Apr%202023.pdf?dl=0 " class="btn btn-primary btn-1-col " type="button">PETRONAS Pathway to NZCE 2050 </a>
<!--                       <a href="https://www.dropbox.com/s/cci1vgqd4wkb6r3/2.%20Indicators%20of%20Forced%20Labour.pdf?dl=0" class="btn btn-primary btn-2-col " type="button">Indicators of Forced Labour</a>  -->
<!--                        <a href="url"-->
<!--                            class="btn btn-primary btn-3-col " type="button">Button</a>-->
<!--                       <a href="url" class="btn btn-primary btn-4-col " type="button">Button</a> -->
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