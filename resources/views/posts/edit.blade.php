@extends('main')

@section('title', '| Edycja')

@section('content')

<div class="row">
	{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
	<div class="col-md-8">
		{{ Form::label('title', 'Tytuł:') }}
		{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

		{{ Form::label('slug', 'Url:', ['class' => 'form-spacing-top'])}}
		{{ Form::text('slug', null, ['class' => 'form-control']) }}

		{{ Form::label('body', 'Treść:', ['class' => 'form-spacing-top']) }}
		{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Utworzono dnia:</dt>
				<dd>{{ date('j-n-Y H:i',strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Ostatnia aktualizacja:</dt>
				<dd>{{ date('j-n-Y H:i',strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Anuluj', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Zapisz', ['class' => 'btn btn-primary btn-block'])}}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div>

@stop