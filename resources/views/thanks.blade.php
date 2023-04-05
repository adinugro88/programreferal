<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima Kasih Telah Daftar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style media="screen">
        * {
            box-sizing: border-box;
            /* outline:1px solid ;*/
        }

        body {
            background: url(https://www.autofrontier.co.id/img/intro-carousel/sliderfnl.png) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        .wrapper-1 {
            width: 90%;
            height: 50vh;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            background: #ffffff;
            margin-top: 150px;
            border-radius: 50px;
        }

        .wrapper-2 {
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-family: 'Kaushan Script', cursive;
            font-size: 3.5em;
            letter-spacing: 3px;
            color: #ee1b24;
            margin: 0;
            margin-bottom: 20px;
        }

        .wrapper-2 p {
            margin: 0;
            font-size: 1.3em;
            color: #aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .go-home {
            color: #fff;
            background: #ee1b24;
            border: none;
            padding: 10px 50px;
            margin: 30px 0;
            border-radius: 30px;
            text-transform: capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }

        .footer-like {
            margin-top: auto;
            background: #D7E6FE;
            padding: 6px;
            text-align: center;
        }

        .footer-like p {
            margin: 0;
            padding: 4px;
            color: #ee1b24;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .footer-like p a {
            text-decoration: none;
            color: #ee1b24;
            font-weight: 600;
        }

        .copy-text {
            position: relative;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            display: flex;
        }

        .copy-text input.text {
            padding: 10px;
            font-size: 18px;
            color: #5784f5;
            border: none;
            outline: none;
            width: 90%;
        }

        .copy-text button {
            padding: 10px;
            background: #5784f5;
            color: #fff;
            font-size: 18px;
            border: none;
            outline: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .copy-text button:active {
            background: #809ce2;
        }

        .copy-text button:before {
            content: "Copied";
            position: absolute;
            top: -45px;
            right: 0px;
            background: #5c81dc;
            padding: 8px 10px;
            border-radius: 20px;
            font-size: 15px;
            display: none;
        }

        .copy-text button:after {
            content: "";
            position: absolute;
            top: -20px;
            right: 25px;
            width: 10px;
            height: 10px;
            background: #5c81dc;
            transform: rotate(45deg);
            display: none;
        }

        .copy-text.active button:before,
        .copy-text.active button:after {
            display: block;
        }

        @media (min-width:360px) {
            h1 {
                font-size: 2em;
            }

            .go-home {
                margin-bottom: 20px;
            }
        }

        @media (min-width:600px) {
            .content {
                max-width: 1000px;
                margin: 0 auto;
            }

            .wrapper-1 {
                height: initial;
                max-width: 620px;
                margin: 0 auto;
                margin-top: 50px;
                box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
            }
        }

        .download11 {

            background: #809ce2;
            border-radius: 15px;
            margin-top: 20px;
            padding: 15px;
            color: white;
            margin-top: 50px;
            width: 200px;
            display: block;
            margin: 0 auto;
        }

        .download i {
            color: white;
            padding: 10px;
            font-size: 30px;
        }


        .gbr1 {
            position: absolute;
            top: 50px;
            left: 20px;
            width: 115px;
        }

        .text {
            position: absolute;
            top: -2px;
            left: 130px;
            font-size: 90px;
            color: white;
        }

        .nama {
            position: absolute;
            top: 60px;
            left: 180px;
            font-size: 16px;
            color: white;
        }

        .kode {
            position: absolute;
            top: 80px;
            left: 90px;
            font-size: 30px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .kode2 {
            position: absolute;
            top: 130px;
            left: 125px;
            font-size: 20px;
            color: yellow;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: #0000008a;
            padding: 5px;
            border-radius: 5px;
        }

        .grupp {
            background-image: url("/gbr2.jpg");
            background-repeat: no-repeat;
            background-size: 370px 200px;
            width: 370px;
            height: 200px;
            position: relative;
            margin: 25px auto;
        }

    </style>

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body onload="autoClick();">
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <img class="marginauto" width="120" src="https://www.autofrontier.co.id/img/logoblack.png" alt="">
                <h1>Registrasi Berhasil !</h1>
                <p>Anda kini sudah terdaftar sebagai Pemilik Kode Referal Berikut: </p>
                {{-- <div class="copy-text">
                    <input type="text" class="text" value="reff.autofrontier.co.id/{{$kodereferal}}" />
                <button><i class="fa-solid fa-copy"></i></button>
            </div> --}}

            <div class="grupp" id="htmlContent">
                <img class="gbr1" src="/logowhite.png" alt="">
                <h1 class="text">x</h1>
                <h2 class="nama">Mr/Mrs.{{ \Illuminate\Support\Str::limit($claim->nama, 13, $end='...') }}</h2>
                <h3 class="kode">Kode Referral</h3>
                <h3 class="kode2">{{$claim->kode_referal}}</h3>
            </div>
            <a class="download11" id="download">
                <i class="fa fa-download"></i>
            </a>
        </div>
    </div>
    </div>

    <script>
        $('#download').click(function () {
            html2canvas($('#htmlContent')[0], {
                scale: 8
            }).then(function (canvas) {
                var a = document.createElement('a');
                a.href = canvas.toDataURL("image/png");
                a.download = 'referal.png';
                a.click();
            });
        });

    </script>
</body>

</html>
