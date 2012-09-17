<h1>Users</h1>

<table>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['firstname']; ?></td>
        <td><?php echo $user['User']['lastname']; ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>