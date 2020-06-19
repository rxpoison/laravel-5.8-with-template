<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INSPINIA | Dashboard</title>
    
        @include('layouts.assets.style')
        @yield('style')
    </head>
<body>
    <div id="wrapper">
        @include('layouts.nav')

        <div id="page-wrapper" class="gray-bg dashbard-1">
                @include('layouts.header-top')
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>

                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.assets.script')
    @yield('script')
    <script>
        $(function () {
            // setTimeout(function() {
            //     toastr.options = {
            //         closeButton: true,
            //         progressBar: true,
            //         showMethod: 'slideDown',
            //         timeOut: 4000
            //     };
            //     toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            // }, 1300);
        });

    </script>
</body>

</html>
