<!DOCTYPE html>
<html>
  <head>
    <title>Parcel Sandbox</title>
    <meta charset="UTF-8" />
  </head>
  <style>
		body {
		  font-family: sans-serif;
		}
  </style>
  <body>
    <video class="myvid"></video>

    <script>
    	let vid = document.querySelector(".myvid");

		function success(stream) {
		  let vid_url = URL.createObjectURL(stream);
		  vid.src = vid_url;
		  vid.play();
		}
		function fail(err) {
		  console.log(err.message);
		}

		navigator.mediaDevices
		  .getUserMedia({
		    video: true,
		    audio: true
		  })
		  .then(success)
		  .catch(fail);
    </script>
  </body>
</html>
