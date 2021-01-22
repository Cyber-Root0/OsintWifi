<html><head> 
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
				<title>Geolocation - OSINT - BSSID </title><link rel="stylesheet" href="https://bootstrapstudio.io/demo//embed//bootstrap/4/default/bootstrap.min.css">

  			<link rel="icon" href="https://specials-images.forbesimg.com/imageserve/617853670/960x0.jpg?fit=scale" type="image/img">

			<style bs-system-element="" bs-hidden="">



		html::-webkit-scrollbar {
			height: 7px;
			width: 7px;
			background: #2f363a;
		}

		html::-webkit-scrollbar-thumb {
			background: rgb(137, 143, 146);
		}

		html::-webkit-scrollbar-thumb:hover {
			background: #767F82;
		}

		html::-webkit-scrollbar-corner {
			display:none;
		}

		html{
			-webkit-user-select: none;
			user-select:none;
			overflow: auto !important;
		}

		body{
			min-height:650px;
		}

		*{
			cursor:default !important;
			pointer-events:all !important;
		}

		a{
			cursor:text;
		}

		img:not([src]):not([srcset]){
			width: 100px;
			height: 80px;
			position: relative;
		}

		img:not([src]):not([srcset]):after{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='50' height='50'%3E%3Cdefs%3E%3Cpath d='M23 31l-3.97-2.9L19 28l-.24-.09.19.13L13 33v2h24v-2l-3-9-5-3-6 10zm-2-12c0-1.66-1.34-3-3-3s-3 1.34-3 3 1.34 3 3 3 3-1.34 3-3zm-11-8c-.55 0-1 .45-1 1v26c0 .55.45 1 1 1h30c.55 0 1-.45 1-1V12c0-.55-.45-1-1-1H10zm28 26H12c-.55 0-1-.45-1-1V14c0-.55.45-1 1-1h26c.55 0 1 .45 1 1v22c-.3.67-.63 1-1 1z' id='a'/%3E%3C/defs%3E%3Cuse xlink:href='%23a' fill='%23fff'/%3E%3Cuse xlink:href='%23a' fill-opacity='0' stroke='%23000' stroke-opacity='0'/%3E%3C/svg%3E");
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
			background-color: #eaeaeb;
		}

		/* Stopping css animations on the stage */

		*:not([bs-anim-preview]){
			transition:none !important;
			transition-duration: 0s !important;
		}

		[bs-dragged]{
			opacity:0.3 !important;
		}

		/* Inline editing */

		[contenteditable=true] {
			box-shadow:-1px -1px 1px rgba(17, 142, 232, 0.85), 
				1px 1px 1px rgba(17, 142, 232, 0.85), 
				0 0 11px rgba(17, 142, 232, 0.85) !important;
			outline:none !important;
			min-height:1em;
			cursor:initial !important;
		}

		[contenteditable=true] *:not([contenteditable=false]){
			cursor:initial !important;
		}

		[contenteditable=true]:empty:before {
		    content: "\00a0\00a0" !important;
		}

		[contenteditable=true] [contenteditable=false] {
			box-shadow:0 0 0 1px rgba(17, 142, 232, 0.85);
		}

		/* Preventing mouse events for embeds */

		iframe, embed, object, audio{
			pointer-events: none !important;
		}

		html.hit-testing iframe,
		html.hit-testing embed,
		html.hit-testing object,
		html.hit-testing audio {
			pointer-events: all !important;
		}

		

		/* Giving sizes to some elements. */

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.form-group:empty:before,
		.container:empty:before,
		div[class*="container-"]:empty:before{
			background-color: #eee;
			content: 'Empty Row';
			font-size: 20px;
			color: #aaa;
			font-weight: bold;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 80px;
			padding: 0 10px;
			line-height: 26px;
		}

		div[class*="col-"]:empty:before{
			content:'Empty Column';
		}

		form:empty:before{
			content:'Empty Form';
		}

		.form-group:empty:before{
			content:'Empty Form Group';
		}

		form.navbar-form:empty:before{
			display: inline-block;
			padding:0 40px;
			font-size:16px;
			line-height:36px;
		}

		.container:empty:before,
		div[class*="container-"]:empty:before{
			content:'Empty Container';
		}

		.thumbnail img:not([src]){
			background-repeat: no-repeat;
		    background-size: 100% 85%;
		    background-position-y: 50%;
		    width: 100%;
			height: 180px;
		}

		/* Making the dropdown menus have a white background when they're edited */

		.dropdown-item:active,
		.dropdown-menu>li>a:focus{
			background:unset;
			color:unset;
		}

		/* This is needed because the li items are 0x0px by default,
		and bootstrap studio can't select them */

		.pagination>li {
		  float: left;
		}

		/* Iframes without src are colored in gray */
		.embed-responsive iframe:not([src]){
			background-color:#ddd;
		}

		/* This is needed, otherwise split buttons in input groups break into two lines. */

		.input-group-btn .btn-group > .btn{
			float:none;
		}

		

		div[class*="col-"]:empty,		
		div.col:empty{
			display:flex;
		}

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.container:empty:before, 
		div[class*="container-"]:empty:before{
			width: 100%;
		}

		div.col:empty:before{
			background-color:#eee;
			content:'Empty Column';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
			width:100%;
		}

		.toast-header img:not([src]):not([srcset]) {
			width: 30px;
			height: 30px;
		}

		/* Stopping css spinner animations */

		.spinner-grow:not([bs-spinner-animation]),
		.spinner-border:not([bs-spinner-animation]) {
			animation: none;
		}

		.spinner-grow:not([bs-spinner-animation]) {
			opacity: 1;
			transform: scale(.8);
		}

		.custom-range::-webkit-slider-runnable-track {
		    cursor: inherit;
		}
		
		/* Prevent stretched links from capturing all page clicks */
		a.stretched-link:after {
			pointer-events: none;
		}
		</style>




		<link rel="stylesheet" href="https://bootstrapstudio.io/demo//embed/animation/animate.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="https://bootstrapstudio.io/demo//embed/animation/aos.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/fontawesome-all.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/font-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/ionicons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/line-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/material-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/simple-line-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo//embed/fonts/typicons.min.css"><link rel="stylesheet" href="https://bootstrapstudio.io/demo//embed/fonts/fontawesome5-overrides.min.css" bs-system-element="" bs-hidden=""><style>.footer-basic {
  padding: 40px 0;
  background-color: #ffffff;
  color: #4b4c4d;
}

.footer-basic ul {
  padding: 0;
  list-style: none;
  text-align: center;
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 0;
}

.footer-basic li {
  padding: 0 10px;
}

.footer-basic ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.8;
}

.footer-basic ul a:hover {
  opacity: 1;
}

.footer-basic .social {
  text-align: center;
  padding-bottom: 25px;
}

.footer-basic .social > a {
  font-size: 24px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  border: 1px solid #ccc;
  margin: 0 8px;
  color: inherit;
  opacity: 0.75;
}

.footer-basic .social > a:hover {
  opacity: 0.9;
}

.footer-basic .copyright {
  margin-top: 15px;
  text-align: center;
  font-size: 13px;
  color: #aaa;
  margin-bottom: 0;
}

</style><style>.login-dark {
  height: 1000px;
  background: #475d62 url(blob:https://bootstrapstudio.io/3cacf014-dedc-4492-aa5a-008b55571f09);
  background-size: cover;
  position: relative;
}

.login-dark form {
  max-width: 320px;
  width: 90%;
  background-color: #1e2833;
  padding: 40px;
  border-radius: 4px;
  transform: translate(-50%, -50%);
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  box-shadow: 3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
  text-align: center;
  padding: 15px 0 20px;
  font-size: 100px;
  color: #2980ef;
}

.login-dark form .form-control {
  background: none;
  border: none;
  border-bottom: 1px solid #434a52;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
}

.login-dark form .btn-primary {
  background: #214a80;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 26px;
  text-shadow: none;
  outline: none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background: #214a80;
  outline: none;
}

.login-dark form .forgot {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity: 1;
  text-decoration: none;
}

.login-dark form .btn-primary:active {
  transform: translateY(1px);
}

</style><style></style><style bs-system-element="" bs-hidden=""></style>


	
<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: px px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;

}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-github {
  background: black;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;

}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>


</style>

</head>
			<body>
				<div class="login-dark">

    <form  method="POST" action="#">
        <h2 class="sr-only">Login Form</h2>
        <h5 align="center">Encontre WIFIS Com o MAC:</h5>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="form-group"><input type="text" class="form-control" name="mac" placeholder="Digite o MAC AQUI"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">PESQUISAR</button>




        </div>





    </form>







</div>


<center>
	<?php

$mac = addslashes(filter_input(INPUT_POST, 'mac'));

$stream_opts = [
    "ssl" => [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];  

$json=file_get_contents("https://api.mylnikov.org/geolocation/wifi?v=1.1&data=open&bssid=".$mac,false,stream_context_create($stream_opts));
$array=json_decode($json);

$return=$array->result;


if ($return==400){

echo "";

}else if ($return==200) {
$lag=$array->data->lat;
$lon=$array->data->lon;
	echo "Consulta Realizada com Sucesso<br>";

	  echo "<div style='width: 100%''><iframe width='80%'' height='600' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=$lag,$lon+(Mapa%20Osint)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'></iframe></div>";


}

?>	
</center>

<div class="footer-basic">

	
<center>
<h6>@Cyber Root - Todos os Direitos Reservados</h6>	
<a href="https://instagram.com/Cyber_Root0" class="fa fa-instagram"></a>
<a href="mail:boteistem@gmail.com" class="fa fa-google"></a>
<a href="https://www.linkedin.com/in/bruno-v-b4a2181a9/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/channel/UCRwG9iIjY6-QdOTpD-dA0tA/about" class="fa fa-youtube"></a><br>
<a href="https://github.com/Cyber-Root0" class="fa fa-github"></a><br>



</center>





</div>



</body>
</html>
