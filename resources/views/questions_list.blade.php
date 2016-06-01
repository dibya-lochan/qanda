<!DOCTYPE html>
<html>
<body>

@foreach ($list as $ques)
<h2>{{$ques->questions}}</h2>

<ul>
	@foreach ($ques->answers as $ans)

  <li>{{$ans->answers}}</li>
  
  @endforeach

</ul>  
 @endforeach
</body>
</html>
