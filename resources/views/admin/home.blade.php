<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.head')
    <title>Down Stream</title>
</head>

<body>

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    <div class="main mt-5">
        <div class="container pt-5">
            <h5 class="mt-3   pb-2 pb-md-0 d-flex align-items-end">
                Down Stream Dashboard
            </h5>
        </div>
        @php
            use App\Models\User;
            $total_email = User::count();
            $total_logged = User::where('status', '1')->count();
        @endphp
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box text-center mb-4 mt-5">
                        <div class="me-3 w-100">
                            <h2>Total Virtuals Emails</h2>
                            <h1>{{ $total_email }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box text-center mb-4 mt-5">
                        <div class="me-3 w-100">
                            <h2>Total Logged User</h2>
                            <h1>{{ $total_logged }}</h1>
                            <!--<h1 id="question-count"></h1>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.script')
    <script>
        let windowSize = window.matchMedia("(max-width: 576px)")
        let windowSize2 = window.matchMedia("(min-width: 577px)")


        $(document).ready(function() {
            if (windowSize2.matches) {
                $('#web_app').DataTable({
                    language: {
                        search: "",
                        searchPlaceholder: "Search"
                    },
                });
            }

            $("#web_app_filter label").prepend('<i class="bi bi-search"></i>')
            if (windowSize.matches) {
                $('#web_app').DataTable({
                    language: {
                        search: "",
                        searchPlaceholder: "Search"
                    },
                    scrollX: true,
                });
            }
        });
    </script>

</body>

</html>
