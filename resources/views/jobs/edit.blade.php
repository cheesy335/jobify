<x-app>
    <form action="/jobs/{{ $job->id }}" method="POST" class="mx-auto my-10 p-10 flex flex-col gap-2 bg-base-200 w-[70%] items-center">
    @csrf
    @method('PATCH')
        <h1 class="font-bold text-2xl">Edit Job</h1>
    <div class="flex flex-col gap-2 w-[60%]">
        <input type="text" name="title" placeholder="Job Title" value="{{ $job->title }}" class="input w-full">
        <input type="text" name="salary" placeholder="$90000/year" value="{{ $job->salary }}" class="input w-full">
        <input type="text" name="location" placeholder="Raipur, Chhattishgarh / Remote" value="{{ $job->location }}" class="input w-full">
        <input type="submit" value="Post" class="btn btn-primary">
    </div>
    </form>
</x-app>