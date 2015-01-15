<?php
function switch_page($page)
{
	switch ($page) {
		case 'beranda':$p = 'beranda.php';break;
		case 'about':$p = 'about.php';break;
		case 'member':$p = 'member.php';break;
		case 'member_registration':$p='member_registration.php';break;
		case 'hapus_member':$p = 'action/act_member_remove.php';break;
		case 'detil_member':$p = 'member_detail.php';break;
		case 'edit_member':$p = 'member_edit.php';break;
		case 'genre':$p = 'genre.php';break;
		case 'publisher':$p = 'publisher.php';break;
		case 'download':$p = 'list_game.php';break;
		case 'tambah_game':$p = 'add_game.php';break;
		case 'tambah_genre':$p = 'add_genre.php';break;
		case 'tambah_publisher':$p = 'add_publisher.php';break;
		case 'act_tambah_game':$p = 'action/act_add_game.php';break;
		case 'detil_game':$p = 'game_detail.php';break;
		case 'filter_game':$p = 'game_filter.php';break;
		case 'cari_game':$p = 'game_search.php';break;
		case 'hapus_game':$p = 'action/act_game_remove.php';break;
		case 'act_tambah_genre':$p = 'action/act_add_genre.php';break;
		case 'act_ubah_genre':$p = 'action/act_edit_genre.php';break;
		case 'act_hapus_genre':$p = 'action/act_remove_genre.php';break;
		case 'act_tambah_publisher':$p = 'action/act_add_publisher.php';break;
		case 'act_ubah_publisher':$p = 'action/act_edit_publisher.php';break;
		case 'act_hapus_publisher':$p = 'action/act_remove_publisher.php';break;
		case 'act_member_edit':$p = 'action/act_member_edit.php';break;
		case 'act_daftar':$p = 'action/act_member_registration.php';break;
		case 'act_login':$p = 'action/act_login.php';break;
		case 'logout':$p = 'action/act_logout.php';break;
		default:$p = 'beranda.php';break;
	}
	return $p;
}