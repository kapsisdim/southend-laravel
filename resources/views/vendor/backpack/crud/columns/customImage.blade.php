{{-- customImage--}}
<?php foreach ($entry->images as $image): ?>
    <?php if($image['main']): ?>
        <?php $mainImage = $image['image']; break;?>
    <?php else: ?>
        <?php $mainImage = $image['image'];?>
    <?php endif; ?>
<?php endforeach; ?>
<span><a href="<?=$mainImage?>" target="blank"><img src="<?=$mainImage?>" style="max-height: 50px; width: auto; border-radius: 3px;"></a></span>
