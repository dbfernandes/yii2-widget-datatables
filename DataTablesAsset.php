<?php
/**
 * @copyright David Fernandes de Oliveira
 * @author David Fernandes de Oliveira <dbfernandes@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */
namespace dbfernandes\datatables;
use yii\web\AssetBundle;

/**
 * Datatables Yii2 widget
 * @author David Fernandes de Oliveira <dbfernandes@gmail.com>
 */
class DataTablesAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables';

    public $css = [
        "media/css/jquery.dataTables.css",
    ];

    public $js = [
        "media/js/jquery.dataTables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
