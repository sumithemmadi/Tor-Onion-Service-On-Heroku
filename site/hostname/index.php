<?php
/*
## MIT License

## Copyright (c) 2021 Emmadi Sumith Kumar

## Permission is hereby granted, free of charge, to any person obtaining a copy
## of this software and associated documentation files (the "Software"), to deal
## in the Software without restriction, including without limitation the rights
## to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
## copies of the Software, and to permit persons to whom the Software is
## furnished to do so, subject to the following conditions:

## The above copyright notice and this permission notice shall be included in all
## copies or substantial portions of the Software.

## THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
## IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
## FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
## AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
## LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
## OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
## SOFTWARE.
*/

//$output = shell_exec('cat ../../temp/var/lib/tor/hidden_service/hostname');
if (file_exists('../../temp/var/lib/tor/hidden_service/hostname')) {
  $output = shell_exec('cat ../../temp/var/lib/tor/hidden_service/hostname');
  echo "<h1 style='text-align:center;'>Tor-Onion-Service-On-Heroku</h1><h3>Your Onion Link : <a href=http://$output>$output</a></h3>";
} else {
  echo '<h1 style = "text-align:center;">Tor-Onion-Service-On-Heroku</h1><h2>Something went wrong</h2><h3>Refer to  Github Repo : <a href="https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme">https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku#readme</a></h3></br>';
}
?>
