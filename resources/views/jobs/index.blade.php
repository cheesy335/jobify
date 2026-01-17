<x-app>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full my-10">
        @foreach ($jobs as $job)
            <x-card :$job />
        @endforeach
    </div>
</x-app>