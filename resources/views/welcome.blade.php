{{--

include when is take three parametres first one is boolean means if there is true value then it will include that 
view otherwise not include the view.




--}}



@php
  $fruits = [];
  
@endphp


@includeUnless(true,'pages.header',['fruits'=>$fruits])

<h1>Home</h1>

@include('pages.footer')
@includeIf('pages.content')
