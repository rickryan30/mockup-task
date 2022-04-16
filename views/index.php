<?php
include 'header.php';
$courseList = $course->getAll();
?>

<div class="container">
    <form>
        <div class="form-box">
            <div class="row">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php" type="button" role="tab" aria-controls="pills-php" aria-selected="true">PHP</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mysql-tab" data-bs-toggle="pill" data-bs-target="#pills-mysql" type="button" role="tab" aria-controls="pills-mysql" aria-selected="false">MySql</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-angular-tab" data-bs-toggle="pill" data-bs-target="#pills-angular" type="button" role="tab" aria-controls="pills-angular" aria-selected="false">Angular</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab">
                        <table class="table table-striped mt-4 text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Course Category</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($courseList)): foreach($courseList as $key => $courseListing): if($courseListing->type == 'PHP'): ?>
                                <tr>
                                    <td><?php echo ($courseListing->type) ?? null; ?></td>
                                    <td><?php echo ($courseListing->title) ?? null; ?></td>
                                    <td><?php echo ($courseListing->author) ?? null; ?></td>
                                    <td><a type="submit" class="btn btn-success btn-eye" data-tooltip="tooltip" data-placement="top"  title="View" href="info.php?id=<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-eye"></i></a></td>
                                </tr>
                            <?php endif; endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div><!-- end of first-tab -->
                    <div class="tab-pane fade" id="pills-mysql" role="tabpanel" aria-labelledby="pills-mysql-tab">
                        <table class="table table-striped mt-4 text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Course Category</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($courseList)): foreach($courseList as $key => $courseListing): if($courseListing->type == 'MySql'): ?>
                                    <tr>
                                        <td><?php echo ($courseListing->type) ?? null; ?></td>
                                        <td><?php echo ($courseListing->title) ?? null; ?></td>
                                        <td><?php echo ($courseListing->author) ?? null; ?></td>
                                        <td><a type="submit" class="btn btn-success btn-eye" data-tooltip="tooltip" data-placement="top"  title="View" href="info.php?id=<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                <?php endif; endforeach; endif; ?>
                                </tbody>
                            </table>
                    </div><!-- end of second tab -->
                    <div class="tab-pane fade" id="pills-angular" role="tabpanel" aria-labelledby="pills-angular-tab">
                        <table class="table table-striped mt-4 text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course Category</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($courseList)): foreach($courseList as $key => $courseListing): if($courseListing->type == 'Angular'): ?>
                                        <tr>
                                            <td><?php echo ($courseListing->type) ?? null; ?></td>
                                            <td><?php echo ($courseListing->title) ?? null; ?></td>
                                            <td><?php echo ($courseListing->author) ?? null; ?></td>
                                            <td><a type="submit" class="btn btn-success btn-eye" data-tooltip="tooltip" data-placement="top"  title="View" href="info.php?id=<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    <?php endif; endforeach; endif; ?>
                                    </tbody>
                                </table>
                    </div><!-- end of third tab -->
                </div>
            </div><!-- end of row -->
        </div><!-- end of form-box -->
    </form>
</div><!-- end of container -->

<?php
include 'footer.php';
?>