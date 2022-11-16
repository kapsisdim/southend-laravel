{{-- customStock--}}
<?php $stock = 0; ?>
<?php foreach($entry->sizes as $size): ?>
    <?php $stock = $stock + $size->pivot->amount; ?>
<?php endforeach; ?>
<span><?=$stock?></span>
