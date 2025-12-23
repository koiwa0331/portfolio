  <?php get_header(); ?>
  
  <header id="header" class="u-bg_dark_gray">
    <div class="l-outer">
      <h1 class="main_head">
        <a href="<?=  esc_url(home_url()) ?>">
          <span class="u-en">
            <span class="u-br">Portfolio by </span>
            Hiroshi Koiwa
          </span>
        </a>
      </h1>
      
      <div id="slideNav" class="slide_nav">
        <div class="slide_nav_content_outer">
          <div id="slideNavContentInner" class="slide_nav_content_inner">
            
            <div id="sideNavContent" class="slide_nav_content">
              
              <nav id="pageNav" class="page_nav">
                <p class="page_nav-title u-before_font_icon">見出し</p>
                <ul>
                  <li class="u-before_symbol u-after_symbol">
                    <a href="#prof">
                      <span class="u-en u-after_symbol">Profile</span>
                    </a>
                  </li>
                  <li class="u-after_symbol">
                    <a href="#skill">
                      <span class="u-en u-after_symbol">Skill</span>
                    </a>
                  </li>
                  
              <?php
              // トップレベルのカテゴリ一覧の取得 (トップページ用)
              $args = array(
                'orderby'=> 'name',
                'order' => 'ASC',
                'parent' => 0, // トップレベルのみ
              );
              // 記事を出力するためのクエリ生成ではなく、カテゴリページ内からの
              // 処理でもなく、サイト内で利用しているカテゴリ一覧を取得するだけので
              // WP_Query() ではなく get_terms() を利用する。
              $categories = get_terms('category', $args);
              ?>
              <?php if (!empty($categories)) : ?> 
                <?php foreach($categories as $category) : ?>
                  
                  <li class="u-after_symbol">
                    <a href="#<?= $category->slug; ?>">
                      <span class="u-en u-after_symbol">
                        <?= $category->name; ?>
                      </span>
                    </a>
                  </li>
                  
                <?php endforeach; ?>
              <?php endif; ?>
                  
                </ul>
              </nav>
              
              <a id="toTop" class="to_top c-btn c-btn-up_arrow u-bg_dark_gray" href="#">
                TOPに戻る
              </a>
              
            </div>
            
          </div>
        </div><!-- #slideNavContentOuter -->
        <button id="slideNavToggleBtn" class="slide_nav-toggle_btn u-en" type="button">NAV</button>
        <div id="slideNavOverlay" class="slide_nav-overlay"></div>
      </div><!-- #slideNav -->
    </div><!-- .l-outer -->
  </header>
  
  <main id="main">
    <section id="prof" class="prof">
      <div class="l-outer">
        <div class="l-inner_first">
          
          <h2 class="prof-head c-large_head u-en">
            <span class="u-before_symbol u-after_symbol">Profile</span>
          </h2>
          
          <section class="prof-intro">
            <div class="prof-intro-outer">
              <div class="prof-intro-inner">
                <h3 class="prof-intro-head c-middle_head u-jp">小岩 洋志<span>（コイワ ヒロシ）</span></h3>
                <dl class="prof-intro-list">
                  <dt>年齢：</dt>
                  <dd><?= get_my_age(1985, 12, 22); ?>歳</dd>
                  <dt>性別：</dt>
                  <dd>男</dd>
                  <dt>趣味：</dt>
                  <dd>猫と戯れる・音楽鑑賞</dd>
                </dl>
                <p class="prof-intro-hobby">休日は飼い猫の『テン君&#9794;』とまったり過ごすのが至福です。<br>
                好きな歌手は『坂本真綾』さんで、ライブを見に行くことで生きる活力を得ています。</p>
              </div>
              <p class="prof-intro-selfimg"><img src="<?= get_template_directory_uri(); ?>/assets/img/self.png" alt="自画像"></p>
            </div>
          </section><!-- h3 .prof-intro -->
          
          
          <section class="career-past u-border_bright_gray">
            <h3 class="career-past-head c-middle_head u-jp u-hiragana">
              <span class="career-past-head-inner u-hiragana">これまで<span class="u-en u-block">Until now</span></span>
            </h3>
            <ol class="career-past-list">
              <li class="career-past-list-item">① 学生時代はイラスト制作について学ぶ</li>
              <li class="career-past-list-item">② ECサイト運営で商品撮影や商品登録などを経験
                <p class="career-past-list-item_inner">お客様に商品の魅力を届ける楽しさを知り、より多彩な手法で情報を発信したいと考えるようになりました。</p>
              </li class="career-past-list-item">
              <li class="career-past-list-item">③ 半年間Webデザインの求職者支援訓練を受講
                <p class="career-past-list-item_inner">HTML・CSS・JavaScript・PHP・Wordpressなどの基礎的な部分を学び、就職に繋げることができました。</p>
              </li>
              <li class="career-past-list-item">④ Webデザイナーとして約4年ほど従事
                <p class="career-past-list-item_inner">デザインよりもプログラミングに楽しさを見い出すようになり、独学でJavaScriptやPHPについて勉強を続けておりました。</p>
              </li>
              
              
              <li class="career-past-list-item">⑤ 1年間プログラミングの職業訓練を受講
                <p class="career-past-list-item_inner">C言語・Java・SQLなどを学び、設計と仕様書に沿ったプログラムの構築について学びました。</p>
              </li>
              <li class="career-past-list-item">④ プログラマとして約3年ほど従事
                <p class="career-past-list-item_inner">Vue.js・ASP.NET Coreなどでのアプリケーション開発にて、UIデザインや機能の実装を行っています。</p>
              </li>
              
            </ol>
          </section><!-- h3 -->
          <section class="career-future u-border_bright_gray">
            <h3 class="career-future-head c-middle_head u-jp">
              <span class="career-future-head-inner u-hiragana">これから<span class="u-en u-block">From now on</span></span>
            </h3>
            <p class="career-future-txt">
            UIデザインを強みとして、これまで培った経験を活かし、チームで協力しながら、ユーザー満足度を高めたプロダクトを作り上げていきたいと考えています。<br><br>
            エンジニアとしての実務経験はまだ浅いですが、開発者としてプロジェクトに貢献できるよう努め、デザイン面での知見共有や改善提案を通じて、多くの人にとって価値のある体験を提供していきたいです。
            </p>
          </section><!-- h3 -->
          
          <a class="pdf_link u-before_symbol u-en" href="Hiroshi_Koiwa_Portfolio.pdf" target="_blank">
            <p class="pdf_link-txt">
              <span class="pdf_link-txt-main u-br">WELCOME</span>
              <span class="pdf_link-txt-sub">to my site</span>
            </p>
          </a>
        </div>
      </div>
    </section><!-- h2 #prof -->
    
    <section id="skill" class="skill">
      <div class="l-outer">
        <div class="l-inner">
          
          <h2 class="skill-head c-large_head u-en">
            <span class="u-before_symbol u-after_symbol">Skill</span>
          </h2>
          <div class="skill-detail_wrap">
            <section class="skill-detail skill-detail--front">
              <h3 class="skill-detail-head c-middle_head">
                <span class="u-jp">フロントエンド</span>
              </h3>
              <dl class="skill-detail-list">
                <div>
                  <dt>言語</dt>
                  <dd>HTML5, CSS3, JavaScript, TypeScript, C#</dd>
                </div>
                <div>
                  <dt>フレームワーク</dt>
                  <dd>Razor, Vue.js 3</dd>
                </div>
                <div>
                  <dt>ライブラリ</dt>
                  <dd>Element Plus, Vuetify, Vue Apollo</dd>
                </div>
              </dl>
            </section><!-- h3 -->
            
            <section class="skill-detail skill-detail--back">
              <h3 class="skill-detail-head c-middle_head">
                <span class="u-jp">バックエンド</span>
              </h3>
              <dl class="skill-detail-list">
                <div>
                  <dt>言語</dt>
                  <dd>C#, TypeScript, PHP, （学習：Java, C）</dd>
                </div>
                <div>
                  <dt>フレームワーク</dt>
                  <dd>ASP.NET Core MVC（.NET 8）, （学習：Servlet/JSP）</dd>
                </div>
                <div>
                  <dt>API</dt>
                  <dd>GraphQL</dd>
                </div>
                <div>
                  <dt>ORM</dt>
                  <dd>Entity Framework Core</dd>
                </div>
              </dl>
            </section><!-- h3 -->
            
            <section class="skill-detail skill-detail--db">
              <h3 class="skill-detail-head c-middle_head">
                <span class="u-jp">データベース</span>
              </h3>
              <dl class="skill-detail-list">
                <div>
                  <dt>DBMS</dt>
                  <dd>SQL Server, PostgreSQL, MySQL</dd>
                </div>
                <div>
                  <dt>管理ツール</dt>
                  <dd>SQL Server Management Studio, pgAdmin, MySQL Workbench</dd>
                </div>
              </dl>
            </section><!-- h3 -->
            
            <section class="skill-detail skill-detail--infra">
              <h3 class="skill-detail-head c-middle_head">
                <span class="u-jp">インフラ</span>
              </h3>
              <dl class="skill-detail-list">
                <div>
                  <dt>OS</dt>
                  <dd>Windows Server, Linux</dd>
                </div>
                <div>
                  <dt>Webサーバー</dt>
                  <dd>IIS, nginx</dd>
                </div>
                <div>
                  <dt>クラウド</dt>
                  <dd>（学習：AWS）</dd>
                </div>
              </dl>
            </section><!-- h3 -->
            
            <section class="skill-detail skill-detail--other">
              <h3 class="skill-detail-head c-middle_head">
                <span class="u-jp">その他</span>
              </h3>
              <dl class="skill-detail-list">
                <div>
                  <dt>バージョン管理</dt>
                  <dd>GitHub, Backlog (Git), Sourcetree</dd>
                </div>
                <div>
                  <dt>CMS</dt>
                  <dd>WordPress</dd>
                </div>
                <div>
                  <dt>エディタ</dt>
                  <dd>Visual Studio Code, Dreamweaver</dd>
                </div>
                <div>
                  <dt>デザインツール</dt>
                  <dd>Figma, Photoshop, Illustrator, Fireworks</dd>
                </div>
              </dl>
            </section><!-- h3 -->
            
          </div><!-- .skill-detail_wrap -->
          
        </div><!-- .skill-outer -->
      </div><!-- .skill-outer -->
    </section><!-- h3 #skill -->
    
    <?php
    // $categories (トップレベルのカテゴリ一覧) はヘッダナビで既に取得済
    ?>
    <?php if (!empty($categories)) : ?>
      <?php foreach($categories as $category) : ?>
        <?php
        $tpl_args = array(
          'slug' => $category->slug, // スラッグ名
          'name' => $category->name, // カテゴリー名
          // 子カテゴリ
          // 取得するだけで存在チェックは後で行う
          // term_id は文字列なので [(int)] でキャストする
          'children_id' => get_term_children((int)$category->term_id, 'category'),
        );
        
        get_template_part('template-parts/loop-category-section', null, $tpl_args);
        
        // 第1階層のカテゴリループ
        ?>
      <?php endforeach; ?>
    <?php endif; ?>
    
  </main>
  
  <div id="toTopCircleOuter" class="p-to_top-circle-outer">
    <div class="p-to_top-circle-wrap">
      <a id="toTopCircle" class="p-to_top-circle c-btn_circle c-btn_circle-up_arrow u-bg_dark_gray" href="#"></a>
    </div>
  </div>
  <?php get_footer(); ?>