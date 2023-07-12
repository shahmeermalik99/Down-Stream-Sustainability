<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downstream Sustainability Day 2023</title>
    @include('layouts.partials.head')

    {{-- Firebase Cdns  --}}
    <!--Firebase Links-->
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.11.0/firebase-app.js"></script>
    <!--<script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-storage.js"></script>-->
</head>

<body>
    @include('pages.modals')
    @include('layouts.partials.navbar_2')
    <div class="top-bar">
        <marquee class="grey-under-nav">
            Welcome Friends & Colleagues to Downstream
            Sustainability Day 2023!
        </marquee>
    </div>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    @include('layouts.partials.script')

    <script type="module" src="https://www.gstatic.com/firebasejs/9.11.0/firebase-analytics.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.10.0/firebase-database.min.js"></script>
    <script type="module">

const firebaseConfig = {
            apiKey: "{{config('services.firebase.api_key')}}",
            authDomain: "{{config('services.firebase.auth_domain')}}",
            databaseURL: "{{config('services.firebase.database_url')}}",
            projectId: "{{config('services.firebase.project_id')}}",
            storageBucket: "{{config('services.firebase.storage_bucket')}}",
            messagingSenderId: "{{config('services.firebase.messaging_sender_id')}}",
            appId: "{{config('services.firebase.app_id')}}",
            measurementId: "{{config('services.firebase.measurement_id')}}"
            };

        firebase.initializeApp(firebaseConfig);
        //  firebase.analytics();
        var database =firebase.database();

        // Fetch Data From firebase For Text Change
        var user = firebase.database().ref('Crawler/');
            user.on('value', (data) => {
            var maintext =data.val();
            if(maintext)
            {
               $('.top-bar').html("");
               let marqe = document.createElement("marquee")
               marqe.innerHTML = maintext[1].main
               marqe.classList.add('grey-under-nav')
               $('.top-bar').html(marqe)
            //    $('#marqe').html(maintext[1].main);   
            }
        });
        
        
    // Fetch Data From firebase For Audio Change
        var user = firebase.database().ref('audio/');
            user.on('value', (data) => {
            var audio =data.val();
            if(audio)
            {
                document.querySelector('#bg-audio').src =audio[1].audio; 
            }
        });
        
        
        
</script>
</body>

</html>
