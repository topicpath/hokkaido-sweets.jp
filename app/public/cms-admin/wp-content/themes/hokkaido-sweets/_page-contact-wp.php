<div class="page-contact__lead">
	<div class="is-input">
		<p>「sweets garden Prateria」に関する<br class="sp">ご相談やご不明な点はこちらから<br class="sp">お気軽にお問い合わせください。<br>必要項目をご記入の上、送信ください。</p>
	</div>
	<div class="is-confirm">
		<p>下記内容をご確認の上「送信する」ボタンを押してください。<br>修正する場合は「入力画面に戻る」ボタンで戻り修正ください。</p>
	</div>
</div>

<div class="page-contact__form">
	<dl class="page-contact__row">
		<dt class="page-contact__main">
			<span class="page-contact__main--text">お名前</span>
			<span class="page-contact__main--icon">必須</span>
		</dt>
		<dd class="page-contact__sub">
			<label class="page-contact__label">[mwform_text name="your_name" id="input_name" placeholder="（例）山田 花子" show_error="false"][mwform_error keys="your_name"] </label>
		</dd>
	</dl>
	<dl class="page-contact__row">
		<dt class="page-contact__main">
			<span class="page-contact__main--text">フリガナ</span>
			<span class="page-contact__main--icon">必須</span>
		</dt>
		<dd class="page-contact__sub">
			<label class="page-contact__label">[mwform_text name="your_furigana" id="input_furigana" placeholder="（例）ヤマダ ハナコ" show_error="false"][mwform_error keys="your_furigana"]</label>
		</dd>
	</dl>
	<dl class="page-contact__row">
		<dt class="page-contact__main">
			<span class="page-contact__main--text">メールアドレス</span>
			<span class="page-contact__main--icon">必須</span>
		</dt>
		<dd class="page-contact__sub">
			<label class="page-contact__label">[mwform_email name="your_mail" id="input_mail" placeholder="（例）aaa@example.com" show_error="false"][mwform_error keys="your_mail"]</label>
			<p class="page-contact__note is-input">迷惑メール対策等で、ドメイン指定受信を設定されている場合にメールが正しく届かないことがございます。以下のドメインを受信できるように設定してください。<br>「@hokkaido-sweets.co.jp」</p>
		</dd>
	</dl>
	<dl class="page-contact__row">
		<dt class="page-contact__main">
			<span class="page-contact__main--text">お電話番号</span>
			<span class="page-contact__main--icon bg-border">任意</span>
		</dt>
		<dd class="page-contact__sub">
			<label class="page-contact__label">[mwform_text name="your_tel" id="input_tel" placeholder="（例）00000000000" show_error="false"]</label>
		</dd>
	</dl>
	<dl class="page-contact__row">
		<dt class="page-contact__main">
			<span class="page-contact__main--text">お問い合わせ内容</span>
			<span class="page-contact__main--icon">必須</span>
		</dt>
		<dd class="page-contact__sub">
			<label class="page-contact__label">[mwform_textarea name="your_message" id="input_message" show_error="false"][mwform_error keys="your_message"]</label>
		</dd>
	</dl>
	<div class="page-contact__agree">
		<div class="is-input">
			<p class="page-contact__agree--text">当社<a class="page-contact__anc" href="https://www.hokkaido-miyage.jp/privacy/" target="_blank">個人情報取扱いについて</a><span class="page-contact__external"><img src="/cms-admin/wp-content/themes/hokkaido-sweets/assets/images/svg/icon-external.svg" alt=""></span>に同意頂ける場合は<br>「同意する」にチェックを付け「入力内容の確認」ボタンをクリックしてください。</p>
			<fieldset class="page-contact__radio">[mwform_checkbox name="your_agree" id="check_agree" children="同意する" separator="," show_error="false"]</fieldset>
			<p class="page-contact__agree-error">[mwform_error keys="your_agree"]</p>
		</div>
	</div>
	<div class="page-contact__btns">
		<p class="page-contact__btn">
			<label class="m-btn__link--green page-contact__link">[mwform_submitButton name="mwform_submitButton-740" confirm_value="入力内容の確認" submit_value="送信する"]</label>
		</p>
		<p class="page-contact__btn is-confirm">
			<label class="m-btn__link--back page-contact__link">[mwform_backButton value="入力画面に戻る"]</label>
		</p>
	</div>
</div>