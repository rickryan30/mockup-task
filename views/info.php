<?php
include 'header.php';
$id = (isset($_GET['id'])) ? $_GET['id'] : '';
$courseList = $course->getAll();
// echo $id;
?>

<div class="container">
  <div class="d-flex justify-content-center bd-highlight mb-3">
		<div class="card card-shadow mt-5">
			<?php if(!empty($courseList)): foreach($courseList as $key => $courseListing): if($courseListing->id == $id): ?>
				<div class="card-header d-flex flex-row-reverse bd-highlight">
				<?php echo date('F d, Y ', strtotime($courseListing->created)) . " - " . date('h:ia ', strtotime($courseListing->created)); ?>
				</div>
				<div class="card-body">
					<h5 class="card-title"><?php echo ($courseListing->title) ?? null; ?></h5>
					<p class="card-text"><?php echo ($courseListing->content) ?? null; ?></p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Course Category: <span class="float-end"><?php echo ($courseListing->type) ?? null; ?></span></li>
                     <li class="list-group-item">Author: <span class="float-end"><?php echo ($courseListing->author) ?? null; ?></span></li>
				</ul>
			<?php endif; endforeach; endif; ?>
		</div>
  </div>
</div>

<?php
include 'footer.php';
?>