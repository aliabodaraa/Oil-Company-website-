<!DOCTYPE html>
<html lang="en">

<head>
     <title>DashBOrdTest</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- New -->
     <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
     <script defer src="fontawesome-free-5.15.3-web/js/all.js"></script>
     <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
     <!-- delete svg circle red -->
     <!-- for House Icon -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>
          @font-face {
               font-family: AliFont;
               src: url(sansation_light.woff);
          }

          body {

               /*11111111111111111*/
               font-family: AliFont;
               /* font-family: "Lato", sans-serif; */
               scroll-behavior: smooth;
               /* Above tosmoothly Transition */
          }
          .container-fluid {
                    padding: 65px 17px 12px 215px;
            }
          .navbar-fixed-bottom .navbar-collapse,
          .navbar-fixed-top .navbar-collapse {
               padding-top: 2px;
               max-height: 110%;
               height: 110%!important;
               background-color: #dddddd;
          }

          .navbar-toggle {
               display: block;
               position: absolute;
               right: 0;
          }
           .navbar-header {
               float: right;
                }
          hr {
               margin-top: -1px;
               margin-bottom: 0px;
               border: 0;
               border-top: 0.7px solid rgb(0 0 0 / 8%);
          }

          li {
               list-style: none;
               background: #d1703c;
               color: #fff;
               height: 0;
               line-height: 2em;
               margin: 0;
               padding: 0 0.5em;
               width: 10em;
          }

          li.show {
               height: 2em;
               margin: 2px 0;
          }

          .sidenav {
               height: 100%;
               width: 200px;
               position: fixed;
               top: -1px;
               left: 0px;
               background-color: white;
          }

          .active {
               position: relative;
               animation: ali2 0.5s ease-in 0s infinite alternate forwards running;
               opacity: 1;
               /* color: rgb(128, 125, 125); */
               /* font-family: cursive; */
               left: 0px;
               font-weight: bold;
          }

          @keyframes ali2 {
               0% {
                    background-color: #666;
                    padding-left: 8px;
               }
               100% {
                    background-color: #666;
                    padding-left: -10px;
               }
          }
          /* On mouse-over */

          .sidenav a:hover,
          .sidenav button:hover,
          .dropdown-btn:hover {
               width: 100%;
               position: relative;
               opacity: 1;
               left: 0px;
               right: 0;
               animation: ali3 0.1s ease-in 0s 1 alternate forwards running;
          }

          @keyframes ali3 {
               0% {
                    left: 2px;
                    right: 2px;
                    background-color: rgb(0 0 0 / 25%);
               }
               100% {
                    background-color: rgb(0 0 0 / 25%);
                    right: 0px;
                    left: 0px;
               }
          }
          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */

          .dropdown-container {
               display: none;
               background-color: rgb(0 0 0 / 8%);
               /* padding-left: 20px; */
          }
          /*    ______________----______________Some media queries for responsiveness------------------------------------------------------------------------------------------ */

          i {
               padding-left: 10px;
               /* Above added */
               padding-bottom: 0px;
               float: right;
               font-size: 12px;
               color: red;
          }
          /*    ______________----______________Some media queries for responsiveness------------------------------------------------------------------------------------------ */
          /*Begin Table Styles */

          table {
               border-collapse: collapse;
               border-spacing: 0;
               width: 100%;
               border: 1px solid #ddd;
          }

          th,
          td {
               text-align: center;
               padding: 8px;
          }

          tr:nth-child(even){
               background-color: white;
          }

          tr:nth-child(odd) {
               background-color: whitesmoke;
          }
        i{
          float:left;
          padding-left: 0px;
          padding-right: 5px;
          }
          a:hover{
              text-decoration:none;
          }
 /*Buttons Begin*/
    .btn-custom {
        margin-bottom:10px;
        display: block;
        width: 100%;
        border: none;
        background-color: #ddd;
        color: black;
        padding: 7px 28px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        }
    .btn-custom-submit {
        margin-bottom: 10px;
        display: block;
        width: 100%;
        border: none;
        background-color: #414142;
        color: white;
        padding: 7px 28px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        text-align: center;
    }
    .btn-custom-red{
        margin-bottom:10px;
        display: block;
        width: 100px;
        border: none;
        background-color: red;
        color: white;
        padding: 7px 28px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
    }
    btn-danger:hover{
        background-color: rgba(236, 103, 103, 0.795);
        color: black;
    }
    .btn-custom-blue{
        margin-bottom:10px;
        display: block;
        width: 100px;
        border: none;
        background-color: #19a7d3;
        color: white;
        padding: 7px 28px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
    }
    .btn-custom:hover,.btn-custom-submit:hover,.btn-custom-blue:hover {
        background-color: whitesmoke;
        color: black;
        }
 /*Buttons End*/
/*Card Slider Begin*/
        .card {
            position: relative;
            height: 350px;
            width: 100%;
            max-width: 850px;
            margin: 26px auto;
            background-color: whitesmoke;
            border-radius: 25px;
            /* box-shadow: 10px 0 50px rgba(0, 0, 0, 0.5); */
        }

        .card .inner_part {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 0 0 30px;
            height: 350px;
            position: absolute;
        }

        #slideImg:checked~.inner_part {
            padding: 0;
            transition: .1s ease-in;
        }

        .inner_part .img {
            height: 260px;
            width: 260px;
            overflow: hidden;
            flex-shrink: 0;
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.2);
        }

        #slideImg:checked~.inner_part .img {
            height: 350px;
            width: 850px;
            z-index: 99;
            transition: .3s .2s ease-in;
        }

        .img img {
            height: 100%;
            width: 100%;
            cursor: pointer;
            opacity: 0;
            transition: .6s;
        }

        #slide_1:checked~.inner_part .img_1,
        #slide_2:checked~.inner_part .img_2,
        #slide_3:checked~.inner_part .img_3 {
            opacity: 1;
            transition-delay: .2s;
        }

        .card .content {
            padding: 0 20px 0 35px;
            width: 530px;
            margin-left: 50px;
            opacity: 0;
            transition: .6s;
        }

        #slideImg:checked~.inner_part .content {
            display: none;
        }

        #slide_1:checked~.inner_part .content_1,
        #slide_2:checked~.inner_part .content_2,
        #slide_3:checked~.inner_part .content_3 {
            opacity: 1;
            margin-left: 0;
            z-index: 100;
            transition-delay: .3s;
        }

        .content .title {
            font-size: 30px;
            font-weight: 700;
            color: #0d0925;
            margin: 0;
        }

        .content .text {
            font-size: 17px;
            color: #4e4a67;
            line-height: 1.5em;
            text-align: justify;
            margin-bottom: 10px;
        }

        .content button.button-edit {
            padding: 10px 15px;
            border: none;
            font-size: 16px;
            color: #fff0e6;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 14px;
            cursor: pointer;
            margin-right: 267px;
            outline: none;
            background: #00aeff;
            width: 20%;
            float: right;
                }
        .content button.button-delete {
            padding: 10px 15px;
            border: none;
            font-size: 16px;
            color: #fff0e6;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 14px;
            cursor: pointer;
            outline: none;
            background: #ff0000;
            width:20%;
            /* float: right; */
        }

        .content button.button-edit:hover {
            background: #cecece;
            color: #000000;
        }
        .content button.button-delete:hover {
            background: #ee10102f;
            color: #000000;
        }
        .slider {
            position: absolute;
            bottom: 25px;
            left: 55%;
            transform: translateX(-50%);
            z-index: 1;
        }

        #slideImg:checked~.slider {
            display: none;
        }

        .slider .slide {
            position: relative;
            height: 10px;
            width: 50px;
            background: #d9d9d9;
            border-radius: 5px;
            display: inline-flex;
            margin: 0 3px;
            cursor: pointer;
            top: 22px;
        }

        .slider .slide:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: -100%;
            background: #216af1;
            ;
            border-radius: 10px;
            transform: scaleX(0);
            transition: transform .6s;
            transform-origin: left;
        }

        #slide_1:checked~.slider .slide_1:before,
        #slide_2:checked~.slider .slide_2:before,
        #slide_3:checked~.slider .slide_3:before {
            transform: scaleX(1);
            width: 100%;
        }

       .card input {
            display: none;
        }
        b.slider-n{
           position: absolute;
            top: 5px;
            color: #adadad;
            right: 386px;
            display: block;
                }
/*Card Slider End*/
.part-info{
    background-color: whitesmoke;
    padding: 8px;
    border:1px solid #d6d6d6;
    border-radius: 8px;
    margin-bottom: 3px;
}
.part-info>p{
    display: inline-flex;
    color: #746969;
    font-size: 15px;
}
.part-info>label{ font-size: 15px;}
          @media (max-width: 768px) {
                .container-fluid {
                    padding: 130px 12px 12px 12px;
                   }
               .sidenav {
                   padding: 0;
                    display: contents;
                    right: -200px;
                    /*AboVe To Hide The DashBord In Small Screen */
                    z-index: 1;
                    position: fixed;
               }

               .sidenav a,
               .dropdown-btn {
                    position: relative;
                    padding: 10px 25px ;
                    text-decoration: none;
                    color: #fff;
                    display: block;
                    border: none;
                    background: none;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                    outline: none;
                    font-size: 10px;
               }
               .navbar-brand {
                    margin-left: 10px;
               }
               /* End solving Hover-----------------------------------------------------------------------0 */
               /* Begin for sizing Icons */
               i {

                    font-size: 10px;
                    color: red;
               }
               button.navbar-toggle .icon-bar {
                    position: relative;
                    background-color: white;
                    animation: ali4 1s ease-in 0s infinite alternate forwards running;
                    border: 0.5px solid #F00;
               }
               @keyframes ali4 {
                    100% {
                         background-color: white;
                    }
               }
          }

          @media (min-width: 768px) {
              .navbar-inverse .navbar-toggle {
                    display: none;
                }

               /* Style the sidenav links and the dropdown button */
               .sidenav a,
               .dropdown-btn {
                    padding: 13px 0px 13px 10px;
                    text-decoration: none;
                    color: black;
                    display: block;
                    border: none;
                    background: none;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                    outline: none;
                    font-size: 17px;
               }
               i {
                    font-size: 17px;
                    color: red;
               }
          }

          @media (min-width: 950px) {
              .navbar-inverse .navbar-toggle {
                    display: none;
                }

               .sidenav a,
               .dropdown-btn {
                        padding: 13px 0px 13px 10px;
                    text-decoration: none;
                    color: black;
                    display: block;
                    border: none;
                    background: none;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                    outline: none;
                    font-size: 17px;
               }
               i {
                    font-size: 17px;
                    color: red;
               }
          }

     </style>
</head>

<body>
     <nav class="navbar navbar-inverse navbar-fixed-top">

               <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
                    <a class="navbar-brand" href="{{route('index')}}">Front Page</a>

               </div>


               <div class="sidenav collapse  navbar-collapse" id="myNavbar">

                    <a href="{{route('admin.users.index')}}"><i class="fa fa-user" ></i> Control of Users</a>
                    <hr>
                    <button class="dropdown-btn btnList1 "> Control of Front page
                         <i class="fa fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-container ">
                         <a href="{{route('admin.sliders.index')}}">Sliders</a>
                         <a href="{{route('admin.generals.index')}}"> General Info. </a>

                    </div>
                    <hr>
                    {{-- <button class="dropdown-btn btnList1 "> List1
                         <i class="fa fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-container ">
                         <a href="#">Link 1</a>
                         <a href="#">Link 2</a>
                         <a href="#">Link 3</a>
                         <a href="#">Link 4</a>

                    </div>
                    <hr> --}}
               </div>

     </nav>



     @yield('content')


     <script>
          /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
               this.classList.toggle("active");
               var dropdownContent = this.nextElementSibling;
               if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";

               } else {
                    dropdownContent.style.display = "block";

               }
          });
          }
     </script>
     <script>
          $(document).ready(function() {

          $(":button.btnList1").click(function() {
               //for ButtonList1
               if ($(this).hasClass("active")) {
                    $(":button.btnList1 i svg").addClass("fa-minus-circle");
               } else {
                    $(":button.btnList1 i svg").addClass("fa-plus-circle");
               };
          });
          //for ButtonList2
          $(":button.btnList2").click(function() {
               if ($(this).hasClass("active")) {
                    $(":button.btnList2 i svg").addClass("fa-minus-circle");
               } else {
                    $(":button.btnList2 i svg").addClass("fa-plus-circle");
               };
          });

          // $("button.navbar-toggle").click(function() {
          //     if ($(this).hasClass("collapsed")) {
          //         $(".navbar-header").css({
          //             "padding-bottom": "100px"
          //         });
          //     };});





          });
     </script>
</body>
</html>
