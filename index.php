<?php require_once 'header.php'?>

<main>
    <div class="container text-center">
        <h1 class="py-4  text-light rounded"><i class="fa-solid fa-graduation-cap"></i> دانشجویان کامپیوتر (97) <i class="fa-solid fa-graduation-cap"></i></h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                 <?php
                        inputElem("bg-warning","<i class='fas fa-id-badge'></i>","ID","id","");
                    ?>
                </div>
                <div class="pt-2">
                    <?php
                    inputElem("bg-warning","<i class='fas fa-id-badge'></i>","Student_ID","stid","");
                    ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php
                        inputElem("bg-dark text-light rounded","<i class='fa-solid fa-user'></i>","Name","name","");
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        inputElem("bg-dark text-light rounded","<i class='fa-solid fa-user'></i>","LastName","lastname","");
                        ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php
                        inputElem("bg-info p-2 text-light bg-opacity-10","<i class='fa-solid fa-calendar-days'></i>","Age","age","");
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        inputElem("bg-dark text-light rounded","<i class='fa-solid fa-venus-mars'></i>","Gender","gender","");
                        ?>
                    </div>

                </div>

                    <div class="d-flex bg-dark text-light rounded">
                        <?php
                        buttonElem("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'");
                        buttonElem("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'");
                        buttonElem("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'");
                        buttonElem("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'");
                        buttonElem("btn-deleteall","btn btn-dark text-warning","Erase","erase","data-toggle='tooltip' data-placement='bottom' title='Erase All'");
                        ?>
                    </div>
            </form>
        </div>

    <div class = "d-flex table-data">
        <table class=" table table-striped table-dark">
            <thead>
                <tr>
                    <td>id</td>
                    <td>student_id</td>
                    <td>name</td>
                    <td>lastname</td>
                    <td>age</td>
                    <td>gender</td>
                    <td>Edit</td>
                </tr>

            </thead>
            <tbody id="tbody">
            <?php

            if(isset($_POST['read'])){
                $result = readData();
                if($result){
                    while($row=mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['id']  ?></td>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['student_id']  ?></td>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['stname']  ?></td>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['stlastname']  ?></td>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['stage']  ?></td>
                            <td data-id = "<?php  echo $row['id']  ?>"><?php  echo $row['stgender']  ?></td>
                            <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i> </td>
                    </tr>
                    <?php
                }
            }
            }

            ?>
            </tbody>
        </table>
    </div>


    </div>
</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

