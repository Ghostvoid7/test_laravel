<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2>Создание статьи</h2>
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <input
                name="title"
                placeholder="{{ __('Заголовок') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <textarea
                name="content"
                placeholder="{{ __('Текст статьи') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('content')}}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Сохранить') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
