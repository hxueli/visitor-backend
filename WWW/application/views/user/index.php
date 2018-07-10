<!--<h3>--><?php //echo "user"; ?><!--</h3>-->

<?php //foreach ($user as $user_item): ?>

<!--	<div class="main">-->
<!--		<li>--><?php //echo $user_item['userName']; ?><!--</li>-->
<!--		<li>--><?php //echo $user_item['phoneNumber']; ?><!--</li>-->
<!--		<li>--><?php //echo $user_item['who']; ?><!--</li>-->
<!--		<li>--><?php //echo $user_item['whatCompany']; ?><!--</li>-->
<!--		<li>--><?php //echo $user_item['whatFor']; ?><!--</li>-->
<!--	</div>-->

<?php //endforeach; ?>
<?php

$query = $this->db->query('SELECT * FROM user');
echo $this->table->generate($query);

?>
