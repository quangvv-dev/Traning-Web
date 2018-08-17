<h1>Update team</h1>
<form action="/team/{{$team->id}} " method="post">
	{{ method_field('put') }}
	{{ csrf_field() }}

	<input type="text" name="name" value="{{$team->name}}">
	<textarea name="description" id="" cols="30" rows="3">{{$team->description}}</textarea>
	<input type="text" name="logo" value="{{$team->logo}}">
	<input type="text" name="leader_id" value="{{$team->leader_id}}">
	<input type="submit" value="submit" name="submit">
</form>