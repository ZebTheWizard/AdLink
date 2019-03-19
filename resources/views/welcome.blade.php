<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IOS Haven Dev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900i,700|Martel:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:900i|Amiko:400|Montserrat:600|Lora:400" rel="stylesheet" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <link rel="stylesheet" href="/css/main.min.css">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-4649450952406116",
                  enable_page_level_ads: true
             });
        </script>
    </head>

    <body>

      <section>
        <div class="container">
          <h2 class="text-shadow">What is iHvn.dev?</h2>
          <p>iHvn is the domain name that will eventually host all the microservices for <a href="https://ioshaven.co">IOS Haven</a>. Currently we are using this domain to redirect to app downloads, but there will be more to come.</p>
          <p>Eventually we would like to create services for the community such as:</p>
          <ul class="text">
            <li>Signing Service
              <div class="ml-5 my-3">
                This API would allow users to upload an IPA file to our servers. The service would process the file and return a signed IPA file as well as icons, previews, descriptions, etc attached to the IPA.
              </div>
            </li>
            <li>Application API
              <div class="ml-5 my-3">
                This API would return information that would be primarily used to display available applications on the client. The data would include image urls, download links, and basic analytics.
              </div>
            </li>
            <li>Data Storage
              <div class="ml-5 my-3">
                This API would make it easy to store data without a server. The data could be accessed by using GraphQl.
              </div>
            </li>
            <li>Url Shortening
              <div class="ml-5 my-3">
                This API would store urls in a database paired with a 64bit ID. It would return the shortened URL.
              </div>
            </li>
            <li>Image processing / hosting
              <div class="ml-5 my-3">
                Upload an image to change dimensions, change color, add text, etc. Each image could also be hosted and accessed by selected the 64bit ID.
              </div>
            </li>
            <li>Network monitoring
              <div class="ml-5 my-3">
                Get the status of each service and the main website. As well as allowing administrators to monitor network traffic.
              </div>
            </li>
          </ul>
          <p>Obviously these goals will be difficult to reach for 2 developers, but we are going to try our hardest to finish them.</p>
        </div>
      </section>

      <section>
        <div class="container">
          <h2 class="text-shadow">How can I help?</h2>
          <p>We could really use help with creating and optimizing our services. All of the microservices will eventually be posted to our GitHub account. If you want to help, feel free to make a pull request. Odds are if you make a few pull requests we will contact you about joining our team. However, joining our developer team is not a requirement and we will appreciate all the help that is given.</p>
        </div>
      </section>

      <section>
        <div class="container">
          <h2 class="text-shadow">What technology do we use?</h2>
          <p>Currently we use PHP, NodeJS, and Python as our server languages and we are open to using more.</p>
        </div>
      </section>

      <section>
        <div class="container">
          <h2 class="text-shadow">What services have been published?</h2>
          <p>As of now, no services have been published, but we plan to release them soon.</p>
        </div>
      </section>

    </body>

</html>
