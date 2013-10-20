<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-5">
    <div id="sidebar">
        <?php
        /*$this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>'Operations',
        ));
        $this->widget('zii.widgets.CMenu', array(
            'items'=>$this->menu,
            'htmlOptions'=>array('class'=>'operations'),
        ));
        $this->endWidget();*/
        $this->widget(
            'bootstrap.widgets.TbMenu',
            array(
                'type' => 'list',
                'items' => $this->menu
            )
        );
        ?>
    </div><!-- sidebar -->
</div>
<div class="span-19 last">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<?php $this->endContent(); ?>