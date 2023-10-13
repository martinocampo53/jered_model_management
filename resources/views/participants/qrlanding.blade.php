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
            font-size: 40px;
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

    </style>
</head>
<body>
    <div class="container">
        <h1>Spring Glamour Fashion Show: CRYSOS</h1>
        <p style="margin-left: 17rem">by JERED MODEL MANAGEMENT</p>

        <div class="event-details row">
            <div class="col-6">
                <img style="height: 30rem" src="{{ asset('storage/images/7.png') }}" alt="">
           
            </div>
            <div class="col-6 caption" style="margin-top: 70px">
            <div>
                <span>SPRING GLAMOUR FASHION SHOW : CRYSOS</span>
            </div>
            <div>
                <span>Date: October 27, 2023</span> <span><br> Time: 6:30PM</span>
            </div>
            <div>
                <span style="margin-bottom: 5rem;">ONLY DROP-OFF</span> 
            </div>
            <div style="margin-top:50px">
            <h1 style="margin-right: 2rem;">Doe, John</h1>
            </div>
            <div>
                <span>Phone Number:</span> <span>0929xxxxxxx</span><br>
                <span>Email:</span> <span>john_doe@gmail.com</span><br>
            </div>
             </div>
        </div>
        <hr>
        <div class="contact-info"  style="margin-left: 2rem">
            <div>
                </div>
          
        </div>
        <h1 style="font-size: 3rem;">PRODUCER PASS</h1>
        <h2>
         

            
        </h2>
    </div>
</body>
</html>