<?php
/**
 * Template Name: AppSheet説明ページ
 */
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-appsheet-guide.css">

<main class="appsheet-guide">
  <!-- ヒーローセクション -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-content">
        <h1>AppSheet とは？</h1>
        <p class="hero-subtitle">Googleが提供するノーコード・プラットフォームで、<br>誰でも簡単にモバイルアプリを作成できます</p>
        <div class="hero-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/appsheet-hero.png" alt="AppSheetロゴ">
        </div>
      </div>
    </div>
  </section>

  <!-- AppSheetの概要 -->
  <section class="overview-section">
    <div class="container">
      <h2>AppSheetの特徴</h2>
      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-icon">📱</div>
          <h3>ノーコード開発</h3>
          <p>プログラミング知識不要で、直感的な操作でアプリを作成できます</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">📊</div>
          <h3>データ連携</h3>
          <p>Google Sheets、Excel、SQLなど様々なデータソースと連携可能</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🔄</div>
          <h3>リアルタイム同期</h3>
          <p>データの変更が即座に全デバイスに反映されます</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🌐</div>
          <h3>マルチプラットフォーム</h3>
          <p>iOS、Android、Webブラウザで動作するアプリを一度に作成</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🔒</div>
          <h3>セキュリティ</h3>
          <p>Googleのセキュリティ基盤を活用した安全なアプリ運用</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon">⚡</div>
          <h3>高速開発</h3>
          <p>従来の開発手法と比べて、圧倒的に短期間でアプリを構築</p>
        </div>
      </div>
    </div>
  </section>

  <!-- できることセクション -->
  <section class="capabilities-section">
    <div class="container">
      <h2>AppSheetでできること</h2>
      <div class="capabilities-content">
        <div class="capability-category">
          <h3>🏢 ビジネスアプリ</h3>
          <ul>
            <li>在庫管理システム</li>
            <li>顧客管理（CRM）</li>
            <li>営業支援ツール</li>
            <li>経費精算アプリ</li>
            <li>プロジェクト管理</li>
          </ul>
        </div>
        <div class="capability-category">
          <h3>🔧 業務効率化</h3>
          <ul>
            <li>作業報告書作成</li>
            <li>点検・検査記録</li>
            <li>スケジュール管理</li>
            <li>承認ワークフロー</li>
            <li>データ収集・分析</li>
          </ul>
        </div>
        <div class="capability-category">
          <h3>📊 データ管理</h3>
          <ul>
            <li>リアルタイムダッシュボード</li>
            <li>レポート自動生成</li>
            <li>データ可視化</li>
            <li>バックアップ・同期</li>
            <li>多拠点データ統合</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 導入メリット -->
  <section class="benefits-section">
    <div class="container">
      <h2>導入のメリット</h2>
      <div class="benefits-grid">
        <div class="benefit-item">
          <div class="benefit-icon">💰</div>
          <h3>コスト削減</h3>
          <p>従来のアプリ開発と比較して、開発費用を大幅に削減できます</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">⏰</div>
          <h3>時間短縮</h3>
          <p>数日から数週間でアプリを完成させることが可能です</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">🔧</div>
          <h3>保守性</h3>
          <p>変更や修正が簡単で、ビジネスの変化に柔軟に対応できます</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">👥</div>
          <h3>協働性</h3>
          <p>チーム全体でのデータ共有と協働作業が効率化されます</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 活用事例 -->
  <section class="use-cases-section">
    <div class="container">
      <h2>活用事例</h2>
      <div class="use-cases-grid">
        <div class="use-case-item">
          <h3>製造業</h3>
          <p>設備点検記録、品質管理、在庫管理システムの構築</p>
        </div>
        <div class="use-case-item">
          <h3>小売業</h3>
          <p>売上管理、顧客管理、発注システムの効率化</p>
        </div>
        <div class="use-case-item">
          <h3>建設業</h3>
          <p>現場管理、作業報告、安全点検記録の電子化</p>
        </div>
        <div class="use-case-item">
          <h3>医療・介護</h3>
          <p>患者管理、バイタル記録、薬品管理システム</p>
        </div>
        <div class="use-case-item">
          <h3>教育機関</h3>
          <p>出席管理、成績記録、施設予約システム</p>
        </div>
        <div class="use-case-item">
          <h3>サービス業</h3>
          <p>予約管理、顧客対応、業務効率化ツール</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 開発の流れ -->
  <section class="process-section">
    <div class="container">
      <h2>アプリ開発の流れ</h2>
      <div class="process-steps">
        <div class="step-item">
          <div class="step-number">1</div>
          <h3>要件ヒアリング</h3>
          <p>お客様の業務内容やご要望を詳しくお聞きします</p>
        </div>
        <div class="step-item">
          <div class="step-number">2</div>
          <h3>設計・提案</h3>
          <p>最適なアプリ構成を設計し、ご提案いたします</p>
        </div>
        <div class="step-item">
          <div class="step-number">3</div>
          <h3>開発・テスト</h3>
          <p>AppSheetを使用してアプリを開発・テストします</p>
        </div>
        <div class="step-item">
          <div class="step-number">4</div>
          <h3>納品・サポート</h3>
          <p>アプリを納品し、運用サポートを提供します</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>AppSheetでアプリ開発をはじめませんか？</h2>
        <p>デモアプリをご確認いただき、お気軽にお問合せください</p>
        <div class="cta-buttons">
          <a href="<?php echo get_post_type_archive_link('demo_app'); ?>" class="btn btn-primary">デモアプリを見る</a>
          <a href="<?php echo esc_url(home_url('/otoiawase')); ?>" class="btn btn-secondary">お問合せ</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>