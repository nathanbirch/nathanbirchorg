//CSS ANIMATIONS START
function growImage(){
  document.getElementById('imgGrow').ClassName ='growImage';
}
var dropFromTopFunction = function(){
  document.getElementById('imgdropFromTopID').ClassName ='dropFromTop';
}
var runDomManipulation = function(){
  var greet = document.getElementById("domM").getElementsByTagName("li");
  for(var i = 0; i < greet.length; i++) { // Loop through all <li> elements
      // Create an <i> element to contain the text
      var el = document.createElement("i");

      // Add the start of the text to the <i>
      el.appendChild(document.createTextNode("Hi "));
      // Add everything in the <li> to the <i> (they are removed from the <li>)
      while(greet[i].firstChild)
          el.appendChild(greet[i].firstChild);
      // Add the end of the text to the <li>
      el.appendChild(document.createTextNode(". I enjoy working with you!"));

      // Add the <i> to the <li>
      greet[i].appendChild(el);
  }
}
//THE FOLLOWING ARE TWO GENERIC FUNCTIONS - PASS IN THE CLASS NAME TO USE THEM
//HTML: onmouseover='addCSSClass(this,"cssA")' onmouseout='removeCSSClass(this,"cssA")'
function addCSSClass(item, classname) {
  var obj = item
  if (typeof item=="string") {
      obj = document.getElementById(item)
  }
  obj.className += " " + classname
}
function removeCSSClass(item, classname) {
  var obj = item
  if (typeof item=="string") {
      obj = document.getElementById(item)
  }
  var classes = ""+obj.className
  while (classes.indexOf(classname)>-1) {
      classes = classes.replace (classname, "")
  }
  obj.className = classes
}
//THE TWO FUNCTION ABOVE ARE TWO GENERIC FUNCTIONS - PASS IN THE CLASS NAME TO USE THEM
//THE TWO FUNCTIONS BELOW ARE SIMILAR TO THE TWO ABOVE, BUT WILL CYCLE THROUGH THE COLORS
var Run = 0;
function addCSSClass2(item) {
  var obj = item
  if (typeof item=="string") {
      obj = document.getElementById(item)
  }
  checkRun(2, obj);
}
function removeCSSClass2(item) {
  var obj = item
  if (typeof item=="string") {
      obj = document.getElementById(item)
  }
  var classes = ""+obj.className
  // while (classes.indexOf(classname)>-1) {
  //     classes = classes.replace (classname, "")
  // }
  obj.className = "cssJSClassChild"
}
//THE TWO FUNCTIONS ABOVE ARE SIMILAR TO THE TWO BEFORE, BUT WILL CYCLE THROUGH THE COLORS
var run = 0;
function checkRun(runState, obj) {
  if (runState == 1) { // this will run on click function
    if (run == 0) {
      obj.className = "cssJSClassChild cssA"; 
      run = 1;
    }
    else if (run == 1) {
      obj.className = "cssJSClassChild cssB"; 
      run = 2;
    }
    else if (run == 2) {
      obj.className = "cssJSClassChild cssC"; 
      run = 3;
    }
    else if (run == 3) {
      obj.className ="cssJSClassChild cssD"; 
      run = 4;
    }
    else if (run == 4) {
      obj.className ="cssJSClassChild cssF"; 
      run = 5;
    }
    else {
      obj.className ="cssJSClassChild cssW"; 
      run = 0;
    }
  }
  else { // this will run on hover function
    if (Run == 0) {
      obj.className = "cssJSClassChild cssA"; 
      Run = 1;
    }
    else if (Run == 1) {
      obj.className = "cssJSClassChild cssB"; 
      Run = 2;
    }
    else if (Run == 2) {
      obj.className = "cssJSClassChild cssC"; 
      Run = 3;
    }
    else if (Run == 3) {
      obj.className ="cssJSClassChild cssD"; 
      Run = 4;
    }
    else {
      obj.className ="cssJSClassChild cssF"; 
      Run = 0;
    }
  }
}
function addCSSClassClick(item) {
  var obj = item
  if (typeof item=="string") {
      obj = document.getElementById(item)
  }
  checkRun(1, obj);
}
function myTimer(){
  //countdown();
  setInterval(function(){
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssA';
    }, 1000);
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssB';
    }, 2000);
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssC';
    }, 3000);
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssD';
    }, 4000);
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssF';
    }, 5000);
    setTimeout(
    function() {
      document.getElementById('thirdBox').className='cssJSClassChild cssW';
    }, 6000);
  }, 10000);
}
// setInterval(function() {
// countdown();
// },8000);
// function countdown() {
//         var secs = 10;
//         function timer() {
//             var counter = document.getElementById("jsTimer");
//             secs--;
//             counter.innerHTML = secs;
//             if( secs > 0 ) {
//                 setTimeout(timer, 1000);
//             } else {
//               document.getElementById('jsTimer').style.display = "none";
//             }
//         }
//         timer();
//     }

//     countdown();
// function moveShape(){
//     document.getElementById('animateShapeID').ClassName ='animateTheShape';
// }
// ('#moveShape').click(function () {
//   ('.animateTheShape').toggleClass('active');
// });
//CSS ANIMATIONS END
  var leftSideLinks = 
  {"leftSideLinksArray": [
    {"Size"      : 2, //Size - 1 is H3, 2 is titleCaption1, 3 is a regular link.
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 1,
    "link"      : "",
    "linkTitle" : "JSON:"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 2,
    "link"      : "http://www.w3schools.com/json/default.asp",
    "linkTitle" : "JSON Introduction"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 3,
    "link"      : "",
    "linkTitle" : "JavaScript Objects"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 4,
    "link"      : "http://www.devx.com/projectcool/Article/19993",
    "linkTitle" : "List of existing JavaScript objects"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 5,
    "link"      : "http://www.quirksmode.org/js/associative.html",
    "linkTitle" : "JavaScript objects as associative arrays"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 6,
    "link"      : "https://www.youtube.com/watch?v=SS-9y0H3Si8",
    "linkTitle" : "What is Object Oriented Programming?"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 7,
    "link"      : "http://www.javascriptkit.com/javatutors/oopjs.shtml",
    "linkTitle" : "JavaScript objects"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 8,
    "link"      : "http://en.wikipedia.org/wiki/Inheritance_(object-oriented_programming)",
    "linkTitle" : "Wikipedia definition of inheritance"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 9,
    "link"      : "http://www.webreference.com/js/column26/call.html",
    "linkTitle" : "Using the JavaScript call method"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 10,
    "link"      : "",
    "linkTitle" : "DOM Manipulation"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 11,
    "link"      : "http://www.quirksmode.org/dom/intro.html",
    "linkTitle" : "What is the DOM?"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 12,
    "link"      : "http://www.w3schools.com/js/js_ex_dom.asp",
    "linkTitle" : "JavaScript DOM Examples"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 13,
    "link"      : "http://www.tizag.com/javascriptT/javascriptevents.php",
    "linkTitle" : "JavaScript Event Examples"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 14,
    "link"      : "http://xahlee.info/js/css_change.html",
    "linkTitle" : "Modifying CSS with JavaScript"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 15,
    "link"      : "",
    "linkTitle" : "CSS 3 Transitions and Transforms"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 16,
    "link"      : "http://www.w3schools.com/css/css3_transitions.asp",
    "linkTitle" : "Simple Examples"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 17,
    "link"      : "http://css3.bradshawenterprises.com/transitions/",
    "linkTitle" : "Transition Browser Support"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 18,
    "link"      : "http://css3.bradshawenterprises.com/transforms/",
    "linkTitle" : "Transform Browser Support"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 19,
    "link"      : "",
    "linkTitle" : "CSS 3 Animations"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 20,
    "link"      : "http://css3.bradshawenterprises.com/animations/",
    "linkTitle" : "Animation Browser Support"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 21,
    "link"      : "http://www.1stwebdesigner.com/tutorials/css3-tutorials-2012/",
    "linkTitle" : "Good and Bad Examples"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 22,
    "link"      : "http://www.w3schools.com/css/css3_animations.asp",
    "linkTitle" : "Animation API"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 23,
    "link"      : "",
    "linkTitle" : "Local Storage"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"     : "spacedLink link-wobble",
    "uniqueID"  : 24,
    "link"      : "http://sixrevisions.com/html/introduction-web-storage/",
    "linkTitle" : "Using Web (local) Storage"},
    {"Size"      : 2, 
    "Class"     : "titleCaption",
    "Class2"    : "titleCaptionWord",
    "Class3"    : "",
    "uniqueID"  : 25,
    "link"      : "",
    "linkTitle" : "AJAX"},
    {"Size"      : 3, 
    "Class"     : "",
    "Class2"    : "",
    "Class3"    : "",
    "uniqueID"  : 26,
    "link"      : "",
    "linkTitle" : "Using the XMLHttpRequest Object"},
    ]
  };
var launchleftSideWasRun;
var launchLeftSide = function() {
  if (launchleftSideWasRun == true){
    return;
  }
  else {
    for (i = 0; i < leftSideLinks.leftSideLinksArray.length; i++) { 
      var mySize  = leftSideLinks.leftSideLinksArray[i].Size;
      var myClass   = leftSideLinks.leftSideLinksArray[i].Class;
      var myClass2  = leftSideLinks.leftSideLinksArray[i].Class2;
      var myClass3  = leftSideLinks.leftSideLinksArray[i].Class3;
      var myUniqueID  = leftSideLinks.leftSideLinksArray[i].uniqueID;
      var myLink = leftSideLinks.leftSideLinksArray[i].link;
      var myLinkT = leftSideLinks.leftSideLinksArray[i].linkTitle;

      var demop = document.getElementById('printLeftSide');
      if (mySize == 2) {
        demop.innerHTML += "<br><span class='" + myClass + "'><span class='" + 
        myClass2 + "'>" + myLinkT + "</span></span>";
      }
      if (mySize == 3) {
        demop.innerHTML += "<a href='" + 
        myLink + "' target='_blank' class='" + 
        myClass3 + "'>" + 
        myLinkT + "</a><br>";
      }
    }
  }
  launchleftSideWasRun = true;
}
var jsExercisesArray = 
  {"exerciseArray": [
  {"icon"      : "c.png",
  "number"    : "1.",
  "link"      : "http://www.asmarterwaytolearn.com/js/1.html",
  "linkTitle": "Alerts"},
  {"icon"      : "c.png",
  "number"    : "2.",
  "link"      : "http://www.asmarterwaytolearn.com/js/2.html",
  "linkTitle": "Variables for Strings"},
  {"icon"      : "c.png",
  "number"    : "3.",
  "link"      : "http://www.asmarterwaytolearn.com/js/3.html",
  "linkTitle": "Variables for Numbers"},
  {"icon"      : "c.png",
  "number"    : "4.",
  "link"      : "http://www.asmarterwaytolearn.com/js/4.html",
  "linkTitle": "Variable Names Legal and Illegal"},
  {"icon"      : "c.png",
  "number"    : "5.",
  "link"      : "http://www.asmarterwaytolearn.com/js/5.html",
  "linkTitle": "Math Expressions:  familiar operators"},
  {"icon"      : "c.png",
  "number"    : "6.",
  "link"      : "http://www.asmarterwaytolearn.com/js/6.html",
  "linkTitle": "Math Expressions: unfamiliar operators"},
  {"icon"      : "g.png",
  "number"    : "7.",
  "link"      : "http://www.asmarterwaytolearn.com/js/7.html",
  "linkTitle": "Math Expressions: eliminating ambiguity"},
  {"icon"      : "g.png",
  "number"    : "8.",
  "link"      : "http://www.asmarterwaytolearn.com/js/8.html",
  "linkTitle": "Concatenating text strings"},
  {"icon"      : "g.png",
  "number"    : "9.",
  "link"      : "http://www.asmarterwaytolearn.com/js/9.html",
  "linkTitle": "Prompts"},
  {"icon"      : "g.png",
  "number"    : "10.",
  "link"      : "http://www.asmarterwaytolearn.com/js/10.html",
  "linkTitle": "<em>if</em> statements"},
  {"icon"      : "g.png",
  "number"    : "11.",
  "link"      : "http://www.asmarterwaytolearn.com/js/11.html",
  "linkTitle": "Comparison operators"},
  {"icon"      : "g.png",
  "number"    : "12.",
  "link"      : "http://www.asmarterwaytolearn.com/js/12.html",
  "linkTitle": "<em>if...else</em> and <em>else if </em>statements"},
  {"icon"      : "g.png",
  "number"    : "13.",
  "link"      : "http://www.asmarterwaytolearn.com/js/13.html",
  "linkTitle": "Testing sets of conditions"},
  {"icon"      : "g.png",
  "number"    : "14.",
  "link"      : "http://www.asmarterwaytolearn.com/js/14.html",
  "linkTitle": "<em>if</em> statements nested"},
  {"icon"      : "g.png",
  "number"    : "15.",
  "link"      : "http://www.asmarterwaytolearn.com/js/15.html",
  "linkTitle": "Arrays"},
  {"icon"      : "g.png",
  "number"    : "16.",
  "link"      : "http://www.asmarterwaytolearn.com/js/16.html",
  "linkTitle": "Arrays: adding and removing elements"},
  {"icon"      : "g.png",
  "number"    : "17.",
  "link"      : "http://www.asmarterwaytolearn.com/js/17.html",
  "linkTitle": "Arrays: removing, inserting, and extracting elements"},
  {"icon"      : "g.png",
  "number"    : "18.",
  "link"      : "http://www.asmarterwaytolearn.com/js/18.html",
  "linkTitle": "<em>for</em> loops"},
  {"icon"      : "g.png",
  "number"    : "19.",
  "link"      : "http://www.asmarterwaytolearn.com/js/19.html",
  "linkTitle": "<em>for </em>loops: flags, Booleans, array length, and loopus interruptus"},
  {"icon"      : "g.png",
  "number"    : "20.",
  "link"      : "http://www.asmarterwaytolearn.com/js/20.html",
  "linkTitle": "<em>for</em> loops nested"},
  ]
};
function loadText(){
  
for (i = 0; i < jsExercisesArray.exerciseArray.length; i++) { 

  var myIcon  = jsExercisesArray.exerciseArray[i].icon;
  var myNum   = jsExercisesArray.exerciseArray[i].number;
  var myLink  = jsExercisesArray.exerciseArray[i].link;
  var myLinkT = jsExercisesArray.exerciseArray[i].linkTitle;

  var demop = document.getElementById('printArray');

  demop.innerHTML += "<img src='" + myIcon + "' id='c'> " + 
  myNum + " " + "<a href='" + 
  myLink + "' target='_blank'>" + 
  myLinkT + "</a><br>";
}
var demop3 = document.getElementById('printMyButton');
demop3.innerHTML = "<button type='button' onclick='loadText2()' class='button greenButton wbutton'> Display JSON Serialization Result</button><br><br>" 

}

function loadText2(){
  var jsonS = JSON.stringify(jsExercisesArray.exerciseArray); 
  var demop2 = document.getElementById('printArray2');
  demop2.innerHTML = jsonS;
}

function daughter(storageType) {
    //test for browser support 
    if (typeof(Storage) !== "undefined") {
      var hannah = {hair:"brown", eyes:"blue", food:"Cheese"};
      if(storageType == 2) { 
        // Store object
        localStorage.setItem('hannah', JSON.stringify(hannah));
    
        // Retrieve object
        document.getElementById("daughter" + storageType).innerHTML = JSON.parse(localStorage.getItem('hannah')) + "<br><br>Hannah is my beautiful daughter. She has " + hannah.hair + " hair, " +
                hannah.eyes + " eyes, and her favorite food is " + hannah.food + "!";
      }
      if (storageType == 1) {
        localStorage.setItem('hannah', hannah);
        document.getElementById("daughter" + storageType).innerHTML = localStorage.getItem('hannah') + "<br><br>Hannah is my beautiful daughter. She has " + hannah.hair + " hair, " +
                hannah.eyes + " eyes, and her favorite food is " + hannah.food + "!";        
      }
    } else {
        document.getElementById("daughter").innerHTML = "You need to update your browser, it currently doesn't support local storage. <a href='https://www.google.com/chrome/browser/desktop/'>click here for my favorite browser.</a>";
        
    }       
}
