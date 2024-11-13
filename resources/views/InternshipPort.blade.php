<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virendra_Internship_portfolio</title>
    <link rel="stylesheet" type="text/css" href="internshipcss.css">
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

}

.menu{
border: 5px solid white ;
color: white;
height: 60px;

/* padding-top: 18px;
padding-left: 20px; */

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


        .partition{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            
            margin-left: 150px;
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



        .footer {
            width: 100%;
            height: 70px;
            margin-top: 325px;
           
            background-color: rgb(16, 180, 125);
            color: white;
            position: absolute;
            padding-top:20px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
           
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


        <div class="inp">
            <dl>
                <div class="partition">
                <dt><strong>1. Internship</strong></dt>
                <dd><strong>1.In-House Summer Internship 2022</strong><br>
                    Issued by: Swami Keshvanand Institute Of Technology & Gramothan, Jaipur </dd><br>
                </div>
                
                <div class="partition">
                <dt><strong>2.Web Development Internship (1st july 2023- 15 Aug 2023)</strong><br></dt>
                    which Was providing by: Dogma Soft limited</dd><br><br>
                </div>  
                
                <div class="partition">
                    <dt><strong>3. ASP.NET Development Internship(1st july 2024- 16 Aug 2024)</strong></dt>
                    <dd><strong>1</strong><br>
                        Which was providing by Fulminous Software Pvt. Ltd. </dd><br>
                    </div>  


                
            </dl>
        </div>


        <div class="footer">@copyright Virendra_Portfolio</div>
    
</body>
</html>




