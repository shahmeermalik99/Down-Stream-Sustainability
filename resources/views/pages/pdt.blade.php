@extends('master_2')
@section('content')
<style>
body{
    background:transparent !important;
}
</style>
    <div class="position-relative">
         <img class="img-fluid img-bg-both-web" src="{{asset('assets/images/web-blue.png')}}" alt="">
        <img class="img-fluid img-bg-both-mobile" src="{{asset('assets/images/mob-blue.png')}}" alt="">

        <div class="container-fluid">
            <div class="data-mai">
                <div class="blue-poly">
                    <p class="geng-both ">Innovations<br> for a <br>Sustainable<br> Future</p>
                </div>


                <div class="blu-poly">
                    <div class="both-para">
                        <p>Project Delivery and Technology (PD&T) division serves as PETRONAS’ Centre of Excellence (CoE). 
                        We have a vital role in shaping and supporting the Group’s growth strategies and realising our NZCE 2050 pathway. 
                        We do this through best-in-class project delivery, extensive research and development in technology, leading technical expertise and novel digital solutions.As a safe, reliable and progressive solutions partner, we continue safeguarding, shaping and offering solutions that accelerate PETRONAS’ growth and future positioning ventures. 
                        We pursue the transformation towards a sustainable future by leveraging data as an asset, digital as an accelerator and technology as a differentiator. We strive for progress in decarbonisation, value creation and business expansion beyond hydrocarbons through a well-established and expanding innovation ecosystem.
                        <br><br>
                        <a target="_blank" href="https://mypetronas.com/pdt/project-delivery-technology">https://mypetronas.com/pdt/project-delivery-technology</a><br>
                        <a target="_blank" href="https://myexplorer.petronas.com/UserPortal/hashtag/pdtsustainability">https://myexplorer.petronas.com/UserPortal/hashtag/pdtsustainability</a><br>
                        <a target="_blank" href="https://www.race2decarbonise.petronas.com/">https://www.race2decarbonise.petronas.com/</a><br>
                        <a target="_blank" href="https://mypetronas.com/nervcentre/index">https://mypetronas.com/nervcentre/index</a><br>
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
              <!--<button type="button" class="btn both-btns both-down btn-hov"data-bs-toggle="modal" data-bs-target="#pdf-down">Download PDF</button>-->
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
                                <iframe src="https://player.vimeo.com/video/828890681?h=2d2ed0791e" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828890246?h=0447126cae" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828888474?h=b3502dd3d0" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828887238?h=207e558327" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div> <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828886663?h=77355bd32e" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div> <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828885789?h=8f683249d1" allowfullscreen=""
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
                           <a href="{{ asset('assets/images/dbe-esv-1.png')}}" data-lightbox="image-1" >
                        <img loading="lazy" class="w-100" src="{{ asset('assets/images/ENTERPRISEDECARBONISATIONSuperchargingeffortstomeetNZCE2050.jpg')}}" alt="">
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
                      <a target="_blank" href="" class="btn btn-primary btn-1-col " type="button">Button </a>
                       <a target="_blank"href="" class="btn btn-primary btn-2-col " type="button">Button</a>  
                        <a target="_blank" href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                       <a target="_blank" href="url" class="btn btn-primary btn-4-col " type="button">Button</a> 
                       <a target="_blank" href="url" class="btn btn-primary btn-5-col " type="button">Button</a> 
                      <a target="_blank"href="url" class="btn btn-primary btn-1-col  " type="button">Button</a> 
AZR
Success!
                       <a target="_blank" href="url" class="btn btn-primary btn-2-col " type="button">Button</a> 
                        <a target="_blank" href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                        <a target="_blank"href="url" class="btn btn-primary btn-4-col " type="button">Button></a>
                       <a target="_blank"href="url" class="btn btn-primary btn-5-col" type="button">Button</a>  

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