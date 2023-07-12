
     @extends('master')
@section('content')
<div class="uper-section  d-flex justify-content-center align-items-center flex-wrap">
    <div class="dot-text"><span class="blue">•</span> You <span class="green">•</span> Me <span class="orange">•</span>
        Sustainability <span class="purple">•</span></div>
    <div class="uper-text">Brought to you by DBE & PCG (PC MTBE)</div>
</div>

<div class="outer-layout pb-5">
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-6 sm-12">
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
                            <div><!--<i class="fa-sharp fa-solid fa-location-dot mt-2 icon-p"></i>ZENITH KUANTAN-->
                            </div>
                            <div class="par-re">Physical and virtual livestreaming</div>
                        </div>
                    </div>
                </div>
            
            </div>
          <div class="col-lg-6 sm-12 right-form ps-lg-5">
                <div class=" top-pad pt-2 ps-lg-5">
                    {{-- <form action="{{ route('registeration') }}" method="post"> --}}
                        <form action="" id="add_register_form">
                            <div class="login-form">
                            
                                <h2 class="mt-5 pt-2 pb-3 mb-2 col-b text-center">Registrations are closed now!</h2>
                             
                                
                                <!--<p class="text-center"></p> -->
                                <!--<div class="input-feilds mt-3">-->
                                <!--    <div class="mb-3">-->
                                <!--        <input type="text" class="custom-input" name="name" id="name" placeholder="Name"-->
                                <!--            aria-label="Name" aria-describedby="basic-addon2">-->
                                <!--        <small class="text-danger mt-1"></small>-->
                                <!--        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />-->
                                <!--    </div>-->
                                <!--    @if ($errors->has('name'))-->
                                <!--    <small class="text-danger">{{ $errors->first('name') }}</small>-->
                                <!--    @endif-->
                                <!--    <div class="mb-3">-->
                                <!--        <input type="text" class="custom-input" name="email" id="email"-->
                                <!--            placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">-->
                                <!--        <small class="text-danger mt-1"></small>-->
                                <!--    </div>-->
                                <!--    {{-- <div class="mb-3">-->
                                <!--        <input type="text" class="custom-input" name="phone_number" id="phone_number"-->
                                <!--            placeholder="Phone Number" aria-label="Phone Number"-->
                                <!--            aria-describedby="basic-addon2">-->
                                <!--        <small class="text-danger mt-1"></small>-->
                                <!--    </div> --}}-->
                                <!--    <div class="mb-3">-->
                                <!--        <select class="form-select custom-input" name="dropdown_menu" id="dropdown_menu"-->
                                <!--            aria-label="Default select example">-->
                                <!--            <option selected value="" hidden>Business Unit</option>-->
                                <!--            <option value="Downstream Corporate Office">Downstream Corporate Office-->
                                <!--            </option>-->
                                <!--            <option value="Malaysian Refining Company Sdn. Bhd.">Malaysian Refining-->
                                <!--                Company Sdn. Bhd.</option>-->
                                <!--            <option value="ASEAN Bintulu Fertilizer Sdn. Bhd.">ASEAN Bintulu Fertilizer-->
                                <!--                Sdn. Bhd.</option>-->
                                <!--            <option value="Kertih Port Sdn. Bhd.">Kertih Port Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Ammonia Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Ammonia Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Aromatics Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Aromatics Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Derivatives Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Derivatives Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Ethylene Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Ethylene Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Fertiliser Kedah Sdn. Bhd.">PETRONAS-->
                                <!--                Chemicals Fertiliser Kedah Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Fertiliser Sabah Sdn. Bhd.">PETRONAS-->
                                <!--                Chemicals Fertiliser Sabah Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Glycols Sdn. Bhd">PETRONAS Chemicals-->
                                <!--                Glycols Sdn. Bhd</option>-->
                                <!--            <option value="PETRONAS Chemicals Group Berhad">PETRONAS Chemicals Group-->
                                <!--                Berhad</option>-->
                                <!--            <option value="PETRONAS Chemicals International Holdings Sdn. Bhd.">PETRONAS-->
                                <!--                Chemicals International Holdings Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Isononanol Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Isononanol Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Ldpe Sdn. Bhd.">PETRONAS Chemicals Ldpe-->
                                <!--                Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Marketing (Labuan) Ltd">PETRONAS Chemicals-->
                                <!--                Marketing (Labuan) Ltd</option>-->
                                <!--            <option value="PETRONAS Chemicals Methanol Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Methanol Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals MTBE Sdn. Bhd.">PETRONAS Chemicals MTBE-->
                                <!--                Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Olefins Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Olefins Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Chemicals Polyethylene Sdn. Bhd.">PETRONAS Chemicals-->
                                <!--                Polyethylene Sdn. Bhd.</option>-->
                                <!--            <option value="BRB">BRB</option>-->
                                <!--            <option value="Perstorp">Perstorp</option>-->
                                <!--            <option value="PETRONAS Dagangan Berhad">PETRONAS Dagangan Berhad</option>-->
                                <!--            <option value="PETRONAS Lubricants Marketing (Malaysia) Sdn. Bhd.">PETRONAS-->
                                <!--                Lubricants Marketing (Malaysia) Sdn. Bhd.</option>-->
                                <!--            <option value="PETCO Trading (UK) Limited">PETCO Trading (UK) Limited-->
                                <!--            </option>-->
                                <!--            <option value="PETCO Trading DMCC">PETCO Trading DMCC</option>-->
                                <!--            <option value="PETCO Trading Labuan Company Ltd">PETCO Trading Labuan-->
                                <!--                Company Ltd</option>-->
                                <!--            <option value="PETRONAS Penapisan (Terengganu) Sdn. Bhd.">PETRONAS Penapisan-->
                                <!--                (Terengganu) Sdn. Bhd.</option>-->
                                <!--            <option value="Pengerang Power Sdn. Bhd.">Pengerang Power Sdn. Bhd.</option>-->
                                <!--            <option value="PETRONAS Refinery And Petrochemical Corporation Sdn. Bhd.">-->
                                <!--                PETRONAS Refinery And Petrochemical Corporation Sdn. Bhd.</option>-->
                                <!--            <option value="PRPC Utilities And Facilities Sdn. Bhd.">PRPC Utilities And-->
                                <!--                Facilities Sdn. Bhd.</option>-->
                                <!--            <option value="Engen Petroleum Ltd">Engen Petroleum Ltd</option>-->
                                <!--            <option value="PETRONAS Lubricants International">PETRONAS Lubricants-->
                                <!--                International</option>-->
                                <!--        </select>-->
                                <!--        <small class="text-danger mt-1"></small>-->
                                <!--    </div>-->
                                <!--    <div class="bot-text mt-5  text-start">-->
                                <!--        <div class="inner-text">-->
                                <!--            <div>Which session(s) will you be attending?</div>-->

                                <!--            <div class="form-check ">-->
                                <!--                <input class="form-check-input condition-check" name="activity"-->
                                <!--                    id="activity" type="checkbox" value="Interactive Activity"-->
                                <!--                    id="flexCheckDefault">-->
                                <!--                <small class="text-danger mt-1"></small>-->
                                <!--                <label class="form-check-label pt-1 ps-2 " for="activity">-->
                                <!--                    <span class="iner-check"> Amazing Race Activity</span> (12 June,-->
                                <!--                    2.30-->
                                <!--                    PM)-->
                                <!--                </label>-->
                                <!--            </div>-->
                                <!--            <div class="form-check ">-->
                                <!--                <input class="form-check-input condition-check" name="dinner"-->
                                <!--                    id="dinner" type="checkbox" value="Dinner" id="flexCheckDefault">-->
                                <!--                <small class="text-danger mt-1"></small>-->
                                <!--                <label class="form-check-label pt-1 ps-2 " for="dinner">-->
                                <!--                    <span class="iner-check"> Dinner </span> (12 June, 7.00 PM)-->
                                <!--            </div>-->
                                <!--            <div class="form-check ">-->
                                <!--                <input class="form-check-input condition-check" name="day_session"-->
                                <!--                    id="day_session" type="checkbox" value="Day 2 Session"-->
                                <!--                    id="flexCheckDefault">-->
                                <!--                <small class="text-danger mt-1"></small>-->
                                <!--                <label class="form-check-label pt-1 ps-2" for="day_session">-->
                                <!--                    <span class="iner-check"> Day 2 Sessions</span> (13 June, 9.00 AM)-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div>-->
                                <!--            <div class=" registration mt-4 mb-4">Registration closes on 12 May 2023-->
                                <!--                (Extended from 5 May 2023).-->
                                <!--                Limited seats available. Participants will be chosen based on first come-->
                                <!--                first serve basis.-->
                                <!--                Confirmed attendees will be informed via e-mail by 15 May 2023.-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <d>-->
                                <!--    </div>-->
                                <!--    <button type="submit" id="add_submit_btn"-->
                                <!--        class="btn btn-info enter-btn mb-5 ">SUBMIT</button>-->
                                <!--    <br><br>-->
                                <!--</div>-->
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
  
</div>
</div>
  <p class="copy-right">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All rights reserved.</p>
<div>



            <div class="modal fade" id="exampleModal1" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="text-center p-5">
                            <div class="thank-u">Sorry your email is not eligible to register for this event. Please email <a style="text-decoration:none; color:white;" href="mailto:admin@downstreamsustainability.com">admin@downstreamsustainability.com</a> for further clarification.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="alreadyPopup" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                            <button type="button" class="btn-close close"  data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modale-pad">
                            <div class="thank-u">Sorry this email has already been registered.</div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script>
                $("#add_submit_btn").on('click', function(e) {
                    e.preventDefault();
                    
                    
                    
                    const Fieldvalue = [];
                    Fieldvalue[0] = document.querySelector("#name");
                    Fieldvalue[1] = document.querySelector("#email");
                    // Fieldvalue[2] = document.querySelector("#phone_number");
                    Fieldvalue[2] = document.querySelector("#dropdown_menu");
                    Fieldvalue[3] = document.querySelector("#activity");
                    Fieldvalue[4] = document.querySelector("#dinner");
                    Fieldvalue[5] = document.querySelector("#day_session");
                    let conditionCheck = document.querySelectorAll(".condition-check");
                    
                    let error = 0;
                    for (let i = 0; i <= Fieldvalue.length - 1; i++) {
                        if (Fieldvalue[i].value == '') {
                            Fieldvalue[i].nextElementSibling.innerHTML = "This field is required";
                            error++;
                        } else {
                            Fieldvalue[i].nextElementSibling.innerHTML = "";
                        }

                    }
                    let feildChecks = 0
                    conditionCheck.forEach(check => {
                        if(check.checked){
                            console.log(check.value)
                            feildChecks = 1
                            $("#atleast").remove()
                        }
                    })
                    
                    if(feildChecks != 1){
                            error++
                            $(".inner-text").prepend("<small id='atleast' class='text-danger'>At least one item must be checked</small>")
                        }
                    
                    
                    
                    if(error == 0){
                        console.log("comming")
                        var name = $("#name").val();
                        var email = $("#email").val();
                        // var phone_number = $("#phone_number").val();
                        var dropdown_menu = $("#dropdown_menu").val();
                        if ($("#activity").prop('checked') == true) {
                            var activity = $("#activity").val();
                        } else {
                            activity = '';
                        }
                        if ($("#dinner").prop('checked') == true) {
                            var dinner = $("#dinner").val();
                        } else {
                            dinner = '';
                        }
                        if ($("#day_session").prop('checked') == true) {
                            var day_session = $("#day_session").val();
                        } else {
                            day_session = '';
                        }
                        var _token = $("#_token").val();
                        console.log(_token);
                        $.ajax({
                            url: "{{ url('registeration') }}",
                            type: "POST",
                            data: {
                                name: name,
                                email: email,
                                // phone_number: phone_number,
                                dropdown_menu: dropdown_menu,
                                activity: activity,
                                dinner: dinner,
                                day_session: day_session,
                                _token: _token,
                            },
                            success: function(data) {
                                console.log(data);
                                if (data.status == 200) {
                                    $('#exampleModal').modal('show');
                                }
                                else if(data.status == 400){
                                    $('#exampleModal1').modal('show');
                                }
                                else if(data.message == "already"){
                                    $('#alreadyPopup').modal('show');
                                }
                            }
                        });
                    }
                });
                // window.onload = function what() {
                //     document.querySelector("#add_submit_btn").addEventListener("click", function(event) {
                //         event.preventDefault();
                        
                //     });
                // }

                function reload() {
                    location.reload();
                }
            </script>
        @endsection
