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
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>



  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>JERED MODEL MANAGEMENT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            height: 50px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 45px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }


        .event-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .event-details div {
            flex: 1 1 200px;
            margin-bottom: 20px;
        }

        .event-details div:last-child {
            flex: 1 1 300px;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-info div {
            flex: 1 1 200px;
        }

        .contact-info div:last-child {
            flex: 1 1 300px;
        }

        .contact-info span {
            font-weight: bold;
        }

        .caption {
            font-size: large;
        }

        .divbg {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('{{ asset('images/lastbg.jpg') }}'); 
            background-size: 100% 100%;
        }

        .whitefont {
            color: white;
        }
        .wrap-span {
        white-space: normal;
    }

    .blackbg
    {
        background-color: black;
    }

    .centered-div {
        justify-content: center;
        background-color: #f0f0f0;
        padding: 20px;
    }

    .centered-text {

  align-items: center;

}

    
    </style>
</head>
<body>
    <div class="container divbg">
        <h1 style="font-weight: bold;" class="wrap-span whitefont">Spring Glamour</h1>
        <h1 style="font-weight: bold;" class="whitefont"> CRYSOS</h1>
        <h2 style="font-size: 20px;" class="whitefont wrap-span" style="text-align: center; ">BY: JERED MODEL MANAGEMENT</h2>


        <div class="event-details row whitefont">
           
            <div class="col-6 caption" style="margin-top: 11rem">
                <div>
                <center><span style="font-weight:bold;" class="wrap-span">{{ $participant->first_name }} {{ $participant->last_name }}</span><br>
                <span class="wrap-span">{{ $participant->phone_number }}</span><br>
                <span class="wrap-span">{{ $participant->email }}</span><br></center>


                </div>
                <div>
                   <center> <span style="font-weight: bold;" class="wrap-span">DATE: OCTOBER 27, 2023</span> <span style="font-weight: bold;"><br> TIME: 6:00PM</span> </center>
                </div>
               
       
            </div>
        </div>

        <div style="margin-top: 100px;" class="container blackbg">
        <hr>
       
        <h2 class="wrap-span whitefont" >{{ $participant->seat_type }} Pass</h2>
        </div>
    </div>
</body>