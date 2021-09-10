var express = require('express');
var sphp = require('sphp');

var app = express();
var server = app.listen(process.env.PORT || 4000);

app.use(sphp.express('site/'));
app.use(express.static('site/'));
