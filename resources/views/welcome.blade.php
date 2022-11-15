<!doctype html>

<title>CRUD APP DEMO</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">

            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="user/index">
                    @if(request('search'))
                    <input type="hidden" name="email" value="{{ request('email') }}">
                    @endif
                    <input type="text" name="search" placeholder="Search for a user"
                        class="bg-transparent placeholder-black font-semibold text-sm" value="{{request('search')}}">
                </form>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase"> Welcome, {{ auth()->user()->name }}</button>
                    </x-slot>
                    <x-dropdown-item href="/admin/users" :active="request()->is('admin/users')">
                        Admin Dashboard
                    </x-dropdown-item>
                    <x-dropdown-item href="#" x-data="{}"
                        @click.prevent="document.querySelector('#logout-form').submit()">
                        Log Out
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout">
                        @csrf
                        <button class="text-xs font-bold uppercase text-blue-500 ml-4 hidden" type="submit"> Log Out
                        </button>
                    </form>

                </x-dropdown>

                
                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-3 text-xs font-bold uppercase"> Log In</a>
            </div>
            @endauth
        </nav>
    </section>


    @auth
    <div class="md:flex md:justify-between md:items-center padding-inline: 10px 20px">
        <h1> Hello, {!! auth()->user()->name !!} </h1>
    </div>
    @endauth
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>
            {{ session('success') }}
        </p>
    </div>
    @endif
</body>