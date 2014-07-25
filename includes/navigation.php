 <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://osteoengineering.com">Dean Lab</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li<?php if ($thisPage=="Home") 
echo " class=\"active\""; ?>><a href="http://osteoengineering.com">Home</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">The Team <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li<?php if ($thisPage=="Current Team") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>team">Current Team</a></li>
						<li<?php if ($thisPage=="Alumni") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>alumni">Alumni</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Research <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li<?php if ($thisPage=="Capabilities") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>capabilities">Capabilities</a></li>
						<li<?php if ($thisPage=="Active Research") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>research">Active Research</a></li>
						<li<?php if ($thisPage=="Publications") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>publications">Publications</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Positions <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li<?php if ($thisPage=="Job Descriptions") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>jobs">Job Descriptions</a></li>
						<li<?php if ($thisPage=="How to Apply") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>apply">How to Apply</a></li>
					</ul>
				</li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li<?php if ($thisPage=="Resources") 
echo " class=\"active\""; ?>><a href="<?php if ($sub==1) 
echo "../"; ?>resources">Resources</a></li>
						<li><a href="engineering">Engineering</a></li>
						<li><a target="_blank" href="http://medicalcenter.osu.edu/Pages/index.aspx">Ohio State Wexner Medical Center</a></li>
						<li><a target="_blank" href="http://cancer.osu.edu/Pages/index.aspx">OSUCCC - James</a></li>
						<li><a target="_blank" href="http://medicine.osu.edu/Pages/default.aspx">OSU College of Medicine</a></li>
						<li><a target="_blank" href="http://plasticsurgery.osu.edu/">Department of Plastic Surgery</a></li>
						<li><a target="_blank" href="https://onesource.osumc.edu/">OneSource (OSUMC Account Required)</a></li>
						<li><a target="_blank" href="http://medicine.osu.edu/REGENERATIVEMEDICINE/Pages/index.aspx">Center for Regenerative Medicine and Cell-Based Therapies</a></li>
					  </ul>
                </li>
                <li<?php if ($thisPage=="Media") 
echo " class=\"active\""; ?>><a href="http://osteoengineering.com/media">Media</a></li>

                <li<?php if ($thisPage=="Contact") 
echo " class=\"active\""; ?>><a href="http://osteoengineering.com/contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>