<?php
//$output = shell_exec('cat ../temp/var/lib/tor/hidden_service/hostname');
if (file_exists('../temp/var/lib/tor/hidden_service/hostname')) {
  $output = shell_exec('cat ../temp/var/lib/tor/hidden_service/hostname');
  echo "<h1 style='text-align:center;'>Tor-Onion-Service-On-Heroku</h1><h3>Your Onion Link : <a href=http://$output>$output</a></h3>";
} else {
  echo '<h1 style = "text-align:center;">Tor-Onion-Service-On-Heroku</h1><h2>Something went wrong</h2><h3>Refer to  Github Repo : <a href="https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme">https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme</a></h3></br>';
}
?>
