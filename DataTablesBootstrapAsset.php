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

class DataTablesBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables-bootstrap3';

    public $css = [
        "BS3/assets/css/datatables.css",
    ];

    public $js = [
        "BS3/assets/js/datatables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'dbfernandes\datatables\DataTablesAsset',
    ];
}
