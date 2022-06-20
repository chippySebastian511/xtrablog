 <?php

    /**
     * Template Name: contact us
 
     */
    ?>

 <header class="tm-header" id="tm-header">
     <?php get_header();
        ?>
 </header>
 <div class="container-fluid">
     <main class="tm-main">
         <!-- Search form -->
         <div class="row tm-row">
             <?php get_search_form();
                ?>
         </div>
         <div class="row tm-row tm-mb-45">
             <div class="col-12">
                 <hr class="tm-hr-primary tm-mb-55">
                 <div class="gmap_canvas">
                     <!-- Google Map -->
                     <iframe width="100%" height="477" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                 </div>
             </div>
         </div>
         <div class="row tm-row tm-mb-120">
             <div class="col-12">
                 <h2 class="tm-color-primary tm-post-title tm-mb-60"><?php the_title(); ?></h2>
             </div>
             <div class="col-lg-7 tm-contact-left">
                 <?php
                    the_content();
                    ?>
             </div>
             <div class="col-lg-5 tm-contact-right">
                 <address class="mb-4 tm-color-gray">
                     120 Lorem ipsum dolor sit amet,
                     consectetur adipiscing 10550
                 </address>
                 <span class="d-block">
                     Tel:
                     <a href="tel:060-070-0980" class="tm-color-gray">060-070-0980</a>
                 </span>
                 <span class="mb-4 d-block">
                     Email:
                     <a href="mailto:info@company.com" class="tm-color-gray">info@company.com</a>
                 </span>
                 <p class="mb-5 tm-line-height-short">
                     Maecenas eu mi eu dui cursus
                     consequat non eu metus. Morbi ac
                     turpis eleifend, commodo purus
                     eget, commodo mauris.
                 </p>
                 <ul class="tm-social-links">
                     <li class="mb-2">
                         <a href="https://facebook.com" class="d-flex align-items-center justify-content-center">
                             <i class="fab fa-facebook"></i>
                         </a>
                     </li>
                     <li class="mb-2">
                         <a href="https://twitter.com" class="d-flex align-items-center justify-content-center">
                             <i class="fab fa-twitter"></i>
                         </a>
                     </li>
                     <li class="mb-2">
                         <a href="https://youtube.com" class="d-flex align-items-center justify-content-center">
                             <i class="fab fa-youtube"></i>
                         </a>
                     </li>
                     <li class="mb-2">
                         <a href="https://instagram.com" class="d-flex align-items-center justify-content-center mr-0">
                             <i class="fab fa-instagram"></i>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
         <footer class="row tm-row">
             <?php get_footer(); ?>

         </footer>
     </main>
 </div>
 <script src="js/jquery.min.js"></script>
 <script src="js/templatemo-script.js"></script>
 </body>

 </html>