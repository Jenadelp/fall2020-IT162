
<?php include'includes/header.php' ?>
<!--start index.php-->
        
<!-- START LEFT COL -->
<section>
 <h2 class="Contactme"> Contact Me</h2>
    
    <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jndelp@gmail.com";  //place your/your client's email address here
        $toName = "Jena Delp"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    
   



<?php include'includes/footer.php' ?>
 

