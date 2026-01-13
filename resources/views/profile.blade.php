<x-app>
    <h1>{{ $user->name }}</h1>
    @foreach ($jobs as $job)
        <h1>{{ $job->title }}</h1>
    @endforeach
</x-app>