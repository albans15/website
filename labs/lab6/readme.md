**Samantha Albano - Lab 6 - November 2, 2016**

> Part 1

In part 1, I added the sub-classes for subtraction, multiplication, division, cube, and factorial. I chose to structure my code in a different way to make the calculator more intuitive for the user. I have two abstract classes (Operation1 and Operation2). Operation1 contains those sub-classes that require 2 operands, so addition, subtraction, multiplication, and division. Operation2 contains those sub-classes that only require 1 operand, so cube and factorial. Rather than group all of the sub-classes together and the 2 abstract classes together, I put them in a more chronological way. Abstract class Operation1 is followed by all of its sub-classes, which are then followed by abstract class Operation2 and its sub-classes.

*I used the following for help with my factorial sub-class: http://stackoverflow.com/questions/23501720/how-to-return-a-value-in-php-factorial-program 

*I used the following for help with my cube sub-class:
http://code.runnable.com/VMJgE6WFptYJoQtz/square-and-cube-while-for-php



> Part 2

As instructed in part 2, I instantiated a new object corresponding to the given operation and the operand(s) provided. I used elseif statements, and simply wrote them in the order in which the buttons appear on the calculator. For my sub-classes of Operation1, you can see 2 operands are required, and for the sub-classes of Operation2, only the one operand is required. To do this for Operation2, I had to create the new operand input field to be requested and then used to POST---I used 'o', and left the other 2 operand input fields for Operation1 as 'op1' and 'op2'. I kept the code in the same place that was suggested - it made sense.

> Creativity

For creativity, I styled the calculator as an actual calculator would look. I used the symbols for the operation buttons, changed the code around so that each operation had the required amount of operands (helps with usability and display), and added the placeholders which indicate to the user what should be inputted. In terms of layout, the operation buttons are lined up on the right like a normal calculator and the result is displayed at the top. I also shrunk the size of the calculator so it didn't take up the entire page, added a border, the results "banner", and a horizontal line dividing the calculator so its clear which buttons go with which set of inputs. I used CSS for all of my styling rather than a jQuery UI.

*To style my buttons, I used the following:
http://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_buttons_animate3


    ANSWERS TO QUESTIONS

I have the two main abstract classes (Operation1 and Operation2) that provide the basis for my sub-classes. My sub-classes use the operate() and getEquation() methods defined in my abstract classes. From there on, each of my sub-classes differ from one another according to the type of operation they're running. My sub-classes that use the 2 operands are set up almost identically, whereas I had to define some new properties in my sub-classes for cube and factorial.

Clicking an operation button is what invokes the methods in my classes. If no operands are inputted and a button is clicked, the calculator tries to request and execute the operate() and getEquation() methods, however cannot due to no numeric value inputted, and displays the error message.

If the operand(s) are present, the calculator will invoke the methods of the sub-class which pertains to the operation button clicked and the 2 methods of the abstract class stated above. 

Using $_ GET allows actions to be placed in a link via the URL parameters, whereas $_ POST passes values invisibly via the HTTP POST method. I think $_ POST is more preferable in this case because we are inserting values into the function of the sub-classes, not retrieving or requesting them.

In terms of determining which button has been pressed and taking the appropriate actions, you could use JavaScript and apply an alert to the id of the button that was clicked. 