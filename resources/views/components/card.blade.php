@props(['job'])

<div class="card card-border bg-base-200 w-96 lg:w-[90%] border-accent hover:border-neutral-400 transition-colors duration-500 mx-auto">
    <div class="card-body">
        <span class="">By: {{ $job->user->name }}</span>
        <h2 class="card-title font-bold text-2xl">{{ $job->title }}</h2>
        <span>{{ $job->location }} </span>
        <span class="badge badge-soft badge-outline badge-lg">${{ $job->salary }}</span>

        {{-- Card Actions --}}
        <div class="card-actions justify-end">
            {{-- chekck if user is owner of job --}}
            @if (Auth::id() == $job->user->id)
            <button class="btn btn-error">Delete</button>

            {{-- Check if user has already applied for this job --}}
            @elseif ( auth()->user()->hasAppliedFor($job) )
            <button class="btn btn-disabled">Applied</button>

            {{-- Apply for job --}}
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