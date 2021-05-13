@include('layouts.layout')
@include('partials.header')
<div class="main">
  <div class="container">
    <div class="series">
      <p>current series</p>
    </div>

    <div class="card-wrapper">
      @foreach ($comics as $index => $comic)
      <a href="{{route('detail', ['id' => $index])}}"  class="card">
        <div>
          <div class="thumb">
            <img src="{{$comic['thumb']}}" alt="">
          </div>
          <h5>{{$comic['series']}}</h5>
        </div>
        </a>
      @endforeach
    </div>
  </div>
  <div class="flex-center">
    <button class="btn" type="button" name="button">load more</button>
  </div>
</div>
