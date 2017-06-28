<h2 style="text-align: center;">Register!</h2>
<br>
<form id='register-form' action="<?= URL ?>login/registerSave" method='post'>
    <label>Naam:</label>
    <input class="input" type="text" id="Naam" name="Name"></input>
    <br>
    <br>
    <label>Adres:</label>
    <input class="input" type="text" id="Adres" name="Adress"></input>
            <br>
            <br>
    <label>Postcode:</label>
    <input class="input" type="text" id="Postcode" name="PostalCode"></input>
            <br>
            <br>
    <label>Plaats:</label>
    <input class="input" type="text" id="Plaats" name="City"></input>
            <br>
            <br>
    <label>Telefoon:</label>
    <input class="input" type="text" id="Telefoon" name="Phone"></input>
            <br>
            <br>
    <label>Mobiel:</label>
    <input class="input" type="text" id="Mobiel" name="Cell"></input>
            <br>
            <br>
    <label>Email:</label>
    <input class="input" type="email" id="Email" name="Email"></input>
            <br>
            <br>
    <label>Password:</label>
    <input class="input" type="Password" id="Password" name="Password"></input>
            <br>
            <br>
    <input type="submit" name="submit" value="save" style="float: none;"></input>
</form>
