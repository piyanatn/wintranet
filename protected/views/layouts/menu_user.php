<fieldset>
                            <?php $box = $this->beginWidget(
                            'booster.widgets.TbPanel',
                            array(
                                'title' => 'จัดการ User',
                                'headerIcon' => 'th-list',
                                'context' => 'success',
                                 'headerIcon' => 'user',
                                'padContent' => false,
                                'htmlOptions' => array('class' => 'bootstrap-widget-table')
                            )
                        );?>

                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="index.php?r=userinfo/index">รายชื่อ</a></li>
                                        <li><a href="index.php?r=userinfo/create">เพิ่มผู้ใช้งาน</a></li>
                                    </ul>
      
                        <?php $this->endWidget(); ?>
</fieldset>                            