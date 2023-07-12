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
                    <p class="geng-both ">Petrosains <br> Sdn Bhd</p>
                </div>


                <div class="white-poly">
                    <div class="both-para">
                        <p>Petrosains Sdn. Bhd. is a wholly owned subsidiary of Petroliam Nasional Berhad (PETRONAS), that leads and steers the business and visit operations of two distinctive institutions in Malaysia - Petrosains, The Discovery Centre and the world-renowned PETRONAS Twin Towers. Interactive, experiential, and hands-on, Petrosains, The Discovery Centre is everything a science centre should be. With exhibits, in-reach and outreach activities that make the learning of STEM (science, technology, engineering and mathematics) fun, Petrosains is an extension of PETRONAS’ commitment to nation-building by nurturing the interest in STEM and driving the creation of a new generation of science and technology-minded, innovation-inspired Malaysians.

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
                                <iframe src="https://player.vimeo.com/video/832812673?h=e1ea4fc003" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832812658?h=f34420d4cb" allowfullscreen=""
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
                         <a href="{{ asset('assets/images/Petrosains-Slide1_BC23.png')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Petrosains-Slide1_BC23.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/Petrosains-Slide2.png')}}"  data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/Petrosains-Slide2.png')}}" alt="">
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
                      <a target="_blank" href="https://downstreamsustainability.com/assets/pdf/Petrosains%20Doc_E_BrochureENG.pdf?dl=0" class="btn btn-primary btn-1-col " type="button"> Petrosains Doc E Brochure ENG</a>
                       <a target="_blank"href="https://downstreamsustainability.com/assets/pdf/Petrosains%20Doc_E_BrochureBM.pdf?dl=0" class="btn btn-primary btn-2-col " type="button"> Petrosains Doc E Brochure MB</a>  
<!--                        <a target="_blank"href="url"-->
<!--                            class="btn btn-primary btn-3-col " type="button">Button</a>-->
<!--                       <a target="_blank"href="url" class="btn btn-primary btn-4-col " type="button">Button</a> -->
<!--                       <a target="_blank" href="url" class="btn btn-primary btn-5-col " type="button">Button</a> -->
<!--                      <a target="_blank"href="url" class="btn btn-primary btn-1-col  " type="button">Button</a> -->
<!--AZR-->
<!--Success!-->
<!--                       <a target="_blank"href="url" class="btn btn-primary btn-2-col " type="button">Button</a>  Petrosains Doc E Brochure MB-->
<!--                        <a target="_blank"href="url"-->
<!--                            class="btn btn-primary btn-3-col " type="button">Button</a>-->
<!--                        <a target="_blank"href="url" class="btn btn-primary btn-4-col " type="button">Button></a>-->
<!--                       <a target="_blank"href="url" class="btn btn-primary btn-5-col" type="button">Button</a>  -->

<!--                    </div>-->


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