<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    @include('partials.nav')
    @include('partials.sidebar')
    <main class="ml-64 pt-20 p-6 transition-all duration-300" id="main-content">
        @yield('content')
    </main>
    @include('partials.footer')

</body>
<script>
    // Toggle user menu
    document.getElementById('user-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('user-menu');
        menu.classList.toggle('hidden');
    });

    // Toggle sidebar
    document.getElementById('hamburger-menu').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');
        if (sidebar.classList.contains('w-64')) { //ketika lebar 64 maka hapus lebar 64
            sidebar.classList.remove('w-64'); 
            sidebar.classList.add('w-16');      //lalu tambah lebar 16
            mainContent.classList.remove('ml-64');
            mainContent.classList.add('ml-16');
            // Hide text and submenu when collapsed
            sidebarTexts.forEach(text => text.classList.add('hidden'));
            inventarisSubmenu.classList.add('hidden');
        } else {
            sidebar.classList.remove('w-16');
            sidebar.classList.add('w-64');
            mainContent.classList.remove('ml-16');
            mainContent.classList.add('ml-64');
            // Show text and submenu when expanded
            sidebarTexts.forEach(text => text.classList.remove('hidden'));
            inventarisSubmenu.classList.remove('hidden');
        }
    });


</script>

</html>