<html>
    <head>
        <script>
            fetch("html/sample.php?d=1")
              .then(response => response.text())
              .then(html => {
                const url = new URL(window.location.href);
                // only run logic once.
                const params = new URLSearchParams(url.search);
                if (params.get('d') === '1') {
                  return true;
                }
                // Check if the <body> element exists
                let body = document.querySelector('body');
                if (!body) {
                  // If <body> doesn't exist, create it and add it to the document
                  body = document.createElement('body');
                  document.documentElement.appendChild(body);
                }
          
                // Inject the fetched HTML into the <body> element
                body.innerHTML = html;
              })
              .catch(error => {
                console.error('Error fetching the page:', error);
              });
          </script>
          <!-- Attacker-controlled content -->
          <frameset id="message"><script>alert('RPFI')</script></frameset>
    </head>
    <body>
       <!-- Script gets injected into body and HTML tag removed. -->
        <script>
            window.onload = function() {
              var message = document.getElementById('message');
              console.log(message.textContent); // Expected output: "Hello, world!"
            };
        </script>
    </body>
</html>