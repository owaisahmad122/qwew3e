 <html>
   <head>
   
   <title>Happy New Year</title>
   <style type="text/css">
   #color{
	   position:absolute;
	   top:334px;
	   left:700px;
	    down:350;
	   color:#fff;
	   animation: anim 5s infinite;
   }
   @keyframes anim{
    0%{color:black;}
    25%{color:green; transform:scale(5.0);}
    50%{color:yellow;transform:scale(4.0);}
	75%{color:pink;transform:scale(2.0);}
    100%{color:brown;transform:scale(1.5);}
   }
   </style>
   
   </head>
   <body background="images.jpg" style="background-size:1350px 760px;" >
   <h1  id="color">From...<?php echo $_GET['name'];?> </h1> 
   </body>
   </html>