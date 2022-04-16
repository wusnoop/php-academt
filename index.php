<?php
$data = require_once ('data.php');
$aboutData = $data['about'];
$educationData = $data['education'];
$langData = $data['lang'];
$interestData = $data['interests'];
$aboutCareer = $data['aboutCareer'];
$career = $data['career'];
$project = $data['projects'];
$skills = $data['skills'];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name"><?=$aboutData['name']?></h1>
                <h3 class="tagline"><?=$aboutData['post']?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?=$aboutData['email']?>"><?=$aboutData['email']?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?=$aboutData['phone']?>"><?=$aboutData['phone']?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="<?=$aboutData['site']?>" target="_blank"><?=$aboutData['site']?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank">linkedin.com/in/alandoe</a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank">github.com/username</a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <?php
                foreach ($educationData as $value) {
                ?>
                <div class="item">
                    <h4 class="degree"><?=$value['faculty']?></h4>
                    <h5 class="meta"><?=$value['univercity']?></h5>
                    <div class="time"><?=$value['yearStart']?> - <?=$value['yearEnd']?></div>
                </div><!--//item-->
                <?php } ?>

            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($langData as $lang){
                    ?>
                    <li><?=$lang?> <span class="lang-desc">(Native)</span></li>
                      <?php }?>

                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <?php
                    foreach ($interestData as $inter){
                    ?>
                    <li><?=$inter?></li>
                     <?php } ?>

                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p><?=$aboutCareer?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                <?php foreach ($career as $item) {?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?=$item['post']?></h3>
                            <div class="time"><?=$item['yearStart']?> - <?=$item['yearEnd']?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?=$item['place']?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?=$item['duty']?></p>
                    </div><!--//details-->
                </div><!--//item-->
                <?php } ?>

                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->

                <?php  foreach ($project as $pro) {?>
                <div class="item">
                    <span class="project-title"><a href="#hook"><?=$pro['title']?></a></span> - <span class="project-tagline"><?=$pro['duty']?></span>
                    <?php } ?>

            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">

                <?php foreach ($skills as $skill){ ?>
                    <div class="item">
                        <h3 class="level-title"><?=$skill['skill']?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level=<?=$skill['level']?>>
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                  <?php }?>
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

