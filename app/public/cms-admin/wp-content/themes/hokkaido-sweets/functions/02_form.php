<?php
// エラーメッセージの変更
function validation_rule($validation, $data, $Data) {
	$validation->set_rule('your_name', 'noempty', array('message' => 'お名前を入力してください'));
	$validation->set_rule('your_furigana', 'noempty', array('message' => 'フリガナを入力してください'));
	$validation->set_rule('your_furigana', 'katakana', array('message' => 'カタカナで入力してください'));
	$validation->set_rule('your_mail', 'noempty', array('message' => 'メールアドレスを入力してください'));
	$validation->set_rule('your_mail', 'mail', array('message' => '正しいメールアドレスではありません'));
	$validation->set_rule('your_message', 'noempty', array('message' => 'お問い合わせ内容を入力してください'));
	$validation->set_rule('your_agree', 'required', array('message' => 'チェックしてください'));
	return $validation;
}
add_filter('mwform_validation_mw-wp-form-19', 'validation_rule', 10, 3);