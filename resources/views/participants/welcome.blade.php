<!DOCTYPE html>
<html lang="en">
<head>
<!-- for Facebook & Whatsapp-->
<meta property="og:site_name" content="CYRSOS">
<meta property="og:title" content="Spring Glamour Fashion Show 2023">
<meta property="og:description" content="Registration page">

<!-- Image to display -->
<meta property="og:image" itemprop="image" content="images/7.png">

<meta property="og:type" content="website">
<meta property="og:image:type" content="images/7.png">

<meta property="og:image:width" content="300">
<meta property="og:image:height" content="400">

<!-- Website URL -->
<meta property="og:url" content="https://jmmspringglamour.website/">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JERED Model Management</title>

<style>
body {
  background-image: url('images/c5.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.form-group{
  margin-right: 20px;
  margin-left:20px;
}

.box h1{
  color: white;
  text-align: center;
}

.box h3{
  color: white;
  text-align: center;
}

.box h5{
  color: white;
  text-align: center;
}

.box label{
  color: white;
  align-items: center;
}

.box p{
  color: white;
  align-items: center;
}

.box h6{
  color: white;
  align-items: center;
}

.box {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  width: 720px;
  height: auto;
  /* border: 1px solid black; */
  align-items: left;
  margin: auto;
  margin-top: 50px;
  margin-right: 50px;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius:25px;
  padding-top: 30px;
  padding-bottom: 60px;
}

.gcash{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

</style>
</head>
<body>

<form method="post" action="{{ route('participants.store') }}" onsubmit="return submitForm(this);">
    @csrf
 
    <div role="main" class="form-all">
<ul class="form-section page-section">  

</div> 
<div class="box" style="text-align:auto">
    <h1>Spring Glamour Fashion Show</h1>
    <h5>Produced by: JERED MODEL MANAGEMENT</h5>
    
  <br>
    <div class="form-group row">
    <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
    <input type="text" name="first_name" placeholder="Enter First Name" class="form-control" id="first_name" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
    <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" id="last_name" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
    <input type="tel" name="phone_number" placeholder="Enter Phone Number" class="form-control" id="phone_number" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" name="email" placeholder="Enter Email" class="form-control" id="email" required>
    <label>example@example.com</label>
    </div>
  </div>
  <div class="form-group row">
    <label for="seat_type" class="col-sm-2 col-form-label">Ticket Type</label>
    <div class="col-sm-10">
    <select class="form-control" value="formValues" type="button" name="seat_type" id="seat_type" aria-label="Select Ticket Type">
                            <option value="VIP">VIP Php2,500</option>
                            <option value="PATRON">PATRON Php2,000</option>
                            <option value="VIP DESIGNER">VIP DESIGNER</option>
                            <option value="VIP SPONSOR">VIP SPONSOR</option>
                          </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
    <div class="col-sm-10">
    <select class="form-dropdown is-active" value="formValues" name="quantity" id="quantity" aria-label="Select Quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
    </div>
  </div>
  <div class="form-group row">
  <p class="col-sm-12">Please send payment thru Gcash 09179434030 and screenshot of proof of payment to our facebook page. <a href="https://www.facebook.com/JEREDmodelmanagement" id="jmmLink">JERED Model Management</a></p>
</div>
  <h3>PAYMENT METHOD - GCASH</h3>
  <div class="gcash">
        <div style="text-align: center">
      <img src="{{ URL('images/gcash_payment.png') }}" width="200" height="300" alt="Gcash QR">
      </div>
</div>
  <div class="form-group row">
  <br><br>
  <p class="col-sm-12">Once validated, a unique QR Code will be sent to your registered email address and this will serve as your event pass at the entrance.</p>
  <br>
  <p class="col-sm-12">Note: Please be aware that tickets are NON-Refundable</p>
  </div>
<div class="form-group row">
    <div class="col-sm-2 col-form-label">
      <input type="submit" class="btn btn-success">
    </div>
  </div>
 

</form>
</ul>
</div>
</div>
    
</body>
</html>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- @if(session()->has('message'))
    <script>
        swal({
            title: "Event is already full!",
            text: "Sorry, we have already reached our limit.",
            icon: "error",
            buttons: false,
            dangerMode: true,
          })
    </script>    
    @elseif (session()->has('success'))
    <script>
      swal({
          title: "Registration Success",
          text: "Congratulations! Welcome to the event!",
          icon: "success",
          buttons: false,
          dangerMode: false,
        })
     </script>
     @endif -->

     <script>
  function submitForm(form) {
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var phoneNumber = document.getElementById("phone_number").value;
    var email = document.getElementById("email").value;
    //var ticketType = document.getElementById("seat_type").value;
    var quantity = document.getElementById("quantity").value;
    var seatType = document.getElementById("seat_type").value;
    const fbLink = document.createElement('div');
    fbLink.innerHTML = "Please don\'t forget to send the PROOF OF PAYMENT to our facebook page. <a href='https://www.facebook.com/JEREDmodelmanagement'>JERED Model Management</a>";

    swal({
        title: "Are you sure?",
        text: "This following data will be submitted\n\n Name: " + lastName + ", " + firstName + "\n" + "Phone Number: " + phoneNumber + "\n" + "Email: " + email + "\n" + "Ticket Type: " + seatType + "\n" + "Quantity: " + quantity,
        icon: "warning",
        content: fbLink,
        buttons: true,
        dangerMode: true,
    })
    .then(function (isOkay) {
        if (isOkay) {
          form.submit();
              swal({
                title: 'Thank You!',
                text: 'You have successfully registered!',
                //content: fbLink,
                icon: 'success',
                })
        };
    });

    return false;
}

</script>
    