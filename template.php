<table id="myTable">
    <thead>
    <tr>
        <th>Место участника</th>
        <th>Номер участника</th>
        <th>Имя участника</th>
        <th>Автомобиль участника</th>
        <th>Город участника</th>
        <?php
        // Вывод попыток
        for ($i = 0; $i < $countAttempts; $i++) {
            echo '<th class="sorting">Заезд #' . ($tempIndex = $i+1) . '</th>';
        }
        ?>
        <th class="sorting">Итого</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Вывод строк в таблицу
    foreach ($cars as $index=>$car){
        ?>
        <tr>
            <td><?=$index+1?></td>
            <td><?=$car->getId()?></td>
            <td><?=$car->getName()?></td>
            <td><?=$car->getCar()?></td>
            <td><?=$car->getCity()?></td>
            <?php
            foreach ($car->attempts as $attempt) {
                ?>
                <td><?=$attempt->getTime()?></td>
                <?php
            }
            ?>
            <td><?=$car->getResult()?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
