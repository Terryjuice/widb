<?php
/* @var $this CollectionsController */
/* @var $data Collections */

$itemUrl = $this->createUrl('objects/view', array('id' => $data->id));
?>

<table class="itemList">
    <tr>
        <td class="itemListCheckboxBlock"><input type="checkbox" class="_objectItem" data-object-id="<?= $data->id ?>" /></td>
        <td class="itemListImageBlock">
            <a href="<?= CHtml::encode($data->thumbnailBig) ?>" title="<?= CHtml::encode($data->name) ?>" class="thumbnail _fancybox">
                <table class="itemListImageWrapper">
                    <tr>
                        <td>
                            <img src="<?= CHtml::encode($data->thumbnailSmall) ?>" alt="<?= CHtml::encode($data->name) ?>" title="<?= CHtml::encode($data->name) ?>" />
                        </td>
                    </tr>
                </table>

            </a>
        </td>
        <td class="itemListDescriptionBlock">
            <p class="itemListName"><a href='<?= CHtml::encode($itemUrl) ?>'><?= CHtml::encode($data->name) ?></a></p>
            <p class="itemListData1">
                <span class='itemListAuthor'><?= CHtml::encode($data->author->initials) ?></span>
                <?php if (!empty($data->period)): ?>
                    <span class="itemListCreationPeriod">, <?= CHtml::encode($data->period) ?></span>
                <?php endif; ?>
            </p>
            <p class="itemListData2">
                <span class="itemListInventoryNumber"><?= CHtml::encode($data->inventory_number) ?></span>
                <?php if(!empty($data->type->name)): ?>
                    <span class="itemListObjectType">, <?= CHtml::encode(OutputHelper::stringToLower($data->type->name)) ?></span>
                <?php endif; ?>
                <?php if(!empty($data->size)): ?>
                    <span class="itemListSize">, <?= CHtml::encode($data->size) ?></span>
                <?php endif; ?>
            </p>


        </td>
    </tr>
</table>