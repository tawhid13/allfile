	<?php 
	$frinds=['kopil','akib','Rakib','Sakib','Adnan'];
	?>

<!DOCTYPE html>
<html>
<head>
	<title>tawhid</title>
</head>
<body>
	<h1> 
		<?php 
			echo 'hello i am tawhid';
		 ?>
	</h1>
	<h1>
		All are my dear
	</h1>
	<ul>
		<?php for($i=0; $i<5; $i++): ?>
		<li> <?php echo $frinds[$i] ?> </li>
		<?php endfor; ?>
	</ul>
	<h1>
		All are my koliza
	</h1>
	<ul> 
		<?php for($k=0; $k<5; $k++) {?>
		<li> <?php echo $frinds[$k] ?> </li>
		<?php 	}; ?>
	</ul>
	<h1>
		All are my janu
	</h1>
	<ul>
		<?php for($m=0; $m<5; $m++){
			echo "<li>" . $frinds[$m] . "</li>";
		}
		?>
	</ul>
	<h1>
		All are my anemy
	</h1>
	<ul>
		<?php for($h=0; $h<count($frinds); $h++): ?>
			<li> <?php echo $frinds[$h] ?> </li>
		<?php endfor; ?>
	</ul>
	<!-- best -->
	<h1>All are my brother</h1>
	<ul>
		<?php foreach($frinds as $frind): ?>
			<li> <?php echo $frind ?> </li>
		<?php endforeach; ?>
	</ul>
	<h1>All are my cousin</h1>
	<ul>
		<?php $g=0; ?>
		<?php while($g<count($frinds)): ?>
			<li> <?php echo $frinds[$g] ?> </li>
			<?php $g++; endwhile ; ?>
	</ul>

</body>
</html>