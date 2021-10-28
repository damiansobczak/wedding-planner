<x-app-layout>
    <div class="py-12 flex-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <x-admin.header title="Aktualności" firstName="Spis aktualności" />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-gray-600">
                    {{__('You\'re logged in!')}}
                </div>
            </div>
            <div class="flex space-x-4">
                <x-admin.card counter="10" link="#" label="Ilość kategorii"/>
                <x-admin.card counter="10" link="#" label="Ilość aktualności"/>
                <x-admin.card counter="10" link="#" label="Ilość zdjęć"/>
            </div>
        </div>
    </div>
</x-app-layout>
