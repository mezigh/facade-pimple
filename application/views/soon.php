<?php $template = "master"; ?>

<?php $title = "@SOON::ROLES"; ?>

<?php if (isset($roles)): ?>
    <ul>

        <?php foreach ($roles as $key => $role): ?>
            <li>
                <?php echo $role->name; ?>
                <?php foreach ($role->user as $user): ?>
                    <strong><?php echo $user->username; ?></strong>
                <?php endforeach; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?php echo "PAS DE ROLES"; ?>
<?php endif; ?>