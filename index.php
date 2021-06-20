<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  text-decoration: none;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h4{
color:red;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
    <label for="fname">Full Name</label>
    <input type="text" id="name" name="name" required  placeholder="Full Name">

    <label for="class">Class</label>
    <input type="text" id="class" name="class" required placeholder="Class">

    <label for="college">College name</label>
    <select id="College" name="College" required >
      <option value="">Select</option>
    </select>
<h4 id="submit"></h4>

<input type="submit" id="submit2" name="Submit" onclick="sFunction()">
</div>
	
<?php
	echo 'hello';
?>
</body>

<script>
var ClassData = ["AJ Mahila College Banmankhi","AM Degree College Araria","Araria College Araria","Balrampur College Balrampur","BMT Law College","BD College Barsoi","Bhagwati Mandir College Barari","BNC College Dhamdaha","DS College Katihar","Forbesganj College Forbesganj","GLM College Banmankhi","Gov Degree College Baisi","Gov Degree College Dhamdaha","KB Jha College Katihar","KD College Raniganj","Marwari College Kishanganj","MHAND College Thakurganj","MJM Mahila College Katihar","ML Arya College Kasba","MLDPKY College Araria","ND College Rambagh","Nehru College Bahadurganj","Peoples College Araria","PS Deegre College Harda","Purnea College Purnea","Purnea Mahila College Purnia","RDS College Salmari","RKK College Purnea","RL College MadhavNagar","RY College Manihari","SC Degree College Katihar","SD Law College Katihar","SNSY College Rambagh","YNP College Raniganj"
]

window.onload = function() {
    var Class = document.getElementById("College");
    for (var x in ClassData) {
        Class.options[Class.options.length] = new Option(ClassData[x], ClassData[x]);
   }
}




function sFunction() {
 var x=document.getElementById("name").value;
var y=document.getElementById("class").value;
var z=document.getElementById("College").value;
if (x!=''&&y!=''&&z!='')
{
document.getElementById("name").value='';
document.getElementById("class").value='';
document.getElementById("College").value='';

var a='https://wa.me/917979700192?text=Name- '+x+'%0AClass- '+y+'%0ACollege- '+z;
var result= a.replace(/ /g, '%20');
  window.location = result;

  }
  else
  document.getElementById("submit").innerHTML = "Please fill all details.";
}

</script>

</html>
