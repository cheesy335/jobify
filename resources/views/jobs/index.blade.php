<x-app>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full mt-10">
            @foreach ($jobs as $job)
                <x-card>{{ $job->title }}</x-card>
            @endforeach
        </div>
</x-app>