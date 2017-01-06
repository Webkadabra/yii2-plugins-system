<?php
use lo\plugins\helpers\BS;
use yii\helpers\Html;

/**
 * @var array $model
 * @var array $key
 */

if ($model['is_installed']) {
    $name = 'Update';
    $ver = BS::label($model['old_version']) . ' to ' . BS::label($model['version'], BS::TYPE_SUCCESS);
    $class = BS::TYPE_SUCCESS;
} else {
    $name = 'Install';
    $ver = BS::label($model['version'], BS::TYPE_PRIMARY);
    $class = BS::TYPE_PRIMARY;
};

echo Html::beginTag('tr');
echo Html::tag('td', $model['name']);
echo Html::tag('td', $ver);
echo Html::tag('td', $model['author']);
echo Html::tag('td', $model['text']);

echo Html::tag('td', Html::a($name, ['plugin/install', 'id' => $key], [
    'class' => 'btn btn-' . $class,
    'data' => [
        'method' => 'post'
    ]
]));
echo Html::endTag('tr');