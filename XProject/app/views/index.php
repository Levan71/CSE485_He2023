
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="./bootstrap/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="./bootstrap/js/bootstrap.min.js"></script>  
   <title>Quản lý thông tin nhân viên</title>
</head>

<body>
<div class="container mt-5">
    <div class="row"
    >
    <h2 class="text col-10 ml-1 text-uppercase text-primary">List Of Employees</h2>
    <a href="" class="btn btn-success col-2 mb-4"><i class='bi bi-plus'></i> Add New Employee</a>
    </section>
    
      <!-- Table view data -->
      <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Salary</th>
                <th scope="col" class="text text-center">Action</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
        
            foreach ($employees as $employe) {
                echo "<tr>";
                echo "<td>" . $employe->getId() . "</td>";
                echo "<td>" . $employe->getName() . "</td>";
                echo "<td>" . $employe->getAddress() . "</td>";
                echo "<td>" . $employe->getSalary() . "</td>";

                echo "<td class='text-center'><a class='' href=''><i class='bi bi-eye'></i></a>";
                echo "<a class='mx-3'  href=''><i class='bi bi-pencil'></i></a>";
                echo "<a class=''  href=''><i class='bi bi-trash3'></i></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</div>
</body>

</html>
