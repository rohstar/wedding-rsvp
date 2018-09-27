<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px; /* Margin bottom by footer height */
            background: url("/img/bg.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 300px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            /*background: url("/img/indian-bg.jpg") no-repeat center center fixed;*/
            background-color: #ffc107;
            padding-top: 30px;

        }

        /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        .container {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }

        .wedding-header{

            font-family: "Playfair Display SC";

        }

        .wedding-info{

            font-family: Quicksand;

        }

        #rsvp{

            /*background: red no-repeat center center fixed;*/


        }

        #rsvp-content {

            background-color: #dc3545;
            color: white;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

    </style>
</head>

<body>

<!-- Begin page content -->
<main role="main" class="container">
@include('partials/rsvp')

</main>

<footer class="footer">
    <div class="container footer-cont text-center">

        <h1 class="text-danger wedding-header">Rohan Weds Vipula</h1>
        {{--<img src="img/decorative-gold-line.png"  style="width: 50%" class="img-fluid" alt="">--}}
        <h5 class="wedding-info" >January 19th - January 21st, 2019</h5>
        <h5 class="wedding-info" >Mumbai, India</h5>
        <h5 class="wedding-info" style="font-family: 'Pacifico'">#RohanLikesToPatil</h5>
        <button class="btn btn-danger w-50 rsvp-btn wedding-info" data-toggle="modal" data-target="#rsvp"><h5>RSVP</h5></button>

    </div>
</footer>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

</script>

</html>
