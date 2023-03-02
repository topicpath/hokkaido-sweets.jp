<?php get_header();
$url = get_permalink();
$text = wp_get_document_title();
$share_url = urlencode($url);
$share_text = urlencode($text);
$images = URL_FRONT_PAGE_IMAGES;
 ?>
<article class="fp-mv">
  <div class="fp-mv__contents">
    <h1 class="fp-mv__logo"><img src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" loading="lazy"/></h1>
  </div>
</article>
<article class="fp-pickup js-fp-pickup-slider swiper">
  <div class="fp-pickup__wrapper swiper-wrapper">
    <div class="fp-pickup__item swiper-slide">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>ソフトクリーム</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
      </div>
      <picture class="fp-pickup__picture"><img src="<?= $images ?>pickup-item-01.jpg" alt=""/></picture>
    </div>
    <div class="fp-pickup__item swiper-slide">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>シュークリーム</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
      </div>
      <picture class="fp-pickup__picture"><img src="<?= $images ?>pickup-item-02.jpg" alt=""/></picture>
    </div>
    <div class="fp-pickup__item swiper-slide">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>プリン</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
      </div>
      <picture class="fp-pickup__picture"><img src="<?= $images ?>pickup-item-03.jpg" alt=""/></picture>
    </div>
    <div class="fp-pickup__item swiper-slide">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>クッキー</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
      </div>
      <picture class="fp-pickup__picture"><img src="<?= $images ?>pickup-item-04.jpg" alt=""/></picture>
    </div>
    <div class="fp-pickup__item swiper-slide">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">摩訶不思議スイーツ<br>パリネル</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img src="<?= $images ?>pickup-item-05.jpg" alt=""/></picture>
    </div>
  </div>
</article>
<article class="fp-feature">
  <section class="fp-feature__section l-section">
    <div class="fp-feature__contents l-contents">
      <div class="fp-feature__head js-inview">
        <p class="fp-feature__sub-text"><span class="fp-feature__sub-text-body">浜中プレミアムシリーズ</span></p>
        <h1 class="fp-feature__main-text">浜中町指定牧場<br>北海道牛乳使用</h1>
      </div>
      <div class="fp-feature__body js-inview">
        <div class="fp-feature__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
        <h2 class="fp-feature__subject">北海道、浜中町で生まれました。</h2>
        <p class="fp-feature__desc">北海道浜中町農協と指定牧場の生産者の協力を得て、<br>特選規格・乳脂肪分4.0%以上の生乳だけを選んでつくった<br>成分無調整牛乳を使用した浜中プレミアムシリーズ。</p>
        <div class="fp-feature__map"><img src="<?= $images ?>feature-map.png" alt="" loading="lazy"/></div>
      </div>
    </div>
  </section>
</article>
<article class="fp-about">
  <section class="fp-about__section l-section">
    <div class="fp-about__head js-inview">
      <h1 class="o-heading">最高の環境で、しあわせに育った<br>牛の牛乳は北海道からの贈り物。</h1>
    </div>
    <div class="fp-about__contents fp-about__contents--l js-inview">
      <div class="fp-about__inner fp-about__inner--l">
        <h2 class="fp-about__subject fp-about__subject--l">どこまでも、<br>のびのび育つ牛たち。</h2>
        <div class="fp-about__body">
          <p class="fp-about__desc">根釧エリアの夏の平均気温は約18℃。<br>暑さが苦手な牛たちにとって、<br>海辺の牧場はまさに楽園。<br>さらに一部の牛舎では、<br>牛にストレスをかけないよう<br>繋がない「フリーストール」で<br>飼育されています。</p>
        </div>
        <picture class="fp-about__picture o-fit"><img src="<?= $images ?>about-img-01.jpg" alt="" loading="lazy"/></picture>
      </div>
    </div>
    <div class="fp-about__contents fp-about__contents--r js-inview">
      <div class="fp-about__inner fp-about__inner--r">
        <h2 class="fp-about__subject fp-about__subject--r">浜中町ならではの<br>飼料が美味しさの秘訣。</h2>
        <picture class="fp-about__picture o-fit"><img src="<?= $images ?>about-img-02.jpg" alt="" loading="lazy"/></picture>
        <div class="fp-about__body">
          <p class="fp-about__desc">北海道・浜中町には、<br>保湿性、通気性、通水性にすぐれた、<br>栄養たっぷりの土と、<br>海のミネラル豊富な潮風を受けた<br>飼料があります。<br>高品質な肥料で育った<br>牛から生まれた特撰規格の牛乳です。</p>
        </div>
      </div>
    </div>
  </section>
</article>
<article class="fp-product">
  <section class="fp-product__section l-section fp-product-soft">
    <div class="fp-product__contents l-contents">
      <div class="fp-product__head js-inview">
        <h1 class="o-heading">牛乳本来のおいしさを<br>そのまま閉じ込めました。</h1>
      </div>
      <div class="fp-product__body js-inview">
        <div class="fp-product-item cl-yfe">
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳<br>ソフトクリーム</h2>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
            </div>
            <h3 class="fp-product-item__catch">さわやかな香りとコク深い牛乳の味わい<br>本物の牛乳ソフトクリーム</h3>
            <p class="fp-product-item__desc">牛乳の美味しさをそのまま感じられる味わいを目指して、試行錯誤を積み重ねた当店のオリジナルブレンド。4.0%の乳脂肪分のコク深い味わいと、さっぱりとした口溶けが特徴のソフトクリームです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture"><img src="<?= $images ?>product-item-01.png" alt="" loading="lazy" width="347"/></picture>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-middle">
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__image fp-product-item-image-02">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-02"><img src="<?= $images ?>product-item-02.png" alt="" loading="lazy"/></picture>
          </div>
          <div class="fp-product-item__text--half">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳クッキー</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag fp-product-item__tag--online">オンラインOK</li>
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
            </div>
            <h3 class="fp-product-item__catch">牛乳の香り豊かなクッキー<br>可愛いパッケージがおみやげにもオススメ</h3>
            <p class="fp-product-item__desc">ミルク風味がしっかりと感じられる、どこか懐かしく、やさしい味わいです。</p>
            <p class="fp-product-item__caption">※9枚セットパッケージ</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳<br>シュークリーム</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">お持ち帰り限定</li>
                  <li class="fp-product-item__tag">要冷蔵</li>
                </ol>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
            </div>
            <h3 class="fp-product-item__catch">浜中町の特選牛乳を使用した<br>カスタードクリームと北海道産小麦の<br>芳醇な香りが特徴のシュークリーム</h3>
            <p class="fp-product-item__desc">牛乳をたっぷりと使用したカスタードに北海道産生クリームを合わせた風味豊かなクリームを北海道産小麦を100%使用したシュー生地にたっぷり詰め込みました。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
          <div class="fp-product-item__image fp-product-item-image-03">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-03"><img src="<?= $images ?>product-item-03.png" alt="" loading="lazy"/></picture>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__image fp-product-item-image-04">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-04"><img src="<?= $images ?>product-item-04.png" alt="" loading="lazy"/></picture>
          </div>
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳プリン</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">お持ち帰り限定</li>
                  <li class="fp-product-item__tag">要冷蔵</li>
                </ol>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" loading="lazy"/></div>
            </div>
            <h3 class="fp-product-item__catch">さっぱりとした口溶けが特徴の<br>クセになる味わい</h3>
            <p class="fp-product-item__desc">さっぱりとした食感とコク深い牛乳の香りが特徴の、一度食べるとまた食べたくなるプリンです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-parineru js-inview">
    <div class="fp-product__contents l-contents">
      <div class="fp-product-item">
        <div class="fp-product-item__text fp-product-parineru-text">
          <p class="fp-product-parineru-logo-sub"><img src="<?= $images ?>product-logo-parineru-sub.svg" alt="摩訶不思議スイーツ"/></p>
          <h1 class="fp-product-item__visual-logo"><img src="<?= $images ?>product-logo-parineru.svg" alt="パリネル"/></h1>
          <p class="fp-product-item__visual-desc c-white">究極のパリパリ食感と<br>世にも不思議なトンカ豆クリームの<br>マリアージュ</p>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-parineru-detail-section">
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">摩訶不思議スイーツ<br>パリネル</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">お持ち帰り限定</li>
                  <li class="fp-product-item__tag">冷蔵／冷凍</li>
                </ol>
              </div>
            </div>
            <p class="fp-product-item__desc">パリパリ食感を長く維持するパイ生地に、4種のクリームをブレンドした世にも珍しいトンカ豆クリームを詰めました。<br>通常のパイ生地とは異なるエアリーな食感と、エキゾチックな風味の最高級トンカ豆クリームの相性が絶妙です。<br>食べた人にしか分からない、当店自慢の摩訶不思議スイーツをご堪能ください。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
          <div class="fp-product-item__images fp-product-parineru-detail-images">
            <picture class="fp-product-item__picture--full">
              <source media="(max-width: 767px)" srcset="<?= $images ?>product-item-05-sp.png" loading="lazy"/><img src="<?= $images ?>product-item-05.png" alt="エキゾチックな風味の最高級トンカ豆クリーム" loading="lazy"/>
            </picture>
            <dl class="fp-product-item__detail">
              <dt class="fp-product-item__detail-subject">トンカ豆</dt>
              <dd class="fp-product-item__detail-desc">中南米原産のマメ科植物の種子で、芳香性の高い香り成分のクマリンを含み、桜の葉や桃の花のような上品な香りを持っています。</dd>
              <dd class="fp-product-item__detail-image"><img src="<?= $images ?>product-item-05-b.png" alt="" loading="lazy"/></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-rusk">
    <div class="fp-product__contents l-contents">
      <div class="fp-product-item js-inview">
        <div class="fp-product-item__text fp-product-rusk-text">
          <p class="fp-product-item__visual-catch">北海道の新感覚スイーツ</p>
          <h1 class="fp-product-item__visual-logo"><img src="<?= $images ?>product-logo-rusk.svg" alt="北海道シュガーラスク"/></h1>
          <p class="fp-product-item__visual-desc">カリッサクッ!の軽い口当たりと<br>北海道産小麦とバターの<br>クセになる美味しさ<br>おみやげ人気No.1商品</p>
        </div>
        <div class="fp-product-item__image fp-product-item-image-rusk">
          <picture class="fp-product-item__picture--abs fp-product-item-picture-rusk"><img src="<?= $images ?>product-item-rusk.png" alt="" loading="lazy"/></picture>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道シューラスク<br/><small class="fp-product-item__name-text--sm">（プレーン／ショコラ）</small></h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">オンラインOK</li>
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <p class="fp-product-item__desc">シュー生地を二度焼きする事で「カリッ サクッ」の軽い口当たりに。北海道産バターと小麦の風味がクセになる洋菓子店ならではの美味しさ。<br>常温保管で日持ちも長いのでおみやげにもピッタリ。<br>発売開始から10年以上が経過した当店の看板商品です。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture"><img src="<?= $images ?>product-item-06.png" alt="" loading="lazy"/></picture>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section fp-product-lower">
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__image--sm fp-product-item-image-square">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-square"><img src="<?= $images ?>product-item-07.png" alt="" loading="lazy"/></picture>
          </div>
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道バターガレット</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">オンラインOK</li>
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <h3 class="fp-product-item__catch">バターをたっぷりと使用して焼き上げた伝統的な厚焼きクッキー</h3>
            <p class="fp-product-item__desc">柔らかで豊かなバターの風味をラム酒がやさしく引き立てます。シンプルなお菓子こそ職人の腕が光るパティシエ自慢の重厚な味わいをお愉しみください。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道<br>スノーボールクッキー<br/><small class="fp-product-item__name-text--sm">〜魅惑のホロホロ食感〜</small></h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">オンラインOK</li>
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <h3 class="fp-product-item__catch">芳醇なバターの風味とナッツの香ばしさ<br>魅惑のホロホロ食感</h3>
            <p class="fp-product-item__desc">長い年月をかけてたどり着いた独自の配合で生み出される魅惑のホロホロ食感。芳醇なバターの風味とナッツの香ばしさが織りなすクセになる味わい。純白の雪が舞い散る北海道ならではのクッキーです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
          <div class="fp-product-item__image--sm fp-product-item-image-square">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-square--r"><img src="<?= $images ?>product-item-08.png" alt="" loading="lazy"/></picture>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__image--sm fp-product-item-image-square">
            <picture class="fp-product-item__picture--abs fp-product-item-picture-square"><img src="<?= $images ?>product-item-09.png" alt="" loading="lazy"/></picture>
          </div>
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">かすてらロール</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">お持ち帰り限定</li>
                  <li class="fp-product-item__tag">要冷蔵</li>
                </ol>
              </div>
            </div>
            <h3 class="fp-product-item__catch">やさしい甘さのかすてら生地と<br>北海道産生クリームのマリアージュ</h3>
            <p class="fp-product-item__desc">上白糖を使用して焼き上げたやさしい甘さのかすてら生地で乳脂肪分45%の濃厚な北海道産生クリームを巻き上げました。<br>和と洋の絶妙なバランスが感じられるロールケーキです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<article class="fp-shop">
  <section class="fp-shop__section l-section">
    <div class="fp-shop__contents l-contents">
      <div class="fp-shop__head m-head js-inview">
        <p class="m-head__sub-text">− 店舗情報 ／ アクセス −</p>
        <h1 class="m-head__main-text">Store <small class="m-head__main-text--sm">&</small> access</h1>
      </div>
      <div class="fp-shop__body">
        <div class="fp-shop-detail js-inview">
          <picture class="fp-shop-detail__picture o-fit"><img class="o-fit__body" src="<?= $images ?>shop-img.jpg" loading="lazy"/></picture>
          <div class="fp-shop-detail__text">
            <h2 class="fp-shop-detail__logo"><img class="fp-shop-detail__logo-body" src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" loading="lazy"/></h2>
            <p class="fp-shop-detail__desc">小樽市堺町5番29号<br>（おみやげの店 こぶしや 小樽店内併設）<br>TEL.0134-64-6122<br>営業時間　10時〜18時<br>定休日　　不定休<br>（※現在は月曜日が定休日です）</p>
          </div>
        </div>
        <div class="fp-shop-access js-inview">
          <p class="fp-shop-access__desc">小樽の人気観光スポット「堺町通り」の中心にある石造り倉庫のお土産店内に併設。<br>北一硝子駐車場からも信号を渡るとすぐの好立地。<br>入り口は、北一硝子駐車場向かい側、堺町通り側の2カ所。</p>
          <dl class="fp-shop-access__block">
            <dt class="fp-shop-access__subject"> お車でお越しの方へ</dt>
            <dd class="fp-shop-access__note">申し訳ございませんが、駐車場はご用意しておりません。近辺の駐車場をご利用ください。</dd>
          </dl>
        </div>
        <div class="fp-shop-map o-fit js-inview"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="o-fit__body"></iframe></div>
      </div>
      <div class="fp-shop__foot">
        <p class="m-btn"><a class="m-btn__link" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" target="_blank"><span>Google Mapで地図をみる</span></a></p>
      </div>
    </div>
  </section>
</article>
<article class="fp-news">
  <section class="fp-news__section l-section">
    <div class="fp-news__contents l-contents--sm">
      <div class="fp-news__head m-head js-inview">
        <p class="m-head__sub-text">− お知らせ −</p>
        <h1 class="m-head__main-text">News</h1>
      </div>
      <div class="fp-news__body js-inview">
        <ul class="fp-news__list">
          <li class="fp-news__item"><a class="fp-news__link">
              <p class="fp-news__date">2023.00.00</p>
              <p class="fp-news__desc">ここにタイトルが入ります。ここにタイトルが入ります。</p></a></li>
        </ul>
      </div>
      <div class="fp-news__foot">
        <p class="m-btn"><a class="m-btn__link"><span>もっと見る</span></a></p>
      </div>
    </div>
  </section>
</article>
<div class="fp-modal">
  <div class="fp-modal__main">
    <article class="fp-modal__contents" id="modal-1">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-a-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-a-02.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-a-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-a-02.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-2">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-04.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-b-04.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-3">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-c-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-c-02.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-c-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-c-02.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-4">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-d-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-d-02.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-d-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-d-02.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-5">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-e-01.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-e-01.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-6">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-04.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-05.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-04.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-f-05.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-7">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-04.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-g-04.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-8">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-04.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-01.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-02.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-03.jpg" alt=""/></div>
          <div class="swiper-slide"><img src="<?= $images ?>product-large-h-04.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <article class="fp-modal__contents" id="modal-9">
      <div class="fp-modal__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-i-01.jpg" alt=""/></div>
        </div>
        <div class="fp-modal__arrow fp-modal__arrow--prev"></div>
        <div class="fp-modal__arrow fp-modal__arrow--next"></div>
      </div>
      <div class="fp-modal__thumbnails swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="<?= $images ?>product-large-i-01.jpg" alt=""/></div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name"></h1>
        <p class="fp-modal__desc"></p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count"></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num"> </span><span> </span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close"></button>
  </div>
  <div class="fp-modal__bg"></div>
</div><?php get_footer(); ?>