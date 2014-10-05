<fieldset>
    <?php 
             
                $box = $this->beginWidget(
                                    'booster.widgets.TbPanel',
                                    array(
                                        'title' => 'เมนู',
                                        'headerIcon' => 'th-list',
                                        'context' => 'primary',
                                        'padContent' => false,
                                        'htmlOptions' => array('class' => 'bootstrap-widget-table')
                                    )
                                );?>
                             <ul class="nav nav-pills nav-stacked">
                                <li><a href="index.php">หน้าหลัก</a></li>
                                <li><a href="index.php?r=site/salary/index">เงินเดือน</a></li>
                                <li><a href="index.php?r=site/otinfo">โอที</a></li>
                                <li><a href="index.php?r=site/leaveinfo">วันลา</a></li>
                            </ul>
                            <?php $this->endWidget(); ?>
                      
</fieldset>                            