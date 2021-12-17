<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>efectif | Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />


         <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tailwind.output.css') }}"/>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <script src="{{ asset('js/init-alpine.js')}} "></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
        <script src="{{ asset('js/charts-lines.js')}} " defer></script>
        <script src="{{ asset('js/charts-pie.js')}}" defer></script>
    </head>
    <body>
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900 h-auto">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                <img
                    aria-hidden="true"
                    class="object-cover w-full h-full dark:hidden"
                    src="{{ asset('img/login-office.jpeg') }}"
                    alt="Office"
                />
                <img
                    aria-hidden="true"
                    class="hidden object-cover w-full h-full dark:block"
                    src="{{ asset('img/login-office-dark.jpeg')}}"
                    alt="Office"
                />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="nelly w-full">
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"> Login </h1>
                            <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Email</span>
                            <input
                                class=" block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="hassen.gumel@wacot.com" autofocus/>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </label>
                            <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input @error('password') is-invalid @enderror"
                                type="password" name="password" required placeholder="******"
                            />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </label>

                            <div class="form-group row mb-0">
                                <button
                                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                    type="submit"> Log in
                                </button>
                            </div>

                            <hr class="my-8" />

                            <div class="login_footer">
                                <div class="create_account">
                                    <p class="mt-1">
                                        <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="/register">Create account</a>
                                    </p>
                                </div>
                                <div class="forgot">
                                    @if (Route::has('password.request'))
                                        <p class="mt-4">
                                            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="./forgot-password.html"> Forgot your password? </a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
