@extends('layouts.default')
@section('content')
<section>
   <div class="news-banner"  style="background-image: url('images/news-banner.png')">
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
            Resources
         </h3>
         <h1>Get up to date</h1>
      </div>
   </div>
</section>
<section>
   <div class="large-container">
      <ul class="nav nav-tabs news-tabs" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <a class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" aria-controls="home" aria-selected="true">News</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" aria-controls="profile" aria-selected="false">Webinar & Podcast</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" aria-controls="contact" aria-selected="false">Media Kit</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="blogs-tab" data-bs-toggle="tab" data-bs-target="#blogs" aria-controls="blogs" aria-selected="false">Blogs</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="whitepaper-tab" data-bs-toggle="tab" data-bs-target="#whitepaper" aria-controls="whitepaper" aria-selected="false">White Paper</a>
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
                        <a href="javascript:void(0);">
                           <div class="main-image">
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                  </div>
               </div>
               <div class="pagination-custom text-center">
                  <div class="dumy pb-3"><img class="img-fluid" src="images/pagination.png"></div>
               </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <div class="news-title mb-4">
                  <h3> <span class="vertical-center"><img src="images/dot.svg"></span>Webinar</h3>
               </div>
               <div class="row">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                    <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="btnblock know-more btnblock mx-auto  text-start">
                        <a class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
               </div>

               <div class="news-title mb-4">
                  <h3> <span class="vertical-center"><img src="images/dot.svg"></span>Podcast</h3>
               </div>

               <div class="row">
                  <div class="col-md-6 col-12">
                     <a href="javascript:void(0);">
                        <div class="row g-0">
                           <div class="col-md-4 col-4">
                              <div class="main-image h-100">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/podcast-audio.png" alt="">
                                    <figcaption class="caption-right">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98" fill="none">
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                                          <path d="M17.958 45.64C19.0435 53.0983 22.7779 59.9164 28.4781 64.847C34.1783 69.7776 41.4631 72.4912 48.9999 72.4912M48.9999 72.4912C56.5367 72.4912 63.8216 69.7776 69.5218 64.847C75.222 59.9164 78.9564 53.0983 80.0418 45.64M48.9999 72.4912V88.2M49.0044 9.80005C45.4399 9.80005 42.0214 11.216 39.5009 13.7365C36.9804 16.257 35.5644 19.6755 35.5644 23.24V41.16C35.5644 44.7246 36.9804 48.1431 39.5009 50.6636C42.0214 53.1841 45.4399 54.6 49.0044 54.6C52.5689 54.6 55.9874 53.1841 58.5079 50.6636C61.0284 48.1431 62.4444 44.7246 62.4444 41.16V23.24C62.4444 19.6755 61.0284 16.257 58.5079 13.7365C55.9874 11.216 52.5689 9.80005 49.0044 9.80005Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
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
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="btnblock know-more btnblock mx-auto  text-start">
                        <a class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
               </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


            <div class="row">
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4 col-8">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
                  <div class="col-md-4 col-12">
                     <a class="media-bg" href="javascript:void(0);">
                        <div class="row">
                           <div class="col-md-4 col-4">
                              <div class="main-image">
                                 <figure class="m-0">
                                    <img class="img-fluid image-cover" src="images/mediakit1.png" alt="">
                             
                                 </figure>
                              </div>
                           </div>
                           <div class="col-md-8 col-8">
                              <div class="caption-deatail p-0">
                                 <span class="date">01 jan 2024</span>
                                 <p>Brand Logo and Guidelines</p>
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="btnblock know-more text-start">
                                          <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
                                             <div>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                                </span>
                                                <span>
                                                   Download 
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.66602 13.5885C2.93582 13.852 3.30175 14 3.68331 14H12.3154C12.6969 14 13.0629 13.852 13.3327 13.5885M8.00015 2V9.96164M8.00015 9.96164L11.2886 6.91953M8.00015 9.96164L4.71174 6.91953" stroke="#231F20" stroke-linecap="round" stroke-linejoin="round"/>
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
               </div>

            </div>
            <div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">        
               <div class="row">
                     <div class="col-md-4 col-12">
                        <a href="javascript:void(0);">
                           <div class="main-image">
                              <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                  </div>
               </div>
            <div class="tab-pane fade" id="whitepaper" role="tabpanel" aria-labelledby="whitepaper-tab"> <div class="row">
                     <div class="col-md-4 col-12">
                        <a href="javascript:void(0);">
                           <div class="main-image">
                              <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                           <span class="tagline">Automotive</span>
                              <img class="img-fluid image-cover" src="/images/newsitem1.png" alt="">
                           </div>
                           <div class="caption-deatail">
                              <p>Unlocking the potential of efficiency energy in buildings commercial energy in buildings commercial </p>
                              <div class="row align-items-center">
                                 <div class="col-md-6 col-6">
                                    <div class="btnblock know-more text-start">
                                       <small class="btn-epic" target="_blank" href="javascript:void(0);" tabindex="0">
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
                  </div></div>
         </div>
      </div>
   </div>
</section>
@stop