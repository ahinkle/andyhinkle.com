{{-- prettier-ignore-start --}}@include('llms.preamble')

@foreach ($posts as $post)
## {!! $post->title !!}

URL: {!! url("/blog/{$post->slug}") !!}
@if ($post->published_at)
Published: {!! $post->published_at->toDateString() !!}
@endif

{!! trim($post->content) !!}

@endforeach{{-- prettier-ignore-end --}}
