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

class DataTablesTableToolsAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables-tabletools';

    public $css = [
        "css/dataTables.tableTools.css",
    ];

    public $js = [
        "js/dataTables.tableTools.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'dbfernandes\datatables\DataTablesAsset',
    ];
}
