<!DOCTYPE html>
<html lang="en">
<head><?php    include "phpstuff/header.inc.php";?>
<script src="scripts/storedinfo.js"></script>
</head>
<body class="banner">
    <?php    include "phpstuff/menu.inc.php";?>
    <main>
    <?php require "phpstuff/settings.php";?>
    <p></p>
        <section class="content">
            <h3>Payment Info</h3>
            <p id="infoDump">Missing Cache</p>
            <form id="payinfo" method="post" action="dbtest.php" novalidate="novalidate">
                <label for="cardtype">Please Select Credit Card Type:</label>
                <p><select name="cardtype" id="cardtype" required="required">
                    <option value="visa">Visa</option>
                    <option value="mstcard">Mastercard</option>
                    <option value="usaexpress">American Express</option>
                </select></p>
                <label for="crdname">Card Holder Name:</label>
                <p><input type="text" name= "crdname" id="crdname" required="required" /></p>
                <label for="crdnumber">Credit Card Number:</label>
                <p><input type="text" name="crdnumber" id="crdnumber" required="required" /></p>                        
                <label for="crdexpire">Expiry Date:</label>
                <p><input type="text" name="crdexpire" id="crdexpire" required="required" /></p>                        
                <label for="crdccv">CCV:</label>
                <p><input type="text" name="crdccv" id="crdccv" required="required" /></p>
                
                <input type="submit" value="Purchas"/>
                <input type="reset" value="Cancel Order"/>                       
            </form>
        </section>
    </main>

    <?php include "phpstuff/footer.inc.php"; ?>
</body>
</html>