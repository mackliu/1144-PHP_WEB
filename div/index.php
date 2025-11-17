<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechFlow Solutions - 科技解決方案領導者</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="company.css">
</head>
<body>
    <div class="page-container">
        <!-- 頁首 -->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-mark">TF</div>
                    <div>
                        <h1>TechFlow Solutions</h1>
                        <p>創新科技 • 卓越服務</p>
                    </div>
                </div>
                
                <!-- 導覽列 -->
                <nav class="navbar">
                    <a href="index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'index.php') ? 'active' : ''; ?>">
                        首頁
                    </a>
                    <a href="news.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'about.php') ? 'active' : ''; ?>">
                        最新消息
                    </a>
                    <a href="about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'about.php') ? 'active' : ''; ?>">
                        關於我們
                    </a>
                    <a href="services.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'services.php') ? 'active' : ''; ?>">
                        服務介紹
                    </a>
                    <a href="contact.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) === 'contact.php') ? 'active' : ''; ?>">
                        聯絡我們
                    </a>
                </nav>
            </div>
        </header>

        <!-- 主要內容區 -->
        <main class="main-content">

<section class="hero-section">
    <h1>歡迎來到 TechFlow Solutions</h1>
    <p>我們提供創新的科技解決方案，幫助企業數位轉型，實現業務目標</p>
    <a href="about.php" class="btn-primary">了解更多 →</a>
</section>

<section class="content-card">
    <h2>為什麼選擇我們？</h2>
    <p>TechFlow Solutions 是一家領先的科技顧問公司，致力於為企業提供最先進的數位解決方案。我們擁有超過 15 年的行業經驗，已成功幫助超過 500 家企業實現數位轉型。</p>
</section>

<div class="features-grid">
    <div class="feature-card">
        <div class="feature-icon">⚡</div>
        <h4>快速高效</h4>
        <p>我們使用最新的技術和最佳實踐，確保項目按時交付，質量卓越。</p>
    </div>
    
    <div class="feature-card">
        <div class="feature-icon">🎯</div>
        <h4>精準服務</h4>
        <p>針對各行業的特殊需求，提供量身定製的解決方案，滿足客戶期待。</p>
    </div>
    
    <div class="feature-card">
        <div class="feature-icon">🔒</div>
        <h4>安全可靠</h4>
        <p>企業級安全保護，確保您的數據和系統安全無虞，24/7 專業支援。</p>
    </div>
    
    <div class="feature-card">
        <div class="feature-icon">💡</div>
        <h4>創新技術</h4>
        <p>不斷創新和探索新技術，為客戶提供最前沿的解決方案。</p>
    </div>
    
    <div class="feature-card">
        <div class="feature-icon">👥</div>
        <h4>專業團隊</h4>
        <p>由行業專家組成的團隊，具備豐富的技術和管理經驗。</p>
    </div>
    
    <div class="feature-card">
        <div class="feature-icon">📈</div>
        <h4>持續增長</h4>
        <p>幫助客戶實現業務增長和成本優化，提升競爭力。</p>
    </div>
</div>

<section class="content-card" style="margin-top: 40px;">
    <h3>我們的成就</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; margin-top: 24px;">
        <div style="text-align: center;">
            <div style="font-size: 36px; font-weight: 700; background: linear-gradient(135deg, #7c3aed, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">500+</div>
            <p style="margin: 8px 0 0 0; color: rgba(255, 255, 255, 0.7);">服務客戶</p>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 36px; font-weight: 700; background: linear-gradient(135deg, #7c3aed, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">1000+</div>
            <p style="margin: 8px 0 0 0; color: rgba(255, 255, 255, 0.7);">完成項目</p>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 36px; font-weight: 700; background: linear-gradient(135deg, #7c3aed, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">15+</div>
            <p style="margin: 8px 0 0 0; color: rgba(255, 255, 255, 0.7);">年行業經驗</p>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 36px; font-weight: 700; background: linear-gradient(135deg, #7c3aed, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">98%</div>
            <p style="margin: 8px 0 0 0; color: rgba(255, 255, 255, 0.7);">客戶滿意度</p>
        </div>
    </div>
</section>

<section class="content-card" style="text-align: center;">
    <h3>準備好開始您的轉型之旅了嗎？</h3>
    <p>聯絡我們的專家團隊，討論您的業務需求和目標。</p>
    <a href="contact.php" class="btn-primary">立即聯絡我們</a>
</section>

        </main>

        <!-- 頁腳 -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>TechFlow Solutions</h3>
                    <p>專業提供企業數位轉型與科技解決方案，幫助企業邁向未來。</p>
                </div>
                
                <div class="footer-section">
                    <h4>快速連結</h4>
                    <ul>
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="services.php">服務介紹</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>聯絡資訊</h4>
                    <p>電話: 02-1234-5678</p>
                    <p>郵件: info@techflow.com</p>
                    <p>地址: 台北市信義區科技路 123 號</p>
                </div>
                
                <div class="footer-section">
                    <h4>追蹤我們</h4>
                    <div class="social-links">
                        <a href="#" class="social-icon">Facebook</a>
                        <a href="#" class="social-icon">LinkedIn</a>
                        <a href="#" class="social-icon">Twitter</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 TechFlow Solutions. 版權所有 | <a href="#">隱私政策</a> | <a href="#">服務條款</a></p>
            </div>
        </footer>
    </div>
</body>
</html>
