<?php include 'header_meta_inc_view.php';?>

<?php include 'header_inc_view.php';?>



<h1>Welcome to RestDB</h1>
		
		<h2>RestDB allows you to automatically turn any CSV or database into an API</h2>

		<h4 style="margin-top : 4em">Features</h4>
	    <ul>
			<li>Each new CSV or database connection creates a new REST API endpoint with output as json, jsonp, xml, csv, html, etc</li>
	        <li>Drag and drop CSV upload for CSV-to-API generation</li>				
			<li>Basic SQL "SELECT" statements can be used for each endpoint. Currently only read-only queries are included</li>
			<li>You can create custom SQL queries as new endpoints for more complex statements like JOINs across multiple tables.</li>			
			<li>You get auto-generated interactive documentation as a <a href="http://swagger.wordnik.com/">Swagger compliant API</a></li>
			<li>You can auto-generate client libraries (with the Swagger schema and <a href="https://github.com/wordnik/swagger-codegen">Swagger Codegen</a>)</li>			
			<li>You get API access logs</li>
			<li>You get API key management (soon)</li>
	    </ul>

		
		<h4>This project builds off of the following codebases:</h4>
        <ul class="nav">
            <li><a href="https://github.com/project-open-data/db-to-api">DB to API</a></li>
            <li><a href="https://github.com/philsturgeon/codeigniter-restserver">CI REST Server</a></li>
            <li><a href="https://github.com/philsturgeon/codeigniter-oauth2">CI oAuth2</a></li>
            <li><a href="https://github.com/blueimp/jQuery-File-Upload/">jQuery File Upload</a></li>
            <li><a href="https://github.com/wordnik/swagger-ui">Swagger UI</a></li>
            <li><a href="http://twitter.github.com/bootstrap/">Bootstrap</a></li>
        </ul>		
		
		<h4>To Do</h4>
	    <ul>
			<li>Provide developer documentation for installation and contributions. Provide better user documentation and feature listing</li>	
		    <li>Implement better caching - it's barely implemented at all right now</li>	
		    <li>Implement a UI for custom SQL queries - the backend for this is already in place</li>			
		    <li>Implement pagination by default and provide some configurable options per database</li>	
			<li>Implement API management features like API key provisioning. Backend for this mostly in place already</li>		
	        <li><del>Implement a real user interface, eg actual do some web design</del> - could still use more work</li>
		    <li><del>Implement a form for adding new databases. Backend functionality already works for this </del></li>
	        <li><del>Auto-generate <a href="http://swagger.wordnik.com/">Swagger</a> schema and show interactive documentation. Allow user to edit some of this per database</del></li>			
	    </ul>		

		<h4>Who &amp; Where</h4>
		<ul>
			<li><a href="https://github.com/philipashlock/RESTdb">Source Code</a> being hacked on by <a href="http://twitter.com/philipashlock">Philip Ashlock</a></li>		
		</ul>
		
		<h4>Further Reading</h4>
		<p> For more advanced direct data interaction you might also be interested in <a href="http://reclinejs.com">Recline.js</a>. Since it's a front-end layer Recline.js could also be included as part of the RestDB UI.</p>		


		<?php include 'footer_inc_view.php';?>