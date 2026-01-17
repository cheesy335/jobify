<x-app>
    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">User Information</h1>
        <h1>Name: {{ $user->name }}</h1>
        <h1>Email: {{ $user->email }}</h1>
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Created</h1>
        @foreach ($jobs as $job)
            <h1>{{ $job }}</h1>
        @endforeach
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Applied for</h1>
        @foreach ($applications as $application)
            <h1>{{ $application->job }}</h1>
        @endforeach
    </div>
</x-app>