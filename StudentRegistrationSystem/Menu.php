<!DOCTYPE html>
<!-- Code By Webdevtrick ( https://webdevtrick.com ) -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Responsive HTML5 CSS3 Menu</title>
  
</head>
<style>
/* Code By Webdevtrick ( https://webdevtrick.com ) */
@import url(https://use.fontawesome.com/releases/v5.0.6/css/all.css);
@import url(https://fonts.googleapis.com/css?family=Oswald:400|Raleway:400,700,400italic,700italic);

*,
*:before,
*:after {
    box-sizing: border-box;
}

html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

body {
    background-color: #1d1f20;
    color: #e5e5e5;
    font: 16px/1.25 'Raleway', sans-serif;
}

h1 {
    font-family: 'Oswald', sans-serif;
    text-align: center;
}

.container {
    margin: 0 auto;
    max-width: 80em;
}

main .container {
    padding: 1em;
}

.screen-reader-text {
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute !important;
    width: 1px;
}

nav {
    background: #e5e5e5;
    color: #1d1f20;
    left: 0;
    position: relative;
    top: 0;
    width: 100%;
    z-index: 9999;
}

/*** INPUT ***/
nav input {
    opacity: 0;
    position: absolute;
    z-index: -1;
}

/*** LABEL ***/
nav label {
    cursor: pointer;
    display: block;
    font: 2em/1 'Oswald', sans-serif;
    padding: 0.5em;
}

/* Hamburger Icon */
#menu-icon,
#menu-icon:before,
#menu-icon:after {
    background: #558da8;
    border-radius: 0.05em;
    height: 0.2em;
    transition: all 0.2s ease-in-out;
    width: 100%;
}

#menu-icon {
    display: inline-block;
    margin: 0.4em 0;
    max-width: 1em;
    position: relative;
}

nav label #menu-icon {
    float: right;
}

#menu-icon:before,
#menu-icon:after {
    content: '';
    left: 0;
    position: absolute;
}

#menu-icon:before {
    top: -0.4em;
}

#menu-icon:after {
    bottom: -0.4em;
}

/* Close Icon */
nav input[type=checkbox]:checked + label #menu-icon {
    background: transparent;
}

nav input[type=checkbox]:checked + label #menu-icon:before {
    top: 0;
    transform: rotate(-45deg);
}

nav input[type=checkbox]:checked + label #menu-icon:after {
    bottom: 0;
    transform: rotate(45deg);
}


/*** MENU ***/
/* Overlay */
nav input:checked ~ #overlay {
    background-image:white;
    bottom: 0;
    left: 0;
    height: 100vh;
    position: fixed;
    right: 0;
    top: 0;
    width: 100vw;
    z-index: -1;
}

/* List */
nav ul {
    font-size: 1.5em;
    list-style: none;
    margin: 0;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    text-align: center;
  
    margin: 0 auto;
    max-width: 80em;

}

nav input:checked ~ ul {
    margin: 1em;
    max-height: inherit;
    opacity: 1;
}
nav ul > li {
    margin: 0.5em 0;
}
 
nav ul a {
    color: black!important;
    text-decoration: none;
}



</style>
<body>

<nav>
    <div class="container">
        <input id="responsive-menu" type="checkbox">
        <label for="responsive-menu">Menu <span id="menu-icon"></span></label>
        <div id="overlay"></div>
        <ul>
            <li><a href="systemcrud/index.php">Student Form</a></li>
            <li><a href="Team.php">Team</a></li>
            <li><a href="bye.php">Log Out</a></li>
        </ul>
       

<main>
    <div class="container">
        <h1>REGISTRATION FORM SYSTEM</h1>
    </div>
</main>

</body>
</html>