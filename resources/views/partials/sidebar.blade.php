<aside class="bg-gray-800 text-white w-64 min-h-screen fixed left-0 top-16 z-10 transition-all duration-300 ease-in-out"
    id="sidebar">
    <div class="p-4">
        <nav class="space-y-2">
            @if(auth()->user()->isSupervisor())
                <a href="{{ route('supervisor.dashboard') }}"
                    class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('supervisor.dashboard') ? 'bg-gray-700' : '' }}">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                    </svg>
                    <span class="ml-3 sidebar-text">Supervisor Dashboard</span>
                </a>

                <a href="{{ route('supervisor.users.index') }}"
                    class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('supervisor.users.*') ? 'bg-gray-700' : '' }}">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                    <span class="ml-3 sidebar-text">User Management</span>
                </a>
            @else
                <a href="{{route ('dashboard.index')}}"
                    class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('dashboard.*') ? 'bg-gray-700' : '' }}">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                    </svg>
                    <span class="ml-3 sidebar-text">Dashboard</span>
                </a>
            @endif

            <a href="{{route ('inventaris.index')}}"
                class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('inventaris.*') ? 'bg-gray-700' : '' }}">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
                <span class="ml-3 sidebar-text">Inventaris</span>
            </a>

            <a href=""
                class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('lokasi.*') ? 'bg-gray-700' : '' }}">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="ml-3 sidebar-text">Lokasi</span>
            </a>

            <a href=""
                class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('pengadaan.*') ? 'bg-gray-700' : '' }}">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="ml-3 sidebar-text">Pengadaan</span>
            </a>

            <a href=""
                class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('mutasi.*') ? 'bg-gray-700' : '' }}">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                </svg>
                <span class="ml-3 sidebar-text">Mutasi</span>
            </a>

            <a href=""
                class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700 {{ request()->routeIs('disposal.*') ? 'bg-gray-700' : '' }}">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                    </path>
                </svg>
                <span class="ml-3 sidebar-text">Disposal</span>
            </a>

            <!-- Divider -->
            <div class="border-t border-gray-600 my-4"></div>

            <a href="" class="flex items-center px-1 py-2 text-sm font-medium rounded-md hover:bg-gray-700">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="ml-3 sidebar-text">Profile</span>
            </a>
        </nav>
    </div>
</aside>