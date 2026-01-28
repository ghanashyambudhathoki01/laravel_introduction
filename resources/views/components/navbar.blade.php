<nav class="bg-gray-800 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-xl font-bold">
            <a href="{{ url('/') }}">MyWebsite</a>
        </div>
        <ul class="flex space-x-6">
            <li>
                <a href="{{ url('/') }}" class="hover:text-gray-400">Home</a>
            </li>
            <li>
                <a href="{{ url('/about') }}" class="hover:text-gray-400">About</a>
            </li>
            <li>
                <a href="{{ url('/services') }}" class="hover:text-gray-400">Services</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" class="hover:text-gray-400">Contact</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" class="hover:text-gray-400">blog</a>
            </li>
        </ul>
    </div>
</nav>
