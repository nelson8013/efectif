<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'efectif') }} | Dashboard</title>

     <!-- jquery-->
    {{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> --}}

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"  />

    <link rel="stylesheet" href=" {{ asset('css/tailwind.output.css') }}"/>
    <link rel="stylesheet" href=" {{ asset('css/fa_profile.css') }}"/>

    <link rel="stylesheet" href=" {{ asset('css/svgicons.css') }}"/>


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    {{-- Select2 CSS --}}
    {{-- <link rel="stylesheet" href=" {{ asset('css/select2.min.css') }}"/> --}}

      {{-- Select2 JS --}}
      {{-- <script src="{{ asset('js/select2.min.js')}}"></script> --}}

    {{-- Alpine JS --}}
    <script src="{{ asset('js/alpine.min.js')}}" defer></script>



    <script src="{{ asset('js/init-alpine.js')}} "></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script type="text/javascript" src="{{ asset('js/charts-lines.js')}} " defer></script>
    <script type="text/javascript" src="{{ asset('js/charts-pie.js')}}" defer></script>
  </head>
  @include('flash-message')
