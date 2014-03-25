<?php
/* @var $this ObjectsController */
/* @var $data Objects */

$itemUrl = Yii::app()->urlManager->createObjectUrl($data);
?>

<li class="itemThumbnail">
    <a href="<?= CHtml::encode($data->thumbnailBig) ?>" class="thumbnail _fancybox" title="<?= CHtml::encode($data->name) ?>">
        <table class="itemThumbnailImageWrapper">
            <tr>
                <td>
                    <img src="<?= CHtml::encode($data->thumbnailMedium) ?>" alt="<?= CHtml::encode($data->name) ?>" title="<?= CHtml::encode($data->name) ?>" />
                </td>
            </tr>
        </table>
    </a>
    <p class='itemThumbnailName longTextFadeNoCheckbox'><a href="<?= CHtml::encode($itemUrl) ?>" title="<?= CHtml::encode($data->name) ?>"><?= CHtml::encode($data->name) ?></a></p>
    <p class='itemThumbnailAuthor longTextFadeCheckbox'><?= CHtml::encode($data->getAuthorInitials()) ?></p>
</li>