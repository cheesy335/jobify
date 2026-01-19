<x-app>
    <div class="flex flex-col w-full justify-center items-center bg-base-200 p-10">
        <div class="flex justify-around items-center w-[90%] lg:w-140 bg-base-300 p-5 lg:p-10 rounded-2xl">
            <div>
                <p>{{ $user->name }}</p>
                <p>{{ $user->email }}</p>
            </div>
            <div class="flex flex-col">
                <a href="/profile/edit" class="btn btn-primary mb-1">Edit</a>
                <form action="/user/{{ $user->id }}" method="post">
                @csrf
                @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-error">
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Created</h1>
        @if ($jobs->isEmpty())
            <p class="text-center">You haven't Posted any Jobs</p>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-3 border-accent gap-8 w-full my-10">
                @foreach ($jobs as $job)
                    <x-card :$job />
                @endforeach
            </div>
        @endif
    </div>

    <div class="flex flex-col justify-center items-center bg-base-200 p-10">
        <h1 class="font-bold text-2xl">Jobs Applied for</h1>
        @if ($applications->isEmpty())
            <p>You haven't Applied for any Jobs</p>
        @else
            <div class="grid grid-cols-1 lg:grid-cols-3 border-accent gap-8 w-full my-10">
                @foreach ($applications as $application)
                    <x-card :job="$application->job" />
                @endforeach
            </div>
        @endif
    </div>
</x-app>