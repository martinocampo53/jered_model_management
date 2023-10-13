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
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        .wrap-span {
        white-space: normal;
    }
    </style>
</head>
<body>
    <div class="container divbg">
        <h1 class="wrap-span">Spring Glamour Fashion Show:</h1>
        <h1> CRYSOS</h1>
        <p style="text-align: center;">by JERED MODEL MANAGEMENT</p>


        <div class="event-details row">
            <div class="col-6 d-flex justify-content-center">
                <img style="height: 31rem" src="{{ asset('images/7.png') }}" alt="">
            </div>
            <div class="col-6 caption" style="margin-top: 50px">
                <div>
                    <span class="wrap-span">SPRING GLAMOUR FASHION SHOW : CRYSOS</span>
                </div>
                <div>
                    <span class="wrap-span">Date: October 27, 2023</span> <span><br> Time: 6:30PM</span>
                </div>
                <div>
                    <span class="wrap-span">ONLY DROP-OFF</span>
                </div>
                <div class="contact-info">
                    <div>
                        <span class="wrap-span">{{ $participant->name }}</span> <span></span><br>
                        <span class="wrap-span">Phone Number: </span> <span>{{ $participant->phone_number }}</span><br>
                        <span class="wrap-span">Email: </span> <span>{{ $participant->email }}</span><br>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h1>{{ $participant->seat_type }}</h1>
    </div>
</body>