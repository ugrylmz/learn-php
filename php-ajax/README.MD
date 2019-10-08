# PHP AJAX Example
<p>
First, check if the input field is empty (str.length == 0). If it is, clear the content of the txtHint placeholder and exit the function.
</p>
<p>
However, if the input field is not empty, do the following:</p>
<ul>
  <li>Create an XMLHttpRequest object</li>
  <li>Create the function to be executed when the server response is ready</li>
  <li>Send the request off to a PHP file (gethint.php) on the server</li>
  <li>Notice that q parameter is added to the url (gethint.php?q="+str)</li>
  <li>And the str variable holds the content of the input field</li>
</ul>
<h5>
run in port <code> localhost:8080/php-ajax/ajaxphp.html</code> or other port...
</h5>
<p><b>Don't open just html file...</b></p>