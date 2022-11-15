<x-layout>
<main>
<div class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
    <h1 class="font-bold text-3xl lg:text-4xl mb-10 text-blue-600">
        {{ $user->name }}
    </h1>

    <div>
        {!! $user->email !!}
    </div>

</div>
</main>
</x-layout>