
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudin Careers</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php if($message = Session::get('success')): ?>
     <div class="alert alert-success alert-block">
      <strong> <?php echo e($message); ?></strong>
     </div>
     <?php endif; ?>
<h1 style="font-size:20px; margin-left:15%" >Job Opening</h1>


      <div class="container">
        <div class="col-sm-8">
          <div class="card mt-3 p-3">
            <h3 class="text-muted"> Edit</h3>
          <form method="POST" action="/jobopening/<?php echo e($jobopening->id); ?>/update" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="form-group">
              <label>Job Title</label><br>
              <input type="text" name="Title" class="form-control" placeholder= " Job Title " required 
              value="<?php echo e(old('Title',$jobopening->Title)); ?>"
              />
              </div>
              <div class="form-group">
              <label>Description</label><br>
              <textarea class="form-control" rows="4" name="Description" placeholder= "Job Description" required
              ><?php echo e(old('Description',$jobopening->Description)); ?></textarea> 
              </div>
              <div class='row'>
              <div class="col-6">
              <div class="form-group">
              <label>Job Vaccancy</label><br>
              <input type="number" name="Vacancy" class="form-control " placeholder= "Number Of Vaccancy" required
              value="<?php echo e(old('vacancy',$jobopening->Vacancy)); ?>"/>
              </div>
              </div>
              <div class="col-6">
              <div class="form-group">
              <label>Job Location</label><br>
              <input type="text" name="Location" class="form-control " placeholder= "Place" required
              value="<?php echo e(old('Location',$jobopening->Location)); ?>"/>
              </div>
              </div>
              </div>
              <div class="form-group">
              <label>Job Type</label><br>
              
              <select id="jobtype" name="Type" class="form-control">
              <option value="Full time" <?php echo e($jobopening->Type== "Full time" ? 'selected' : ""); ?>>Full time</option>
              <option value="Part time" <?php echo e($jobopening->Type=="Part time" ? 'selected' : ""); ?>>Part time</option>
              </select>
              </div> 
              <div class="form-group">
              <label>Departments</label><br>
              <select id="DepartmentId" name="DepartmentId" class="form-control">
              <option value="Select Department">--Select Department--</option>
                <?php $__currentLoopData = $departmentlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($dept->id); ?>" <?php echo e($jobopening->DepartmentId== $dept->id ? 'selected' : ""); ?>><?php echo e($dept->Departments); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-dark">UPDATE</button>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
  
</body>
</html><?php /**PATH C:\job openings\cloudincareers\resources\views/jobopening/edit.blade.php ENDPATH**/ ?>