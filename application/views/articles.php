<?php $template="master";?>
       
<?php $title = "@ARTICLES::";?>

<?php if(isset($users)):?>
<ul>
<?php foreach ($users as $user):?>
<li><?php echo $user->username. " : ". $user->role->name;?></li>
<?php endforeach;?>
</ul>
<?php else:?>
<?php echo "PAS DE USERS";?>
<?php endif;?>