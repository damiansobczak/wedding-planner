<div class="w-full border-b border-gray-200 bg-white h-20 shadow-sm flex items-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center flex-1">
        <div class="rounded-full px-3 py-2 text-gray-700 bg-gray-200 text-xs">Administrator</div>
        <form method="POST" action="{{ route('logout') }}" class="ml-auto">
            @csrf
            <a href="{{ $logout }}" class="border text-sm text-gray-700 flex items-center hover:bg-indigo-500 hover:text-white rounded-md px-3 py-2"
               onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</div>
