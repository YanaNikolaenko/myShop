<table border="2">
    <caption>Таблица слайдер</caption>
    <tr>
        <th>Порядковый номер</th>
        <th>Title</th>
        <th>Subtitle</th>
        <th>Image</th>
        <th>Label</th>
        <th>Link</th>
        <th>Big_style</th>
        <th>Medium_style</th>
        <th>Small_style</th>
    </tr>
    <?php foreach ($sliders as $slider): ?>
        <tr>
            <td><?= $slider['id'] ?></td>
            <td><?= $slider['title'] ?></td>
            <td><?= $slider['subtitle'] ?></td>
            <td><?= $slider['image'] ?></td>
            <td><?= $slider['label'] ?></td>
            <td><?= $slider['link'] ?></td>
            <td><?= $slider['big_style'] ?></td>
            <td><?= $slider['medium_style'] ?></td>
            <td><?= $slider['small_style'] ?></td>
        </tr>
    <? endforeach ?>

</table>