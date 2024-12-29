<h1>Header Page</h1>



@forelse ( $fruits as $key => $value )
<p>  {{$key}}-{{$value}}</p>
  
@empty
  <p>No Value Found</p>
@endforelse