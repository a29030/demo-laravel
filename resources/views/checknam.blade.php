
<form action="{{ route('check') }}" method="post">
	@csrf
	<input type="text" name ="nam">
	{!!"<br>"!!}
	@if(session()->has('thongbao'))
		{{session()->get('thongbao')}}
	@endif
	@error('nam')
		{{ $message }}
	@enderror
	{!!"<br>"!!}
	<input type="submit" value = "gui">
</form>