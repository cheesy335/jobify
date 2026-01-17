<x-app>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full my-10">
        @foreach ($jobs as $job)
                <div class="card card-border bg-base-200 w-96 lg:w-[90%] hover:border-neutral-400 transition-colors duration-500 mx-auto">
                    <div class="card-body">
                        <span class="">By: {{ $job->user->name }}</span>
                        <h2 class="card-title font-bold text-2xl">{{ $job->title }}</h2>
                        <span>{{ $job->location }} </span>
                        <div class="card-actions justify-between">
                            <span class="badge badge-soft badge-outline badge-lg">${{ $job->salary }}</span>
                            @if (Auth::id() == $job->user->id)
                            @elseif ( auth()->user()->hasAppliedFor($job) )
                            <button class="btn btn-disabled">Applied</button>
                            @else
                            <form action="/application" method="post">
                                @csrf
                                <input type="text" name="job" value="{{ $job->id }}" class="hidden">
                                <input type="submit" value="Apply" class="btn btn-primary">
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
</x-app>