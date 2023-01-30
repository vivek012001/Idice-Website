   <!-- footer start -->
   <div class="footer">
      <div class="footer-orange">
       <!--   <img src="images/footer-dot.png" alt="" class="img-fluid"> -->
         <h2>
            Check your website Seo here
         </h2>
         <input type="url" class="input" placeholder="Type Your Weblink Here">
         <a href="#" class="btn-8">Check Now </a>
      </div>
      <div class="footer-bg">
         <div class="container-lg container-fluid">
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <div class="footer-section-1">
                     <img src="images/idice_optimized.png" alt="">
                     <p>Idice Systems have much planned for the future, working with great clients and continued software development.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="footer-section-2">
                     <h5>Contacts</h5>
                     <div class="section-2">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +917240948498
                     </div>
                     <div class="section-2-email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        info@idicesystems.com

                     </div>
                     <div class="section-2-loaction">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>403, Krishna Tower, Above ICICI Bank, Pipliyahana Main Road, 452016, Indore</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="service-community">
                     <div class="section-service">
                        <h5>Services</h5>
                      <a href="service"> SEO Marketing</a> <br>
                       <a href="service">  SEO Service </a><br>
                       <a href="service"> Pay Per Click</a><br>
                       <a href="service"> Social Media</a>
                     </div>
                     <div class="section-community-1">
                        <h5>Community</h5>
                        <a href="service">Our Product</a><br>
                        <a href="service">Documentation</a><br>
                        <a href="service">Our Service</a><br>
                       <a href="service"> Company</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2 d-none d-md-block">
                  <div class="section-community">
                  <h5>Community</h5>
                        <a href="#">Our Product</a><br>
                        <a href="#">Documentation</a><br>
                        <a href="#">Our Service</a><br>
                       <a href="#"> Company</a>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="copyr-right">
            Copyright © 2022 By Idice Systems – All Rights Reserved
            <div class="copyright-icon">
              <a href="https://www.facebook.com/idicesystems"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/idice_systems/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/company/14429762/admin/
"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
   <!-- footer end -->
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });

</script>
 <script type = "text/javascript" >
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({

            autoPlay: 3000,
            items: 5,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            center: true,
            nav: true,
            loop: true,
            responsive: {
                600: {
                    items: 4
                }
            }

        });

    }); 
  </script>

    <script type = "text/javascript" >
    $(".progress-bar").each(function() {
        $(this).find(".bar-inner").animate({
            width: $(this).attr("data-width")
        }, 6000)
    }); 
  </script>

  <script type = "text/javascript" >
    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 7000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    }); 
  </script> 
 <script type = "text/javascript" >
    const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Search Engine Optimization.", "Social Media Marketing.", "Organic Long-Term "];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
    if (charIndex < textArray[textArrayIndex].length) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    } else {
        cursorSpan.classList.remove("typing");
        setTimeout(erase, newTextDelay);
    }
}

function erase() {
    if (charIndex > 0) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, erasingDelay);
    } else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) textArrayIndex = 0;
        setTimeout(type, typingDelay + 1100);
    }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, newTextDelay + 250);
}); 
</script> 



</body>
</html>
<!-- footer end -->