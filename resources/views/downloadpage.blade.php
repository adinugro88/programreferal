<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dwonload Page</title>
    <style>
      

    .gbr1{
        position: absolute;
        top: 50px;
        left: 20px;
        width: 115px;
    }
    .text{
        position: absolute;
        top: -45px;
        left: 135px;
        font-size: 90px;
        color: white;
    }

    .nama{
        position: absolute;
        top: 60px;
        left: 180px;
        font-size: 16px;
        color: white;
    }

    .kode{
        position: absolute;
        top: 80px;
        left: 90px;
        font-size: 30px;
        color: white;
        font-family:Arial, Helvetica, sans-serif;
    }

    .kode2{
        position: absolute;
        top: 130px;
        left: 125px;
        font-size: 20px;
        color: yellow;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        background: #0000008a;
        padding: 5px;
        border-radius: 5px;
        }
        .content{
     background-image: url("/gbr2.jpg");
     background-repeat:no-repeat;
     background-size: 370px 200px;
     width: 370px;
     height: 200px;
    }


    </style>
</head>
<body>
    <div class="grupp">
        <img class="gbr1" src="/logowhite.png" alt="">
        <h1 class="text">x</h1>
        <h2 class="nama">Mr/Mrs.{{ \Illuminate\Support\Str::limit($claim->nama, 13, $end='...') }}</h2>
        <h3 class="kode">Kode Referral</h3>
        <h3 class="kode2">{{$claim->kode_referal}}</h3>
    </div>
        
</body>
</html>