<?php 
   /*
   Template Name: Contact Page
   */
   the_post();
   get_header(); ?>
<!-- s-content ================================================== -->
<section class="s-content s-content--narrow">
   <div class="row">
      <div class="s-content__header col-full">
         <h1 class="s-content__header-title">
            <?php the_title(); ?>
         </h1>
      </div>
      <!-- end s-content__header -->
      <div class="s-content__media col-full">         
            <?php if ( is_active_sidebar( 'contact-map' ) ) { ?>       
                  <?php dynamic_sidebar('contact-map'); ?>             
            <?php } ?>                     
      </div>
      <!-- end s-content__media -->
      <div class="col-full s-content__main">
         <?php the_content();?>
         <div class="row">                    
            <?php if ( is_active_sidebar( 'contact-section' ) ) { ?>       
            <?php dynamic_sidebar('contact-section'); ?>             
            <?php } ?>                                                               
         </div>
         <!-- end row -->
         <h3>Say Hello.</h3>
         <form name="cForm" id="cForm" method="post" action="">
            <fieldset>
               <div class="form-field">
                  <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
               </div>
               <div class="form-field">
                  <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
               </div>
               <div class="form-field">
                  <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
               </div>
               <div class="message form-field">
                  <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
               </div>
               <button type="submit" class="submit btn btn--primary full-width">Submit</button>
            </fieldset>
         </form>
         <!-- end form -->
      </div>
      <!-- end s-content__main -->      
   </div>
   <!-- end row -->
</section>
<!-- s-content -->
<!-- s-content -->
<?php get_footer(); ?>