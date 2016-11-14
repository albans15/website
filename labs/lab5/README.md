**Samantha Albano - Lab 5 - October 26, 2016**

> **Part 0**

A new folder for lab 5 has been created and is being served by Apache. Every folder in my websys directory should be able to be accessed by websys/ which brings you to the index.html page (I am still trying to get my ajax GET request to show the xml file on this page).

> **Part 1**

For part 1, I used what you showed us in class when we started the lab, and also the 2 sources cited below to bind the event handler to the part element #foo. 

> **Part 2**

    Optimization

-moved JavaScript to the end of code so that it won't slow down the page from loading the html/css

-deleted the style tag at the bottom which was in the div inside the body..added it in the appropriate section in the head where CSS should be placed so that it loads with the html

-deleted the background set to the image of a blue picture because this just unreasonably slows down the page...should just be a solid color using CSS

-made my css and javascript external files and referenced them in the head of the html doc to clean up the document and prevent it from slowing down the page...although separating the files increases the HTTP requests and connections needed to be made by the user, I feel it is important to separate the code from the HTML (plus we have been advised to have separate style sheets for our assignments). Doing this makes the HTML, CSS, and JavaScript easier to read and maintain, and gives the option to be easily used in other HTML docs. Plus the cached js can speed up the page loading.

-deleted any white space like line breaks and excess spacing to try to minimize size of code so the files are smaller

-went further with the step above and used compressing tools to compress and minify the code:
(2 versions of this lab are in the zip file, a readable one and a compressed one)

**https://jscompress.com/**

**http://www.textfixer.com/html/compress-html-compression.php**

**http://csscompressor.com/**

    Creativity

-adding a background color of orange (kind of Halloween themed) to the ul id with a max width set to 400px so the background color only covers where the text is; the rest of the space on the page is white

-made "show all" a button to make the page more intuitive and appealing 

-made the li have no style type, it seemed to clean up the page more

-made the font all calibri, for again, it seemed to clean up the page more

***Sources***

https://learn.jquery.com/events/event-delegation/

https://learn.jquery.com/events/triggering-event-handlers/
