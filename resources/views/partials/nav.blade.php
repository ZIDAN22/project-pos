<nav class="bg-white shadow-lg border-b border-gray-200 z-20 fixed top-0 left-0 right-0">
    <div class= "px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Hamburger Menu -->
            <div class="flex items-center mr-4">
                <button id="hamburger-menu" class="text-gray-700 hover:bg-gray-100 p-2 rounded-md">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <a href="" class="flex items-center ml-3">
                    <img src="{{ asset('images/POSIND_2023.png') }}" alt="Logo" class="h-8 w-auto mr-2">
                    <span class="text-gray-900 font-bold text-xl">INVENTORY IT</span>
                </a>
            </div>

            <!-- User Menu -->
            <div class="flex items-center">
                <div class="relative">
                    <button
                        class="text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium flex items-center"
                        id="user-menu-button">
                        <span>{{ Auth::user()->name ?? 'User' }} ({{ ucfirst(Auth::user()->role ?? '') }})</span>
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden" id="user-menu">
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


