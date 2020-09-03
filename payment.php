<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<head>
     <title>Rock Paper Scissors Game</title>
</head>



<style >
	
@import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import "font-awesome-sprockets";
    @import "font-awesome";

p.lable1 {
  font-size: 9pt;
  margin-top: 2px;
  padding-top: 0px;
  margin-bottom: 2px;
  text-indent: 5px;
  text-transform: uppercase;
  font-weight: 600;
}

i {
  padding-right: 20px;
}

.cat_textbox {
  border-radius: 5px;
}

.checkout {
  width: 1100px;
  margin: 0px auto;
  font-family: 'Raleway', Arial, sans-serif;
}

.back-cart {
  width: 100%;
  margin-bottom: 30px;
  margin-top: 30px;
  display: inline-block;
  float: right;
  text-align: right;
}

.back-cart a:hover {
  text-align: center;
  width: 200px;
  padding: 10px;
  border: 1px solid #ccc;
  text-decoration: none;
  text-transform: uppercase;
  color: #ccc;
  font-weight: 600;
}

.back-cart a {
  text-align: center;
  width: 200px;
  padding: 10px;
  border: 1px solid #000;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  font-weight: 600;
}

.back-cart i {
  padding-right: 2px;
}

.your-details {
  width: 100%;
  padding: 10px 10px 40px 10px;
  border: 1px solid #ccc;
  display: inline-block;
  border-radius: 5px;
  margin-bottom: 20px;
}

.your-details h2 {
  margin-top: 5px;
  margin-bottom: 5px;
  text-transform: uppercase;
}

.your-details hr {
  border: 1px dashed #ccc;
}

.your-title {
  width: 15%;
  height: 40px;
  margin-right: 10px;
  display: inline-block;
  float: left;
}

.your-title .cat_dropdown {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  color: #000;
  font-size: 12pt;
}

.your-firstname {
  width: 30%;
  height: 35px;
  display: inline-block;
  float: left;
  margin-right: 10px;
}

.your-firstname .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.your-lastname {
  width: 30%;
  height: 35px;
  display: inline-block;
  float: left;
  margin-right: 10px;
}

.your-lastname .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.your-dob {
  width: 20%;
  height: 35px;
  display: inline-block;
  float: left;
}

.your-dob .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.your-email {
  width: 30%;
  height: 35px;
  margin-top: 30px;
  display: inline-block;
  float: left;
  margin-right: 10px
}

.your-email .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.your-homephone {
  width: 25%;
  height: 35px;
  margin-top: 30px;
  display: inline-block;
  float: left;
  margin-right: 10px
}

.your-homephone .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.your-address {
  width: 100%;
  padding: 10px 10px 40px 10px;
  border: 1px solid #ccc;
  display: inline-block;
  border-radius: 5px;
  margin-bottom: 20px;
}

.your-address h2 {
  margin-top: 5px;
  margin-bottom: 5px;
  text-transform: uppercase;
}

.your-address hr {
  border: 1px dashed #ccc;
}

.home-address {
  width: 48%;
  margin-top: 5px;
  padding: 5px 5px 35px 5px;
  border: 1px solid #ccc;
  display: inline-block;
  float: left;
  margin-right: 10px;
}

.home-address p.title {
  font-size: 12pt;
}

.home-address i {
  padding-right: 2px;
}

.post-address {
  width: 48%;
  margin-top: 5px;
  padding: 5px 5px 35px 5px;
  border: 1px solid #ccc;
  display: inline-block;
  float: left;
  margin-right: 10px;
}

.post-address p {
  font-size: 9pt;
}

.post-address p.title {
  font-size: 12pt;
}

.home-street {
  width: 49%;
  height: 35px;
  margin-right: 10px;
  margin-top: 10px;
  display: inline-block;
  float: left;
  padding-bottom: 30px;
}

.home-street .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.home-town {
  width: 47%;
  height: 35px;
  margin-right: 10px;
  margin-top: 10px;
  display: inline-block;
  float: left;
}

.home-town .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.home-postcode {
  width: 49%;
  height: 35px;
  margin-right: 10px;
  margin-top: 0px;
  display: inline-block;
  float: left;
}

.home-postcode .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.home-county {
  width: 47%;
  height: 35px;
  margin-right: 10px;
  margin-top: 0px;
  display: inline-block;
  float: left;
}

.home-county .cat_textbox {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.home-country {
  width: 99%;
  height: 40px;
  margin-right: 10px;
  margin-top: 30px;
  display: inline-block;
  float: left;
}

.home-country .cat_dropdown {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  font-size: 12pt;
  text-indent: 4px;
}

.post-address i {
  padding-right: 6px;
}

.payment-option {
  width: 100%;
  padding: 10px 10px 40px 10px;
  border: 1px solid #ccc;
  display: inline-block;
  border-radius: 5px;
  margin-bottom: 20px;
}

.payment-option h2 {
  margin-top: 5px;
  margin-bottom: 5px;
  text-transform: uppercase;
}


.pop i{
  font-size: 14pt;
  margin-right: 5px;
  margin-left: 5px;
  padding: 0px;
}

.pop input {
  margin-right: 10px;
}

.pop {
  margin-top: 20px;
  margin-bottom: -20px;
}

.cart-payment {
  width: 100%;
  padding: 10px 10px 40px 10px;
  border: 1px solid #ccc;
  display: inline-block;
  border-radius: 5px;
  margin-bottom: 20px;
}

.cart-payment h2 {
  margin-top: 5px;
  margin-bottom: 5px;
  text-transform: uppercase;
}

.cart-payment hr {
  border: 1px dashed #ccc;
}

.type {
  text-align: left;
  width: 25%;
  display: inline-block;
  float: left;
  margin-top: 10px;
  margin-right: 10px;
}

.type select {
  width: 100%;
  margin: 10px;
  font-size: 14px;
  color: #000000;
}

.type img {
  width: 50px;
  vertical-align: middle;
  margin-left: 5px;
  margin-right: 15px;
}

.email {
  width: 0%;
  overflow: hidden;
  display: inline-block;
  float: left;
  margin-right: 10px;
}

.cardname {
  width: 20%;
  height: 35px;
  margin-top: 10px;
  text-align: left;
  display: inline-block;
  float: left;
}

.cardname .cat_textbox {
  width: 100%;
  height: 100%;
  text-indent: 5px;
  font-size: 14px;
  border: 1px solid #ccc;
}

.cardnumber {
  width: 20%;
  height: 35px;
  margin-top: 10px;
  margin-left: 10px;
  text-align: left;
  display: inline-block;
  float: left;
}

.cardnumber .cat_textbox {
  width: 100%;
  height: 100%;
  font-size: 16px;
  text-indent: 5px;
  border: 1px solid #ccc;
}

.expiry {
  text-align: left;
  display: inline-block;
  height: 40px;
  float: left;
  margin-left: 15px;
  margin-top: 10px;
  width: 20%;
}

.expiry select {
  width: 46%;
  height: 100%;
  margin-right: 5px;
  font-size: 12pt;
  color: #000;
  border: 1px solid #ccc;
}

.cvv {
  text-align: left;
  display: inline-block;
  float: left;
  margin-top: 10px;
  width: 10%;
  height: 35px;
}

.cvv .cat_textbox {
  width: 100%;
  height: 100%;
  font-size: 14px;
  border: 1px solid #ccc;
}

.submit {
  width: 100%;
  height: 50px;
  display: inline-block;
  margin-bottom: 10px;
  text-align: right;
}

.submit .cat_button {
  width: 35%;
  height: 100%;
  font-size: 18px;
  background: #fff;
  color: #000000;
  border: 1px solid #000000;
  border-radius: 0px;
}

.submit .cat_button:hover {
  width: 35%;
  height: 100%;
  font-size: 18px;
  background: #393939;
  color: #fff;
  border: 2px solid #393939;
  border-radius: 0px;
  transition: background 0.5s, color 0.5s ease-in-out;
}

</style>
<body>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<div class="checkout">
  
  <div class="back-cart">
    <a href="cart_view.php"> Back to Cart </a>
  </div>

  <div class="form-script">
    <form name="catwebformform76189" method="post" onsubmit="return checkWholeForm76189(this)" enctype="multipart/form-data" action="https://dwcreativeuk.worldsecuresystems.com/FormProcessv2.aspx?WebFormID=425560&amp;OID={module_oid}&amp;OTYPE={module_otype}&amp;EID={module_eid}&amp;CID={module_cid}&amp;CC={module_urlcountrycode}&amp;Referrer={module_siteurl,true,true}">
  </div>

  <div class="your-details">
    <h2> <i class="ion-person"></i> Step 1 - Your Details </h2>
    <hr>

    <div class="your-title">
      <p class="lable1"> Your Title</p>
      <select name="Title" id="Title" class="cat_dropdown">
        <option selected="selected">Title</option>
        <option >Dr</option>
        <option >Miss</option>
        <option >Mr</option>
        <option >Mrs</option>
        <option>Ms</option>
      </select>
    </div>

    <div class="your-firstname">
      <p class="lable1"> Your First Name</p>
      <input type="text" name="FirstName" id="FirstName" class="cat_textbox" maxlength="255" placeholder="First Name" />
    </div>

    <div class="your-lastname">
      <p class="lable1"> Your Last Name</p>
      <input type="text" name="LastName" id="LastName" class="cat_textbox"  maxlength="255" placeholder="Last Name" />
    </div>

    <div class="your-dob">
      <p class="lable1"> Your Date of Birth</p>
      <input type="text" name="DOB" id="DOB" class="cat_textbox" readonly="readonly" style="background-color: #fff;" onfocus="displayDatePicker('DOB');return false;" placeholder="Date of Birth"  />
    </div>

    <div class="your-email">
      <p class="lable1"> Your Email Address </p>
      <input type="text" name="EmailAddress" id="EmailAddress" class="cat_textbox" maxlength="255"  placeholder="Your Email" />
    </div>

    <div class="your-homephone">
      <p class="lable1"> Home Phone Number </p>
      <input type="text" name="HomePhone" id="HomePhone" class="cat_textbox" maxlength="255"  placeholder="Home Phone Number" />
    </div>

    <div class="your-homephone">
      <p class="lable1"> Mobile Phone Number </p>
      <input type="text" name="CellPhone" id="CellPhone" class="cat_textbox" maxlength="255"  placeholder="Mobile Phone Number" />
    </div>

  </div>

  <div class="your-address">
    <h2> <i class="ion-ios-home"></i> Step 2 - Address Details </h2>
    <hr>

    <div class="home-address">
      <p class="title"><i class="ion-card"></i> Billing Address</p>

      <div class="home-street">

        <p class="lable1"> Street Address </p>
        <input type="text" name="BillingAddress" id="BillingAddress" class="cat_textbox" maxlength="500"  />
      </div>

      <div class="home-town">
        <p class="lable1"> Town / City </p>
        <input type="text" name="BillingCity" id="BillingCity" class="cat_textbox" maxlength="255"  />
      </div>

      <div class="home-postcode">
        <p class="lable1"> Post Code</p>
        <input type="text" name="BillingZip" id="BillingZip" class="cat_textbox" maxlength="255" />
      </div>

      <div class="home-county">
        <p class="lable1"> County </p>
        <input type="text" name="BillingState" id="BillingState" class="cat_textbox" maxlength="255"  />
      </div>

      <div class="home-country">
        <p class="lable1"> Country </p>
        <select name="BillingCountry" id="BillingCountry" class="cat_dropdown">
          <option value=" " selected="selected">-- Select Country --</option>
          <option value="GB">UNITED KINGDOM</option>

        </select>
      </div>

    </div>


    <div class="post-address">
      <p class="title"><i class="ion-ios-location"></i>Shipping Address</p>

      <div class="home-street">

        <p class="lable1"> Street Address </p>
        <input type="text" name="ShippingAddress" id="ShippingAddress" class="cat_textbox" maxlength="500"  />
      </div>

      <div class="home-town">
        <p class="lable1"> Town / City </p>
        <input type="text" name="ShippingCity" id="ShippingCity" class="cat_textbox" maxlength="255"  />
      </div>

      <div class="home-postcode">
        <p class="lable1"> Post Code</p>
        <input type="text" name="ShippingZip" id="ShippingZip" class="cat_textbox" maxlength="255"  />
      </div>

      <div class="home-county">
        <p class="lable1"> County </p>
        <input type="text" name="ShippingState" id="ShippingState" class="cat_textbox" maxlength="255"  />
      </div>

      <div class="home-country">
        <p class="lable1"> Country </p>
        <select name="ShippingCountry" id="ShippingCountry" class="cat_dropdown">
          <option value=" " selected="selected">-- Select Country --</option>
          <option value="GB">UNITED KINGDOM</option>

        </select>
      </div>
    </div>
  </div>

  <div class="payment-option">
    <h2><i class="ion-ios-list-outline"></i>Step 3 - Payment Options</h2>
    <strong> Please select your preferred payment option:</strong>
    <br>
<div class="pop">
    <input checked="checked" type="radio" name="PaymentMethodType" id="PaymentMethodType_1" value="1" /><i class="fa fa-cc"></i> Credit/Debit Card
    <input type="radio" name="PaymentMethodType"   id="PaymentMethodType_5" value="5" /><i class="fa fa-paypal"></i>PayPal
    <input type="radio" name="PaymentMethodType" id="PaymentMethodType_9" value="9" /><i class="fa fa-gbp"></i>Cash On Delivery
    </div>
  </div>

  <div class="cart-payment">
    <h2> <i class="ion-card"></i> Step 4- Payment Details - <strong>Your order total is £<input type="text" name="Amount" id="Amount" class="cat_textbox" /></strong> </h2>
    <hr>
    <div class="type">
      <p class="lable1">Select your card type:*</p>
      <input type="radio" name="CardType" id="CardType" class="cat_radio" value="1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/1280px-Visa.svg.png" />

      <input type="radio" name="CardType" id="CardType" class="cat_radio" value="2"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/1280px-MasterCard_Logo.svg.png" />

      <input type="radio" name="CardType" id="CardType" class="cat_radio" value="3"><img src="https://cdn4.iconfinder.com/data/icons/simple-peyment-methods/512/amex_american_express-512.png" />
    </div>

    <div class="email">
      <input type="hidden" name="EmailAddress" id="EmailAddress" class="cat_textbox"  />
    </div>

    <div class="cardname">
      <p class="lable1"> Name on Card </p>
      <input type="text" name="CardName" id="CardName" class="cat_textbox" autocomplete="off" />
    </div>

    <div class="cardnumber">
      <p class="lable1">Card number:</p>
      <input type="text" name="CardNumber" id="CardNumber" class="cat_textbox" autocomplete="off" maxlength="16" />
    </div>

    <div class="expiry">
      <p class="lable1"> Card Expiry Date: </p>
      <select name="CardExpiryMonth" id="CardExpiryMonth" class="cat_dropdown_smaller">
        <option value="01">01 - Jan</option>
        <option value="02">02 - Feb</option>
        <option value="03">03 - Mar</option>
        <option value="04">04 - Apr</option>
        <option value="05">05 - May</option>
        <option value="06">06 - Jun</option>
        <option value="07">07 - Jul</option>
        <option value="08">08 - Aug</option>
        <option value="09">09 - Sep</option>
        <option value="10">10 - Oct</option>
        <option value="11">11 - Nov</option>
        <option value="12">12 - Dec</option>
      </select>
      <select name="CardExpiryYear" id="CardExpiryYear" class="cat_dropdown_smaller">
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
      </select>
    </div>

    <div class="cvv">
      <p class="lable1"> CCV: </P>
      <input type="text" name="CardCCV" id="CardCCV" class="cat_textbox" autocomplete="off" maxlength="4" />
    </div>
  </div>

  <div class="submit">
    <input class="cat_button" type="submit" value="Confirm Details & Make Payment" id="catwebformbutton" />
  </div>

</div>

 <script type="text/javascript" src="/CatalystScripts/ValidationFunctions.js?vs=b1951.r480527-phase1"></script>
    <script type="text/javascript">
//<![CDATA[
var submitcount76189 = 0;function checkWholeForm76189(theForm){var why = "";if (theForm.FirstName) why += isEmpty(theForm.FirstName.value, "First Name"); if (theForm.LastName) why += isEmpty(theForm.LastName.value, "Last Name"); if (theForm.EmailAddress) why += checkEmail(theForm.EmailAddress.value); if (theForm.HomePhone) why += isEmpty(theForm.HomePhone.value, "Home Phone Number"); if (theForm.CellPhone) why += isEmpty(theForm.CellPhone.value, "Cell Phone Number"); if (theForm.BillingAddress) why += isEmpty(theForm.BillingAddress.value, "Billing Address"); if (theForm.BillingCity) why += isEmpty(theForm.BillingCity.value, "Billing City"); if (theForm.BillingState) why += isEmpty(theForm.BillingState.value, "Billing State"); if (theForm.BillingZip) why += isEmpty(theForm.BillingZip.value, ""); if (theForm.BillingCountry) why += checkDropdown(theForm.BillingCountry.value, "Billing Country"); if (theForm.ShippingAddress) why += isEmpty(theForm.ShippingAddress.value, "Shipping Address"); if (theForm.ShippingCity) why += isEmpty(theForm.ShippingCity.value, "Shipping City"); if (theForm.ShippingState) why += isEmpty(theForm.ShippingState.value, "Shipping State"); if (theForm.ShippingZip) why += isEmpty(theForm.ShippingZip.value, "Shipping Zipcode"); if (theForm.ShippingCountry) why += checkDropdown(theForm.ShippingCountry.value, "Shipping Country"); if (!theForm.PaymentMethodType || getRadioSelected(theForm.PaymentMethodType) == 1) { if (theForm.CardName) why += isEmpty(theForm.CardName.value, "Name on Card"); if (theForm.CardNumber) why += isNumeric(theForm.CardNumber.value, "Card Number"); if (theForm.Amount) why += isCurrency(theForm.Amount.value, "Amount"); } if (theForm.PaymentMethodType) why += checkSelected(theForm.PaymentMethodType, "Payment Method");if(why != ""){alert(why);return false;}if(submitcount76189 == 0){submitcount76189++;theForm.submit();return false;}else{alert("Form submission is in progress.");return false;}}
//]]>
</script>
</form>


</body>
</html>