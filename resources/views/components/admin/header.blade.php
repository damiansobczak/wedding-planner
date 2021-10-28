<div class="space-y-2">
    <h1 class="text-lg font-semibold text-gray-800">{{ $title }}</h1>
    <ol class="flex items-center text-sm space-x-2">
        <li>
            <a href="{{ route('dashboard') }}" class="text-indigo-500 font-semibold hover:underline">Dashboard</a>
        </li>

        <li class="flex items-center text-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </li>

        @if(isset($firstName) && isset($first))
            <li>
                <a href="{{ $first }}" class="text-indigo-500 font-semibold hover:underline">{{ $firstName }}</a>
            </li>
        @elseif (isset($firstName))
            <li>
                <p class="text-gray-500">{{ $firstName }}</p>
            </li>
        @endif

        @if(isset($secondName) || isset($second))
            <li class="flex items-center text-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </li>
        @endif

        @if(isset($secondName) && isset($second))
            <li>
                <a href="{{ $second }}" class="text-indigo-500 font-semibold hover:underline">{{ $secondName }}</a>
            </li>
        @elseif (isset($secondName))
            <li>
                <p class="text-gray-500">{{ $secondName }}</p>
            </li>
        @endif
    </ol>
</div>
