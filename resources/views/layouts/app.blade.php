    @include('layouts.head')
    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }" >

             <!-- Desktop sidebar -->
             @include('layouts.sidebar')

              <!-- Mobile sidebar -->
              <!-- Backdrop -->
              @include('layouts.mobile_sidebar')
              <!-- End of Mobile sidebar -->

              <!-- Header bgins here -->
              @include('layouts.header')
              <!-- Header ends here -->

              @yield('content')

        </div>


    </body>
</html>
