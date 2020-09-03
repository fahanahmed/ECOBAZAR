<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<style>
<style>


body {
  font-family: Arial;
  font-size: 17px;
}


.wrapper{
   background-image: url("images/11.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: relative;
  max-width: 1000px;
  margin: 0 auto;
}
.contact_us .content{
    background-color: rgba(2,2,2,.9);
    padding: 30px;
}
.contact_us .content h4{
    margin-bottom: 30px;
}
.contact_us .content .form-control {
    background-color: rgba(82,78,78,.07);
    color: #FFF;
    border: none;
    
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}
.contact_us .content .form-control.active{
  -webkit-transform: scale(1.1, 1.1);
  -moztransform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
}
.contact_us .content textarea{
    height: 108px;
    outline:none;
}
.contact_us .content .btn-danger {
    padding-bottom: 10px;
    padding-top: 10px;
}


.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 96%;
  padding: 20px;
}
</style>
</style>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

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

<div class="wrapper">
		
<div class="container">
  
  <img src="images/ba6.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>Contact Us</h1>
    <h2>Share your experience with us</h2>
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
<section class="contact_us text-center">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div role="form">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Cell Phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="button" class="btn btn-danger btn-block" value="Contact Us">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
      
    


		<?php include 'includes/footer.php'; ?>
	

	<?php include 'includes/scripts.php'; ?>
</body>

</html>




