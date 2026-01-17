<x-app>
    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">User Information</h1>
        <h1>Name: {{ $user->name }}</h1>
        <h1>Email: {{ $user->email }}</h1>
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Created</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 border-accent gap-8 w-full my-10">
        @foreach ($jobs as $job)
            <x-card :$job />
        @endforeach
    </div>
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Applied for</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 border-accent gap-8 w-full my-10">
            @foreach ($applications as $application)
                <x-card :job="$application->job" />
            @endforeach
        </div>
    </div>
</x-app>