<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}





/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  width: 100%;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #e5e7eb;
  border-radius: 2px;
}

.col-6 {
    background-color: blue;
    border-radius: 4px;
    padding: 10px;
    width: 80%;
}

.side-bar {
    width: 20%;
    text-align: center;
    border-radius: 4px;
}



</style>
</head>
<body>


    <div class="row">
    <div class="col-6 side-bar" style="background-color:#bbb;">
        
        
        <ul id="myMenu">
        <li><a href="#">Upload Music</a></li>
        <li><a href="#">My Music</a></li>
        
        </ul>
    </div>
    <div class="col-6 container-fluid">
        <div id="content-target">
            Hi
        </div>
    </div>
    </div>
  
  

</body>
</html>
