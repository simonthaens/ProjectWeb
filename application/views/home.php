<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TEDxPXL</title>

    <!--Icon -->
    <link rel="shortcut icon" href= <?php echo base_url() . "assets/pictures/favicon.ico"?> type="image/vnd.microsoft.icon" />

   
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href=<?php echo base_url() ."assets/css/landing-page.css"?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url() . "assets/css/font-awesome.min.css"?> rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- CSS & JQuery for popup login and register pane -->
    <link rel="stylesheet" href="assets/css/reveal.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src=<?php echo base_url() ."assets/js/jquery.reveal.js"?> ></script>


    <script type="text/javascript">
<!--
    function toggle_visibility(slideshow) {
       var e = document.getElementById(slideshow);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    
    
//-->
</script>





</head>

<body>	
	    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1><span style="color:red;">TEDx</span>PXL</h1>
                        <h3><span style="color:red;">x</span> = independently organized TED event</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/TEDxPXL" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/tedx" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>                         
                            <li>
                                <a href="https://www.linkedin.com/company/tedxuhasselt" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <div class="content-section-a" id="2016">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">TEDxPXL 2016</h2>
                    <p class="lead">TEDxUHasselt presents to you the theme for TEDxUHasselt 2016: CHALLENGE ACCEPTED! <br><br>Taking UHasselt by storm in March 2016.<br><br>More details coming soon... Subscribe to our newsletter, or follow us on our social channels, to get the latest updates! </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src=<?php echo base_url() ."assets/pictures/tedxbanner.jpg"?> alt="" style="padding-top: 7em;">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b hidden-xs" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">News</h2>
                   	
  					<div class="bs-example" data-example-id="simple-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="<?php echo base_url(); ?>assets/pictures/carsouselBack.png" data-holder-rendered="true" style="width:100%; height:30%; border-radius: 25px;">
										<div class="carousel-caption">
   											<h3 class="section-heading">TEDxPXL 2016</h3>
   											<h4>15 Feb 2016</h4>
   											<h5>12:00</h5>
											<p>evenement info blablalba evenement info blablalba evenement info blablalba evenement info blablalba</p>
										</div>
										
										<?php
										//$events = new Event_Controller();
										//$events->getEvents();
										?>
										
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/pictures/carsouselBack.png" data-holder-rendered="true" style="width:100%; height:30%; border-radius: 25px;">
										<div class="carousel-caption">
   											<h3 class="section-heading">TEDxPXL 2017</h3>
   											<h4>15 Feb 2017</h4>
   											<h5>12:00</h5>
											<p>evenement info blablalba evenement info blablalba evenement info blablalba evenement info blablalba</p>
										</div>
									</div>
									<div class="item">
										<img src="<?php echo base_url(); ?>assets/pictures/carsouselBack.png" data-holder-rendered="true" style="width:100%; height:30%; border-radius: 25px;">
										<div class="carousel-caption">
   											<h3 class="section-heading">TEDxPXL 2018</h3>
   											<h4>15 Feb 2018</h4>
   											<h5>12:00</h5>
											<p>evenement info blablalba evenement info blablalba evenement info blablalba evenement info blablalba</p>
										</div>
									</div>
							
								</div>
								<a  id="slidehover" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="border-radius: 25px;"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
								<a id="slidehover" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="border-radius: 25px;"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
							</div>
						</div>
					<a href="#" class="btn btn-danger"  id="eventslink" data-reveal-id="addEventForm" onclick="toggle_visibility('addEventForm');return false;">Add Event</a>
                   
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6" style="padding-top: 3em;">

                </div>
            </div>
        </div>
        <!-- /.container -->
        <div id="addEventForm" class="reveal-modal" style="display:none" >
                    <h1>Add new event</h1>
                    <form>
                    	<div class="form-group" >
                            <label for="eventName">Name of event</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="eventName" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventDate">Date</label>
                            <input type="date" class="form-control" name="eventDate" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventTime">Time</label>
                            <input type="time" class="form-control" name="eventTime" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventZip">Zip code</label>
                            <input type="number" class="form-control" placeholder="Enter zip code" name="eventZip" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventCity">City</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="eventCity" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventAddress">Address</label>
                            <input type="text" class="form-control" placeholder="Enter address" name="eventAddress" value=''>
                        </div>

                        <div class="form-group" >
                            <label for="eventDescription">Description</label>
                            <textArea class="form-control" placeholder="Enter description" rows="5" name="eventDescription" value=''></textArea>
                        </div>
                        
                        <button type="submit" value="submit" name="addEvent" class="btn btn-danger" style="width:30%; height:5%;">Send</button>
                    </form>
                    <a class="close-reveal-modal">&#215;</a>
                </div>
    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Events</h2>
                    <div class="row">
						<a href="<?php echo base_url(); ?>Default_Controller/events#2016" class="btn btn-danger" id="eventslink">TEDxUHASSELT 2016</a>
						<a href="<?php echo base_url(); ?>Default_Controller/events#2015" class="btn btn-danger" id="eventslink">TEDxUHASSELTLIVE 2015</a>
						
					</div>
					<div class="row">
  						<a href="<?php echo base_url(); ?>Default_Controller/events#2014" class="btn btn-danger" id="eventslink">TEDxUHASSELT 2014</a>
						<a href="<?php echo base_url(); ?>Default_Controller/events#2013" class="btn btn-danger" id="eventslink">TEDxUHASSELTSALON 2013</a>
					</div>
					<div class="row">
  						<a href="<?php echo base_url(); ?>Default_Controller/events#2012" class="btn btn-danger" id="eventslink">TEDxUHASSELT 2012</a>
  						<a href="<?php echo base_url(); ?>Default_Controller/events#2011" class="btn btn-danger" id="eventslink">TEDxUHASSELT 2011</a>					
					</div>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" id="eventsimg" src=<?php echo base_url() ."assets/pictures/events1.jpg"?> alt="">
                    <img class="img-responsive" id="eventsimg" src=<?php echo base_url() ."assets/pictures/events2.png"?> alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

	<div class="content-section-b" id="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>              
                    <h2 class="section-heading">Friend of TEDxPXL:</h2>
                    <a href="" ><img class="img-responsive col-lg-6" id="eventsimg" src=<?php echo base_url() ."assets/pictures/friends1.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-6" id="eventsimg" src=<?php echo base_url() ."assets/pictures/friends2.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-6" id="eventsimg" src=<?php echo base_url() ."assets/pictures/friends3.png"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-6" id="eventsimg" src=<?php echo base_url() ."assets/pictures/friends4.jpg"?> alt=""></a>     
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                	<hr class="section-heading-spacer">
                    <div class="clearfix"></div> 
                	<h2 class="section-heading">Partners</h2>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners1.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners2.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners3.png"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners4.png"?> alt=""></a>  
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners5.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners6.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners7.png"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners8.png"?> alt=""></a> 
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners9.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners10.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners11.jpg"?> alt=""></a>
                    <a href="" ><img class="img-responsive col-lg-4" id="eventsimg" src=<?php echo base_url() ."assets/pictures/partners12.png"?> alt=""></a>   
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    
        <div class="content-section-a" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About</h2>
                    <p class="lead">TEDxUHasselt is an independently organized TED conference where speakers from around the world share cutting-edge ideas. During the breaks, attendees connect with each other through various interactive activities.</p>
                	<p class = "lead">TEDxUHasselt was founded in 2011 by three Hasselt University students and has remained a student-driven organization ever since. Meet our team members!</p>
                	<a href="<?php echo base_url(); ?>Default_Controller/about" class="btn btn-danger" id="eventslink">More info</a>
                	<a href="<?php echo base_url(); ?>Default_Controller/about#join" class="btn btn-danger" id="eventslink">Join the team!</a>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 hidden-xs">
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="326" width="444">
                    	<param name="bgcolor" value="#ffffff">
                    	<param name="flashvars" value="vu=http://video.ted.com/talks/embed/TEDShortRemix_2008-embed_high.flv&amp;su=http://images.ted.com/images/ted/tedindex/embed-posters/TEDShortRemix.2008-embed_thumbnail.jpg&amp;vw=432&amp;vh=240&amp;ap=0">
                    	<param name="src" value="http://video.ted.com/assets/player/swf/EmbedPlayer.swf">
                    	<param name="wmode" value="transparent">
                    	<param name="allowfullscreen" value="true">
                    	<embed allowfullscreen="true" bgcolor="#ffffff" flashvars="vu=http://video.ted.com/talks/embed/TEDShortRemix_2008-embed_high.flv&amp;su=http://images.ted.com/images/ted/tedindex/embed-posters/TEDShortRemix.2008-embed_thumbnail.jpg&amp;vw=432&amp;vh=240&amp;ap=0" height="326" src="http://video.ted.com/assets/player/swf/EmbedPlayer.swf" title="Adobe Flash Player" type="application/x-shockwave-flash" width="444" wmode="transparent">                    		
                    	</object>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    
		