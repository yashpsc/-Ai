@extends('layouts.default')
@section('content')



<section>
   <div class="news-banner" style="background-image: url('images/news-banner.png')">
      <div class="news-banner-content">
         <h3>
            <span class="vertical-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M9 1L9 17" stroke="white" stroke-linecap="round"></path>
                  <path d="M1 9H17" stroke="white" stroke-linecap="round"></path>
                  <circle cx="9" cy="9" r="3" fill="#E01E26"></circle>
               </svg>
            </span>
            Contact us
         </h3>
         <h1>Drop Us a Line</h1>
      </div>
   </div>
</section>


<section class="lightwhite padd-inside">
    <div class="large-container">
        <div class="row ">
            <div class="col-md-6">
                <div class="ct-detail">
                    <h1>Get in touch with us</h1>
                    <p>Email, call, or complete the form to learn how Kion can solve your cloud management and governance challenges.</p>
                </div>
                <div class="cam-address">
                    <div class="cam-address-detail">
                        <h4>CamCom Technologies Private Limited</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_phone.svg" alt=""></div>
                                <div>
                                    <h3><span class="text-uppercase">General Inquiries</span><a href="tel:+91 XXXX XXXXX">+91 XXXX XXXXX</a></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_mail.svg" alt=""></div>
                                <div>
                                <h3><span class="text-uppercase">General Inquiries</span><a href="email:info@yourcompany.com">info@yourcompany.com</a></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_loc.svg" alt=""></div>
                                <div>
                                    <h3><span class="text-uppercase">Business Address</h3>
                                    <address>No. 70, 2nd Floor, 1st Cross, Sahyadri Layout, Bilekahall, Bangalore – 560076, INDIA</address>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="cam-address-detail">
                        <h4>CamCom </h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_phone.svg" alt=""></div>
                                <div>
                                    <h3><span class="text-uppercase">General Inquiries</span> <a href="tel:+971-50-3541312">+971-50-3541312</a></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_mail.svg" alt=""></div>
                                <div>
                                    <h3><span class="text-uppercase">General Inquiries</span> <a href="email:info@yourcompany.com">info@yourcompany.com</a></h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="/images/icon/round_loc.svg" alt=""></div>
                                <div>
                                    <h3><span class="text-uppercase">Business Address</span>
                                 </h3>
                                 <address>A 5, DTEC, Dubai Silicon Oasis,
                                        Dubai – UAE</address>
                                </div>
                            </div>

                        </div>

<hr class="m-0">
                        
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <form class="ct-form">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Contact Number">
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1" rows="5  "></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Your information is secured under our Privacy & Policy
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

<section class="padd-inside"> 
    <div class="large-container">
        <div class="row g-0 align-items-center">
        <div class="col-md-4"><h1>Impact across international borders and regions</h1></div>
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
    </div></div>
</section>

@stop