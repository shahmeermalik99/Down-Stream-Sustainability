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
                    <p class="geng-both ">Pengerang <br> Integrated<br> Complex<br>Sustainability<br>Journey</p>
                </div>


                <div class="gree-poly">
                    <div class="both-para">
                        <p>Pengerang Integrated Complex (PIC) is PETRONAS’ largest greenfield petrochemical complex. The Vision is for PIC to become THE Regional Petrochemical Park - a distinctive one-stop solution provider that is competitive and sustainable for all stakeholders.
                        <br><br>PIC adopts appropriate technology to trim carbon emissions. Innovative technologies embedded in engineering design reduces projected yearly carbon emissions by more than a quarter. Leveraging on the availability of land and surfaces in PIC, over 40MWp solar power (with potential expansion) was installed to provide renewable mix to our energy portfolio. Also, in our endeavor to further reduce carbon emission, PIC pioneered the adoption and aspired to achieve 64 EV four-wheelers to assist our daily operation in the park.
                        <br><br>Being surrounded by local villages, PIC pledged to continue uplifting the socio-economic and wellbeing of the community. PIC takes its positive social impact seriously and a key sustainable feature is the #ForPengerang programme. Among others, the many and varied initiatives under this programme have developed skills, entrepreneurship, and restored livelihoods of the local people, while carrying out environmental protection and conservation activities, both in PIC as well as the community.
                        <br><br>Pengerang Integrated Complex<br><br>
                        <a target="_blank" href="https://petronas.com/pic">https://petronas.com/pic</a></p>
                    </div>
                    <button data-bs-toggle="modal" data-bs-target="#info-popup"class="read-more-btn btn-hov">Read More</button>
                </div>
                
                <div class="info-popup">
                    <button type="button" class="btn-close info-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--https://petronas.com/pic-->
                    <p class="mb-0">
                    </p>
                </div>
                <div class="info-overlay"></div>

                <div class="video-both">
                    <div class="vid-section3 ">
                        <img class="img-fluid w-100" src="{{asset('assets/images/ply-vid.png')}}" alt="">
                    </div>
                </div>
                <img class="img-fluid slides-imges" src="{{asset('assets/images/booth-slide.png')}}" alt="">
              <!--<button type="button" class="btn both-btns both-down btn-hov"data-bs-toggle="modal" data-bs-target="#pdf-down">Download PDF</button>-->
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
                                <iframe src="https://player.vimeo.com/video/828727723?h=29da2b5e06" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828727879?h=a7f84a45fe" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828728367?h=dfae90de33" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/832643569?h=82487b0f78" allowfullscreen=""
                                    _idm_id_="681535489"></iframe>
                            </div>
                        </div>
                    </div
                     <div class="item">
                        <div class="vid-section1 ">
                            <div class="ratio ratio-16x9 ">
                                <iframe src="https://player.vimeo.com/video/828728861?h=813ea32baa" allowfullscreen=""
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
                          <a href="{{ asset('assets/images/PRPC-Slide-1-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-1-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-2-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-2-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-3-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-3-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-4-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-4-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-5-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-5-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-6-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-6-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-7-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-7-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-8-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-8-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-9-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-9-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-10-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-10-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-11-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-11-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-12-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-12-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-13-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-13-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-14-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-14-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-15-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-15-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-16-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-16-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-17-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-17-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PRPC-Slide-18-min.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PRPC-Slide-18-min.png')}}" alt=""> 
                        </a>
                    </div>
                    <!--
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 02.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 02.jpg')}}" alt="">
                          </a>
                    </div>
                    <div class="item"> 
                    <a href="{{ asset('assets/images/PIC Slide 03.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 03.jpg')}}" alt="">
                          </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 04.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 04.jpg')}}" alt="">
                          </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 05.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 05.jpg')}}" alt="">
                          </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 06.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 06.jpg')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 07.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 07.jpg')}}" alt="">
                          </a>
                    </div>
                    <div class="item">
                         <a href="{{ asset('assets/images/PIC Slide 08.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 08.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 09.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 09.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 10.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 10.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 11.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 11.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 12.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 12.jpg')}}" alt="">
                         </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 13.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 13.jpg')}}" alt=""> 
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/PIC Slide 14.jpg')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/PIC Slide 14.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                          <a href="{{ asset('assets/images/prpc-slide-new.png')}}" data-lightbox="image-1" >
                        <img class="w-100" src="{{ asset('assets/images/prpc-slide-new.png')}}" alt="">
                        </a>
                    </div>-->
                    
                   

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
                      <a target="_blank" href="" class="btn btn-primary btn-1-col " type="button">Button</a>
                       <a target="_blank"href="" class="btn btn-primary btn-2-col " type="button">Button</a>  
                        <a target="_blank" href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                       <a target="_blank" href="url" class="btn btn-primary btn-4-col " type="button">Button</a> 
                       <a  target="_blank"href="url" class="btn btn-primary btn-5-col " type="button">Button</a> 
                      <a  target="_blank"href="url" class="btn btn-primary btn-1-col  " type="button">Button</a> 
AZR
Success!
                       <a target="_blank" href="url" class="btn btn-primary btn-2-col " type="button">Button</a> 
                        <a target="_blank" href="url"
                            class="btn btn-primary btn-3-col " type="button">Button</a>
                        <a target="_blank" href="url" class="btn btn-primary btn-4-col " type="button">Button></a>
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