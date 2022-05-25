<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1><?php echo e($directory->id); ?></h1>
    <hr>
    Document : <?php echo e($directory->name_en); ?>

    <hr>
    Name: <?php echo e($directory->document); ?>

    <hr>
    Author : <?php echo e($directory->forumHasUser->name); ?>

    <hr>
    Date : <?php echo e($directory->created_at); ?>

</body>
</html><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171\resources\views/directory/pdf-file.blade.php ENDPATH**/ ?>