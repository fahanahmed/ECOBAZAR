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