@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Supervisor Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Total Inventaris</h3>
            <p class="text-3xl font-bold">{{ $inventarisCount }}</p>
        </div>
        <div class="bg-green-500 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Total Users</h3>
            <p class="text-3xl font-bold">{{ $userCount }}</p>
        </div>
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Total Admins</h3>
            <p class="text-3xl font-bold">{{ $adminCount }}</p>
        </div>
        <div class="bg-purple-500 text-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold">Total Supervisors</h3>
            <p class="text-3xl font-bold">{{ $supervisorCount }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Quick Actions</h2>
            <div class="space-y-2">
                <a href="{{ route('supervisor.users.index') }}" class="block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Manage Users</a>
                <a href="{{ route('inventaris.index') }}" class="block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">View Inventaris</a>
                <a href="{{ route('supervisor.users.create') }}" class="block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Add New User</a>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
            <p class="text-gray-600">Supervisor dashboard with full access to user management and system overview.</p>
        </div>
    </div>
</div>
@endsection
