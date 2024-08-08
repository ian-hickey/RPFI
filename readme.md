Most basic example of Relative Path File Injection.

\* Requires Docker

Run the following commands:

`docker build -t rpfi .` (only need to do this the first time)

`docker run -d -p 80:80 -v $(pwd):/var/www/html --name rpfi rpfi` (this starts the app)

Navigate to:
localhost/vulnerablepdf.php

Click the download link. A harmless PDF is downloaded from the server.

Add a forward slash to the url:

localhost/vulnerablepdf.php/

Click the same link.
Now a new PDF is downloaded and executes Javascript.