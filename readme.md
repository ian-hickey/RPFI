Most basic example of Relative Path File Injection.

\* Requires Docker

Run the following commands:

`docker build -t rpfi .`

`docker run -d -p 8081:80 rpfi`

Navigate to:
localhost:8081/vulnerablepdf.php

Click the download link. A harmless PDF is downloaded from the server.

Add a forward slash to the url:

localhost:8081/vulnerablepdf.php/

Click the same link.
Now a new PDF is downloaded and executes Javascript.