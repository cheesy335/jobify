<x-app>
    <form action="/login" method="post" class="mx-auto my-10 p-10 flex flex-col bg-base-200 w-100 items-center">
    @csrf
        <input type="email" name="email" placeholder="Email" class="input">
        <input type="password" name="password" placeholder="Password" class="input">
        <input type="submit" value="Login" class="btn btn-primary">
        @error('email')
            {{ $message }}
        @enderror
        @error('password')
            {{ $message }}
        @enderror
    </form>
</x-app>