<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal">

    <h2>Submit a Game Request</h2>

    <div class="gamertagForm">
        <div class="inputType">Who Are You?</div>
        <input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
               required class="formControl">

        <div class="levelSubForm">

            <input type="text" name="level" id="levelInput" placeholder="What level are you?"/>

        </div>
    </div>

    <div class="regionForm">

        <div class="inputType">Where are you from?</div>
        <select id="regionForm" name="region" value="" required class="formControl">
            <option value="">Select region</option>
            <option value="North America"> North America</option>
            <option value="South America"> South America</option>
            <option value="Europe"> Europe</option>
            <option value="Asia"> Asia</option>
            <option value="Australia"> Australia/Oceania</option>

        </select>



    </div>
    <div class="platformForm hidden">


        <select name="platform" id="platformForm" value="" required class="formControl">
            <option value="Steam">Select platform</option>


        </select>


    </div>






    <div class="evenForm">
        <div class="inputType">Where are you in the game?</div>
        <input type="text" name="event" id="eventInput" placeholder="Where can other players find you?"/>

    </div>

    <div class="inputType">Any additional information?</div>
    <div class="notesForm">

        <input type="text" name="notes" maxlength="71" id="notesInput"
                                  placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                  data-allow-tags class="formControl">

    </div>



    <input type="submit" data-loading-text="Saving..." class="submitForm">


</form>