<div id="newsletter">
    <section id="experience" class="text-center">
      <div class="container">
        <div class="newton">
          <h1>LATEST NEWS</h1>
        </div>
        <div class="jobs">

     @foreach ($posts as $post)

          <div class="job-item first">
            <p class="date">{{ $post->date }}</p>
            <p class="position">{{ $post->title }}</p>
            <p class="company">Hilma Aquarium, Lagos</p>
            <p> {{ $post->content }} </p> 

              <h3>{{ $post->signed_by }}</h3>

          </div>
          @endforeach


        </div>
      </div>
    </section>
  </div>
