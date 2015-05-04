<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal">
    <h2>Find your Destiny fireteam</h2>

    <div class="gamertagForm">
        <div id="gamertagButton"><h4>1. Who are you?</h4></div>
        <input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
                                     required class="formControl">

         <div class="levelSubForm">

                <input type="text" name="level" id="levelInput" placeholder="What level are you?"/>

            </div>
    </div>

        <div class="regionForm">


            <div id="regionSelector">
                <div id="regionButton"><h4>2. Where are you from?</h4></div>
                <div class="regionChoices">North America</div>           
                <div class="regionChoices">Europe</div>
                <div class="regionChoices">Australia</div>
			<!--	<div class="regionChoices">South America</div>
                <div class="regionChoices">Asia</div>
                <div class="regionChoices">Africa</div>  -->
            </div>
            <select id="regionForm" name="region" value="" required class="formControl">
                <option value="">Select region</option>
                <option value="North America"> North America</option>
                <!-- <option value="South America"> South America</option> -->
                <option value="Europe"> Europe</option>
                <!--  <option value="Asia"> Asia</option> -->
                <option value="Australia"> Australia/Oceania</option>

            </select>

        </div>
        <div class="platformForm">

            <div id="platformSelector">
                <div id="platformButton"><h4>3. What system?</h4></div>
                <div class="platformChoices">XBOX 360</div>
                <div class="platformChoices">XBOX One</div>
                <div class="platformChoices">PS3</div>
                <div class="platformChoices">PS4</div>
            </div>

            <select name="platform" id="platformForm" value="" required class="formControl">
                <option value="">Select platform</option>
                <option value="XBOX 360"> Xbox 360</option>
                <option value="XBOX One"> Xbox One</option>
                <option value="PS3"> Playstation 3</option>
                <option value="PS4"> Playstation 4</option>

            </select>

        </div>

        <div class="evenForm"><div id="eventLocator"><h4>Where in the game are you?</h4>
            <select class="form-control input-sm" name="event" id="searchActivity">
                <!-- #start select.options.searchActivity -->
                <option value="%">Activity (ALL)</option>
                <optgroup label="Raid - Normal">
                    <option value="Crota's End - Normal (Full Raid)">Crota's End - Normal (Full Raid)</option>
                    <option value="Crota's End - Normal (Any Checkpoint)">Crota's End - Normal (Any Checkpoint)</option>
                    <option value="Crota's End - Normal (Bridge)">Crota's End - Normal (Bridge)</option>
                    <option value="Crota's End - Normal (Shrieker's Chest)">Crota's End - Normal (Shrieker's Chest)</option>
                    <option value="Crota's End - Normal (Deathsingers)">Crota's End - Normal (Deathsingers)</option>
                    <option value="Crota's End - Normal (Crota)">Crota's End - Normal (Crota)</option>
                    <option value="Vault of Glass - Normal (Full Raid)">Vault of Glass - Normal (Full Raid)</option>
                    <option value="Vault of Glass - Normal (Any Checkpoint)">Vault of Glass - Normal (Any Checkpoint)</option>
                    <option value="Vault of Glass - Normal (Conflux)">Vault of Glass - Normal (Conflux)</option>
                    <option value="Vault of Glass - Normal (Oracles)">Vault of Glass - Normal (Oracles)</option>
                    <option value="Vault of Glass - Normal (Templar)">Vault of Glass - Normal (Templar)</option>
                    <option value="Vault of Glass - Normal (Gorgon's Labyrinth)">Vault of Glass - Normal (Gorgon's Labyrinth)</option>
                    <option value="Vault of Glass - Normal (Gatekeeper)">Vault of Glass - Normal (Gatekeeper)</option>
                    <option value="Vault of Glass - Normal (Atheon)">Vault of Glass - Normal (Atheon)</option>
                </optgroup>
                <optgroup label="Raid - Hard">
                    <option value="Crota's End - Hard (Full Raid)">Crota's End - Hard (Full Raid)</option>
                    <option value="Crota's End - Hard (Any Checkpoint)">Crota's End - Hard (Any Checkpoint)</option>
                    <option value="Crota's End - Hard (Bridge)">Crota's End - Hard (Bridge)</option>
                    <option value="Crota's End - Hard (Shrieker's Chest)">Crota's End - Hard (Shrieker's Chest)</option>
                    <option value="Crota's End - Hard (Deathsingers)">Crota's End - Hard (Deathsingers)</option>
                    <option value="Crota's End - Hard (Crota)">Crota's End - Hard (Crota)</option>
                    <option value="Vault of Glass - Hard (Full Raid)">Vault of Glass - Hard (Full Raid)</option>
                    <option value="Vault of Glass - Hard (Any Checkpoint)">Vault of Glass - Hard (Any Checkpoint)</option>
                    <option value="Vault of Glass - Hard (Conflux)">Vault of Glass - Hard (Conflux)</option>
                    <option value="Vault of Glass - Hard (Oracles)">Vault of Glass - Hard (Oracles)</option>
                    <option value="Vault of Glass - Hard (Templar)">Vault of Glass - Hard (Templar)</option>
                    <option value="Vault of Glass - Hard (Gorgon's Labyrinth)">Vault of Glass - Hard (Gorgon's Labyrinth)</option>
                    <option value="Vault of Glass - Hard (Gatekeepers)">Vault of Glass - Hard (Gatekeepers)</option>
                    <option value="Vault of Glass - Hard (Atheon)">Vault of Glass - Hard (Atheon)</option>
                </optgroup>
                <optgroup label="Weekly Nightfall Strike">
                    <option value="Weekly Nightfall Strike">Weekly Nightfall Strike</option>
                </optgroup>
                <optgroup label="Weekly Heroic Strike">
                    <option value="Weekly Heroic Strike - Hard">Weekly Heroic Strike - Hard</option>
                    <option value="Weekly Heroic Strike - Medium">Weekly Heroic Strike - Medium</option>
                    <option value="Weekly Heroic Strike - Easy">Weekly Heroic Strike - Easy</option>
                </optgroup>
                <optgroup label="Daily Heroic Story">
                    <option value="Daily Heroic Story - Hard">Daily Heroic Story - Hard</option>
                    <option value="Daily Heroic Story - Medium">Daily Heroic Story - Medium</option>
                    <option value="Daily Heroic Story - Easy">Daily Heroic Story - Easy</option>
                </optgroup>
                <optgroup label="The Dark Below">
                    <option value="Eris Quest">Eris Quest</option>
                    <option value="Eris Bounty - Urzok">Eris Bounty - Urzok</option>
                    <option value="Eris Bounty - Any">Eris Bounty - Any</option>
                </optgroup>
                <optgroup label="Achievements">
                    <option value="Flawless Raider">Flawless Raider</option>
                </optgroup>
                <optgroup label="Exotic Bounties">
                    <option value="Exotic Bounty - Thorn (Kill Xyor)">Exotic Bounty - Thorn (Kill Xyor)</option>
                    <option value="Exotic Bounty - Any">Exotic Bounty - Any</option>
                </optgroup>
                <optgroup label="Strike Playlist">
                    <option value="Strike Playlist - Roc">Strike Playlist - Roc</option>
                    <option value="Strike Playlist - Tiger">Strike Playlist - Tiger</option>
                    <option value="Strike Playlist - Wolf">Strike Playlist - Wolf</option>
                    <option value="Strike Playlist - Viper">Strike Playlist - Viper</option>
                    <option value="Strike Playlist - Eagle">Strike Playlist - Eagle</option>
                </optgroup>
                <optgroup label="Story">
                    <option value="Story - Earth">Story - Earth</option>
                    <option value="Story - Moon">Story - Moon</option>
                    <option value="Story - Venus">Story - Venus</option>
                    <option value="Story - Mars">Story - Mars</option>
                </optgroup>
                <optgroup label="Patrol & Farming">
                    <option value="Mars Exclusion Zone Glimmer Farming">Mars Exclusion Zone Glimmer Farming</option>
                    <option value="Public Event Farming">Public Event Farming</option>
                    <option value="Patrol/Farm - Earth">Patrol/Farm - Earth</option>
                    <option value="Patrol/Farm - Moon">Patrol/Farm - Moon</option>
                    <option value="Patrol/Farm - Venus">Patrol/Farm - Venus</option>
                    <option value="Patrol/Farm - Mars">Patrol/Farm - Mars</option>
                </optgroup>
                <optgroup label="Other">
                    <option value="Social">Social</option>
                </optgroup>
                <optgroup label="PvP">
                    <option value="PvP - General">PvP - General</option>
                    <option value="PvP - 2 Man Team">PvP - 2 Man Team</option>
                    <option value="PvP - 3 Man Team">PvP - 3 Man Team</option>
                    <option value="PvP - 6 Man Team">PvP - 6 Man Team</option>
                    <option value="PvP - Iron Banner">PvP - Iron Banner</option>
                </optgroup>
                <!-- #end select.options.searchActivity -->
            </select>
            </div>
        </div>


        <div class="notesForm"><input type="text" name="notes" maxlength="71" id="notesInput"
                                      placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                      data-allow-tags class="formControl">

           </div>



            <input type="submit" data-loading-text="Saving..." class="submitForm">


</form>