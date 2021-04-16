<?php
function input_sectionTwo(){
    $element1='
    <div class="container text-center">
    <h1 class="h1" style="padding: 1em 1rem; font-size:60px; font-weight:bold;             font-family: "Merriweather", serif; ">Services</h1>
    <p class="lead" style="color:#000;">We  Will Help You To achive Your Project Fast and Hight Quality 
    </p>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="price-box wow slideInLeft "data-wow-duration="3s">
        
                <img src="image/download.jpg" style="width:100%;height:30%;  min-height:146px;
                max-height:146px;" alt="">
                <h3 style="font-size:25px; font-weight:bold; ">Elctronics</h3>
                <h4 style="line-height:30px; margin:7px;color:#000; font-style:italic;">Make your project as you need the project of all components and pcb design and complete them and give for you the final project good design and awsom helps</h4>
                <h5><a href="portfoliomohamed.php" style="text-decoration: none;">Click To show The Portfolio</a></h5>
                
                    </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="price-box wow slideInRight data-wow-duration="3s"">
                <img src="image/pcb.jpg" style="width:100%;height:30%;  min-height:146px;
                max-height:146px;" alt="">
                
                <h3 style="font-size:25px; font-weight:bold; ">PCB making</h3>
                <h4 style="line-height:25px;margin:7px; color:#000; font-style:italic;">We are use the good matariles of our pcb single layer or double layer we use printing for pcb not CNC ,ithout green mask or via and the delivary for the near metro station   
                <h5><a href="potfolioPCB.php" style="text-decoration: none;">Click To show The Portfolio</a></h5>
                </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="price-box wow bounceInUp"data-wow-duration="3s">
                <img src="image/web.jpg" style="width:100%;height:30%; min-height:146px;
                max-height:146px; " alt="">
                
                
                <h3 style="font-size:25px; font-weight:bold; ">Web Developer</h3>
                <h4 style="line-height:25px; margin:7px;color:#000; font-style:italic;">We will help use for making your Web site (front-end web page or back-end web page) that only page , with Database or edit of last projec  and we use the latest vegion of codeing that"s make any developer to edit of the project simply and give you The grace period after the project finshed to edit for it 
                <h5><a href="portfolioA.php" style="text-decoration: none;">Click To show The Portfolio</a></h5>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="price-box wow slideInDown" data-wow-duration="3s">
                <img src="image/design.jpg" style="width:100%;height:30%;  min-height:146px;
                max-height:146px;" alt="">
                
                <h3 style="font-size:25px; font-weight:bold; ">Graphic Design </h3>
                <h4 style="line-height:25px; margin:7px;color:#000; font-style:italic; ">We will help you to achive all your dreams of the (Design,logo,cover of website ,Banner ,Advertisement,etc...) that the design will be hight quality and i will send you the file of the project if you need to edit for it any time later and will give you The grace period to edit of the design project 
                <h5><a href="portfolioMA.php" style="text-decoration: none;">Click To show The Portfolio</a></h5>
                </div>
        </div>
    </div>
</div>';
echo $element1;
}

function input(){
    $carosal='            <div class="landing__containers">
                
    <h1 class="h1" style=" font-size:60px; font-weight:bold; margin-top:100px;margin-bottom:50px;            font-family: "Merriweather", serif;  padding: 1em 1rem;text-shadow: 1px 4px rgba(255, 253, 253, 0.74);">Our Team</h1>
            <p class="lead"  style="font-size:25px; font-weight:bold; color:#000;" >We are a startup that provides services such as manufacturing electronic circuits, designing and executing web pages, executing engineering projects, designing logo and graphics</p>

                                    <!--testimonial carosal-->

            <div id="carosal_testimonial" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        
    <span  ">Ahmed Alaa Soltan</span>
    <h2>Software Enginering</h2>
            
        </div>
        
        <div class="item">
        <span  >Mohamed Alaa Soltan</span>
            <h2>Embeded Enginering</h2>
            
            </div>
        
        <div class="item">
        
            <span >Mahmoud Alaa Soltan</span>
            <h2>Designer</h2>           
        </div>
        
    

        
    </div>
    <ol class="carousel-indicators ">
        <li data-target="#carosal_testimonial" data-slide-to="0" class="active">
            <img src="image/ahmed.jpg">
        </li>
        <li data-target="#carosal_testimonial" data-slide-to="1"><img src="image/mohamed.jpg"/></li>
        <li data-target="#carosal_testimonial" data-slide-to="2"><img src="image/mohamed.jpg"/></li>
        
        
    </ol>
    
    </div>
</div>';
echo $carosal;
}

function inputForm($type,$placehoder,$name,$value){
    $elem="
    <div class='container'>
    <div class='row'>
    <div class='input-group-prepend'>
        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'> 
                <input type='$type' name='$name'value='$value' class='form-control text' id='inlineForminputGroup' onautocomplete='off' placeholder='$placehoder' style='width:100%;'>
            </div>
        </div>
    </div>
</div>

    ";
echo $elem;
}
function inputFormtoption(){
    $eleme="
    <div class='container'>
    <div class='row'>
        <div class='input-group-prepend'>
        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'> 
            <textarea style='    background-color: #000;
            color: #dfdfdf;
            border-top: 0px;
            border-bottom: 1px solid #67d1f1;
            border-left: 0px;
            border-right: 1px;
            width:100%;
            ' name='description' id='' cols='25' rows='3' placeholder='Description' value=''></textarea>
            </div>
            </div>
        </div>
    </div>
                        
    ";
echo $eleme;
}

function buttonElement($btnid,$styleclass,$text,$name,$attrs){
    $btnn="<button name='$name''$attrs' class='$styleclass'style='width: 100%;' id='$btnid'>$text</button>";


echo $btnn;
}


function portfolioAhmed(){
$ahmed=' <section style="margin-top:20px;">
            
<div class="container">
    <div class="row port" >
    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2 class=""  style="
        color: #ab0707;
        margin-top: 0px;
        text-shadow: -5px 2px 5px #000;">Eng/Ahmed Alaa Soltan</h2>
        <h3 class="h33">A Student In New Cairo Academy of Computer Science and  Professional Fullstack Web Development Work With Language : </h3>
        <ul class="liport">
            <li>HTML &HTML5</li>
            <li>CSS &CSS3</li>
            <li>Bootstrap</li>
            <li>JavaScript</li>
            <li>JQuery</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>MySQL</li>
        </ul>
        <h3 class="h33">The project I Made </h3>
        <ul class="liport"     >
            <li>lnding Page</li>
            <li>Company Page </li>
            <li>Resturant web site for make an order </li>
        </ul>
        <h3 class="h33">The Profile of: </h3>
        <ul style="list-style-type:none;text-align:left;"class="ulfooter"   >
        <li>
            <a href="https://www.facebook.com/profile.php?id=100002511333631"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
        </a>
    </li>

    <li>
        <a href="mailto:ahmed.soltan160160@gmail.com"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
        </svg>
        </a>
    </li>
    <li >
    <a href="https://github.com/ahmedsoltan173"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
    </svg>
    </a>
    </li>
    <li>
    <a href="https://www.linkedin.com/in/ahmed-soltan-b6695a1b1/?fbclid=IwAR3AKHfv15yAtKaFRApt71zuI5g8eD0EiCjnJyxWmoY1a5osphfCpRntFas"target="_blank" style="color: #000;">
    <svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg>
        </a>
    </li>
    <li>
    
    <svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    <span style="font-size:15px;padding-right:8px;">01098268957</span>
    </svg>
    
    <img class="imgaa" src="image/ahmed.jpg" style="" alt=""/>
</li>
        </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <img class="imga" src="image/ahmed.jpg" style="" alt=""/>
        </div>
    </div>
</div>
<h4 style="text-align:center;margin-bottom:50px;font-weight:bold; font-style:italic;"><a href="index.php" style="text-decoration: none;">Back To Home</a></h4>
</section>
';

        echo $ahmed;

}

function portfolioMohamed(){
    $moh='
    <section style="margin-top:20px;">
            
    <div class="container">
        <div class="row port" >
        
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2 class=""  style="
            color: #ab0707;
            margin-top: 0px;
            text-shadow: -5px 2px 5px #000;">Eng/Ahmed Alaa Soltan</h2>
            <h3 class="h33">A Student In New Cairo Academy of Computer Science and  Professional Fullstack Web Development Work With Language : </h3>
            <ul class="liport">
                <li>HTML &HTML5</li>
                <li>CSS &CSS3</li>
                <li>Bootstrap</li>
                <li>JavaScript</li>
                <li>JQuery</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>MySQL</li>
            </ul>
            <h3 class="h33">The project I Made </h3>
            <ul class="liport"     >
                <li>lnding Page</li>
                <li>Company Page </li>
                <li>Resturant web site for make an order </li>
            </ul>
            <h3 class="h33">The Profile of: </h3>
            <ul style="list-style-type:none;text-align:left;"class="ulfooter"   >
            <li>
                <a href="https://www.facebook.com/MuhammadAlaa7696"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            </a>
        </li>
    
        
        <li >
        <a href="https://github.com/Mohamedalaa96"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
        </a>
        </li>
        <li>
        <a href="https://www.linkedin.com/in/muhammadalaa7696/?fbclid=IwAR0goWL_qgtooZ9RpOt75f_C75iPj0zE2M7X8wKkVUa__8Uvo1Z4duvQq3Q"target="_blank" style="color: #000;">
        <svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
            </a>
        </li>
        <li>
        
        <svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        <span style="font-size:15px;padding-right:8px;"> 01026906232</span>
        </svg>
        
        <img class="imgaa" src="image/mohamed.jpg" style="" alt=""/>
    </li>
            </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img class="imga" src="image/mohamed.jpg" style="" alt=""/>
            </div>
        </div>
    </div>
    <h4 style="text-align:center;margin-bottom:50px;font-weight:bold; font-style:italic;"><a href="index.php" style="text-decoration: none;">Back To Home</a></h4>
    </section>

    ';
echo $moh;
}
