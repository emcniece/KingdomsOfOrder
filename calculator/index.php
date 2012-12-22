<!DOCTYPE html>
<html lang="en">
<head>
<title>Kingdoms Of Order Calculator</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/koo.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

<div class="container">

        <!-- Grid system
        ================================================== -->
    <section id="gridSystem">
        <div class="page-header">
            <h1>Kingdoms Of Order</h1>
        </div>
    
        <h2>Statistic Calculation</h2>
        
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#general-settings" data-toggle="tab">General Settings</a></li>
                <li><a href="#strike-action" data-toggle="tab">Strike Action</a></li>
                <li><a href="#defensive-action" data-toggle="tab">Defensive Action</a></li>
                <li><a href="#spy-rating" data-toggle="tab">Spy Rating</a></li>
                <li><a href="#sentry-rating" data-toggle="tab">Sentry Rating</a></li>
                <li><a href="#overall-ranking" data-toggle="tab">Overall Ranking</a></li>
            </ul>
 
 <!-- ==============================================
	#GENERAL SETTINGS
================================================ -->
           
            <div class="tab-content">
                <div class="tab-pane active" id="general-settings">
                	<h3>General Settings</h3>
                    
                    <div id="race" class="btn-group">
                        <a class="btn dropdown-toggle btn-info btn-large" data-toggle="dropdown" href="#">
                            <span class="race-selected">Select Race</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                        	<li>Race 1</li>
                            <li>Race 2</li>
                            <li>Race 3</li>
                            <li>Race 4</li>
                            <li>Race 5</li>
                        </ul>
                    </div>
                </div>
                
<!-- ==============================================
	#STRIKE ACTION
================================================ -->

                <div class="tab-pane" id="strike-action">
                    <div class="row">
                        <div class="span5">
                            <h3>Strike Action: <span id="SA">#</span></h3>
                        </div>
                        
                        <div class="span4"> <!-- Attack stat table -->
                            <table class="table table-striped">
                                <thead><tr><th>Attack Statistic</th><th>Value</th></tr></thead>
                                <tbody>
                                    <tr><td># Armed Trained (A) Soldiers</td>		<td class="armed-trained-a-soliders">0</td></tr>
                                    <tr><td># Armed Untrained Soldiers</td>			<td class="armed-untrained-soliders">0</td></tr>
                                    <tr><td>Power of Attack Weapons</td>			<td class="power-of-a-weapons">0</td></tr>
                                    <tr><td># Unarmed Trained (A) Soldiers</td>		<td class="unarmed-trained-a-soldiers">0</td></tr>
                                    <tr><td># Unarmed Untrained Soldiers</td>		<td class="unarmed-untrained-soldiers">0</td></tr>
                                    <tr><td>Fortification level (A)</td>			<td class="a-fortification-level">0</td></tr>
                                    <tr><td>Race Bonus</td>							<td class="race-a-bonus">0</td></tr>
                                </tbody>
                            </table>
                        </div><!-- .span4 -->
    
                    </div><!-- .row -->

                </div><!-- #strike-action -->
                
<!-- ==============================================
	#DEFENSIVE ACTION
================================================ -->
                
                <div class="tab-pane" id="defensive-action">
					<div class="row">
	                    <div class="span5">
	                        <h3>Defensive Action: <span id="DA">#</span></h3>
                        </div>
                        <div class="span4"> <!-- Attack stat table -->
                            <table class="table table-striped">
                                <thead><tr><th>Defend Statistic</th><th>Value</th></tr></thead>
                                <tbody>
                                    <tr><td># Armed Trained (D) Soldiers</td>			<td class="armed-trained-d-soliders">0</td></tr>
                                    <tr><td># Armed Untrained Soldiers</td>				<td class="armed-untrained-soliders">0</td></tr>
                                    <tr><td>Power of Defense Weapons</td>				<td class="power-of-d-weapons">0</td></tr>
                                    <tr><td># Unarmed Trained (D) Soldiers</td>			<td class="unarmed-trained-d-soldiers">0</td></tr>
                                    <tr><td># Unarmed Untrained Soldiers</td>			<td class="unarmed-untrained-soldiers">0</td></tr>
                                    <tr><td>Fortification (D) Level</td>				<td class="fortification-d-level">0</td></tr>
                                    <tr><td>Race (D) Bonus</td>							<td class="race-d-bonus">0</td></tr>
                                </tbody>
                            </table>
                        </div><!-- .span4 -->
    
                    </div><!-- .row -->

                </div>
                
<!-- ==============================================
	#SPY RATING
================================================ -->
                
                <div class="tab-pane" id="spy-rating">
					<div class="row">
	                    <div class="span5">
		                    <h3>Spy Rating: <span id="ACA">#</span></h3>
	                    </div>
                        <div class="span4"> <!-- Attack stat table -->
                            <table class="table table-striped">
                                <thead><tr><th>Spy Statistic</th><th>Value</th></tr></thead>
                                <tbody>
                                    <tr><td># Armed Spies</td>			<td class="armed-spies">0</td></tr>
                                    <tr><td># Unarmed Spies</td>		<td class="unarmed-spies">0</td></tr>
                                    <tr><td>Power of Spy Tools</td>		<td class="power-of-spy-tools">0</td></tr>
                                    <tr><td>Covert Skill level</td>		<td class="covert-skill-level">0</td></tr>
                                    <tr><td>Race Spy Bonus</td>			<td class="race-spy-bonus">0</td></tr>
                                </tbody>
                            </table>
                        </div><!-- .span4 -->
    
                    </div><!-- .row -->

                </div>
                
<!-- ==============================================
	#SENTRY RATING
================================================ -->
                
                <div class="tab-pane" id="sentry-rating">
					<div class="row">
    					<div class="span5">
	                        <h3>Sentry Rating: <span id="DCA">#</span></h3>
                    	</div>
                        <div class="span4"> <!-- Attack stat table -->
                            <table class="table table-striped">
                                <thead><tr><th>Sentry Statistic</th><th>Value</th></tr></thead>
                                <tbody>
                                    <tr><td># Armed Sentries</td>			<td class="armed-sentries">0</td></tr>
                                    <tr><td># Unarmed Sentries</td>			<td class="unarmed-sentries">0</td></tr>
                                    <tr><td>Power of Sentry Tools</td>		<td class="power-of-sentry-tools">0</td></tr>
                                    <tr><td>Covert Skill level</td>			<td class="covert-skill-level">0</td></tr>
                                    <tr><td>Race Sentry Bonus</td>			<td class="race-sentry-bonus">0</td></tr>
                                </tbody>
                            </table>
                        </div><!-- .span4 -->
    
                    </div><!-- .row -->
                    
                </div>
                
<!-- ==============================================
	#OVERALL RANKING
================================================ -->
                
                <div class="tab-pane" id="overall-ranking">
                	<div class="row">
                    	<div class="span5">
		                    <h3>Overall Ranking: <span id="OA">#</span></h3>
                        </div>
                        <div class="span4"> <!-- Attack stat table -->
                            <table class="table table-striped">
                                <thead><tr><th>Overall Statistic</th><th>Value</th></tr></thead>
                                <tbody>
                                    <tr><td># Armed Trained (A) Soldiers</td>		<td class="armed-trained-a-soliders">0</td></tr>
                                    <tr><td># Armed Trained (D) Soldiers</td>		<td class="armed-trained-d-soliders">0</td></tr>
                                    <tr><td># Armed Untrained Soldiers</td>			<td class="armed-untrained-soliders">0</td></tr>
                                    <tr><td># Unarmed Trained (A) Soldiers</td>		<td class="unarmed-trained-a-soldiers">0</td></tr>
                                    <tr><td># Unarmed Trained (D) Soldiers</td>		<td class="unarmed-trained-d-soldiers">0</td></tr>
                                    <tr><td># Unarmed Untrained Soldiers</td>		<td class="unarmed-untrained-soldiers">0</td></tr>
                                    <tr><td>Power of Attack Weapons</td>			<td class="power-of-a-weapons">0</td></tr>
                                    <tr><td>Power of Defense Weapons</td>			<td class="power-of-d-weapons">0</td></tr>
                                    <tr><td>Fortification (A) Level</td>			<td class="fortification-a-level">0</td></tr>
                                    <tr><td>Fortification (D) Level</td>			<td class="fortification-d-level">0</td></tr>
                                    <tr><td>Race (A) Bonus</td>						<td class="race-a-bonus">0</td></tr>
                                    <tr><td>Race (D) Bonus</td>						<td class="race-d-bonus">0</td></tr>
                                    <tr><td># Armed Spies</td>						<td class="armed-spies">0</td></tr>
                                    <tr><td># Unarmed Spies</td>					<td class="unarmed-spies">0</td></tr>
                                    <tr><td>Power of Spy Tools</td>					<td class="power-of-spy-tools">0</td></tr>
                                    <tr><td>Race Spy Bonus</td>						<td class="race-spy-bonus">0</td></tr>
                                    <tr><td># Armed Sentries</td>					<td class="armed-sentries">0</td></tr>
                                    <tr><td># Unarmed Sentries</td>					<td class="unarmed-sentries">0</td></tr>
                                    <tr><td>Power of Sentry Tools</td>				<td class="power-of-sentry-tools">0</td></tr>
                                    <tr><td>Covert Skill level</td>					<td class="covert-skill-level">0</td></tr>
                                    <tr><td>Race Sentry Bonus</td>					<td class="race-sentry-bonus">0</td></tr>
                                </tbody>
                            </table>
                        </div><!-- .span4 -->
    
                    </div><!-- .row -->

                </div>
        
            </div><!-- .tab-content -->
            
        </div><!-- .tabbable tabs-left -->
            
            

    </section>
        
</div><!-- container --> 

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
          <li><a href="http://blog.getbootstrap.com">Blog</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/issues?state=open">Issues</a></li>
          <li class="muted">&middot;</li>
          <li><a href="https://github.com/twitter/bootstrap/wiki">Roadmap and changelog</a></li>
        </ul>
      </div>
    </footer>
    
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>

    <script src="js/holder.js"></script>
    <script src="js/prettify.js"></script>

	<script src="js/koo.js"></script>
</body>
</html>