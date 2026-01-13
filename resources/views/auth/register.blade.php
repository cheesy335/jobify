<x-app>
    <form action="/register" method="post" class="mx-auto my-10 p-10 flex flex-col gap-2 bg-base-200 w-100 items-center">
    @csrf
        <input type="name" name="name" placeholder="Full Name" class="input">
        <input type="email" name="email" placeholder="Email" class="input">
        <input type="password" name="password" placeholder="Password" class="input">
        <input type="submit" value="Sign Up" class="btn btn-primary">
        @error('name')
            {{ $message }}
        @enderror
        @error('email')
            {{ $message }}
        @enderror
        @error('password')
            {{ $message }}
        @enderror
    </form>
</x-app>