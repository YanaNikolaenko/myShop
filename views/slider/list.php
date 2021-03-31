<table border="2">
    <caption>Таблица слайдер</caption>
    <tr>
        <th>Порядковый номер</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Image</th>
        <th>Link</th>
    </tr>
    <?php foreach ($sliders as $slider): ?>
        <tr>
            <td><?= $slider['id'] ?></td>
            <td><?= $slider['title'] ?></td>
            <td><?= $slider['subtitle'] ?></td>
            <td><?= $slider['image'] ?></td>
            <td><?= $slider['link'] ?></td>
        </tr>
    <? endforeach ?>

</table>