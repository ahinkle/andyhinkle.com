@include('llms.preamble')

## Blog

@foreach ($posts as $post)
- [{!! $post->title !!}]({!! url("/blog/{$post->slug}") !!}): {!! $post->description !!}
@endforeach

## Speaking & Podcasts

@foreach ($speaking as $episode)
- [{!! $episode->title !!}]({!! url("/speaking/{$episode->slug}") !!}): {!! $episode->summary !!}
@endforeach

## Elsewhere

- [GitHub](https://github.com/ahinkle): Open source work and contributions
- [The Midwest Artisan](https://themidwestartisanpodcast.com/): Podcast co-hosted by Andy Hinkle
- [Bluesky](https://bsky.app/profile/andyhinkle.com): Bluesky profile
- [X / Twitter](https://x.com/andyhnk): X profile
- [LinkedIn](https://www.linkedin.com/in/athinkle): LinkedIn profile
