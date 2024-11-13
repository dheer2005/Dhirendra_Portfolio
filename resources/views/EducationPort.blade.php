<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhirendra_Education_portfolio</title>
    <link rel="stylesheet" type="text/css" href="educationcss.css">
    <link rel="shortcut icon" href="logo-black.png" type="image/x-icon">


    <style>

.logo-head{
    display: flex;
}
        
        .head1 {
            font-size: 40px;
            color: rgb(16, 180, 125);
            margin: 15px;
            margin-top: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-weight: bold; */

        }

       .menu{
        border: 5px solid white ;
        color: white;
        height:60px;
        
    
        background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;


        
       }
    
        ul li{
           
            float: left;
            padding-right:3%;
            margin-top: 0;
            font-size: 20px;
            list-style: none;
            
            
        }
        li a{
            width: 5%;
            height: auto;
            color: white;
            text-decoration: none;
            
        }
        li a:hover{
            color:greenyellow;
        
            
        }

        .edudet{
           
            width: 100%;
            height:auto;            
            display: flex;
            
            
        }

        .partition{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            
            margin-left: 30px;
            float: left;
            padding: 10px;
            padding-top: 5%;
            
            box-sizing: border-box;
            width: 30%;
            height: 300px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border: 1px solid white;
            box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
            backdrop-filter: blur(6px);
            border-radius: 17px;
            /* text-align: center; */
            cursor: pointer;
            transition: all 0.5s;
            
            align-items: center;
            justify-content: center;
            user-select: none;
            font-weight: bolder;
            color: white;
            
        }

        

        footer {
            width: 100%;
            margin-top: 15px;
            height: 50px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;

            color: white;
            position: absolute;
            padding-top:20px;
          
            text-align:center;
            font-weight:bold;

            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }


    </style>



</head>
<body>
    <div class="logo-head">
        <div class="logo">
            <img src="logo-black.png" alt="logo" height="100px" width="150px">
        </div>
    <header>
        <p class="head1"> <strong> <i>Welcome To Dhirendra's Portfolio</i></strong></h1>
        </header>
    </div>

    <nav class="menu">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/Education')}}">Education</a></li>
            <li><a href="{{url('/Skills')}}">Skills</a></li>
            <li><a href="{{url('Certificates')}}">Certification </a></li>
            <li><a href="{{url('/Internships')}}">Internship's</a></li>
            <li><a href="{{url('/Projects')}}">Projects</a></li>
            <li><a href="{{url('/Contact-me')}}">Contact</a></li>
        </ul>
    </nav>

    <div class="edudet">
        
       <dl>
        <div class="partition">
            <dt><strong> * B.Tech In Computer science and engineering(2021-2025)</strong></dt>
            <dd>CGPA : 7.87(till 6th sem)<br>
                College : PCE(Poornima College of Engineering)<br>
                University : RTU, KOTA </dd><br><br>
        </div>
                
        <div class="partition">
            <dt><strong> * High Secondary School</strong></dt>
            <dd>Percentage : 92.20% <br>
                School : Jai Durga Senior Secondary School , Rajgarh , Alwar <br>
                Board : RBSE</dd><br><br>
        </div>
               
        <div class="partition">
            <dt><strong> * Secondary School</strong></dt>
            <dd>Percentage : 77% <br>
                School : Jai Durga Senior Secondary School , Rajgarh , Alwar <br>
                Board : RBSE</dd><br><br>
        </div>

       </dl>
    </div>


    <footer>@copyright Dhirendra_Portfolio</footer>
    
</body>
</html>