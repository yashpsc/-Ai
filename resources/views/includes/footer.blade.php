  <hr class="top-border m-0">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="brandlogo text-center">
          <div class="logoone">
            <img src="images/logo.svg">
          </div>
          <div class="logoone">
            <img src="images/banner-logo.webp">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="f_widget">
          <h3 class="f-title">Quick Navigation</h3>
          <ul class="list-unstyled f_list">
            <li><a href="about">About Us
              </a>
            </li>
            <li><a href="industry-solution">Industry Solutions
              </a>
            </li>
            <li><a href="whatsnew">What’s New
              </a>
            </li>
            <li><a href="case-studies">Case studies
              </a>
            </li>
            <li><a href="resources">Resources
              </a>
            </li>
            <li><a href="career">Career</a></li>
            <li><a href="contact-us">
                Contact us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="f_widget-subs">
          <div class="top-row">
            <h3 class="f-title">Subscribe</h3>
            <span>for the latest news & update</span>
            <div class="subscribe-form">
            <form method="POST" action="{{env('APP_URL')}}/subscribe_lead">
                @csrf
                  <input type="text" placeholder="Email Address" name="email">
                  <button>
                     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="16" viewBox="0 0 28 16" fill="none">
                        <path d="M27.2165 8.70711C27.607 8.31658 27.607 7.68342 27.2165 7.29289L20.8526 0.928932C20.462 0.538408 19.8289 0.538408 19.4383 0.928932C19.0478 1.31946 19.0478 1.95262 19.4383 2.34315L25.0952 8L19.4383 13.6569C19.0478 14.0474 19.0478 14.6805 19.4383 15.0711C19.8289 15.4616 20.462 15.4616 20.8526 15.0711L27.2165 8.70711ZM0 9H26.5094V7H0V9Z" fill="#222222"/>
                     </svg>
                  </button>
               </form>
            </div>
          </div>
          <hr>
          <div class="f_social_icon">
            <!-- <span></span> -->
            <h3 class="f-title inline-block">Follow Us on</h3>
            <a href="https://www.linkedin.com/company/camcomai" class="svg-icons" target="_blank">
              <svg width="45" height="45" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.474 50.3608H25.3633C11.5136 50.3608 0.245667 39.0896 0.245667 25.2358V25.125C0.245667 11.2712 11.5136 0 25.3633 0H25.474C39.3237 0 50.5916 11.2712 50.5916 25.125V25.2358C50.5916 39.0896 39.3237 50.3608 25.474 50.3608ZM25.3633 1.70466C12.4526 1.70466 1.94982 12.2105 1.94982 25.125V25.2358C1.94982 38.1503 12.4526 48.6561 25.3633 48.6561H25.474C38.3847 48.6561 48.8875 38.1503 48.8875 25.2358V25.125C48.8875 12.2105 38.3847 1.70466 25.474 1.70466H25.3633Z"
                  fill="#383D38" />
                <path
                  d="M12.698 17.0245C12.0572 16.4296 11.7386 15.6932 11.7386 14.817C11.7386 13.9408 12.0589 13.172 12.698 12.5754C13.3388 11.9804 14.1636 11.6821 15.1742 11.6821C16.1847 11.6821 16.9772 11.9804 17.6162 12.5754C18.257 13.1703 18.5756 13.9187 18.5756 14.817C18.5756 15.7154 18.2553 16.4296 17.6162 17.0245C16.9755 17.6195 16.1626 17.9178 15.1742 17.9178C14.1857 17.9178 13.3388 17.6195 12.698 17.0245ZM18.0371 20.4373V38.6771H12.2754V20.4373H18.0371Z"
                  fill="#383D38" />
                <path
                  d="M37.2174 22.239C38.4734 23.6027 39.1005 25.4744 39.1005 27.8575V38.3548H33.6285V28.5973C33.6285 27.3956 33.3166 26.4614 32.6946 25.7966C32.0726 25.1318 31.2341 24.7976 30.1844 24.7976C29.1346 24.7976 28.2961 25.1301 27.6741 25.7966C27.0521 26.4614 26.7402 27.3956 26.7402 28.5973V38.3548H21.2358V20.386H26.7402V22.7691C27.2975 21.9747 28.0491 21.3474 28.9932 20.8855C29.9373 20.4235 30.999 20.1934 32.1799 20.1934C34.2829 20.1934 35.9631 20.8752 37.2174 22.239Z"
                  fill="#383D38" />
              </svg>
            </a>
            <a href="https://twitter.com/CamCom_ai" class="svg-icons" target="_blank">
              <svg width="45" height="45" viewBox="0 0 52 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.9202 50.3608H25.8095C11.9598 50.3608 0.691895 39.0896 0.691895 25.2358V25.125C0.691895 11.2712 11.9598 0 25.8095 0H25.9202C39.7699 0 51.0378 11.2712 51.0378 25.125V25.2358C51.0378 39.0896 39.7699 50.3608 25.9202 50.3608ZM25.8095 1.70466C12.8988 1.70466 2.39605 12.2105 2.39605 25.125V25.2358C2.39605 38.1503 12.8988 48.6561 25.8095 48.6561H25.9202C38.8309 48.6561 49.3337 38.1503 49.3337 25.2358V25.125C49.3337 12.2105 38.8309 1.70466 25.9202 1.70466H25.8095Z"
                  fill="#383D38" />
                <path
                  d="M11.4094 11.8677L22.6261 26.8687L11.3395 39.0655H13.8804L23.7628 28.3876L31.7468 39.0655H40.392L28.5446 23.2207L39.0508 11.8677H36.5099L27.4097 21.7019L20.0562 11.8677H11.411H11.4094ZM15.1449 13.7394H19.1156L36.653 37.1938H32.6823L15.1449 13.7394Z"
                  fill="#383D38" />
              </svg>
            </a>
            <a href="https://www.instagram.com/camcom_ai/" class="svg-icons" target="_blank">
              <svg width="45" height="45" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.5743 50.3608H25.4635C11.6138 50.3608 0.345947 39.0896 0.345947 25.2358V25.125C0.345947 11.2712 11.6138 0 25.4635 0H25.5743C39.424 0 50.6919 11.2712 50.6919 25.125V25.2358C50.6919 39.0896 39.424 50.3608 25.5743 50.3608ZM25.4635 1.70466C12.5528 1.70466 2.05011 12.2105 2.05011 25.125V25.2358C2.05011 38.1503 12.5528 48.6561 25.4635 48.6561H25.5743C38.485 48.6561 48.9877 38.1503 48.9877 25.2358V25.125C48.9877 12.2105 38.485 1.70466 25.5743 1.70466H25.4635Z"
                  fill="#383D38" />
                <path
                  d="M33.0453 10.7515H17.9942C13.8361 10.7515 10.4533 14.1352 10.4533 18.2946V32.0682C10.4533 36.2276 13.8361 39.6113 17.9942 39.6113H33.0453C37.2035 39.6113 40.5862 36.2276 40.5862 32.0682V18.2946C40.5862 14.1352 37.2035 10.7515 33.0453 10.7515ZM13.1135 18.2946C13.1135 15.6029 15.3033 13.4124 17.9942 13.4124H33.0453C35.7362 13.4124 37.926 15.6029 37.926 18.2946V32.0682C37.926 34.7599 35.7362 36.9504 33.0453 36.9504H17.9942C15.3033 36.9504 13.1135 34.7599 13.1135 32.0682V18.2946Z"
                  fill="#383D38" />
                <path
                  d="M25.5198 32.1958C29.3865 32.1958 32.5341 29.049 32.5341 25.1795C32.5341 21.3099 29.3883 18.1631 25.5198 18.1631C21.6514 18.1631 18.5055 21.3099 18.5055 25.1795C18.5055 29.049 21.6514 32.1958 25.5198 32.1958ZM25.5198 20.8257C27.921 20.8257 29.8739 22.7793 29.8739 25.1812C29.8739 27.583 27.921 29.5366 25.5198 29.5366C23.1187 29.5366 21.1657 27.583 21.1657 25.1812C21.1657 22.7793 23.1187 20.8257 25.5198 20.8257Z"
                  fill="#383D38" />
                <path
                  d="M33.1834 19.297C34.2246 19.297 35.0733 18.4498 35.0733 17.4066C35.0733 16.3633 34.2263 15.5161 33.1834 15.5161C32.1404 15.5161 31.2935 16.3633 31.2935 17.4066C31.2935 18.4498 32.1404 19.297 33.1834 19.297Z"
                  fill="#383D38" />
              </svg>
            </a>
            <a href="https://www.facebook.com/EyeAmCamCom/" class="svg-icons" target="_blank">
              <svg width="45" height="45" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group 66">
                  <path id="Vector"
                    d="M25.2284 50.3608H25.1176C11.2679 50.3608 0 39.0896 0 25.2358V25.125C0 11.2712 11.2679 0 25.1176 0H25.2284C39.078 0 50.3459 11.2712 50.3459 25.125V25.2358C50.3459 39.0896 39.078 50.3608 25.2284 50.3608ZM25.1176 1.70466C12.2069 1.70466 1.70416 12.2105 1.70416 25.125V25.2358C1.70416 38.1503 12.2069 48.6561 25.1176 48.6561H25.2284C38.1391 48.6561 48.6418 38.1503 48.6418 25.2358V25.125C48.6418 12.2105 38.1391 1.70466 25.2284 1.70466H25.1176Z"
                    fill="#383D38" />
                  <path id="Vector_2"
                    d="M28.56 19.5334V24.8332H35.1142L34.0764 31.9723H28.56V48.4206C27.454 48.574 26.3224 48.6541 25.1738 48.6541C23.848 48.6541 22.546 48.5484 21.2781 48.3439V31.9723H15.2335V24.8332H21.2781V18.3487C21.2781 14.3257 24.5382 11.063 28.5617 11.063V11.0664C28.5736 11.0664 28.5839 11.063 28.5958 11.063H35.1159V17.2373H30.8555C29.5893 17.2373 28.5617 18.2652 28.5617 19.5317L28.56 19.5334Z"
                    fill="#383D38" />
                </g>
              </svg>
            </a>

            <a href="https://www.youtube.com/channel/UCQaR06smjTf2uY245N7j7HA" class="svg-icons" target="_blank">
              <svg width="45" height="45" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group">
                  <path id="Vector"
                    d="M25.1417 50.2227C11.2989 50.2227 0.0377808 38.9583 0.0377808 25.1114C0.0377808 11.2644 11.2989 0 25.1417 0C38.9846 0 50.2457 11.2644 50.2457 25.1114C50.2457 38.9583 38.9846 50.2227 25.1417 50.2227ZM25.1417 1.70466C12.2396 1.70466 1.74194 12.2054 1.74194 25.1114C1.74194 38.0173 12.2396 48.518 25.1417 48.518C38.0439 48.518 48.5415 38.0173 48.5415 25.1114C48.5415 12.2054 38.0439 1.70466 25.1417 1.70466Z"
                    fill="#383D38" />
                  <path id="Vector_2"
                    d="M40.4127 20.0845C40.2218 18.2417 39.8111 16.2046 38.2995 15.1341C37.1288 14.3039 35.5899 14.2733 34.1533 14.275C31.1165 14.2767 28.078 14.2801 25.0412 14.2818C22.1202 14.2852 19.1993 14.2869 16.2784 14.2903C15.0582 14.292 13.8721 14.1966 12.7388 14.725C11.7658 15.1785 11.004 16.041 10.5456 17.0007C9.90994 18.3355 9.77702 19.8475 9.70033 21.3237C9.55889 24.012 9.57422 26.7071 9.74293 29.3936C9.86734 31.354 10.1826 33.5206 11.6976 34.7701C13.0405 35.8764 14.9355 35.931 16.6771 35.9327C22.2054 35.9378 27.7354 35.9429 33.2654 35.9463C33.9744 35.948 34.714 35.9344 35.4365 35.856C36.8578 35.7025 38.2126 35.2951 39.126 34.2417C40.048 33.1797 40.2849 31.7017 40.4246 30.3022C40.7654 26.9065 40.762 23.4784 40.4127 20.0845ZM21.8442 29.8709V20.3504L30.0855 25.1098L21.8442 29.8709Z"
                    fill="#383D38" />
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="bottom-border m-0">

  <div class="foot">
    <div class="large-container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <span>
            <!-- <a href="disclaimer">Disclaimer</a>
            <a href="privacy-policy">Privacy Policy</a> -->
            <a href="terms-of-use">Terms of service</a>
            <!-- <a href="ethics">Code of Ethics</a> -->
          </span>
        </div>
        <div class="col-md-6 text-end">
          <p>CamCom ™ is a trademark of CamCom Technologies Private Limited</p>
          <p>© 2024 CamCom. All rights reserved Developed by<a href="https://www.repindia.com/" target="blank"> Repindia.</a></p>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="leaderone" tabindex="-1" aria-labelledby="leaderoneCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/mahesh.webp" alt="Mahesh Subramanian">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Mahesh Subramanian</h2>
                    <h5 class="title-sub">Co-founder and President</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/ajithnayarcamcom/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Mahesh Subramanian</h2>
                      <h5 class="title-sub">Co-founder and President</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/mahesh-subramanian-0186654/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Mahesh Subramanian is the Co-founder and President of the APAC region at CamCom. Mahesh has helped shape the strategic direction of CamCom in several leadership roles. He has steered the development of a differentiated product roadmap, spearheaded CamCom’s GTM strategy – as well as its acceleration and global rollout – and drove the expansion and diversification of the business to serve multiple industries, including automotive, insurance, and industrial. 
                </p>
                <p class="media__text">Mahesh’s success has been a key driver for CamCom’s business footprint in the Southeast Asia region. Mahesh inculcates a culture of experiential learning and technical excellence in CamCom, fostering a culture of growth and knowledge sharing. 
                </p>
                <p class="media__text">Previously, Mahesh was a serial entrepreneur with prior start-ups in networking and the video technology space. Mahesh has also had corporate stints with Bell Labs and Intel during his time in the US. Mahesh likes to be at the intersection of technology and business and believes technology should be one of two things: easing customer lives and/or making businesses a lot more efficient. He believes Artificial Intelligence should be applied and not just a buzzword and should show an immediate return on investment for it to become prevalent. 
                </p>
                <p class="media__text">Mahesh is a graduate in computer science from Bharathiar University. 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="leadertwo" tabindex="-1" aria-labelledby="leaderonetwoTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Geetha.webp" alt="Geetha Sham ">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Geetha Sham</h2>
                    <h5 class="title-sub">Director and President </h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="javascript:void(0);">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Geetha Sham </h2>
                      <h5 class="title-sub">Director and President </h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="javascript:void(0);">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Geetha Sham is the Director and President of the Europe region at CamCom. Her extensive experience in leading large and complex businesses with a focus on products and digital enablement provides valuable insights at CamCom. A passionate supporter of diversity and inclusion efforts, Geetha a tech virtuoso brings a level of experience (been there, done that - perhaps several times) that is one of the key drivers to CamCom’s long-term success.
                </p>
                <p class="media__text">Customers across Europe rely on Geetha to be the source of truth for their businesses, solve their biggest challenges, and help them grow and run their businesses with confidence. She oversees CamCom’s product strategy and leads the platform engineering, harnessing advanced technology that helps CamCom’s customers and partners across Europe. She is an important cog of CamCom’s strategy to be the global AI-powered visual inspection expert platform. An experienced business leader who has successfully led a relevant/related high-growth business in top tech companies like Cybage, Mindtree, Wipro, and Oracle, Geetha embodies the spirit of CamCom – nothing succeeds like success.
                </p>
                <p class="media__text">“CamCom is perfectly positioned to help its customers transform their quality inspection processes across the product lifecycle around the globe. I am privileged to lead a young and dynamic team with the zest to take on the world.” 
                </p>
                <p class="media__text">Geetha holds an engineering degree in electronics and communications from Bangalore University.
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="leaderthree" tabindex="-1" aria-labelledby="leaderthreeCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Ajith.webp" alt="Ajith Nayar">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Ajith Nayar</h2>
                    <h5 class="title-sub">CEO, and Co-Founder</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/ajithnayarcamcom/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Ajith Nayar</h2>
                      <h5 class="title-sub">CEO, and Co-Founder</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/ajithnayarcamcom/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Ajith Nayar is the CEO, and Co-Founder of CamCom, a Computer Vision (CV) platform, building the World’s first industry-agnostic AI-powered Large Vision Model (LVM) for damage assessments. Ajith’s vision gained from his obsession with quality and intent to make India synonymous with quality like Germany and Japan led to the creation of CamCom. The platform enabled Saudi Arabia to become the first country in the world to comply with a United Nations Sustainable Development Goal and its global footprint today includes satisfied customers in India, Saudi Arabia, Sri Lanka, the Philippines, Indonesia, Thailand, Malaysia, Germany, Estonia, Latvia, Lithuania, Greece, Austria, the UK, and Mexico.
                </p>
                <p class="media__text">Cutting-edge thinking and willingness to take calculated risks have shaped Ajith’s career in the world of technology, an industry that relies heavily on constant change and innovation. His commitment to excellence is evident in his transparent leadership style and track record of consistently delivering quality results. An ardent practitioner of Kaizen and Lean Six Sigma processes, Ajith has the rare and precious ability to make a disparate group act as a single unit to produce the desired result.
                </p>
                <p class="media__text">“To me, success means leveraging experience, strategy, and a healthy dose of counterintuitive thinking to make a real-world impact. At CamCom, I work with the team by assisting them use advances in technology, applied R&D, and customised strategic services. I’ve been connecting technology with real-world business opportunities for more than 25 years. However, I still get excited by the challenge, which keeps me on my toes and pushes me to create better processes and solutions for my customers”.
                </p>
                <p class="media__text">Educationally, Ajith holds an MS from the University of Delaware. He has founded a platform focused on creating a thriving entrepreneur ecosystem outside of technology in villages across India. He is a speaker in demand as a thought leader in quality and management strategy at many institutions across the globe.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="leaderfour" tabindex="-1" aria-labelledby="leaderfourCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Umesh.webp" alt="Uma Mahesh ">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Uma Mahesh (Umesh)</h2>
                    <h5 class="title-sub">Co-founder and President</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/umamaheshy/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Uma Mahesh (Umesh)</h2>
                      <h5 class="title-sub">Co-founder and President</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/umamaheshy/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Uma Mahesh (Umesh) is the Co-founder and President of Americas at CamCom. Umesh has 35+ years of experience in the IT industry and has worked in various capacities in Business, Delivery and Technology functions. He was the Global Business Head at Wipro and India CEO of ANSR Source. Umesh pioneered the concept of the Offshore-Development-Centre (ODC) way back in 1993 and created the very first Offshore Product Development (OPD) centre for global players.
                </p>
                <p class="media__text">Under the watchful eyes of Umesh, CamCom has not only pioneered the use of Artificial Intelligence in visual inspection but has also demonstrated its commitment to addressing real-world challenges across global industries. Umesh brings a wealth of strategic insight to CamCom and is set to leave an indelible mark on the technology landscape, propelling industries towards a more efficient and reliable future.
                </p>
                <p class="media__text">Umesh's commitment to excellence is evident in his transparent leadership style and track record of consistently delivering quality results. His exposure to local and international cultures has been instrumental in the kind of work culture and authority he embodies.
                </p>
                <p class="media__text">Umesh has a deep understanding of business, people management, and the startup market and ecosystem. In a rapidly growing entrepreneurial venture like CamCom, his role as a battle-tested people leader, and an industry veteran with seasoning, wisdom, and a rich network is the key to developing an emerging business. A person of incredible cross-functional leadership and strategic problem-solving skills, Umesh is a master at minimising operational risk and his ability to articulate complex ideas in simple terms is unparalleled.
                </p>
                <p class="media__text">Umesh holds a Bachelor of Engineering Degree in Mechanical Engineering.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="leaderfive" tabindex="-1" aria-labelledby="leaderfiveCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Vinay0Piparsania.webp" alt="Uma Mahesh ">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Vinay K. Piparsania</h2>
                    <h5 class="title-sub">Automotive and Mobility Professional</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/vinay-piparsania-6992779b/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Vinay K. Piparsania</h2>
                      <h5 class="title-sub">Automotive and Mobility Professional</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/vinay-piparsania-6992779b/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Vinay K. Piparsania, Automotive and Mobility Professional. Vinay is a global automotive industry diviner, with over 30 years of extensive operational experience at senior leadership positions in India, Asia Pacific,and the Middle East. Associated with Ford Motor Company for nearly 20 years, Vinay has held progressive international marketing, sales and service responsibilities in Ford India, Ford Global Business Services (GBS), planning, developing, and launching several new auto models.
                </p>
                <p class="media__text">As Consulting Director, Automotive, with Counterpoint Technology Market Research, Vinay has monitored technology and market trends in the global automotive and mobility industry. A marketing expert with technical and finance experience, Vinay has a mechanical engineering degree from the Indian Institute of Technology, Delhi (IIT Delhi) and an MBA from Tulane University, New Orleans, USA.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade" id="leadersix" tabindex="-1" aria-labelledby="leadersixCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Ravinder-Singh.webp" alt="Uma Mahesh ">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Ravinder Pal Singh (Ravi)</h2>
                    <h5 class="title-sub">Chief Information and Innovation Officer</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/ravinps/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Ravinder Pal Singh (Ravi)</h2>
                      <h5 class="title-sub">Chief Information and Innovation Officer</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/ravinps/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Ravinder Pal Singh (Ravi), Chief Information and Innovation Officer, Tata Singapore Airlines (Air Vistara). Ravi is a Harvard Alumni, Award Winning Technologist, Rescue Pilot, Angel Investor and Global speaker with 200+ global recognitions and several Patents. His body of work, mostly 1st in the world are making a difference within acute constraints of culture and cash via commodity technology.
                </p>
                <p class="media__text">Ravi has been acknowledged as the world’s top 10 Robotics Designer, #1 Artificial Intelligence Leader in Asia and world’s top 25 CIO.
                </p>
                <p class="media__text">Ravi was the Global Chief Information and Technology Officer, Air Works, where he fathered Air Works Digital, Technology and Commerce. He has expertise in the domain of flight management, aircraft valuation, unmanned-aircraft safety management, and predictive maintenance using AI, IoT and app-mobility.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->
  <div class="modal fade" id="leaderseven" tabindex="-1" aria-labelledby="leadersevenCenterTitle" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="imgleft">
                <img src="images/Nihar-Patel.webp" alt="Uma Mahesh ">
              </div>
            </div>
            <div class="col-6 col-md-3 displaynone768">
              <div class="row  no-gutters">
                <div class="col-12">
                  <div class="flex">
                    <h2 class="title-1">Nihar Patel</h2>
                    <h5 class="title-sub">Automotive and Mobility Professional</h5>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="https://www.linkedin.com/in/nihar-patel-9786a0/" target="_blank">
                    <span><img src="images/linkdin.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-9 padd-modalcust">
              <div class="media__content">
                <div class="row  no-gutters">
                  <div class="col-6">
                    <div class="flex">
                      <h2 class="title-1">Nihar Patel</h2>
                      <h5 class="title-sub">Automotive and Mobility Professional</h5>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    <a href="https://www.linkedin.com/in/nihar-patel-9786a0/" target="_blank">
                      <span><img src="images/linkdin.svg">
                    </a>
                  </div>
                </div>
                <p class="media__text">Nihar Patel, Automotive and Mobility Professional. Nihar is a global automotive industry diviner, with over 30 years of extensive operational experience at senior leadership positions in the US, Europe, Asia and the Middle East.
                </p>
                <p class="media__text">Nihar has specialized in Strategy, Restructuring, Managing Operations, and Corporate Development including M&A, with Ford Motor Company, Toyota, General Motors/Opel, and Volkswagen.
                </p>
                <p class="media__text">Nihar has an MBA from Bentley University, MA, USA, and a Bachelor’s of Science from New York University, NY, USA.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <script src="js/ScrollToPlugin.min.js"></script>
  <script  src="js/jquery.fancybox.min.js"></script>
  <script  src="js/jquery.validate.js"></script>

  <script src="js/app.min.js"></script>
  <script src="js/sticky-wheel.min.js"></script>
  <script src="js/anime.min.js"></script>
  <script src="js/script.js"></script>
