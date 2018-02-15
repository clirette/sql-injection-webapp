<h1>Vulnerable web application developed by Chase Lirette for CS 4621 - Intro to Cyber Security.</h1>
<p>These apps were developed to show the vulnerabilities and safeguards against SQL Injection. Each app presents a store front to the user and retrieves data from a MySQL server.</p>
<ul>
	<li><strong>vulnerable_app.php</strong> - The app that is prone to sql injection attacks. Obviously usernames and passwords must be substituted for reuse.</li>
	<li><strong>protected_app.php</strong> - The app that is protected against sql injection attacks by implementing prepared statements.</li>
	<li><strong>test.sql</strong> - A list of possible queries to expose the database.</li>
</ul>
<p>Keep in mind that an extra space is necessary after the ending two dashes in each query.</p>