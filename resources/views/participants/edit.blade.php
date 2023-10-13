<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendees</title>

<style>
body {
  background-color: #F0FFFF;
}

</style>
</head>
<body>

<form method="post" action="">
    @csrf
 
    <div role="main" class="form-all">
<ul class="form-section page-section">  

  <br>
    <div class="form-group row">
    <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="first_name" class="form-control" id="first_name" value="{{$attendee->first_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="" value="{{$attendee->last_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="" value="{{$attendee->phone_number}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="email" value="{{$attendee->email}}">
    <label>example@example.com</label>
    </div>
  </div>
  <div>
  <input type="checkbox" id="seat_type" name="seat_type" value="1">
  <label for="vip" class="col-sm-2 col-form-label">VVIP</label>
  <br>
  <label for="quantity">Quantity</label>
  <button class="btn btn-secondary dropdown-toggle" type="button" name="quantity" id="quantity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quantity
  </button>
  <div class="dropdown-menu" aria-labelledby="quantity">
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">2</a>
    <a class="dropdown-item" href="#">3</a>
  </div>
</div>
  <select class="form-dropdown is-active" name="quantity" id="quantity" aria-label="Select Quantity">
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
  <div>
  <input type="checkbox" id="seat_type" name="seat_type" value="2">
  <label for="patron" class="col-sm-2 col-form-label">Patron</label>
  <br>
  <label for="quantity">Quantity</label>
  <select class="form-dropdown is-active" name="quantity" id="quantity" aria-label="Select Quantity">
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

<!-- @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif -->

  <div class="form-group row">
    <div class="col-sm-2 col-form-label">
      <input type="submit" class="btn btn-success">
    </div>
  </div>
</form>
</ul>
</div>
    
</body>
</html>
</x-app-layout>