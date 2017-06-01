<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">
    <script>
        function myFunction() {
            document.getElementById("demo").innerHTML =Date();
        }
        function changename() {
            document.getElementById("NAME").innerHTML = "Ahmad.";
        }
        function changeDAY() {
            document.getElementById("DAY").innerHTML = "Friday";
        }
        </script>

</head>
<body>

<h2>My First JavaScript</h2>



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
                           <button class="btn btn-default" ONCLICK="changename()"><i class="fa fa-pencil"></i></button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button  class="btn btn-danger" onclick="myFunction()"><i class="fa fa-trash"></i></button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button class="btn btn-danger" ONCLICK="changeDAY()" "><i class="fa fa-cog"></i></button>
                       </a>
                   </td>
               </tr>

           </table>
       </div>
   </div>




</body>
</html>
