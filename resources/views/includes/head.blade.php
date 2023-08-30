
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tast Management System</title>

    <!-- Bootstrap Library  -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Toastr Urls -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

    html{
        height: 100%;
    }
    #app{
        height: 100%;
    }
    main{
        height: 100%;
    }
    .maincont{
        height: 100%;
    }
    body {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    font-size: 15px;
    height: 100%;
    color: #c4c3ca;
    background-color: #f3f4f9;
    overflow-x: hidden;
    }

    a {
    cursor: pointer;
    transition: all 200ms linear;
    }

    a:hover {
    text-decoration: none;
    }

    .link {
    color: #c4c3ca;
    }

    .link:hover {
    color: #ffeba7;
    }

    p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
    }

    h4 {
    font-weight: 600;
    }

    h6 span {
    padding: 0 20px;
    text-transform: uppercase;
    font-weight: 700;
    }

    .section {
    position: relative;
    width: 100%;
    display: block;
    }

    .full-height {
    min-height: 100vh;
    }

    [type="checkbox"]:checked,
    [type="checkbox"]:not(:checked) {
    position: absolute;
    left: -9999px;
    }

    .checkbox:checked+label,
    .checkbox:not(:checked)+label {
    position: relative;
    display: block;
    text-align: center;
    width: 60px;
    height: 16px;
    border-radius: 8px;
    padding: 0;
    margin: 10px auto;
    cursor: pointer;
    background-color: #ffeba7;
    }

    .checkbox:checked+label:before,
    .checkbox:not(:checked)+label:before {
    position: absolute;
    display: block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #ffeba7;
    background-color: #102770;
    background-image: url('file:///F:/image/images.jfif');
    font-family: 'unicons';
    content: '\eb4f';
    z-index: 20;
    top: -10px;
    left: -10px;
    line-height: 36px;
    text-align: center;
    font-size: 24px;
    transition: all 0.5s ease;
    }

    .checkbox:checked+label:before {
    transform: translateX(44px) rotate(-270deg);
    }


    .card-3d-wrap {
    position: relative;
    width: 440px;
    max-width: 100%;
    height: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    perspective: 800px;
    margin-top: 60px;
    }

    .card-3d-wrapper {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: all 600ms ease-out;
    }

    .card-front,
    .card-back {
    width: 100%;
    height: 100%;
    background-color: #2a2b38;
    background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: 300%;
    position: absolute;
    border-radius: 6px;
    left: 0;
    top: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
    }

    .card-back {
    transform: rotateY(180deg);
    }

    .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
    transform: rotateY(180deg);
    }

    .center-wrap {
    position: absolute;
    width: 100%;
    padding: 0 35px;
    top: 50%;
    left: 0;
    transform: translate3d(0, -50%, 35px) perspective(100px);
    z-index: 20;
    display: block;
    }


    .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
    }

    .form-style {
    padding: 13px 20px;
    padding-left: 55px;
    height: 48px;
    width: 100%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.5px;
    outline: none;
    color: #c4c3ca;
    background-color: #1f2029;
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
    }

    .form-style:focus,
    .form-style:active {
    border: none;
    outline: none;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
    }

    .input-icon {
    position: absolute;
    top: 0;
    left: 18px;
    height: 48px;
    font-size: 24px;
    line-height: 48px;
    text-align: left;
    color: #ffeba7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:-ms-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input::-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:-moz-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input::-webkit-input-placeholder {
    color: #c4c3ca;
    opacity: 0.7;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:focus:-ms-input-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:focus::-moz-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:focus:-moz-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }

    .form-group input:focus::-webkit-input-placeholder {
    opacity: 0;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
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

    .btn:active,
    .btn:focus {
    background-color: #102770;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
    }

    .btn:hover {
    background-color: #102770;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
    }

    .logo {
    position: absolute;
    top: 30px;
    right: 30px;
    display: block;
    z-index: 100;
    transition: all 250ms linear;
    }

    .logo img {
    height: 26px;
    width: auto;
    display: block;
    }
    .fa-play{
    padding: 11px 12px;
}
.side-header{
    display: -webkit-inline-box;
	padding:23px;
	border-bottom:2px solid gray;
	width:100%;
}
.side-header > p{
	margin:0 25%;
}

@media screen and (max-width: 1020px) {
  .sidebar{ display:none; }
  .main-content{ width:100%; }
}
.sidebar{
	 box-shadow: 10px 0px 30px #cde7f3;
	 z-index:1;
	 position:relative;
}
.sidebar > .logout{
	position:absolute;
	bottom:3%;
	border-top:2px solid gray;
	padding-top:5%;
	width:100%;
}
.sidebar > ul{
	list-style-type:none;
	padding:0;
	margin-top:55px;
}
.sidebar > ul > li{
	margin-top:26px;
}
.sidebar > ul > li > a{
	padding:6% 15% 6% 15%;
	text-decoration:none;
	bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb),var(--bs-text-opacity));
}
.sidebar > ul > li > a > i{
	font-size:20px;
}
nav > div > .btn{
	background-color:#bfc9f4;
}
.sidebar > ul > li > a:hover{
	color:black;
	font-weight:800;
}
.box{
	background-color:#f3f2f9;
}
.box > i{
	float:right;
	margin-right:8%;
}
.box > h4 > small{
	font-size:15px;
}
.box1{
	background-color:#fdf9f0;
	height:100%;
}
.box2{
	background-color:#eeedfd;
	height:100%;
}
.box3{
	background-color:#edfdf0;
	height:100%;
}
.box4{
	background-color:#fbf0f5;
	height:100%;
}
.box1 > h5{
	color:#f7e59e;
}
.box2 > h5{
	color:#afb0d9;
}
.box3 > h5{
	color:#8be5a6;
}
.box4 > h5{
	color:#dda8d1;
}
    </style>
