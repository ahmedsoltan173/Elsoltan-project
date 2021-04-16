<footer class="page__footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " >
                    <!-- Form -->
                    <form method="POST" action="index.php" class="form" id="form1">
                        <h3>Send a request</h3>
                        <div class="pt-2">
                            <?php  inputForm($placeholder='Name',$type='User Name',$name='cluntName',$value=""); ?>
                        </div>
                        <br>
                        <div class="pt-2">
                            <?php  inputForm($placeholder='What\'s app Number',$type="Whats app Number",$name='number',$value=""); ?>
                        </div>

                        <div class='container'>
                            <div class='row'>
                                <div class='input-group-prepend'>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'> 
                                    <div class="pt-2">
                                        <select name="section" class="text" id="cars"style="margin-top: 20px; width:100%;">
                                            <option value="Web Dveloment">Web development</option>
                                            <option value="Elctronics">Electronics</option>
                                            <option value="Design">Design</option>
                                            <option value="PCB">PCB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        


                        
                        <br>
                        <div class="pt-2">
                        <?php inputFormtoption(); ?>
                        </div>
                        <br>
                        <div class='container'>
                        <div class='row'>
                            <div class='input-group-prepend'>
                                <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'> 
                                    <?php buttonElement($btnid="btn-create", $styleclass="btn btn-success", $text="Submit",$name="creat",$attrs="dat-toogle='toopltip'data-placement='bottom' title='Create'")  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    </form>   

                    <br>
                <br>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul class="ulfooter" style="  list-style-type:none">
                <li>
                    <a href="www.facebook.com" style="color: white;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></a>
                </li>
                <li>
                <a href="www.facebook.com" style="color: white;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg></a>
                </li>
                <li>
                <a href="www.facebook.com" style="color: white;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg></a>
                </li>
                <li >
                <a href="www.facebook.com" style="color: white;"><svg style=" cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg></a>
                </li>
                </ul>
                


                <?php  
                $result=getcomment();
                ?>

            
                <div class="landing__containers foot">
                            <!--testimonial carosal-->
                    <div id="carosal_testimonial" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner text-center" role="listbox"style="">
                        <div class="item active">
                            <span >Leave your Comment's her...</span>
                        </div>
                <?php if($result){
                    while($row = mysqli_fetch_assoc($result)){?>
                        <div class="item">
                            <p class="lead"  data-id="<?php echo $row['id']; ?>"><?php echo $row['comment']; ?></p>
                        </div> 
                        <?php } } ?>
                    </div>
                    </div>
                    <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center'style="width:100%;position:relative;
                bottom:0px;"> 
                    <form method="POST" action="index.php" class="form" >
                        <textarea style='    background-color: #000;
                        color: #dfdfdf;
                        border-top: 0px;
                        border-bottom: 1px solid #67d1f1;
                        border-left: 0px;
                        border-right: 1px;
                        width:100%;
                        ' name='commenttt' id='' cols='25' rows='3' placeholder='Comment' value=''></textarea>
                        <?php buttonElement($btnid="btn-create", $styleclass="btn btn-success", $text="Leave A comment",$name="comment",$attrs="dat-toogle='toopltip'data-placement='bottom' title='comment'")  ?>
                            
                    </form>
                </div>
            </div>
    





            </div>
        </div>
        <div class="container text-center " ><p>All copy right  &copy Elsoltan-2021</p></div>
        
    </footer>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript"></script>
<!-- <script src="js/app.js"></script> -->
<script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
</body>
</html>
<?php ob_end_flush(); ?>