<header class="flex justify-between items-center bg-base-200 w-full h-15 px-10">
        <section class="flex items-center">
            <div class="logo font-bold text-3xl mr-5 font-serif">
                <a href="/">Jobify</a>
            </div>
            <nav>
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/jobs">Jobs</x-nav-link>
                <x-nav-link href="/contact">Contact</x-nav-link>
            </nav>
        </section>

        <section class="flex gap-1">
            @guest
            <x-nav-link href="/login" class="btn btn-outline">Login</x-nav-link>
            <x-nav-link href="/register" class="btn btn-neutral">SignUp</x-nav-link>
            @endguest

            @auth
            <form action="/logout" method="post">
                @csrf
                <input type="submit" value="Logout" class="btn btn-error btn-outline">
            </form>
            <x-nav-link href="/jobs/create" class="btn btn-primary">Post a Job</x-nav-link>
            @endauth
        </section>
    </header>