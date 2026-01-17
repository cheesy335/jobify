<x-app>
    <form action="/jobs" method="POST" class="mx-auto my-10 p-10 flex flex-col gap-2 bg-base-200 w-[70%] items-center">
    @csrf
        <h1 class="font-bold text-2xl">Post Job</h1>
    <div class="flex flex-col gap-2 w-[60%]">
        <input type="text" name="title" placeholder="Job Title" class="input w-full">
        <input type="text" name="salary" placeholder="$90000/year" class="input w-full">
        <input type="text" name="location" placeholder="Raipur, Chhattishgarh / Remote" class="input w-full">
        <input type="submit" value="Post" class="btn btn-primary">
    </div>
    </form>
</x-app>