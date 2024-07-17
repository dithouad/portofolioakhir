<?php
$skills = [
    'HTML', 
    'CSS', 
    'JavaScript', 
    'PHP', 
    'SQL', 
    'Bootstrap', 
    'Tailwind'
];
?>

<div class="skills-list">
    <?php foreach($skills as $skill): ?>
        <ul>
            <li><?php echo $skill; ?></li>
        </ul>
    <?php endforeach; ?>
</div>
