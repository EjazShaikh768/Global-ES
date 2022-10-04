<?php include 'header.php'; ?>


    <section class="home-03-banner" style="background-image: url('assets/images/home-03/home-03-banner-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-03-banner-content">
                        <span class="subtitle">We are top</span>
                        <h1 class="title">industrial leader</h1>
                        <p>Toe lot sap ten europeesch ongunstige verscholen plotseling. Bijzonders toe feestdagen dit
                            verzekeren doorzoeken goa herkenbaar</p>
                        <div class="btn-wrapper">
                            <a href="#" class="template-btn">our projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="features-section feature-home-03">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="feature-item-left">
                        <div class="feature-item-top">
                            <div class="feature-top-image">
                                <img src="assets/images/home-03/feature-item-image.jpg" alt="">
                                <div class="absolute-content">
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="feature-top-content">
                                <h5 class="title">years of experience</h5>
                            </div>
                        </div>
                        <div class="feature-item-title">
                            <h2 class="title">we are industrial expert</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="indurance-feature-item-03">
                        <div class="feature-item-image" style="">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/images/home-01/about-image-02.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/home-01/about-image-02.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/home-01/about-image-02.jpg" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-item-content yellow-bg">
                            <div class="feature-icon">
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="feature-content">
                                <h6 class="title">MEP expert engineer</h6>
                                <p>We are able to guarantee satisfaction for our clients mattis tellus ullamcorper
                                    ornare. ullamcorper metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="indurance-feature-item-03">
                        <div class="feature-item-content red-bg">
                            <div class="feature-icon">
                                <i class="flaticon-content-management"></i>
                            </div>
                            <div class="feature-content">
                                <h6 class="title">IT expert engineer</h6>
                                <p>We are able to guarantee satisfaction for our clients mattis tellus ullamcorper
                                    ornare. ullamcorper metus.</p>
                            </div>
                        </div>
                        <div class="feature-item-image" style="">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="height:240px">
                                    <div class="carousel-item active">
                                        <img src="assets/images/home-01/it5.jpg" class="d-block w-100 "
                                            alt="..."style="height:100%;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/home-01/it4.jpg" class="d-block w-100"
                                            alt="..." height="100%">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/home-01/it2.jpg" class="d-block w-100"
                                            alt="..." style="height:100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section about-home-03 padding-top-90 padding-bottom-115">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="about-left">
                        <h2 class="title">WE BUILD YOUR DREAMS</h2>
                        <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra libero
                            non facilisis imperdiet, mi augue feugiat nisl sit amet mollis enim velit Vestibulum
                            fringilla nulla ultricies.</p>
                        <div class="btn-wrapper">
                            <a href="#" class="template-btn">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-right">
                        <div class="about-image">
                            <img src="assets/images/home-03/about-image.jpg" alt="">
                        </div>
                        <div class="signature-part">
                            <p>We are able to guarantee a very high level of satisfaction for our every clients</p>
                            <img src="assets/images/logo/signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-section padding-bottom-90">
        <div class="container">
            <div class="indurance-services-slider">
            <?php
              include 'db.php';
           $sql = "SELECT * FROM sub_section ";
           $result = mysqli_query($conn,$sql) or die("Query Failed");
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
?>
                <div class="single-services-slide">
                    <div class="indurance-service-item">
                        <div class="service-icon">
                            <!-- <i class="flaticon-idea"></i> -->
                        </div>
                        <div class="card service-content " style="height:200px;background-image: url('');background-size:100%; background-repeat:no-repeat;">
                           <img src="admin/upload/<?php echo $row['sub_saction_image'];  ?>" alt="" height="80%">  
                        <h6 class="title" ><?php echo $row["sub_saction_name"]; ?></h6>
                            <!-- <p><?php echo substr( $row["sub_saction_description"],0,50); ?></p> -->
                        </div>
                    </div>
                </div>
              <?php } } ?>
             <!--    <div class="single-services-slide">
                    <div class="indurance-service-item">
                        <div class="service-icon">
                            <i class="flaticon-content-management"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="title">mining industry</h6>
                            <p>We are able to guarantee satisfaction for our clients industrial services of all those
                                companies</p>
                        </div>
                    </div>
                </div>
                
                <div class="single-services-slide">
                    <div class="indurance-service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="title">oil & gas</h6>
                            <p>We are able to guarantee satisfaction for our clients industrial services of all those
                                companies</p>
                        </div>
                    </div>
                </div>
                
                <div class="single-services-slide">
                    <div class="indurance-service-item">
                        <div class="service-icon">
                            <i class="flaticon-process"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="title">machanical</h6>
                            <p>We are able to guarantee satisfaction for our clients industrial services of all those
                                companies</p>
                        </div>
                    </div>
                </div>
                
                <div class="single-services-slide">
                    <div class="indurance-service-item">
                        <div class="service-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="service-content">
                            <h6 class="title">electrical</h6>
                            <p>We are able to guarantee satisfaction for our clients industrial services of all those
                                companies</p>
                        </div>
                    </div>
                </div>
            -->
            </div>
        </div>
    </section>


    <section class="counter-section padding-top-115 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="indurance-single-counter">
                        <div class="counter-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="number-counting">4</span>+</h2>
                            <span class="counter-title">projects done</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="indurance-single-counter">
                        <div class="counter-icon">
                            <i class="flaticon-content-management"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="number-counting">1</span>+</h2>
                            <span class="counter-title">satisfied clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="indurance-single-counter">
                        <div class="counter-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="number-counting">195</span>+</h2>
                            <span class="counter-title">countries available</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="indurance-single-counter">
                        <div class="counter-icon">
                            <i class="flaticon-process"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="number-counting">4</span>+</h2>
                            <span class="counter-title">quality projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="projects-section projects-home-03 padding-top-115 padding-bottom-90"
        style="background-image: url('assets/images/home-03/projects-bg.jpg')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title white margin-bottom-55">
                        <span class="subtitle">our projects</span>
                        <h2 class="title margin-top-10 margin-bottom-20">our featured projects</h2>
                        <p class="title-paragraph">We are able to uarantee a very high level of satisfaction for our
                            clients. We offer the cleanest line of services.</p>
                <marquee behavior="" direction="">COMMinG SOOn</marquee>
                    </div>
                </div>
            </div>
          <!--   <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="indurance-project-item">
                        <div class="project-image">
                            <img src="assets/images/home-01/project-image-01.jpg" alt="">
                        </div>
                        <div class="hover-state">
                            <div class="hover-state-content">
                                <h6 class="title">project name</h6>
                                <span>company title</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="indurance-project-item">
                        <div class="project-image">
                            <img src="assets/images/home-01/project-image-02.jpg" alt="">
                        </div>
                        <div class="hover-state">
                            <div class="hover-state-content">
                                <h6 class="title">project name</h6>
                                <span>company title</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="indurance-project-item">
                        <div class="project-image">
                            <img src="assets/images/home-01/project-image-03.jpg" alt="">
                        </div>
                        <div class="hover-state">
                            <div class="hover-state-content">
                                <h6 class="title">project name</h6>
                                <span>company title</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"> 
                    <div class="indurance-project-item">
                        <div class="project-image">
                            <img src="assets/images/home-01/project-image-04.jpg" alt="">
                        </div>
                        <div class="hover-state">
                            <div class="hover-state-content">
                                <h6 class="title">project name</h6>
                                <span>company title</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>-->
        </div>
    </section>


    <section class="quote-section quote-home-03 padding-bottom-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="indurance-about-item-02">
                        <div class="about-image">
                            <img src="assets/images/home-01/quote-image-01.jpg" alt="">
                        </div>
                        <div class="about-content">
                            <h5 class="title">our values</h5>
                            <p>At GLOBAL ENGiNEERiNG SERViCES, our chief mission is to deliver innovative and excellent IT solutions and services to ,
                                our treasured clients with an objective to help them accomplish their business goals. We go the extra mile to make it a delight for
                                 stakeholders to work with us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="indurance-about-item-02">
                        <div class="about-image">
                            <img src="assets/images/home-01/quote-image-02.jpg" alt="">
                        </div>
                        <div class="about-content">
                            <h5 class="title">our Vission</h5>
                            <p>We at GLOBAL ENGiNEERiNG SERViCES powerfully trust in our vision of becoming a leader in IT  outsourcing service providers and an honored 
                                firm renowned for its people, quality and performance. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <!-- <div class="indurance-form-01">
                        <h5 class="title">request a quote</h5>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit">submit request</button>
                        </form>
                    </div> -->
                    <div class="indurance-about-item-02">
                        <div class="about-image">
                            <img src="assets/images/home-01/quote-image-02.jpg" alt="">
                        </div>
                        <div class="about-content">
                            <h5 class="title">our Mission</h5>
                            <p>At GLOBAL ENGiNEERiNG SERViCES, our chief mission is to deliver innovative and excellent IT solutions and services to ,
                                our treasured clients with an objective to help them accomplish their business goals. We go the extra mile to make it a delight for
                                 stakeholders to work with us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    <!-- 
        <section class="testimonial-section padding-top-115 padding-bottom-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title margin-bottom-55 white">
                            <span class="subtitle">our projects</span>
                            <h2 class="title margin-top-10 margin-bottom-20">what <span>clients say</span></h2>
                            <p class="title-paragraph">We are able to uarantee a very high level of satisfaction for our
                                clients. We offer the cleanest line of services.</p>
                        </div>
                    </div>
                </div>
                <div class="indurance-testimonial-slider">
                    <div class="single-testimonial-slide">
                        <div class="indurance-testimonial-item">
                            <div class="testimonial-content">
                                <span>I found myself working in a true partnership that results in an incredible experience,
                                    and an end product that is the best.</span>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="assets/images/home-01/testimonial-01.jpg" alt="">
                                </div>
                                <div class="author-name">
                                    <h6 class="title">Krista Starkes</h6>
                                    <span>Directer, art media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slide">
                        <div class="indurance-testimonial-item">
                            <div class="testimonial-content">
                                <span>I found myself working in a true partnership that results in an incredible experience,
                                    and an end product that is the best.</span>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="assets/images/home-01/testimonial-02.jpg" alt="">
                                </div>
                                <div class="author-name">
                                    <h6 class="title">murphy attorn</h6>
                                    <span>Directer, art media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slide">
                        <div class="indurance-testimonial-item">
                            <div class="testimonial-content">
                                <span>I found myself working in a true partnership that results in an incredible experience,
                                    and an end product that is the best.</span>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="assets/images/home-01/testimonial-03.jpg" alt="">
                                </div>
                                <div class="author-name">
                                    <h6 class="title">Raul Moreland</h6>
                                    <span>Directer, art media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slide">
                        <div class="indurance-testimonial-item">
                            <div class="testimonial-content">
                                <span>I found myself working in a true partnership that results in an incredible experience,
                                    and an end product that is the best.</span>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="assets/images/home-01/testimonial-04.jpg" alt="">
                                </div>
                                <div class="author-name">
                                    <h6 class="title">Patricia Rruitt</h6>
                                    <span>Directer, art media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <!-- <section class="news-section padding-top-130 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title margin-bottom-50">
                        <span class="subtitle">latest Blog</span>
                        <h2 class="title margin-top-10 margin-bottom-10">our latest Blog</h2>
                        <p class="title-paragraph">We are able to uarantee a very high level of satisfaction for our
                            clients. We offer the cleanest line of services.</p>
                    </div>
                </div>
            </div>
            <div class="indurance-news-slider">
                <div class="single-news-slide">
                    <div class="indurance-news-item">
                        <div class="news-image">
                            <img src="assets/images/home-01/news-image-01.jpg" alt="">
                            <div class="news-date">
                                <h5 class="title">23</h5>
                                <span>sept</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a>
                            </div>
                            <h5 class="title"><a href="#">Manufacturing industry became a key sector of production</a>
                            </h5>
                            <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra
                                libero non facilisis imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="single-news-slide">
                    <div class="indurance-news-item">
                        <div class="news-image">
                            <img src="assets/images/home-01/news-image-02.jpg" alt="">
                            <div class="news-date">
                                <h5 class="title">23</h5>
                                <span>sept</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a>
                            </div>
                            <h5 class="title"><a href="#">American countries during the Industrial Revolution</a></h5>
                            <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra
                                libero non facilisis imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="single-news-slide">
                    <div class="indurance-news-item">
                        <div class="news-image">
                            <img src="assets/images/home-01/news-image-03.jpg" alt="">
                            <div class="news-date">
                                <h5 class="title">23</h5>
                                <span>sept</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a>
                            </div>
                            <h5 class="title"><a href="#">Cause dried no solid no an small so still widen examine</a>
                            </h5>
                            <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra
                                libero non facilisis imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="single-news-slide">
                    <div class="indurance-news-item">
                        <div class="news-image">
                            <img src="assets/images/home-01/news-image-01.jpg" alt="">
                            <div class="news-date">
                                <h5 class="title">23</h5>
                                <span>sept</span>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a>
                            </div>
                            <h5 class="title"><a href="#">Written enquire painful ye to offices forming it then so
                                    does</a></h5>
                            <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra
                                libero non facilisis imperdiet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="cta-section padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="cta-content">
                        <h4 class="title">Provide You The Highest Quality Work </h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <a href="tel:789456123" class="template-btn"><i class="fa fa-phone"> 786-344-9868</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>