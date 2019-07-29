@extends('main')

@section('title', '| Wszyskie Posty')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Wszystkie Posty</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Nowy Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Tytuł</th>
					<th>Zawartość</th>
					<th>Utworzono</th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 30) }}{{ strlen($post->body) > 50 ? "..." : ""}}</td>
							<td>{{ date('j-n-Y H:i', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
						</tr>
					@endforeach
				</tbody>
			</table>

			<div class="text-center">
				{!! $posts->links(); !!}
			</div>

		</div>
	</div>
@stop