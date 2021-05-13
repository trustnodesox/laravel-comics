@include('layouts.layout')
@include('partials.header')
<div class="single-main">
  <div class="single-blue-stripe">
    <div class="container">
    <div class="view-gallery">
      <img class="comic-wp" src="{{$comic['thumb']}}" alt="">
      <p>view gallery</p>
    </div>
  </div>
  </div>
  <div class="container">

    <div class="flex-center">
      <div class="comic-info">
      <h2>{{$comic['title']}}</h2>

      <table>
        <thead>
          <th>us price {{$comic['price']}}</th>
          <th>available</th>
          <th>check availability</th>
        </thead>
          <tr>
            <td>{{$comic['description']}}</td>
          </tr>
      </table>
    </div>
    </div>
  </div>
  <div class="flex-center">
    <button class="btn" type="button" name="button">load more</button>
  </div>
</div>
