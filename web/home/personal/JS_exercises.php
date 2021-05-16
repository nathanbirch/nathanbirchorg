<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <title>JavaScript Exercises</title>
    <meta name="description" contect="EDIT:PURPOSE OF THIS WEBPAGE">
    <meta name="author" content="Nathan Birch">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/home/css/primary.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <!-- favicon --><link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAPv/AAAAAAADwAAAD/AAABw4AAA73AAAN+wAAHfuAAB//gAAeZ4AAHmeAAA//AAAP/wAAB/4AAAP8AAAA8AAAAAAAAD8PwAA8A8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAgAEAAIABAADAAwAA4AcAAPAPAAD8PwAA" rel="icon" type="image/x-icon" />
</head>
<body>
 <!-- Include the header.php file for the top navigation bar -->
 <header role="banner">
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/header.php';  ?>  
  </div>
 </header>
<div>
 <main class="container">
     <h1>A Smarter Way to Learn JavaScript Index of Exercises</h1><br>
     <!-- <button type="button" onclick="loadText()"> Display </button><br><br> -->
    <p id="printArray"></p>
  <!-- <p style="float:left; max-width:48%">
    <img src="c.png" id="c">1. <a href="http://www.asmarterwaytolearn.com/js/1.html" target="_blank">Alerts</a><br>
    <img src="c.png" id="c">2. <a href="http://www.asmarterwaytolearn.com/js/2.html" target="_blank">Variables for Strings</a><br>
    <img src="g.png" id="c">3. <a href="http://www.asmarterwaytolearn.com/js/3.html" target="_blank">Variables for Numbers</a><br>
    <img src="g.png" id="c">4. <a href="http://www.asmarterwaytolearn.com/js/4.html" target="_blank">Variable Names Legal and Illegal</a><br>
    <img src="g.png" id="c">5. <a href="http://www.asmarterwaytolearn.com/js/5.html" target="_blank">Math Expressions:  familiar operators</a><br>
    <img src="g.png" id="c">6. <a href="http://www.asmarterwaytolearn.com/js/6.html" target="_blank">Math Expressions: unfamiliar operators</a><br>
    <img src="g.png" id="c">7. <a href="http://www.asmarterwaytolearn.com/js/7.html" target="_blank">Math Expressions: eliminating ambiguity</a><br>
    <img src="g.png" id="c">8. <a href="http://www.asmarterwaytolearn.com/js/8.html" target="_blank">Concatenating text strings</a><br>
    <img src="g.png" id="c">9. <a href="http://www.asmarterwaytolearn.com/js/9.html" target="_blank">Prompts</a><br>
    <img src="g.png" id="c">10. <a href="http://www.asmarterwaytolearn.com/js/10.html" target="_blank"><em>if</em> statements</a><br>
    <img src="g.png" id="c">11. <a href="http://www.asmarterwaytolearn.com/js/11.html" target="_blank">Comparison operators</a><br>
    <img src="g.png" id="c">12. <a href="http://www.asmarterwaytolearn.com/js/12.html" target="_blank"><em>if...else</em> and <em>else if </em>statements</a><br>
    <img src="g.png" id="c">13. <a href="http://www.asmarterwaytolearn.com/js/13.html" target="_blank">Testing sets of conditions</a><br>
    <img src="g.png" id="c">14. <a href="http://www.asmarterwaytolearn.com/js/14.html" target="_blank"><em>if</em> statements nested</a><br>
    <img src="g.png" id="c">15. <a href="http://www.asmarterwaytolearn.com/js/15.html" target="_blank">Arrays</a><br>
    <img src="g.png" id="c">16. <a href="http://www.asmarterwaytolearn.com/js/16.html" target="_blank">Arrays: adding and removing elements</a><br>
    <img src="g.png" id="c">17. <a href="http://www.asmarterwaytolearn.com/js/17.html" target="_blank">Arrays: removing, inserting, and extracting elements</a><br>
    <img src="g.png" id="c">18. <a href="http://www.asmarterwaytolearn.com/js/18.html" target="_blank"><em>for</em> loops</a><br>
    <img src="g.png" id="c">19. <a href="http://www.asmarterwaytolearn.com/js/19.html" target="_blank"><em>for </em>loops: flags, Booleans, array length, and loopus interruptus</a><br>
    <img src="g.png" id="c">20. <a href="http://www.asmarterwaytolearn.com/js/20.html" target="_blank"><em>for</em> loops nested</a><br>
    <img src="g.png" id="c">21. <a href="http://www.asmarterwaytolearn.com/js/21.html" target="_blank">Changing case</a><br>
    <img src="g.png" id="c">22. <a href="http://www.asmarterwaytolearn.com/js/22.html" target="_blank">Strings: measuring length and extracting parts</a><br>
    <img src="g.png" id="c">23. <a href="http://www.asmarterwaytolearn.com/js/23.html" target="_blank">Strings: finding segments</a><br>
    <img src="g.png" id="c">24. <a href="http://www.asmarterwaytolearn.com/js/24.html" target="_blank">Strings: finding a character at a location</a><br>
    <img src="g.png" id="c">25. <a href="http://www.asmarterwaytolearn.com/js/25.html" target="_blank">Strings: replacing characters</a><br>
    <img src="g.png" id="c">26. <a href="http://www.asmarterwaytolearn.com/js/26.html" target="_blank">Rounding numbers</a><br>
    <img src="g.png" id="c">27. <a href="http://www.asmarterwaytolearn.com/js/27.html" target="_blank">Generating random numbers</a><br>
    <img src="g.png" id="c">28. <a href="http://www.asmarterwaytolearn.com/js/28.html" target="_blank">Converting strings to integers and decimals</a><br>
    <img src="g.png" id="c">29. <a href="http://www.asmarterwaytolearn.com/js/29.html" target="_blank">Converting strings to numbers,  numbers to strings</a><br>
    <img src="g.png" id="c">30. <a href="http://www.asmarterwaytolearn.com/js/30.html" target="_blank">Controlling the length of decimals</a><br>
    <img src="g.png" id="c">31. <a href="http://www.asmarterwaytolearn.com/js/31.html" target="_blank">Getting the current date and time</a><br>
    <img src="g.png" id="c">32. <a href="http://www.asmarterwaytolearn.com/js/32.html" target="_blank">Extracting parts of the date and time</a><br>
    <img src="g.png" id="c">33. <a href="http://www.asmarterwaytolearn.com/js/33.html" target="_blank">Specifying a date and time</a><br>
    <img src="g.png" id="c">34. <a href="http://www.asmarterwaytolearn.com/js/34.html" target="_blank">Changing elements of a date and time</a><br>
    <img src="g.png" id="c">35. <a href="http://www.asmarterwaytolearn.com/js/35.html" target="_blank">Functions</a><br>
    <img src="g.png" id="c">36. <a href="http://www.asmarterwaytolearn.com/js/36.html" target="_blank">Functions: passing them data</a><br>
    <img src="g.png" id="c">37. <a href="http://www.asmarterwaytolearn.com/js/37.html" target="_blank">Functions: passing data back from them</a><br>
    <img src="g.png" id="c">38. <a href="http://www.asmarterwaytolearn.com/js/38.html" target="_blank">Functions: local vs. global variables</a><br>
    <img src="g.png" id="c">39. <a href="http://www.asmarterwaytolearn.com/js/39.html" target="_blank"><em>switch</em> statements: how to start them</a><br>
    <img src="g.png" id="c">40. <a href="http://www.asmarterwaytolearn.com/js/40.html" target="_blank"><em>switch</em> statements: how to complete them</a><br>
    <img src="g.png" id="c">41. <a href="http://www.asmarterwaytolearn.com/js/41.html" target="_blank"><em>while</em> loops</a><br>
    <img src="g.png" id="c">42. <a href="http://www.asmarterwaytolearn.com/js/42.html" target="_blank"><em>do...while</em> loops</a><br>
    <img src="g.png" id="c">43. <a href="http://www.asmarterwaytolearn.com/js/43.html" target="_blank">Placing scripts</a><br>
    <img src="g.png" id="c">44. <a href="http://www.asmarterwaytolearn.com/js/44.html" target="_blank">Commenting</a><br>
    <img src="g.png" id="c">45. <a href="http://www.asmarterwaytolearn.com/js/45.html" target="_blank">Events: link</a><br>
    <img src="g.png" id="c">46. <a href="http://www.asmarterwaytolearn.com/js/46.html" target="_blank">Events: button</a><br>
    <img src="g.png" id="c">47. <a href="http://www.asmarterwaytolearn.com/js/47.html" target="_blank">Events: mouse</a><br>
    <img src="g.png" id="c">48. <a href="http://www.asmarterwaytolearn.com/js/48.html" target="_blank">Events: fields </a><br>
    <img src="g.png" id="c">49. <a href="http://www.asmarterwaytolearn.com/js/49.html" target="_blank">Reading field values</a><br>
    <img src="g.png" id="c">50. <a href="http://www.asmarterwaytolearn.com/js/50.html" target="_blank">Setting field values</a><br>
    <img src="g.png" id="c">51. <a href="http://www.asmarterwaytolearn.com/js/51.html" target="_blank">Reading and setting paragraph text</a><br>
    <img src="g.png" id="c">52. <a href="http://www.asmarterwaytolearn.com/js/52.html" target="_blank">Manipulating images and text</a><br>
    <img src="g.png" id="c">53. <a href="http://www.asmarterwaytolearn.com/js/53.html" target="_blank">Swapping images</a><br>
    <img src="g.png" id="c">54. <a href="http://www.asmarterwaytolearn.com/js/54.html" target="_blank">Swapping images and setting classes</a><br>
    <img src="g.png" id="c">55. <a href="http://www.asmarterwaytolearn.com/js/55.html" target="_blank">Setting styles</a><br>
    <img src="g.png" id="c">56. <a href="http://www.asmarterwaytolearn.com/js/56.html" target="_blank">Target all elements by tag name</a><br>
    <img src="g.png" id="c">57. <a href="http://www.asmarterwaytolearn.com/js/57.html" target="_blank">Target some elements by tag name</a><br>
    <img src="g.png" id="c">58. <a href="http://www.asmarterwaytolearn.com/js/58.html" target="_blank">The DOM</a><br>
    <img src="g.png" id="c">59. <a href="http://www.asmarterwaytolearn.com/js/59.html" target="_blank">The DOM: Parents and children</a><br>
    <img src="g.png" id="c">60. <a href="http://www.asmarterwaytolearn.com/js/60.html" target="_blank">The DOM: Finding children</a><br>
    <img src="g.png" id="c">61. <a href="http://www.asmarterwaytolearn.com/js/61.html" target="_blank">The DOM: Junk artifacts and nodeType</a><br>
    <img src="g.png" id="c">62. <a href="http://www.asmarterwaytolearn.com/js/62.html" target="_blank">The DOM: More ways to target elements</a><br>
    <img src="g.png" id="c">63. <a href="http://www.asmarterwaytolearn.com/js/63.html" target="_blank">The DOM: Getting a target's name</a><br>
    <img src="g.png" id="c">64. <a href="http://www.asmarterwaytolearn.com/js/64.html" target="_blank">The DOM: Counting elements</a><br>
    <img src="g.png" id="c">65. <a href="http://www.asmarterwaytolearn.com/js/65.html" target="_blank">The DOM: Attributes</a><br>
    <img src="g.png" id="c">66. <a href="http://www.asmarterwaytolearn.com/js/66.html" target="_blank">The DOM: Attribute names and values</a><br>
    <img src="g.png" id="c">67. <a href="http://www.asmarterwaytolearn.com/js/67.html" target="_blank">The DOM: Adding nodes</a><br>
    <img src="g.png" id="c">68. <a href="http://www.asmarterwaytolearn.com/js/68.html" target="_blank">The DOM: Inserting nodes</a><br>
    <img src="g.png" id="c">69. <a href="http://www.asmarterwaytolearn.com/js/69.html" target="_blank">Objects</a><br>
    <img src="g.png" id="c">70. <a href="http://www.asmarterwaytolearn.com/js/70.html" target="_blank">Objects: Properties</a><br>
    <img src="g.png" id="c">71. <a href="http://www.asmarterwaytolearn.com/js/71.html" target="_blank">Objects: Methods</a><br>
    <img src="g.png" id="c">72. <a href="http://www.asmarterwaytolearn.com/js/72.html" target="_blank">Objects: Constructors</a><br>
    <img src="g.png" id="c">73. <a href="http://www.asmarterwaytolearn.com/js/73.html" target="_blank">Objects: Constructors for methods</a><br>
    <img src="g.png" id="c">74. <a href="http://www.asmarterwaytolearn.com/js/74.html" target="_blank">Objects: Prototypes</a><br>
    <img src="g.png" id="c">75. <a href="http://www.asmarterwaytolearn.com/js/75.html" target="_blank">Objects: Checking for properties and methods</a><br>
    <img src="g.png" id="c">76. <a href="http://www.asmarterwaytolearn.com/js/76.html" target="_blank">Browser control: Getting and setting the URL</a><br>
    <img src="g.png" id="c">77. <a href="http://www.asmarterwaytolearn.com/js/77.html" target="_blank">Browser control: Getting and setting the URL another way</a><br>
    <img src="g.png" id="c">78. <a href="http://www.asmarterwaytolearn.com/js/78.html" target="_blank">Browser control: Forward and reverse</a><br>
    <img src="g.png" id="c">79. <a href="http://www.asmarterwaytolearn.com/js/79.html" target="_blank">Browser control: Filling the window with content</a><br>
    <img src="g.png" id="c">80. <a href="http://www.asmarterwaytolearn.com/js/80.html" target="_blank">Browser control: Controlling the window's size and location</a><br>
    <img src="g.png" id="c">81. <a href="http://www.asmarterwaytolearn.com/js/81.html" target="_blank">Browser control: Testing for popup blockers</a><br>
    <img src="g.png" id="c">82. <a href="http://www.asmarterwaytolearn.com/js/82.html" target="_blank">Form validation:  text fields</a><br>
    <img src="g.png" id="c">83. <a href="http://www.asmarterwaytolearn.com/js/83.html" target="_blank">Form validation:  drop-downs</a><br>
    <img src="g.png" id="c">84. <a href="http://www.asmarterwaytolearn.com/js/84.html" target="_blank">Form validation:  radio buttons</a><br>
    <img src="g.png" id="c">85. <a href="http://www.asmarterwaytolearn.com/js/85.html" target="_blank">Form validation: ZIP codes</a><br>
    <img src="g.png" id="c">86. <a href="http://www.asmarterwaytolearn.com/js/86.html" target="_blank">Form validation: email</a><br>
    <img src="g.png" id="c">87. <a href="http://www.asmarterwaytolearn.com/js/87.html" target="_blank">Exceptions: try and catch</a><br>
    <img src="g.png" id="c">88. <a href="http://www.asmarterwaytolearn.com/js/88.html" target="_blank">Exceptions: throw</a><br>
    <img src="g.png" id="c">89. <a href="http://www.asmarterwaytolearn.com/js/89.html" target="_blank">Handle events within JavaScript</a><br>
  </p> -->
 </main>
</div>

 <footer role="contentinfo">
 <!-- Include the footer.php file for the top navigation bar -->
  <div>
  <?php include $_SERVER['DOCUMENT_ROOT']. '/home/modules/footer.php';  ?>
  </div>
 <!-- display on the website when this page was updated last -->
    
 </footer>
 <script src="myController.js"></script>

</body>
</html>