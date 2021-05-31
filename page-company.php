<?php
/*
Template Name: 会社概要
*/
?>

<!--page-company.php-->
<?php get_header(); ?>

<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
  <article id="article" <?php post_class('company-page'); ?>>
    <?php get_template_part('/parts/header/company-header'); ?>
    <!-- #content -->
    <div id="content">
      <!-- container -->
      <div class="container bg-geometric">
        <!-- content-header -->
        <div id="philosophy" class="content-header">
          <section class="block">
            <h2 class="font-robot">VISION</h2>
            <p class="sub-title">ビジョン</p>
            <p class="description font-serif">ものづくりの支援を通じ<br />新たな価値を創造して<br />社会発展に貢献する</p>
          </section>
          <section class="block">
            <h2 class="font-robot">MISSION</h2>
            <p class="sub-title">ミッション</p>
            <p class="description font-serif">自然と人類の共生を図り<br />幸福を希求する</p>
          </section>
          <section class="block">
            <h2 class="font-robot">VALUE</h2>
            <p class="sub-title">バリュー</p>
            <p class="description font-serif">チャレンジングな精神と<br />進取の気概をもって<br />最適解を追求する</p>
          </section>
        </div>
        <!-- // content-header -->
        <!-- content-main -->
        <div class="content-main company">
          <!-- infographic -->
          <section id="infographic" class="infographic">
            <h2 class="font-robot">INFOGRAPHIC</h2>
            <p class="sub-title">数字で見る日本フリーマン</p>
            <div class="box">
              <div class="box__top">
                <div class="box__top--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-1.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">創立</p>
                    <p class="number">1973年</p>
                  </div>
                </div>
                <div class="box__top--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-2.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">取引先企業国内外</p>
                    <p class="number">400社</p>
                  </div>
                </div>
                <div class="box__top--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-3.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">海外取引実績</p>
                    <p class="number">16カ国</p>
                  </div>
                </div>
              </div>
              <div class="box__bottom">
                <div class="box__bottom--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-4.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">取り扱いアイテム</p>
                    <p class="number">1,000以上</p>
                  </div>
                </div>
                <div class="box__bottom--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-5.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">幅広い年齢層の社員</p>
                    <p class="small2">20代から70代まで</p>
                  </div>
                </div>
                <div class="box__bottom--item">
                  <p class="icon">
                    <img src="<?= get_template_directory_uri(); ?>/images/company/icon-6.svg" alt="" <?php fm_lazyload(); ?> />
                  </p>
                  <div class="text">
                    <p class="small">国内外 グループ事業所数</p>
                    <p class="number">30</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- // infographic -->
          <!-- greeting -->
          <section id="greeting" class="greeting">
            <div class="pic">
              <img src="<?= get_template_directory_uri(); ?>/images/company/ceo.png" alt="日本フリーマン株式会社代表取締役社長 写真"
                <?php fm_lazyload(); ?> />
            </div>
            <div class="text">
              <h2 class="font-robot">GREETING</h2>
              <p class="sub-title">社長挨拶</p>
              <p
                class="message">1973年の創業以来、精密鋳造用副資材、モデル材・木型・樹脂型の作製材料、ジュエリーキャスティング用資材等の輸入及び国内販売・技術サービスを通じて、400余社のお客様のモノづくりをサポートさせて頂いております。弊社は2017年に三洋貿易株式会社の子会社となりました。<br />今まで培ってきた知見に加えて、三洋貿易グループのグローバルネットワークを活用し、<br />お客様のニーズに合った最適解を見つけ出し、提供して参ります。<br />今後とも格別のご支援、ご愛顧を賜りますようお願い申し上げます。</p>
              <div class="sign">
                <span class="position">日本フリーマン株式会社代表取締役社長</span>
                <img src="<?= get_template_directory_uri(); ?>/images/company/sign.svg" alt="日本フリーマン株式会社代表取締役社長 署名"
                  <?php fm_lazyload(); ?> />
              </div>
            </div>
          </section>
          <!-- // greeting -->
          <!-- overview -->
          <section id="overview" class="overview">
            <div class="title">
              <h2 class="font-robot">OVERVIEW</h2>
              <p class="sub-title">会社概要</p>
            </div>
            <div class="address">
              <table>
                <tbody>
                  <tr>
                    <th>会社名</th>
                    <td>日本フリーマン株式会社　 (英文社名：FREEMAN JAPAN Co.,LTD.）</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>
                      <address>
                        〒226-0002 神奈川県横浜市緑区東本郷 4-12-9<br />TEL 045-473-3580　FAX 045-473-3656<br /><a
                          href="mailto:info@freeman.co.jp" class="c-main">info@freeman.co.jp</a>
                      </address>
                    </td>
                  </tr>
                  <tr>
                    <th>設立</th>
                    <td>1973年5月1日</td>
                  </tr>
                  <tr>
                    <th>資本金</th>
                    <td>1,000万円</td>
                  </tr>
                  <tr>
                    <th>代表</th>
                    <td>岩堀　貴宏</td>
                  </tr>
                  <tr>
                    <th>事業内容</th>
                    <td>精密鋳造用副資材、モデル材、ジュエリーキャスティング用資材、<br />機械等の輸入及び国内卸小売・技術サービス</td>
                  </tr>
                  <tr>
                    <th>関連会社</th>
                    <td>三洋貿易株式会社</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
          <!-- // overview -->
          <!-- map -->
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.7483555586514!2d139.57858731555547!3d35.510500146923285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601858e56298677b%3A0x4bae735776e09d10!2z44CSMjI2LTAwMDIg56We5aWI5bed55yM5qiq5rWc5biC57eR5Yy65p2x5pys6YO377yU5LiB55uu77yR77yS4oiS77yZ!5e0!3m2!1sja!2sjp!4v1620554483344!5m2!1sja!2sjp"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="map__link">
              <a
                href="https://www.google.com/maps/place/%E3%80%92226-0002+%E7%A5%9E%E5%A5%88%E5%B7%9D%E7%9C%8C%E6%A8%AA%E6%B5%9C%E5%B8%82%E7%B7%91%E5%8C%BA%E6%9D%B1%E6%9C%AC%E9%83%B7%EF%BC%94%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%92%E2%88%92%EF%BC%99/@35.510496,139.580776,16z/data=!4m2!3m1!1s0x601858e56298677b:0x4bae735776e09d10?hl=ja&gl=JP">Google
                Mapsで見る</a>
            </div>
          </div>
          <!-- // map -->
          <a href="#" class="link-box">
            <div class="link-box__text">
              <p>採用について</p>
              <p class="right">
                <img src="<?= get_template_directory_uri(); ?>/images/common/right-arrow-lightgray.svg" alt="" width="25"
                  <?php fm_lazyload(); ?> />
              </p>
            </div>
            <div class="link-box__image">
              <img src="<?= get_template_directory_uri(); ?>/images/company/link-box.png" alt=""
                <?php fm_lazyload(); ?> />
            </div>
          </a>
          <!-- リンクリスト -->
          <nav class="menu">
            <div class="container relative">
              <ul>
                <li class="diamond">
                  <a href="#mold">
                    <div class="diamond__inner">
                      <div class="center">
                        <div class="diamond__title font-robot c-white">MOLD</div>
                        <div class="diamond__titleSub c-white">試作・型材料</div>
                        <div class="diamond__more font-robot sp__none">
                          <p class="flex-center">
                            <span>MORE</span>
                            <img src="<?= get_template_directory_uri(); ?>/images/common/more-arrow-white.svg" width="15"
                              alt="" <?php fm_lazyload(); ?> />
                          </p>
                        </div>
                      </div>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                        class="diamond__icon pc__none" width="25" alt="">
                    </div>
                  </a>
                  <div class="filter"></div>
                </li>
                <li class="diamond">
                  <a href="#investment-casting">
                    <div class="diamond__inner">
                      <div class="center">
                        <div class="diamond__title font-robot c-white">INVESTMENT<br class="sp__none" />CASTING</div>
                        <div class="diamond__titleSub c-white">精密鋳造用材料</div>
                        <div class="diamond__more font-robot sp__none">
                          <p class="flex-center">
                            <span>MORE</span>
                            <img src="<?= get_template_directory_uri(); ?>/images/common/more-arrow-white.svg" width="15"
                              alt="" <?php fm_lazyload(); ?> />
                          </p>
                        </div>
                      </div>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                        class="diamond__icon pc__none" width="25" alt="">
                    </div>
                  </a>
                  <div class="filter"></div>
                </li>
                <li class="diamond">
                  <a href="#new-field">
                    <div class="diamond__inner">
                      <div class="center">
                        <div class="diamond__title font-robot c-white">NEW FIELD</div>
                        <div class="diamond__titleSub c-white">新たな取り組み</div>
                        <div class="diamond__more font-robot sp__none">
                          <p class="flex-center">
                            <span>MORE</span>
                            <img src="<?= get_template_directory_uri(); ?>/images/common/more-arrow-white.svg" width="15"
                              alt="" <?php fm_lazyload(); ?> />
                          </p>
                        </div>
                      </div>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                        class="diamond__icon pc__none" width="25" alt="">
                    </div>
                  </a>
                  <div class="filter"></div>
                </li>
                <li class="diamond">
                  <a href="#sand-casting">
                    <div class="diamond__inner">
                      <div class="center">
                        <div class="diamond__title font-robot c-white">SAND<br class="sp__none" />CASTING</div>
                        <div class="diamond__titleSub c-white">砂型鋳造用資材・原材料</div>
                        <div class="diamond__more font-robot sp__none">
                          <p class="flex-center">
                            <span>MORE</span>
                            <img src="<?= get_template_directory_uri(); ?>/images/common/more-arrow-white.svg" width="15"
                              alt="" <?php fm_lazyload(); ?> />
                          </p>
                        </div>
                      </div>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                        class="diamond__icon pc__none" width="25" alt="">
                    </div>
                  </a>
                  <div class="filter"></div>
                </li>
                <li class="diamond">
                  <a href="#jewelry">
                    <div class="diamond__inner">
                      <div class="center">
                        <div class="diamond__title font-robot c-white">JEWELRY</div>
                        <div class="diamond__titleSub c-white">ジュエリーキャスト用副資材</div>
                        <div class="diamond__more font-robot sp__none">
                          <p class="flex-center">
                            <span>MORE</span>
                            <img src="<?= get_template_directory_uri(); ?>/images/common/more-arrow-white.svg" width="15"
                              alt="" <?php fm_lazyload(); ?> />
                          </p>
                        </div>
                      </div>
                      <img src="<?= get_template_directory_uri(); ?>/images/top/icon/arrowDown.svg"
                        class="diamond__icon pc__none" width="25" alt="">
                    </div>
                  </a>
                  <div class="filter"></div>
                </li>
              </ul>
            </div>
          </nav>
          <!-- // リンクリスト -->
        </div>
        <!-- // content-main -->
      </div>
      <!-- // container -->
    </div>
    <!-- // #content -->
  </article>
</main>

<?php get_footer(); ?>