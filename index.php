<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Vehicle Parking Management System — Smart, efficient parking management for administrators and users. Track vehicles, manage slots, and streamline operations." />
  <meta name="author" content="VPMS" />
  <meta property="og:title" content="Vehicle Parking Management System" />
  <meta property="og:description" content="Smart parking management for administrators and users." />
  <title>Vehicle Parking Management System</title>

  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #0a0e1a;
      --bg2: #0f1526;
      --bg3: #141c30;
      --accent: #f0a500;
      --accent2: #ff6b35;
      --text: #e8eaf2;
      --text-muted: #7a8099;
      --border: rgba(255,255,255,0.07);
      --card-bg: rgba(255,255,255,0.03);
      --font-head: 'Syne', sans-serif;
      --font-body: 'DM Sans', sans-serif;
      --radius: 14px;
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: var(--font-body);
      font-size: 16px;
      line-height: 1.7;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 0;
      opacity: 0.4;
    }

    /* NAVBAR */
    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      padding: 1.1rem 2.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: rgba(10,14,26,0.85);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border);
    }

    .nav-logo {
      font-family: var(--font-head);
      font-weight: 800;
      font-size: 1.25rem;
      color: var(--text);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-logo span {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .logo-icon {
      width: 34px; height: 34px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 15px;
      color: #0a0e1a;
      flex-shrink: 0;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
      align-items: center;
    }

    .nav-links a {
      color: var(--text-muted);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      transition: color 0.2s;
    }

    .nav-links a:hover { color: var(--text); }

    .nav-cta {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #0a0e1a !important;
      padding: 0.5rem 1.2rem;
      border-radius: 8px;
      font-weight: 600 !important;
    }

    .nav-hamburger {
      display: none;
      background: none;
      border: 1px solid var(--border);
      color: var(--text);
      padding: 0.4rem 0.7rem;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
    }

    /* HERO */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 8rem 1.5rem 5rem;
      overflow: hidden;
    }

    .hero-glow {
      position: absolute;
      width: 700px; height: 700px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(240,165,0,0.12) 0%, transparent 65%);
      top: 50%; left: 50%;
      transform: translate(-50%, -55%);
      pointer-events: none;
    }

    .hero-glow2 {
      position: absolute;
      width: 400px; height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(255,107,53,0.08) 0%, transparent 65%);
      top: 60%; left: 60%;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }

    .hero-grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
      background-size: 60px 60px;
      pointer-events: none;
      mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 80%);
    }

    .hero-content { position: relative; z-index: 1; max-width: 820px; }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      background: rgba(240,165,0,0.1);
      border: 1px solid rgba(240,165,0,0.25);
      color: var(--accent);
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 0.4rem 1rem;
      border-radius: 100px;
      margin-bottom: 1.75rem;
      animation: fadeUp 0.6s ease both;
    }

    h1 {
      font-family: var(--font-head);
      font-size: clamp(2.8rem, 7vw, 5.5rem);
      font-weight: 800;
      line-height: 1.05;
      letter-spacing: -0.03em;
      color: var(--text);
      margin-bottom: 1.25rem;
      animation: fadeUp 0.6s 0.1s ease both;
    }

    h1 .highlight {
      background: linear-gradient(135deg, var(--accent) 20%, var(--accent2) 80%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-sub {
      font-size: 1.15rem;
      color: var(--text-muted);
      max-width: 560px;
      margin: 0 auto 2.5rem;
      font-weight: 300;
      animation: fadeUp 0.6s 0.2s ease both;
    }

    .hero-btns {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
      animation: fadeUp 0.6s 0.3s ease both;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color: #0a0e1a;
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 600;
      padding: 0.85rem 2rem;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 4px 24px rgba(240,165,0,0.25);
    }

    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 32px rgba(240,165,0,0.35); }

    .btn-secondary {
      background: transparent;
      color: var(--text);
      font-family: var(--font-body);
      font-size: 0.95rem;
      font-weight: 500;
      padding: 0.85rem 2rem;
      border-radius: 10px;
      border: 1px solid var(--border);
      cursor: pointer;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background 0.2s, border-color 0.2s;
    }

    .btn-secondary:hover { background: var(--card-bg); border-color: rgba(255,255,255,0.15); }

    /* STATS BAR */
    .stats-bar {
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      background: var(--bg2);
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      padding: 1rem 0;
    }

    .stat-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0.75rem 2.5rem;
      border-right: 1px solid var(--border);
    }

    .stat-item:last-child { border-right: none; }

    .stat-num {
      font-family: var(--font-head);
      font-size: 1.5rem;
      font-weight: 700;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .stat-label { font-size: 0.82rem; color: var(--text-muted); line-height: 1.3; }

    /* SECTIONS */
    section { position: relative; z-index: 1; padding: 6rem 1.5rem; }
    .container { max-width: 1100px; margin: 0 auto; }

    .section-label {
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 0.75rem;
    }

    .section-title {
      font-family: var(--font-head);
      font-size: clamp(1.8rem, 4vw, 2.8rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.02em;
      margin-bottom: 1rem;
    }

    .section-sub { color: var(--text-muted); font-size: 1rem; max-width: 520px; font-weight: 300; }

    /* FEATURES */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1px;
      background: var(--border);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
      margin-top: 3.5rem;
    }

    .feature-card {
      background: var(--bg2);
      padding: 2rem;
      transition: background 0.2s;
      position: relative;
      overflow: hidden;
    }

    .feature-card:hover { background: var(--bg3); }

    .feature-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      opacity: 0;
      transition: opacity 0.3s;
    }

    .feature-card:hover::before { opacity: 1; }

    .feature-icon {
      width: 46px; height: 46px;
      background: rgba(240,165,0,0.1);
      border: 1px solid rgba(240,165,0,0.2);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.1rem;
      color: var(--accent);
      margin-bottom: 1.2rem;
    }

    .feature-title { font-family: var(--font-head); font-size: 1.05rem; font-weight: 600; margin-bottom: 0.6rem; }
    .feature-desc { font-size: 0.9rem; color: var(--text-muted); line-height: 1.65; }

    /* HOW IT WORKS */
    #how { background: var(--bg2); }

    .steps {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
      margin-top: 3.5rem;
      position: relative;
    }

    .steps::before {
      content: '';
      position: absolute;
      top: 2rem; left: 10%; right: 10%;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--accent), var(--accent2), transparent);
      opacity: 0.3;
    }

    .step { text-align: center; }

    .step-num {
      width: 52px; height: 52px;
      margin: 0 auto 1.25rem;
      border-radius: 50%;
      background: var(--bg3);
      border: 1px solid rgba(240,165,0,0.3);
      display: flex; align-items: center; justify-content: center;
      font-family: var(--font-head);
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--accent);
      position: relative; z-index: 1;
    }

    .step-title { font-family: var(--font-head); font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; }
    .step-desc { font-size: 0.88rem; color: var(--text-muted); }

    /* ROLES */
    .roles-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-top: 3.5rem;
    }

    .role-card {
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 2.5rem;
      transition: border-color 0.2s, transform 0.2s;
    }

    .role-card:hover { border-color: rgba(240,165,0,0.3); transform: translateY(-3px); }

    .role-badge {
      display: inline-block;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 0.3rem 0.9rem;
      border-radius: 100px;
      margin-bottom: 1.25rem;
    }

    .role-badge.admin { background: rgba(240,165,0,0.12); color: var(--accent); border: 1px solid rgba(240,165,0,0.25); }
    .role-badge.user  { background: rgba(255,107,53,0.12); color: var(--accent2); border: 1px solid rgba(255,107,53,0.25); }

    .role-title { font-family: var(--font-head); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem; }
    .role-desc { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.5rem; }
    .role-list { list-style: none; display: flex; flex-direction: column; gap: 0.65rem; }

    .role-list li {
      display: flex; align-items: flex-start; gap: 10px;
      font-size: 0.9rem; color: var(--text-muted);
    }

    .role-list li i { color: var(--accent); margin-top: 3px; font-size: 0.8rem; }

    /* TECH STACK */
    #tech { background: var(--bg2); }

    .tech-grid {
      display: flex; flex-wrap: wrap; gap: 1rem;
      margin-top: 3rem; justify-content: center;
    }

    .tech-pill {
      display: flex; align-items: center; gap: 10px;
      background: var(--bg3);
      border: 1px solid var(--border);
      border-radius: 100px;
      padding: 0.6rem 1.4rem;
      font-size: 0.9rem; font-weight: 500;
      transition: border-color 0.2s;
    }

    .tech-pill:hover { border-color: rgba(240,165,0,0.4); }
    .tech-pill i { color: var(--accent); font-size: 1rem; }

    /* DATABASE SCHEMA */
    .schema-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.25rem;
      margin-top: 3.5rem;
    }

    .table-card {
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
    }

    .table-head {
      background: rgba(240,165,0,0.08);
      border-bottom: 1px solid var(--border);
      padding: 0.75rem 1rem;
      display: flex; align-items: center; gap: 8px;
      font-family: var(--font-head);
      font-size: 0.9rem; font-weight: 600; color: var(--accent);
    }

    .table-fields { padding: 0.5rem 0; }

    .table-field {
      display: flex; align-items: center; justify-content: space-between;
      padding: 0.45rem 1rem;
      font-size: 0.82rem;
      border-bottom: 1px solid var(--border);
    }

    .table-field:last-child { border-bottom: none; }
    .field-name { color: var(--text); }
    .field-type { color: var(--text-muted); font-size: 0.75rem; }
    .field-pk { color: var(--accent); font-size: 0.7rem; font-weight: 600; margin-left: 5px; }

    /* CTA */
    .cta-section {
      text-align: center;
      padding: 6rem 1.5rem;
      position: relative; overflow: hidden;
    }

    .cta-glow {
      position: absolute;
      width: 600px; height: 300px;
      background: radial-gradient(ellipse, rgba(240,165,0,0.1) 0%, transparent 70%);
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }

    .cta-section h2 {
      font-family: var(--font-head);
      font-size: clamp(2rem, 5vw, 3.5rem);
      font-weight: 800;
      letter-spacing: -0.03em;
      margin-bottom: 1rem;
      position: relative; z-index: 1;
    }

    .cta-section p {
      color: var(--text-muted); font-size: 1rem;
      max-width: 450px; margin: 0 auto 2.5rem;
      position: relative; z-index: 1;
    }

    .cta-btns { position: relative; z-index: 1; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }

    .creds-box {
      display: inline-flex; gap: 2rem;
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.25rem 2rem;
      margin-top: 2.5rem;
      position: relative; z-index: 1;
      flex-wrap: wrap; justify-content: center;
    }

    .cred { text-align: left; }
    .cred-role { font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--text-muted); margin-bottom: 4px; }
    .cred-val { font-size: 0.88rem; color: var(--text); }
    .cred-val span { color: var(--accent); font-weight: 500; }

    /* FOOTER */
    footer {
      background: var(--bg2);
      border-top: 1px solid var(--border);
      text-align: center;
      padding: 2rem 1.5rem;
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    footer strong { color: var(--accent); }

    /* ANIMATIONS */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.55s ease, transform 0.55s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      nav { padding: 1rem 1.25rem; }
      .nav-links { display: none; flex-direction: column; position: absolute; top: 100%; left: 0; right: 0; background: var(--bg2); border-bottom: 1px solid var(--border); padding: 1rem 1.5rem 1.5rem; gap: 1.25rem; }
      .nav-links.open { display: flex; }
      .nav-hamburger { display: block; }
      .stat-item { padding: 0.75rem 1.25rem; }
      .roles-grid { grid-template-columns: 1fr; }
      .steps::before { display: none; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
  <a href="index.php" class="nav-logo">
    <div class="logo-icon"><i class="fas fa-parking"></i></div>
    <span>VPMS</span>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="#features">Features</a></li>
    <li><a href="#how">How it works</a></li>
    <li><a href="#roles">Roles</a></li>
    <li><a href="#database">Database</a></li>
    <li><a href="#get-started" class="nav-cta">Get Started</a></li>
  </ul>
  <button class="nav-hamburger" id="hamburger" aria-label="Toggle menu">
    <i class="fas fa-bars"></i>
  </button>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-grid"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow2"></div>
  <div class="hero-content">
    <div class="hero-badge"><i class="fas fa-circle" style="font-size:7px;"></i> PHP + MySQL · Full Stack Project</div>
    <h1>Smart <span class="highlight">Vehicle Parking</span> Management System</h1>
    <p class="hero-sub">A complete web-based parking management platform with dual-role access for administrators and registered users — built with PHP, MySQL, and Bootstrap.</p>
    <div class="hero-btns">
      <a href="#get-started" class="btn-primary"><i class="fas fa-sign-in-alt"></i> Access System</a>
      <a href="#features" class="btn-secondary"><i class="fas fa-arrow-down"></i> Explore Features</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
  <div class="stat-item">
    <div><div class="stat-num">3</div><div class="stat-label">Vehicle<br>Categories</div></div>
  </div>
  <div class="stat-item">
    <div><div class="stat-num">2</div><div class="stat-label">User<br>Roles</div></div>
  </div>
  <div class="stat-item">
    <div><div class="stat-num">4</div><div class="stat-label">Database<br>Tables</div></div>
  </div>
  <div class="stat-item">
    <div><div class="stat-num">100%</div><div class="stat-label">Web<br>Based</div></div>
  </div>
</div>

<!-- FEATURES -->
<section id="features">
  <div class="container">
    <div class="reveal">
      <div class="section-label">Core Features</div>
      <h2 class="section-title">Everything you need to manage parking</h2>
      <p class="section-sub">From vehicle entry to exit tracking, VPMS handles your entire parking workflow in one place.</p>
    </div>
    <div class="features-grid reveal">
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-car"></i></div>
        <div class="feature-title">Vehicle Registration</div>
        <div class="feature-desc">Record vehicle details including category, company name, registration number, owner info, and assign a unique parking number automatically.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-clock"></i></div>
        <div class="feature-title">In/Out Time Tracking</div>
        <div class="feature-desc">Automatically timestamps vehicle check-in and check-out. Track exactly how long any vehicle has been parked in real time.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
        <div class="feature-title">Vehicle Categories</div>
        <div class="feature-desc">Supports Four Wheeler, Two Wheeler, and Bicycle categories. Admins can add and manage new categories as needed.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-user-shield"></i></div>
        <div class="feature-title">Dual Role Access</div>
        <div class="feature-desc">Separate admin and user dashboards with role-based access control. Admins manage everything; users can view and register vehicles.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-receipt"></i></div>
        <div class="feature-title">Parking Charges</div>
        <div class="feature-desc">Assign and record parking charges per vehicle. Supports custom charge amounts and remarks for each parking session.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-search"></i></div>
        <div class="feature-title">Search & Status</div>
        <div class="feature-desc">Quickly search vehicles by registration number, owner name, or parking number. Filter by current status — In or Out.</div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how">
  <div class="container">
    <div class="reveal" style="text-align:center;">
      <div class="section-label">Workflow</div>
      <h2 class="section-title">How it works</h2>
      <p class="section-sub" style="margin:0 auto;">A simple four-step process from vehicle arrival to departure.</p>
    </div>
    <div class="steps reveal">
      <div class="step">
        <div class="step-num">1</div>
        <div class="step-title">Vehicle Arrives</div>
        <div class="step-desc">Staff records the vehicle details — category, company, registration number, and owner contact.</div>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <div class="step-title">Slot Assigned</div>
        <div class="step-desc">A unique parking number is generated and the entry timestamp is saved automatically.</div>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <div class="step-title">Parked & Tracked</div>
        <div class="step-desc">The vehicle status is set to "In." Admins can view all parked vehicles on the dashboard.</div>
      </div>
      <div class="step">
        <div class="step-num">4</div>
        <div class="step-title">Vehicle Exits</div>
        <div class="step-desc">On exit, the charge is recorded, status updated to "Out," and the session is closed with a timestamp.</div>
      </div>
    </div>
  </div>
</section>

<!-- ROLES -->
<section id="roles">
  <div class="container">
    <div class="reveal">
      <div class="section-label">Access Roles</div>
      <h2 class="section-title">Built for two types of users</h2>
      <p class="section-sub">Each role has a dedicated login and dashboard tailored to their responsibilities.</p>
    </div>
    <div class="roles-grid reveal">
      <div class="role-card">
        <span class="role-badge admin">Admin</span>
        <h3 class="role-title">Administrator</h3>
        <p class="role-desc">Full system control — manage vehicles, categories, users, and view all records from a central dashboard.</p>
        <ul class="role-list">
          <li><i class="fas fa-check"></i> Add, edit, and delete vehicle records</li>
          <li><i class="fas fa-check"></i> Manage vehicle categories</li>
          <li><i class="fas fa-check"></i> View all registered users</li>
          <li><i class="fas fa-check"></i> Update parking charges and remarks</li>
          <li><i class="fas fa-check"></i> Mark vehicles as In / Out</li>
          <li><i class="fas fa-check"></i> Full system configuration access</li>
        </ul>
      </div>
      <div class="role-card">
        <span class="role-badge user">User</span>
        <h3 class="role-title">Registered User</h3>
        <p class="role-desc">Self-register or login with a mobile number. View and manage your own vehicle parking records.</p>
        <ul class="role-list">
          <li><i class="fas fa-check"></i> Register a new account</li>
          <li><i class="fas fa-check"></i> Login using mobile number</li>
          <li><i class="fas fa-check"></i> View assigned parking slot</li>
          <li><i class="fas fa-check"></i> Check vehicle status and charges</li>
          <li><i class="fas fa-check"></i> View parking history</li>
          <li><i class="fas fa-check"></i> Update personal profile</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- TECH STACK -->
<section id="tech">
  <div class="container" style="text-align:center;">
    <div class="reveal">
      <div class="section-label">Tech Stack</div>
      <h2 class="section-title">Built with proven technologies</h2>
      <p class="section-sub" style="margin:0 auto;">A solid, server-side stack that runs on any standard LAMP/WAMP/XAMPP environment.</p>
    </div>
    <div class="tech-grid reveal">
      <div class="tech-pill"><i class="fab fa-php"></i> PHP 7.4+</div>
      <div class="tech-pill"><i class="fas fa-database"></i> MySQL / MariaDB</div>
      <div class="tech-pill"><i class="fab fa-html5"></i> HTML5</div>
      <div class="tech-pill"><i class="fab fa-css3-alt"></i> CSS3</div>
      <div class="tech-pill"><i class="fab fa-js"></i> JavaScript</div>
      <div class="tech-pill"><i class="fas fa-server"></i> Apache (XAMPP/WAMP)</div>
      <div class="tech-pill"><i class="fas fa-tools"></i> phpMyAdmin</div>
    </div>
  </div>
</section>

<!-- DATABASE SCHEMA -->
<section id="database">
  <div class="container">
    <div class="reveal">
      <div class="section-label">Database</div>
      <h2 class="section-title">Database schema — <code style="font-size:0.8em; color:var(--accent);">vpmsdb</code></h2>
      <p class="section-sub">Four well-structured MySQL tables power the entire system.</p>
    </div>
    <div class="schema-grid reveal">
      <div class="table-card">
        <div class="table-head"><i class="fas fa-table"></i> tbladmin</div>
        <div class="table-fields">
          <div class="table-field"><span class="field-name">ID<span class="field-pk">PK</span></span><span class="field-type">int</span></div>
          <div class="table-field"><span class="field-name">AdminName</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">UserName</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">MobileNumber</span><span class="field-type">bigint</span></div>
          <div class="table-field"><span class="field-name">Email</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">Password</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">AdminRegdate</span><span class="field-type">timestamp</span></div>
        </div>
      </div>
      <div class="table-card">
        <div class="table-head"><i class="fas fa-table"></i> tblcategory</div>
        <div class="table-fields">
          <div class="table-field"><span class="field-name">ID<span class="field-pk">PK</span></span><span class="field-type">int</span></div>
          <div class="table-field"><span class="field-name">VehicleCat</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">CreationDate</span><span class="field-type">timestamp</span></div>
        </div>
      </div>
      <div class="table-card">
        <div class="table-head"><i class="fas fa-table"></i> tblregusers</div>
        <div class="table-fields">
          <div class="table-field"><span class="field-name">ID<span class="field-pk">PK</span></span><span class="field-type">int</span></div>
          <div class="table-field"><span class="field-name">FirstName</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">LastName</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">MobileNumber</span><span class="field-type">bigint</span></div>
          <div class="table-field"><span class="field-name">Email</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">Password</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">RegDate</span><span class="field-type">timestamp</span></div>
        </div>
      </div>
      <div class="table-card">
        <div class="table-head"><i class="fas fa-table"></i> tblvehicle</div>
        <div class="table-fields">
          <div class="table-field"><span class="field-name">ID<span class="field-pk">PK</span></span><span class="field-type">int</span></div>
          <div class="table-field"><span class="field-name">ParkingNumber</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">VehicleCategory</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">RegistrationNumber</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">OwnerName</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">InTime / OutTime</span><span class="field-type">timestamp</span></div>
          <div class="table-field"><span class="field-name">ParkingCharge</span><span class="field-type">varchar</span></div>
          <div class="table-field"><span class="field-name">Status</span><span class="field-type">varchar</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA / GET STARTED -->
<section class="cta-section" id="get-started">
  <div class="cta-glow"></div>
  <div class="section-label">Get Started</div>
  <h2>Ready to manage your parking?</h2>
  <p>Log in as Admin to manage the full system, or register as a User to track your vehicles.</p>
  <div class="cta-btns">
    <a href="admin/index.php" class="btn-primary"><i class="fas fa-user-shield"></i> Admin Login</a>
    <a href="users/login.php" class="btn-secondary"><i class="fas fa-user"></i> User Login</a>
  </div>

  
  <!-- <div class="creds-box">
    <div class="cred">
      <div class="cred-role">Admin credentials</div>
      <div class="cred-val">Username: <span>admin</span></div>
      <div class="cred-val">Password: <span>Test@123</span></div>
    </div>
    <div style="width:1px; background:var(--border);"></div>
    <div class="cred">
      <div class="cred-role">User credentials</div>
      <div class="cred-val">Mobile: <span>1234567890</span></div>
      <div class="cred-val">Password: <span>Test@123</span></div>
    </div>
  </div> -->
</section>

<!-- FOOTER -->
<footer>
  <p>Vehicle Parking Management System &nbsp;·&nbsp; Built with <strong>PHP</strong> &amp; <strong>MySQL</strong> &nbsp;·&nbsp; Run locally via XAMPP / WAMP</p>
</footer>

<script>
  document.getElementById('hamburger').addEventListener('click', () => {
    document.getElementById('navLinks').classList.toggle('open');
  });

  document.querySelectorAll('#navLinks a').forEach(a => {
    a.addEventListener('click', () => document.getElementById('navLinks').classList.remove('open'));
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 80);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</body>
</html>
