<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virendra_Contact_Portfolio</title>
   <link rel="stylesheet" type="text/css" href="contactcss.css">
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

.cont{
    display: flex;
    display: left;
}

.formsec{
    
    width: 50%;
    margin-left: 40px;
}
.formfir{
    margin: 30px;
    margin-top: 50px;
    text-align: center;
    margin-left:10% ;
    
    
}




footer {
    width: 100%;
   
    height: 50px;
    background-color: rgb(16, 180, 125);
    color: white;
    position: absolute;
    padding-top:20px;
  
    text-align:center;
    font-weight:bold;

    background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
    border-radius: 20px;
    transition: all .3s;
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
<div class="cont">
        <div class="formsec">
            <center style="font-size: 30px;"><strong>Contact </strong></center>
            <fieldset>
                <legend>Details : </legend>
                <form action="{{url('/Contact-me')}}" metho="post">
                    @csrf
                    <select name="salutation">
                        <option>--none--</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Ms.</option>
                        <option>Dr.</option>
                        <option>Prof.</option>
                    </select><br><br>
                    <label>First Name :</label><input type="text" name="fname" placeholder="Eneter your first name here">
                    <label>  Last Name :</label><input type="text" name="lname" placeholder="Eneter your last name here"><br><br>
                    <label> Email : </label><input type="email" name="email" placeholder="Eneter your mail here">
                    <label>Phone No: </label><input type="phn" name="phn" placeholder="Enter your mobile no. here"><br><br>
                    <label>Gender: </label>
                    <select  id="gender" required name="gender">
                        <option name="gender" value="male">Male</option>
                        <option name="gender" value="female">Female</option>
                        <option name="gender" value="other">Other</option>
                    </select><br><br>

                    <label>Query : </label><br><br><textarea type="textrea" name="message" placeholder="Enter Your Query Here "></textarea><br><br>

                    <button type="submit">SUBMIT</button>
                </form>
            </fieldset>
        </div>

        <div class="formfir">
            <div>
            <strong>Fill free to connect </strong><br>
            <strong>Phn No.:</strong>+918890XXXXXX<br>
            <strong>Email :</strong><u>dhirendranyadav@gmail.com</u><br>
            
            </div>
            
        </div>
    </div>
        
        <div class="social-plt">
        <ul >
            <li><a href="#"><i class="fa-brands fa-instagram instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-whatsapp whatsapp"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter twitter"></i></a></li>
        </ul>
    </div>
       
         
        
    
        <footer>@copyright Dhirendra_Portfolio</footer>
        
    
</body>
</html>