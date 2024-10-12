<x-layout title="TWEET APP">
    <x-layout.single>
        <h2 class="text-center text-indigo-500 text-4xl font-bold mt-8 mb-8">
            つぶやきアプリ
        </h2>
        <x-tweet.form.post></x-tweet.form.post>
    </x-layout.single>
    <div>
    @foreach($tweets as $tweet)
        <details>
            <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
            @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                <div>
                    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </div>
            @else
                編集できません
            @endif
        </details>
    @endforeach
    </div>
</x-layout>
