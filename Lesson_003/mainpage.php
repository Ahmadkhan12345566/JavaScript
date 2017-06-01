<html>
<head>
  <link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.css">
    <script src="myscript.js"></script>



</head>
<body>

<h2>Use of Display Possibilities</h2>
<ul>

    <li>
        innerHTML

    </li>
    <li>document.write()</li>
    <li> window.alert()</li>
    <li>console.log()</li>



</ul>



<div class="panel panel-default">
       <div class="panel-body">

           <table class="table">
               <tr>
                   <th>#</th>
                   <th>name</th>
                   <th>date</th>

                   <th>day</th>

                   <th>change name</th>
                   <th>change date</th>
                   <th>chnage day</th>
               </tr>
               <tr>
                   <td>1</td>
                   <td id="NAME">khan</td>
                   <td id="demo">2/3/4</td>
                   <td id="DAY">thrusday</td>

                   <td>
                       <a href="#">
                           <button class="btn btn-default" ONCLICK="changename()"><i class="fa fa-pencil"></i>Name</button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button  class="btn btn-danger" onclick="myFunction()"><i class="fa fa-trash">Date</i></button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button class="btn btn-danger" ONCLICK="changeDAY()" "><i class="fa fa-cog"></i>Day</button>
                       </a>
                   </td>
               </tr>

           </table>
       </div>
   </div>




</body>
</html>
