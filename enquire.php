<!DOCTYPE html>
<html lang="en">
<head><?php    include "phpstuff/header.inc.php";?>
<script src="scripts/storeInfo.js"></script>
</head>
<body class="banner">
<?php    include "phpstuff/menu.inc.php";?>
    <main>
        <section class="content">
            <h3>Enquireries</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione accusamus aperiam aliquid consequuntur nihil pariatur minus ducimus a assumenda dignissimos quas ipsum rem iste saepe repudiandae at, animi praesentium excepturi exercitationem ea quod facilis rerum! Voluptates, sit consequatur! Eius temporibus reprehenderit maiores!</p>
            <form id="details" method="post" action="payment.php" novalidate="novalidate">
                <fieldset>
                    <legend>Enquiry Form</legend>
                    <p><label for="name1">Given Name</label> 
                        <input type="text" name= "name1" id="name1" maxlength="25" size="10" pattern="^[a-zA-Z]+$" required="required"/></p>
                        <p><label for="name2">Family Name</label> 
                        <input type="text" name= "name2" id="name2" maxlength="25" size="10" pattern="^[a-zA-Z]+$" required="required"/></p>
                        <p><label for="email">Prefered Email: </label>
                        <input type="text" name="email" id="email" required="required"/>
                    </p>
                    <fieldset>
                        <legend>Adress</legend>
                        <p>
                            <label for="street">Street: </label>
                            <input type="text" name="street" id="street" maxlength="40" required="required"></p>
                            <p><label for="suburb">Suburb / Town: </label>
                            <input type="text" name="suburb" id="suburb" maxlength="20" pattern="^[a-zA-Z]+$" required="required"></p>
                            <p><label for="state">State: </label>
                            <select name="state" id="state" required="required">
                                <option value="">Please Select Your State</option>
                                <option value="VIC">VIC</option>
                                <option value="NSW">NSW</option>
                                <option value="QLD">QLD</option>
                                <option value="NT">NT</option>
                                <option value="WA">WA</option>
                                <option value="SA">SA</option>
                                <option value="TAS">TAS</option>
                                <option value="ACT">ACT</option>
                           </select></p>
                            <p><label for="pstcode">Postcode: </label>
                            <input type="text" name="pstcode" id="pstcode" maxlength="4" minlength="4" size="4" pattern="^[0-9]+$" required="required">
                        </p>
                    </fieldset>
                    <p><label for="ph">Phone Number: </label>
                        <input type="text" name="ph" id="ph" placeholder="0000-000-000" maxlength="10" size="10" pattern="([(+]*[0-9]+[()+. -]*)" required="required"></p>
                        <p>Preferred Contact: </p>
                        <p><label for="cemail">Email</label> 
                            <input type="radio" id="cemail" name="pc" value="cemail" checked="checked"/>
                        <label for="cpost">Post</label> 
                            <input type="radio" id="cpost" name="pc" value="cpost"/>
                        <label for="cph">Phone</label> 
                            <input type="radio" id="cph" name="pc" value="cph"/>
                        </p>
                    <p><label for="droom">Chose Which Conference Hall You Would Like to Book: </label></p>
                    <p><select name="droom" id="droom" required="required">
                        <option value="">Select</option>
                        <option value="r1">Kew - $30h</option>
                        <option value="r2">Hawthorn East - $40h</option>
                        <option value="r3">Telopea Downs - $330h</option>
                    </select></p>
                    <p><label for="timespent">How long do you need the room?</label></p>
                    <p><select name="timespent" id="timespent" required="required">
                        <option value="">Please Chose</option>
                        <option value="1">1 h</option>
                        <option value="2">2 h</option>
                        <option value="3">3 h</option>
                        <option value="4">4 h</option>
                        <option value="5">5 h</option>
                        <option value="6">6 h</option>
                        <option value="7">7 h</option>
                        <option value="8">8 h</option>
                        <option value="9">9 h</option>
                        <option value="10">10 h</option>
                        <option value="11">11 h</option>
                        <option value="12">12 h</option>
                        <option value="13">13 h</option>
                        <option value="14">14 h</option>
                        <option value="15">15 h</option>
                    </select></p>
                    <p><label for="pplattending">How many people will be attending?</label></p>
                    <p><input type="text" name="pplattending" id="pplattending" required="required" maxlength="2" size="2" pattern="^\+?([1-9]\d{0,1})$" /></p>
                    <p>What Addons Would You Like?</p>
                    <p><label for="water">Water - $4 per person</label>
                    <input type="checkbox" id="water" name="category[]" value="add"></p>
                    <p><label for="foood">Catering  - $40 per person</label>
                    <input type="checkbox" id="foood" name="category[]" value="add"></p>
                    <p><label for="rub">Projector  - $50 h</label>
                    <input type="checkbox" id="rub" name="category[]" value="add"></p>
                    <p><label for="com">Comments</label></p>
                    <p>    
                    <textarea id="com" name="com" placeholder="Any other infomation ..." rows="4" cols="40"></textarea>
                    </p>
                    <input type="submit" value="Pay Now"/>
                    <input type="reset" value="Reset Form"/>
                </fieldset>
            </form>
        </section>
    </main>

    <?php include "phpstuff/footer.inc.php"; ?>
</body>
</html>