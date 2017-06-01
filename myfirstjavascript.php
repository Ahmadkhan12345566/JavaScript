<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">
</head>
<body>

<h2>My First JavaScript</h2>

<button type="button"
onclick="document.getElementById('demo').innerHTML = 'ARSLAN'">
Click me to display Date and Time.</button>

<div class="panel panel-default">
       <div class="panel-body">
           <p class="text-danger">There are total <span class="text-bold">1</span> CLO's.</p>
           <table class="table">
               <tr>
                   <th>#</th>
                   <th>CLO</th>
                   <th>CLO %</th>

                   <th>PLO</th>

                   <th>Edit</th>
                   <th>Delete</th>
                   <th>Manage</th>
               </tr>
               <tr>
                   <td>1</td>
                   <td>This is PLO Module.</td>
                   <td>BSCS</td>
                   <td>1</td>

                   <td>
                       <a href="#">
                           <button class="btn btn-default" data-toggle="modal" data-target="#updatecourseModel"><i class="fa fa-pencil"></i></button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                       </a>
                   </td>
                   <td>
                       <a href="#">
                           <button class="btn btn-primary"><i class="fa fa-cog"></i></button>
                       </a>
                   </td>
               </tr>

           </table>
       </div>
   </div>




</body>
</html>
