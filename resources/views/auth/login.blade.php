@extends('master_2')
@section('content')
<div class="outer-layout ">
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-7 sm-12">
                <div class="row">
                    <div class="col-5">
                        <img class="img-fluid sd-img" src="{{ asset('assets/images/SD23-img.png') }}" alt="">
                    </div>
                    <div class="col-7">
                        <div class="downstream-day mt-lg-3">
                            <div class="twenty-twentythree">DOWNSTREAM
                                SUSTAINABILITY
                                DAY <span class="downst"> 2023</span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <div><!--<i class="fa-solid fa-calendar-days mt-3 icon-p"></i>12 - 13 JUNE--></div>
                            <div><!--<i class="fa-sharp fa-solid fa-location-dot mt-2 icon-p"></i>ZENITH KUANTAN--></div>
                            <div class="par-re">Physical and virtual livestreaming</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 downstream-para pb-5">
                    <p>
                        Welcome to Downstream Sustainability Day 2023! This will be the first of the annual event for Downstream on sustainability, organised and co-hosted by Downstream Business Excellence and PCG (PC MTBE) in Kuantan, 12 & 13 June 2023.</strong>
                    </p>
                    <p>
                        This inaugural event aims at <strong>enhancing knowledge</strong> within Downstream, to <strong>accelerate change</strong> on sustainability and help the business to continuously <strong>meet its sustainability targets.</strong>
                    </p>
                    <p>
                        With the theme <strong>You. Me. Sustainability</strong>, the programme content will focus and expand on all PETRONAS 4 Sustainability Lenses. This event is also envisioned to provide a <strong>platform for discussion</strong> on sustainability-related topics and to <strong>explore potential collaborations and solutions.</strong>
                    </p>
                    <p>Scroll down to view more!</p>
                </div>
            </div>
            <div class="col-lg-5 right-form text-center">
                <div class=" top-pad pt-2">

                    <form action="{{ route('login') }}" method="POST" id="add_register_form">
                        @csrf
                        <div class="login-form pb-5">
                            <h2 class="mt-5 pt-2 pb-3 mb-4 col-b">Login</h2>
                            <div class="input-feilds text-center mt-3">
                                <div class="mb-3">
                                    <input type="email" class="custom-input" name="email" :value="old('email')" required
                                        id="email" placeholder="PETRONAS Email" aria-label="Name"
                                        aria-describedby="basic-addon2">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <h6 class="text-danger"></h6>
                                    <input type="hidden" id="passowrd" name="password" value="12345678" />
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="custom-input" name="name" id="name" required
                                        placeholder="Preferred Name" aria-label="E-mail"
                                        aria-describedby="basic-addon2">
                                    <h6 class="text-danger"></h6>
                                </div>


                                <div class="inner-text">
                                    <div class="  text-start ol-list">
                                        <ol>
                                            <li>Log in with your full email address (i.e john@petronas.com.my)
                                            </li>
                                            <br>
                                            <li> For seamless virtual experience, please access the virtual platform
                                                via Microsoft EDGE and don't forget to clear your cache.
                                            </li>
                                            <br>
                                            <li> For an undisrupted viewing experience, do ensure your internet
                                                connection is strong.
                                            </li>
                                            <br>
                                            <li> You may watch the recorded sessions from 13 June onwards. This
                                                platform is accessible until 13 July 2023
                                            </li>
                                            <br>
                                            <!--<li>For any technical enquiries (i.e login related),
                                                please <a href="mailto:admin@downstreamsustainability.com">CLICK HERE</a>.</li>
                                                <br>-->
                                            <!--<li> For non-downstream participants you may watch the live stream on Dot App or via MS Teams in the below links:<br><br>

<a href="https://teams.microsoft.com/l/meetup-join/19%3ameeting_NTZmNTdjMTAtOWQ3MS00ZDMxLTgyODItYWEyMGUzMjM0Njcw%40thread.v2/0?context=%7B%22Tid%22%3A%223b2e8941-7948-4131-978a-b2dfc7295091%22%2C%22Oid%22%3A%2259a57ba8-a27d-4637-8d9c-94027bd6a4b4%22%2C%22IsBroadcastMeeting%22%3Atrue%2C%22role%22%3A%22a%22%7D&btype=a&role=a">SD23 - Day 1 (12 June 2023)</a><br>
<br><a href="https://teams.microsoft.com/l/meetup-join/19%3ameeting_M2I4ZGI4ZjAtYTMzZS00MzcyLTk4NTktYzUxZjkwMmYxOWIx%40thread.v2/0?context=%7B%22Tid%22%3A%223b2e8941-7948-4131-978a-b2dfc7295091%22%2C%22Oid%22%3A%2259a57ba8-a27d-4637-8d9c-94027bd6a4b4%22%2C%22IsBroadcastMeeting%22%3Atrue%2C%22role%22%3A%22a%22%7D&btype=a&role=a">SD23 - Day 2 (13 June 2023)</a></li>-->
                                            
                                        </ol>
                                    </div>
                                </div>
                                <button type="submit" id="add_submit_btn" class="btn btn-info enter-btn mt-4 mb-3 ">LOGIN</button>
                                <a target="_blank" href="{{ asset('assets/pdf/SD23-Joining-Instructions-(Virtual).pdf') }}" type="submit" id="add_submit_btn" class="btn btn-info enter-btn mb-5 ">Download Joining Instruction</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-info mt-4">
    
    <div class="video-sec ">

    <div class="container py-lg-5 pt-5">
        <div class="ratio ratio-16x9 "> <a id="sazalivideo"></a>
            <iframe src="https://player.vimeo.com/video/832073457?h=5fa0f0381e" allowfullscreen=""
                idm_id="681535489"></iframe>
        </div>
    </div>
    <div class="bottom-leafs pt-lg-5 mt-5">
        <img src="{{ asset('assets/images/leaf-3.png') }}" class="img-fluid leaf-3" alt="">
        <img src="{{ asset('assets/images/leaf-4.png') }}" class="img-fluid leaf-4" alt="">
        <img src="{{ asset('assets/images/3-butterflies.png') }}" class="butterflies-3" alt="">
        <img src="{{ asset('assets/images/hormbill.png') }}" class="hormbill" alt="">
    </div>
    </div>
<!--<div class="top-leafs">
            <img src="{{ asset('assets/images/leaf-1.png') }}" class="img-fluid leaf-1" alt="">
            <img src="{{ asset('assets/images/leaf-2.png') }}" class="img-fluid leaf-2" alt="">
            <img src="{{ asset('assets/images/squirrel.png') }}" class="squirrel" alt="">
            <img src="{{ asset('assets/images/2-butterflies.png') }}" class="butterflies-2" alt="">
        </div>
        <div class="container py-5 mb-lg-5">
            <h2 class="mt-lg-5 pt-lg-5">Latest Info</h2>
            <div class="row g-4 mb-lg-5 pb-5">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Posters_Info-1.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Posters_Info-2.png') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
        <div class="bottom-leafs pt-lg-5 mt-5">
            <img src="{{ asset('assets/images/leaf-3.png') }}" class="img-fluid leaf-3" alt="">
            <img src="{{ asset('assets/images/leaf-4.png') }}" class="img-fluid leaf-4" alt="">
            <img src="{{ asset('assets/images/3-butterflies.png') }}" class="butterflies-3" alt="">
            <img src="{{ asset('assets/images/hormbill.png') }}" class="hormbill" alt="">
        </div>-->
    </div>
    <!--
     <div class="lower-section ">
        <img class="img-2-bg img-fluid" src="{{ asset('assets/images/mobile-img.png') }}" alt="">
        <img class="img-2bg2 img-fluid" src="{{ asset('assets/images/bg2.png') }}" alt="">
        <h2 class="program-heading">Programmes</h2>
        <div class="programs-hexagon hexagon-1">
            <p class="programs-date"><strong>DAY 2</strong> <br> 13 June 2023</p>
            <h2 class="program-name">Speakers Corner</h2>
            <div class="program-details">
                <div class="program-time">10.50 AM</div>
                <div class="detail">Inculcating Knowledge on Environmental, Social & Governance (ESG) Across Managed Projects <hr></div>
               
                <div class="program-time"></div>
                <div class="detail">Decarbonisation of PETRONAS CO<sub>2</sub> Emission - Upstream Perspective</div>
                <hr>
                
                <div class="program-time">3.30 PM </div>
                <div class="detail">Robust Process Safety Management and Practices towards a Pragmatic Sustainable Development <hr></div>
               
                <div class="program-time"></div>
                <div class="detail">Sustainability at Petronas <br>Chemicals MTBE</div>
            </div>
        </div>
        <div class="programs-hexagon hexagon-2">
            <p class="programs-date"><strong>DAY 1</strong> <br> 12 June 2023</p>
            <h2 class="program-name">Amazing Race</h2>
            <div class="program-details">
                <div class="program-time">2.30 PM</div>
            </div>
        </div>
        <div class="programs-hexagon hexagon-3">
            <p class="programs-date"><strong>DAY 2</strong> <br> 13 June 2023</p>
            <h2 class="program-name">Panel Discussion</h2>
            <div class="program-details">
                <div class="program-time">10.10 AM </div>
                <div class="detail">Sustainability Risk & Opportunities: Turning Strategy Into Action</div>
                <hr>
                <div class="program-time">11.40 AM</div>
                <div class="detail">Operationalising Sustainability (Environment)</div>
                <hr>
                <div class="program-time">2.20 PM</div>
                <div class="detail">Operationalising Sustainability (Social Impact)</div>
            </div>
        </div>
        <div class="programs-hexagon hexagon-4">
            <p class="programs-date"><strong>DAY 2</strong> <br> 13 June 2023</p>
            <h2 class="program-name">Lucky Draw</h2>
            <div class="program-details">
                <div class="program-time">12.20 PM </div>
                <div class="detail">Lucky Draw 1</div>
                <hr>
                <div class="program-time">3.00 PM</div>
                <div class="detail">Lucky Draw 2</div>
                <hr>
                <div class="program-time">4.00 PM</div>
                <div class="detail">Grand Lucky Draw</div>
            </div>
        </div>      <div class="programs-hexagon hexagon-5">
            <p class="programs-date"><strong>DAY 2</strong> <br> 13 June 2023</p>
            <h2 class="program-name">In the Spotlight</h2>
            <div class="program-details">
                <div class="program-time">9.50 AM</div>
                <div class="detail">Ir. Mohd Yusri Mohamed Yusof</div>
                <hr>
                <div class="program-time">11.20 AM</div>
                <div class="detail">Kamal Bahrin Ahmad </div>
                <hr>
                <div class="program-time">2.00 PM</div>
                <div class="detail"> Ahmad Adly Alias </div>
                <hr>
                <div class="program-time">3.10 PM</div>
                <div class="detail"> Azrul Osman Rani</div>
            </div>
        </div>
         <div class="programs-hexagon hexagon-6">
            <p class="programs-date"><strong>DAY 2</strong> <br> 13 June 2023</p>
            <h2 class="program-name">Keynote<br> Address</h2>
            <div class="program-details">
               
                <div class="detail ps-1 text-center">9.05 AM<br>Datuk Sazali Hamzah<br> EVP & CEO Downstream</div>
                
                
            </div>
        </div>
        <p class="copy-right">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All rights reserved.</p>
    </div>
    -->
</div>

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