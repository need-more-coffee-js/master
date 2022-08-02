<?php
$user = \frontend\models\Users::find()->asArray()->all();
foreach ($user as $key => $users)
{
    foreach ($users as $k => $values)
    {
        var_dump($values);
    }
}
?>
<h1>hello suka</h1>

