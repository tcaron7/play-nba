<nav id="navGlobal">
	<ul>
		<li class="hasDropdown">
			<a href="#" >Teams</a>
            <div class="dropdown neighbours">
                <div class="primary">
                    <span class="subheading">Eastern Conference</span>
                    <ul>
                        <?php
                        $allEastTeams = getAllEastTeamsOrderByName();
                        foreach ($allEastTeams as $key => $team)
                        {
                            echo '<li>';
                            echo '<span class="icon-team-'.preg_replace('/\s+/', '', strtolower($team->getName())).'">&nbsp;</span>';
                            echo '<a href="nba.php?section=team_view&id=' . $team->getId() . '" >';
                            echo $team->getFullName();
                            echo '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="secondary">
                    <span class="subheading">Western Conference</span>
                    <ul>
                        <?php
                        $allWestTeams = getAllWestTeamsOrderByName();
                        foreach ($allWestTeams as $key => $team)
                        {
                            echo '<li>';
                            echo '<span class="icon-team-'.preg_replace('/\s+/', '', strtolower($team->getName())).'">&nbsp;</span>';
                            echo '<a href="nba.php?section=team_view&id=' . $team->getId() . '" >';
                            echo $team->getFullName();
                            echo '</a></li>';
                        }
                        ?>
                    </ul>
                </div> 
            </div>
		</li>
        
		<li><a href="nba.php?section=schedule">Scores & Schedules</a></li>
		<li><a href="nba.php?section=player">Players</a></li>
		<li><a href="nba.php?section=standing">Standings</a></li>
		
		<li class="hasDropdown">
			<a href="#">Stats</a>
            <div class="dropdown">
                <div class="primary">
                    <ul>
                        <li><a href="nba.php?section=stats&stats=players">Players Top Stats</a></li>
                        <li><a href="nba.php?section=stats&stats=teams">Team Stats</a></li>
                    </ul>
                </div>
            </div>
		</li>
		
		<li class="hasDropdown">
            <a href="#">News</a>
            <div class="dropdown">
                <div class="primary">
                    <ul>
                        <li><a href="nba.php?section=awardDisplay">Awards</a></li>
                        <li><a href="nba.php?section=transactionDisplay">Transactions</a></li>
                        <li><a href="nba.php?section=injuryDisplay">Injuries</a></li>
                    </ul>
                </div>
            </div>
		</li>
        
		<li><a href="nba.php?section=draft_history">Draft</a></li>
		<li><a href="nba.php?section=prospects">Prospects</a></li>
        
		<li class="hasDropdown">
			<a href="#">Archives</a>
            <div class="dropdown">
                <div class="primary">
                    <ul>
                        <?php
                        $lastTenSeasons = getLastTenSeasons();
                        foreach ($lastTenSeasons as $key => $season)
                        {
                            echo '<li><a href="nba.php?section=season_view&year=' . $season->getYear() . '" >';
                            echo  $season->getYear();
                            echo '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
		</li>

	</ul>
</nav>