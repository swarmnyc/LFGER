<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal">

    <h2>Submit a Game Request</h2>

    <div class="gamertagForm half">
        <div id="gamertagButton">Who are you?</div>
        <input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
               required class="formControl">

        <div class="levelSubForm">

            <input type="text" name="level" id="levelInput" placeholder="What level are you?"/>

        </div>
    </div>

    <div class="regionForm half"><select id="regionForm" name="region" value="" required class="formControl">
            <option value="">Select region</option>
            <option value="North America"> North America</option>
            <option value="South America"> South America</option>
            <option value="Europe"> Europe</option>
            <option value="Asia"> Asia</option>
            <option value="Australia"> Australia/Oceania</option>

        </select>

        <div id="regionSelector">
            <div id="regionButton">Where are you from?</div>
            <div class="regionChoices">North America</div>
            <div class="regionChoices">South America</div>
            <div class="regionChoices">Europe</div>
            <div class="regionChoices">Asia</div>
            <div class="regionChoices">Australia</div>
        </div>

    </div>
    <div class="platformForm"><select name="platform" id="platformForm" value="" required class="formControl">
            <option value="Steam">Select platform</option>


        </select>


    </div>






    <div class="evenForm"><div id="eventLocator">Where in the game are you?</div>
        <input type="text" name="event" id="eventInput" placeholder="Where can other players find you?"/>

    </div>


    <div class="notesForm"><input type="text" name="notes" maxlength="71" id="notesInput"
                                  placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                  data-allow-tags class="formControl">

    </div>



    <input type="submit" data-loading-text="Saving..." class="submitForm">


</form>