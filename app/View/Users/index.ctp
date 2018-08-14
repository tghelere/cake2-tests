<h1>Users</h1>
<p><?php echo $this->Html->link('Add User', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    <!-- Aqui é onde nós percorremos nossa matriz $users, imprimindo as informações dos users -->
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id']));?></td>
        <td><?php echo $user['User']['password']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>