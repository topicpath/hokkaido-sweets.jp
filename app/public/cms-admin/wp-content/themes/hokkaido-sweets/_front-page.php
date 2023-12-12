<?php get_header();
$url = get_permalink();
$text = wp_get_document_title();
$share_url = urlencode($url);
$share_text = urlencode($text);
$images = URL_FRONT_PAGE_IMAGES;
 ?>
<article class="fp-mv">
  <div class="fp-mv__video"><iframe class="js-mv" src="https://player.vimeo.com/video/806687423?background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</article>
<article class="fp-pickup js-fp-pickup-slider swiper">
  <div class="fp-pickup__wrapper swiper-wrapper"><a class="fp-pickup__item swiper-slide" href="#product1">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>ソフトクリーム</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="56" height="56"/></div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-01.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product2">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>クッキー</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="56" height="56"/></div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-04.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product3">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>シュークリーム</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="56" height="56"/></div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-02.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product4">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__sub-text">浜中町指定牧場</p>
          <p class="fp-pickup__main-text">北海道牛乳<br>プリン</p>
        </div>
        <div class="fp-pickup__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="56" height="56"/></div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-03.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product5">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">摩訶不思議スイーツ<br>パリネル</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-05.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product6">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">北海道<br>シューラスク</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-06.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product7">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">北海道<br>バターガレット</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-07.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product8">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">北海道<br>スノーボールクッキー</p>
          <p class="fp-pickup__sub-text--btm">~魅惑のホロホロ食感~</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-08.webp" alt="" width="320" height="320" loading="lazy"/></picture></a><a class="fp-pickup__item swiper-slide" href="#product8">
      <div class="fp-pickup__inner">
        <div class="fp-pickup__text">
          <p class="fp-pickup__main-text">かすてらロール</p>
        </div>
      </div>
      <picture class="fp-pickup__picture"><img class="fp-pickup__picture-body" src="<?= $images ?>pickup-item-09.webp" alt="" width="320" height="320" loading="lazy"/></picture></a></div>
</article>
<article class="fp-feature">
  <section class="fp-feature__section l-section">
    <div class="fp-feature__contents l-contents">
      <div class="fp-feature__head js-inview">
        <p class="fp-feature__sub-text"><span class="fp-feature__sub-text-body">浜中プレミアムシリーズ</span></p>
        <h1 class="fp-feature__main-text">浜中町指定牧場<br>北海道牛乳使用</h1>
      </div>
      <div class="fp-feature__body js-inview">
        <div class="fp-feature__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="139" height="139"/></div>
        <h2 class="fp-feature__subject">北海道、浜中町で<br class="u-hide--pc">生まれました。</h2>
        <p class="fp-feature__desc">北海道浜中町農協と<br class="u-hide--pc">指定牧場の生産者の協力を得て、<br>特選規格・乳脂肪分4.0%以上の生乳だけを<br class="u-hide--pc">選んでつくった<br class="u-hide--sp">成分無調整牛乳を使用した<br class="u-hide--pc">浜中プレミアムシリーズ。</p>
        <div class="fp-feature__map"><img src="<?= $images ?>feature-map.webp" alt="" width="261" height="245" loading="lazy"/></div>
      </div>
    </div>
  </section>
</article>
<article class="fp-about">
  <section class="fp-about__section l-section">
    <div class="fp-about__head js-inview">
      <h1 class="o-heading">最高の環境で、<br class="u-hide--pc">しあわせに育った<br>牛の牛乳は<br class="u-hide--pc">北海道からの贈り物。</h1>
    </div>
    <div class="fp-about__contents fp-about__contents--l js-inview">
      <div class="fp-about__inner fp-about__inner--l">
        <h2 class="fp-about__subject fp-about__subject--l">どこまでも、<br>のびのび育つ牛たち。</h2>
        <div class="fp-about__body">
          <p class="fp-about__desc">根釧エリアの夏の平均気温は約18℃。<br>暑さが苦手な牛たちにとって、<br>海辺の牧場はまさに楽園。<br>さらに一部の牛舎では、<br>牛にストレスをかけないよう<br class="u-hide--sp">繋がない<br class="u-hide--pc">「フリーストール」で<br class="u-hide--sp">飼育されています。</p>
        </div>
        <picture class="fp-about__picture fp-about__picture--l o-fit"><img class="o-fit__body" src="<?= $images ?>about-img-01.webp" alt="" width="850" height="500" loading="lazy"/></picture>
      </div>
    </div>
    <div class="fp-about__contents fp-about__contents--r js-inview">
      <div class="fp-about__inner fp-about__inner--r">
        <h2 class="fp-about__subject fp-about__subject--r">浜中町ならではの<br>飼料が美味しさの秘訣。</h2>
        <picture class="fp-about__picture fp-about__picture--r o-fit"><img class="o-fit__body" src="<?= $images ?>about-img-02.webp" alt="" width="850" height="500" loading="lazy"/></picture>
        <div class="fp-about__body fp-about__body--r">
          <p class="fp-about__desc">北海道・浜中町には、<br>保湿性、通気性、通水性にすぐれた、<br>栄養たっぷりの土と、<br>海のミネラル豊富な潮風を受けた<br>飼料があります。<br>高品質な飼料で育った<br>牛から生まれた特撰規格の牛乳です。</p>
        </div>
      </div>
    </div>
  </section>
</article>
<article class="fp-product">
  <section class="fp-product__section l-section fp-product-soft">
    <div class="fp-product__contents l-contents--c" id="product1">
      <div class="fp-product__head js-inview">
        <h1 class="o-heading">牛乳本来の<br class="u-hide--pc">おいしさを<br class="u-hide--sp">そのまま<br class="u-hide--pc">閉じ込めました。</h1>
      </div>
      <div class="fp-product__body js-inview">
        <div class="fp-product-item cl-yfe">
          <div class="fp-product-item__text--half">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳<br>ソフトクリーム</h2>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="100" height="100"/></div>
            </div>
            <h3 class="fp-product-item__catch">さわやかな香りと<br class="u-hide--pc">コク深い牛乳の味わい<br>本物の牛乳ソフトクリーム</h3>
            <p class="fp-product-item__desc">牛乳の美味しさをそのまま感じられる味わいを目指して、試行錯誤を積み重ねた当店のオリジナルブレンド。4.0%の乳脂肪分のコク深い味わいと、さっぱりとした口溶けが特徴のソフトクリームです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-1"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture--half"><img class="fp-product-item-image-01" src="<?= $images ?>product-item-01.webp" alt="" width="347" height="697" loading="lazy"/></picture>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-middle">
    <div class="fp-product__contents l-contents--r" id="product2">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <picture class="fp-product-item__picture--half-v"><img class="upc-size-full" src="<?= $images ?>product-item-02.webp" alt="" width="637" height="650" loading="lazy"/></picture>
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳<br class="u-hide--pc">クッキー</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="100" height="100"/></div>
            </div>
            <h3 class="fp-product-item__catch">牛乳の香り豊かなクッキー<br>可愛いパッケージが<br class="u-hide--pc">おみやげにもオススメ</h3>
            <p class="fp-product-item__desc">ミルク風味がしっかりと感じられる、どこか懐かしく、やさしい味わいです。</p>
            <p class="fp-product-item__caption">※9枚セットパッケージ</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-2"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents--l" id="product3">
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
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="100" height="100"/></div>
            </div>
            <h3 class="fp-product-item__catch">浜中町の特選牛乳を使用した<br>カスタードクリームと<br class="u-hide--pc">北海道産小麦の<br class="u-hide--sp">芳醇な香りが特徴の<br class="u-hide--pc">シュークリーム</h3>
            <p class="fp-product-item__desc">牛乳をたっぷりと使用したカスタードに北海道産生クリームを合わせた風味豊かなクリームを北海道産小麦を100%使用したシュー生地にたっぷり詰め込みました。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-3"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture"><img class="upc-size-full" src="<?= $images ?>product-item-03.webp" alt="" width="680" height="771" loading="lazy"/></picture>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents--r" id="product4">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <picture class="fp-product-item__picture"><img class="upc-size-full" src="<?= $images ?>product-item-04.webp" alt="" width="614" height="684" loading="lazy"/></picture>
          <div class="fp-product-item__text">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <p class="fp-product-item__farm">浜中町指定牧場</p>
                <h2 class="fp-product-item__name-text">北海道牛乳<br class="u-hide--pc">プリン</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">お持ち帰り限定</li>
                  <li class="fp-product-item__tag">要冷蔵</li>
                </ol>
              </div>
              <div class="fp-product-item__sticker"><img src="<?= URL_SVG ?>icon-sticker.svg" alt="" width="100" height="100"/></div>
            </div>
            <h3 class="fp-product-item__catch">さっぱりとした口溶けが特徴の<br>クセになる味わい</h3>
            <p class="fp-product-item__desc">さっぱりとした食感とコク深い牛乳の香りが特徴の、一度食べるとまた食べたくなるプリンです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-4"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-parineru js-inview" id="product5">
    <div class="fp-product__contents l-contents--c fp-product-parineru-contents">
      <div class="fp-product-item fp-product-parineru-item">
        <div class="fp-product-item__text fp-product-parineru-text">
          <div class="fp-product-item__upper">
            <p class="fp-product-parineru-logo-sub"><img src="<?= $images ?>product-logo-parineru-sub.svg" alt="摩訶不思議スイーツ" width="453" height="141"/></p>
            <h1 class="fp-product-item__visual-logo fp-product-parineru-logo"><img src="<?= $images ?>product-logo-parineru.svg" alt="パリネル" width="418" height="95"/></h1>
          </div>
          <p class="fp-product-item__visual-desc usp-mt-0 c-white">究極のパリパリ食感と<br>世にも不思議な<br class="u-hide--pc">トンカ豆クリームの<br class="u-hide--sp">マリアージュ</p>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-parineru-detail-section">
    <div class="fp-product__contents l-contents--c">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item fp-product-item--pb">
          <div class="fp-product-item__text fp-product-parineru-detail-text">
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
            <p class="m-btn fp-product-item__btn--abs"><a class="m-btn__link js-modal-btn" data-modal-id="modal-5"><span>商品情報を見る</span></a></p>
          </div>
          <div class="fp-product-item__images fp-product-parineru-detail-images">
            <picture class="fp-product-item__picture--full">
              <source media="(max-width: 767px)" srcset="<?= $images ?>product-item-05-sp.webp"/><img class="upc-size-full" src="<?= $images ?>product-item-05.webp" alt="エキゾチックな風味の最高級トンカ豆クリーム" width="456" height="271" loading="lazy"/>
            </picture>
            <div class="fp-product-item__detail-wrapper">
              <dl class="fp-product-item__detail">
                <dt class="fp-product-item__detail-subject">トンカ豆</dt>
                <dd class="fp-product-item__detail-desc">中南米原産のマメ科植物の種子で、芳香性の高い香り成分のクマリンを含み、桜の葉や桃の花のような上品な香りを持っています。</dd>
              </dl>
              <div class="fp-product-item__detail-image"><img src="<?= $images ?>product-item-05-b.webp" alt="" width="303" height="169" loading="lazy"/></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section l-section fp-product-rusk" id="product6">
    <div class="fp-product__contents l-contents--l">
      <div class="fp-product-item js-inview">
        <div class="fp-product-item__text fp-product-rusk-text">
          <p class="fp-product-item__visual-catch">北海道の新感覚スイーツ</p>
          <picture class="fp-product-item__visual-logo">
            <source media="(max-width: 767px)" srcset="<?= $images ?>product-logo-rusk-sp.svg"/><img src="<?= $images ?>product-logo-rusk.svg" alt="北海道シュガーラスク" width="484" height="180"/>
          </picture>
          <p class="fp-product-item__visual-desc fp-product-rusk-visual-text">カリッサクッ!の軽い口当たりと<br>北海道産小麦とバターの<br>クセになる美味しさ<br>おみやげ人気No.1商品</p>
        </div>
        <picture class="fp-product-item__picture fp-product-item-picture-rusk">
          <source media="(max-width: 767px)" srcset="<?= $images ?>product-item-rusk-sp.webp"/><img class="upc-size-full" src="<?= $images ?>product-item-rusk.webp" alt="" width="762" height="888" loading="lazy"/>
        </picture>
      </div>
    </div>
    <div class="fp-product__contents--rusk l-contents--c">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item fp-product-item--pb">
          <div class="fp-product-item__text--sm">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道シューラスク<br/><small class="fp-product-item__name-text--sm">（プレーン／ショコラ）</small></h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <p class="fp-product-item__desc">シュー生地を二度焼きする事で「カリッ サクッ」の軽い口当たりに。北海道産バターと小麦の風味がクセになる洋菓子店ならではの美味しさ。<br>常温保管で日持ちも長いのでおみやげにもピッタリ。<br class="u-hide--sp">発売開始から10年以上が経過した当店の看板商品です。</p>
            <p class="m-btn fp-product-item__btn--abs"><a class="m-btn__link js-modal-btn" data-modal-id="modal-6"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture--sm fp-product-rusk-detail-picture"><img class="upc-size-full" src="<?= $images ?>product-item-06.webp" alt="" width="471" height="383" loading="lazy"/></picture>
        </div>
      </div>
    </div>
  </section>
  <section class="fp-product__section fp-product-lower">
    <div class="fp-product__contents l-contents--r-sp-full" id="product7">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <picture class="fp-product-item__picture"><img class="fp-product-item__image-body--r upc-size-full" src="<?= $images ?>product-item-07.webp" alt="" width="643" height="550" loading="lazy"/></picture>
          <div class="fp-product-item__text--sp-l">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道バターガレット</h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <h3 class="fp-product-item__catch">バターをたっぷりと使用して焼き上げた伝統的な厚焼きクッキー</h3>
            <p class="fp-product-item__desc">柔らかで豊かなバターの風味をラム酒がやさしく引き立てます。シンプルなお菓子こそ職人の腕が光るパティシエ自慢の重厚な味わいをお愉しみください。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-7"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents--l-sp-full" id="product8">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <div class="fp-product-item__text--sp-r">
            <div class="fp-product-item__group">
              <div class="fp-product-item__name">
                <h2 class="fp-product-item__name-text">北海道<br>スノーボールクッキー<br/><small class="fp-product-item__name-text--sm">〜魅惑のホロホロ食感〜</small></h2>
                <ol class="fp-product-item__tags">
                  <li class="fp-product-item__tag">常温</li>
                </ol>
              </div>
            </div>
            <h3 class="fp-product-item__catch">芳醇なバターの風味と<br class="u-hide--pc">ナッツの香ばしさ<br>魅惑のホロホロ食感</h3>
            <p class="fp-product-item__desc">長い年月をかけてたどり着いた独自の配合で生み出される魅惑のホロホロ食感。芳醇なバターの風味とナッツの香ばしさが織りなすクセになる味わい。純白の雪が舞い散る北海道ならではのクッキーです。</p>
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-8"><span>商品情報を見る</span></a></p>
          </div>
          <picture class="fp-product-item__picture"><img class="fp-product-item__image-body--l upc-size-full" src="<?= $images ?>product-item-08.webp" alt="" width="643" height="550" loading="lazy"/></picture>
        </div>
      </div>
    </div>
    <div class="fp-product__contents l-contents--r-sp-full" id="product9">
      <div class="fp-product__body js-inview">
        <div class="fp-product-item">
          <picture class="fp-product-item__picture"><img class="fp-product-item__image-body--r upc-size-full" src="<?= $images ?>product-item-09.webp" alt="" width="643" height="550" loading="lazy"/></picture>
          <div class="fp-product-item__text--sp-l">
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
            <p class="m-btn fp-product-item__btn"><a class="m-btn__link js-modal-btn" data-modal-id="modal-9"><span>商品情報を見る</span></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<article class="fp-shop" id="shop">
  <section class="fp-shop__section l-section">
    <div class="fp-shop__contents l-contents">
      <div class="fp-shop__head m-head js-inview">
        <p class="m-head__sub-text">− 店舗情報 ／ アクセス −</p>
        <h1 class="m-head__main-text">Store <small class="m-head__main-text--sm">&</small> access</h1>
      </div>
      <div class="fp-shop__body">
        <div class="fp-shop-detail js-inview">
          <picture class="fp-shop-detail__picture o-fit"><img class="o-fit__body" src="<?= $images ?>shop-img.webp" width="600" height="320" loading="lazy"/></picture>
          <div class="fp-shop-detail__text">
            <h2 class="fp-shop-detail__logo"><img class="fp-shop-detail__logo-body" src="<?= URL_SVG ?>logo.svg" alt="sweets garden Prateria" width="220" height="48"/></h2>
            <p class="fp-shop-detail__desc">小樽市堺町5番29号<br>（おみやげの店 こぶしや 小樽店内併設）<br>TEL.0134-64-6122<br>営業時間　10時〜18時<br>定休日　　不定休<br>（※現在は月曜日が定休日です）</p>
          </div>
        </div>
        <div class="fp-shop-access js-inview">
          <p class="fp-shop-access__desc">小樽の人気観光スポット「堺町通り」の中心にある石造り倉庫のお土産店内に併設。<br>北一硝子駐車場からも信号を渡るとすぐの好立地。<br class="u-hide--sp">入り口は、北一硝子駐車場向かい側、堺町通り側の2カ所。</p>
          <dl class="fp-shop-access__block">
            <dt class="fp-shop-access__subject"> お車でお越しの方へ</dt>
            <dd class="fp-shop-access__note">申し訳ございませんが、駐車場はご用意しておりません。近辺の駐車場をご利用ください。</dd>
          </dl>
        </div>
        <div class="fp-shop-map o-fit js-inview"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
      <div class="fp-shop__foot">
        <p class="m-btn"><a class="m-btn__link" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.8403330725782!2d141.0055113965011!3d43.19372610287246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ae050241cae79%3A0x69b08ac60bc49586!2z44GK44G_44KE44GS44Gu5bqX44GT44G244GX44KE5bCP5qi95bqX!5e0!3m2!1sja!2sjp!4v1677645983503!5m2!1sja!2sjp" target="_blank"><span>Google Mapで地図をみる</span></a></p>
      </div>
    </div>
  </section>
</article>
<article class="fp-news" id="news">
  <section class="fp-news__section l-section">
    <div class="fp-news__contents l-contents--sm">
      <div class="fp-news__head m-head js-inview">
        <p class="m-head__sub-text">− お知らせ −</p>
        <h1 class="m-head__main-text">News</h1>
      </div>
      <div class="fp-news__body js-inview">
        <ul class="fp-news__list">
          <li class="fp-news__item"><a class="fp-news__link">
              <p class="fp-news__date">2023.03.00</p>
              <p class="fp-news__desc">sweets garden Prateriaとしてサイトをリニューアルしました。</p></a></li>
          <li class="fp-news__item"><a class="fp-news__link">
              <p class="fp-news__date">2023.01.18</p>
              <p class="fp-news__desc">sweets garden Prateriaオープンしました。</p></a></li>
        </ul>
      </div>
    </div>
  </section>
</article>
<div class="fp-modal js-modal" id="modal-1">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-a-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-a-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-a-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-a-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <h1 class="fp-modal__name">浜中町指定牧場<br>北海道牛乳ソフトクリーム</h1>
        <p class="fp-modal__desc">さわやかな香りとコク深い牛乳の味わい<br>本物の牛乳ソフトクリーム</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">1個</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">390</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">コーン：小麦・乳成分<br>カップ：乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc">ー</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-2">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-b-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-b-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-b-03.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-b-04.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-b-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-b-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-b-03.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-b-04.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">常温</li>
        </ol>
        <h1 class="fp-modal__name">浜中町指定牧場<br>北海道牛乳クッキー</h1>
        <p class="fp-modal__desc">牛乳の香り豊かなクッキー<br>可愛いパッケージがおみやげにもオススメ</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">9枚セット</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">990</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">賞味期限</th>
              <td class="fp-modal__table-desc">製造日より90日間<br>※到着予定日より起算して60日以上の商品にて発送致します。</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria（おみやげの店こぶしや  小樽店）<br>おみやげの店こぶしや  札幌店</td>
            </tr>
          </tbody>
        </table>
        <p class="fp-modal__caption">※店頭では1枚からお買い求め頂けます。</p>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-3">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-c-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-c-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-c-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-c-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">お持ち帰り限定</li>
          <li class="fp-modal__category">要冷蔵</li>
        </ol>
        <h1 class="fp-modal__name">浜中町指定牧場<br>北海道牛乳シュークリーム</h1>
        <p class="fp-modal__desc">浜中町の特選牛乳を使用したカスタードクリームと<br>北海道産小麦の芳醇な香りが特徴のシュークリーム</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">1個</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">380</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc">当日中</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-4">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-d-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-d-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-d-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-d-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">お持ち帰り限定</li>
          <li class="fp-modal__category">要冷蔵</li>
        </ol>
        <h1 class="fp-modal__name">浜中町指定牧場<br>北海道牛乳プリン</h1>
        <p class="fp-modal__desc">さっぱりとした口溶けが特徴の<br>クセになる味わい</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">1個</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">380</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc">製造日より5日間</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-5">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-e-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-e-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">お持ち帰り限定</li>
          <li class="fp-modal__category">冷蔵／冷凍</li>
        </ol>
        <h1 class="fp-modal__name">摩訶不思議スイーツ<br>パリネル</h1>
        <p class="fp-modal__desc">究極のパリパリ食感と<br>世にも不思議なトンカ豆クリームのマリアージュ</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">1個</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">385</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc">冷蔵品（当日仕上げ）は製造日より2日間（小樽店限定）<br>冷凍品は製造日より45日間</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria（おみやげの店こぶしや  小樽店）<br>おみやげの店こぶしや  札幌店</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-6">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-f-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-f-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-f-03.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-f-04.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-f-05.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-f-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-f-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-f-03.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-f-04.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-f-05.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">常温</li>
        </ol>
        <h1 class="fp-modal__name">北海道シューラスク<br>（プレーン／ショコラ）</h1>
        <p class="fp-modal__desc">カリッサクッ!の軽い口当たりと<br>北海道産小麦とバターのクセになる美味しさ<br>おみやげ人気No.1商品</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">プレーン</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">550</span><span>円（税込）</span></dd>
        </dl>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">ショコラ</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">550</span><span>円（税込）</span></dd>
        </dl>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">ギフトセット<br><small class="fp-modal__count--sm">（プレーン＆ショコラ）</small></dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">1,150</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">賞味期限</th>
              <td class="fp-modal__table-desc">製造日より45日間<br>※到着予定日より起算して30日以上の商品にて発送致します。</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria（おみやげの店こぶしや  小樽店）<br>おみやげの店こぶしや  札幌店</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-7">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-g-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-g-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-g-03.webp" alt="" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-g-04.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-g-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-g-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-g-03.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-g-04.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">常温</li>
        </ol>
        <h1 class="fp-modal__name">北海道バターガレット</h1>
        <p class="fp-modal__desc">北海道産バターをたっぷりと使用して<br>焼き上げた伝統的な厚焼きクッキー</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">4個入りセット</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">1,250</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">賞味期限</th>
              <td class="fp-modal__table-desc">製造日より45日間<br>※到着予定日より起算して30日以上の商品にて発送致します。</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria（おみやげの店こぶしや  小樽店）<br>おみやげの店こぶしや  札幌店</td>
            </tr>
          </tbody>
        </table>
        <p class="fp-modal__caption">※店頭ではお一つからお買い求め頂けます。</p>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-8">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-h-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-h-02.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-h-03.webp" alt="" width="400" height="400" loading="lazy"/></div>
              <div class="swiper-slide"><img src="<?= $images ?>product-large-h-04.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-h-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-h-02.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-h-03.webp" alt="" width="87" height="87" loading="lazy"/></div>
            <div class="swiper-slide"><img src="<?= $images ?>product-large-h-04.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">常温</li>
        </ol>
        <h1 class="fp-modal__name">北海道スノーボールクッキー<br>~魅惑のホロホロ食感~</h1>
        <p class="fp-modal__desc">芳醇なバターの風味とナッツの香ばしさ<br>魅惑のホロホロ食感</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">3個入×5袋セット</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">980</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">賞味期限</th>
              <td class="fp-modal__table-desc">製造日より60日間<br>※到着予定日より起算して30日以上の商品にて発送致します。</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria（おみやげの店こぶしや  小樽店）<br>おみやげの店こぶしや  札幌店</td>
            </tr>
          </tbody>
        </table>
        <p class="fp-modal__caption">※店頭では1袋（3個入）からお買い求め頂けます。</p>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div>
<div class="fp-modal js-modal" id="modal-9">
  <div class="fp-modal__main">
    <article class="fp-modal__article">
      <div class="fp-modal__images">
        <div class="fp-modal__main-slider">
          <div class="fp-modal__slider swiper js-modal-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?= $images ?>product-large-i-01.webp" alt="" width="400" height="400" loading="lazy"/></div>
            </div>
          </div>
          <div class="fp-modal__arrow fp-modal__arrow--prev js-modal-slider__prev"></div>
          <div class="fp-modal__arrow fp-modal__arrow--next js-modal-slider__next"></div>
        </div>
        <div class="fp-modal__thumbnails swiper js-modal-slider-thumb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= $images ?>product-large-i-01.webp" alt="" width="87" height="87" loading="lazy"/></div>
          </div>
        </div>
      </div>
      <div class="fp-modal__detail">
        <ol class="fp-modal__categories">
          <li class="fp-modal__category">お持ち帰り限定</li>
          <li class="fp-modal__category">要冷蔵</li>
        </ol>
        <h1 class="fp-modal__name">かすてらロール</h1>
        <p class="fp-modal__desc">やさしい甘さのかすてら生地と<br>北海道産生クリームのマリアージュ</p>
        <dl class="fp-modal__price">
          <dt class="fp-modal__count">1個</dt>
          <dd class="fp-modal__price-body"><span class="fp-modal__price-num">390</span><span>円（税込）</span></dd>
        </dl>
        <table class="fp-modal__table">
          <caption class="fp-modal__table-caption">商品詳細</caption>
          <tbody>
            <tr>
              <th class="fp-modal__table-subject">アレルギー</th>
              <td class="fp-modal__table-desc">卵・小麦・乳成分</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">消費期限</th>
              <td class="fp-modal__table-desc">製造日より2日間</td>
            </tr>
            <tr>
              <th class="fp-modal__table-subject">取り扱い店舗</th>
              <td class="fp-modal__table-desc">sweets garden Prateria</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>
    <button class="fp-modal__close js-modal-close"><span class="fp-modal__close-text">×</span></button>
  </div>
  <div class="fp-modal__bg js-modal-bg"></div>
</div><?php get_footer(); ?>