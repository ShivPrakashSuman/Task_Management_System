
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <style>
        #backImage {
            background: url("storage/images/404error.png");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
            text-align: center;
            padding-top: 300px;
        }
        body{
            margin: 0;
        }
        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ffeba7;
            color: #102770;
            box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2);
        }
        .btn:hover {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
        }
    </style>
<body>
    <div class="container-fluid p-0">
        <div id="backImage">
            <h2 class="text-warning">Oops... Page Not Found</h2>
            <p  class="text-muted">Do not Worry Back To Previous Page</p>
            <a href="/login_register"><button type="button" class="btn btn-primary" style="margin-top:7%">Back To Register & login Page </button></a>
        </div>
    </div>
</body>
</html>
