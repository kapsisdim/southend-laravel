{{-- customStock--}}
<?php $stock = 0; ?>
<?php foreach($entry->sizes as $size): ?>
    <?php $stock = $stock + $size->pivot->amount; ?>
<?php endforeach; ?>

<?php if ($stock == 0): ?>
    <span class="badge badge-danger">{{ $stock }}</span>
<?php elseif($stock < 10): ?>
    <span class="badge badge-warning">{{ $stock }}</span>
<?php else: ?>
    <span class="badge badge-primary">{{ $stock }}</span>
<?php endif; ?>

