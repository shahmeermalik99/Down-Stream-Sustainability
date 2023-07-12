@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
</style>
    <div class="position-relative">
       <img loading="lazy" class="img-fluid img-bg-both-web" src="{{asset('assets/images/web-green2.png')}}" alt="">
        <img loading="lazy" class="img-fluid img-bg-both-mobile" src="{{asset('assets/images/mob-green2.png')}}" alt="">

        <div class="container-fluid">
            <div class="data-mai">
                <div class="green2-poly">
                    <p class="geng-both ">PCG<br>Sustainability<br> at the Core</p>
                </div>


                <div class="gree-poly">
                    <div class="both-para">
                       Chemicals play a crucial role in our daily lives by providing the building blocks that make up the necessities of life. However,
the current approach in producing chemicals has placed an immense burden on our natural resources, which is finite by
nature. Further, the current linear plastic economy is unsustainable and harmful to the environment, especially when
coupled with irresponsible usage and disposal.

Thus, a paradigm shift is required, to transform the linear economy into a one that is circular and sustainable. In a circular
economy, resources are continuously recirculated instead of being turned to waste. Crucially, circularity enables us to
tackle climate change while allowing nature to regenerate.

PCG believes that through our New Plastics Economy (NPE) agenda, we can help to achieve this, by removing harmful
plastic waste from the environment and turning it into a useful resource. Further, we are working towards increasing the
proportion of sustainable feedstock within our business as well as continually looking for opportunities to turn waste into
resources.

New Plastics Economy | PETRONAS Chemicals Group Berhad (PCG)

<a href="https://circulareconomy.petronas.com/WhatIsCE">https://circulareconomy.petronas.com/WhatIsCE</a>
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
                                <iframe src="https://player.vimeo.com/video/831388105?h=91392ae004" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/831388206?h=dc7b6d1896" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/831388265?h=442d65a174" allowfullscreen=""
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
                    <a href="{{ asset('assets/images/PCG-Slide-1.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-1.JPG')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/PCG-Slide-2.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-2.JPG')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/PCG-Slide-3.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-3.JPG')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/PCG-Slide-4.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-4.JPG')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/PCG-Slide-5.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-5.JPG')}}" alt="">
                            </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/PCG-Slide-6.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy"  class="w-100" src="{{ asset('assets/images/PCG-Slide-6.JPG')}}" alt="">
                            </a>
                    </div>
                    <div class="item">
                           <a href="{{ asset('assets/images/PCG-Slide-7.JPG')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/PCG-Slide-7.JPG')}}" alt="">
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
                        <a target="_blank" href="https://downstreamsustainability.com/assets/pdf/PCG-TCFD-Report 2022_Website.pdf" class="btn btn-primary btn-1-col " type="button">PETRONAS TCFD Report 2022</a>
                        <a target="_blank" href="https://downstreamsustainability.com/assets/pdf/PETRONAS-PCG-NPE-Secondary-English-sustainability-smk-eng.pdf" class="btn btn-primary btn-1-col " type="button">Sustainability for Tomorrow</a>
<!--                      <a target="_blank" href="" class="btn btn-primary btn-1-col " type="button">Button</a>
                       <a target="_blank" href="" class="btn btn-primary btn-2-col " type="button">Button</a>  
                        <atarget="_blank"  href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                       <a target="_blank"  href="url" class="btn btn-primary btn-4-col " type="button">Button</a> 
                       <a  target="_blank" href="url" class="btn btn-primary btn-5-col " type="button">Button</a> 
                      <a target="_blank" href="url" class="btn btn-primary btn-1-col  " type="button">Button</a> 
AZR
Success!
                       <a target="_blank"  href="url" class="btn btn-primary btn-2-col " type="button">Button</a> 
                        <a target="_blank" href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                        <a  target="_blank" href="url" class="btn btn-primary btn-4-col " type="button">Button></a>
                       <a target="_blank" href="url" class="btn btn-primary btn-5-col" type="button">Button</a>  -->

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