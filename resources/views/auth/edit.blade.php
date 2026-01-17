<x-app>
    <form action="/user/edit/{{ $user->id }}" method="post" class="w-full h-screen flex flex-col justify-center items-center">
    @csrf
    <h1 class="font-bold text-4xl">Edit Information</h1>
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}" class="input">
    <input type="text" name="email" placeholder="Email" value="{{ $user->email }}" class="input">
    <input type="submit" value="Save" class="btn btn-primary">
    </form>
</x-app>