<!DOCTYPE html>
<html>
<head>
    <title>Presensi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007BFF;
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .presensi-button {
            width: 120px;
            margin: 10px;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0 10px;
        }

        .presensi-button .fa {
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            color: hsla(240, 100%, 25%, 0.75);
            margin: 10px 0;
        }

        p {
            font-size: 16px;
            color: hsla(240, 100%, 25%, 0.75);
            margin: 10px 0;
        }

        .presensi-img {
            max-width: 100%;
            height: auto;
        }

        #clock-container {
            background-color: #007BFF; /* Warna biru */
            color: white;
            font-size: 24px;
            border-radius: 50%; /* Membuatnya menjadi lingkaran */
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<form action="{{url('#')}}" method="post" enctype="multipart/form-data">
            <div class="card-body text-center" >
                                <!-- Your content here -->
                 <p>WELCOME!!! </p>
                </div>
    </form>
       
</body>
</html>
