<?php
/**
 * Typecho猫耳FM置顶插件
 *
 * @package GoTop
 * @author Zero
 * @version 2.0.0
 * @link https://mikuac.com/archives/369
 */

class GoTop_Plugin implements Typecho_Plugin_Interface {
    
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->header = array('GoTop_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('GoTop_Plugin', 'footer');
    }

   /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate() {

    }
    
     /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form) {

    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form) {}
    
    /**
     * 页头输出相关代码
     *
     * @access public
     * @param unknown header
     * @return unknown
     */
    public static function header() {
        $Path = Helper::options()->pluginUrl . '/GoTop/';
        echo '<link rel="stylesheet" type="text/css" href="' . $Path . 'css/main.css" />';
    }

    /**
     * 页脚输出相关代码
     *
     * @access public
     * @param unknown footer
     * @return unknown
     */
    public static function footer() {
        $Path = Helper::options()->pluginUrl . '/GoTop/';
        echo '<div class="back-to-top cd-top faa-float animated cd-is-visible" style="top: -900px;"></div>';
        echo '<script type="text/javascript" src="' . $Path . 'js/main.js"></script>';
    }

}
