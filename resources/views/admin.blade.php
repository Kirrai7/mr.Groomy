
<h5>Акции</h5>

<table border="1">
    <tr>
        <th>id</th>
        <th>text</th>
    </tr>
    @foreach($stock as $stock)
    <tr>
        <td>{{$stock->id}}</td>
        <td>{{$stock->text}}</td>
    </tr>
    @endforeach
</table>

<h5>О нас</h5>

<table border="1">
    <tr>
        <th>id</th>
        <th>text</th>
    </tr>
    
    <tr>
        <td>{{$about->id}}</td>
        <td>{{$about->text}}</td>
    </tr>
    
</table>

<h5>Галлерея</h5>

<table border="1">
    <tr>
        <th>id</th>
        <th>photo</th>
    </tr>
    @foreach($gallery as $gallery)
    <tr>
        <td>{{$gallery->id}}</td>
        <td>{{$gallery->photo}}</td>
    </tr>
    @endforeach
</table>

<h2>Услуги для кошек(services_cat)</h2>

<table id="table_cat">
   
<tr>
    <th>id</th>
  <th>title</th>
  <th>price_short</th>
  <th>price_long</th>
  </tr>
  @foreach($services_cat as $s_cat)
  <tr>
  <td>{{$s_cat->id}}</td>
  <td>{{$s_cat->title}}</td>
  <td>{{$s_cat->price_short}}</td>
  <td>{{$s_cat->price_long}}</td>
  </tr>
  @endforeach
</table>

<h2>Услуги для короткошёрстных собак (services_dog_short)</h2>

<table id="table_short">  
<tr>
    <th>id</th>
  <th>title</th>
  <th>price5</th>
  <th>price5_15</th>
  <th>price15_30</th>
  <th>price30_50</th>
  <th>price50</th>
  </tr>
  @foreach($services_dog_short as $s_short)
  <tr>
  <td>{{$s_short->id}}</td>
  <td>{{$s_short->title}}</td>
  <td>{{$s_short->price5}}</td>
  <td>{{$s_short->price5_15}}</td>
  <td>{{$s_short->price15_30}}</td>
  <td>{{$s_short->price30_50}}</td>
  <td>{{$s_short->price50}}</td>
  </tr>
  @endforeach
</table>

<h2>Услуги для длинношёрстных собак (services_dog_long)</h2>

<table id="table_long">  
<tr>
    <th>id</th>
  <th>title</th>
  <th>price5</th>
  <th>price5_15</th>
  <th>price15_30</th>
  <th>price30_50</th>
  <th>price50</th>
  </tr>
  @foreach($services_dog_long as $s_long)
  <tr>
  <td>{{$s_long->id}}</td>
  <td>{{$s_long->title}}</td>
  <td>{{$s_long->price5}}</td>
  <td>{{$s_long->price5_15}}</td>
  <td>{{$s_long->price15_30}}</td>
  <td>{{$s_long->price30_50}}</td>
  <td>{{$s_long->price50}}</td>
  </tr>
  @endforeach
</table>