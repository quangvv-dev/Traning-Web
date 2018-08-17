<h1>Them team</h1>
<form action="{{url('team')}}" method="post">
	{{ csrf_field() }}
	<input type="text" name="name" value="">
	<textarea name="description" id="" cols="30" rows="3"></textarea>
	<input type="text" name="logo">
	<input type="text" name="leader_id">
	<input type="submit" value="submit" name="submit">
</form>