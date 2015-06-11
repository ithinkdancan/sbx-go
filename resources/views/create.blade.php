<html>
    <head>
        <title>Create a new URL</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
	        <form action="/create" method="post">
	        	<input type="url" name="full_url" class="url-input" autofocus placeholder="http://www.example.com" required />
	        	<input type="hidden" name="short_url" value="{{ $path }}">
	            <div><button type="submit" class="create_button">Create</button></div>
	        </form>
        </div>
    </body>
</html>