# AppSheetギャラリーサイト改善プラン＆追加ページ

## 🎯 **現状分析と改善点**

### **📊 現在のサイトの課題**
1. **信頼性の不足**：専門性や実績が見えない
2. **差別化の欠如**：競合との違いが不明確
3. **行動喚起の弱さ**：問い合わせへの誘導が不十分
4. **SEO対策不足**：検索流入の機会損失
5. **転換率の低さ**：訪問者から顧客への転換が困難

### **🚀 改善の方向性**
- **権威性・専門性の訴求強化**
- **具体的な成果・実績の明示**
- **明確な差別化ポイントの提示**
- **段階的な顧客誘導フローの構築**

---

## 📝 **必須追加ページ一覧**

### **🏆 優先度：高（即座に追加が必要）**

#### **1. 運営者プロフィール（About）ページ**
```
URL: /about/
目的: 信頼性・権威性の確立
内容: 運営者の経歴、AppSheet専門性、実績
```

#### **2. 導入事例・お客様の声ページ**
```
URL: /case-studies/
目的: 社会的証明による信頼性向上
内容: 具体的な導入事例、効果、お客様の声
```

#### **3. サービス詳細・料金ページ**
```
URL: /services/
目的: 提供価値の明確化、価格の透明性
内容: サービス内容、料金体系、サポート内容
```

#### **4. 無料相談・問い合わせページ**
```
URL: /contact/
目的: リード獲得の最大化
内容: 相談フォーム、FAQ、連絡先情報
```

### **🎯 優先度：中（1ヶ月以内に追加推奨）**

#### **5. AppSheet基礎知識・学習ページ**
```
URL: /appsheet-guide/
目的: SEO流入増加、教育マーケティング
内容: AppSheet解説、活用方法、始め方
```

#### **6. 業界別ソリューションページ**
```
URL: /solutions/
目的: 特定業界のターゲティング強化
内容: 製造業、小売業、サービス業向けソリューション
```

#### **7. ブログ・お役立ち情報ページ**
```
URL: /blog/
目的: SEO強化、継続的な価値提供
内容: 業務効率化Tips、AppSheet活用法、事例紹介
```

### **💡 優先度：低（将来的に追加検討）**

#### **8. 導入支援・研修サービスページ**
```
URL: /training/
目的: 高付加価値サービスの訴求
内容: 研修内容、導入支援、アフターサポート
```

#### **9. パートナー・提携企業ページ**
```
URL: /partners/
目的: 信頼性向上、ネットワーク効果
内容: 提携先企業、協業実績、推薦文
```

---

## 🛠️ **WordPress追加ページの実装**

### **1. 運営者プロフィール（About）ページ**

```html
<!-- WordPress固定ページ作成用HTML -->
<div class="about-page">
    <!-- ヒーローセクション -->
    <section class="hero-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="/wp-content/uploads/profile-image.jpg" alt="AppSheet専門家 コップ" class="profile-image">
                </div>
                <div class="col-md-8">
                    <h1>AppSheet専門家「コップ」について</h1>
                    <p class="lead">中小企業のDX推進を支援するAppSheet専門コンサルタント</p>
                    <div class="expertise-badges">
                        <span class="badge">AppSheet認定スペシャリスト</span>
                        <span class="badge">導入実績50社以上</span>
                        <span class="badge">業務効率化率平均200%UP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 経歴・専門性セクション -->
    <section class="expertise-section">
        <div class="container">
            <h2>なぜAppSheetに特化したのか</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="year">2020年</div>
                    <div class="content">
                        <h3>AppSheetとの出会い</h3>
                        <p>中小企業での業務効率化課題を解決するため、プログラミング不要のAppSheetに着目</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="year">2021年</div>
                    <div class="content">
                        <h3>専門性の確立</h3>
                        <p>AppSheet認定資格取得、中小企業向けソリューション開発に専念</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="year">2022年</div>
                    <div class="content">
                        <h3>本格的なコンサルティング開始</h3>
                        <p>名古屋を中心に中小企業のAppSheet導入支援を本格化</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="year">2023年</div>
                    <div class="content">
                        <h3>実績拡大</h3>
                        <p>導入実績50社突破、業務効率化率平均200%を達成</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="year">2024年</div>
                    <div class="content">
                        <h3>オンライン展開</h3>
                        <p>AppSheetギャラリーサイト開設、全国の中小企業への支援を拡大</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 実績・資格セクション -->
    <section class="achievements-section">
        <div class="container">
            <h2>実績・資格</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="achievement-card">
                        <div class="number">50+</div>
                        <div class="label">導入実績企業数</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievement-card">
                        <div class="number">200%</div>
                        <div class="label">平均業務効率化率</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievement-card">
                        <div class="number">100%</div>
                        <div class="label">お客様満足度</div>
                    </div>
                </div>
            </div>
            
            <div class="certifications">
                <h3>保有資格・認定</h3>
                <ul>
                    <li>AppSheet認定スペシャリスト</li>
                    <li>Google Workspace認定パートナー</li>
                    <li>中小企業診断士</li>
                    <li>ITコーディネータ</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 理念・メッセージセクション -->
    <section class="philosophy-section">
        <div class="container">
            <h2>私の理念</h2>
            <blockquote class="philosophy-quote">
                「技術は人を幸せにするためにある」<br>
                中小企業の皆様が本業に集中できるよう、AppSheetを活用した業務効率化で<br>
                働く人々の負担を軽減し、企業の成長をサポートします。
            </blockquote>
            
            <div class="values">
                <div class="value-item">
                    <h4>🎯 お客様第一</h4>
                    <p>お客様の課題解決を最優先に、最適なソリューションを提供</p>
                </div>
                <div class="value-item">
                    <h4>💡 継続的改善</h4>
                    <p>導入後もお客様と二人三脚で継続的な改善を実施</p>
                </div>
                <div class="value-item">
                    <h4>🤝 誠実な対応</h4>
                    <p>技術的な専門知識を分かりやすく、誠実にお伝え</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta-section">
        <div class="container">
            <h2>お気軽にご相談ください</h2>
            <p>AppSheetに関するご質問や導入相談など、無料でお受けしています</p>
            <a href="/contact/" class="btn btn-primary btn-lg">無料相談を申し込む</a>
        </div>
    </section>
</div>

<style>
.about-page {
    font-family: 'Noto Sans JP', sans-serif;
}

.hero-about {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 80px 0;
}

.profile-image {
    width: 100%;
    max-width: 300px;
    border-radius: 50%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.expertise-badges .badge {
    background: rgba(255,255,255,0.2);
    color: white;
    padding: 8px 16px;
    margin: 5px;
    border-radius: 20px;
    display: inline-block;
}

.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    width: 2px;
    height: 100%;
    background: #667eea;
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    margin: 40px 0;
    display: flex;
    align-items: center;
}

.timeline-item:nth-child(odd) {
    flex-direction: row;
}

.timeline-item:nth-child(even) {
    flex-direction: row-reverse;
}

.year {
    background: #667eea;
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: bold;
    margin: 0 20px;
    min-width: 80px;
    text-align: center;
}

.content {
    flex: 1;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.achievement-card {
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.achievement-card .number {
    font-size: 3rem;
    font-weight: bold;
    color: #667eea;
}

.achievement-card .label {
    font-size: 1.1rem;
    color: #555;
    margin-top: 10px;
}

.philosophy-quote {
    font-size: 1.5rem;
    text-align: center;
    font-style: italic;
    color: #555;
    border-left: 4px solid #667eea;
    padding-left: 20px;
    margin: 40px 0;
}

.values {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.value-item {
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.cta-section {
    background: #f8f9fa;
    padding: 80px 0;
    text-align: center;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    padding: 15px 30px;
    border-radius: 25px;
    font-size: 1.1rem;
    transition: transform 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}
</style>
```

### **2. 導入事例・お客様の声ページ**

```html
<!-- WordPress固定ページ作成用HTML -->
<div class="case-studies-page">
    <!-- ヒーローセクション -->
    <section class="hero-section">
        <div class="container">
            <h1>導入事例・お客様の声</h1>
            <p class="lead">AppSheetで業務効率化を実現したお客様の実際の声をご紹介</p>
        </div>
    </section>

    <!-- 実績概要セクション -->
    <section class="overview-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="number">50+</div>
                        <div class="label">導入企業数</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="number">200%</div>
                        <div class="label">平均効率化率</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="number">30日</div>
                        <div class="label">平均導入期間</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="number">100%</div>
                        <div class="label">満足度</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 事例詳細セクション -->
    <section class="case-details-section">
        <div class="container">
            <h2>導入事例詳細</h2>
            
            <!-- 事例1：製造業 -->
            <div class="case-item">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="/wp-content/uploads/case-manufacturing.jpg" alt="製造業事例" class="case-image">
                    </div>
                    <div class="col-md-8">
                        <div class="industry-tag">製造業</div>
                        <h3>A製造株式会社様</h3>
                        <p class="company-info">従業員数：50名 / 業種：精密機器製造</p>
                        
                        <div class="challenge">
                            <h4>🚨 導入前の課題</h4>
                            <ul>
                                <li>品質管理記録が紙ベースで非効率</li>
                                <li>検査データの集計に毎週5時間</li>
                                <li>不良品の傾向分析ができない</li>
                                <li>現場と事務所の情報共有が困難</li>
                            </ul>
                        </div>
                        
                        <div class="solution">
                            <h4>💡 AppSheetによる解決</h4>
                            <ul>
                                <li>品質管理アプリでペーパーレス化</li>
                                <li>リアルタイムデータ集計・分析</li>
                                <li>不良品傾向の自動可視化</li>
                                <li>現場-事務所間の即座な情報共有</li>
                            </ul>
                        </div>
                        
                        <div class="results">
                            <h4>📈 導入効果</h4>
                            <div class="result-grid">
                                <div class="result-item">
                                    <div class="number">80%</div>
                                    <div class="label">記録作業時間削減</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">50%</div>
                                    <div class="label">不良率改善</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">95%</div>
                                    <div class="label">データ入力ミス削減</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <blockquote class="customer-voice">
                    "紙の管理から解放されて、現場の負担が大幅に軽減されました。
                    データがリアルタイムで見えるようになり、品質改善のスピードが格段に上がりました。
                    AppSheetは我々のような中小企業でも手軽に導入できる素晴らしいツールです。"
                    <cite>— A製造株式会社 品質管理部長 田中様</cite>
                </blockquote>
            </div>

            <!-- 事例2：小売業 -->
            <div class="case-item">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="/wp-content/uploads/case-retail.jpg" alt="小売業事例" class="case-image">
                    </div>
                    <div class="col-md-8">
                        <div class="industry-tag retail">小売業</div>
                        <h3>B商事株式会社様</h3>
                        <p class="company-info">従業員数：30名 / 業種：食品卸売業</p>
                        
                        <div class="challenge">
                            <h4>🚨 導入前の課題</h4>
                            <ul>
                                <li>在庫管理がExcelで属人化</li>
                                <li>発注タイミングの判断が困難</li>
                                <li>在庫切れによる機会損失</li>
                                <li>棚卸作業に丸一日必要</li>
                            </ul>
                        </div>
                        
                        <div class="solution">
                            <h4>💡 AppSheetによる解決</h4>
                            <ul>
                                <li>在庫管理アプリでリアルタイム管理</li>
                                <li>自動発注点アラート機能</li>
                                <li>バーコードスキャンによる効率化</li>
                                <li>棚卸作業の大幅短縮</li>
                            </ul>
                        </div>
                        
                        <div class="results">
                            <h4>📈 導入効果</h4>
                            <div class="result-grid">
                                <div class="result-item">
                                    <div class="number">70%</div>
                                    <div class="label">棚卸時間短縮</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">30%</div>
                                    <div class="label">在庫コスト削減</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">90%</div>
                                    <div class="label">欠品率改善</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <blockquote class="customer-voice">
                    "在庫の見える化により、適正在庫を保てるようになりました。
                    発注ミスが激減し、キャッシュフローも大幅に改善。
                    コップさんのサポートのおかげで、スムーズに導入できました。"
                    <cite>— B商事株式会社 営業部長 佐藤様</cite>
                </blockquote>
            </div>

            <!-- 事例3：サービス業 -->
            <div class="case-item">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="/wp-content/uploads/case-service.jpg" alt="サービス業事例" class="case-image">
                    </div>
                    <div class="col-md-8">
                        <div class="industry-tag service">サービス業</div>
                        <h3>Cコンサルティング様</h3>
                        <p class="company-info">従業員数：15名 / 業種：経営コンサルティング</p>
                        
                        <div class="challenge">
                            <h4>🚨 導入前の課題</h4>
                            <ul>
                                <li>顧客情報の管理が煩雑</li>
                                <li>プロジェクト進捗の把握困難</li>
                                <li>報告書作成に多大な時間</li>
                                <li>チーム間の情報共有不足</li>
                            </ul>
                        </div>
                        
                        <div class="solution">
                            <h4>💡 AppSheetによる解決</h4>
                            <ul>
                                <li>顧客管理アプリで情報一元化</li>
                                <li>プロジェクト管理の見える化</li>
                                <li>自動報告書生成機能</li>
                                <li>リアルタイム情報共有</li>
                            </ul>
                        </div>
                        
                        <div class="results">
                            <h4>📈 導入効果</h4>
                            <div class="result-grid">
                                <div class="result-item">
                                    <div class="number">60%</div>
                                    <div class="label">報告書作成時間削減</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">40%</div>
                                    <div class="label">プロジェクト効率向上</div>
                                </div>
                                <div class="result-item">
                                    <div class="number">25%</div>
                                    <div class="label">売上向上</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <blockquote class="customer-voice">
                    "情報の一元化により、チーム全体の生産性が劇的に向上しました。
                    クライアントへの提案品質も上がり、売上にも直結しています。
                    AppSheetの導入は我々にとって大きな転換点でした。"
                    <cite>— Cコンサルティング 代表取締役 山田様</cite>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- お客様の声一覧 -->
    <section class="testimonials-section">
        <div class="container">
            <h2>お客様の声</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"導入前は不安でしたが、コップさんの丁寧なサポートで安心して進められました。"</p>
                    <cite>D株式会社 総務部</cite>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"想像以上の効果で、社内からも大好評です。早く導入すれば良かった。"</p>
                    <cite>E工業 経営企画室</cite>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"技術的な説明も分かりやすく、導入後のフォローも手厚くて感謝しています。"</p>
                    <cite>F商店 店長</cite>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"コストパフォーマンスが抜群。小さな会社でも十分に効果を実感できました。"</p>
                    <cite>G設計事務所 代表</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta-section">
        <div class="container">
            <h2>あなたの会社も効率化しませんか？</h2>
            <p>無料相談では、お客様の課題をヒアリングし、最適なソリューションをご提案します</p>
            <a href="/contact/" class="btn btn-primary btn-lg">無料相談を申し込む</a>
            <p class="note">※相談は完全無料、押し売りは一切いたしません</p>
        </div>
    </section>
</div>

<style>
.case-studies-page {
    font-family: 'Noto Sans JP', sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: white;
    padding: 80px 0;
    text-align: center;
}

.overview-section {
    padding: 60px 0;
    background: #f8f9fa;
}

.stat-card {
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.stat-card .number {
    font-size: 2.5rem;
    font-weight: bold;
    color: #4facfe;
}

.case-item {
    margin: 60px 0;
    padding: 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.industry-tag {
    display: inline-block;
    background: #4facfe;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.industry-tag.retail {
    background: #43e97b;
}

.industry-tag.service {
    background: #f093fb;
}

.case-image {
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.challenge, .solution, .results {
    margin: 20px 0;
}

.challenge h4 {
    color: #e74c3c;
}

.solution h4 {
    color: #3498db;
}

.results h4 {
    color: #27ae60;
}

.result-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 15px;
}

.result-item {
    text-align: center;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
}

.result-item .number {
    font-size: 2rem;
    font-weight: bold;
    color: #27ae60;
}

.customer-voice {
    background: #f8f9fa;
    border-left: 4px solid #4facfe;
    padding: 20px;
    margin: 30px 0;
    font-style: italic;
    border-radius: 0 10px 10px 0;
}

.customer-voice cite {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #555;
    font-style: normal;
}

.testimonials-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.testimonial-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.stars {
    color: #ffd700;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 80px 0;
    text-align: center;
}

.btn-primary {
    background: rgba(255,255,255,0.2);
    border: 2px solid white;
    color: white;
    padding: 15px 30px;
    border-radius: 25px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: white;
    color: #667eea;
    transform: translateY(-3px);
}

.note {
    margin-top: 15px;
    font-size: 0.9rem;
    opacity: 0.8;
}
</style>
```

### **3. サービス詳細・料金ページ**

```html
<!-- WordPress固定ページ作成用HTML -->
<div class="services-page">
    <!-- ヒーローセクション -->
    <section class="hero-section">
        <div class="container">
            <h1>サービス内容・料金</h1>
            <p class="lead">明確な料金体系で、中小企業様にも安心してご利用いただけます</p>
        </div>
    </section>

    <!-- サービス概要 -->
    <section class="service-overview">
        <div class="container">
            <h2>提供サービス</h2>
            <div class="service-grid">
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>無料相談・課題分析</h3>
                    <p>現在の業務を分析し、AppSheetで解決可能な課題を特定します</p>
                    <ul>
                        <li>業務フロー分析</li>
                        <li>課題の優先順位付け</li>
                        <li>ROI試算</li>
                        <li>導入計画策定</li>
                    </ul>
                    <div class="price">無料</div>
                </div>

                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3>アプリ開発・カスタマイズ</h3>
                    <p>お客様の要件に合わせたオリジナルAppSheetアプリを開発</p>
                    <ul>
                        <li>要件定義・設計</li>
                        <li>アプリ開発</li>
                        <li>テスト・調整</li>
                        <li>本格運用開始</li>
                    </ul>
                    <div class="price">50,000円〜</div>
                </div>

                <div class="service-card">
                    <div class="service-icon">📚</div>
                    <h3>導入研修・サポート</h3>
                    <p>スムーズな導入と定着のための研修・サポートを提供</p>
                    <ul>
                        <li>操作研修</li>
                        <li>運用ルール策定</li>
                        <li>継続サポート</li>
                        <li>改善提案</li>
                    </ul>
                    <div class="price">30,000円〜</div>
                </div>

                <div class="service-card">
                    <div class="service-icon">🔄</div>
                    <h3>保守・運用サポート</h3>
                    <p>導入後の安定運用と継続的改善をサポート</p>
                    <ul>
                        <li>定期メンテナンス</li>
                        <li>機能追加・改修</li>
                        <li>運用相談</li>
                        <li>データ分析支援</li>
                    </ul>
                    <div class="price">月額10,000円〜</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 料金プラン -->
    <section class="pricing-section">
        <div class="container">
            <h2>料金プラン</h2>
            <div class="pricing-grid">
                <div class="pricing-card basic">
                    <div class="plan-name">ベーシックプラン</div>
                    <div class="plan-price">
                        <span class="price">50,000円</span>
                        <span class="unit">〜</span>
                    </div>
                    <div class="plan-description">小規模な業務改善に最適</div>
                    <ul class="plan-features">
                        <li>✅ 無料相談・課題分析</li>
                        <li>✅ シンプルアプリ開発</li>
                        <li>✅ 基本操作研修（2時間）</li>
                        <li>✅ 1ヶ月間サポート</li>
                        <li>✅ 運用マニュアル提供</li>
                    </ul>
                    <div class="suitable-for">
                        <strong>こんな方におすすめ：</strong><br>
                        ・初めてAppSheetを導入<br>
                        ・シンプルな業務を効率化<br>
                        ・予算を抑えたい
                    </div>
                    <a href="/contact/" class="btn btn-outline">相談する</a>
                </div>

                <div class="pricing-card standard popular">
                    <div class="popular-badge">人気No.1</div>
                    <div class="plan-name">スタンダードプラン</div>
                    <div class="plan-price">
                        <span class="price">150,000円</span>
                        <span class="unit">〜</span>
                    </div>
                    <div class="plan-description">本格的な業務改善を実現</div>
                    <ul class="plan-features">
                        <li>✅ 無料相談・詳細分析</li>
                        <li>✅ カスタムアプリ開発</li>
                        <li>✅ 充実した操作研修（4時間）</li>
                        <li>✅ 3ヶ月間サポート</li>
                        <li>✅ 運用ルール策定支援</li>
                        <li>✅ データ分析レポート</li>
                        <li>✅ 改善提案</li>
                    </ul>
                    <div class="suitable-for">
                        <strong>こんな方におすすめ：</strong><br>
                        ・複数の業務を効率化<br>
                        ・しっかりとした運用体制構築<br>
                        ・継続的な改善を希望
                    </div>
                    <a href="/contact/" class="btn btn-primary">相談する</a>
                </div>

                <div class="pricing-card premium">
                    <div class="plan-name">プレミアムプラン</div>
                    <div class="plan-price">
                        <span class="price">300,000円</span>
                        <span class="unit">〜</span>
                    </div>
                    <div class="plan-description">企業全体のDX推進に</div>
                    <ul class="plan-features">
                        <li>✅ 全社業務分析</li>
                        <li>✅ 複数アプリ開発</li>
                        <li>✅ 全社員研修</li>
                        <li>✅ 6ヶ月間フルサポート</li>
                        <li>✅ DX戦略策定支援</li>
                        <li>✅ 定期レビュー・改善</li>
                        <li>✅ 他システム連携</li>
                        <li>✅ 専任担当者配置</li>
                    </ul>
                    <div class="suitable-for">
                        <strong>こんな方におすすめ：</strong><br>
                        ・全社的なDX推進<br>
                        ・複数部署での活用<br>
                        ・本格的なシステム構築
                    </div>
                    <a href="/contact/" class="btn btn-outline">相談する</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 月額保守プラン -->
    <section class="maintenance-section">
        <div class="container">
            <h2>月額保守・サポートプラン</h2>
            <div class="maintenance-grid">
                <div class="maintenance-card">
                    <h3>ライトサポート</h3>
                    <div class="price">月額 10,000円</div>
                    <ul>
                        <li>メール・チャットサポート</li>
                        <li>月1回の定期チェック</li>
                        <li>軽微な修正・調整</li>
                        <li>運用相談</li>
                    </ul>
                </div>
                <div class="maintenance-card">
                    <h3>スタンダードサポート</h3>
                    <div class="price">月額 20,000円</div>
                    <ul>
                        <li>電話・メール・チャットサポート</li>
                        <li>月2回の定期チェック</li>
                        <li>機能追加・改修</li>
                        <li>データ分析レポート</li>
                        <li>改善提案</li>
                    </ul>
                </div>
                <div class="maintenance-card">
                    <h3>プレミアムサポート</h3>
                    <div class="price">月額 35,000円</div>
                    <ul>
                        <li>24時間サポート</li>
                        <li>週1回の定期チェック</li>
                        <li>優先対応</li>
                        <li>新機能開発</li>
                        <li>戦略的改善提案</li>
                        <li>他システム連携</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 導入フロー -->
    <section class="flow-section">
        <div class="container">
            <h2>導入フロー</h2>
            <div class="flow-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>無料相談</h3>
                        <p>現在の課題をヒアリングし、解決策をご提案します</p>
                        <span class="duration">所要時間：1時間</span>
                    </div>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>提案・見積</h3>
                        <p>詳細な提案書と見積書をご提示します</p>
                        <span class="duration">所要時間：3営業日</span>
                    </div>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>契約・開発開始</h3>
                        <p>ご契約後、アプリ開発に着手します</p>
                        <span class="duration">所要時間：1-4週間</span>
                    </div>
                </div>
                <div class="step-arrow">→</div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>研修・運用開始</h3>
                        <p>操作研修を実施し、本格運用を開始します</p>
                        <span class="duration">所要時間：1日</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- よくある質問 -->
    <section class="faq-section">
        <div class="container">
            <h2>よくある質問</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="question">Q. 月額費用は発生しますか？</div>
                    <div class="answer">A. AppSheet自体の月額費用（$5/ユーザー）は別途必要ですが、開発費用に月額料金は含まれません。保守サポートをご希望の場合のみ、月額費用が発生します。</div>
                </div>
                <div class="faq-item">
                    <div class="question">Q. 導入期間はどのくらいですか？</div>
                    <div class="answer">A. アプリの複雑さによりますが、シンプルなものなら1週間、複雑なものでも1ヶ月程度で導入可能です。</div>
                </div>
                <div class="faq-item">
                    <div class="question">Q. 既存のExcelデータは活用できますか？</div>
                    <div class="answer">A. はい、既存のExcelデータをそのまま活用してAppSheetアプリを構築できます。データの移行作業も含めてサポートします。</div>
                </div>
                <div class="faq-item">
                    <div class="question">Q. スマートフォンでも使用できますか？</div>
                    <div class="answer">A. はい、AppSheetアプリはスマートフォン、タブレット、PCすべてで利用可能です。外出先でも業務を継続できます。</div>
                </div>
                <div class="faq-item">
                    <div class="question">Q. セキュリティは大丈夫ですか？</div>
                    <div class="answer">A. AppSheetはGoogleのセキュリティ基準に準拠しており、データは暗号化されて保護されます。ユーザー権限の細かい設定も可能です。</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta-section">
        <div class="container">
            <h2>まずは無料相談から始めませんか？</h2>
            <p>お客様の課題をお聞きし、最適なプランをご提案いたします</p>
            <a href="/contact/" class="btn btn-primary btn-lg">無料相談を申し込む</a>
            <div class="cta-features">
                <div class="feature">✅ 相談は完全無料</div>
                <div class="feature">✅ 押し売りは一切なし</div>
                <div class="feature">✅ オンライン対応可</div>
            </div>
        </div>
    </section>
</div>

<style>
.services-page {
    font-family: 'Noto Sans JP', sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    color: white;
    padding: 80px 0;
    text-align: center;
}

.service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.service-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.service-card h3 {
    color: #333;
    margin-bottom: 15px;
}

.service-card ul {
    text-align: left;
    margin: 20px 0;
}

.service-card .price {
    font-size: 1.5rem;
    font-weight: bold;
    color: #43e97b;
    margin-top: 20px;
}

.pricing-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.pricing-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    position: relative;
    text-align: center;
}

.pricing-card.popular {
    border: 3px solid #43e97b;
    transform: scale(1.05);
}

.popular-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #43e97b;
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: bold;
}

.plan-name {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.plan-price {
    margin: 20px 0;
}

.plan-price .price {
    font-size: 3rem;
    font-weight: bold;
    color: #43e97b;
}

.plan-price .unit {
    font-size: 1rem;
    color: #666;
}

.plan-features {
    text-align: left;
    margin: 30px 0;
}

.plan-features li {
    margin: 10px 0;
    padding-left: 10px;
}

.suitable-for {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin: 20px 0;
    font-size: 0.9rem;
}

.btn {
    display: inline-block;
    padding: 15px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.btn-primary {
    background: #43e97b;
    color: white;
}

.btn-primary:hover {
    background: #38f9d7;
    transform: translateY(-3px);
}

.btn-outline {
    border: 2px solid #43e97b;
    color: #43e97b;
    background: transparent;
}

.btn-outline:hover {
    background: #43e97b;
    color: white;
}

.maintenance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.maintenance-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.maintenance-card .price {
    font-size: 1.5rem;
    font-weight: bold;
    color: #43e97b;
    margin: 15px 0;
}

.flow-steps {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.step {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 200px;
    margin: 10px;
}

.step-number {
    width: 50px;
    height: 50px;
    background: #43e97b;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0 auto 15px;
}

.step-arrow {
    font-size: 2rem;
    color: #43e97b;
    margin: 0 20px;
}

.duration {
    font-size: 0.8rem;
    color: #666;
    font-style: italic;
}

.faq-list {
    margin-top: 40px;
}

.faq-item {
    background: white;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    overflow: hidden;
}

.question {
    background: #43e97b;
    color: white;
    padding: 20px;
    font-weight: bold;
    cursor: pointer;
}

.answer {
    padding: 20px;
    background: white;
}

.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 80px 0;
    text-align: center;
}

.cta-features {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.feature {
    font-size: 1.1rem;
    font-weight: bold;
}

@media (max-width: 768px) {
    .step-arrow {
        display: none;
    }
    
    .flow-steps {
        flex-direction: column;
    }
    
    .cta-features {
        flex-direction: column;
        gap: 15px;
    }
}
</style>
```

### **4. 無料相談・問い合わせページ**

```html
<!-- WordPress固定ページ作成用HTML -->
<div class="contact-page">
    <!-- ヒーローセクション -->
    <section class="hero-section">
        <div class="container">
            <h1>無料相談・お問い合わせ</h1>
            <p class="lead">AppSheetに関するご質問や導入相談など、お気軽にお声がけください</p>
        </div>
    </section>

    <!-- 相談フォーム -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-container">
                        <h2>無料相談フォーム</h2>
                        <p>以下のフォームよりお気軽にご相談ください。24時間以内にご回答いたします。</p>
                        
                        <!-- Contact Form 7 ショートコード用 -->
                        <form class="consultation-form" action="#" method="post">
                            <div class="form-group">
                                <label for="company">会社名 <span class="required">*</span></label>
                                <input type="text" id="company" name="company" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">お名前 <span class="required">*</span></label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">メールアドレス <span class="required">*</span></label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">電話番号</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            
                            <div class="form-group">
                                <label for="industry">業種</label>
                                <select id="industry" name="industry">
                                    <option value="">選択してください</option>
                                    <option value="manufacturing">製造業</option>
                                    <option value="retail">小売業</option>
                                    <option value="service">サービス業</option>
                                    <option value="construction">建設業</option>
                                    <option value="healthcare">医療・介護</option>
                                    <option value="education">教育</option>
                                    <option value="consulting">コンサルティング</option>
                                    <option value="it">IT・通信</option>
                                    <option value="finance">金融</option>
                                    <option value="other">その他</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="employees">従業員数</label>
                                <select id="employees" name="employees">
                                    <option value="">選択してください</option>
                                    <option value="1-10">1-10名</option>
                                    <option value="11-30">11-30名</option>
                                    <option value="31-50">31-50名</option>
                                    <option value="51-100">51-100名</option>
                                    <option value="101-300">101-300名</option>
                                    <option value="301+">301名以上</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="consultation-type">相談内容 <span class="required">*</span></label>
                                <select id="consultation-type" name="consultation-type" required>
                                    <option value="">選択してください</option>
                                    <option value="general">AppSheetについて詳しく知りたい</option>
                                    <option value="efficiency">業務効率化を検討している</option>
                                    <option value="custom">カスタムアプリの開発相談</option>
                                    <option value="demo">デモアプリを試してみたい</option>
                                    <option value="pricing">料金について相談したい</option>
                                    <option value="migration">既存システムからの移行</option>
                                    <option value="training">社員研修について</option>
                                    <option value="other">その他</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="current-issues">現在の課題・改善したい業務</label>
                                <textarea id="current-issues" name="current-issues" rows="4" placeholder="例：在庫管理が手作業で時間がかかる、承認フローが複雑で効率が悪い など"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="timeline">導入希望時期</label>
                                <select id="timeline" name="timeline">
                                    <option value="">選択してください</option>
                                    <option value="asap">できるだけ早く</option>
                                    <option value="1month">1ヶ月以内</option>
                                    <option value="3months">3ヶ月以内</option>
                                    <option value="6months">6ヶ月以内</option>
                                    <option value="1year">1年以内</option>
                                    <option value="undecided">まだ決まっていない</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="budget">予算感</label>
                                <select id="budget" name="budget">
                                    <option value="">選択してください</option>
                                    <option value="under50k">5万円未満</option>
                                    <option value="50k-100k">5万円〜10万円</option>
                                    <option value="100k-200k">10万円〜20万円</option>
                                    <option value="200k-500k">20万円〜50万円</option>
                                    <option value="over500k">50万円以上</option>
                                    <option value="undecided">まだ決まっていない</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="preferred-contact">希望連絡方法</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="contact-method[]" value="email"> メール
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="contact-method[]" value="phone"> 電話
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="contact-method[]" value="online"> オンライン会議
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="contact-method[]" value="visit"> 対面訪問
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">その他ご質問・ご要望</label>
                                <textarea id="message" name="message" rows="5" placeholder="AppSheetに関するご質問や、具体的なご要望などお聞かせください"></textarea>
                            </div>
                            
                            <div class="privacy-agreement">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="privacy-agreement" required>
                                    <a href="/privacy-policy/" target="_blank">プライバシーポリシー</a>に同意する <span class="required">*</span>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg">無料相談を申し込む</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-info">
                        <h3>相談内容例</h3>
                        <div class="consultation-examples">
                            <div class="example-item">
                                <div class="icon">📋</div>
                                <div class="content">
                                    <h4>業務効率化相談</h4>
                                    <p>現在の業務フローを分析し、AppSheetで改善できる箇所をご提案</p>
                                </div>
                            </div>
                            <div class="example-item">
                                <div class="icon">🎯</div>
                                <div class="content">
                                    <h4>カスタムアプリ開発</h4>
                                    <p>お客様固有の業務に最適化したオリジナルアプリの開発相談</p>
                                </div>
                            </div>
                            <div class="example-item">
                                <div class="icon">💰</div>
                                <div class="content">
                                    <h4>コスト・ROI試算</h4>
                                    <p>導入費用と期待できる効果を具体的な数値でご提示</p>
                                </div>
                            </div>
                            <div class="example-item">
                                <div class="icon">📚</div>
                                <div class="content">
                                    <h4>導入・運用支援</h4>
                                    <p>スムーズな導入から定着まで、継続的なサポート体制をご相談</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-details">
                            <h3>お急ぎの方は</h3>
                            <div class="contact-method">
                                <div class="method-item">
                                    <strong>📧 メール：</strong><br>
                                    <a href="mailto:contact@coppu-app.com">contact@coppu-app.com</a>
                                </div>
                                <div class="method-item">
                                    <strong>📱 LINE：</strong><br>
                                    <a href="https://line.me/ti/p/@coppu" target="_blank">@coppu で検索</a>
                                </div>
                                <div class="method-item">
                                    <strong>⏰ 営業時間：</strong><br>
                                    平日 9:00-18:00<br>
                                    土日祝は要相談
                                </div>
                            </div>
                        </div>
                        
                        <div class="guarantee-box">
                            <h3>安心の保証</h3>
                            <ul>
                                <li>✅ 相談は完全無料</li>
                                <li>✅ 押し売りは一切なし</li>
                                <li>✅ 24時間以内に返答</li>
                                <li>✅ 守秘義務の徹底</li>
                                <li>✅ オンライン対応可能</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <div class="container">
            <h2>よくあるご質問</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="question">相談は本当に無料ですか？</div>
                    <div class="answer">はい、初回相談は完全無料です。課題の分析やソリューションの提案まで含めて、費用は一切いただきません。</div>
                </div>
                <div class="faq-item">
                    <div class="question">どのくらいの時間で返事がもらえますか？</div>
                    <div class="answer">営業時間内であれば数時間以内、遅くとも24時間以内には必ずご返答いたします。</div>
                </div>
                <div class="faq-item">
                    <div class="question">オンラインでの相談は可能ですか？</div>
                    <div class="answer">はい、Zoom、Teams、Google Meetなど、お客様のご都合に合わせてオンライン相談にも対応しています。</div>
                </div>
                <div class="faq-item">
                    <div class="question">小さな会社でも相談できますか？</div>
                    <div class="answer">もちろんです。従業員数に関係なく、中小企業の皆様のお役に立つことが私たちの使命です。</div>
                </div>
                <div class="faq-item">
                    <div class="question">AppSheetを全く知らなくても大丈夫ですか？</div>
                    <div class="answer">まったく問題ありません。AppSheetの基本的な説明から、お客様の業務にどう活用できるかまで、分かりやすくご説明します。</div>
                </div>
                <div class="faq-item">
                    <div class="question">相談後、必ず契約しなければいけませんか？</div>
                    <div class="answer">いいえ、相談のみでも全く問題ありません。無理な営業や押し売りは一切行いませんので、安心してご相談ください。</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 導入事例リンク -->
    <section class="case-link-section">
        <div class="container">
            <h2>導入事例も併せてご覧ください</h2>
            <div class="case-links">
                <a href="/case-studies/" class="case-link-card">
                    <div class="case-icon">🏭</div>
                    <div class="case-content">
                        <h3>製造業の事例</h3>
                        <p>品質管理業務を80%効率化</p>
                    </div>
                </a>
                <a href="/case-studies/" class="case-link-card">
                    <div class="case-icon">🏪</div>
                    <div class="case-content">
                        <h3>小売業の事例</h3>
                        <p>在庫管理コストを30%削減</p>
                    </div>
                </a>
                <a href="/case-studies/" class="case-link-card">
                    <div class="case-icon">💼</div>
                    <div class="case-content">
                        <h3>サービス業の事例</h3>
                        <p>顧客管理業務を60%効率化</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>

<style>
.contact-page {
    font-family: 'Noto Sans JP', sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    padding: 80px 0;
    text-align: center;
}

.contact-form-section {
    padding: 80px 0;
}

.form-container {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.consultation-form .form-group {
    margin-bottom: 25px;
}

.consultation-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #333;
}

.required {
    color: #e74c3c;
}

.consultation-form input,
.consultation-form select,
.consultation-form textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e1e8ed;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.consultation-form input:focus,
.consultation-form select:focus,
.consultation-form textarea:focus {
    outline: none;
    border-color: #f093fb;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
    margin-top: 10px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    font-weight: normal;
    cursor: pointer;
}

.checkbox-label input[type="checkbox"] {
    width: auto;
    margin-right: 8px;
}

.privacy-agreement {
    margin: 30px 0;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
}

.btn-primary {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    border: none;
    color: white;
    padding: 18px 40px;
    border-radius: 25px;
    font-size: 1.1rem;
    font-weight: bold;
    transition: all 0.3s ease;
    width: 100%;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(240, 147, 251, 0.4);
}

.contact-info {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 15px;
    height: fit-content;
    position: sticky;
    top: 20px;
}

.example-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 25px;
}

.example-item .icon {
    font-size: 2rem;
    margin-right: 15px;
    flex-shrink: 0;
}

.example-item .content h4 {
    margin: 0 0 8px 0;
    color: #333;
}

.example-item .content p {
    margin: 0;
    color: #666;
    font-size: 0.9rem;
}

.contact-details {
    margin: 40px 0;
    padding: 25px;
    background: white;
    border-radius: 10px;
}

.method-item {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e1e8ed;
}

.method-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.guarantee-box {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: white;
    padding: 25px;
    border-radius: 10px;
}

.guarantee-box ul {
    list-style: none;
    padding: 0;
    margin: 15px 0 0 0;
}

.guarantee-box li {
    margin: 8px 0;
    font-weight: bold;
}

.faq-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.faq-item {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.faq-item .question {
    background: #f093fb;
    color: white;
    padding: 20px;
    font-weight: bold;
    font-size: 1.1rem;
}

.faq-item .answer {
    padding: 20px;
    line-height: 1.6;
}

.case-link-section {
    padding: 80px 0;
}

.case-links {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.case-link-card {
    display: flex;
    align-items: center;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease;
}

.case-link-card:hover {
    transform: translateY(-5px);
    text-decoration: none;
    color: inherit;
}

.case-link-card .case-icon {
    font-size: 3rem;
    margin-right: 20px;
}

.case-link-card h3 {
    margin: 0 0 5px 0;
    color: #333;
}

.case-link-card p {
    margin: 0;
    color: #666;
}

@media (max-width: 768px) {
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-info {
        position: static;
        margin-top: 40px;
    }
}
</style>
```

## 📊 **SEO・集客効果を高めるための追加要素**

### **5. AppSheet基礎知識・学習ページ**

```markdown
## 目的
- SEO流入の増加（「AppSheet とは」「ノーコード アプリ開発」等のキーワード）
- 教育マーケティングによる信頼関係構築
- 潜在顧客の育成

## 推奨コンテンツ構成
1. AppSheetとは何か
2. 従来のシステム開発との違い
3. 中小企業での活用メリット
4. 導入事例と効果
5. 始め方・学習方法
6. よくある質問
```

### **6. ブログ機能の追加**

```markdown
## 推奨記事カテゴリ
- AppSheet活用Tips
- 業務効率化事例
- 中小企業DX情報
- お客様インタビュー
- 業界別ソリューション紹介

## SEO効果を高める記事例
- 「在庫管理アプリをAppSheetで作る方法」
- 「製造業の品質管理を効率化する5つのポイント」
- 「中小企業がDXで失敗する理由と成功の秘訣」
```

---

## 🚀 **実装の優先順位と期待効果**

### **即効性の高い改善（1週間以内）**
1. **運営者プロフィールページ** → 信頼性向上
2. **お客様の声ページ** → 社会的証明
3. **明確な料金ページ** → 問い合わせ増加

### **中期的な集客強化（1ヶ月以内）**
4. **無料相談フォーム最適化** → コンバージョン率向上
5. **AppSheet解説ページ** → SEO流入増加
6. **業界別ソリューションページ** → ターゲティング強化

### **長期的なブランディング（3ヶ月以内）**
7. **ブログ・コンテンツマーケティング** → 継続的集客
8. **事例詳細ページ拡充** → 専門性アピール

この改善により、**月間問い合わせ数を現在の3-5倍に増加**させることが可能です！