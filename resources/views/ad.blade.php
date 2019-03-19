<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IOS Haven Dev</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900i,700|Martel:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:900i|Amiko:400|Montserrat:600|Lora:400" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/main.min.css">

    <style media="screen">
      button:disabled {
        opacity: 0.5;
      }
      button:disabled:hover {
        cursor: no-drop;
      }
    </style>
  </head>

  <body class="p-0 m-0 bg-blue">

    <section >
      <div class="container">
        @if($alias)
          <div class="h2 text-center text-white">{{ $alias }}</div>
        @endif
        <div class="h4 text-center text-white w-100"id="countdown">
          {{ $viewed ? "Ready!" : "10" }}
        </div>

        <form action="/url" method="post" class="text-center">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $id }}">
          <button type="submit" name="token" id="continue" class="btn btn-white text-dark mx-auto {{ !$viewed ? 'disabled' : ''}}"
          @if(!$viewed)
          disabled
          @endif
          >
          @if(!$viewed)
          Download Not Ready
          @else
          IOS Haven Download
          @endif
          </button>
        </form>
      </div>
    </section>

  </body>
</html>



<script src="https://www.google.com/recaptcha/api.js?render={{ env('NOCAPTCHA_SITEKEY') }}"></script>
  <script>
      var count = {{ $viewed ? "0" : "10" }}
      if (count > 0) {
        var counter = setInterval(function () {
          if (count > 0) {
            count -= 1
            document.getElementById('countdown').innerHTML = count
          } else {
            document.getElementById('countdown').innerHTML = 'Ready!'
            document.getElementById('continue').style.display = "block"
            document.getElementById('continue').disabled = false
            document.getElementById('continue').classList.remove('disabled')
            clearInterval(counter)
          }

        }, 1000)
      }


      setTimeout(function () {
        grecaptcha.ready(function() {
          grecaptcha.execute("{{ env('NOCAPTCHA_SITEKEY') }}", {action: 'homepage'}).then(function(token) {
            document.getElementById('continue').value = token
          });
        })
      }, 9000)



  </script>