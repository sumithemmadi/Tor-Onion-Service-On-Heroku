<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Host Tor Onion Services On Heroku">
	  <meta name="keywords" content="Tor,Hidden Service,Heroku,Nodejs,Php,Host Hidden Servics on heroku">
  	<meta name="author" content="sumithemmadi">
    <title>Tor Onion Service On Heroku</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Tor Onion Service On</span>  Heroku</h1>
        </div>
        </nav>
      </div>
    </header>

    <section id="boxes">
      <div class="container">
        <h2><b>Welcome To The Landing Page</b></h2>
        <p> <b>This is a example page of the GitHub Repository <a href="https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku">https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku<b></a></p>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
          <h2><b>Onion Link</b></h2>
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "Congratulation 💐<br>Your application is over tor <br>Here is your Onion Link <a href=http://$output>$output</a>";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong<br>Refer to  Github Repository <br><a href="https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme">https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme</a></p>';
              echo '<p>Or raise a issue at <br> <a href="https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme">https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku/issues</a></p></br>';
          }
          ?>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <h2><b>Another Repo Build with php and apache2</b></h2>
        <p> <b>Try my another  GitHub Repository <a href=https://github.com/sumithemmadi/tor-hidden-service-on-heroku>https://github.com/sumithemmadi/tor-hidden-service-on-heroku</a>
      </div>
    </section>
<h2 id="-basic-usage-https-github-com-sumithemmadi-truecallerjs-"><a href="https://github.com/sumithemmadi/truecallerjs">Basic Usage</a></h2>
<h3 id="installation">Installation</h3>
<pre><code class="lang-bash">npm <span class="hljs-keyword">install</span> truecallerjs
</code></pre>
<h3 id="usage">Usage</h3>
<pre><code class="lang-js"><span class="hljs-keyword">const</span> truecallerjs = <span class="hljs-built_in">require</span>(<span class="hljs-string">'truecallerjs'</span>);

<span class="hljs-keyword">var</span> searchData = {
                <span class="hljs-attr">number</span>: <span class="hljs-string">"[PHONE_NUMBER]"</span>,
                <span class="hljs-attr">countryCode</span>: <span class="hljs-string">"[COUNTRY_CODE]"</span>,
                <span class="hljs-attr">installationId</span>: <span class="hljs-string">"[INSTALLATION_ID]"</span>
        }

<span class="hljs-keyword">var</span> sn = truecallerjs.searchNumber(searchData);
sn.then(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">response</span>) </span>{
    <span class="hljs-built_in">console</span>.log(response)
});
</code></pre>
<p>If you want output in different format&#39;s.</p>
<pre><code class="lang-js"><span class="hljs-keyword">const</span> truecallerjs = <span class="hljs-built_in">require</span>(<span class="hljs-string">'truecallerjs'</span>);

<span class="hljs-keyword">var</span> searchData = {
                <span class="hljs-attr">number</span>: <span class="hljs-string">"[PHONE_NUMBER]"</span>,
                <span class="hljs-attr">countryCode</span>: <span class="hljs-string">"[COUNTRY_CODE]"</span>,
                <span class="hljs-attr">installationId</span>: <span class="hljs-string">"[INSTALLATION_ID]"</span>,
                <span class="hljs-attr">output</span>: <span class="hljs-string">"[FORMAT]"</span>
        }

<span class="hljs-keyword">var</span> sn = truecallerjs.searchNumber(searchData);
sn.then(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">response</span>) </span>{
    <span class="hljs-built_in">console</span>.log(response)
});
</code></pre>
<ul>
<li><strong>PHONE_NUMBER</strong> : Number you want to search.</li>
<li><strong>COUNTRY_CODE</strong> : Country code you want to use by default . If mobile number is not in <strong>E164</strong>(International Format) Format then <strong>COUNTRY_CODE</strong> will be considered as a country code of that Mobile Number.</li>
<li><strong>FORMAT</strong> : Format of the output.<br>
   1 . JSON <br>
   2 . XML<br>
   3 . YAML<br>
   4 . TEXT<br>
   5 . HTML</li>
<li><p><strong>INSTALLATION_ID</strong> : To know your InstallationId , install the package globally.</p>
</li>
<li><p><strong>InstallationId</strong></p>
<pre><code class="lang-bash">npm <span class="hljs-keyword">install</span> -g  truecallerjs
</code></pre>
</li>
<li><a href="https://github.com/sumithemmadi/truecallerjs#Login">Login to you account</a>.</li>
<li>Enter the below command to see your <strong>InstallationId</strong>.</li>
</ul>
<pre><code class="lang-bash">truecallerjs <span class="hljs-comment">--installationid</span>
</code></pre>
<h3 id="examples">Examples</h3>
<ul>
<li><strong>Example for JSON response.</strong>
```js
const truecallerjs = require(&#39;truecallerjs&#39;);</li>
</ul>
<p>var searchData = {
                number: &quot;9912345678&quot;,
                countryCode: &quot;IN&quot;,
                installationId: &quot;a1k07--Vgdfyvv_rftf5uuudhuhnkljyvvtfftjuhbuijbhug&quot;,
                output: &quot;JSON&quot;
        }</p>
<p>var sn = truecallerjs.searchNumber(searchData);
sn.then(function(response) {
    console.log(response)
});</p>
<pre><code>Here mobile number <span class="hljs-keyword">is</span> <span class="hljs-keyword">in</span> national format <span class="hljs-keyword">and</span> country code <span class="hljs-keyword">is</span> indian.
So india <span class="hljs-keyword">is</span> considered as a country code <span class="hljs-keyword">of</span> that mobile number <span class="hljs-keyword">and</span> response will be json format.

- **Example <span class="hljs-keyword">for</span> XML response.**
`<span class="javascript"></span>``<span class="javascript">js
<span class="hljs-keyword">const</span> truecallerjs = <span class="hljs-built_in">require</span>(<span class="hljs-string">'truecallerjs'</span>);

<span class="hljs-keyword">var</span> searchData = {
                <span class="hljs-attr">number</span>: <span class="hljs-string">"+12093031250"</span>,
                <span class="hljs-attr">countryCode</span>: <span class="hljs-string">"IN"</span>,
                <span class="hljs-attr">installationId</span>: <span class="hljs-string">"a1k07--Vgdfyvv_rftf5uuudhuhnkljyvvtfftjuhbuijbhug"</span>,
                <span class="hljs-attr">output</span>: <span class="hljs-string">"XML"</span>
        }

<span class="hljs-keyword">var</span> sn = truecallerjs.searchNumber(searchData);
sn.then(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">response</span>) </span>{
    <span class="hljs-built_in">console</span>.log(response)
});</span>
</code></pre><p>Here mobile number is in international format. So it is a US number.</p>
<ul>
<li><strong>Example for YAML response</strong>
```js
const truecallerjs = require(&#39;truecallerjs&#39;);</li>
</ul>
<p>var searchData = {
                number: &quot;09912345678&quot;,
                countryCode: &quot;IN&quot;,
                installationId: &quot;a1k07--Vgdfyvv_rftf5uuudhuhnkljyvvtfftjuhbuijbhug&quot;,
                output: &quot;YAML&quot;
        }</p>
<p>var sn = truecallerjs.searchNumber(searchData);
sn.then(function(response) {
    console.log(response)
});</p>
<pre><code>- **Example <span class="hljs-keyword">for</span> TEXT response**
`<span class="javascript"></span>``<span class="javascript">js
<span class="hljs-keyword">const</span> truecallerjs = <span class="hljs-built_in">require</span>(<span class="hljs-string">'truecallerjs'</span>);

<span class="hljs-keyword">var</span> searchData = {
                <span class="hljs-attr">number</span>: <span class="hljs-string">"09912345678"</span>,
                <span class="hljs-attr">countryCode</span>: <span class="hljs-string">"IN"</span>,
                <span class="hljs-attr">installationId</span>: <span class="hljs-string">"a1k07--Vgdfyvv_rftf5uuudhuhnkljyvvtfftjuhbuijbhug"</span>,
                <span class="hljs-attr">output</span>: <span class="hljs-string">"TEXT"</span>
        }

<span class="hljs-keyword">var</span> sn = truecallerjs.searchNumber(searchData);
sn.then(<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">response</span>) </span>{
    <span class="hljs-built_in">console</span>.log(response)
});</span>
</code></pre><ul>
<li><strong>Example for HTML Table</strong>
```js
const truecallerjs = require(&#39;truecallerjs&#39;);</li>
</ul>
<p>var searchData = {
                number: &quot;09912345678&quot;,
                countryCode: &quot;IN&quot;,
                installationId: &quot;a1k07--Vgdfyvv_rftf5uuudhuhnkljyvvtfftjuhbuijbhug&quot;,
                output: &quot;HTML&quot;
        }</p>
<p>var sn = truecallerjs.searchNumber(searchData);
sn.then(function(response) {
    console.log(response)
});
```</p>
<p><strong>Table</strong></p>
<table>
   <tr>
      <th>Properties</th>
      <th>Values</th>
   </tr>
   <tr>
      <td>data</td>
      <td>
   <tr>
      <td>id</td>
      <td>jsiebejebbeebhee/dnss00w==</td>
   </tr>
   <tr>
      <td>name</td>
      <td>Sumith Emmadi</td>
   </tr>
   <tr>
      <td>imId</td>
      <td>1g7rm006b356o</td>
   </tr>
   <tr>
      <td>gender</td>
      <td>UNKNOWN</td>
   </tr>
   <tr>
      <td>image</td>
      <td><a href="https://storage.googleapis.com/tc-images-noneu/myview/1/jdvdidbdhvdjdvddbkdbeiebeieb">https://storage.googleapis.com/tc-images-noneu/myview/1/jdvdidbdhvdjdvddbkdbeiebeieb</a></td>
   </tr>
   <tr>
      <td>score</td>
      <td>0.9</td>
   </tr>
   <tr>
      <td>access</td>
      <td>PUBLIC</td>
   </tr>
   <tr>
      <td>enhanced</td>
      <td>true</td>
   </tr>
   <tr>
      <td>phones</td>
      <td>
   <tr>
      <td>e164Format</td>
      <td>+000000000000</td>
   </tr>
   <tr>
      <td>numberType</td>
      <td>MOBILE</td>
   </tr>
   <tr>
      <td>nationalFormat</td>
      <td>+000000000000</td>
   </tr>
   <tr>
      <td>dialingCode</td>
      <td>91</td>
   </tr>
   <tr>
      <td>countryCode</td>
      <td>IN</td>
   </tr>
   <tr>
      <td>carrier</td>
      <td>Vodafone Idea</td>
   </tr>
   <tr>
      <td>type</td>
      <td>openPhone</td>
   </tr>
   </td></tr>
   <tr>
      <td>addresses</td>
      <td>
   <tr>
      <td>city</td>
      <td>Andhra Pradesh</td>
   </tr>
   <tr>
      <td>countryCode</td>
      <td>IN</td>
   </tr>
   <tr>
      <td>timeZone</td>
      <td>+05:30</td>
   </tr>
   <tr>
      <td>type</td>
      <td>address</td>
   </tr>
   </td></tr>
   <tr>
      <td>internetAddresses</td>
      <td>
   <tr>
      <td>id</td>
      <td>email@gmail.com</td>
   </tr>
   <tr>
      <td>service</td>
      <td>email</td>
   </tr>
   <tr>
      <td>caption</td>
      <td>Sumith Emmadi</td>
   </tr>
   <tr>
      <td>type</td>
      <td>internetAddress</td>
   </tr>
   </td></tr>
   <tr>
      <td>badges</td>
      <td>[verified][user]</td>
   </tr>
   <tr>
      <td>cacheTtl</td>
      <td></td>
   </tr>
   <tr>
      <td>sources</td>
      <td>[]</td>
   </tr>
   <tr>
      <td>searchWarnings</td>
      <td>[]</td>
   </tr>
   <tr>
      <td>surveys</td>
      <td>[]</td>
   </tr>
   </td></tr>
   <tr>
      <td>provider</td>
      <td>ss-nu</td>
   </tr>
   <tr>
      <td>stats</td>
      <td>
   <tr>
      <td>sourceStats</td>
      <td>[]</td>
   </tr>
   </td></tr>
</table>

<h2 id="license">License</h2>
<p><a href="https://github.com/sumithemmadi/truecallerjs"><img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2Fsumithemmadi%2Ftruecallerjs.svg?type=large" alt="FOSSA Status"></a></p>

    <footer>
      <p>Tor Onion Service On Heroku, Copyright &copy; 2021</p>
    </footer>
  </body>
</html>
