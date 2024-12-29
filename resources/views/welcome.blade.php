<h1>Learning Laravel</h1>



@php
  $names = ["Salman Khan","Shahid kapoor","Katrina Kaif"]
@endphp

<ul>
@foreach ($names as $name)
  @if($loop->even)
    <li style="color:red">{{$name}}</li>
  @elseif($loop->odd)
  <li style="color:green">{{$name}}</li>


  @else
  <li>{{$name}}</li>

  @endif

@endforeach
</ul>



