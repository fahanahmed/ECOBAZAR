



<div class="w3-container">
  
</div>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="images/farhan.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/ba6.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/ba4.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/ba1.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/ba2.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="images/ba3.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="images/ba5.jpg" style="width:100%">
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


    
<div class="container">
  <img class="container" src="images/farhan.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>WHAT WE DO</h1>
    <p style="font-size: 2em;">We are going to provide a door to door delivery within a short period of time. We are ensuring the quality of the products by collecting vegetables and fruits from the marginal farms. There will be a dedicated team in our business team to ensure the quality of our product, we will consistently monitor the market price of the product so that we can provide a suitable price for our customers.</p>
  </div>
</div>
