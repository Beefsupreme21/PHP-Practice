<!DOCTYPE html>
 
 <html>
    <body>
        <h1>
            <?= $greeting; ?>  
        </h1>
        <ul>
            <?php
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
            ?>

        </ul>
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li><?=  $animal; ?></li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <?php foreach ($person as $key => $feature) : ?>
                <li><?=$key . ' ' . $feature; ?></li>
            <?php endforeach; ?>
        </ul>

        <h1>Task for the day</h1>
        <ul>
            <?php foreach ($task as $key => $value) : ?>
                <li><?= ucwords($key) . ' ' . $value; ?></li>
            <?php endforeach; ?>
        </ul>

        <ul>
            <li>
                <strong>Name: </strong><?= $task['title']; ?>
            </li>

            <li>
                <strong>Due Date: </strong><?= $task['due']; ?>
            </li>

            <li>
                <strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
            </li>
            <!-- Ternary Operator check boolean, if true do something, if it's not true do something else
            true ? 'do something : 'do something else" -->
            <li>
                <strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li>

            <li>
                <strong>Status: </strong>
                <?php 
                if ($task['completed']) {
                    echo 'Finished';
                } else 
                    echo 'Incomplete';
                
                ?>
            </li>
        </ul>

        <ul>
            <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php endif; ?>
                <?= $task->description; ?>
            </li>
            <?php endforeach; ?>
        </ul>


    </body>
 </html> 
 
 