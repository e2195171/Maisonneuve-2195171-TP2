<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <h1>Article : <?php echo e($article->id); ?></h1>
    <hr>
    Title : <?php echo e($article->title_en); ?>

    <hr>
    Body : <?php echo e($article->body_en); ?>

    <hr>
    Category : <?php echo e($article->forumHasCategorie->categorie_en); ?>

    <hr>
    Author : <?php echo e($article->forumHasUser->name); ?>

    <hr>
    Date : <?php echo e($article->created_at); ?>

</body>
</html><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171\resources\views/forum/pdf-file.blade.php ENDPATH**/ ?>