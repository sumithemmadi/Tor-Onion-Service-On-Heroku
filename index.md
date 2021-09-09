# Tor-Onion-Service-On-Heroku
![image](https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white) ![image](https://img.shields.io/badge/Tor-7D4698?style=for-the-badge&logo=Tor-Browser&logoColor=white)
<!--
![IMG_20210822_194228.jpg](IMG_20210822_194228.jpg)
-->


# Ouick Deploy to heroku
- 1 . To  host your website in dark web  with one click and run server on heroku.
- 2 . Click below `Deploy to Heroku` Button.

    [![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku)
    </br> _Note : Deploy with  heroku Deploy  button will host a demo webpage, you  can not use your html file.To host your own webpage goto  <b>[Manually Deploy to Heroku](https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku/blob/main/README.md#manually-deploy-to-heroku)
</b> Session_
- 3 . You will be navigated to [Heroku Dashboard](https://dashboard.heroku.com). Enter app name in `App name` field and click `Deploy app` button.
- 4 . Now your app is accessible over `Tor`.
- 5 . To  know you .onion address open your heroku app `https://App-Name.herokuapp.com` and click on `show my .onion link`.</br></br>
      _Note :- Since,heroku has an ephemerals file system that is destroyed every time when your app restart's.So your application will generate a new .onion link everytime when your app restarts.To use your custom permanent onion link  go down to [Manually Deploy to Heroku](https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku/blob/main/README.md#manually-deploy-to-heroku)</b>._

# Manually Deploy to Heroku

### Prerequisites

![image](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white) ![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![image](https://img.shields.io/badge/git-000000?style=for-the-badge&logo=git&logoColor=white) ![image](https://img.shields.io/badge/Tor-7D4698?style=for-the-badge&logo=Tor-Browser&logoColor=white) 
- 1 . `nodejs`
- 2 . `tor` - v3
- 3 . `php`
- 4 . `git`
- 5 . `Heroku CLI`

### Install Heroku
![image](https://img.shields.io/badge/Heroku-430098?style=for-the-badge&logo=heroku&logoColor=white)

- 1 . Create an account on  **[https://heroku.com](https://heroku.com)**.
- 2 . Install the Heroku CLI on your computer: <br/>**[https://devcenter.heroku.com/articles/heroku-cli](https://devcenter.heroku.com/articles/heroku-cli)**. 
<br/>Check that you have the `heroku-cli` installed by checking the version number in your terminal:
```bash
heroku --version
```
- 3 . Connect the `Heroku CLI` to your account by writing the following command in your terminal and follow the instructions on the command line:
```bash
heroku login
```


### Quick Start

- 1 . Create a new project, for example in my case  `Project` and go to that Dictionary.

- 2 . Clone this repository with below command
```bash
git clone https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku.git
cd Tor-Onion-Service-On-Heroku
```
- 3 . Create a heroku application
```bash
heroku apps:create App-Name
```
-  `heroku apps:create App-Name` this command creates the application as well as a git remote, that you can use to push your code to Heroku:
 
-  _Note: replace `App-Name` with  any other name._
```diff
+ $ heroku apps:create tor-onion-service-on-heroku
 Creating ⬢ tor-onion-service-on-heroku... @@ done
 https://tor-onion-service-on-heroku.herokuapp.com/ | https://git.heroku.com/tor-onion-service-on-heroku.git

```
- 4 . Now add three buildpacks `heroku/nodejs` ,`heroku/php` and `heroku-community/apt` to you application.

- 1. `heroku/nodejs`
```bash
heroku buildpacks:set heroku/nodejs
```

- 2. `heroku-community/apt`

```bash

heroku buildpacks:add --index 1 heroku-community/apt

```


- 3. `heroku/php`
```bash
heroku buildpacks:set heroku/php
```


- Sometimes adding 2nd buildpack will remove 1st one (or) adding 3rd buildpack will remove 2nd one ,try adding all three buildpacks again and again untill you see three buildpacks added as shown in below picture.

![image](https://raw.githubusercontent.com/sumithemmadi/Tor-Onion-Service-On-Heroku/gh-pages/images/builtpack.jpg)
- 6 . Copy your website file's to the folder `site` </br>
      eg :- index.html,index.php [default=index.html]

- 7 . Copy the following files to `temp/var/lib/tor/hidden_service` dir</br> 

   - `hostname`
   - `hs_ed25519_public_key`
   - `hs_ed25519_secret_key`

- If you don't know where these files stored refer to **[https://2019.www.torproject.org/docs/tor-onion-service](https://2019.www.torproject.org/docs/tor-onion-service)**
  

- 8 . Deploy your changes to heroku
```bash
git add .
git commit -am "Tor Onion Service On Heroku"
git push heroku
```

- _Now your app is accessible over Tor_
## To know your .onion address
- Run below command to know your onion address.
```bash
heroku run cat temp/var/lib/tor/hidden_service/hostname
```
![Image](https://raw.githubusercontent.com/sumithemmadi/Tor-Onion-Service-On-Heroku/gh-pages/images/hostname.jpg)
## Get onion link on heroku app
-  If you still can't find your .onion link. </br> Open your heroku app </br>`https://App-Name.herokuapp.com` and click on `show my .onion link`.
<!-- ![alt text](output.jpg) -->

### My app

-  **[https://tor-onion-service-on-heroku.herokuapp.com/](https://tor-onion-service-on-heroku.herokuapp.com/)**
<img src="https://sumith-onion.000webhostapp.com/home.php?w=100&repo=Tor-Onion-Service-On-Heroku&branch=gh-pages">
