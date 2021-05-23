<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="{{route('index')}}">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>User deshboard | {{config('app.name')}}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=2.4.0')}}">
    <link rel="stylesheet" href="{{asset('assets/css/editors/summernote.css?ver=2.4.0')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/libs/fontawesome-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/card.css')}}">

    @yield('css')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include("users.sideNav")
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->

                @include("users.nav")
                <!-- main header @e -->
                <!-- content @s -->

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">

                            <div class="nk-content-body">
                                @yield("content")
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include("users.footer")

                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('assets/js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?ver=2.4.0')}}"></script>

    <script src="{{asset('assets/js/libs/editors/summernote.js?ver=2.4.0')}}"></script>
    <script src="{{asset('assets/js/editors.js?ver=2.4.0')}}"></script>


    @yield('js')
</body>

</html>