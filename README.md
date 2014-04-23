# Browser

Browser is a dead simple add-on for detecting which browser your client is currently using.

Currently detecting Safari, Chrome and Firefox. Looking to add IE and Opera.

## Use

	<audio src="{{ if {browser} == 'safari' }}
			{{ m4a }}
		{{ else }}
			{{ mp3 }}
		{{ endif }}" type="audio/mpeg">
	</audio>

	{{ if {browser} }}
		We love modern browsers!
	{{ else }}
		Get a real browser you goof!!
	{{ endif }}