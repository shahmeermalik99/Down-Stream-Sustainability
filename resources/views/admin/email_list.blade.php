<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.layouts.head')
    <title>Downstream Admin</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Email</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_email_form">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter a email" required>
                            <span class="text-danger email-error"></span>
                            <input type="hidden" id="_token" name="_token"
                            value="{{ csrf_token() }}" />
                        </div>
                        <div class="text-end">
                            <button type="button" id="add_email_btn" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    <div class="main mt-5">
        <div class="container pt-5">
            <h5 class="mt-3   pb-2 pb-md-0 d-flex align-items-end">
               Virtual Email List
            </h5>
            <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add
                Email</button>
            @if (isset($success))
                <p class="alert alert-info"> {{ $success }}</p>
            @endif
            <div class="tabel-section">  
                <table id="web_app" class="mt-4 display device_table">
                    <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Name</th>
                            <th scope="col">Emails</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($virtual_email as $key => $email)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $email->name }}</td>
                            <td>{{ $email->email }}</td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                {{ $virtual_email->links() }}
    </div>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script>
        // Add Email Ajax Script
        $("#add_email_btn").on('click', function() {
            var email = $("#add_email_form").serializeArray();
            var user_email = email[1].value;
            var _token = $("#_token").val();
            if (user_email != '') {
                $.ajax({
                    type: "POST",
                    url: "{{ route('add_email') }}",
                    data: {
                        email: user_email,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response == '200') {
                            location.reload();
                        } else if (response == '205') {
                            $('.email-error').text('Email Already Exist');
                        } else if (response == '404') {
                            $('.email-error').text('Email Field Required');
                        }
                    }
                });
            } else {
                $('.email-error').text('Email Field Required');
            }

        });
    </script>
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
