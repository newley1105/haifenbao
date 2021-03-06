<?php
/**
 * 载入权限
 *
 */
defined('ZQ-SHOP') or exit('Access Invalid!');
$_limit =  array(
	array('name'=>$lang['nc_config'], 'child'=>array(
		array('name'=>$lang['nc_web_set'], 'op'=>null, 'act'=>'setting'),
		array('name'=>$lang['nc_web_account_syn'], 'op'=>null, 'act'=>'account'),
		array('name'=>$lang['nc_upload_set'], 'op'=>null, 'act'=>'upload'),
		array('name'=>$lang['nc_seo_set'], 'op'=>'seo', 'act'=>'setting'),
		array('name'=>$lang['nc_pay_method'], 'op'=>null, 'act'=>'payment'),
		array('name'=>$lang['nc_message_set'], 'op'=>null, 'act'=>'message'),
		array('name'=>$lang['nc_admin_express_set'], 'op'=>null, 'act'=>'express'),
	    array('name'=>$lang['nc_admin_offpay_area_set'], 'op'=>null, 'act'=>'offpay_area'),
	    array('name'=>$lang['nc_admin_clear_cache'], 'op'=>null, 'act'=>'cache'),
	    array('name'=>$lang['nc_admin_perform_opt'], 'op'=>null, 'act'=>'perform'),
	    array('name'=>$lang['nc_admin_search_set'], 'op'=>null, 'act'=>'search'),
	    array('name'=>$lang['nc_admin_log'], 'op'=>null, 'act'=>'admin_log'),
		)),
	array('name'=>$lang['nc_goods'], 'child'=>array(
		array('name'=>$lang['nc_goods_manage'], 'op'=>null, 'act'=>'goods'),
		array('name'=>$lang['nc_class_manage'], 'op'=>null, 'act'=>'goods_class'),
		array('name'=>$lang['nc_brand_manage'], 'op'=>null, 'act'=>'brand'),
		array('name'=>$lang['nc_type_manage'], 'op'=>null, 'act'=>'type'),
		array('name'=>$lang['nc_spec_manage'], 'op'=>null, 'act'=>'spec'),
		array('name'=>$lang['nc_album_manage'], 'op'=>null, 'act'=>'list'),		
		)),
/*	array('name'=>$lang['nc_store'], 'child'=>array(
		array('name'=>$lang['nc_store_manage'], 'op'=>null, 'act'=>'store'),
		array('name'=>$lang['nc_store_grade'], 'op'=>null, 'act'=>'store_grade'),
		array('name'=>$lang['nc_store_class'], 'op'=>null, 'act'=>'store_class'),
		array('name'=>$lang['nc_domain_manage'], 'op'=>null, 'act'=>'domain'),
		array('name'=>$lang['nc_s_snstrace'], 'op'=>null, 'act'=>'sns_strace'),
		)),*/
	array('name'=>$lang['nc_trade'], 'child'=>array(
		array('name'=>$lang['nc_order_manage'], 'op'=>null, 'act'=>'order'),
		array('name'=>'退款管理', 'op'=>null, 'act'=>'refund'),
		array('name'=>'退货管理', 'op'=>null, 'act'=>'return'),
		array('name'=>$lang['nc_consult_manage'], 'op'=>null, 'act'=>'consulting'),
		array('name'=>$lang['nc_inform_config'], 'op'=>null, 'act'=>'inform'),
		array('name'=>$lang['nc_goods_evaluate'], 'op'=>null, 'act'=>'evaluate'),
		array('name'=>$lang['nc_complain_config'], 'op'=>null, 'act'=>'complain'),
		)),		
	array('name'=>$lang['nc_transport'], 'child'=>array(
		array('name'=>$lang['nc_transport_manage'], 'op'=>null, 'act'=>'tran_order'),
		array('name'=>'运费查询', 'op'=>null, 'act'=>'shipping_fee'),
		//array('name'=>$lang['nc_member_path_deliver'], 'op'=>null, 'act'=>'tran_order'),
		//array('name'=>$lang['nc_member_path_daddress'], 'op'=>null, 'act'=>'tran_order'),
		)),		
		
	array('name'=>$lang['nc_member'], 'child'=>array(
		array('name'=>$lang['nc_member_manage'], 'op'=>null, 'act'=>'member'),
		array('name'=>$lang['nc_member_notice'], 'op'=>null, 'act'=>'notice'),
		array('name'=>$lang['nc_member_pointsmanage'], 'op'=>null, 'act'=>'points'),
		array('name'=>$lang['nc_binding_manage'], 'op'=>null, 'act'=>'sns_sharesetting'),
		array('name'=>$lang['nc_member_album_manage'], 'op'=>null, 'act'=>'sns_malbum'),
	    array('name'=>$lang['nc_snstrace'], 'op'=>null, 'act'=>'snstrace'),
		array('name'=>$lang['nc_member_tag'], 'op'=>null, 'act'=>'sns_member'),
		array('name'=>$lang['nc_member_predepositmanage'], 'op'=>null, 'act'=>'predeposit'),
		)),
	array('name'=>$lang['nc_website'], 'child'=>array(
		array('name'=>$lang['nc_article_class'], 'op'=>null, 'act'=>'article_class'),
		array('name'=>$lang['nc_article_manage'], 'op'=>null, 'act'=>'article'),
		array('name'=>$lang['nc_document'], 'op'=>null, 'act'=>'document'),
		array('name'=>$lang['nc_navigation'], 'op'=>null, 'act'=>'navigation'),
		array('name'=>$lang['nc_adv_manage'], 'op'=>null, 'act'=>'adv'),
		array('name'=>$lang['nc_web_index'], 'op'=>null, 'act'=>'web_config|web_api'),
		array('name'=>$lang['nc_admin_res_position'], 'op'=>null, 'act'=>'rec_position'),
		)),
	array('name'=>$lang['nc_operation'], 'child'=>array(
		array('name'=>$lang['nc_operation_set'], 'op'=>null, 'act'=>'operation'),
		//array('name'=>$lang['nc_groupbuy_manage'], 'op'=>null, 'act'=>'groupbuy'),
		array('name'=>$lang['nc_activity_manage'], 'op'=>null, 'act'=>'activity'),
/*		array('name'=>$lang['nc_promotion_xianshi'], 'op'=>null, 'act'=>'promotion_xianshi'),
		array('name'=>$lang['nc_promotion_mansong'], 	'op'=>null, 'act'=>'promotion_mansong'),
		array('name'=>$lang['nc_promotion_bundling'], 'op'=>null, 'act'=>'promotion_bundling'),
		array('name'=>'推荐展位', 'op'=>null, 'act'=>'promotion_bundling'),
		array('name'=>$lang['nc_pointprod'], 'op'=>null, 'act'=>'pointprod|pointorder'),
		array('name'=>$lang['nc_voucher_price_manage'], 	'op'=>null, 'act'=>'voucher'),*/
	    array('name'=>$lang['nc_bill_manage'], 'op'=>null, 'act'=>'bill'),
		)),
	array('name'=>$lang['nc_stat'], 'child'=>array(
		array('name'=>$lang['nc_statmember'], 'op'=>null, 'act'=>'stat_member'),
//		array('name'=>$lang['nc_statstore'], 'op'=>null, 'act'=>'stat_store'),
		array('name'=>$lang['nc_stattrade'], 'op'=>null, 'act'=>'stat_trade'),
		array('name'=>$lang['nc_statmarketing'], 'op'=>null, 'act'=>'stat_marketing'),
		array('name'=>$lang['nc_stataftersale'], 	'op'=>null, 'act'=>'stat_aftersale'),
		)),
	array('name' => '众筹', 'child' => array(
		array('name' => '众筹列表', 'op'=> 'index', 'act' => 'crowd'),
	)),
);

if (C('mobile_isuse') !== NULL){
	$_limit[] = array('name'=>$lang['nc_mobile'], 'child'=>array(
		array('name'=>$lang['nc_mobile_adset'], 'op'=>NULL, 'act'=>'mb_ad'),
		array('name'=>$lang['nc_mobile_catepic'], 'op'=>NULL, 'act'=>'mb_category'),
		array('name'=>$lang['nc_mobile_feedback'], 'op'=>NULL, 'act'=>'feedback'),
		array('name'=>$lang['nc_mobile_update_cache'], 'op'=>NULL, 'act'=>'mb_cache')
		));
}

/*if (C('microshop_isuse') !== NULL){
	$_limit[] = array('name'=>$lang['nc_microshop'], 'child'=>array(
		array('name'=>$lang['nc_microshop_manage'], 'op'=>'manage', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_goods_manage'], 'op'=>'goods|goods_manage', 'act'=>'microshop'),//op值重复(goods_manage,goodsclass_list,personal_manage...)是为了无权时，隐藏该菜单
		array('name'=>$lang['nc_microshop_goods_class'], 'op'=>'goodsclass|goodsclass_list', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_personal_manage'], 'op'=>'personal|personal_manage', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_personal_class'], 'op'=>'personalclass|personalclass_list', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_store_manage'], 'op'=>'store|store_manage', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_comment_manage'], 'op'=>'comment|comment_manage', 'act'=>'microshop'),
		array('name'=>$lang['nc_microshop_adv_manage'], 'op'=>'adv|adv_manage', 'act'=>'microshop')
		));
}*/


return $_limit;
?>
