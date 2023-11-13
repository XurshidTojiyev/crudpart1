<html>
<head>
    <meta charset="UTF-8">
    <title>Crud With PHP & SQLITE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   
   <div class="all">
       <div class="container justify-content-center align-items-center d-flex vh-100 w-100">
           <table class="table table-hover table-dark">
               <thead>
                   <tr>
                       <th>id</th>
                       <th>Name</th>
                       <th>Password</th>
                       <th>Edit</th>
                       <th>Delete</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   
                   include "conn.php";
                   $result = $myPDO->query("SELECT * FROM users");
                   
                        foreach($result as $res) {
                            ?>
                                <tr>
                                    <td><?php echo $res['id'];?></td>
                                    <td><?php echo $res['name'];?></td>
                                    <td><?php echo $res['password'];?></td>
                                    <td><button class="btn btn-primary">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                            <?php
                        }
                   
                   ?>
               </tbody>
           </table>
       </div>
   </div>
    
</body>
</html>