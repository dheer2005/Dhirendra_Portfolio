<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="allstyle.css">
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
        margin: 5px;
        color: white;
        height: 63px;
        padding: 15px;
        padding-left: 30px;
        background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;


        
       }
       .main1{
        display: flex;
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
        .imgin {
            width: 40%;
            height: 450px;
            margin: 70px;
            border: 2px solid black;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
          }
          .imgin img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
          }

          .imgin:hover img {
            transform: scale(1.1);
          }
          .imgin::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
            opacity: 0.8;
            z-index: 1;
          }
          .imgin::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 2;
          }
          .imgin:hover::after {
            background: rgba(255, 255, 255, 0.3);
          }
          
          .imgin::before,
          .imgin::after {
            transition: background 0.3s ease-in-out;
          }
          .int{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .intro{
            width: 55%;
            height:auto;
            float: right;
            color: white;
            
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            padding: 50px;
            margin-right: 40px;
            margin-top: 20px;
            margin-left: 50px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
        }
        .footer {
            width: 100%;
            height: 70px;
           
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
          
        .Pd-button{
  --c: #fff;
  /* text color */
  background: linear-gradient(90deg, #0000 33%, #fff5, #0000 67%) var(--_p,100%)/300% no-repeat,
    white;
  /* background color */
  color: #0000;
  border: none;
  transform: perspective(500px) rotateY(calc(20deg*var(--_i,-1)));
  text-shadow: calc(var(--_i,-1)* 0.08em) -.01em 0   var(--c),
    calc(var(--_i,-1)*-0.08em)  .01em 2px #0004;
  outline-offset: .1em;
  transition: 0.3s;
}

.Pd-button:hover,
.Pd-button:focus-visible {
  --_p: 0%;
  --_i: 1;
}

.Pd-button:active {
  text-shadow: none;
  color: var(--c);
  box-shadow: inset 0 0 9e9q #0005;
  transition: 0s;
}

.Pd-button {
  font-weight: bold;
  font-size: 2rem;
  margin: 0;
  cursor: pointer;
  padding: .1em .3em;
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.container {
  width: 100%;
  min-height: 60vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 140px;
  /* background: white; */
}

.button {
  position: relative;
  padding: 16px 30px;
  font-size: 1.5rem;
  color: var(--color);
  border: 2px solid rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  text-shadow: 0 0 15px var(--color);
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  transition: 0.5s;
  z-index: 1;
}
.button:hover {
  color: #fff;
  border: 2px solid rgba(0, 0, 0, 0);
  box-shadow: 0 0 0px var(--color);
}

.button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--color);
  z-index: -1;
  transform: scale(0);
  transition: 0.5s;
}

.button:hover::before {
  transform: scale(1);
  transition-delay: 0.5s;
  box-shadow: 0 0 10px var(--color),
    0 0 30px var(--color),
    0 0 60px var(--color);
}

.button span {
  position: absolute;
  background: var(--color);
  pointer-events: none;
  border-radius: 2px;
  box-shadow: 0 0 10px var(--color),
    0 0 20px var(--color),
    0 0 30px var(--color),
    0 0 50px var(--color),
    0 0 100px var(--color);
  transition: 0.5s ease-in-out;
  transition-delay: 0.25s;
}

.button:hover span {
  opacity: 0;
  transition-delay: 0s;
}

.button span:nth-child(1),
.button span:nth-child(3) {
  width: 40px;
  height: 4px;
}
.button:hover span:nth-child(1),
.button:hover span:nth-child(3) {
  transform: translateX(0);
}

.button span:nth-child(2),
.button span:nth-child(4) {
  width: 4px;
  height: 40px;
}

.button:hover span:nth-child(1),
.button:hover span:nth-child(3) {
  transform: translateY(0);
}

.button span:nth-child(1) {
  top: calc(50% - 2px);
  left: -50px;
  transform-origin: left;
}

.button:hover span:nth-child(1) {
  left: 50%;
}

.button span:nth-child(3) {
  top: calc(50% - 2px);
  right: -50px;
  transform-origin: right;
}

.button:hover span:nth-child(3) {
  right: 50%;
}

.button span:nth-child(2) {
  left: calc(50% - 2px);
  top: -50px;
  transform-origin: top;
}

.button:hover span:nth-child(2) {
  top: 50%;
}

.button span:nth-child(4) {
  left: calc(50% - 2px);
  bottom: -50px;
  transform-origin: bottom;
}

.button:hover span:nth-child(4 ) {
  bottom: 50%;
}
/* For Download-Resume Button only  */
@import url("https://fonts.googleapis.com/css?family=Raleway");

:root {
  --glow-color: hsl(186 100% 69%);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}



.glowing-btn {
  position: relative;
  color: var(--glow-color);
  cursor: pointer;
  padding: 0.35em 1em;
  border: 0.15em solid var(--glow-color);
  border-radius: 0.45em;
  background: none;
  perspective: 2em;
  font-family: "Raleway", sans-serif;
  font-size: 2em;
  font-weight: 900;
  letter-spacing: 1em;
  margin-left: 35%;
  margin-bottom: 5%;

  -webkit-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  -moz-box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  box-shadow: inset 0px 0px 0.5em 0px var(--glow-color),
    0px 0px 0.5em 0px var(--glow-color);
  animation: border-flicker 2s linear infinite;
}

.glowing-txt {
  float: left;
  margin-right: -0.8em;
  -webkit-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  -moz-text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3),
    0 0 0.45em var(--glow-color);
  text-shadow: 0 0 0.125em hsl(0 0% 100% / 0.3), 0 0 0.45em var(--glow-color);
  animation: text-flicker 3s linear infinite;
}

.faulty-letter {
  opacity: 0.5;
  animation: faulty-flicker 2s linear infinite;
}

.glowing-btn::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.7;
  filter: blur(1em);
  transform: translateY(120%) rotateX(95deg) scale(1, 0.35);
  background: var(--glow-color);
  pointer-events: none;
}

.glowing-btn::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  z-index: -1;
  background-color: var(--glow-color);
  box-shadow: 0 0 2em 0.2em var(--glow-color);
  transition: opacity 100ms linear;
}

.glowing-btn:hover {
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  animation: none;
}

.glowing-btn:hover .glowing-txt {
  animation: none;
}

.glowing-btn:hover .faulty-letter {
  animation: none;
  text-shadow: none;
  opacity: 1;
}

.glowing-btn:hover:before {
  filter: blur(1.5em);
  opacity: 1;
}

.glowing-btn:hover:after {
  opacity: 1;
}

@keyframes faulty-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 0.1;
  }
  4% {
    opacity: 0.5;
  }
  19% {
    opacity: 0.5;
  }
  21% {
    opacity: 0.1;
  }
  23% {
    opacity: 1;
  }
  80% {
    opacity: 0.5;
  }
  83% {
    opacity: 0.4;
  }

  87% {
    opacity: 1;
  }
}

@keyframes text-flicker {
  0% {
    opacity: 0.1;
  }

  2% {
    opacity: 1;
  }

  8% {
    opacity: 0.1;
  }

  9% {
    opacity: 1;
  }

  12% {
    opacity: 0.1;
  }
  20% {
    opacity: 1;
  }
  25% {
    opacity: 0.3;
  }
  30% {
    opacity: 1;
  }

  70% {
    opacity: 0.7;
  }
  72% {
    opacity: 0.2;
  }

  77% {
    opacity: 0.9;
  }
  100% {
    opacity: 0.9;
  }
}

@keyframes border-flicker {
  0% {
    opacity: 0.1;
  }
  2% {
    opacity: 1;
  }
  4% {
    opacity: 0.1;
  }

  8% {
    opacity: 1;
  }
  70% {
    opacity: 0.7;
  }
  100% {
    opacity: 1;
  }
}

 @media only screen and (max-width: 600px) {
  .glowing-btn{
    font-size: 1em;
  }
} 









    </style>

</head>
  <body>
      
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>