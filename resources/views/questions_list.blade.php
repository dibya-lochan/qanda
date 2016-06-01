<!DOCTYPE html>
<html>
<body>

@foreach ($list as $ques)
<h2>{{$ques->questions}}</h2>

<ul>
	@foreach ($ques->answers as $ans)

  <li>
  	
					<input type="radio" name="video_type" id="video_type" class="video_type" value="ustream" style="width:auto;margin-left:10px;"
					@if($ans->status==1)
					checked
					@endif
					>
  	{{$ans->answers}}

  </li>
  
  @endforeach

</ul>  
 @endforeach
</body>
</html>
