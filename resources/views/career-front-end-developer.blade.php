@extends('layouts.default')
@section('content')



<section class="lightwhite padd-inside">


    <div class="large-container">
        <div class="back-button text-end paddmobile">
            <p><a href="career">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" fill="none">
                    <path d="M0.292893 7.29289C-0.0976314 7.68342 -0.0976315 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.92893C7.68054 0.538406 7.04738 0.538406 6.65685 0.928931L0.292893 7.29289ZM11.5 7L1 7L1 9L11.5 9L11.5 7Z" fill="#A4AAAD" />
                </svg>&nbsp;Job Openings</a>
</p></div>

        <div class="row">
            <div class="col-md-6">
            <div class="caree-mobile">
                <h3><span class="vertical-center"><img src="images/dot.svg"></span> PRODUCT</h3>
                <h1>Software Engineer<br>Front-end Developer</h1>
                <div class="sub-head">
                    <span>2-6 years. Minimum 2 years needed.</span>
                    <span>No. of Positions  : 2</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M8 4.2C8 3.64845 7.89654 3.1023 7.69552 2.59273C7.4945 2.08316 7.19986 1.62016 6.82843 1.23015C6.45699 0.840145 6.01604 0.530776 5.53073 0.319706C5.04543 0.108636 4.52529 0 4 0C3.47471 0 2.95457 0.108636 2.46927 0.319706C1.98396 0.530776 1.54301 0.840145 1.17157 1.23015C0.800139 1.62016 0.505501 2.08316 0.304482 2.59273C0.103463 3.1023 -7.82739e-09 3.64845 0 4.2C0 5.0322 0.233714 5.8062 0.631429 6.459H0.626857L4 12L7.37314 6.459H7.36914C7.78107 5.78495 8.00003 5.00089 8 4.2ZM4 6C3.54534 6 3.10931 5.81036 2.78782 5.47279C2.46633 5.13523 2.28571 4.67739 2.28571 4.2C2.28571 3.72261 2.46633 3.26477 2.78782 2.92721C3.10931 2.58964 3.54534 2.4 4 2.4C4.45466 2.4 4.89069 2.58964 5.21218 2.92721C5.53367 3.26477 5.71429 3.72261 5.71429 4.2C5.71429 4.67739 5.53367 5.13523 5.21218 5.47279C4.89069 5.81036 4.45466 6 4 6Z" fill="#757575" />
                        </svg>
                        Bangalore
                    </span>
                </div>
                <div class="job-content">
                    <div class="job-description">

                        <p>At a minimum of 2 years of hands-on experience in Javascript. Must have good knowledge on REST APIs. Must have good knowledge of database operations.</p>
                    </div>


                </div>
                <div class="job-content">
                    <div class="job-description">
                        <h4>Job Description:</h4>
                        <p>We are looking for highly skilled developers who are comfortable with every aspect of front-end development. You will be responsible for developing and designing front end web architecture along with ensuring the responsiveness of applications and working alongside graphic designers for web design features, among other duties.</p>
                        <p>What we seek from candidates is a sense of ownership, attention to detail, and good project management skills.</p>
                    </div>
                    <div class="response-para">
                        <div class="response-details">
                            <h6>Responsibilities and Skill Set:</h6>
                            <ul>
                                <li>Knowledge of HTML, CSS, Javascript.  </li>
                                <li>Worked with JS Frameworks such as jQuery, AngularJS or VueJS. </li>
                                <li>Developing front end website architecture. </li>
                                <li>Designing user interactions on web pages.</li>
                                <li>Ensuring cross-platform optimization for mobile phones. </li>
                                <li>Ensuring responsiveness of applications. </li>
                                <li>Working alongside graphic designers for web design features. </li>
                                <li>Attention to detail. </li>  

                                
                            </ul>
                        </div>
                        <div class="response-details">
                            <h6></h6>
                            <p></p></div>
                    </div>

                </div>
                </div>
            </div>
            <div class="col-md-6">
            <form class="ct-form" id="myForm" method="POST" action="{{env('APP_URL')}}/career_lead">
                    @csrf
                    <div class="row">
                        <div class="form-heading text-center mb-4">
                            <h4>Apply for this Position</h4>
                        </div>
                        <div class="col-12 position-relative">
                            <input type="text" class="form-control" placeholder="Name" name="full_name">
                        </div>
                        <div class="col-12 position-relative">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="row">
                            <div class="col-md-6 position-relative">
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-md-6 position-relative">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="row no-gmobile">
                            <div class="col-md-6 position-relative">
                                <div class="form-control input-label">
                                    <input type="file" id="onefile" name="resume_file" required> <span id="val">Resume</span><span
                                        id="button">Choose File</span>
                                </div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <div class="form-control input-label">
                                    <input type="file" id="twofile" name="portfolio_file" required> <span id="val2">Portfolio</span><span
                                        id="button2">Choose File</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 position-relative">
                            <div class="linkedin"> <label for="exampleInputEmail1"><span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M0 1.07438C0 0.480938 0.483098 0 1.07916 0H13.6158C14.2119 0 14.695 0.480938 14.695 1.07438V13.9256C14.695 14.5191 14.2119 15 13.6158 15H1.07916C0.483098 15 0 14.5191 0 13.9256V1.07438ZM4.53984 12.5569V5.78344H2.33467V12.5569H4.53984ZM3.43771 4.85813C4.20645 4.85813 4.68495 4.33875 4.68495 3.68813C4.67118 3.02344 4.20737 2.51813 3.45241 2.51813C2.69745 2.51813 2.20425 3.02438 2.20425 3.68813C2.20425 4.33875 2.68276 4.85813 3.42302 4.85813H3.43771ZM7.94541 12.5569V8.77406C7.94541 8.57156 7.9601 8.36906 8.01888 8.22469C8.17777 7.82063 8.54056 7.40156 9.1504 7.40156C9.94852 7.40156 10.2672 8.02219 10.2672 8.93344V12.5569H12.4724V8.67188C12.4724 6.59062 11.385 5.62313 9.93383 5.62313C8.76374 5.62313 8.23931 6.27938 7.94541 6.74156V6.765H7.93071L7.94541 6.74156V5.78344H5.74116C5.76871 6.41906 5.74116 12.5569 5.74116 12.5569H7.94541Z"
                                                fill="black" />
                                        </svg></span><span>LinkedIn</span></label></div>
                            <input type="text" class="form-control" name="linkedin">
                        </div>
                        <div class="col-12 position-relative">
                            <textarea name="message" class="form-control" placeholder="Short Introduction"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-12 position-relative">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    I have read, understood and agree with the privacy and data processing policy.
                                </label>
                            </div>
                        </div>
                        <div class="col-12 position-relative">
                            <button type="submit" class="btn w-100 mb-3 btn-submit">Apply Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




@stop