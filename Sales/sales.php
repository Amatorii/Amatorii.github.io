<!DOCTYPE html>
<html lang="en">
<head>
<?php    include "phpstuff/header.inc.php";?>
<meta charset="utf-8" />
    <meta name="description" content="Index page for Assignment 1" />
    <meta name="keywords" content="HTML5, CSS, Product, Service" />
    <meta name="author" content="Hamish Luke - 103607352"  />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Team Grotle Website - Sales and Product Level</title>
</head>
</head>
<body class="banner">
<header class="navbar">
<?php require '../phpstuff/menu2.inc.php';?>
<ul>
    <li><a href="../index.php">Home</a></li>
    <li><a href="../Member/member.php">Member Page</a></li>
    <li><a href="../Sales/sales.php">Sales / Product Level</a></li>
    <li><a href="../Report/report.php">Reports</a></li>
</ul>
</header>
<section class = "content">
    <main>
        <h2> 
            <p>Please enter the members details below</p> 
        </h2> 

        <h3> 
            <h:form> 
                <h:panelGrid columns="2"> 
                    <h:outputText value="Member Id: "/> 
                    <h:inputText id="memberid" value="#{myuserManagedBean.memberid}" 
                                required="true" 
                                requiredMessage="The memberid field cannot be empty!" 
                                size="6" /> 

                    <h:outputText value="Name: "/> 
                    <h:inputText id="name" value="#{myuserManagedBean.name}" 
                                required="true" 
                                requiredMessage="The name field cannot be empty!" 
                                size="30"/>

                    <h:outputText value="Email: "/> 
                    <h:inputText id="email" value="#{myuserManagedBean.email}" 
                                required="true" 
                                requiredMessage="The email field cannot be empty!" 
                                size="30" /> 

                    <h:outputText value="Telephone: "/> 
                    <h:inputText id="phone" value="#{myuserManagedBean.phone}" 
                                required="true" 
                                requiredMessage="The telephone field cannot be empty!" 
                                size="10" /> 

                    <h:outputText value="Address: "/> 
                    <h:inputText id="address" value="#{myuserManagedBean.address}" 
                                required="true" 
                                requiredMessage="The email field cannot be empty!" 
                                size="30" />       

                    <h:outputText value="Post code: "/> 
                    <h:inputText id="postcode" value="#{myuserManagedBean.postcode}" 
                                required="true" 
                                requiredMessage="The Post Code field cannot be empty!" 
                                size="60"/> 
                </h:panelGrid> 
                <p></p> 

                <h:commandButton id="submit" value="Submit" 
                                action="#{myuserManagedBean.addmember}" /> 
            </h:form> 
        </h3> 
</main>
</section>
</body>
</html>