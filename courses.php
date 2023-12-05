<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Courses</title>
</head>

<body>
<?php include('navbar.php'); ?>

<?php



    
$courses = [
    ['title' => 'Seeds Fundamentals', 'instructor' => 'John Doe', 'image' => 'sunflower.png', 'description' => 'To know about healthy seeds.', 'href' => "https://www.youtube.com/shorts/nL9e1wZjpVA",],
    ['title' => 'Plant the Seeds', 'instructor' => 'Jane Smith', 'image' => 'plant.png', 'description' => 'Get started with programming concepts.','href' =>"https://www.youtube.com/watch?v=SyoOxPtAwmU"],
    ['title' => 'Bale Crops', 'instructor' => 'Alice Johnson', 'image' => 'balecrops.jpg' , 'description' => 'Know the right time to bale your crops.','href' => 'https://www.youtube.com/watch?v=-3_xCNu1mtI'],
    ['title' => 'Store Crops', 'instructor' => 'Bob Williams', 'image' => 'farm.png', 'description' => 'Know the proper way to store your pearl.','href' => 'https://www.youtube.com/watch?v=QE_G8gA_IGw'],
];
?>
<div class = 'contain' ></div><i class="fa fa-align-center" aria-hidden="true"></i>>
<br><br>
<style>
        .contain {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            display: inline-block;
            text-align: center;
        }
</style>
<?php foreach ($courses as $course) : ?>
    <article class="course-card">
    <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>" style="width: 300px; height: auto;">
        <h2><?php echo $course['title']; ?></h2>
        <p>Instructor: <?php echo $course['instructor']; ?></p>
        <p><?php echo $course['description']; ?></p>
        <p><a href="<?php echo $course['href']; ?>" target="_blank">See Demo</a></p>
    </article>
    
   
<?php endforeach; ?>

</div>
<?php include('footer.php'); ?>
</body>
</html>