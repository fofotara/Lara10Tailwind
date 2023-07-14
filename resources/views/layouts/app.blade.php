<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./css/vendors/flatpickr.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
                class="font-inter antialiased bg-slate-100 text-slate-600"
                :class="{ 'sidebar-expanded': sidebarExpanded }"
                x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
                x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>


<div class="flex h-screen overflow-hidden">


    @include('layouts.sidebar')

    <!-- Content area -->
    <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">

        <!-- Site header -->
       @include('layouts.header')

        <main>
            <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

                {{$slot}}

            </div>
        </main>

    </div>

</div>

<script src="./js/vendors/alpinejs.min.js" defer></script>
<script src="./js/vendors/chart.js"></script>
<script src="./js/vendors/moment.js"></script>
<script src="./js/vendors/chartjs-adapter-moment.js"></script>
<script src="./js/dashboard-charts.js"></script>
<script src="./js/vendors/flatpickr.js"></script>
<script src="./js/flatpickr-init.js"></script>

</body>

</html>
