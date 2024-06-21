@if (Request::is('/'))
    <title>AI Solutions & Visual Inspection for Enhanced Quality Control | CamCom</title>
    <meta name="description"
        content="Unlock efficiency with CamCom's AI solutions & visual inspection tools leveraging advanced computer vision technology. Enhance quality control and streamline your processes.">

@elseif (Request::is('about'))
    <title>AI-Powered Visual Inspection Platform |  CamCom</title>
    <meta name="description"
        content="Discover CamCom, the award-winning, industry-agnostic AI platform for visual inspections, revolutionizing quality assurance and efficiency with its powerful Computer Vision technology.">

@elseif (Request::is('case-studies'))
    <title>AI Case Study for Quality Control |  CamCom</title>
    <meta name="description"
        content="Explore how CamCom's AI-based approach delivers top-notch quality control through advanced computer vision, ensuring unparalleled accuracy and efficiency in every inspection.">

@elseif (Request::is('resources'))
    <title>Resources: News, Webinar, Podcast | CamCom</title>
    <meta name="description"
        content="Access a wealth of knowledge through our dynamic platform, featuring news updates, engaging webinars, insightful podcasts, and comprehensive media kits">

@elseif (Request::is('career'))
    <title>Career: AI Jobs in India | CamCom</title>
    <meta name="description"
        content="Explore exciting opportunities in the field of artificial intelligence across India with CamCom Careers. Find your dream AI job today!">

@elseif (Request::is('contact-us'))
    <title>Reach Out Today | CamCom</title>
    <meta name="description"
        content="Connect with CamCom effortlessly. Whether you have inquiries, feedback, or collaboration proposals, we're here to assist you promptly.">

@elseif (Request::is('visual-pollution-industry'))
    <title>Computer Vision for Visual Pollution & Pothole Detection | CamCom</title>
    <meta name="description"
        content="Utilizing advanced computer vision, CamCom innovates solutions to combat visual pollution and enhance road safety through pothole detection technology.">

@elseif (Request::is('automotive-Manufacturing-industry'))
    <title>AI in Auto Industry & Car Defect Detection | CamCom</title>
    <meta name="description"
        content="Explore how CamCom revolutionizes the automotive sector with cutting-edge AI, ensuring superior quality through advanced car defect detection technology.">

@elseif (Request::is('finished-vehicle-logistics-industry'))

    <title>AI Solutions for Logistics | CamCom</title>
    <meta name="description"
        content="Discover CamCom's innovative AI solutions tailored for the logistics sector, optimizing operations, enhancing efficiency, and streamlining supply chain management.">

@elseif (Request::is('automative-aftermarket-industry'))
    <title>AI Vehicle Inspection & Multi-Point Check | CamCom</title>
    <meta name="description"
        content="Enhance vehicle inspection efficiency with CamCom's AI-powered solutions, ensuring thorough multi-point assessments for superior quality control and safety assurance.">

@elseif (Request::is('insurance-industry'))
    <title>AI Insurance Solutions | CamCom</title>
    <meta name="description"
        content="Explore CamCom's cutting-edge AI solutions designed to revolutionize the insurance industry, optimizing processes, enhancing accuracy, reducing loss ratio and improving customer experiences.">

@elseif (Request::is('warehousing-industry'))
    <title>AI-Based Warehouse Inspections | CamCom </title>
    <meta name="description"
        content="Revolutionize warehouse management with CamCom's AI-driven solutions for inspections, ensuring accuracy, efficiency, optimization of operations and reduced recalls.">

@elseif (Request::is('pharma-industry'))
    <title>AI Inspection for Pharma | CamCom</title>
    <meta name="description"
        content="Elevate quality control in the pharmaceutical sector with CamCom's AI-driven inspection solutions, ensuring precision, compliance, and efficiency.">
@endif

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Our solutions increase efficiencies and offer non-linea scalability">
<meta property="og:description" content="CamCom is an award-winning, industry agnostic AI powered platform for
    visual inspections built on a Computer Vision stack. We are pioneers in leveraging CV and associated technologies in
    the visual inspection process.">
<meta property="og:image" content="images/logo.svg">
<meta property="og:image:alt" content="AI Based Solution For Automotive Industry">
<meta property="og:url" content="index.php">
<meta property="og:type" content="website">
<meta property="og:site-name" content="CamCom">
<meta property="og:locale" content="en-US">

<!-- Twitter Card Meta Tags (Optional, for Twitter-specific sharing) -->
<meta name="twitter:card" content="Summary or Summary Large Image">
<meta name="twitter:site" content="@CamCom">
<meta name="twitter:title" content="Our solutions increase efficiencies and offer non-linea scalability">
<meta name="twitter:description" content="CamCom is an award-winning, industry agnostic AI powered platform for
    visual inspections built on a Computer Vision stack. We are pioneers in leveraging CV and associated technologies in
    the visual inspection process.">
<meta name=" twitter:image" content="images/industysec1.png">

<link rel="canonical" href="{{url()->current()}}" />
<link rel="icon" href="images/fav.svg" sizes="32x32">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/swiper.bundle.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/customysh.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />