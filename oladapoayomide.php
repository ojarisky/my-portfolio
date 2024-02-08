<?php
if (isset($_post["debo"])){
    $name = $_post["banji"];
    $email = $_post["oye"];
    $comment = $_post["tola"];
    $sender = "oladapojoshua200@gmail.com";
    if (mail($email, $name, $comment, $sender)) {
        echo "<script> alert('mail sent successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>newest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
             #con1{
            
            height: 500px;
            animation-name: oja;
            animation-duration: 3s;
            position: relative;
            top:0px;
            left:0px;
            z-index: 5;
        }
        @keyframes oja  {
            0%{top:0px; left:100px;}
            100%{top:0px; left:0px;}
            
        }
        #cont{
           
            background-color: aqua;
            color: black;
            margin-left: 50px;
            height: 30px;
            border-radius: 5px;
            margin-right: 50px;
        }
        ul li a{
            color:white !important;
            
        }
        ul li a:hover {
            color: aqua !important;
            text-shadow: 2px 2px 2px 2px aqua;
        }
        nav{
           padding-left:50px;
           padding-right: 50px;
           color: white;
        }
        .cer{
            margin-left: 100px;
            margin-right: 100px;
            
           
            margin-top: 20px;
            box-shadow:0 4px 8px 0#72b0ef, 0 6px 20px 0 aqua;  
        }
        .ser{
            margin-left: 50px;
            margin-right: 50px;
            height: 200px;
            box-shadow:0 4px 8px 0 aqua, 0 6px 20px 0 aqua; 
            transition-duration: 1s;
            margin-top: 50px;

        }
        .ser:hover{
            transform: scale(1.2,1.2);
        }
        .t4{
            color:white;
            padding-top: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-transform: uppercase;
        }
        #con3{
           
            border: 2px solid aqua;
            margin-top: 100px;
            margin-left: 200px;
            margin-right: 100px;
            padding-right: 20px;
            border-radius: 5px;
            box-shadow:0 4px 8px 0 aqua, 0 6px 20px 0 aqua;
            padding-bottom: 10px;
        
        }
        @media screen and (max-width:500px){
            #con3{
                margin-left: 25px;
                margin-right: 25px;

            }

          
        }
        #cona{
            width: 200px;
            height:50px;
            border: 1px solid  white;
            margin-top: 150px;
            margin-left: 50px;
        }
        .oja{
            color: aqua;
        }
        #ab1{
            height: 400px;
            border-right: 1px solid aqua;
        }
        #ab2{
            height: 400px;
            border-left: 1px solid aqua;
        }
        #ab3{
            height: 400px;
            border-right: 1px solid aqua;
        }
        #ab4{
            height: 400px;
            border-left: 1px solid aqua;
            
        }

        #ab5{
            height: 400px;
            border-right: 1px solid aqua;
        }
        #ab6{
            height: 400px;
            border-left: 1px solid aqua;
        }
      
        @media screen and (max-width:500px) {
            #ab1{
                border-right: none;
         
            }
            #ab2{
                border-left: none;
            }
            #ab3{
                border-right: none;
         
            }
            #ab4{
                border-left: none;
                margin-top: 100px;
            }
            #ab5{
                border-right: none;
         
            }
            #ab6{
                border-left: none;
            }
        }
        @media screen and (max-width:500px){
            .cer{
                height: 450px;
                margin-left: 50px;
                margin-right: 50px;
            }
        }
        .v1{
            color: white;
            font-size: 16px;
            padding-left: 9px;
            padding-right: 9px;
            text-align: left;
        }
        .tbag{
          
            width:600px;
            height: 55px;
            border: 1px solid white;
           
            margin-top: 20px;
            overflow: hidden;
        }
        .tbag:hover{
            height:170px;
            transition: height 2s;
        }
        @media screen and (max-width:500px) {
            .tbag{
                width:500px;
                
            }
            
        }
        .ad{
            width:500px;
            height: 50px;
            margin-top: -19px;
            background-color: aqua;
           
        }
        @media screen and (max-width:500px){
            .ad{
                border: 1px solid black;
                color: black;
                margin-left: -180px;
                width: 400px;
            }
        }
            
        
        #p1{
            margin-top: 50px;
        }
        #p1:hover{
            height: 250px;
            transition: 2s;
        }
        #p2{
            margin-top: 50px;
        }
        #p2:hover{
            height: 250px;
            transition: 2s;
        }
        @media screen and (max-width:500px){
            #p2{
                margin-top: 100px;
            }
        }
        #p3{
            margin-top: 50px;
        }
        #p3:hover{
            height: 250px;
            transition: 2s;
        }
        @media screen and (max-width:500px){
            #p3{
                margin-top: 100px;
            }
        }
        #pro1{
            margin-top: 50px;
            background-image: url(iMage/ss4.png);
            background-size: contain;
            background-repeat: no-repeat;
            height: 500px;
            
           
        }
        @media screen and (max-width:500px){
            #pro1{
            margin-right: 0px;
               
              
            }
         
        }
            
        
  
        #pro1:hover{
            transform: scale(1.1,1.1);
            transition: 2s;
          
        }

        #pro1:hover .port{
            display:block;
        }
        #pro2{
            margin-top: 50px;
            background-image: url(iMage/s6.png);
            background-size: contain;
            background-repeat: no-repeat;
            height: 300px;
            
         
        }
        #pro2:hover{
            transform: scale(1.1,1.1);
            transition: 2s;
          
        }
        @media  screen and (max-width:500px){
            #pro2{
                margin-left: 60px;
               
            }

        }
        #t5{
            color:white;
            margin-top: -350px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        @media screen and (max-width:500px){
            #t5{
                margin-top: -325px;
                margin-left: 40px;
                text-decoration: none !important
            }
        }
        #t6{
            color:white;
            margin-top: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        @media screen and (max-width:500px){
            #t6{
               
                margin-left: 50px;
                text-decoration: none !important
            }
        }
            
        
       
      
        @media screen and (max-width:500px){
            .pro{
                color:black !important;
            }
        }
        .tobi{
            height: 56px;
            border:1px solid white;
            overflow: hidden;
            margin-bottom: 25px;
        }
        .dara{
            background-color: aqua;
            height: 50px;
            margin-top: -20px;
        }
        .tobi:hover{
            height:170px ;
            transition: 2s;
        }
        @media screen and (max-width:500px){
            .tobi:hover{
                height: 220px;
            }
        }
        #t10{
            
            text-decoration: underline; 
             color:white; 
             text-decoration-color: aqua;
                text-transform: uppercase;
                font-weight: bolder; 
                font-family: 'Times New Roman', Times, serif;
                 margin-top: 150px;
                 padding-bottom: 50px; 
                 font-size: 50px;
        }
        @media screen and (max-width:500px){
            #t10{
                margin-top: 400px;
            }
        }
        #line{
           height: 200px;
             border: 2px solid aqua;
              margin-top: 50px;
               margin-left: 50px;
               margin-right: 250px;
        }
        @media screen and (max-width:500px){
            #line{
                margin-right: 100px;
                margin-top: 155px;
                margin-bottom: 50px;
                padding-top: 155px;
                height: 0px;
            }
        }
     
      
        
   
           
            
          
        
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse" style="background-color:black; border:none;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-family: 'Courier New', Courier, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">OASIS_TECH</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#about me">About me </a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#certification">Certification</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contacts</a></li>
            </ul>
         
          </div>
        </div>
      </nav>
    <div class="container-fluid">
        <div class="row" style="height: 400px; background-image: url(iMage/p1.jpeg);
        background-repeat: no-repeat; background-color: black; margin-top: -50px;">
         
        
            <div class="col-md-7"></div>
           
            <div class="col-md-5" id="con1">
                
                <div><h1 style="color:aqua; font-size: 50px; margin-top: 130px; 
                margin-left: 50px;">HI <span style="color:white; font-size: 30px; margin-top: 50px;">i'm </span></h1>
                <p style="color:white;margin-left: 50px; font-size: 30px;">AYOMIDE JOSHUA OLADAPO</p></div>
                <div id="cont"><center><h4 style="margin-top: 5px;">frontend web developer</h4></center></div>
          

            </div>
    
        </div>

        <a name="about me"><div class="row" style="height: 700px; background-color: black; ">
            <div class="col-md-6">
                <div id="line"></div>
                <div style=" height: 200px; background-image: url(iMage/me.jpg);background-size: contain;background-repeat: no-repeat; margin-top: -170px; margin-left: 110px;margin-right: 45px;"></div>
            </div></a>
            <div class="col-md-5" ><h2 style="color:aqua; font-size: 30px; margin-top: 100px;">About me</h2>
                <center><h3 style="line-height: 30px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px; text-align: left;color: white;"> a passionate frontend developer eager 
                    to make a mark in the digital world. With a strong foundation in <stong>HTML, 
                    CSS, Bootstrap, react js , JavaScript</stong>. I'm excited to craft
                     engaging and user-friendly experiences on the web. I enjoy translating 
                     design concepts into functional and visually appealing interfaces, constantly 
                     seeking to learn and apply the latest trends and best practices in web development. Through my coursework 
                     and personal projects, I've gained hands-on experience in building responsive layouts, interactive elements, 
                     and optimizing website performance. I'm enthusiastic about collaborating with designers and backend developers 
                     to bring seamless and captivating user journeys to life.</h3></center>
        
            
            </div>
        
        </div>
        <a name="skills"><div class="row" style="background-color: black;">
            <div class="col-md-12"><center><h1 id="t10">
                  skills</h1></center></div>
        </div></a>
  
        <div class="row" style="background-color: black;">
            <div class="col-md-3"></div>
            <div class="col-md-6 tobi"><div class="dara"><center><h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">HTML</h2></center></div><p style="color:white; margin-top: 5px;">HTML, which stands for HyperText Markup Language, is the standard markup language used to create web pages. It defines the structure and layout of a web page's content, including text, images, links, forms, and more. HTML is essential for building websites and is a fundamental skill for web developers and designers</p></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-3"></div>
            <div class="col-md-6 tobi"><div class="dara"><center><h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">CSS</h2></center></div><p style="color:white ; margin-top: 5px;">CSS (Cascading Style Sheets) is a stylesheet language used to describe the presentation and layout of HTML documents, including fonts, colors, spacing, and other visual aspects. CSS allows you to separate the structure (HTML) of a web page from its visual design, making it easier to control the look and feel of your website. Here's a basic overview of how to use CSS</p></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-3"></div>
            <div class="col-md-6 tobi"><div class="dara"><center><h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">JAVASCRIPT</h2></center></div><p style="color:white; margin-top: 5px;">JavaScript is a high-level, dynamic, and versatile programming language primarily used for front-end web development. It allows developers to add interactivity and behavior to web pages. JavaScript is commonly used in web development to make web pages more interactive. It runs in a user's web browser, enabling dynamic features like form validation, animations, and responsive design.</p></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-3"></div>
            <div class="col-md-6 tobi"><div class="dara"><center><h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">BOOTSRAP</h2></center></div><p style="color:white; margin-top: 5px;">Bootstrap is an open-source front-end framework for web development that makes it easier to create responsive and visually appealing websites and web applications. It was created by Twitter and is now maintained by the open-source community. Bootstrap provides a collection of pre-built HTML, CSS, and JavaScript components and tools that help developers create web interfaces quickly and with consistent design.</p></div>
            <div class="col-md-3"></div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-3"></div>
            <div class="col-md-6 tobi"><div class="dara"><center><h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">NODE JS</h2></center></div><p style="color:white; margin-top: 5px;">Node.js is an open-source, cross-platform JavaScript runtime environment and library for running web applications outside the client's browser. Ryan Dahl developed it in 2009, and its latest iteration, version 15.14, was released in April 2021. Developers use Node.js to create server-side web applications, and it is perfect for data-intensive applications since it uses an asynchronous, event-driven model.</p></div>
            <div class="col-md-3"></div>
        </div>
        
      
        <a name="certification"><div class="row" style="background-color: black;">
            <div class="col-md-12"><center><h1 style="text-decoration: underline;  color:white; text-decoration-color: aqua;
                text-transform: uppercase;font-weight: bolder; font-family: 'Times New Roman', Times, serif; margin-top: 200px; font-size: 40px;">
                  certification</h1></center></div>
        </div></a>
        <div class="row" style="background-color: black;">
           
            <div class="col-md-6" id="ab1"><div class="cer"><center><h3 style="color:white;padding-top: 5px;font-family: 'Courier New', Courier, monospace;font-weight: bolder;">CODESCHOOL AFRICA</h3></center><p class="v1">code school africa is a coding school located at mokola ibadan. code school is an organization focused on preparing the next generation for the future of work through computer science training and workforce development
                . Code school offers a lot of program including both front-end and back-end web development which i was privilledge too join the front-end class where i was thought how to use html,javascript,css, and bootstrap.   
           </p></div></div>
           <div class="col-md-6" id="ab2"><center><img src="iMage/cer.jpg" height="200px" id="p3"></center></div>
            <div class="col-md-6" id="ab3"><div class="cer"><center><h3 style="color:white;padding-top: 5px;font-family:'Courier New', Courier, monospace;font-weight: bolder;">GOOGLE DIGITAL SKILLS FOR AFRICA</h3></center><p class="v1">Google Digital Skills for Africa is an initiative that provides free online courses to help individuals acquire digital skills.
                 It covers topics such as online basics, data and technology, career development, and entrepreneurship. The aim is to empower people with the skills they need to thrive in a digital world. I was able too learn fundamental digital skills which include topics like understanding online presence, search engine optimization, email marketing and online presence.   
            </p></div></div>
            <div class="col-md-6" id="ab4"><center><img src="iMage/digital.jpg" height="200px" id="p1"></center></div>
            <div class="col-md-6" id="ab5"><div class="cer"><center><h3 style="color:white;padding-top: 5px;font-family:'Courier New', Courier, monospace;font-weight: bolder;">TOPSTAR PRINT HOUSE</h3></center><p class="v1">Topstar is a printing company at mokola, ibadan, oyo state. During my stay there i was able too learn graphic designing using corel draw. I also learnt how too produce printing materials such as flyer, banner, sticker, jotter, customized shirt etc.
                After which i established my own company <a href="https://instagram.com/oasis_prints?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr">oasis prints</a> and i was privilledge to work for company's such as safeboda, heyfood, send me, quick bus and alot more
           </p></div></div>
           <div class="col-md-6" id="ab6"><center><img src="iMage/top.jpg" height="200px" id="p2"></center></div>
           
        </div>
         
     
        <a name="services"> <div class="row" style="background-color: black;">
            <div class="col-md-12"><center><h1 style="text-decoration: underline;  color:white; text-decoration-color: aqua;
                text-transform: uppercase;font-weight: bolder; font-family: 'Times New Roman', Times, serif; margin-top: 200px; font-size: 50px;">
                  services</h1></center></div></a>
        </div>
        <div class="row" style="background-color:black ;">
            <div class="col-md-4"><div class="ser"><center><h1 class="t4">WEB DESIGN</h1><br><h5 style="color: white;">Creating visually appealing and responsive user interface for websites</h5></center></div></div>
            <div class="col-md-4"><div class="ser"><center><h2 class="t4">search engine optimization</h2><br><h5 style="color:white;">Enhancing website organic visibility to attract users,leading to increased traffic and better online presence</h5></center></div></div>
            <div class="col-md-4"><div class="ser"><center><h2 class="t4">database design</h2><br><h5 style="color:white">Structuring and organizing data for efficient storage, retrieval and manipulation.</h5></center></div></div>
        </div>
       <a name="portfolio"><div class="row" style="background-color: black;">
            <div class="col-md-12"><center><h1 style="text-decoration: underline;  color:white; text-decoration-color: aqua;
                text-transform: uppercase;font-weight: bolder; font-family: 'Times New Roman', Times, serif; margin-top: 200px; font-size: 50px;">
                  PORTFOLIO</h1></center></div></a>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-2"></div>
            <a href="https://www.safehandsprofiling.com" target="_blank"><div class="col-md-3"><div id="pro1"></div><div id="t5"><h4>A landing page for a database company. You can click to check it out.</h4></div>
            </div></a>
            <div class="col-md-2"></div>
            <a href="https://www.safehandsprofiling.com/login-user.php" target="_blank"><div class="col-md-3"><div id="pro2"></div><div id="t6"><h4> A login page for a database company. You can click to check it out.</h4></div>
            </div></a>
            <div class="col-md-2"></div>
             
        
        </div>


        <a name="contact"><div class="row" style="background-color: black;">
            <div class="col-md-12"><center><h1 style="text-decoration: underline;  color:white; text-decoration-color: aqua;
                text-transform: uppercase;font-weight: bolder; font-family: 'Times New Roman', Times, serif; margin-top: 200px; font-size: 50px;">
                  contact</h1></center></div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-6">
                <h2 style="color:aqua; margin-left: 100px;margin-top: 150px;">contact <span style="color: white;">via</span></h2>
                <a href="https://instagram.com/_ayojosh?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><img src="iMage/instag.png" style="height: 30px; width:30px;margin-left: 100px;"></a>
                <a href="https://wa.me/message/B46DFR4QTDDRO1"><img src="iMage/whatsapp (1).png" style="height: 30px; width:30px;margin-left: 20px;"></a>
             
            </div>
            <div class="col-md-6">
                <div id="con3"><center><h2 style="padding-top: 5px; color:white; font-family: 'Courier New', Courier, monospace;">MESSAGE</h2></center>
                     <form method="post">
                    <div class="form-group">
                        <label for="usr" style="color:white; margin-left: 10px;">Name:</label>
                        <input name="banji" type="text" class="form-control" id="usr" style="margin-left: 10px;padding-right: 10px;">
                      </div>
                      <div class="form-group">
                        <label for="pwd" style="color:white; margin-left: 10px;">email:</label>
                        <input type="text" name="oye" class="form-control" id="pwd" style="margin-left: 10px;padding-right: 10px;">
                      </div>
                      <div class="form-group">
                        <label for="comment" style="color:white; margin-left: 10px;">Comment:</label>
                        <textarea name="tola" class="form-control" rows="5" id="comment" style="margin-left: 10px;padding-right: 10px;"></textarea>
                      </div>
                     <center> <input name="debo" type="submit" class="btn btn-default" value="Submit"></center>
                    </form>
                      
                </div></a>
                
            </div>
        </div>
        <div class="row" style="background-color: black;">
            <div class="col-md-12"><div><center><h4 style="color:white; margin-top: 200px;">OASIS_TECH 2023</h4></center></div></div>

        </div>
       
        

    </div>
    
</body>
</html>