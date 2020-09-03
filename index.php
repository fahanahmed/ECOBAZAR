<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style>
<style>


body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 1000px;
  margin: 0 auto;
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.wrapper{
   background-image: url("images/11.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  
    background-size: cover;
    
  
}


</style>
</style>
<?php include 'includes/header.php'; ?>
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('hzv5t4h6xpxh');
</script>
<!-- End of Async Drift Code -->

<body class="hold-transition skin-blue layout-top-nav">
  <?php include 'includes/navbar.php'; ?>
<div class="wrapper">
	
	
<div class="container">
  <img class="container" src="images/ba5.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>WELCOME TO ECHOBAZAR</h1>
    <p style="font-size: 2em;">Easily order your favourite fresh produce and larder items from our online shop and get it delivered straight to your door, with no minimum order and free local delivery. Shop our online farm shop today!</p>
  </div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>
         
   <?php include 'includes/aboutus.php'; ?>
   <?php include 'includes/contactus.php'; ?>

		<?php include 'includes/footer.php'; ?>
	

	<?php include 'includes/scripts.php'; ?>
</body>

</html>






    