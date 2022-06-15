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