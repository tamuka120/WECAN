﻿
<?php session_start();
session_destroy(); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>WECAN - Login page</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="views/style.css">

  <style>@import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/bootstrap.min.css";
@import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/r8-style.css";
@import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/r8-login.css";
@import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/r8-keyframes.css";




  body {
	background-image: url(https://newevolutiondesigns.com/images/freebies/black-wallpaper-30.jpg)}
	
  
}
#wrapper {
  min-height: 500px;
}

#boxy-login-wrapper {
  width: 31.5em;
  height: 4em !important;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -16em;
  border: 1em;
  -webkit-perspective: 1000;
  -ms-perspective: 1000;
  -moz-perspective: 1000;
  -o-perspective: 1000;
  perspective: 1000;
  -webkit-transition: width 550ms linear;
  -ms-transition: width 550ms linear;
  -moz-transition: width 550ms linear;
  -o-transition: width 550ms linear;
  transition: width 550ms linear;
}
#boxy-login-wrapper.shake {
  -webkit-animation: bad-input-animation 0.5s linear;
  -ms-animation: bad-input-animation 0.5s linear;
  -moz-animation: bad-input-animation 0.5s linear;
  -o-animation: bad-input-animation 0.5s linear;
  animation: bad-input-animation 0.5s linear;
}
#boxy-login-wrapper .tooltip {
  display: block;
  white-space: nowrap !important;
  text-transform: lowercase;
  border-top: 1px solid #F9F9F9 !important;
  padding-top: -8px !important;
  -webkit-border-radius: 2px;
  -ms-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
}
#boxy-login-wrapper .tooltip .tooltip-arrow {
  border-bottom-color: #222229;
}
#boxy-login-wrapper .tooltip .tooltip-inner {
  display: block;
  padding: 4px 5px 4px 5px !important;
  margin: -4px 0px 0px 0px !important;
  border-width: 1px;
  background-color: #222229;
  white-space: nowrap;
  text-transform: lowercase;
  -webkit-border-radius: 2px;
  -ms-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  -webkit-border-image: -webkit-gradient(linear, 0 0, 0 100%, from(#F9F9F9), to(transparent)) 1 100%;
  -webkit-border-image: -webkit-linear-gradient(#F9F9F9, transparent) 1 100%;
  -o-border-image: -o-linear-gradient(#F9F9F9, transparent) 1 100%;
  -moz-border-image: -moz-linear-gradient(#F9F9F9, transparent) 1 100%;
  -ms-border-image: -ms-linear-gradient(#F9F9F9, transparent) 1 100%;
}
#boxy-login-wrapper span.boxy-refresh {
  width: 1.30em;
  height: 1.30em;
  position: absolute;
  top: -.25em;
  right: -1.5em;
  opacity: .5;
  display: none;
  /*&.animate-refresh{
      &:before{
        background: #f9f9f9;
        }
      }*/
}
#boxy-login-wrapper span.boxy-refresh:hover {
  opacity: 1;
}
#boxy-login-wrapper span.boxy-refresh:before {
  clear: both;
  width: 1.30em;
  height: 1.30em;
  padding: .15em 0 0 .15em;
  color: #D9D9DA;
  display: block;
  -webkit-border-radius: 50%;
  -ms-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
  -moz-transform-origin: center;
  -o-transform-origin: center;
  transform-origin: center;
  -webkit-transition: all 250ms linear;
  -ms-transition: all 250ms linear;
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  transition: all 250ms linear;
}
#boxy-login-wrapper span.boxy-refresh:hover:before {
  color: #2EBEA5;
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
#boxy-login-wrapper em.small-forgot {
  display: none;
  font-size: 12px;
  font-style: italic;
  font-weight: 400;
  float: right;
  height: 30px;
  color: #666;
  margin: 5px 5px 0 0;
  -webkit-transition: all 250ms linear;
  -ms-transition: all 250ms linear;
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  transition: all 250ms linear;
}
#boxy-login-wrapper em.small-forgot a.boxy-forgot {
  color: #777 !important;
  -webkit-transition: color 250ms linear;
  -ms-transition: color 250ms linear;
  -moz-transition: color 250ms linear;
  -o-transition: color 250ms linear;
  transition: color 250ms linear;
}
#boxy-login-wrapper em.small-forgot a.boxy-forgot:link, #boxy-login-wrapper em.small-forgot a.boxy-forgot:focus, #boxy-login-wrapper em.small-forgot a.boxy-forgot:active {
  color: #666 !important;
  text-decoration: none;
}
#boxy-login-wrapper em.small-forgot a.boxy-forgot:hover {
  color: #2EBEA5 !important;
}
#boxy-login-wrapper form#boxy-login-form {
  height: 4em !important;
  margin: 0 !important;
  padding: 0 !important;
  margin-left: 1em !important;
}
#boxy-login-wrapper form#boxy-login-form .glyphicon.glyphicon-refresh {
  -webkit-transition: all 250ms linear;
  -ms-transition: all 250ms linear;
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  transition: all 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .glyphicon.glyphicon-refresh:hover {
  color: #F7F7F7;
}
#boxy-login-wrapper form#boxy-login-form fieldset {
  margin: 0 !important;
  padding: 0 !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner {
  color: #ccc;
  cursor: pointer;
  font-family: 'Josefin Sans', sans-serif;
  width: 30em;
  height: 4em;
  border: none;
  -webkit-transition: all 0.85s cubic-bezier(0.17, 0.67, 0.14, 0.93);
  -ms-transition: all 0.85s cubic-bezier(0.17, 0.67, 0.14, 0.93);
  -moz-transition: all 0.85s cubic-bezier(0.17, 0.67, 0.14, 0.93);
  -o-transition: all 0.85s cubic-bezier(0.17, 0.67, 0.14, 0.93);
  transition: all 0.85s cubic-bezier(0.17, 0.67, 0.14, 0.93);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotated {
  -webkit-transform: rotateX(0deg);
  -ms-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  -o-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotated90 {
  -webkit-transform: rotateX(90deg);
  -ms-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  -o-transform: rotateX(90deg);
  transform: rotateX(90deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotated180 {
  -webkit-transform: rotateX(180deg);
  -ms-transform: rotateX(180deg);
  -moz-transform: rotateX(180deg);
  -o-transform: rotateX(180deg);
  transform: rotateX(180deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotatedBack90 {
  -webkit-transform: rotateX(-90deg);
  -ms-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  -o-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotatedBack180 {
  -webkit-transform: rotateX(-180deg);
  -ms-transform: rotateX(-180deg);
  -moz-transform: rotateX(-180deg);
  -o-transform: rotateX(-180deg);
  transform: rotateX(-180deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotate3d {
  -webkit-transform: rotateY(90deg);
  -ms-transform: rotateY(90deg);
  -moz-transform: rotateY(90deg);
  -o-transform: rotateY(90deg);
  transform: rotateY(90deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotateFirst3d {
  -webkit-transform: rotateY(-90deg);
  -ms-transform: rotateY(-90deg);
  -moz-transform: rotateY(-90deg);
  -o-transform: rotateY(-90deg);
  transform: rotateY(-90deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner.rotate360 {
  -webkit-transform: rotateX(360deg);
  -ms-transform: rotateX(360deg);
  -moz-transform: rotateX(360deg);
  -o-transform: rotateX(360deg);
  transform: rotateX(360deg);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap {
  height: 4em;
  width: 4em;
  display: inline-block;
  background-color: #F7F7F7 !important;
  position: absolute;
  cursor: normal;
  margin: 0;
  padding: 20px auto;
  -webkit-border-radius: 2px;
  -ms-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right {
  -webkit-transform: rotateY(90deg) translate3d(0, 0, 28em);
  -ms-transform: rotateY(90deg) translate3d(0, 0, 28em);
  -moz-transform: rotateY(90deg) translate3d(0, 0, 28em);
  -o-transform: rotateY(90deg) translate3d(0, 0, 28em);
  transform: rotateY(90deg) translate3d(0, 0, 28em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left .tooltip, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .tooltip {
  margin-left: -1em !important;
  margin-bottom: -1em !important;
  margin-top: 1em !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left .glyphicon, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .glyphicon {
  width: 100% !important;
  -webkit-transition: color 250ms linear;
  -ms-transition: color 250ms linear;
  -moz-transition: color 250ms linear;
  -o-transition: color 250ms linear;
  transition: color 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left .glyphicon:hover, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .glyphicon:hover {
  color: #2EBEA5;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left .glyphicon.glyphicon-user:before, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.left .glyphicon.glyphicon-remove-circle:before, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .glyphicon.glyphicon-user:before, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .glyphicon.glyphicon-remove-circle:before {
  display: block;
  width: 1.3em;
  height: 1.3em;
  padding: 2em auto;
  margin: 0.73em;
  font-size: 22px;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right {
  border: 2px solid #F9F9F9;
  background: url("../img/loader.gif") 50% 50% no-repeat;
  -webkit-transform: rotateY(-90deg) translate3d(0, 0, 2em);
  -ms-transform: rotateY(-90deg) translate3d(0, 0, 2em);
  -moz-transform: rotateY(-90deg) translate3d(0, 0, 2em);
  -o-transform: rotateY(-90deg) translate3d(0, 0, 2em);
  transform: rotateY(-90deg) translate3d(0, 0, 2em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .tooltip {
  margin-left: -0.73em !important;
  margin-bottom: 2em !important;
  margin-top: -2em !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .icon-success,
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right .icon-failure {
  display: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-success {
  color: #2EBEA5 !important;
  background: #F7F7F7 !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-success:hover {
  color: #666 !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-success .icon-success {
  display: block;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-success .icon-failure {
  display: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-failure {
  color: #EA1F54 !important;
  background: #F7F7F7 !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-failure:hover {
  color: #333 !important;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-failure .icon-success {
  display: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .end-cap.right.boxy-failure .icon-failure {
  display: block;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side {
  background-color: #F7F7F7 !important;
  border: 1px thin #ccc;
  box-sizing: border-box;
  position: absolute;
  display: inline-block;
  height: 4em;
  width: 30em;
  text-align: center;
  text-transform: uppercase;
  -webkit-border-radius: 2px;
  -ms-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-user, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-asterisk, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-question-sign {
  display: inline-block;
  float: left;
  height: 1em;
  margin: 1.3em 1.2em;
  color: #999;
  background: transparent;
  -webkit-transition: color 250ms linear;
  -ms-transition: color 250ms linear;
  -moz-transition: color 250ms linear;
  -o-transition: color 250ms linear;
  transition: color 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-user.bad-resp, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-asterisk.bad-resp, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-question-sign.bad-resp {
  color: #EA1F54;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-user:after, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-asterisk:after, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-question-sign:after {
  content: '|';
  font-weight: 300;
  font-size: 18px;
  font-family: 'Josefin Sans', sans-serif;
  float: right;
  margin-right: -1.6em;
  height: 2em;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-user:hover, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-asterisk:hover, #boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side .glyphicon.glyphicon-question-sign:hover {
  color: #2EBEA5;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side input {
  background: transparent;
  border: none;
  margin: 0 0 0 -5px;
  height: 4em;
  width: 21em;
  padding: 15px 15px 15px 35px;
  color: #666;
  float: left;
  font-size: 14px;
  font-size-adjust: 3em;
  font-weight: 700;
  outline: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side button {
  background: transparent;
  border: none;
  margin: 0;
  height: 4em;
  width: 4em;
  padding: 15px 5px;
  float: right;
  overflow: hidden !important;
  color: #333;
  opacity: .25;
  outline: none;
  -webkit-transition: all 250ms linear;
  -ms-transition: all 250ms linear;
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  transition: all 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side button:before {
  content: "\00BB";
  font-size: 5em;
  line-height: .4em;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side button:hover {
  opacity: 1;
  color: #2EBEA5;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.front {
  -webkit-transform: translate3d(0, 0, 2em);
  -ms-transform: translate3d(0, 0, 2em);
  -moz-transform: translate3d(0, 0, 2em);
  -o-transform: translate3d(0, 0, 2em);
  transform: translate3d(0, 0, 2em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.bottom {
  -webkit-transform: rotateX(-90deg) translate3d(0, 0, 2em);
  -ms-transform: rotateX(-90deg) translate3d(0, 0, 2em);
  -moz-transform: rotateX(-90deg) translate3d(0, 0, 2em);
  -o-transform: rotateX(-90deg) translate3d(0, 0, 2em);
  transform: rotateX(-90deg) translate3d(0, 0, 2em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.top {
  -webkit-transform: rotateX(90deg) translate3d(0, 0, 2em);
  -ms-transform: rotateX(90deg) translate3d(0, 0, 2em);
  -moz-transform: rotateX(90deg) translate3d(0, 0, 2em);
  -o-transform: rotateX(90deg) translate3d(0, 0, 2em);
  transform: rotateX(90deg) translate3d(0, 0, 2em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back {
  -webkit-transform: rotateX(-180deg) translate3d(0, 0, 2em);
  -ms-transform: rotateX(-180deg) translate3d(0, 0, 2em);
  -moz-transform: rotateX(-180deg) translate3d(0, 0, 2em);
  -o-transform: rotateX(-180deg) translate3d(0, 0, 2em);
  transform: rotateX(-180deg) translate3d(0, 0, 2em);
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back .glyphicon {
  width: 4em;
  height: 4em;
  display: block;
  position: absolute;
  padding: 20px;
  vertical-align: middle;
  text-align: center;
  -webkit-transition: color 250ms linear;
  -ms-transition: color 250ms linear;
  -moz-transition: color 250ms linear;
  -o-transition: color 250ms linear;
  transition: color 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back .glyphicon.boxy-checked {
  display: block;
  color: #2EBEA5;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back .glyphicon.boxy-unchecked {
  display: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back label {
  max-width: 25em;
  height: 4em;
  width: 100%;
  display: inline-block;
  clear: both;
  overflow: hidden;
  padding-left: 3em;
  margin-top: 20px;
  text-align: left;
  cursor: pointer;
  -webkit-user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -o-user-select: none;
  user-select: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back label:hover {
  cursor: pointer;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back label input[type=checkbox] {
  height: 4em;
  width: 4em !important;
  clear: both;
  overflow: hidden;
  display: none;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back label input[type=checkbox]:hover {
  cursor: pointer;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back button {
  width: 4em;
  background: transparent;
  border: none;
  margin: 0;
  height: 4em;
  padding: 15px 5px;
  float: right;
  overflow: hidden;
  color: #1B1B1B;
  outline: none;
  -webkit-transition: all 250ms linear;
  -ms-transition: all 250ms linear;
  -moz-transition: all 250ms linear;
  -o-transition: all 250ms linear;
  transition: all 250ms linear;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back button:hover {
  background-color: #2EBEA5 !important;
  color: #F7F7F7 !important;
  font-weight: 700;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back button:first-of-type {
  border-right: 1px solid #666;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back button:last-of-type {
  border-left: 1px solid #999;
}
#boxy-login-wrapper form#boxy-login-form .boxy-form-inner .side.back button:before {
  content: '';
  display: none;
}

</style>
</head>



<body>

<div style='position:relative; top:200px; left:33%;'><i style="font-size:35px;color:white;"class="fa fa-sitemap" aria-hidden="true"> WECAN Database Managment</i></div>

  <div id="wrapper">

      <div id="boxy-login-wrapper">

             <form id="boxy-login-form" name="boxy-login-form" action="index.php/login/makeLogin" method="POST">
              
                  <fieldset>
                      <div class="boxy-form-inner rotateFirst3d">
            
                          <span class="end-cap left"><span class="glyphicon glyphicon-user" data-toggle="tooltip" title="click to login"></span></span>
                      
                            <span class="side front">
                                  <span class="glyphicon glyphicon-user" data-toggle="tooltip" title="enter your username"></span>
                                  <input id="boxy-input"  type="input" name="username" class="rotate" placeholder="username" required />
                                  <button class="boxy-button next-field" data-step="0"></button>
                            </span>

                            <span class="side bottom">
                                  <span class="glyphicon glyphicon-asterisk" data-toggle="tooltip" title="enter your password"></span>
                                  <input id="boxy-password" step="2" type="password" name="password" class="rotate" placeholder="password" required />
                                  <button class="boxy-button next-field sub" data-step="1"></button>
                            </span>

                            <span class="side back">
                                  <span class="boxy-checked glyphicon glyphicon-check"></span>
                                  <span class="boxy-unchecked glyphicon glyphicon-unchecked"></span>
                                      <label for="remember-me">
                                        <input id="remember-me" type="checkbox" name="remember-me" checked />remember me next time?
                                      </label>                                
                                  <button style="width:auto;">Login</button>
                                  
                                  
                            </span>

                            <span class="side top">
                                  <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" title="we'll email login details."></span>
                                  <input id="boxy-email" step="9" type="email" name="email" class="rotate" placeholder="email" />
                                  <button class="boxy-button next-field forgot-btn" data-step="9"></button>
                            </span>
                            <span class="end-cap right">
                                <span class="glyphicon glyphicon-remove-circle icon-failure" data-toggle="tooltip" title="login failed, try again"></span>
                                <span class="glyphicon glyphicon-user icon-success" data-toggle="tooltip" title=""></span>
                            </span>
                      </div>
                  </fieldset>
               </form>

            <span class="boxy-refresh glyphicon glyphicon-refresh"></span>
            <em class="small-forgot">
                      <a href="#" class="boxy-forgot">forgot?</a>
            </em>

        </div>
   </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.2.0/bootbox.min.js'></script>
<script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/1251/bootstrap.glyphs.js'></script>

    <script>$(function(){

'use strict';

// The following values are used to test as dummy data only so that
// we can fake a successful login…

var _boxyWrap = document.getElementById('boxy-login-wrapper');
var _boxyLoginForm = document.forms['boxy-login-form'];
var _boxyFormInner = $(_boxyLoginForm).find('div.boxy-form-inner');

//var _boxySide = jQuery.makeArray( $(_boxyFormInner).find('span.side') );
var _boxySide = $(_boxyFormInner).find('span.side');
var	_boxySideA = _boxySide[0],
	_boxySideB = _boxySide[1],
	_boxySideC = _boxySide[2],
	_boxySideD = _boxySide[3];

var _boxyInput;
var _boxyPassword;
var _boxyEmail;

var _boxyButton = [ $(_boxySideA).find('button.boxy-button').attr('data-step','0'),
					$(_boxySideB).find('button.boxy-button').attr('data-step','1'),
					$(_boxySideC).find('button.boxy-button').attr('data-step','2'),
					$(_boxySideC).find('input[name=remember-me]'),
					$(_boxySideC).find('label[for=remember-me]'),
					$(_boxySideD).find('button.boxy-button').attr('data-step','9')
					];

var _boxyEndCaps = $(_boxyFormInner).find('span.end-cap');

var _boxyLeftCap = $(_boxyEndCaps[0]);
var _boxyRightCap = $(_boxyEndCaps[1]);

var _toLogin = _boxyLeftCap.find('.glyphicon-user'),
	_okLogin = _boxyRightCap.find('.icon-success'),
	_badLogin = _boxyRightCap.find('.icon-failure');

var _boxyButtonA = _boxyButton[0],
	_boxyButtonB = _boxyButton[1],
	_boxyButtonC = _boxyButton[2],
	_boxyButtonD = _boxyButton[5];

var _boxyButtonInput = _boxyButton[3],
	_boxyButtonCombined = _boxyButton[4],
	_boxyMessage = $(_boxyWrap).find('em.small-forgot'),
	_rememberMeOp = $('input#remember-me');

var _checked = $(_boxyWrap).find('span.boxy-checked'),
	_unchecked = $(_boxyWrap).find('span.boxy-unchecked'),
	_boxyRefreshButton = $(_boxyWrap).find('.boxy-refresh'),
	_boxyForgot = $(_boxyWrap).find('.boxy-forgot');



var _toolTipOps = {'placement' : 'top',
					'data-html' : true,
					'data-animation' : true,
					'selector' : '[data-toggle=tooltip]',
					'trigger' : 'hover',
					'delay' : { 'show': 250,
								'hide': 150 
							}
					};

// Inits Bootstrap Tooltips
$(_boxyWrap).tooltip( _toolTipOps );

/********************************************************/
/*	END OF GLOBAL    ************************************/
/*	VARIABLES…       ************************************/
/********************************************************/

// Handles "Remember me" checkbox icons
$(_rememberMeOp).on('change', function(){

	if( $(this).is(':checked') ){

		_checked.css('display','block');
		_unchecked.css('display','none');

	}else{

		_checked.css('display','none');
		_unchecked.css('display','block');
	}
	return false;
});



// Sets focus on next available input field
$(_boxyFormInner).on('keydown', '#boxy-input , #boxy-password', function(evt) { 
	  
	  var keyCode = evt.keyCode || evt.which; 

	  if (keyCode == 9) {
      evt.preventDefault(); 

	    $(this).next('button').click();

      $(this).parent().next('.side').find('input').focus();
	  } 
});


			
_okLogin.on('click',function(evt){
	evt.preventDefault();

	var _disableInputs = $(_boxyFormInner).find('input');

		_disableInputs.attr('disabled','disabled');

		$(_boxyFormInner).removeClass('rotated90');
		$(_boxyFormInner).removeClass('rotated180');
		$(_boxyFormInner).removeClass('rotatedBack90');
		$(_boxyFormInner).removeClass('rotatedBack180');
		$(_boxyFormInner).removeClass('rotate3d');

		if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }

		$(_boxyRefreshButton).fadeIn('slow');

	});


_badLogin.on('click',function(evt){
	evt.preventDefault();
	$(_boxyFormInner).removeClass('rotated90');
		$(_boxyFormInner).removeClass('rotated180');
		$(_boxyFormInner).removeClass('rotatedBack90');
		$(_boxyFormInner).removeClass('rotatedBack180');
		$(_boxyFormInner).removeClass('rotate3d');

		
  if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }
  
	$(_boxyFormInner).addClass('rotate360');

$(_boxyRefreshButton).click();
	});


$(_toLogin).on('click', function(evt){
		
		$(_boxyFormInner).removeClass('rotateFirst3d');
		$(this).next('.side').find('input').focus();
		//var _stepVal = Math.floor( $(this).attr('data-step') );
		evt.preventDefault();
		return false;
	});


	// Next -- Username field
	_boxyButtonA.on('click', function(evt){
		$(this).next('.side').find('input').focus();
		var _stepVal = Math.floor( $(this).attr('data-step') );
		evt.preventDefault();
		return validateForm(_stepVal);
	});

	// Next -- Password field
	_boxyButtonB.on('click', function(evt){
		var _stepVal = Math.floor( $(this).attr('data-step') );
		evt.preventDefault();
		return validateForm(_stepVal);
	});

	 //OK button -- check login and submit
	_boxyButtonC.on('click', function(evt){
		var _stepVal = Math.floor( $(this).attr('data-step') );
		
		$(_boxyFormInner).addClass('rotate3d');

		evt.preventDefault();
		return validateForm(_stepVal);
	});

	_boxyButtonD.on('click', function(evt){
		var _stepVal = Math.floor( $(this).attr('data-step') );
		evt.preventDefault();
		return validateForm(_stepVal);
	});


function testLogin( _user, _pass ){

	var _boxyUser = _user;
	var _boxyPass = _pass;

	var _userValidateAgainst = _boxyUsernameFakedValue;
	var _passValidateAgainst = _boxyPasswordFakedValue;

	var _rightCap = $('.end-cap.right');
	var _leftCap = $('.end-cap.left');

		if ( ( _boxyUser !== _userValidateAgainst ) || ( _boxyPass !== _passValidateAgainst ) ){

			_rightCap.addClass('boxy-failure');
			$('.boxy-failure').find('.icon-failure').stop().fadeIn('slow');
		}


		if ( (_boxyUser === _userValidateAgainst) && (_boxyPass === _passValidateAgainst) ){
			
			_rightCap.addClass('boxy-success');
			$('.boxy-success').find('.icon-success').attr('title','logged in as, ' + _boxyUser );
			$('.boxy-success').find('.icon-success').stop().fadeIn('slow');

		}

}



function validateForm(_step){

	_boxyInput = document.forms['boxy-login-form']['username'];
	_boxyPassword = document.forms['boxy-login-form']['password'];
	_boxyEmail = document.forms['boxy-login-form']['email'];

	if( $(_boxyWrap).hasClass('shake') ){
				$(_boxyWrap).removeClass('shake');
			}

	switch(_step){
		case 0:
/****************************************************************************************/
	// Checks to make sure we are passing a value for the username field
	if( !_boxyInput.value ){
    
    if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }
				
			$(_boxyWrap).addClass('shake');
			$(_boxyMessage).fadeIn('slow');
			
			document.getElementsByName('username')[0].placeholder = 'enter your username to continue';
			
	}else if( _boxyInput.value ){

			$(_boxyLoginForm).find('.boxy-form-inner').addClass('rotated90');
			$(_boxyMessage).fadeOut('slow');
	}
/****************************************************************************************/
		break;
		case 1:
/****************************************************************************************/
	if( !_boxyPassword.value ){
				
    if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }
		$(_boxyWrap).addClass('shake');
		$(_boxyMessage).fadeIn('slow');
		$(_boxyRefreshButton).fadeIn('slow');
		document.getElementsByName('password')[0].placeholder = 'enter your password to continue';
			
	}else if( _boxyPassword.value ){
    
    if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }

		$(_boxyLoginForm).find('.boxy-form-inner').addClass('rotated180');
		$(_boxyMessage).fadeOut('slow');
	}
/****************************************************************************************/
		break;
		case 2:

		var _valUser = _boxyInput.value;
		var _valPass = _boxyPassword.value;

			testLogin( _valUser, _valPass );
		//console.log('testing login creds');

		break;
		case 9:
/****************************************************************************************/
	if( !_boxyEmail.value ){
    
      if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }
    
		$(_boxyWrap).addClass('shake');
		$(_boxyRefreshButton).fadeIn('slow');
				
		document.getElementsByName('email')[0].placeholder = 'enter your email for instructions';
			
	}else if( _boxyEmail.value ){
    
    if( $(_boxyWrap).hasClass('shake') ){ 
        $(_boxyWrap).removeClass('shake');
      }

		//$(_boxyRefreshButton).fadeOut('slow');
    $(_boxyLoginForm).find('.boxy-form-inner').addClass('rotated180');
		$(_boxyMessage).fadeOut('slow');
		$(_boxyRefreshButton).click();

	}
/****************************************************************************************/
		break;
	}
}


			$(_boxyRefreshButton).on('click',function(evt){

				if( $(this).hasClass('animate-refresh') ){
							$(this).removeClass('animate-refresh');
						}

				var _usernameInput = document.getElementsByName('username')[0];
				var _passwordInput = document.getElementsByName('password')[0];
				var _emailInput = document.getElementsByName('email')[0];


				_boxyEndCaps.removeClass('boxy-failure').removeClass('boxy-success');
						
					$(this).addClass('animate-refresh');
				
					_usernameInput.placeholder = 'username';
					_passwordInput.placeholder = 'password';
					_emailInput.placeholder = 'email';

					_usernameInput.value = '';
					_passwordInput.value = '';
					_emailInput.value = '';
				
					$(_boxyFormInner).removeClass('rotated90');
					$(_boxyFormInner).removeClass('rotated180');
					$(_boxyFormInner).removeClass('rotatedBack90');
					$(_boxyFormInner).removeClass('rotatedBack180');
					$(_boxyFormInner).removeClass('rotate3d');

					if( $(_boxyWrap).hasClass('shake') ){ 
                  $(_boxyWrap).removeClass('shake');
                }
					
					$(_boxyMessage).fadeOut('slow');
					$(_boxyRefreshButton).fadeOut('slow');

				var _disableInputs = $(_boxyFormInner).find('input');
					_disableInputs.removeAttr('disabled');

					evt.preventDefault();
				});

$(_boxyForgot).on('click',function(evt){
				evt.preventDefault();

				$(_boxyMessage).fadeOut('slow');
				$(_boxyRefreshButton).fadeOut('slow');
				$(_boxyFormInner).addClass('rotatedBack90');

			});	

});


$('.glyphicon-user, .glyphicon-asterisk, .glyphicon-question-sign').on('click',function(evt){
			evt.preventDefault();		
			var _setFocusInput = $(this).parent().find('input');

			return _setFocusInput.focus();	
			});</script>

</body>
</html>
