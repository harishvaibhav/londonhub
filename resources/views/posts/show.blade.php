@extends('layouts.app')
@section('content')
<div class="container mx-auto">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl text-center my-4">{{ ucfirst($post->title) }}</h1>
            <div class="p-4">
                <p class="text-gray-800">{!! $post->body !!}</p>
            </div>
            <div class="bg-gray-100 p-4">
                <h4 class="font-bold text-xl mb-4">Discussion Forum:</h4>
                @foreach($comments as $comment)
                <div class="border-b border-gray-300 py-4">
                    <strong>{{ $comment->user->name }}</strong>
                    <p class="text-gray-800">{{ $comment->body }}</p>
                </div>
                @endforeach

                <form method="post" class="mt-8" action="{{ route('comments.store')}}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body"
                            placeholder="Please comment your thoughts for the above post"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div>
                    <div class="form-group mt-4 text-right">
                        <input type="submit"
                            class="inline-block px-6 py-3 bg-blue-600 text-white font-bold text-xs uppercase rounded shadow-md hover:bg-blue-700 focus:bg-blue-700 focus:outline-none transition duration-150 ease-in-out"
                            value="Add Comment" />
                    </div>
                </form>
            </div>
            @if($post->user_id == Auth::user()->id)
            <div class="bg-gray-100 text-center py-4">
                <a href="/posts/{{ $post->id }}/edit"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-bold text-xs uppercase rounded shadow-md hover:bg-blue-700 focus:bg-blue-700 focus:outline-none transition duration-150 ease-in-out">Edit
                    Post</a>
                <form id="delete-frm" class="inline-block" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button
                        class="inline-block px-6 py-3 bg-red-600 text-white font-bold text-xs uppercase rounded shadow-md hover:bg-red-700 focus:bg-red-700 focus:outline-none transition duration-150 ease-in-out">Delete
                        Post</button>
                </form>
                <a href="/posts"
                    class="inline-block px-6 py-3 bg-blue-600 text-white font-bold text-xs uppercase rounded shadow-md hover:bg-blue-700 focus:bg-blue-700 focus:outline-none transition duration-150 ease-in-out">
                    Go back</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection