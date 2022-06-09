<!-- IMPORT NAV -->

<?php include('partials/nav.php'); ?>

<!-- MAIN CONTENT -->
<h1 class="text-3xl pb-4 font-black drop-shadow-lg">Read</h1>
<?php //echo $hr; ?>



<!-- data table -->

<table style="border: 1px solid black";>
        <thead>
            <tr>
                <th style="border: 1px solid black";>No</th>
                <th style="border: 1px solid black";>First Name</th>
                <th style="border: 1px solid black";>Last Name</th>
                <th style="border: 1px solid black";>Email</th>
                <th style="border: 1px solid black";>Phone Number</th>
                <th style="border: 1px solid black";>Address</th>
                <th style="border: 1px solid black";>Action</th>
            </tr>
        </thead>

            <tbody>
            <?php foreach($speakers as $speaker): ?>               
                <tr>
                    <td style="border: 1px solid black";><?php echo $no;?></td>
                    <td style="border: 1px solid black";><?php echo $speaker['0']; ?></td>
                    <td style="border: 1px solid black";><?php echo $speaker['1']; ?></td>
                    <td style="border: 1px solid black";><?php echo $speaker['2']; ?></td>
                    <td style="border: 1px solid black";><?php echo $speaker['3']; ?></td>
                    <td style="border: 1px solid black";><?php echo $speaker['4']; ?></td>
                    <td style="border: 1px solid black";>
                        <a href="?p=detail">Detail</a>
                        <a href="?p=update">Update</a>
                        <a href="?p=delete">Delete</a>                        
                        </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach?>

                <!-- <tr>
                    <td style="border: 1px solid black";>2</td>
                    <td style="border: 1px solid black";>S</td>
                    <td style="border: 1px solid black";>Asso</td>
                    <td style="border: 1px solid black";>niasasso1@gmail.com</td>
                    <td style="border: 1px solid black";>081344226861</td>
                    <td style="border: 1px solid black";>Jl.Raya Sentani Waena, Kelurahan Waena, Distrik Heram</td>
                    <td style="border: 1px solid black";>
                        <a href="?p=detail">Detail</a>
                        <a href="?p=update">Update</a>
                        <a href="?p=delete">Delete</a>                        
                        </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black";>3</td>
                    <td style="border: 1px solid black";>Sulenias</td>
                    <td style="border: 1px solid black";>Asso</td>
                    <td style="border: 1px solid black";>niasasso1@gmail.com</td>
                    <td style="border: 1px solid black";>081344226861</td>
                    <td style="border: 1px solid black";>Jl.Raya Sentani Waena, Kelurahan Waena, Distrik Heram</td>
                    <td style="border: 1px solid black";>
                        <a href="?p=detail">Detail</a>
                        <a href="?p=update">Update</a>
                        <a href="?p=delete">Delete</a>                        
                        </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black";>4</td>
                    <td style="border: 1px solid black";>Sulenias</td>
                    <td style="border: 1px solid black";>Asso</td>
                    <td style="border: 1px solid black";>niasasso1@gmail.com</td>
                    <td style="border: 1px solid black";>081344226861</td>
                    <td style="border: 1px solid black";>Jl.Raya Sentani Waena, Kelurahan Waena, Distrik Heram</td>
                    <td style="border: 1px solid black";>
                        <a href="?p=detail">Detail</a>
                        <a href="?p=update">Update</a>
                        <a href="?p=delete">Delete</a>                        
                        </td>
                </tr>
                <tr>
                    <td style="border: 1px solid black";>5</td>
                    <td style="border: 1px solid black";>Sulenias</td>
                    <td style="border: 1px solid black";>Asso</td>
                    <td style="border: 1px solid black";>niasasso1@gmail.com</td>
                    <td style="border: 1px solid black";>081344226861</td>
                    <td style="border: 1px solid black";>Jl.Raya Sentani Waena, Kelurahan Waena, Distrik Heram</td>
                    <td style="border: 1px solid black";>
                        <a href="?p=detail">Detail</a>
                        <a href="?p=update">Update</a>
                        <a href="?p=delete">Delete</a>                        
                        </td>
                </tr> -->
            </tbody>

    </table>

<!-- end data table -->