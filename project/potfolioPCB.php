<?php

require_once('php/header.php');

function gallerymahmoud(){
for ($i=1; $i < 13; $i++) { 
    
echo '<img onmouseover="preview.src=img'.$i.'.src" name="img'.$i.'" src="image/pcb/'.$i.'.jpg">';

}
}
?>


<body>
    <main id="ssa">
            
    <section>
            
    <section style="margin-bottom:20px;margin-top:20px;">
            
            <div class="container">
                <div class="row port" >
                
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2 class=""  style="
                    color: #ab0707;
                    margin-top: 0px;
                    text-shadow: -5px 2px 5px #000;">PCB Gallery</h2>
                <div id="container" align="center">    
                        <div class="thumbnails">
                        <?php  gallerymahmoud();  ?>
                                </div>
                            </div>
                            </div>
                        <div class="preview" align="center">
                            <img name="preview" src="image/pcb/1.jpg">
                        </div>
                    </div>
                    <h4 style="text-align:center;font-weight:bold; font-style:italic;"><a href="index.php" style="text-decoration: none;">Back To Home</a></h4> 
                </div>


            <ul style="list-style-type:none;text-align:left;"class="ulfooter"   >
        <li>
            <a href="https://www.facebook.com/ahmed.alaa160160"target="_blank" style="color: #000;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
        </a>
    </li>

   
    <li>
    
    <a href="tel:01098268957" style="color:#000;">
    <svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
    </a>
    
    
</li>
        </ul>
    </main>


    <?php
require_once('php/footer.php');?>


