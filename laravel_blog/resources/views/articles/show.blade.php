<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        <div class="p-6 flex space-x-2">
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-gray-800">{{ $article->user->name }}</span>
                        <small class="ml-2 text-sm text-gray-600">{{ $article->created_at->format('j M Y, g:i a') }}</small>
                        @unless ($article->created_at->eq($article->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                        @endunless
                    </div>
                    @if ($article->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('articles.edit', $article)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('articles.destroy', $article) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('articles.destroy', $article)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif
                </div>
                <p class="mt-4 text-lg text-gray-900">&nbsp;&nbsp;&nbsp;{{ $article->title }}</p>
                <div class="mt-4 text-lg text-gray-900">{{ $article->content }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
