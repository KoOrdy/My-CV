<?php
    include_once"back.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>My CV</title>
</head>
<body>
    <h1><?php echo $data['name']; ?></h1>
    <p><strong>Phone:</strong> <?php echo $data['contact']['phone']; ?></p>
    <p><strong>Email:</strong> <?php echo $data['contact']['email']; ?></p>
    <p><strong>Address:</strong> <?php echo $data['contact']['address']; ?></p>
    
    <div class="section">
        <h2>Education</h2>
        <p><?php echo $data['education']['degree']; ?> - <?php echo $data['education']['university']; ?></p>
        <p>Expected Graduation: <?php echo $data['education']['graduation_date']; ?></p>
    </div>
    
    <div class="section">
        <h2>Internships</h2>
        <ul>
            <?php foreach ($data['internships'] as $internship): ?>
                <li>
                    <strong><?php echo $internship['role']; ?></strong> at <?php echo $internship['company']; ?>, <?php echo $internship['location']; ?>
                    <br>
                    <em><?php echo $internship['date']; ?></em>
                    <p><?php echo $internship['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <div class="section">
        <h2>Projects</h2>
        <ul>
            <?php foreach ($data['projects'] as $project): ?>
                <li>
                    <strong><?php echo $project['name']; ?> (<?php echo $project['year']; ?>)</strong>
                    <br>
                    Technologies: <?php echo $project['technologies']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <div class="section">
        <h2>Technical Skills</h2>
        <ul>
            <?php foreach ($data['technical_skills'] as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    
    <div class="section">
        <h2>Languages</h2>
        <ul>
            <?php foreach ($data['languages'] as $language): ?>
                <li><?php echo $language; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
