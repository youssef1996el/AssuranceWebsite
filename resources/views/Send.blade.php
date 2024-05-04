{{--
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
   <title>Kottab</title>
   <link rel="icon" href="" type="image/x-icon">
   <style>
       .container
       {
           max-width: 600px;
           margin: 50px auto;
           padding: 20px;
           background-color: #ffffff;
           border-radius: 10px;
           box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
       }

       .content_text
       {
           background: #e9e9e9;
           padding: 5px;
           border-radius: 5px;
       }

       .content_cards
       {
           display: flex;
           flex-wrap: wrap; /* Allow items to wrap to the next line */
           justify-content: space-between; /* Distribute items evenly */
           padding: 10px;
       }

       .Card_calander, .Card_time
       {
           flex: 1; /* Take up equal space */
           margin: 10px; /* Add space between cards */
           background-color: #ffffff;
           border-radius: 30px;
           box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
           padding: 10px;
       }

       .Card_calander i, .Card_time i
       {
           display: ruby-text;
           font-size: 30px;
       }

       .Card_calander p, .Card_time p
       {
           text-align: center;
       }
       .content_button_meeting
       {
           display: flex;
           justify-content: center;
           justify-items: center;
       }
       .content_button_meeting button
       {
           padding: 15px;
           background-color: #cccccc;
           color: #fff;
           border: 0px;
           border-radius: 10px;
           font-size: 18px;
           margin: 5px 0px;
       }

       @media screen and (max-width: 600px)
       {
           .content_cards {
               flex-direction: column; /* Stack cards vertically on small screens */
           }

           .Card_calander,
           .Card_time {
               width: 90%; /* Take full width on small screens */
           }
       }
       p
       {
            font-size: 20px;
       }
   </style>
</head>
<body>
   <div class="container">
        <h1>Bienvenue dans votre couverture d'assurance</h1>
       <div class="content_text">
            <p>
                Cher/Chère {{$fullname}},
            </p>
           <p>


            Bienvenue à bord ! Nous sommes ravis de vous accueillir en tant que membre précieux de notre famille d'assurance. Merci de nous avoir choisi pour protéger ce qui compte le plus pour vous. Encore une fois, bienvenue dans la famille [HPRO CONSEIL]. Nous avons hâte de vous servir et de vous offrir la tranquillité d'esprit que vous méritez.

           </p>
           <P>
            Cordialement,
           </P>
           <P>
            [{{$fullname}}]
           </P>
           <P>
            [ {{$subject}}]
           </P>
           <P>
            [HPRO CONSEIL]
           </P>
           <P>
            [Coordonnées]
           </P>




       </div>
   </div>
</body>
</html>
 --}}

 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonjour , Vous avez nouvelle Demander un devis {{$subject}}</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .logo img {
      width: 150px;
      height: auto;
    }

    .welcome-message {
      text-align: center;
      margin-bottom: 30px;
    }

    .welcome-message p {
      font-size: 18px;
      line-height: 1.5;
    }

    .company-name {
      font-weight: bold;
      color: #2c3e50;
    }

    footer {
      background-color: rgb(22, 36, 61);
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer a {
      color: #0695df;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
        <img decoding="async" width="143" height="27" src="{{asset('images/conseil.png')}}" alt="Insur">
    </div>
    <div class="welcome-message">
      {{-- <p>Bienvenue à bord ! Nous sommes ravis de vous accueillir en tant que membre précieux de notre famille d'assurance. Merci de nous avoir choisi pour protéger ce qui compte le plus pour vous. Encore une fois, bienvenue dans la famille <span class="company-name">HPRO CONSEIL</span>. Nous avons hâte de vous servir et de vous offrir la tranquillité d'esprit que vous méritez.</p> --}}
    </div>
    <div>
        <table>
            <tr>
                <th>
                    <p>Nom et Prénom :</p>
                </th>
                <th>
                    <p>{{$fullname}}</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p>E-mail :</p>
                </th>
                <th>
                    <p>{{$emailClient}}</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p>Télephone :</p>
                </th>
                <th>
                    <p>{{$phone}}</p>
                </th>
            </tr>

            <tr>
                <th>
                    <p>Date naissance :</p>
                </th>
                <th>
                    <p>{{$datenaissance}}</p>
                </th>
            </tr>

            <tr>
                <th>
                    <p>Type :</p>
                </th>
                <th>
                    <p>{{$subject}}</p>
                </th>
            </tr>

            <tr>
                <th>
                    <p>Code Postal :</p>
                </th>
                <th>
                    <p>{{$codepostal}}</p>
                </th>
            </tr>

            <?php if($matricule !== null): ?>
                <tr>
                    <th>
                        <p>Matricule :</p>
                    </th>
                    <th>
                        <p><?php echo $matricule; ?></p>
                    </th>
                </tr>
            <?php endif; ?>


        </table>


    </div>
  </div>
  <footer>
    <p>© 2024 HPRO CONSEIL. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </footer>
</body>
</html>
