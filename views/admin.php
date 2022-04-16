<?php
include 'header.php';
$courseList = $course->getAll();
?>

<div class="container">
  <form>
    <div class="form-box">
      <div class="row">
        <div class="col-md-6"><h3>List of Courses</h3></div>
        <div class="col-md-6">
          <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addCourse">
            <i class="fas fa-plus"></i> Add Course
          </button>
        </div>
      </div><!-- end of row -->
    <br>
      <div class="row"> 
      <div class="col-md-12">
      <table id="myTable" class="table table-bordered">
          <thead>
              <tr>
                <th scope="col">Course Category</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">ACTION</th>
              </tr> 
          </thead>
          <tbody>
          <?php if(!empty($courseList)): foreach($courseList as $key => $courseListing): ?>
                <tr>
                    <td><?php echo ($courseListing->type) ?? null; ?></td>
                    <td><?php echo ($courseListing->title) ?? null; ?></td>
                    <td><?php echo ($courseListing->author) ?? null; ?></td>
                    <td>
                        <button type="button" class="btn btn-success btn-eye" data-tooltip="tooltip" data-placement="top" title="View" data-bs-toggle="modal" data-bs-target="#view-course<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-info btn-pencil" data-tooltip="tooltip" data-placement="top" title="Edit" data-bs-toggle="modal" data-bs-target="#update-course<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-pencil-alt"></i></button>
                        <button type="submit" class="btn btn-danger btn-delete" id="btnDelete<?php echo ($courseListing->id) ?? null; ?>" value="<?php echo ($courseListing->id) ?? null; ?>" data-tooltip="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                <!-- view course modal -->
                <div class="modal fade" id="view-course<?php echo ($courseListing->id) ?? null; ?>" tabindex="-1" aria-labelledby="addcourseLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                      <!-- <div class="modal-header">
                        <h5 class="modal-title" id="addcourseLabel"><strong><i class="fas fa-book-reader"></i> <?php echo ($courseListing->title) ?? null; ?></strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div> -->
                        <div class="modal-body card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($courseListing->title) ?? null; ?></h5>
                            <p class="card-text"><?php echo ($courseListing->content) ?? null; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Created: <span class="float-end"><?php echo date('F d, Y ', strtotime($courseListing->created)) . " - " . date('h:ia ', strtotime($courseListing->created)); ?></span></li>
                            <li class="list-group-item">Course Category: <span class="float-end"><?php echo ($courseListing->type) ?? null; ?></span></li>
                            <li class="list-group-item">Author: <span class="float-end"><?php echo ($courseListing->author) ?? null; ?></span></li>
                        </ul>
                        </div><!-- end of modal-body -->
                    </div><!-- end of modal-content -->
                  </div>
                </div>
                <!-- end view course modal -->

                <!-- update course modal -->
                <div class="modal fade" id="update-course<?php echo ($courseListing->id) ?? null; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addcourseLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addcourseLabel"><strong><i class="fas fa-book-reader"></i> <?php echo ($courseListing->title) ?? null; ?></strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <div class="modal-body">
                          <div class="row">
                              <div class="col-md-6 pb-3">
                                    <label for="Course Type" class="form-label">Course Type</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                                        <select id="type_<?php echo ($courseListing->id) ?? null; ?>" name="type" class="form-select" aria-label="Default select example">
                                            <option value="<?php echo ($courseListing->type) ?? null; ?>" selected><?php echo ($courseListing->type) ?? null; ?></option>
                                            <?php if($courseListing->type == 'Angular'): ?>
                                                <option value="PHP">PHP</option>
                                                <option value="MySql">MySql</option>
                                            <?php elseif($courseListing->type == 'PHP'):?>
                                                <option value="Angular">Angular</option>
                                                <option value="MySql">MySql</option>
                                            <?php else: ?>
                                                <option value="PHP">PHP</option>
                                                <option value="Angular">Angular</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <!-- <input type="text" class="form-control" id="title" required> -->
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-broom"></i></span>
                                        <input type="text" class="form-control" id="title_<?php echo ($courseListing->id) ?? null; ?>" required value="<?php echo ($courseListing->title) ?? null; ?>">
                                    </div>
                                </div>

                                <div class="col-md-12 pb-3">
                                    <label for="author" class="form-label">Author</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-users"></i></span>
                                        <input type="text" class="form-control" id="author_<?php echo ($courseListing->id) ?? null; ?>" value="<?php echo ($courseListing->author) ?? null; ?>">
                                    </div>
                                </div>

                              <div class="col-md-12">
                                    <label for="content" class="form-label">Content</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book-open"></i></span>
                                        <textarea class="form-control" id="content_<?php echo ($courseListing->id) ?? null; ?>" rows="3"><?php echo ($courseListing->content) ?? null; ?></textarea>
                                    </div>
                                </div>

                              <!-- get course id -->
                              <div class="col-md-6">
                                <input type="hidden" class="form-control" id="id_<?php echo ($courseListing->id) ?? null; ?>" value="<?php echo ($courseListing->id) ?? null; ?>">
                              </div>
                              <!-- end of get course id  -->
                          </div><!-- end of row -->
                        </div><!-- end of modal-body -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                          <button type="submit" role="button" class="btn btn-primary" id="btn-listing" course-id="<?php echo ($courseListing->id) ?? null; ?>"><i class="fas fa-pencil-alt"></i> Update</button>
                        </div><!-- end of modal-footer -->
                    </div><!-- end of modal-content -->
                  </div>
                </div>
                <!-- end update course modal -->
                <?php endforeach; endif; ?>
          </tbody>
      </table>
      </div>

      </div><!-- end of row -->
    </div><!-- end of form-box -->


    <!-- add course modal -->
    <div class="modal fade" id="addCourse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addcourseLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addcourseLabel"><i class="fas fa-plus"></i> Add New Course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 pb-3">
                    <label for="Course Type" class="form-label">Course Type</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book"></i></span>
                        <select id="type" name="type" class="form-select" aria-label="Default select example">
                        <option value="0" disabled selected>Select</option>
                        <option value="PHP">PHP</option>
                        <option value="Angular">Angular</option>
                        <option value="MySql">MySql</option>
                        </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <!-- <input type="text" class="form-control" id="title" required> -->
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-broom"></i></span>
                        <input type="text" class="form-control" id="title" required>
                    </div>
                  </div>

                  <div class="col-md-12 pb-3">
                    <label for="author" class="form-label">Author</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-users"></i></span>
                        <input type="text" class="form-control" id="author">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="content" class="form-label">Content</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-book-open"></i></span>
                        <textarea class="form-control" id="content" rows="3"></textarea>
                    </div>
                  </div>

                </div><!-- end of row -->
            </div><!-- end of modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
              <button type="submit" role="button" class="btn btn-primary" id="btn-add-course" name="btn-add-course"><i class="fas fa-plus"></i> Add</button>
            </div><!-- end of modal-footer -->
        </div><!-- end of modal-content -->
      </div>
    </div>
    <!-- end add course modal -->
  </form>
</div><!-- end of container -->

<?php
include 'footer.php';
?>