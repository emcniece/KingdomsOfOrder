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
                        	<li data-race="race1">Race 1</li>
                            <li data-race="race2">Race 2</li>
                            <li data-race="race3">Race 3</li>
                            <li data-race="race4">Race 4</li>
                            <li data-race="race5">Race 5</li>
                        </ul>
                    </div>
                    <div class="row">
                    <div class="span10">
                    <table id="stats" class="table table-striped">
                    <thead><tr><th>Statistic</th><th>Value</th><th>Statistic</th><th>Value</th></tr></thead>
                    <tbody>
<tr>
<td># Trained (A) Soldiers</td>				<td><input id="trained-a-soliders" type="text" placeholder="100" val="100"></td>
<td># Trained (D) Soldiers</td>				<td><input id="trained-d-soliders" type="text" placeholder="90"  val="90"></td></tr>
<tr>
<td># Untrained Soldiers</td>				<td><input id="num-untrained-soldiers" type="text" placeholder="10" val="10"></td></tr>
<tr>
<td># of Attack Weapons</td>				<td><input id="num-a-weapons" type="text" placeholder="1001" val="1001"></td>
<td># of Defense Weapons</td>				<td><input id="num-d-weapons" type="text" placeholder="1000" val="1000"></td></tr>
<tr>
<td>Power of Attack Weapons</td>			<td><input id="power-a-weapons" type="text" placeholder="1001" val="1001"></td>
<td>Power of Defense Weapons</td>			<td><input id="power-d-weapons" type="text" placeholder="1000" val="1000"></td></tr>
<tr>
<td>Fortification (A) Level</td>			<td><input id="fortification-a-level" type="text" placeholder="5" val="5"></td>
<td>Fortification (D) Level</td>			<td><input id="fortification-d-level" type="text" placeholder="6" val="6"></td></tr>
<tr>
<td># Spies</td>							<td><input id="num-spies" type="text" placeholder="20" val="20"></td>
<td># Spy Tools</td>						<td><input id="num-spy-tools" type="text" placeholder="10" val="10"></td></tr>
<tr>
<td>Power of Spy Tools</td>					<td><input id="power-spy-tools" type="text" placeholder="100" val="100"></td>
<tr>
<td># Sentries</td>							<td><input id="num-sentries" type="text" placeholder="20" val="20"></td>
<td># Sentry Tools</td>						<td><input id="num-sentry-tools" type="text" placeholder="0" val="0"></td></tr>
<tr>
<td>Power of Sentry Tools</td>				<td><input id="power-sentry-tools" type="text" placeholder="0" val="0"></td>
<td>Covert Skill level</td>					<td><input id="covert-skill-level" type="text" placeholder="0" val="0"></td></tr>
<tr>
                    	</tbody>
					</table>
                </div><!-- .span10 -->
                </div><!-- .row -->
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
                                    <tr><td># Armed Trained (A) Soldiers</td>		<td class="stat armed-trained-a-soliders">0</td></tr>
                                    <tr><td># Armed Untrained Soldiers</td>			<td class="stat armed-untrained-soliders">0</td></tr>
                                    <tr><td>Power of Attack Weapons</td>			<td class="stat power-of-a-weapons">0</td></tr>
                                    <tr><td># Unarmed Trained (A) Soldiers</td>		<td class="stat unarmed-trained-a-soldiers">0</td></tr>
                                    <tr><td># Unarmed Untrained Soldiers</td>		<td class="stat unarmed-untrained-soldiers">0</td></tr>
                                    <tr><td>Fortification level (A)</td>			<td class="stat a-fortification-level">0</td></tr>
                                    <tr><td>Race Bonus</td>							<td class="stat race-a-bonus">0</td></tr>
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
                                    <tr><td># Armed Trained (D) Soldiers</td>			<td class="stat armed-trained-d-soliders">0</td></tr>
                                    <tr><td># Armed Untrained Soldiers</td>				<td class="stat armed-untrained-soliders">0</td></tr>
                                    <tr><td>Power of Defense Weapons</td>				<td class="stat power-of-d-weapons">0</td></tr>
                                    <tr><td># Unarmed Trained (D) Soldiers</td>			<td class="stat unarmed-trained-d-soldiers">0</td></tr>
                                    <tr><td># Unarmed Untrained Soldiers</td>			<td class="stat unarmed-untrained-soldiers">0</td></tr>
                                    <tr><td>Fortification (D) Level</td>				<td class="stat fortification-d-level">0</td></tr>
                                    <tr><td>Race (D) Bonus</td>							<td class="stat race-d-bonus">0</td></tr>
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
                                    <tr><td># Armed Spies</td>			<td class="stat armed-spies">0</td></tr>
                                    <tr><td># Unarmed Spies</td>		<td class="stat unarmed-spies">0</td></tr>
                                    <tr><td>Power of Spy Tools</td>		<td class="stat power-of-spy-tools">0</td></tr>
                                    <tr><td>Covert Skill level</td>		<td class="stat covert-skill-level">0</td></tr>
                                    <tr><td>Race Spy Bonus</td>			<td class="stat race-spy-bonus">0</td></tr>
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
                                    <tr><td># Armed Sentries</td>			<td class="stat armed-sentries">0</td></tr>
                                    <tr><td># Unarmed Sentries</td>			<td class="stat unarmed-sentries">0</td></tr>
                                    <tr><td>Power of Sentry Tools</td>		<td class="stat power-of-sentry-tools">0</td></tr>
                                    <tr><td>Covert Skill level</td>			<td class="stat covert-skill-level">0</td></tr>
                                    <tr><td>Race Sentry Bonus</td>			<td class="stat race-sentry-bonus">0</td></tr>
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
                            <table id="overall" class="table table-striped">
                                <thead><tr><th>Overall Statistic</th><th>Value</th></tr></thead>
                                <tbody>
<tr><td># Armed Trained (A) Soldiers</td>		<td class="stat armed-trained-a-soliders"><input type="text" placeholder="100" val="100"></td></tr>
<tr><td># Armed Trained (D) Soldiers</td>		<td class="stat armed-trained-d-soliders"><input type="text" placeholder="90"></td></tr>
<tr><td># Armed Untrained Soldiers</td>			<td class="stat armed-untrained-soliders"><input type="text" placeholder=""></td></tr>
<tr><td># Unarmed Trained (A) Soldiers</td>		<td class="stat unarmed-trained-a-soldiers"><input type="text" placeholder=""></td></tr>
<tr><td># Unarmed Trained (D) Soldiers</td>		<td class="stat unarmed-trained-d-soldiers"><input type="text" placeholder=""></td></tr>
<tr><td># Untrained Soldiers</td>				<td class="stat untrained-soldiers"><input type="text" placeholder=""></td></tr>
<tr><td>Power of Attack Weapons</td>			<td class="stat power-of-a-weapons"><input type="text" placeholder="1001"></td></tr>
<tr><td>Power of Defense Weapons</td>			<td class="stat power-of-d-weapons"><input type="text" placeholder="1000"></td></tr>
<tr><td>Fortification (A) Level</td>			<td class="stat fortification-a-level"><input type="text" placeholder="5"></td></tr>
<tr><td>Fortification (D) Level</td>			<td class="stat fortification-d-level"><input type="text" placeholder="6"></td></tr>
<tr><td>Race (A) Bonus</td>						<td class="stat race-a-bonus"><input type="text" placeholder=""></td></tr>
<tr><td>Race (D) Bonus</td>						<td class="stat race-d-bonus"><input type="text" placeholder=""></td></tr>
<tr><td># Armed Spies</td>						<td class="stat armed-spies"><input type="text" placeholder="20"></td></tr>
<tr><td># Unarmed Spies</td>					<td class="stat unarmed-spies"><input type="text" placeholder=""></td></tr>
<tr><td>Power of Spy Tools</td>					<td class="stat power-of-spy-tools"><input type="text" placeholder="100"></td></tr>
<tr><td>Race Spy Bonus</td>						<td class="stat race-spy-bonus"><input type="text" placeholder=""></td></tr>
<tr><td># Armed Sentries</td>					<td class="stat armed-sentries"><input type="text" placeholder=""></td></tr>
<tr><td># Unarmed Sentries</td>					<td class="stat unarmed-sentries"><input type="text" placeholder="0"></td></tr>
<tr><td>Power of Sentry Tools</td>				<td class="stat power-of-sentry-tools"><input type="text" placeholder="0"></td></tr>
<tr><td>Covert Skill level</td>					<td class="stat covert-skill-level"><input type="text" placeholder="0"></td></tr>
<tr><td>Race Sentry Bonus</td>					<td class="stat race-sentry-bonus"><input type="text" placeholder="0"></td></tr>
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