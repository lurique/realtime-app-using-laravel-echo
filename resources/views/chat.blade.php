@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h1>Chatroom</h1>

			<div class="card card-default">
				<div id="app">
					<chat-log v-bind:messages="messages"></chat-log>
					<chat-composer v-on:messagesubmitted="addMessage"></chat-composer>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <link rel="stylesheet" src="css/app.css"></script> -->
@endsection