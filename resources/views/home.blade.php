<x-app>
    <x-hero></x-hero>

    <div class="grid grid-cols-3 gap-8 w-full my-10">
        @foreach ($featured_jobs as $job)
            <x-card>{{ $job->title }}</x-card>
        @endforeach  
        {{-- <x-card>MERN Stack Developer</x-card>
        <x-card>Laravel Developer</x-card>
        <x-card>Frontend Developer</x-card> --}}
    </div>
</x-app>