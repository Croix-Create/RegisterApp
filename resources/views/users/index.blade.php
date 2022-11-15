
<h1> User Profile </h1>

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($users->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($users as $user)
            <x-user-card :user="$user" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">

            </x-user-card>
            @endforeach
        </div>

        @else
        <p class="text-center">No users yet. Please check back later.</p>
        @endif
</main>