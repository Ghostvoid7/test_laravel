<x-app-layout>
    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($articles as $article)
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
                    </div>
                    <div style="margin-top: 15px">
                        <a class="mt-4 text-lg text-gray-900" href="{{ route('articles.show', $article) }}">&nbsp;&nbsp;&nbsp;{{ $article->title }}</a>
                    </div>
                    <p class="mt-4 text-lg text-gray-900">{{ \Illuminate\Support\Str::limit($article->content, 50) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
