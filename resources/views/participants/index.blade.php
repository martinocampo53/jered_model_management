<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
thead {
  background-color: #04AA6D;
  color: white;
}
tbody {background-color: white;}
tr:hover {background-color: coral;}
th, td {
  padding: 20px;
  text-align: left;
}

</style>
<x-app-layout>

<div style="align-items: center;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Ticket Type</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Seat Number</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     @foreach ($participants as $participant)
     <td>{{ $participant->id }}</td>
        <td>{{ $participant->last_name }}</td>
        <td>{{ $participant->first_name }}</td>
        <td>{{ $participant->email }}</td>
        <td>{{ $participant->phone_number }}</td>
        <td>{{ $participant->seat_type }}</td>
        <td>{{ $participant->organization_name }}</td>
        <td>{{ $participant->seat_number }}</td>
        <td>
    <a href="{{ route('participants.view', ['participant' => $participant]) }}"><i class="fas fa-eye"></i></i></a> 
    <a href="{{ route('participants.qr', ['participant' => $participant]) }}"><i class="fas fa-qrcode"></i></a>

    <form method="post" action="{{ route('participants.destroy', $participant->id) }}" onsubmit="return confirm('Are you sure you want to delete this participant?')">
  @csrf
  @method('delete')
  <button type="submit" class="btn-danger"><i class="fas fa-trash"></i></button>
</form>


        </td>
    </tr>
     @endforeach

     
  </tbody>
</table>
</div>



</x-app-layout>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
