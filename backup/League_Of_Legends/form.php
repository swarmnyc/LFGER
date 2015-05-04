<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal">

    <h2>Find Someone to Play With</h2>

    <div class="gamertagForm">
        <div id="gamertagButton"><h4>1. Who are you?</h4></div>
        <input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
               required class="formControl">

        <div class="levelSubForm">

            <input type="text" name="level" id="levelInput" placeholder="What level are you?"/>

        </div>
    </div>

    <div class="regionForm"><select id="regionForm" name="region" value="" required class="formControl">
            <option value="">Select region</option>
            <option value="North America"> North America</option>
            <!-- <option value="South America"> South America</option> -->
            <option value="Europe"> Europe</option>
            <!--  <option value="Asia"> Asia</option> -->
            <option value="Australia"> Australia/Oceania</option>

        </select>

        <div id="regionSelector">
            <div id="regionButton"><h4>2. Where are you from?</h4></div>
            <div class="regionChoices">North America</div>
            <div class="regionChoices">Europe</div>
            <div class="regionChoices">Australia</div>
            <!--	<div class="regionChoices">South America</div>
                <div class="regionChoices">Asia</div>
                <div class="regionChoices">Africa</div>  -->
        </div>

    </div>
<select name="platform" id="platformForm" value="" required class="formControl">
            <option value="PC">PC</option>


        </select>





    <div class="evenForm"><div id="eventLocator"><h4>Where in the game are you?</h4></div>
        <input type="text" name="event" id="eventInput" placeholder="Where can other players find you?"/>

    </div>


    <div class="notesForm"><input type="text" name="notes" maxlength="71" id="notesInput"
                                  placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                  data-allow-tags class="formControl">

    </div>



    <input type="submit" data-loading-text="Saving..." class="submitForm">


</form>