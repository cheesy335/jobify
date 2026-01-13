<x-app>
    <form action="/jobs" method="POST" class="mx-auto my-10 p-10 flex flex-col bg-base-200 w-100 items-center">
    @csrf
        <input type="title" name="title" placeholder="Job Title" class="input">
        <input type="salary" name="salary" placeholder="Salary" class="input">
        <input type="submit" value="Post" class="btn btn-primary">
    </form>
</x-app>