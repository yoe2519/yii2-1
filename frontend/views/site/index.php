<?php
use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = 'ทดสอบ yii2-1';
?>


<?php
    $route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>">ไปที่ test 1</a>
<br>

<?php
    $route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'chainarong','lname'=>'paksin']);
?>
<a href="<?=$route2?>">ไปที่ test 2</a>
<br>

<?=
Html::a('Link 3',['test/test2','name'=>'chainarong','lname'=>'paksin'])      
?>

<hr>

<?=Html::a('About', ['/site/about'], ['class'=>'btn btn-info']);?>

<?=Html::a('Send Name', ['/site/sendname','fname'=>'Chainarong','lname'=>'Paksin'], ['class'=>'btn btn-warning']);?>
<hr>

<?php
    yii::$app->db->open();
?>