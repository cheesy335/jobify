<x-app>
    <form action="/login" method="post" class="mx-auto my-10 p-10 rounded w-100   bg-base-200">
    @csrf
        <div>
            <p class="font-bold text-3xl mb-5 text-center">Login</p>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
            <input type="email" name="email" id="email" class="rounded bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="johndoe@email.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Password</label>
            <input type="password" name="password" id="password" class="rounded bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="••••••••" required />
        </div>
        <div class="flex justify-center">
            <input type="submit" value="Loign" class="btn btn-primary w-full"/>
        </div>
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