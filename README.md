# Leearning PHP 
<p> You can follow this tutorial in <a href="https://www.youtube.com/watch?v=XKWqdp17BFo&list=PLfdtiltiRHWHjTPiFDRdTOPtSyYfz3iLW&index=1" target="_blank">here</a></p>
<h5>Why PHP?</h5>
<ul>
  <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
  <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
  <li>PHP supports a wide range of databases</li>
  <li>PHP is free. Download it from the official PHP resource: <a target="_blank" href="http://www.php.net/">www.php.net</a></li>
  <li>PHP is easy to learn and runs efficiently on the server side</li>
</ul>
<h5>What's new in PHP 7</h5>
<ul>
  <li>PHP 7 is much faster than the previous popular stable release (PHP 5.6)</li>
  <li>PHP 7 has improved Error Handling</li>
  <li>PHP 7 supports stricter Type Declarations for function arguments</li>
  <li>PHP 7 supports new operators (like the spaceship operator: <code class="w3-codespan">&lt;=&gt;</code> )</li>
</ul>
<h5>strlen() - Return the Length of a String</h5>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:15%">Operator</th>
<th style="width:20%">Name</th>
<th style="width:20%">Example</th>
<th style="width:35%">Result</th>
</tr>
<tr>
<td>+</td>
<td>Addition</td>
<td>$x + $y</td>
<td>Sum of $x and $y</td>

</tr>
<tr>
<td>-</td>
<td>Subtraction</td>
<td>$x - $y</td>
<td>Difference of $x and $y</td>

</tr>
<tr>
<td>*</td>
<td>Multiplication</td>
<td>$x * $y</td>
<td>Product of $x and $y</td>

</tr>
<tr>
<td>/</td>
<td>Division</td>
<td>$x / $y</td>
<td>Quotient of $x and $y</td>

</tr>
<tr>
<td>%</td>
<td>Modulus</td>
<td>$x % $y</td>
<td>Remainder of $x divided by $y</td>

<td>Exponentiation</td>
<td>$x ** $y</td>
<td>Result of raising $x to the $y'th power</td>
</tr>
</tbody></table>

<br>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:15%">Operator</th>
<th style="width:22%">Name</th>
<th style="width:15%">Example</th>
<th style="width:38%">Result</th>

</tr>
<tr>
<td>==</td>
<td>Equal</td>
<td>$x == $y</td>
<td>Returns true if $x is equal to $y</td>

</tr>
<tr>
<td>===</td>
<td>Identical</td>
<td>$x === $y</td>
<td>Returns true if $x is equal to $y, and they are of the same type</td>

</tr>
<tr>
<td>!=</td>
<td>Not equal</td>
<td>$x != $y</td>
<td>Returns true if $x is not equal to $y</td>

</tr>
<tr>
<td>&lt;&gt;</td>
<td>Not equal</td>
<td>$x &lt;&gt; $y</td>
<td>Returns true if $x is not equal to $y</td>

</tr>
<tr>
<td>!==</td>
<td>Not identical</td>
<td>$x !== $y</td>
<td>Returns true if $x is not equal to $y, or they are not of the same type</td>

</tr>
<tr>
<td>&gt;</td>
<td>Greater than</td>
<td>$x &gt; $y</td>
<td>Returns true if $x is greater than $y</td>

</tr>
<tr>
<td>&lt;</td>
<td>Less than</td>
<td>$x &lt; $y</td>
<td>Returns true if $x is less than $y</td>

</tr>
<tr>
<td>&gt;=</td>
<td>Greater than or equal to</td>
<td>$x &gt;= $y</td>
<td>Returns true if $x is greater than or equal to $y</td>

</tr>
<tr>
<td>&lt;=</td>
<td>Less than or equal to</td>
<td>$x &lt;= $y</td>
<td>Returns true if $x is less than or equal to $y</td>

</tr>
<tr>
<td>&lt;=&gt;</td>
<td>Spaceship</td>
<td>$x &lt;=&gt; $y</td>
<td>Returns an integer less than, equal to, or greater than zero, depending on 
if $x is less than, equal to, or greater than $y. Introduced in PHP 7.</td>

</tr>

</tbody></table>
<br>

<h5>Sorting Arrays</h5>
<ul>
  <li><code class="w3-codespan">sort()</code> - sort arrays in ascending order</li>
  <li><code class="w3-codespan">rsort()</code> - sort arrays in descending order</li>
  <li><code class="w3-codespan">asort()</code> - sort associative arrays in ascending order, according to the value</li>
  <li><code class="w3-codespan">ksort()</code> - sort associative arrays in ascending order, according to the key</li>
  <li><code class="w3-codespan">arsort()</code> - sort associative arrays in descending order, according to the value</li>
  <li><code class="w3-codespan">krsort()</code> - sort associative arrays in descending order, according to the key</li>
</ul>
<h2>PHP $_SERVER</h2>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:35%">Element/Code</th>
<th style="width:65%">Description</th>
</tr>
<tr>
<td>$_SERVER['PHP_SELF']</td>
<td>Returns the filename of the currently executing script</td>
</tr>
<tr>
<td>$_SERVER['GATEWAY_INTERFACE']</td>
<td>Returns the version of the Common Gateway Interface (CGI) the server is 
using</td>
</tr>
<tr>
<td>$_SERVER['SERVER_ADDR']</td>
<td>Returns the IP address of the host server</td>
</tr>
<tr>
<td>$_SERVER['SERVER_NAME']</td>
<td>Returns the name of the host server (such as www.w3schools.com)</td>
</tr>
<tr>
<td>$_SERVER['SERVER_SOFTWARE']</td>
<td>Returns the server identification string (such as Apache/2.2.24)</td>
</tr>
<tr>
<td>$_SERVER['SERVER_PROTOCOL']</td>
<td>Returns the name and revision of the information protocol (such as HTTP/1.1)</td>
</tr>
<tr>
<td>$_SERVER['REQUEST_METHOD']</td>
<td>Returns the request method used to access the page (such as POST)</td>
</tr>
<tr>
<td>$_SERVER['REQUEST_TIME']</td>
<td>Returns the timestamp of the start of the request (such as 1377687496)</td>
</tr>
<tr>
<td>$_SERVER['QUERY_STRING']</td>
<td>Returns the query string if the page is accessed via a query string</td>
</tr>
<tr>
<td>$_SERVER['HTTP_ACCEPT']</td>
<td>Returns the Accept header from the current request </td>
</tr>
<tr>
<td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
<td>Returns the Accept_Charset header from the current request (such as 
utf-8,ISO-8859-1)</td>
</tr>
<tr>
<td>$_SERVER['HTTP_HOST']</td>
<td>Returns the Host header from the current request </td>
</tr>
<tr>
<td>$_SERVER['HTTP_REFERER']</td>
<td>Returns the complete URL of the current page (not reliable because not all 
user-agents support it)</td>
</tr>
<tr>
<td>$_SERVER['HTTPS']</td>
<td>Is the script queried through a secure HTTP protocol</td>
</tr>
<tr>
<td>$_SERVER['REMOTE_ADDR']</td>
<td>Returns the IP address from where the user is viewing the current page</td>
</tr>
<tr>
<td>$_SERVER['REMOTE_HOST']</td>
<td>Returns the Host name from where the user is viewing the current page</td>
</tr>
<tr>
<td>$_SERVER['REMOTE_PORT']</td>
<td>Returns the port being used on the user's machine to communicate with the 
web server</td>
</tr>
<tr>
<td>$_SERVER['SCRIPT_FILENAME']</td>
<td>Returns the absolute pathname of the currently executing script</td>
</tr>
<tr>
<td>$_SERVER['SERVER_ADMIN']</td>
<td>Returns the value given to the SERVER_ADMIN directive in the web server 
configuration file (if your script runs on a virtual host, it will be the value 
defined for that virtual host) (such as someone@w3schools.com)</td>
</tr>
<tr>
<td>$_SERVER['SERVER_PORT']</td>
<td>Returns the port on the server machine being used by the web server for 
communication (such as 80)</td>
</tr>
<tr>
<td>$_SERVER['SERVER_SIGNATURE']</td>
<td>Returns the server version and virtual host name which are added to 
server-generated pages</td>
</tr>
<tr>
<td>$_SERVER['PATH_TRANSLATED']</td>
<td>Returns the file system based path to the current script</td>
</tr>
<tr>
<td>$_SERVER['SCRIPT_NAME']</td>
<td>Returns the path of the current script</td>
</tr>
<tr>
<td>$_SERVER['SCRIPT_URI']</td>
<td>Returns the URI of the current page</td>
</tr>
</tbody></table>