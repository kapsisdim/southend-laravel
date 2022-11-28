{{-- customSize--}}
<?php $sizes = ''; ?>
<?php foreach($entry->sizes as $key => $size): ?>
    <?php $sizes = $sizes . $size->size; ?>
    <?php ($key == count($entry->sizes) - 1) ? $sizes = $sizes . '' : $sizes = $sizes . ', ' ;?>
<?php endforeach; ?>
<span><?= strlen($sizes) > 0 ? $sizes : '-'; ?></span>
