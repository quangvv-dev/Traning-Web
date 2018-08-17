	<h1>{{session('message_danger')}}</h1>
	<h1>Nhap diem</h1>
	<form action="{{route('diem')}}" method="post">
		{{ csrf_field() }}
		<input type="number" name="diem">
		<input type="submit">
	</form>