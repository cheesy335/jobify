<x-app>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full my-10">
            @foreach ($jobs as $job)
                <div class="card card-border bg-base-200 w-96 lg:w-[90%] hover:border-neutral-400 transition-colors duration-500 mx-auto">
                    <div class="card-body">
                        <span class="">{{ $job->user->name }}</span>
                        <h2 class="card-title">{{ $job->title }}</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="card-actions justify-between">
                        <h2 class=" font-bold text-2xl">${{ $job->salary }}</h2>
                        <button class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</x-app>