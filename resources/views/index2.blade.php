@extends('layouts.default')
@section('content')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js"></script> -->


<style>
.relativesec{position: relative;}
   .spacer {
      width: 100%;
      height: 100vh;
      background-color: green;
      color: #ffffff;
   }

   .container-large {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      display: flex;
   }
ul{list-style: none;}

   .left-container {
    position: absolute;
    top: 50%;
    z-index: 2;
    font-size: 30px;
    color: #fff;
    right: 0;
    width: 400px;
}

   .right-container {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      position: relative;
   }

   .right-content {
      width: 100%;
      border: 1px solid cyan;
            /* overflow-y: scroll;
    height: 100vh;
    scroll-snap-type: mandatory;
    scroll-snap-points-y: repeat(100vh);
    scroll-snap-type: y mandatory; */
   }

   .right-element {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 100px;
      position: relative;
      /* scroll-snap-align: start;   */
   }
   .right-element:before {
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
   .right-element:after {
    position: absolute;
    content: '';
    background: linear-gradient(277deg, #000 4.44%, rgba(0, 0, 0, 0.68) 32.97%, rgba(0, 0, 0, 0.00) 69.74%);
    height: 100%;
    width: 100%;
    z-index: 1;
    top: 0;
    bottom: 0;
    left: 0;
}
     .right-element img{width: 100%;height: 100vh;}

   .left-container {
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .left-content {
      width: 100%;
      max-width: 400px;
      height: 100%;
      max-height: 400px;
      position: relative;
      overflow: hidden;
   }

   .selected {
      color: red;
   }

   a {
      cursor: pointer;
   }
</style>

<section>
   <div class="swiper mySwiperprogress">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <video width="100%" class="" autoplay="" loop="" muted playsinline="" id="hero_video">
               <source src="images/camvideo.mp4" type="video/mp4">
            </video>
            <div class="large-container">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                           <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                           <circle cx="9" cy="9" r="3" fill="#E01E26" />
                        </svg>
                     </span>
                     AUTOMOTIVE MANUFACTURING
                  </h3>
                  <h1>AI-POWERED <span class="logo-color">VISUAL INSPECTIONS</span></h1>
                  <div class="detail-cpation">
                     <p>Step into a new era of automotive care with our AI car inspection company. Harnessing advanced
                        artificial intelligence, we redefine vehicle assessments for unparalleled precision and
                        efficiency.</p>
                  </div>
                  <div class="btnblock">
                     <a class="btn-epic white-txt" target="_blank" href="javascript:void(0);" tabindex="0">
                        <div>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="image-fullwidth"><img class="w-100" src="images/casedetailbanner1.png"></div>
            <div class="large-container">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                           <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                           <circle cx="9" cy="9" r="3" fill="#E01E26" />
                        </svg>
                     </span>
                     AUTOMOTIVE MANUFACTURING
                  </h3>
                  <h1>AI-POWERED <span class="logo-color">VISUAL INSPECTIONS</span></h1>
                  <div class="detail-cpation">
                     <p>Step into a new era of automotive care with our AI car inspection company. Harnessing advanced
                        artificial intelligence, we redefine vehicle assessments for unparalleled precision and
                        efficiency.</p>
                  </div>
                  <div class="btnblock">
                     <a class="btn-epic white-txt" target="_blank" href="javascript:void(0);" tabindex="0">
                        <div>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide">
            <div class="image-fullwidth"><img class="w-100" src="images/casedetailbanner1.png"></div>
            <div class="large-container">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                           <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                           <circle cx="9" cy="9" r="3" fill="#E01E26" />
                        </svg>
                     </span>
                     AUTOMOTIVE MANUFACTURING
                  </h3>
                  <h1>AI-POWERED <span class="logo-color">VISUAL INSPECTIONS</span></h1>
                  <div class="detail-cpation">
                     <p>Step into a new era of automotive care with our AI car inspection company. Harnessing advanced
                        artificial intelligence, we redefine vehicle assessments for unparalleled precision and
                        efficiency.</p>
                  </div>
                  <div class="btnblock">
                     <a class="btn-epic white-txt" target="_blank" href="javascript:void(0);" tabindex="0">
                        <div>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span>
                              Book a Demo
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="border-h"></div>
      <div class="relative-svg">
         <a class="scroll-about" href="javascript:void(0);">
            <img class="img-fluid" src="images/bottom-btn.svg">
         </a>
      </div>
      <div class="bannerologo">
         <div class="bottom-logo"><a href="javascript:void(0);"><img src="images/banner-logo.webp"></a>
         </div>
      </div>
      <div class="banner_nav_box">
         <div class="swiper-banner-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
               <path
                  d="M7.20965 12.1481L3.25903 7.99996M3.25903 7.99996L7.20965 3.85181M3.25903 7.99996L12.7405 7.99995"
                  stroke="white" stroke-width="0.888889" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
         </div>
         <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
               <circle cx="24" cy="24" r="20">
                  <div class="swiper-banner-pagination"></div>
               </circle>
            </svg>
            <span></span>
         </div>
         <div class="swiper-banner-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
               <path d="M8.5308 3.85181L12.4814 7.99996M12.4814 7.99996L8.5308 12.1481M12.4814 7.99996L2.99994 7.99995"
                  stroke="white" stroke-width="0.888889" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
         </div>
      </div>
   </div>
</section>
<section class="about-testimonial lightwhite padd-outside text-center">
   <div class="large-container">
      <div class="row">
         <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h3> <span class="vertical-center"><img src="images/dot.svg"></span> ABOUT US</h3>
                     <h2>Every EVE is tested in real-world scenarios at the 1X Studio and quality assured scenarios
                        before they’re deployed to a customer’s worksite.</h2>
                     <div class="btnblock know-more btnblock mx-auto  text-start">
                        <a class="btn-epic" target="_blank" href="about" tabindex="0">
                           <div>
                              <span>
                                 Know More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                 </svg>
                              </span>
                              <span>
                                 Know More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="padd-inside pb-0">
   <div class="large-container">
      <div class="row align-items-center text-center">
         <div class="detail-caption mx-auto">
            <div class="col-md-12">
               <h3>
                  <span class="vertical-center"><img src="images/dot.svg"></span>
                  Industry Solutions
               </h3>
               <h2 class="">Understanding Our Operational Approach.</h2>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="relativesec padd-inside pb-0">
   <!-- <div class="spacer"></div> -->
   <div class="container-large">
      <div class="left-container">
         <div class="left-content">
            <ul>
               <li><a>tab 1</a></li>
               <li><a>tab 2</a></li>
               <li><a>tab 3</a></li>
               <li><a>tab 4</a></li>
               <li><a>tab 5</a></li>
            </ul>
         </div>
      </div>
      <div class="right-container">
         <div class="right-content">
            <div class="right-element">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                           <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                           <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                        </svg>
                     </span>
                     Automative Aftermarket
                  </h3>
                  <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                  <div class="btnblock know-more">
                     <a class="btn-epic white-txt" href="automative_aftermarket_industry" tabindex="0">
                        <div>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div> <img src="images/indusrty_banner/Automotive-manufaturing.webp">
            </div>
            <div class="right-element">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                           <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                           <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                        </svg>
                     </span>
                     Automative Aftermarket
                  </h3>
                  <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                  <div class="btnblock know-more">
                     <a class="btn-epic white-txt" href="automative_aftermarket_industry" tabindex="0">
                        <div>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div> <img src="images/indusrty_banner/Finished_Vehicle.webp">
            </div>
            <div class="right-element">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                           <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                           <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                        </svg>
                     </span>
                     Automative Aftermarket
                  </h3>
                  <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                  <div class="btnblock know-more">
                     <a class="btn-epic white-txt" href="automative_aftermarket_industry" tabindex="0">
                        <div>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div> <img src="images/indusrty_banner/Aftermarket.webp">
            </div>
            <div class="right-element">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                           <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                           <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                        </svg>
                     </span>
                     Automative Aftermarket
                  </h3>
                  <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                  <div class="btnblock know-more">
                     <a class="btn-epic white-txt" href="automative_aftermarket_industry" tabindex="0">
                        <div>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div> <img src="images/indusrty_banner/Insurance.webp">
            </div>
            <div class="right-element">
               <div class="maincaption">
                  <h3>
                     <span class="vertical-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                           <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                           <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                           <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
                        </svg>
                     </span>
                     Automative Aftermarket
                  </h3>
                  <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
                  <div class="btnblock know-more">
                     <a class="btn-epic white-txt" href="automative_aftermarket_industry" tabindex="0">
                        <div>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Know More
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                 <path d="M6 3L11 8L6 13" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                              </svg>
                           </span>
                        </div>
                     </a>
                  </div>
               </div> <img src="images/indusrty_banner/Warehouse.webp">
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="spacer"></div> -->
</section>



<section class="human-bg">
   <div class="large-container">
      <div class="row align-items-center">
         <div class="col-md-6 col-12">
            <div class="max-wdthpollution">
               <h3><span class="vertical-center"><img src="images/dot.svg"></span> visual pollution</h3>
               <h2>Human Genome is mapped, but 85% of the human proteome is "undruggable".</h2>
               <div class="btnblock know-more text-start">
                  <a class="btn-epic" href="visual_pollution_industry" tabindex="0">
                     <div>
                        <span>
                           Know More
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                              fill="none">
                              <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </span>
                        <span>
                           Know More
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                              fill="none">
                              <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </span>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-12">
            <div class="mobile-img"><img class="img-fluid" src="images/indusrty_banner/Visual_Pollution.webp"></div>
         </div>
      </div>
   </div>
   <div class="rht-img" style="background-image: url(images/indusrty_banner/Visual_Pollution.webp);"></div>
</section>
<section class="lightwhite padd-inside cards-boxes" style="background-image: url('images/red-bg.png')">
   <div class="large-container">
      <div class="row align-items-center text-center">
         <div class="detail-caption mx-auto">
            <div class="col-md-12">
               <h3 class="text-white">
                  <span class="vertical-center">
                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                        <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                        <circle cx="9" cy="9" r="3" fill="#E01E26" />
                     </svg>
                  </span>
                  What’s News
               </h3>
               <h2 class="text-white">Understanding Our Operational Approach.</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="large-container mt-4">
      <div class="row">
         <div class="col-md-6 col-lg-4">
            <div class="swiper mySwipercards">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527" style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news1.png) no-repeat;    background-size: cover;background-position: 0 100px;
                        ">
                           <figcaption class="caption-black">
                              <h3><span class="vertical-center"><img src="images/dot.svg"></span> Announcement</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news1.png) no-repeat;    background-size: cover;background-position: 0 100px;">
                           <figcaption class="caption-black">
                              <h3><span class="vertical-center"><img src="images/dot.svg"></span> Announcement</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news1.png) no-repeat;    background-size: cover;background-position: 0 100px;">
                           <figcaption class="caption-black">
                              <h3><span class="vertical-center"><img src="images/dot.svg"></span> Announcement</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
         <div class="col-md-6 col-lg-8">
            <div class="swiper whatnew">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news2.png) no-repeat">
                           <figcaption>
                              <h3>
                                 <span class="vertical-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                       fill="none">
                                       <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                                       <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                                       <circle cx="9" cy="9" r="3" fill="#E01E26" />
                                    </svg>
                                 </span>
                                 Announcement
                              </h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news3.png) no-repeat">
                           <figcaption>
                              <h3>
                                 <span class="vertical-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                       fill="none">
                                       <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                                       <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                                       <circle cx="9" cy="9" r="3" fill="#E01E26" />
                                    </svg>
                                 </span>
                                 Announcement
                              </h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news2.png) no-repeat">
                           <figcaption>
                              <h3>
                                 <span class="vertical-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                       fill="none">
                                       <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                                       <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                                       <circle cx="9" cy="9" r="3" fill="#E01E26" />
                                    </svg>
                                 </span>
                                 Announcement
                              </h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a href="whatsnew">
                        <figure class="snip1527"
                           style="background:linear-gradient(to bottom, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 59%, rgb(0 0 0 / 0%) 100%), url(images/news3.png) no-repeat">
                           <figcaption>
                              <h3>
                                 <span class="vertical-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                       fill="none">
                                       <path d="M9 1L9 17" stroke="white" stroke-linecap="round" />
                                       <path d="M1 9H17" stroke="white" stroke-linecap="round" />
                                       <circle cx="9" cy="9" r="3" fill="#E01E26" />
                                    </svg>
                                 </span>
                                 Announcement
                              </h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              </p>
                           </figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
               <div class="swiper-whatnewpagination"></div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<section class="padd-outside">
   <div class="large-container">
      <div class="tabs">
         <ul class="tabs-nav">
            <li class="tab-active"><a href="#tab-1">Awards</a></li>
            <li class=""><a href="#tab-2">Patents</a></li>
         </ul>
         <div class="tabs-stage">
            <div id="tab-1" class="tab active text-center">
               <div class="grid-container grid-colum-7">
                  <div class="award-list">
                     <img src="images/award1.png">
                     <div class="mt-3">
                        <h3>MG India Developer Program and Grant, 2020</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award2.png">
                     <div class="mt-3">
                        <h3>Special Mention in YourStory's Tech30, 2020</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award3.png">
                     <div class="mt-3">
                        <h3>Top 20 startups of India 2019 Award</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award4.png">
                     <div class="mt-3">
                        <h3>Top 10 Best startups</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award5.png">
                     <div class="mt-3">
                        <h3> Award Name</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award7.png">
                     <div class="mt-3">
                        <h3> Award Name</h3>
                     </div>
                  </div>
                  <div class="award-list">
                     <img src="images/award8.png">
                     <div class="mt-3">
                        <h3>Best Innovation, 8th WAF AWARDS, 2021</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div id="tab-2" class="tab text-center">
               <div class="patent-grid">
                  <div class="grid-row">
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Deflectometry Rig for Finished Vehicle Logistics</h3>
                              <h6>India Patent No. 391456-001</h6>
                              <span>July 29, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Heatmap-based method for identifying dent depths on surfaces using 2d images</h3>
                              <h6>India Patent No. 202341044094</h6>
                              <span>June 30, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Deflectometry Rig for paint and surface defect detection for the vehicle manufacturing
                                 industry.</h3>
                              <h6>India Patent No. 391077-001</h6>
                              <span>July 26, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>System for determination of the point of impact in a vehicle accident.</h3>
                              <h6>India Patent No. 202341002901</h6>
                              <span>January 13, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Deflectometry Rig for paint and surface defect detection for large vehicles in class
                                 10-05.</h3>
                              <h6>India Patent No. 392205-001</h6>
                              <span>August 9, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Deflectometry Rig for paint and surface defect detection for small and medium
                                 reflective painted parts-in class 10-05.</h3>
                              <h6>India Patent No. 392206-001</h6>
                              <span>August 9, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>Automated Quality Check Rig for apparel, footwear and white goods in class 14-02.</h3>
                              <h6>India Patent No. 392482-001</h6>
                              <span>August 11, 2023</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-patent">
                        <div class="box-p">
                           <div class="inside-patenttxt">
                              <img src="images/patent-svg.svg">
                              <h3>CamCom Handheld tag reader in class 14-02.</h3>
                              <h6>India Patent No. 392328-001</h6>
                              <span>August 10, 2023</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="lightwhite padd-inside">
   <div class="text-center">
      <div class="detail-caption mx-auto">
         <div class="col-12">
            <h3><span class="vertical-center"><img src="images/dot.svg"></span> Our Customers</h3>
            <h2>Brands we Serve</h2>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="grid-container grid-colum-5">
         <div class="brand-list">
            <img src="images/arbic.webp">
         </div>
         <div class="brand-list">
            <img src="images/ergo.webp">
         </div>
         <div class="brand-list">
            <img src="/images/HDFC.webp">
         </div>
         <div class="brand-list">
            <img src="/images/bajaj.webp">
         </div>
         <div class="brand-list">
            <img src="/images/flottens.webp">
         </div>
         <div class="brand-list">
            <img src="/images/zurich.webp">
         </div>
         <div class="brand-list">
            <img src="/images/FF.webp">
         </div>
         <div class="brand-list">
            <img src="/images/OONA.webp">
         </div>
         <div class="brand-list">
            <img src="/images/SBI.webp">
         </div>
         <div class="brand-list">
            <img src="/images/RD.webp">
         </div>
         <div class="brand-list">
            <img src="/images/Myntra.webp">
         </div>
         <div class="brand-list">
            <img src="/images/Zydus.webp">
         </div>
         <div class="brand-list">
            <img src="/images/Turtlemint.webp">
         </div>
         <div class="brand-list">
            <img src="/images/RB.webp">
         </div>
         <div class="brand-list">
            <img src="/images/QI.webp">
         </div>
      </div>
   </div>
</section>
<section class="padd-inside position-relative">
   <div class="large-container">
      <div class="row">

         <div class="col-md-4 col-lg-4 col-12">
            <div class="text-centermobile">
               <h3><span class="vertical-center"><img src="images/dot.svg"></span> Client testimonials</h3>
               <h2>Understanding Our Operational Approach.</h2>

               <div class="img-testquote">
                  <svg xmlns="http://www.w3.org/2000/svg" width="120" height="117" viewBox="0 0 120 117" fill="none">
                     <path
                        d="M120 0V22.2245C114.11 25.5306 109.571 29.6939 106.38 34.7143C103.313 39.6122 100.982 44.8163 99.3865 50.3265C97.7914 55.7143 96.9939 61.7755 96.9939 68.5102H120V117H71.411V86.8775C71.411 68.7551 73.1288 54.9796 76.5644 45.551C80 36 85.2761 27.2449 92.3926 19.2857C99.5092 11.3265 108.712 4.89796 120 0ZM48.589 0V22.2245C42.6994 25.5306 38.1595 29.6939 34.9693 34.7143C31.9018 39.6122 29.5706 44.8163 27.9755 50.3265C26.3804 55.7143 25.5828 61.7755 25.5828 68.5102H48.589V117H0V86.8775C0 68.7551 1.71779 54.9796 5.15337 45.551C8.58896 36 13.865 27.2449 20.9816 19.2857C28.2209 11.3265 37.4233 4.89796 48.589 0Z"
                        fill="#E01E26" />
                  </svg>
               </div>
            </div>
         </div>



         <div class="col-md-4 col-lg-4 col-12">

            <div class="video-slider">
               <div class="swiper mySwipertestimonialvideoslider">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-video">
                           <img src="images/video-post.jpg">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-video">
                           <img src="images/video-post.jpg">
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-video">
                           <img src="images/video-post.jpg">
                        </div>
                     </div>
                  </div>
                  <div class="relative-arrow">
                     <div class="swiper-testimonial-next">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M13.0499 8.61628H3.9121L8.17877 12.877C8.41581 13.1141 8.41581 13.5052 8.17877 13.7422C8.06618 13.8548 7.90618 13.92 7.74618 13.92C7.5921 13.92 7.4321 13.8607 7.31358 13.7422L1.99803 8.4385C1.76099 8.20146 1.76099 7.81035 1.99803 7.57331L7.30766 2.26368C7.5447 2.02072 7.92988 2.01479 8.17284 2.2459C8.41581 2.47702 8.42173 2.86813 8.19062 3.11109C8.19062 3.11109 8.17877 3.12294 8.17284 3.12887L3.9121 7.38961H13.0499C13.3877 7.38961 13.6603 7.6622 13.6603 7.99998C13.6603 8.33776 13.3877 8.61035 13.0499 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                     <div class="swiper-testimonial-prev">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M2.43062 8.61628H11.5684L7.30173 12.877C7.0647 13.1141 7.0647 13.5052 7.30173 13.7422C7.41433 13.8548 7.57433 13.92 7.73433 13.92C7.8884 13.92 8.0484 13.8607 8.16692 13.7422L13.4765 8.43257C13.7136 8.19553 13.7136 7.80442 13.4765 7.56739L8.17284 2.26368C7.93581 2.02072 7.55062 2.01479 7.30766 2.2459C7.0647 2.47702 7.05877 2.86813 7.28988 3.11109C7.28988 3.11109 7.30173 3.12294 7.30766 3.12887L11.5684 7.38961H2.43062C2.09284 7.38961 1.82025 7.6622 1.82025 7.99998C1.82025 8.33776 2.09284 8.61035 2.43062 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>

            <div class="content-slider">
               <div class="swiper mySwipertestimonial">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-testimonial">
                           <div class="clients-scroll">
                              <p>Myntra has partnered with CamCom to build an Automated Quality Check platform for the
                                 Fashion Industry, which is first of its kind in the world. I would like to take this
                                 opportunity to congratulate each of you and convey my deepest gratitude towards every
                                 member of the team. Your support and service has been great in terms of making things
                                 happen on ground. In the journey, the team has been very flexible to experiment and
                                 venture into new unexplored areas of AI and computer vision to suit our business
                                 requirement. Looking back, the audacious target to build this unique platform has been
                                 achieved from a team led by strong Industry leaders. Trust me you guys have a great
                                 future
                                 in the AI Industry.</p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-testimonial">
                           <p>Myntra has partnered with CamCom to build an Automated Quality Check platform for the
                              Fashion Industry, which is first of its kind in the world. I would like to take this
                              opportunity to congratulate each of you and convey my deepest gratitude towards every
                              member of the team. Your support and service has been great in terms of making things
                              happen on ground. In the journey, the team has been very flexible to experiment and
                              venture into new unexplored areas of AI and computer vision to suit our business
                              requirement. Looking back, the audacious target to build this unique platform has been
                              achieved from a team led by strong Industry leaders. Trust me you guys have a great future
                              in the AI Industry.</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="clients-testimonial">
                           <p>Myntra has partnered with CamCom to build an Automated Quality Check platform for the
                              Fashion Industry, which is first of its kind in the world. I would like to take this
                              opportunity to congratulate each of you and convey my deepest gratitude towards every
                              member of the team. Your support and service has been great in terms of making things
                              happen on ground. In the journey, the team has been very flexible to experiment and
                              venture into new unexplored areas of AI and computer vision to suit our business
                              requirement. Looking back, the audacious target to build this unique platform has been
                              achieved from a team led by strong Industry leaders. Trust me you guys have a great future
                              in the AI Industry.</p>
                        </div>
                     </div>
                  </div>
                  <div class="relative-arrow">
                     <div class="swiper-testimonial-next">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M13.0499 8.61628H3.9121L8.17877 12.877C8.41581 13.1141 8.41581 13.5052 8.17877 13.7422C8.06618 13.8548 7.90618 13.92 7.74618 13.92C7.5921 13.92 7.4321 13.8607 7.31358 13.7422L1.99803 8.4385C1.76099 8.20146 1.76099 7.81035 1.99803 7.57331L7.30766 2.26368C7.5447 2.02072 7.92988 2.01479 8.17284 2.2459C8.41581 2.47702 8.42173 2.86813 8.19062 3.11109C8.19062 3.11109 8.17877 3.12294 8.17284 3.12887L3.9121 7.38961H13.0499C13.3877 7.38961 13.6603 7.6622 13.6603 7.99998C13.6603 8.33776 13.3877 8.61035 13.0499 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                     <div class="swiper-testimonial-prev">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M2.43062 8.61628H11.5684L7.30173 12.877C7.0647 13.1141 7.0647 13.5052 7.30173 13.7422C7.41433 13.8548 7.57433 13.92 7.73433 13.92C7.8884 13.92 8.0484 13.8607 8.16692 13.7422L13.4765 8.43257C13.7136 8.19553 13.7136 7.80442 13.4765 7.56739L8.17284 2.26368C7.93581 2.02072 7.55062 2.01479 7.30766 2.2459C7.0647 2.47702 7.05877 2.86813 7.28988 3.11109C7.28988 3.11109 7.30173 3.12294 7.30766 3.12887L11.5684 7.38961H2.43062C2.09284 7.38961 1.82025 7.6622 1.82025 7.99998C1.82025 8.33776 2.09284 8.61035 2.43062 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                  </div>
                  <!-- <div class="swiper-testimonial-contentpagination"></div> -->
               </div>
            </div>

         </div>

         <div class="col-md-4 col-lg-4 col-12">

            <div class="screenshot-slider">
               <div class="swiper mySwipertestimonialimage">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide" data-bs-toggle="modal" data-bs-target="#screenzoom">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="image-shot">
                           <img src="images/test-sliderimage.svg">
                           <span>Click to zoom <img src="images/zoom-in.png"></span>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="image-shot">
                           <img src="images/test-sliderimage.svg">
                           <span>Click to zoom <img src="images/zoom-in.png"></span>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="caption-profile">
                           <span><img src="images/test-profile.png"></span>
                           <div class="txt-cap">
                              <h5>Ravi Kapoor</h5>
                              <h6>PRESIDENT AND CEO</h6>
                           </div>
                        </div>
                        <div class="image-shot">
                           <img src="images/test-sliderimage.svg">
                           <span>Click to zoom <img src="images/zoom-in.png"></span>
                        </div>
                     </div>
                  </div>
                  <div class="relative-arrow">
                     <div class="swiper-testimonial-next">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M13.0499 8.61628H3.9121L8.17877 12.877C8.41581 13.1141 8.41581 13.5052 8.17877 13.7422C8.06618 13.8548 7.90618 13.92 7.74618 13.92C7.5921 13.92 7.4321 13.8607 7.31358 13.7422L1.99803 8.4385C1.76099 8.20146 1.76099 7.81035 1.99803 7.57331L7.30766 2.26368C7.5447 2.02072 7.92988 2.01479 8.17284 2.2459C8.41581 2.47702 8.42173 2.86813 8.19062 3.11109C8.19062 3.11109 8.17877 3.12294 8.17284 3.12887L3.9121 7.38961H13.0499C13.3877 7.38961 13.6603 7.6622 13.6603 7.99998C13.6603 8.33776 13.3877 8.61035 13.0499 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                     <div class="swiper-testimonial-prev">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M2.43062 8.61628H11.5684L7.30173 12.877C7.0647 13.1141 7.0647 13.5052 7.30173 13.7422C7.41433 13.8548 7.57433 13.92 7.73433 13.92C7.8884 13.92 8.0484 13.8607 8.16692 13.7422L13.4765 8.43257C13.7136 8.19553 13.7136 7.80442 13.4765 7.56739L8.17284 2.26368C7.93581 2.02072 7.55062 2.01479 7.30766 2.2459C7.0647 2.47702 7.05877 2.86813 7.28988 3.11109C7.28988 3.11109 7.30173 3.12294 7.30766 3.12887L11.5684 7.38961H2.43062C2.09284 7.38961 1.82025 7.6622 1.82025 7.99998C1.82025 8.33776 2.09284 8.61035 2.43062 8.61035V8.61628Z"
                              fill="white" />
                        </svg>
                     </div>
                  </div>
               </div>
            </div>



         </div>

      </div>
   </div>


</section>








<section class="lightwhite padd-inside">
   <div class="large-container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <h3><span class="vertical-center"><img src="images/dot.svg"></span> Contact US</h3>
            <h2>Understanding Our<br> Operational Approach.</h2>
         </div>
         <div class="col-md-6">
            <form class="enquiryform">
               <div class="row">
                  <div class="col-12">
                     <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-12">
                     <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-12">
                     <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <!-- <div class="col-12">
                     <select class="form-control form-select" aria-label="Default select example">
                        <option selected>Interested in</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     </div> -->
                  <div class="col-12">
                     <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                  </div>
                  <div class="col-12">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                           I would like to receive marketing, news, promotions and updates via email from CamCom.
                        </label>
                     </div>
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn w-100 mb-3 btn-submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@stop