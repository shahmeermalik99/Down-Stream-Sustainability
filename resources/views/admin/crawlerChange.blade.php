<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.head')
    {{-- Firebase Cdns  --}}
    <!--Firebase Links-->
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.11.0/firebase-app.js"></script>
    <!--<script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-storage.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.11/dist/sweetalert2.all.min.js"></script>
    <title>Down Stream</title>
</head>

<body>

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    <div class="main mt-5">
        <div class="container pt-5">
            <h5 class="mt-3   pb-2 pb-md-0 d-flex align-items-end">
                Crawler Text
            </h5>
        </div>

        {{-- Change Main Heading Here --}}
        <div class="mt-3">
            <form id="main">
                <div class="row">
                    <div class="mb-2 col-md-6">
                        <input type="hidden" id="main-id" name="hidden-val" value="">
                        <input type="text" name="main" id="enter-texted" class="form-control"
                            placeholder="Enter Text to Change">
                    </div>
                    <div class="mb-2 col-md-6">
                        <button type="button" class="btn btn-primary" style="background-color: #00a19c"
                            id="submitbtn">Update</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- End Here --}}
    </div>
</body>
@include('admin.layouts.script')
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
<script type="module" src="https://www.gstatic.com/firebasejs/9.11.0/firebase-analytics.js"></script>
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.10.0/firebase-database.min.js"></script>
<script>
    const firebaseConfig = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        projectId: "{{ config('services.firebase.project_id') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
        messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
        appId: "{{ config('services.firebase.app_id') }}",
        measurementId: "{{ config('services.firebase.measurement_id') }}"
    };

    firebase.initializeApp(firebaseConfig);
    //  firebase.analytics();
    var database = firebase.database();

    // Fetch Data From firebase

    var user = firebase.database().ref('Crawler/');
    user.on('child_added', (data) => {
        var users = data.val();
        var usertable;
        if (users) {
            $("#main-id").val(data.key);
        }
    });

    //  Insert Data Into Firebase
    $("#submitbtn").on('click', function() {
        var values = $("#main").serializeArray();

        var main_id = $("#main-id").val();
        var text = values[1].value;

        if (main_id) {
            var userdata = {
                main: text
            };
            var updates = {};

            updates['/Crawler/' + main_id] = userdata;
            firebase.database().ref().update(updates);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Crawler text has been updated.'
            })
            $("#enter-texted").val("");
        } else {
            //  Insert value using id 
            var userId = 1;
            firebase.database().ref('Crawler/' + userId).set({
                main: text
            });

            $("#enter-texted").val("");
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Crawler text has been updated.'
            })
            return false;
        }
    });
</script>

</html>
