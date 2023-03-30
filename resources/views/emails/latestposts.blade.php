 Latest News Updates

@foreach ($posts as $post)

<div class="job-item first">
  <p class="date">{{ $post->date }}</p>
  <p class="position">{{ $post->title }}</p>
   <p> {{ $post->content }} </p>
    <h3>{{ $post->signed_by }}</h3>
</div>

@endforeach


