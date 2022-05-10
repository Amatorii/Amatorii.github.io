<!DOCTYPE html>
<html lang="en">
<head><?php   include "phpstuff/header.inc.php";?></head>
<body class="banner">
<?php    include "phpstuff/menu.inc.php";?>
    <main>
        <section class="content">
            <h3>Enhancements Made</h3>
            <ol>
                <li>
                    Animated Nav lines<br> If you mouse over the nav buttons (Home, Product ect) a colored line will animate to underline the highlighted button. This works on all pages even this one (try it!)<br>While this small adjustment may seem trivial, it implaments css animation and hover effects which haven't been touched yet. I needed to first specify in the psudo class {::after} the dimentions, position and properties of the bars as well as the type of animation and how long it would take. Then in a seperate psudo class {:hover::after} I changed the width to 100% so when the item is hovered over, the bar would reveal itself. I learned how to implement this through a YouTube tutorial: <a href="https://www.youtube.com/watch?v=PgAZ8KzfhO8">https://www.youtube.com/watch?v=PgAZ8KzfhO8.</a> This tutorial also helped me with the layout of my index page as well as the overall template of my website as elaborated upon in the following bullet points.<br>
                </li>
                <li>
                    Display: Flex Formatting<br>
                    <p>A lot more advanced and more practical than my last enhancement, a lot of elements in my website are formatted using Flex Boxing (Link to video explanation: <a href="https://www.youtube.com/watch?v=fYq5PXgSsbE">https://www.youtube.com/watch?v=fYq5PXgSsbE</a>).<br>
                    <p>While this technique is used in the majority of my pages, the quickest example of this is in my Nav bar, as that has been formatted using Flex Boxing. The best example of my utilization of this is in my Product page. Here I've stacked two section tages on top of eachother while having an aside tag be on the side of the main body. This required the use of several properties listed in my style sheet. In adition to the aformentioned video on Flex Boxing, I also used the video in my first enhancement to help me with formatting.<br>
                </li>
                <li>
                    Fixed Background Image / Transparent Gradient<br>As the title implies, as you scroll down my web pages, while the text will move, the background image will remain fixed. I also applied a gradient to the image so it isn't so bright, I also specified what image I wanted for the background in the css as well which I don't beleive has been covered in the tutorials. The static background graphic was acomplished by adding the attribute {background-attatchment: fixed}. For the gradient and consistant image I used the attribute {background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url(img3.jpg);} I learned the gradient technique in the video specified in the first enhancement and as for how to keep the background image in place I learnt how do do that from this video: <a href="https://www.youtube.com/watch?v=eSaMKlDHPGQ">https://www.youtube.com/watch?v=eSaMKlDHPGQ</a><br>
                </li>
            </ol>
        </section>
    </main>

    <?php include "phpstuff/footer.inc.php"; ?>
</body>
</html>