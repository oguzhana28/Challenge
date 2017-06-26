<input type='checkbox' id='form-switch'>
<form id='login-form' action="<?= URL ?>Login/login" method='post'>
        <label class="email">Email:</label>
        <input class="input" type="text" name="Email">
        </br>
        <label class="password">Password:</label>
        <input class="input" type="password" name="Password">
        </br>
  <button class="button" type="submit" value="log in">Login</button>
  <label for='form-switch'><span>Register</span></label>
</form>
<form id='register-form' action="<?= URL ?>login/registerSave" method='post'>
         <div>
            <label>Naam:</label>
            <input class="input" type="text" id="Naam" name="Naam"></input>
        </div>
        </br>
        <div>
            <label>Adres:</label>
            <input class="input" type="text" id="Adres" name="Adres"></input>
        </div>
        </br>
        <div>
            <label>Postcode:</label>
            <input class="input" type="text" id="Postcode" name="Postcode"></input>
        </div>
               </br>
                <div>
            <label>Plaats:</label>
            <input class="input" type="text" id="Plaats" name="Plaats"></input>
        </div>
        </br>
        <div>
            <label>Telefoon:</label>
            <input class="input" type="text" id="Telefoon" name="Telefoon"></input>
        </div>
               </br>
                <div>
            <label>Mobiel:</label>
            <input class="input" type="text" id="Mobiel" name="Mobiel"></input>
        </div>
               </br>
                <div>
            <label>Email:</label>
            <input class="input" type="text" id="Email" name="Email"></input>
        </div>
               </br>
                <div>
            <label>Password:</label>
            <input class="input" type="Password" id="Password" name="Password"></input>
        </div>
        <div>
            <input type="submit" name="submit" value="save"></input>
        </div>
  <label for='form-switch'>Already Member ? Sign In Now..</label>
</form>