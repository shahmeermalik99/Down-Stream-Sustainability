@extends('master_2')
@section('content')
@php
$email = Auth::user()->email;
$name = Auth::user()->name;
@endphp
        <div class="main-stage">


            <div class="data-main">
                <div class="container-fluid px-lg-5 ">
                    <div class="row gy-4">
                        <div class="col-lg-8">
                            <div class="video-container">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://player.vimeo.com/video/835623807?h=9ea6593f56" allowfullscreen=""
                                        __idm_id__="681535489"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                            <button type="button" id="chat-btn" class="btn main-st  mb-2 me-3">Chat</button>
                            <button type="button" id="qa-btn" class="btn main-st mb-2"> Q&A</button>
                            </div>
                            <div class="chat-container" id="chat_container">
                                <iframe
                                    src='https://takemychat.com/widget/106?email=<?php echo $email; ?>&name=<?php echo $name;  ?>'
                                    id='downstream-sustainability-day' data-name='downstream-sustainability-day'
                                    style='box-shadow:2px 2px 8px #e7e7e7;border:0px;width:100%; height: 100%;'></iframe>
                            </div>
                            <div class="chat-container d-none" id="qa_container">
                                <iframe src="https://app.sli.do/event/8bE2tc5aoctoFfS26EQadr" height="100%" width="100%" frameBorder="0"  title="Slido"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="w-100 d-none d-lg-block mt-3" src="{{ asset('assets/images/web-aud.png')}}" alt="">
                <img class="w-100 d-lg-none" src="{{ asset('assets/images/mobile-au.png')}}" alt="">
            </div>




        <div class="copy-right-m-rp">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All rights
                reserved.
            </div>   
        </div>
         
    </div>
     <script>
      
        let chatBtn = document.querySelector("#chat-btn")
        let qaBtn = document.querySelector("#qa-btn")
        let chatContainer = document.querySelector("#chat_container")
        let qaContainer = document.querySelector("#qa_container")
        
        chatBtn.addEventListener("click",()=>{
            chatContainer.classList.remove("d-none")
            qaContainer.classList.add("d-none")
        })
        
        qaBtn.addEventListener("click",()=>{
            chatContainer.classList.add("d-none")
            qaContainer.classList.remove("d-none")
        })
        
        

        
    </script>
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