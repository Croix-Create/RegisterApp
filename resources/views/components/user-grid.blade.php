@props(['users'])

@if ($users->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($users->skip(1) as $post)
            <x-user-card
                :user="$user"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
            </x-user-card>
        @endforeach
    </div>
@endif
