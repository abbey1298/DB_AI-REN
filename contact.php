<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CONTACT US PAGE</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
* {
box-sizing: border-box;
}



/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}



input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}



input[type=submit]:hover {
    background-color: #45a049;
}



/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}



/* Create two columns that float next to eachother */
.column {
float: left;
width: 50%;
margin-top: 6px;
padding: 20px;
}



/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.column, input[type=submit] {
width: 100%;
margin-top: 0;
}
}
</style>
</head>
<body>


<div class="header">
    <!-- <div class="container"> -->
    <div class="navbar">
    <div class="logo">
      <img src="" width="100px">
    </div>
  <nav>
    <ul>
      <li><a href="Homepage.php">Logout</a></li>
      <li><a href="contact.php">Contact</a></li>
      <!-- <li><a href="index.php">Home</a></li> -->
    </ul>
  </nav>
</div>


    <div class="container">
        <div class="row">
            <div class="column">
                <img src="img/logo.png" style="width:100%">
            </div>
        <div class="column">
        <form action="/action_page.php">
            <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Enter firstname">
            <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Enter lastname..">
            <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit">
        </form>
        </div>
    </div>
</div>
</body>
</html>