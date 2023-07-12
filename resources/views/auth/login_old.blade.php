<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
<!--@extends('master_2')-->
<!--@section('content')-->
<!--    <div class="outer-layout pb-5">-->
<!--        <div class="container py-5">-->
<!--            <div class="row ">-->
<!--                <div class="col-lg-7 sm-12">-->
<!--                    <div class="row">-->
<!--                        <div class="col-5">-->
<!--                            <img class="img-fluid sd-img" src="assets/images/SD23-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="col-7">-->
<!--                            <div class="downstream-day mt-lg-3">-->
<!--                                <div class="twenty-twentythree">DOWNSTREAM-->
<!--                                    SUSTAINABILITY-->
<!--                                    DAY <span class="downst"> 2023</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="icon-text">-->
<!--                                <div><i class="fa-solid fa-calendar-days mt-3 icon-p"></i>12 - 13 JUNE</div>-->
<!--                                <div><i class="fa-sharp fa-solid fa-location-dot mt-2 icon-p"></i>ZENITH KUANTAN</div>-->
<!--                                <div class="par-re">Physical and virtual livestreaming</div>-->
<!--                              </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-3 downstream-para pb-5">-->
<!--                        <p>-->
<!--                            Downstream Sustainability Day 2023, organised and co-hosted by Downstream Business Excellence and PCG (PC MTBE) on 12 & 13 June 2023, will be the <strong> first of the annual event for Downstream on sustainability.</strong>-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            This inaugural event aims at <strong> enhancing knowledge within Downstream, to accelerate change on sustainability and help the business to continuously meet its sustainability targets.</strong>-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            With the theme <strong> You. Me. Sustainability,</strong> the programme content will focus and expand on all PETRONAS 4 Sustainability Lenses. This event is also envisioned to provide a <strong> platform for discussion on sustainability-related topics </strong> and to explore potential collaborations and solutions.-->
<!--                        </p>-->
<!--                        <p>Scroll down to view more!</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-5 right-form text-center">-->
<!--                    <div class=" top-pad pt-2">-->

<!--                        <form  method="POST" action="{{ route('login') }} id="add_register_form">-->
<!--                         @csrf-->
<!--                            <div class="login-form pb-5">-->
<!--                                <h2 class="mt-5 pt-2 pb-3 mb-4 col-b">Login</h2>-->
<!--                                <div class="input-feilds text-center mt-3">-->
<!--                                    <div class="mb-3">-->
<!--                                        <input type="email" class="custom-input" name="email" :value="old('email')" required id="email" -->
<!--                                            placeholder="PETRONAS Email" aria-label="Name"-->
<!--                                            aria-describedby="basic-addon2">-->
<!--                                        <h6 class="text-danger"></h6>-->
<!--                                        <input type="hidden" id="passowrd" name="password" value="12345678" />-->
<!--                                    </div>-->

<!--                                    <div class="mb-3">-->
<!--                                        <input type="text" class="custom-input" name="name" id="name"-->
<!--                                            placeholder="Preferred Name" aria-label="E-mail"-->
<!--                                            aria-describedby="basic-addon2">-->
<!--                                        <h6 class="text-danger"></h6>-->
<!--                                    </div>-->
<!--                                    <button type="submit" id="add_submit_btn btn-text"-->
<!--                                        class="btn btn-info enter-btn mt-4 mb-5 ">SUBMIT-->
<!--                                    </button>-->

<!--                                    <div class="inner-text">-->
<!--                                        <div class="  text-start ol-list">-->
<!--                                            <ol>-->
<!--                                                <li>Log in with your full email address (i.e john@petronas.com.my)-->
<!--                                                </li>-->
<!--                                                <br>-->
<!--                                                <li> For seamless virtual experience, please access the virtual platform-->
<!--                                                    via Microsoft EDGE and don't forget to clear your cache.-->
<!--                                                </li>-->
<!--                                                <br>-->
<!--                                                <li> For an undisrupted viewing experience, do ensure your internet-->
<!--                                                    connection is strong.-->
<!--                                                </li>-->
<!--                                                <br>-->
<!--                                                <li> You may watch the recorded sessions from 23 March onwards. This-->
<!--                                                    platform is accessible until 31 March 2023-->
<!--                                                </li>-->
<!--                                                <br>-->
<!--                                                <li>For any technical enquiries (i.e login related),-->
<!--                                                    please CLICK HERE.</li>-->
<!--                                            </ol>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <d>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                    </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"-->
<!--        aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-dialog-centered modal-lg">-->

<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>-->
<!--                    <button type="button" class="btn-close close" onclick="reload()" data-bs-dismiss="modal"-->
<!--                        aria-label="Close"></button>-->
<!--                </div>-->
<!--                <div class="modale-pad">-->
<!--                    <div class="thank-u">Thank you for registering!</div>-->
<!--                    <div class="thank-u1">You will receive an e-mail from admin@downstreamsustainability.com to-->
<!--                        confirm your-->
<!--                        attendance by 12 May 2023.</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="latest-info pb-5">-->
<!--        <div class="container py-5">-->
<!--            <h2>Latest Inof</h2>-->
<!--            <div class="row g-4">-->
<!--                <div class="col-lg-6">-->
<!--                    <img src="assets/images/info.png" class="w-100" alt="">-->
<!--                </div>-->
<!--                <div class="col-lg-6">-->
<!--                    <img src="assets/images/info.png" class="w-100" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="lower-section ">-->
<!--        <img class="img-2-bg img-fluid" src="assets/images/mobile-img.png" alt="">-->
<!--        <img class="img-2bg2 img-fluid" src="assets/images/downstream-bg.png" alt="">-->
<!--        <h3 class="program mt-5 pt-5 text-center">Programmes</h3>-->
<!--        <div class="orag ">-->

<!--            <div class="orng-text mt-3">-->
<!--                <p class="first-head mt-2 mb-1">DAY 2<br>-->
<!--                    13 June 2023</p>-->
<!--                <p class="snd-head pt-1 mb-1">Speaker Corner</p>-->
<!--                <p class="third-norm pt-1 mb-3"><span class="normal">10.45 AM </span>&nbsp; Contract Management --->
<!--                    Project<br> &nbsp;-->
<!--                    &nbsp; &nbsp;-->
<!--                    &nbsp; &nbsp; &nbsp; &nbsp; Carbon Management - CCS</p>-->
<!--                <p class="thir-norm pt-1 mb-5 "><span class="normal">3.15 PM </span> &nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                    Sustainable Process Safety<br> &nbsp; &nbsp;-->
<!--                    &nbsp;-->
<!--                    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Sustainability in PC MTBE</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="green1">-->
<!--            <div class="orng-text ">-->
<!--                <p class="first-head mt-1 ">DAY 2<br>-->
<!--                    13 June 2023</p>-->
<!--                <p class="snd-head ">In the Spotlight</p>-->
<!--                <p class="third-norm-gg ">9.40 AM &nbsp; In the Spotlight 1</p>-->
<!--                <p class="third-norm-gg  ">11.15 AM &nbsp; In the Spotlight 2</p>-->
<!--                <p class="third-norm-gg ">2.00 PM &nbsp; In the Spotlight 3</p>-->
<!--                <p class="thir-norm-g  ">3.15 PM &nbsp; In the Spotlight 4</p>-->


<!--            </div>-->

<!--        </div>-->
<!--        <div class="blue1">-->
<!--            <div class="orng-text">-->
<!--                <p class="first-head-b mt-2 mb-1">DAY 2<br>-->
<!--                    13 June 2023</p>-->
<!--                <p class="snd-head pt-1 mb-1">Panel Discussion</p>-->
<!--                <p class="third-norm-b pt-1 "><span class="normal-b">10.00 AM </span>&nbsp; Sustainability Risk &-->
<!--                    Oppotunities: <br> &nbsp;-->
<!--                    &nbsp; &nbsp;-->
<!--                    &nbsp; &nbsp; &nbsp; &nbsp; Turning Strategy Into Action</p>-->
<!--                <p class="third-norm-b pt-2   "><span class="normal-b">11.35 AM </span> &nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                    Operationalising Sustainability<BR> (Environment) </p>-->
<!--                <p class="thir-norm pt-2   "><span class="normal-b">2.20 AM </span> &nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                    Operationalising Sustainability-->
<!--                    <BR> (Social Impact)-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="gree">-->
<!--            <div class="orng-text ">-->
<!--                <p class="first-head-p  mt-3">DAY 2<br>-->
<!--                    13 June 2023</p>-->
<!--                <p class="snd-head-p  mb-2">Lucky Draw</p>-->
<!--                <p class="third-norm-g  ">12.10 AM &nbsp;Lucky Draw 1</p>-->
<!--                <p class="third-norm-g pt-1 ">12.10 AM &nbsp;Lucky Draw 2</p>-->
<!--                <p class="thir-norm-g pt-1  mb-5 ">4.15 PM &nbsp;&nbsp;Grand Lucky Draw </p>-->

<!--            </div>-->

<!--        </div>-->
<!--        <div class="purpl">-->
<!--            <div class="orng-text">-->
<!--                <p class="first-head-p  mt-lg-4 mb-lg-3">DAY 1<br>-->
<!--                    12 June 2023</p>-->
<!--                <p class="snd-head-p pt-lg-2 mb-lg-2">Amazing <br>Race</p>-->
<!--                <p class="first-head-p mt-lg-2 mb-lg-3">-->
<!--                    2.30 PM</p>-->
<!--            </div>-->
<!--        </div>-->



<!--        <p class="copy-right">Copyright © 2023 Petroliam Nasional Berhad (PETRONAS) (20076-K). All rights reserved.</p>-->


<!--    </div>-->

    <!-- Modal -->
<!--    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-xl modal-dialog-centered">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Speakers</h1>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->

<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 col-sm-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more">Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-sm-12">-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <div class="card">-->
<!--                                <div class="card-body ">-->
<!--                                    <div class="d-flex">-->

<!--                                        <div class="sp-img-bg">-->
<!--                                            <img class="img-fluid img-speaker" src="assets/images/speaker-img.png"-->
<!--                                                alt="">-->

<!--                                        </div>-->
<!--                                        <div class="ms-5 speaker-data">-->
<!--                                            <p class="mod-head">Nurhaliza Abu Bakar</p>-->
<!--                                            <p class="designation">Designation</p>-->
<!--                                            <p class="red-more" data-bs-toggle="modal" data-bs-target="#exampleModal3">-->
<!--                                                Click here to read bio</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="modal fade " id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-xl modal-dialog-centered">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Agenda</h1>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->

<!--                <div class="container padding-10 ">-->
<!--                    <div class="row">-->
<!--                        <div class=" d-flex">-->

<!--                            <div class="col-6">-->
<!--                                <div class="green-sec text-center" data-bs-toggle="modal"-->
<!--                                    data-bs-target="#exampleModal1">-->
<!--                                    <div><span class="day">DAY 1 </span><span class="date">| 12 June 2023</span><span-->
<!--                                            class="textmod"> (In person-->
<!--                                            engagement)</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <div class="white-sec text-center" data-bs-toggle="modal"-->
<!--                                    data-bs-target="#exampleModal2">-->
<!--                                    <div><span class="day">DAY 2 </span><span class="date">| 13 June 2023</span><span-->
<!--                                            class="textmod"> (Hybrid)</span>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <div class="card">-->
<!--                        <div class="card-body ">-->
<!--                            <table class="table">-->
<!--                                <thead class="tab-head">-->
<!--                                    <tr>-->

<!--                                        <th scope="col">Time</th>-->
<!--                                        <th scope="col">Activity</th>-->
<!--                                        <th scope="col">Presenter(s)</th>-->
<!--                                    </tr>-->
<!--                                </thead>-->
<!--                                <tbody class="table-group-divider">-->
<!--                                    <tr>-->

<!--                                        <td>1.30 PM</td>-->
<!--                                        <td class="bold-500">Registration</td>-->
<!--                                        <td>Cashmere Hall Foyer</td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>2.30 PM</td>-->
<!--                                        <td class="bold-500">Amazing Race Activity</td>-->
<!--                                        <td>Silk & Cashmere Hall</td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>4.30 PM</td>-->
<!--                                        <td class="bold-500">Tea Break, Free & Easy</td>-->
<!--                                        <td></td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>7.00 PM</td>-->
<!--                                        <td class="bold-500">Mocktail Session</td>-->
<!--                                        <td>Silk / Cashmere Hall</td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>8.00 PM</td>-->
<!--                                        <td class="bold-500">Networking Dinner</td>-->
<!--                                        <td>Cashmere Hall</td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->


<!--                                        <td>10.30 PM</td>-->
<!--                                        <td class="bold-500">Closing</td>-->
<!--                                        <td>Cashmere Hall</td>-->
<!--                                    </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-xl modal-dialog-centered">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Agenda</h1>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->

<!--                <div class="container padding-10 ">-->
<!--                    <div class="row">-->
<!--                        <div class=" d-flex">-->

<!--                            <div class="col-6">-->
<!--                                <div class="white-sec text-center" data-bs-toggle="modal"-->
<!--                                    data-bs-target="#exampleModal1">-->
<!--                                    <div><span class="day">DAY 1 </span><span class="date">| 12 June 2023</span><span-->
<!--                                            class="textmod"> (In person-->
<!--                                            engagement)</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-6">-->
<!--                                <div class="green-sec text-center" data-bs-toggle="modal"-->
<!--                                    data-bs-target="#exampleModal2">-->
<!--                                    <div><span class="day">DAY 2 </span><span class="date">| 13 June 2023</span><span-->
<!--                                            class="textmod"> (Hybrid)</span>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <div class="card">-->
<!--                        <div class="card-body ">-->
<!--                            <table class="table">-->
<!--                                <thead class="tab-head">-->
<!--                                    <tr>-->

<!--                                        <th scope="col">Time</th>-->
<!--                                        <th scope="col">Activity</th>-->
<!--                                        <th scope="col">Presenter(s)</th>-->
<!--                                    </tr>-->
<!--                                </thead>-->
<!--                                <tbody class="table-group-divider">-->
<!--                                    <tr>-->

<!--                                        <td>9:00 AM</td>-->
<!--                                        <td class="bold-500">Welcome Address</td>-->
<!--                                        <td>Zabidi Ahmad-->
<!--                                            <p class="para-agenda">Head, Downstream Business Excellence (DBE)</p>-->
<!--                                        </td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>9:05 AM</td>-->
<!--                                        <td class="bold-500">Keynote Address-->
<!--                                            & Official Launch</td>-->
<!--                                        <td>Datuk Sazali Hamzah-->
<!--                                            <p class="para-agenda">EVP & CEO Downstream</p>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>9:20 AM</td>-->
<!--                                        <td class="bold-500">Leaders Walkabout</td>-->
<!--                                        <td>-->
<!--                                        </td>-->

<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>9:40 AM</td>-->
<!--                                        <td class="bold-500">In the Spotlight 1</td>-->
<!--                                        <td>Ir. Mohd Yusri Mohamed Yusof-->
<!--                                            <p class="para-agenda">SVP & CEO, PETRONAS Chemicals Group Berhad</p>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->

<!--                                        <td>10:00 PM</td>-->
<!--                                        <td class="bold-500">Sustainability Risk & Oppotunities: <br>Turning-->
<!--                                            Strategy-->
<!--                                            Into-->
<!--                                            Action<br>-->
<!--                                            <p class="para-agenda">As a business entity, we have the obligation-->
<!--                                                to<br>-->
<!--                                                enhance the value of our-->
<!--                                                resources, <br>transforming it into high-quality, value-added<br>-->
<!--                                                products while-->
<!--                                                balancing this with our <br>sustainability commitments. How do we-->
<!--                                                reach<br> the-->
<!--                                                ‘sweet spot’ via our strategies and <br>translating these into-->
<!--                                                pragmatic-->
<!--                                                actions.</p>-->
<!--                                        </td>-->

<!--                                        <td>-->
<!--                                            <p class="font-si">PANELISTS</p>-->
<!--                                            Zabidi Ahmad-->
<!--                                            <p class="para-agenda">Head, DBE</p>-->

<!--                                            Azwati Osman-->
<!--                                            <p class="para-agenda">Head, Risk & Assurance</p>-->


<!--                                            Ruzila Idin-->
<!--                                            <p class="para-agenda">Head, Downstream HRM</p>-->

<!--                                            A Razak Faiz Sulaiman-->
<!--                                            <p class="para-agenda"></p>-->
<!--                                        </td>-->

<!--                                    </tr>-->

<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="modal fade " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-xl modal-dialog-centered">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Speakers</h1>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->

<!--                <div class="container">-->
<!--                    <div class="card m-5">-->
<!--                        <div class="row">-->
<!--                            <p class="back-btn" id="#exampleModal1"><i class="fa-solid fa-arrow-left pe-2"></i>back-->
<!--                            </p>-->
<!--                            <div class="col-lg-5 col-sm-12 col-sect text-center">-->

<!--                                <div class="bg-img-sp">-->
<!--                                    <img class="img-speaker-deat img-fluid" src="assets/images/speaker-img.png" alt="">-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <p class="mod-name">Nurhaliza <br>Abu Bakar</p>-->
<!--                                    <p class="designa">Designation</p>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                            <div class="col-lg-7 col-sm-12 pt-3 pe-5 p-sm-5">-->
<!--                                <p class="parag-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla-->
<!--                                    auctor-->
<!--                                    auctor nunc ac-->
<!--                                    posuere. Suspendisse imperdiet libero odio, ut porttitor leo laoreet in. Nam-->
<!--                                    elementum gravida erat. Nunc mattis viverra congue. Curabitur aliquam vehicula-->
<!--                                    augue-->
<!--                                    eget bibendum.-->
<!--                                    <br>-->
<!--                                    <br>-->
<!--                                    Nulla tempus mi magna. Pellentesque sit amet nulla quis elit facilisis-->
<!--                                    tincidunt.-->
<!--                                    Aenean auctor justo massa, ut ornare lorem cursus vitae. Nunc pellentesque-->
<!--                                    condimentum ipsum id accumsan. Curabitur pulvinar orci metus, at tempus erat-->
<!--                                    molestie eu. Integer efficitur enim rutrum, congue urna non, vehicula neque.-->
<!--                                    Nulla-->
<!--                                    ac ex sapien. Fusce congue lobortis urna, at hendrerit nulla mollis in.-->
<!--                                    <br>-->
<!--                                    <br>-->
<!--                                    In blandit, erat sed feugiat accumsan, erat sapien dignissim felis, in suscipit-->
<!--                                    velit nunc vel diam. Etiam vitae augue tempor, pellentesque dui ac, interdum-->
<!--                                    nulla.-->
<!--                                    Proin felis nisi, mattis vitae ultricies scelerisque, fringilla sit amet.-->
<!--                                </p>-->
<!--                                <p class="join-sesseion">Join her during the session below on 12 June:</p>-->
<!--                                <div class="line-green">-->
<!--                                </div>-->
<!--                                <p class="sustain"><span class="spe-tim">10:00 AM</span>Sustainability Risk &-->
<!--                                    Oppotunities:<br> Turning Strategy Into Action</p>-->

<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog modal-dialog-centered modal-lg">-->

<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>-->
<!--                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->
<!--                <div class="modale-pad">-->
<!--                    <div class="thank-u">Thank you for registering!</div>-->
<!--                    <div class="thank-u1">You will receive an e-mail from admin@downstreamsustainability.com to confirm-->
<!--                        your-->
<!--                        attendance by 12 May 2023.</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--@endsection-->

