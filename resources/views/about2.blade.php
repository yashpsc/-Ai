@extends('layouts.default')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js"></script>
<style>
  .bodytag {
    margin: 0;
    padding-bottom: 200px;
    color: #fff;
  }

  .section1,
  .section3 {
    background-color: #222;
    font-size: 50px;
  }

  .head {
    height: 100vh;
    padding-top: 60px;
  }

  /* .content-box {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: left;
  height: 400px;
  width: 50%;
  font-size: 40px;
  padding-left: 5em;
} */

  .content-box {
    height: 100vh;
    width: 50%;
    font-size: 40px;
    position: absolute;
    top: 35%;
    color: #ffffff;
    z-index: 2;
    max-width: 624px;
    width: 100%;
    left: 10%;
  }

  .images-box {
    position: relative;
    height: 100vh;
    width: 100%;
  }
  .heading {
    opacity: 0;
    position: absolute;
    top: 2em;
    z-index: 2;
  }

  .scroll-img {
    width: 100vw;
    // display: none;
    opacity: 0;
    position: absolute;
  }

  .scroll-img:before {
    position: absolute;
    content: '';
    background: linear-gradient(54deg, #000 4.44%, rgba(0, 0, 0, 0.68) 32.97%, rgba(0, 0, 0, 0.00) 69.74%);
    height: 100%;
    width: 100%;
    z-index: 1;
    top: 0;
    bottom: 0;
    left: 0;
  }
  
.swiper-container .slider {
    min-height: 100vh;
}

  #img1 {
    opacity: 1 !important;
  }
</style>

<section>
  <div class="news-banner" style="background-image: url('images/news-banner.png')">
    <!-- <div class="overlay-black"></div> -->
    <div class="news-banner-content">
      <h3>
        <span class="vertical-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
            <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
            <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
          </svg>
        </span>
        About us
      </h3>
      <h1>Our solutions increase efficiencies <br> and offer non-linea scalability.
      </h1>
    </div>
  </div>
</section>

<section class="padd-inside">
  <div class="container">
    <div class="detail-caption mx-auto text-center">
      <p>CamCom is an award-winning, industry agnostic AI powered platform for visual inspections built on a Computer
        Vision stack. We are pioneers in leveraging CV and associated technologies in the visual inspection process. We
        deploy our solution through bespoke Rigs, mobile devices or UAVs depending on the customer requirements for
        precision and speed. We work closely with our customers to enable retrofit solutions that do not require too
        many changes to the existing workflow.</p>

      <p>Defect/damage visual inspections are labour intensive and therefore subjective, slow and prone to error. We
        eliminate the subjectivity, future proof the process and make sure that the current throughput is not affected
        in any way. Our solution is the ultimate control tower that enables creation of a visual track and trace audit
        trail across the life cycle of the product. Our solutions increase efficiencies and offer non-linear
        scalability. We ensure contactless solutions that enable our partners to have business continuity.
      <p>

      <p>Our current operations are in India, Middle East, and Southeast Asia. We plan to expand into other regions very
        soon and position ourselves as the quality inspection partner of choice for enterprises across the world by
        future proofing their processes. We are headquartered in Bangalore, INDIA and have an office in Dubai, UAE.</p>
    </div>
  </div>
</section>


<div class="bodytag">

<div class="head">

  <div class="content-box">

    <div class="heading" id="heading1">
    <div class="large-container">
                  <div class="testjn">
                     <h3>
                        <span class="vertical-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                              <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                              <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                           </svg>
                        </span>
                        AUTOMOTIVE MANUFACTURING FINISHED 
                     </h3>
                     <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                     <div class="btnblock">
                        <a class="btn-epic white-txt" target="_blank" href="finished_vehicle_logistics_industry.php" tabindex="0">
                           <div>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
</div>


<div class="heading" id="heading2">
    <div class="large-container">
                  <div class="testjn">
                     <h3>
                        <span class="vertical-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                              <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                              <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                           </svg>
                        </span>
                        FINISHED VEHICLE LOGISTICS
                     </h3>
                     <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                     <div class="btnblock">
                        <a class="btn-epic white-txt" target="_blank" href="finished_vehicle_logistics_industry.php" tabindex="0">
                           <div>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
</div>

<div class="heading" id="heading3">
    <div class="large-container">
                  <div class="testjn">
                     <h3>
                        <span class="vertical-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                              <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                              <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                           </svg>
                        </span>
                        AUTOMATIVE AFTERMARKET
                     </h3>
                     <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                     <div class="btnblock">
                        <a class="btn-epic white-txt" target="_blank" href="finished_vehicle_logistics_industry.php" tabindex="0">
                           <div>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
</div>

<div class="heading" id="heading4">
    <div class="large-container">
                  <div class="testjn">
                     <h3>
                        <span class="vertical-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                              <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                              <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                           </svg>
                        </span>
                        INSURANCE
                     </h3>
                     <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                     <div class="btnblock">
                        <a class="btn-epic white-txt" target="_blank" href="finished_vehicle_logistics_industry.php" tabindex="0">
                           <div>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
</div>

<div class="heading" id="heading5">
    <div class="large-container">
                  <div class="testjn">
                     <h3>
                        <span class="vertical-center">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                              <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                              <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                           </svg>
                        </span>
                        WAREHOUSING
                     </h3>
                     <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                     <div class="btnblock">
                        <a class="btn-epic white-txt" target="_blank" href="finished_vehicle_logistics_industry.php" tabindex="0">
                           <div>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Book a Demo 
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
</div>

  </div>



  
  <div class="images-box" id="imageContainer">
  
  <div id="img1" class="active scroll-img">
    <img  #scrollImg src="https://reputationindia.in/camcom/images/indusrty_banner/Automotive-manufaturing.webp">
 </div>	
 
   <div id="img2" class="scroll-img">
    <img  #scrollImg src="https://reputationindia.in/camcom/images/indusrty_banner/Finished_Vehicle.webp" alt="stack">
	</div>
	
	  <div id="img3" class="scroll-img">
    <img  #scrollImg src="https://reputationindia.in/camcom/images/indusrty_banner/Aftermarket.webp" alt="stack">
	</div>
	
	  <div id="img4" class="scroll-img">
    <img  #scrollImg src="https://reputationindia.in/camcom/images/indusrty_banner/Insurance.webp" alt="stack">
	</div>
	
	  <div id="img5" class="scroll-img">
    <img  #scrollImg src="https://reputationindia.in/camcom/images/indusrty_banner/Warehouse.webp" alt="stack">
	</div>
	
  </div>
  
  </div>
  
</div>

<script>

gsap.registerPlugin(ScrollTrigger);

function setScrollText(){

  gsap.to('#heading1', {
    scrollTrigger: {
      trigger: '#heading1',
      toggleActions: 'play reverse play reverse',
      start: '0s',
      end: '+=1000s',
    },
    opacity: 1,
  });

  gsap.to('#heading2', {
    scrollTrigger: {
      trigger: '#heading2',
      toggleActions: 'play reverse play reverse',
      start: '+=1000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

  gsap.to('#heading3', {
    scrollTrigger: {
      trigger: '#heading3',
      toggleActions: 'play reverse play reverse',
      start: '+=2000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

  gsap.to('#heading4', {
    scrollTrigger: {
      trigger: '#heading4',
      toggleActions: 'play reverse play reverse',
      start: '+=3000s',
      end: '+=1000s',
    },
    opacity: 1,
  });


  gsap.to('#heading5', {
    scrollTrigger: {
      trigger: '#heading5',
      toggleActions: 'play reverse play reverse',
      start: '+=4000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

}

function setScrollImages() {

  gsap.from('#img1', {
    scrollTrigger: {
      trigger: '#img1',
      toggleActions: 'play reverse play reverse',
      start: '0s',
      end: '+=1000s',
    },
    opacity: 0,
  });

  gsap.to('#img2', {
    scrollTrigger: {
      trigger: '#img2',
      toggleActions: 'play reverse play reverse',
      start: '+=1000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

  gsap.to('#img3', {
    scrollTrigger: {
      trigger: '#img3',
      toggleActions: 'play reverse play reverse',
      start: '+=2000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

  gsap.to('#img4', {
    scrollTrigger: {
      trigger: '#img4',
      toggleActions: 'play reverse play reverse',
      start: '+=3000s',
      end: '+=1000s',
    },
    opacity: 1,
  });


  gsap.to('#img5', {
    scrollTrigger: {
      trigger: '#img5',
      toggleActions: 'play reverse play reverse',
      start: '+=4000s',
      end: '+=1000s',
    },
    opacity: 1,
  });

}

gsap.to('.head', {
  scrollTrigger: {
    pin: '.head',
    end: '+=5000s',
    pinSpacing: true,
  },
});


setScrollText();
setScrollImages();



</script>



<section>

<div class="container">
<div class="row">
<div class="text-center">
      <div class="col-12">
         <h3><span class="vertical-center"><img class="img-fluid" src="images/dot.svg"></span> Our</h3>
         <h2>Leadership</h2>
      </div>
   </div>
</div>

<div class="row align-items-center justify-content-center mobile-slider">
   <div class="col-md-3 col-lg-3">
   <figure class="caption-scroll leader-caption m-0" data-bs-toggle="modal" data-bs-target="#leaderone">
          <img src="images/mahesh.webp"  alt="">
          <figcaption>
            <h3>Mahesh Subramanian<span><img src="images/linkdin.svg"></span></h3>
          </figcaption>
        </figure>
   </div>
   <div class="col-md-3 col-lg-3">
   <figure class="caption-scroll leader-caption m-0" data-bs-toggle="modal" data-bs-target="#leadertwo">
          <img src="images/Geetha.webp"  alt="">
          <figcaption>
            <h3>Geetha Sham<span><img src="images/linkdin.svg"></span></h3>
          </figcaption>
        </figure>
   </div>
   <div class="col-md-3 col-lg-3">
   <figure class="caption-scroll leader-caption m-0"  data-bs-toggle="modal" data-bs-target="#leaderthree">
          <img src="images/Ajith.webp"  alt="">
          <figcaption>
            <h3>Ajith Nayar<span><img src="images/linkdin.svg"></span></h3>
          </figcaption>
        </figure>
   </div>
   <div class="col-md-3 col-lg-3">
   <figure class="caption-scroll leader-caption m-0"  data-bs-toggle="modal" data-bs-target="#leaderfour">
          <img src="images/Umesh.webp"  alt="">
          <figcaption>
            <h3>Uma Mahesh(Umesh)<span><img src="images/linkdin.svg"></span></h3>
          </figcaption>
        </figure>
   </div>
</div>


</div>
</section>



<section class="padd-inside red-theme">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="col-12">
          <h3 class="text-white"><span class="vertical-center"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
              </svg></span> Our Partners</h3>
          <h2 class="text-white">Valued & Strategic Partnerships</h2>
        </div>
      </div>
    </div>

    <div class="row-grid">
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
      <div class="col-logo">
        <figure class="m-0">
          <img src="images/logo-partner.png" alt="">
        </figure>
      </div>
    </div>


  </div>
</section>



<section class="padd-inside lightgrey">
  <div class="large-container">
    <div class="row g-0 align-items-center text-center">
      <div class="col-md-6">
        <h1>Investors</h1>
      </div>
      <div class="col-md-6">
        <div class="right-logoabt">
          <img src="images/trlog.png">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="padd-inside">
  <div class="large-container">
    <div class="row g-0 align-items-center">
      <div class="col-md-4">
        <h1>Impact across international borders and regions</h1>
      </div>
      <div class="col-md-8">
        <div class="map-sec">
          <figure>
            <img id="map-world" src="/images/map.webp" alt="india map" class="img-fluid">
            <div id="icon1" class="dot white">
              <div id="loc-1" class="visible-map">Dubai</div>
            </div>
            <div id="icon2" class="dot white">
              <div id="loc-2" class="visible-map">India</div>
            </div>
            <div id="icon3" class="dot white">
              <div id="loc-3" class="visible-map">USA</div>
            </div>
            <div id="icon4" class="dot white">
              <div id="loc-4" class="visible-map">Canada</div>
            </div>
            <div id="icon5" class="dot white">
              <div id="loc-5" class="visible-map">Africa</div>
            </div>
            <div id="icon6" class="dot white">
              <div id="loc-6" class="visible-map">Asia</div>
            </div>
            <div id="icon7" class="dot white">
              <div id="loc-7" class="visible-map">Delhi</div>
            </div>

          </figure>
        </div>
      </div>
    </div>
  </div>
</section>



@stop