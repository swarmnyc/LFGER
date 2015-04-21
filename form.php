<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-6"><select name="region" value="" required class="form-control">
                <option value="">Select region</option>
                <option value="North America"> North America</option>
                <option value="South America"> South America</option>
                <option value="Europe"> Europe</option>
                <option value="Asia"> Asia</option>
                <option value="Australia"> Australia/Oceania</option>

            </select></div>
        <div class="col-sm-6"><select name="platform" value="" required class="form-control">
                <option value="">Select platform</option>
                <option value="xbox360"> Xbox 360</option>
                <option value="xbox1"> Xbox One</option>
                <option value="ps3"> Playstation 3</option>
                <option value="ps4"> Playstation 4</option>
            </select></div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-xs-8"><input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
                                               required class="form-control"></div>
        <div class="col-sm-2 col-xs-4"> <div class="col-sm-2 col-xs-4"><select name="level" required class="form-control">
                    <option value="">Level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                </select></div>
    </div>

    <div class="form-group">
        <div class="col-sm-12"><select name="event" value="" required class="form-control">
                <option value="">Select an Event</option>
                <option value="Raids">Raids</option>
                <option value="Crota's End">Crota's End</option>
                <option value="Crota's End - Hard Mode">Crota's End - Hard Mode</option>
                <option value="Crota's End - Hard - Fresh">Crota's End - Hard - Fresh</option>
                <option value="Crota's End - Hard - Abyss">Crota's End - Hard - Abyss</option>
                <option value="Crota's End - Hard - Bridge">Crota's End - Hard - Bridge</option>
                <option value="Crota's End - Hard - Thrallway">Crota's End - Hard - Thrallway</option>
                <option value="Crota's End - Hard - Ir Yut">Crota's End - Hard - Ir Yut</option>
                <option value="Crota's End - Hard - Crota">Crota's End - Hard - Crota</option>
                <option value="Crota's End - Normal Mode">Crota's End - Normal Mode</option>
                <option value="Crota's End - Normal - Fresh">Crota's End - Normal - Fresh</option>
                <option value="Crota's End - Normal - Abyss">Crota's End - Normal - Abyss</option>
                <option value="Crota's End - Normal - Bridge">Crota's End - Normal - Bridge</option>
                <option value="Crota's End - Normal - Thrallway">Crota's End - Normal - Thrallway</option>
                <option value="Crota's End - Normal - Ir Yut">Crota's End - Normal - Ir Yut</option>
                <option value="Crota's End - Normal - Crota">Crota's End - Normal - Crota</option>
                <option value="Crota's End - Exploration">Crota's End - Exploration</option>
                <option value="Crota's End - Flawless Raider">Crota's End - Flawless Raider</option>
                <option value="Vault of Glass">Vault of Glass</option>
                <option value="Vault of Glass - Hard Mode">Vault of Glass - Hard Mode</option>
                <option value="Vault of Glass - Hard - Fresh">Vault of Glass - Hard - Fresh</option>
                <option value="Vault of Glass - Hard - Confluxes">Vault of Glass - Hard - Confluxes</option>
                <option value="Vault of Glass - Hard - Oracles">Vault of Glass - Hard - Oracles</option>
                <option value="Vault of Glass - Hard - Templar">Vault of Glass - Hard - Templar</option>
                <option value="Vault of Glass - Hard - Gorgon Maze">Vault of Glass - Hard - Gorgon Maze</option>
                <option value="Vault of Glass - Hard - Gatekeeper">Vault of Glass - Hard - Gatekeeper</option>
                <option value="Vault of Glass - Hard - Atheon">Vault of Glass - Hard - Atheon</option>
                <option value="Vault of Glass - Normal Mode">Vault of Glass - Normal Mode</option>
                <option value="Vault of Glass - Normal - Fresh">Vault of Glass - Normal - Fresh</option>
                <option value="Vault of Glass - Normal - Confluxes">Vault of Glass - Normal - Confluxes</option>
                <option value="Vault of Glass - Normal - Oracles">Vault of Glass - Normal - Oracles</option>
                <option value="Vault of Glass - Normal - Templar">Vault of Glass - Normal - Templar</option>
                <option value="Vault of Glass - Normal - Gorgon Maze">Vault of Glass - Normal - Gorgon Maze</option>
                <option value="Vault of Glass - Normal - Gatekeeper">Vault of Glass - Normal - Gatekeeper</option>
                <option value="Vault of Glass - Normal - Atheon">Vault of Glass - Normal - Atheon</option>
                <option value="Vault of Glass - Exploration">Vault of Glass - Exploration</option>
                <option value="Vault of Glass - Flawless Raider">Vault of Glass - Flawless Raider</option>
                <option value="Strikes">Strikes</option>
                <option value="Weekly Nightfall Strike">Weekly Nightfall Strike</option>
                <option value="Weekly Heroic Strike">Weekly Heroic Strike</option>
                <option value="Weekly Heroic Strike - Level 30">Weekly Heroic Strike - Level 30</option>
                <option value="Weekly Heroic Strike - Level 28">Weekly Heroic Strike - Level 28</option>
                <option value="Weekly Heroic Strike - Level 24">Weekly Heroic Strike - Level 24</option>
                <option value="Strike Playlist">Strike Playlist</option>
                <option value="Strike Playlist - Dragon (28)">Strike Playlist - Dragon (28)</option>
                <option value="Strike Playlist - Roc (26)">Strike Playlist - Roc (26)</option>
                <option value="Strike Playlist - Tiger (24)">Strike Playlist - Tiger (24)</option>
                <option value="Strike Playlist - Wolf (22)">Strike Playlist - Wolf (22)</option>
                <option value="Strike Playlist - Viper (20)">Strike Playlist - Viper (20)</option>
                <option value="Strike Playlist - Eagle (18)">Strike Playlist - Eagle (18)</option>
                <option value="The Devil's Lair">The Devil's Lair</option>
                <option value="The Summoning Pits">The Summoning Pits</option>
                <option value="The Nexus">The Nexus</option>
                <option value="Winter's Run">Winter's Run</option>
                <option value="Cerberus Vae III">Cerberus Vae III</option>
                <option value="Dust Palace">Dust Palace</option>
                <option value="The Undying Mind">The Undying Mind</option>
                <option value="The Will of Crota">The Will of Crota</option>
                <option value="Farming">Farming</option>
                <option value="Exclusion Zone Farm">Exclusion Zone Farm</option>
                <option value="Will of Crota Farm">Will of Crota Farm</option>
                <option value="Patrol Bounty Farm">Patrol Bounty Farm</option>
                <option value="Bounties">Bounties</option>
                <option value="Xyur the Unwed">Xyur the Unwed</option>
                <option value="Urzok the Hated">Urzok the Hated</option>
                <option value="Queen's Kill Order">Queen's Kill Order</option>
                <option value="Story">Story</option>
                <option value="Daily Heroic Story">Daily Heroic Story</option>
                <option value="Daily Heroic Story - Level 30">Daily Heroic Story - Level 30</option>
                <option value="Daily Heroic Story - Level 28">Daily Heroic Story - Level 28</option>
                <option value="Daily Heroic Story - Level 24">Daily Heroic Story - Level 24</option>
                <option value="Story - The Dark Below">Story - The Dark Below</option>
                <option value="Story - Earth">Story - Earth</option>
                <option value="Story - Moon">Story - Moon</option>
                <option value="Story - Venus">Story - Venus</option>
                <option value="Story - Mars">Story - Mars</option>
                <option value="Patrol">Patrol</option>
                <option value="Patrol - Public Events Farm">Patrol - Public Events Farm</option>
                <option value="Patrol - Earth">Patrol - Earth</option>
                <option value="Patrol - Moon">Patrol - Moon</option>
                <option value="Patrol - Venus">Patrol - Venus</option>
                <option value="Patrol - Mars">Patrol - Mars</option>
                <option value="Crucible">Crucible</option>
                <option value="Crucible - Trials of Osiris">Crucible - Trials of Osiris</option>
                <option value="Crucible - Iron Banner">Crucible - Iron Banner</option>
                <option value="Crucible - Control">Crucible - Control</option>
                <option value="Crucible - Clash">Crucible - Clash</option>
                <option value="Crucible - Rumble">Crucible - Rumble</option>
                <option value="Crucible - Skirmish">Crucible - Skirmish</option>
                <option value="Crucible - Salvage">Crucible - Salvage</option>
                <option value="Crucible - Combined Arms">Crucible - Combined Arms</option>
                <option value="Clan recruitment">Clan recruitment</option>
                <option value="Other (explain in notes)">Other (explain in notes)</option>
            </select></div>
    </div>
    <div class="form-group">
        <div class="col-sm-12"><input type="text" name="notes" maxlength="71"
                                      placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                      data-allow-tags class="form-control">

           </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <button type="submit" data-loading-text="Saving..." class="btn btn-lg btn-block btn-primary">Save</button>
        </div>
    </div>
</form>