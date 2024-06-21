@extends('layouts.default')
@section('content')
<section>
   <div class="news-banner" style="background-image: url('images/Resources.webp')">
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
            RESOURCES
         </h3>
         <h1>Get up to date</h1>
      </div>
   </div>
</section>
<section>
   <div class="large-container">
      <ul class="nav nav-tabs news-tabs" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <a class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" aria-controls="home"
               aria-selected="true">News</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" aria-controls="profile"
               aria-selected="false">Podcast</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" aria-controls="contact"
               aria-selected="false">Media Kit</a>
         </li>
         <!-- <li class="nav-item" role="presentation">
            <a class="nav-link" id="blogs-tab" data-bs-toggle="tab" data-bs-target="#blogs" aria-controls="blogs" aria-selected="false">Blogs</a>
         </li> -->
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="whitepaper-tab" data-bs-toggle="tab" data-bs-target="#whitepaper"
               aria-controls="whitepaper" aria-selected="false">White Paper</a>
         </li>
      </ul>
   </div>
   <div class="lightgrey">
      <div class="large-container">
         <div class="tab-content custom-listing  padd-48" id="myTabContent">
            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
               <div class="mini-container-custom">
                  <div class="row">
                     <div class="col-md-4 col-12">
                        <a href="https://www.outlookindia.com/business-spotlight/camcom-revolutionizing-quality-management-with-ai-in-the-global-market"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/News-02.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Camcom revolutionizing quality management with AI in the global market</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">08 MAY 2024</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://reputationindia.in/camcom/images/toI-delhi-03-may-2024.pdf" target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/News-03.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>An AI system in India finds new use case in Saudi</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">03 MAY 2024</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.businesstoday.in/impact-feature/story/camcom-launching-the-worlds-first-large-vision-model-lvm-for-damage-assessments-in-the-global-market-427045-2024-04-26"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/News-01.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom: Launching the world’s first Large Vision Model (LVM) for damage assessments in
                                 the global market</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">26 APR 2024</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.aninews.in/news/business/business/the-kingdom-of-saudi-arabia-ministry-of-municipal-rural-affairs-and-housing-partners-with-camcom-for-a-global-first-program-to-tackle-visual-pollution-using-ai20230607134625/"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/News-05.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>The Kingdom of Saudi Arabia Ministry of Municipal, Rural Affairs and Housing partners
                                 with CamCom for a Global First Program to Tackle Visual Pollution using AI</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">07 JUN 2023</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://camcom.ai/wp-content/uploads/2022/09/Shri%20NitinJi%20Gadkari%20Byte%20On%20Team%20Camcom.mp4"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/News-06.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Address by the Chief Guest: Shri Nitin Gadkari on CamCom’s 5th Anniversary.</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">11 OCT 2022</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.entrepreneur.com/article/414265" target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile1.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Tech Startup CamCom Is Aiming To Ease The Process Of Visual Inspections Through
                                 AI-Powered Automation</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">21 JAN 2022</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://auto.economictimes.indiatimes.com/news/auto-technology/mg-motor-india-partners-with-camcom-for-ai-enabled-car-assessment/87368757"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile2.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>MG Motor India partners with CamCom for AI-enabled car assessment.</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">29 OCT 2021</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.business-standard.com/content/press-releases-ani/fairfirst-insurance-announces-partnership-with-camcom-to-harness-ai-powered-automobile-inspection-solutions-121082300895_1.html"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile3.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Fairfirst Insurance announces partnership with CamCom to harness AI powered automobile
                                 inspection solutions</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">23 AUG 2021</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://auto.economictimes.indiatimes.com/news/industry/camcom-announces-a-first-of-its-kind-ai-partnership-with-mahindra-first-choice-wheels-in-india/85454612"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile4.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom announces a first-of-its-kind AI partnership with Mahindra First Choice Wheels
                                 in India</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">19 AUG 2021</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.khaleejtimes.com/business/camcom-to-set-up-first-computer-vision-lab-in-mea"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile5.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom to set up first computer vision lab in MEA</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">14 JUN 2021</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://asiainsurtechpodcast.com/ep-96-mahesh-subramanian-ceo-camcom-the-drones-become-your-first-responders/"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile6.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Podcast – EP 96 Mahesh Subramanian – The Drones Become Your First Responders</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">04 jan 2021</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.business-standard.com/content/press-releases-ani/camcom-announces-formation-of-advisory-board-120120100840_1.html"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile7.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom announces formation of Advisory Board</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">01 DEC 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://yourstory.com/2020/10/techsparks-yourstory-tech30-2020" target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile8.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Tech30: yourstory’s list of high-potential tech startups in india</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">30 OCT 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://analyticsindiamag.com/this-bangalore-based-startup-uses-computer-vision-for-quality-control-in-automotive-and-warehousing-industries/"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile9.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>This bangalore based startup uses computer vision for quality control in automotive and
                                 warehousing industries</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">16 OCT 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.ciol.com/startup-circle-camcom-ai-ai-platform-quality-assurance-motor-vehicle/"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile10.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Startup circle: how is camcom.ai an AI platform for quality assurance in motor vehicle?
                              </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">02 OCT 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.business-standard.com/content/press-releases-ani/camcom-designates-tech-virtuoso-geetha-as-director-of-engineering-120090901110_1.html"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile11.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom designates tech virtuoso Geetha as director of engineering</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">09 SEP 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://technology.siliconindia.com/viewpoint/cxoinsights/learning-about-ai-in-automation-an-imperative-in-the-post-pandemic-world-nwid-24895.html"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile12.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Learning about AI in Automation – an imperative in the post pandemic world</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <!-- <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div> -->
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.expresscomputer.in/artificial-intelligence-ai/role-of-ai-in-quality-assurance/63102/"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile13.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Role of AI in Quality Assurance</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">01 SEP 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://auto.economictimes.indiatimes.com/news/auto-technology/camcom-ai-revolutionizes-defect-and-damage-assessment-in-auto-industry/77484452"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile14.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>CamCom AI revolutionizes defect and damage assessment in auto industry</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">11 AUG 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://www.thehindu.com/sci-tech/technology/internet/digital-transformation-experts-on-how-indian-companies-and-businesses-are-adapting-to-automation-and-ai-during-the-coronavirus-pandemic/article31982466.ece"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile15.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>Digital transformers in the pandemic</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">03 JUL 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://yourstory.com/2020/06/covid-19-speed-up-adoption-automation-technologies"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile16.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>How COVID-19 is set to speed up the adoption of automation technologies</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">22 JUN 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-4 col-12">
                        <a href="https://yourstory.com/2020/02/b2b-startup-funding-camcom-triton-investment"
                           target="_blank">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/resource_news/newstile17.webp" alt="">
                           </div>
                           <div class="caption-deatail-news">
                              <p>[Funding alert] B2B startup CamCom raises Pre-Series A funding from Triton Investment
                                 Advisors</p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic">
                                          <div>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                             <span>
                                                Read More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                   viewBox="0 0 16 16" fill="none">
                                                   <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                                </svg>
                                             </span>
                                          </div>
                                       </small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-6 text-end"><span class="date">14 FEB 2020</span></div>
                              </div>
                           </div>
                        </a>
                     </div>

                  </div>

               </div>
               <!-- <div class="pagination-custom text-center">
                  <div class="dumy pb-3"><img class="img-fluid" src="images/pagination.png"></div>
               </div> -->
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <!-- <div class="news-title mb-4">
                  <h3> <span class="vertical-center"><img src="images/dot.svg"></span>Webinar</h3>
               </div> -->
               <!-- <div class="row">
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="javascript:void(0);">
                        <div class="main-image">
                           <video width="100%" height="auto" class="" autoplay="" loop="" muted playsinline="">
                              <source src="images/camvideo.mp4" type="video/mp4">
                           </video>
                        </div>
                        <div class="caption-deatail">
                           <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More 
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div> -->
               <!-- <div class="row">
                  <div class="col-md-12">
                     <div class="btnblock know-more btnblock mx-auto  text-start">
                        <a class="btn-epic">
                           <div>
                              <span>
                                 Load More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Load More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div> -->

               <div class="news-title mb-4">
                  <h3> <span class="vertical-center"><img src="images/dot.svg"></span>Podcast</h3>
               </div>

               <div class="row">
                  <div class="col-md-6 col-12">
                     <a target="_blank"
                        href="https://asiainsurtechpodcast.com/ep-96-mahesh-subramanian-ceo-camcom-the-drones-become-your-first-responders/">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0 overlay-20">
                                    <img class="img-fluid image-cover" src="images/mahesh.jpg" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98"
                                          viewBox="0 0 98 98" fill="none">
                                          <path
                                             d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z"
                                             stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail">
                                 <p>Podcast – EP 96 Mahesh Subramanian – The Drones Become Your First Responders </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8">

                                       <!-- <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span> -->
                                       <!-- <span class="slash-line">|</span> -->
                                       <!-- <span class="date">04 Jan 2021</span> -->

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!-- <div class="col-md-6 col-12">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail">
                                 <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8 text-end">

                                       <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span>
                                       <span class="slash-line">|</span>
                                       <span class="date">01 jan 2024</span>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-6 col-12">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail">
                                 <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8 text-end">

                                       <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span>
                                       <span class="slash-line">|</span>
                                       <span class="date">01 jan 2024</span>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-6 col-12">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail">
                                 <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8 text-end">

                                       <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span>
                                       <span class="slash-line">|</span>
                                       <span class="date">01 jan 2024</span>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-6 col-4">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-8">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-12">
                              <div class="caption-deatail">
                                 <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8 text-end">

                                       <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span>
                                       <span class="slash-line">|</span>
                                       <span class="date">01 jan 2024</span>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-6 col-12">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </figcaption>
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail">
                                 <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                                <span>
                                                   Listen Now
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"></path>
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>
                                    <div class="col-md-8 text-end">

                                       <span class="pod-icons"><img src="images/podcast-icon1.svg"> <img src="images/podcast-icon2.svg"> <img src="images/podcast-icon3.svg"></span>
                                       <span class="slash-line">|</span>
                                       <span class="date">01 jan 2024</span>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div> -->
               </div>
               <!-- <div class="row">
                  <div class="col-md-12">
                     <div class="btnblock know-more btnblock mx-auto  text-start">
                        <a class="btn-epic">
                           <div>
                              <span>
                                 Load More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                       stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                              <span>
                                 Load More
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                       stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div> -->
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


               <div class="row">
                  <!-- <div class="col-md-4 col-12">
                     <a class="media-bg" href="images/resourcespdf/Brand_Guidelines.pdf" download="Brand_Guidelines">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/media_kit/BG.webp" alt="">

                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-6 col-8">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div> -->
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="images/resourcespdf/MAIN_LOGO.svg" download="MAIN_LOGO">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/media_kit/Logo.webp" alt="">
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <p>Brand Logo Vector File</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-6 col-8">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      viewBox="0 0 16 16" fill="none">
                                                      <path
                                                         d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953"
                                                         stroke="#231F20" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      viewBox="0 0 16 16" fill="none">
                                                      <path
                                                         d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953"
                                                         stroke="#231F20" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <!-- <div class="col-md-4 col-12">
                     <a class="media-bg" href="images/resourcespdf/Strat_Plan_30012024.pdf" download="Strat_Plan_30012024">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/media_kit/SP.webp" alt="">

                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">30 Jan 24</span>
                                 <p>Strategy Plan</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-6 col-8">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic">
                                             <div>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                                <span>
                                                   Download
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                      <path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </span>
                                             </div>
                                          </small>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div> -->

               </div>

            </div>
            <div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">
               <div class="row">
                  <div class="col-md-4 col-12">
                     <a href="blog_detail_one" target="_blank">
                        <div class="main-image">
                           <span class="tagline">Automotive</span>
                           <img class="img-fluid image-cover" src="/images/blogimg/blogtile1.webp" alt="">
                        </div>
                        <div class="caption-deatail-news">
                           <p>How is AI automation helping the automotive industry move forward?</p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">11 Feb 2021</span></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-md-4 col-12">
                     <a href="blog_detail_two" target="_blank">
                        <div class="main-image">
                           <span class="tagline">warehousing</span>
                           <img class="img-fluid image-cover" src="/images/blogimg/blogtile2.webp" alt="">
                        </div>
                        <div class="caption-deatail-news">
                           <p>What is hyper-intelligent-automation? How does it impact the warehousing industry?</p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <div class="col-md-6 col-6 text-end"><span class="date">11 Feb 2021</span></div>
                           </div>
                        </div>
                     </a>
                  </div>

               </div>
            </div>
            <div class="tab-pane fade" id="whitepaper" role="tabpanel" aria-labelledby="whitepaper-tab">
               <div class="row">
                  <div class="col-md-4 col-12">
                     <a href="images/Whitepaper-Geetha-S.pdf" target="_blank">
                        <div class="main-image">
                           <!-- <span class="tagline">Automotive</span> -->
                           <img class="img-fluid image-cover" src="/images/White-paper-1.webp" alt="">
                        </div>
                        <div class="caption-deatail">
                           <p>Point of impact as a predictor of cause of incidence in motor claims.</p>
                           <div class="row align-items-center">
                              <div class="col-md-6 col-6">
                                 <div class="btnblock know-more text-start">
                                    <small class="btn-epic">
                                       <div>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                          <span>
                                             Read More
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path d="M6 3L11 8L6 13" stroke="#231F20" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </small>
                                 </div>
                              </div>
                              <!-- <div class="col-md-6 col-6 text-end"><span class="date">01 jan 2024</span></div> -->
                           </div>
                        </div>
                     </a>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop