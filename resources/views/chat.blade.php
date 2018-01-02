<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatroom</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
	<div id="app">
		<div class="container">
			<h1>Chatroom</h1>

			<chat-log v-bind:messages="messages"></chat-log>
			<chat-composer v-on:messagesubmitted="addMessage"></chat-composer>
		</div>
	</div>

	<script rel="text/javascript" src="js/app.js"></script>
</body>
</html>