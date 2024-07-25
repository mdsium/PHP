<?php

$users = [
    [
        'name' => 'Md Sium',
        'email' => 'mdsiumcse@gmail.com',
        'mobile' => '01720184617'
    ],
    [
        'name' => 'Adbul Latif',
        'email' => 'adbullatif@gmail.com',
        'mobile' => '01720184617'
    ], [
        'name' => 'Md Sium',
        'email' => 'mdsiumcse@gmail.com',
        'mobile' => '01720184617'
    ],
    [
        'name' => 'Adbul Latif',
        'email' => 'adbullatif@gmail.com',
        'mobile' => '01720184617'
    ],
    [
        'name' => 'Adbul Latif',
        'email' => 'adbullatif@gmail.com',
        'mobile' => '01720184617'
    ],
    [
        'name' => 'Adbul Latif',
        'email' => 'adbullatif@gmail.com',
        'mobile' => '01720184617'
    ]

];
?>
<table border="1" width="500" cellpadding='10' style="margin-bottom: 30px;">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Moblie</th>
    </tr>
    <?php
    foreach($users as $sium) {
        echo "<tr>";
        echo "<td>" .$sium['name']."</td>";
        echo "<td>" .$sium['email']."</td>";
        echo "<td>" .$sium['mobile']."</td>";
        echo "</tr>";
    }
    ?>
</table>
<hr>

<table border="1" width="550" cellpadding="10">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
    </tr>
    <?php
    foreach($users as $sium){
        ?>
        <tr>
            <td><?php echo $sium['name']?></td>
            <td><?php echo $sium['email']?></td>
            <td><?php echo $sium['mobile']?></td>
        </tr>
        <?php
    }
?>

</table>
<h1>This is third time</h1>

<table border="1" width="500" cellpadding='10'>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
    </tr>
    <?php
    foreach($users as $s){
        echo "<tr>";
        echo "<td>". $s['name']."</td>";
        echo "<td>". $s['email']."</td>";
        echo "<td>". $s['mobile']."</td>";
        echo "</tr>";
    }
    
    
    ?>
</table>