<x-app>
    <form action="/profile" method="post" class="mx-auto my-10 p-10 rounded w-100   bg-base-200">
    @csrf
    @method('PATCH')
        <div>
            <p class="font-bold text-3xl mb-5 text-center">Edit Information</p>
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Full Name</label>
            <input type="name" name="name" id="name" value="{{ $user->name }}" class="rounded bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="John Doe" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="rounded bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="johndoe@email.com" required />
        </div>
        <div class="flex justify-center">
            <input type="submit" value="Update" class="btn btn-primary w-full"/>
        </div>
        @error('name')
            {{ $message }}
        @enderror
        @error('email')
            {{ $message }}
        @enderror
</x-app>