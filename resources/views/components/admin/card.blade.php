<div class="rounded-lg overflow-hidden shadow-sm bg-white w-full cursor-pointer hover:opacity-70 border-b border-gray-200">
    <p class="text-sm text-gray-400 mb-3 px-6 pt-6">{{ $label }}</p>
    <span class="text-4xl px-6 leading-5 pb-7 block">{{ $counter }}</span>
    <a href="{{ $link }}" class="flex items-center bg-gray-50 text-sm text-gray-500 px-6 p-4">
        Szczegóły
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</div>
