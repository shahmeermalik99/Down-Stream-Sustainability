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
            <div class="tabel-section">
                <table id="web_app" class="mt-4 display device_table">
                    @php
                    use App\Models\User;
                    $logged_user = User::where('status', '1')->get();
                    @endphp
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logged_user as $logged )
                        <tr>
                            <td>{{ $logged->name }}</td>
                            <td>{{ $logged->email }}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
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
