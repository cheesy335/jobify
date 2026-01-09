<x-app>
        <div class="grid grid-cols-3 lg:grid-cols-2 gap-8 w-full mt-10">
            @foreach ($jobs as $job)
                <x-card>{{ $job->title }}</x-card>
            @endforeach
        </div>
</x-app>