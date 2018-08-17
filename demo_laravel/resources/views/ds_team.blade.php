<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
    <link rel="shortcut icon" href="download.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<button type="button" class="btn btn-default"><a href="team/create">Them</a></button>
		<table class="table table-hover table-active">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>description</th>
					<th>logo</th>
					<th>leader</th>
					<th>control</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
				<tr>
					<td>{{$team->id}}</td>
					<td>{{$team->name}}</td>
					<td>{{$team->description}}</td>
					<td>{{$team->logo}}</td>
					<td>{{$team->leader_id}}</td>
					<td>
						<button type="submit" class="btn btn-default"><a href="team/{{$team->id}}/edit">edit</a></button>
						<form action="team/{{$team->id}}" method="post">
							{{ method_field('delete') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-danger">delete</button>
						</form>
					</td>
				</tr>
				@endforeach	
			</tbody>
			<tfoot>
				<!-- <tr class="text-center">
					<td>
						<ul class="pagination">
							<li class="{{ $teams->currentPage() == 1 ? 'disabled':'' }}"><a href="{{$teams->previousPageUrl()}}" disabled >&laquo;</a></li>
							
							@for($i = 1; $i <= $teams->lastPage(); $i++)
							<li class="{{ $teams->currentPage()== $i ? 'active':'' }}">
								<a href="{{ str_replace('/?','',$teams->url($i)) }}">{{$i}}</a>
							</li>
							@endfor
							<li class="{{ $teams->currentPage() == $teams->lastPage() ? 'disabled':'' }}"><a href="{{$teams->nextPageUrl()}}">&raquo;</a></li>
						</ul>
					</td>
				</tr> -->

				<tr>
					<td>So trang: {{$teams->lastItem()}}/{{$teams->total()}}</td>
					<td>{{ $teams->links() }}</td>
				</tr>

				<!-- <tr>
					<td>
						@for($i = 0; $i <= $teams->lastItem(); $i++)
							{{$teams[$i]}}
						@endfor
					</td>
				</tr> -->
			</tfoot>
		</table>
	</div>
	<!-- {{dd($trimmed)}} -->
</body>
</html>