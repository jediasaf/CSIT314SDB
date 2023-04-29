<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>confirmation page</title>
<style type="text/css">
@import url("PaymentPage.css");
</style>
</head>

    <div class="mainscreen">
      <div class="card">
        <div class="leftside">
          <img
            src="D.png"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
          <form action="">
            <h1>Check Out</h1>
            <h2>Payment Information</h2>
			  <p>Thank You, Please bring along your booking ID and or Proof of Payment when you come to the cinema.</p>
			  <p>Only accept PayNow to 88765790</p>
            <p>Booking ID</p>
            <input type="text" class="inputbox" name="name" required />
            <p>PayNow Name</p>
            <input type="text" class="inputbox" name="paynow_number" id="paynow_number" required />
			  <p>PayNow Number</p>
            <input type="number" class="inputbox" name="paynow_number" id="paynow_number" required />


            <p>Payment Type</p>
            <select class="inputbox" name="payment_type" id="payment_type" required>
              <option value="">--Select a Payment Type--</option>
              <option value="PayNow">PayNow</option>
              <option value="Pay at Counter">Pay at Counter</option>
            </select>
<div class="paymentdate">

            <p class="paymentdate_text">Payment Date</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
        </div>
            <p></p>
			  <a href="HomePage SDB.html">
            <button type="submit" class="button">CheckOut</button>
				  </a>
          </form>
        </div>
      </div>
    </div>
  

<body>
</body>
</html>
