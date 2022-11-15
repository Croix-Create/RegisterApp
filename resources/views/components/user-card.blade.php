@props(['user'])

<div class="display:flex align-items:center">
<article
    {{$attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
        <div class="py-6 px-5">
            <h1 class="font-bold text-3xl lg:text-4xl mb-10 text-blue-600">
                {{ $user->name }}
            </h1>

            <div>
                {!! $user->email !!}
            </div>
    </article>
</div>