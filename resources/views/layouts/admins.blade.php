<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>SATUDIGITAL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="favicon.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/perfect-scrollbar.min.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/style.css')}}" />
        <link defer rel="stylesheet" type="text/css" media="screen" href="{{asset('/assets/css/animate.css')}}" />
        <script src="{{asset('assets/js/perfect-scrollbar.min.js')}}"></script>
        <script defer src="{{asset('assets/js/popper.min.js')}}"></script>
        <script defer src="{{asset('assets/js/tippy-bundle.umd.min.js')}}"></script>
        <script defer src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    </head>

    <body
        x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]"
    >
        <!-- sidebar menu overlay -->
        <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

        <!-- screen loader -->
        @include('partials.screen_loader')

        <!-- scroll to top button -->
        @include('partials.scroll_to_top')

        <!-- start theme customizer section -->
        
        <!-- end theme customizer section -->
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <!-- start sidebar section -->
            @include('partials.navbar')
            <!-- end sidebar section -->

            <div class="main-content flex min-h-screen flex-col">
                <!-- start header section -->
                @include('partials.header_section')
                <!-- end header section -->

                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    @yield('content')
                    <!-- end main content section -->
                </div>

                <!-- start footer section -->
                @include('partials.footer')
                <!-- end footer section -->
            </div>
        </div>

        @include('partials.script')

        @include('partials.script_footer')
    </body>
</html>
