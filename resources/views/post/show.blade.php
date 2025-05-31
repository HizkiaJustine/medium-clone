<x-app-layout>
    <div class="py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4 items-center">
                    <x-user-avatar :user="$post->user"></x-user-avatar>
                    {{-- User Avatar --}}
                    <div>
                        <x-follow-ctr :user="$post->user" class="flex gap-2">
                            <a class="hover:underline" href="{{ route('profile.show', $post->user) }}">{{ $post->user->name }}</a>
                            &middot;
                            <button x-text="following ? 'Unfollow' : 'Follow'" @click="follow()" :class="following ? 'text-red-700' : 'text-green-700'"></button>
                        </x-follow-ctr>
                        <div class="flex gap-2 text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>

                {{-- Clap Section --}}
                <x-clap-button></x-clap-button>

                {{-- Content Section --}}
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">
                    <div class="mt-4">
                        <p>{{ $post->content }}
                    </div>
                </div>

                {{-- Category Section --}}
                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-300 rounded-2xl">{{ $post->category->name }}</span>
                </div>

                {{-- Clap Section --}}
                <x-clap-button></x-clap-button>
            </div>
        </div>
    </div>
</x-app-layout>