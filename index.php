 <?php
    include 'header.php';
    ?>


 <div class="header-container">

     <?php
        if ($_SESSION) {
            include 'nav_auth.php';
        } else {
            include 'nav_non_auth.php';
        }
        ?>

     <div class="header-title-image"></div>
     <div class="intro-text">Follow the story of Bob Bobster, the legendary <span class="intro-hg-1">"Spaciator"</span>, on his <span class="intro-hg-2">interplanetary mission</span>
         to find his best friend Jim Jimster!<br>
         Collect artifacts to empower the <span class="intro-hg-2"> sentient weapon </span>you discover on the
         planet by shooting the hostile enemies that stand in your way. <br> <br>

         <span class="intro-hg-1">Will you ever see your best friend again? </span>Where are the enemies coming
         from? What is this sentient weapon you've discovered? <br><br>
         <span class="intro-hg-2"> Sign up below to start your journey!</div></span>
     <button class="coin-button">

     </button>


     <button type="button" id="coin-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SignupModal">
         <h1 class="signup-title"> Sign Up!</h1>
     </button>

     <div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-description">
                     <p class="modal-description">Sign-Up in order to acess further details :)</p>
                 </div>

                 <div class="modal-body">
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">@</span>
                         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">*</span>
                         <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Sign-Up</button>
                 </div>
             </div>
         </div>
     </div>

     <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-description">
                     <p class="modal-description">Login to access your download link, also keep an eye out for the <a class="newsletter-text-link" href="#newsletter-container">newsletter</a> , big updates coming soon ;)</p>
                 </div>

                 <div class="modal-body">
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">@</span>
                         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-3">
                         <span class="input-group-text" id="basic-addon1">*</span>
                         <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Login</button>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <div class="trailer-container">
     <div id="trailer-title-box" style="margin-top: 8rem;">
         <h1 class="trailer-title">Laterst Trailer</h1>
     </div>
     <div class="trailer-video-container">
         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EQPkVCmQGNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
 </div>
 <div class="update-container">
     <div id="trailer-title-box" style="margin-top: 8rem;">
         <h1 class="trailer-title">When?</h1>
     </div>
     <div class="update-content-container">
         <p>As of now the official release date has not yet been decided on.
             However, in the coming days we are releasing a <br>
             <span class="intro-hg-1">beta</span><br>
             versions of the game to a
             limited number of people. <br><br>

             If you would like to know more, sign up to our
             <span class="intro-hg-2"><a class="newsletter-text-link" href="#newsletter-container">newsletter</a></span>
             in the footer
             :)</p>
     </div>
 </div>
 <div class="three-w-container">
     <div class="three-w-content-container">
         <div class="accordion accordion-flush" id="accordionFlushExample">
             <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         Who?
                     </button>
                 </h2>
                 <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">We are a team of 5 student developers <br> 3 Game Developers <br> 2 Web Developers</div>
                 </div>
             </div>
             <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                         Where?
                     </button>
                 </h2>
                 <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">We are all based in the great city of London, capital of the United Kingdom</div>
                 </div>
             </div>
             <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                         Why?
                     </button>
                 </h2>
                 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">This is a university project we need to work on over the period of the whole term. Throughout this module we will be confronted by many real-life challenges Developers face, alone or in a team.</div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <?php
 
 include 'footer.php';
 
 ?>