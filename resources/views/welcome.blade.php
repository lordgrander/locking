 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Component Showcase</title>
  <style>
    :root {
      --bg: #0f1117;
      --panel: #171b24;
      --panel-2: #1d2330;
      --text: #e8ecf3;
      --muted: #9aa4b2;
      --primary: #7c5cff;
      --border: #2a3142;
      --success: #17c964;
      --danger: #f31260;
      --warning: #f5a524;
      --info: #3b82f6;
      --secondary: #6b7280;
      --radius: 14px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      font-family: Inter, Arial, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.5;
    }
    a { color: inherit; text-decoration: none; }
    .container { width: min(1200px, calc(100% - 32px)); margin: 0 auto; }
    .navbar {
      position: sticky; top: 0; z-index: 1000;
      background: rgba(15,17,23,0.92);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--border);
    }
    .navbar-inner {
      display: flex; align-items: center; justify-content: space-between;
      min-height: 64px; gap: 16px;
    }
    .brand { font-weight: 700; color: var(--primary); }
    .nav-links { display: flex; gap: 14px; flex-wrap: wrap; }
    .nav-links a { color: var(--muted); }
    .nav-links a:hover { color: var(--text); }
    .hero { padding: 40px 0 20px; }
    h1, h2, h3, h4, h5, h6 { margin: 0 0 12px; }
    h1 { font-size: 2.2rem; color: var(--primary); }
    h2 { font-size: 1.5rem; color: var(--primary); }
    .lead { color: var(--muted); margin-bottom: 28px; }
    .section { margin-bottom: 40px; }
    .section hr, .hr {
      border: 0; height: 1px; background: var(--border); margin: 12px 0 18px;
    }
    .card {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
    }
    .card-body, .card-header, .card-footer { padding: 16px; }
    .card-header, .card-footer { background: var(--panel-2); color: var(--muted); }
    .quick-nav { padding: 16px; display: flex; flex-wrap: wrap; gap: 8px; }
    .badge {
      display: inline-flex; align-items: center; gap: 6px;
      padding: 6px 10px; border-radius: 999px; font-size: 12px;
      border: 1px solid var(--border); background: var(--panel-2);
    }
    .badge.primary { background: rgba(124,92,255,.15); color: #c2b5ff; }
    .badge.success { background: rgba(23,201,100,.12); color: #85e6b1; }
    .badge.warning { background: rgba(245,165,36,.12); color: #ffd18c; }
    .badge.danger { background: rgba(243,18,96,.12); color: #ff8ab8; }
    .badge.info { background: rgba(59,130,246,.12); color: #97c0ff; }
    .grid { display: grid; gap: 16px; }
    .grid-2 { grid-template-columns: repeat(2, minmax(0,1fr)); }
    .grid-3 { grid-template-columns: repeat(3, minmax(0,1fr)); }
    .grid-4 { grid-template-columns: repeat(4, minmax(0,1fr)); }
    .row { display: grid; grid-template-columns: repeat(12, 1fr); gap: 16px; }
    .col-12 { grid-column: span 12; }
    .col-8 { grid-column: span 8; }
    .col-6 { grid-column: span 6; }
    .col-4 { grid-column: span 4; }
    .col-3 { grid-column: span 3; }
    .box {
      background: var(--panel-2);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 14px;
      text-align: center;
      color: var(--muted);
    }
    table { width: 100%; border-collapse: collapse; }
    th, td { border-bottom: 1px solid var(--border); padding: 12px; text-align: left; }
    thead th { color: var(--muted); font-weight: 600; }
    .table-wrap { overflow-x: auto; }
    .muted { color: var(--muted); }
    .code {
      display: inline-block; padding: 2px 8px; border-radius: 8px;
      background: #101521; border: 1px solid var(--border); font-family: monospace;
    }
    pre {
      margin: 0; padding: 14px; background: #101521; border: 1px solid var(--border);
      border-radius: 12px; overflow: auto;
    }
    .blockquote {
      border-left: 3px solid var(--primary); padding: 12px 16px; background: rgba(124,92,255,.08);
      border-radius: 0 12px 12px 0;
    }
    .form-label { display: block; margin-bottom: 8px; color: var(--muted); }
    .form-control, .form-select, .input-addon, .btn {
      min-height: 42px; border-radius: 12px; border: 1px solid var(--border);
      background: var(--panel-2); color: var(--text);
    }
    .form-control, .form-select { width: 100%; padding: 10px 12px; }
    textarea.form-control { min-height: 110px; resize: vertical; }
    .btn {
      padding: 10px 14px; cursor: pointer; display: inline-flex; align-items: center; justify-content: center;
      gap: 8px; transition: .2s ease;
    }
    .btn:hover { transform: translateY(-1px); }
    .btn-primary { background: var(--primary); border-color: var(--primary); color: white; }
    .btn-secondary { background: #2b3344; }
    .btn-success { background: #11492b; border-color: #1d6d42; }
    .btn-danger { background: #52162d; border-color: #8d244d; }
    .btn-warning { background: #5e4314; border-color: #8d651c; }
    .btn-info { background: #183b72; border-color: #2555a5; }
    .btn-outline { background: transparent; }
    .btn-group { display: inline-flex; gap: 8px; flex-wrap: wrap; }
    .input-group { display: flex; }
    .input-group .input-addon {
      padding: 10px 12px; display: flex; align-items: center; white-space: nowrap;
    }
    .input-group .form-control { border-radius: 0; }
    .input-group > *:first-child { border-top-right-radius: 0; border-bottom-right-radius: 0; }
    .input-group > *:last-child { border-top-left-radius: 0; border-bottom-left-radius: 0; }
    .checkline, .switchline { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .floating { position: relative; }
    .floating label {
      position: absolute; left: 12px; top: 50%; transform: translateY(-50%);
      color: var(--muted); pointer-events: none; transition: .18s ease; background: var(--panel-2); padding: 0 6px;
    }
    .floating input:focus + label,
    .floating input:not(:placeholder-shown) + label {
      top: 0; transform: translateY(-50%); font-size: 12px;
    }
    .valid-feedback { color: #85e6b1; font-size: 14px; margin-top: 8px; }
    .invalid-feedback { color: #ff8ab8; font-size: 14px; margin-top: 8px; }
    .accordion-item { border: 1px solid var(--border); border-radius: 12px; overflow: hidden; margin-bottom: 10px; }
    .accordion-btn {
      width: 100%; text-align: left; background: var(--panel-2); color: var(--text); border: 0; padding: 14px; cursor: pointer;
    }
    .accordion-body { display: none; padding: 14px; background: var(--panel); color: var(--muted); }
    .alert { padding: 14px 16px; border-radius: 12px; border: 1px solid var(--border); }
    .alert.primary { background: rgba(124,92,255,.14); }
    .alert.success { background: rgba(23,201,100,.12); }
    .alert.danger { background: rgba(243,18,96,.12); }
    .alert.warning { background: rgba(245,165,36,.12); }
    .alert.info { background: rgba(59,130,246,.12); }
    .breadcrumb { display: flex; gap: 10px; list-style: none; padding: 0; margin: 0; color: var(--muted); }
    .breadcrumb li:not(:last-child)::after { content: '/'; margin-left: 10px; color: #667085; }
    .carousel {
      position: relative; overflow: hidden; height: 200px; border-radius: 14px; border: 1px solid var(--border); background: var(--panel);
    }
    .carousel-track { display: flex; height: 100%; transition: transform .25s ease; }
    .carousel-slide {
      min-width: 100%; display: flex; align-items: center; justify-content: center;
      background: var(--panel-2); color: var(--muted); font-size: 28px;
    }
    .carousel-control {
      position: absolute; top: 50%; transform: translateY(-50%);
      width: 40px; height: 40px; border-radius: 50%; border: 1px solid var(--border);
      background: rgba(15,17,23,.7); color: white; cursor: pointer;
    }
    .carousel-control.prev { left: 10px; }
    .carousel-control.next { right: 10px; }
    .carousel-indicators {
      position: absolute; left: 50%; bottom: 12px; transform: translateX(-50%);
      display: flex; gap: 8px;
    }
    .carousel-dot {
      width: 10px; height: 10px; border-radius: 999px; border: 0; background: #546072; cursor: pointer;
    }
    .carousel-dot.active { background: var(--primary); }
    .dropdown { position: relative; display: inline-block; }
    .dropdown-menu {
      display: none; position: absolute; top: calc(100% + 8px); left: 0; min-width: 200px;
      background: var(--panel); border: 1px solid var(--border); border-radius: 12px; padding: 8px; z-index: 20;
    }
    .dropdown-menu button {
      width: 100%; background: transparent; border: 0; color: var(--text); text-align: left; padding: 10px; border-radius: 8px; cursor: pointer;
    }
    .dropdown-menu button:hover { background: var(--panel-2); }
    .list-group { border: 1px solid var(--border); border-radius: 12px; overflow: hidden; }
    .list-item { padding: 12px 14px; border-bottom: 1px solid var(--border); background: var(--panel); }
    .list-item:last-child { border-bottom: 0; }
    .list-item.active { background: rgba(124,92,255,.15); }
    .modal-backdrop, .offcanvas-backdrop {
      display: none; position: fixed; inset: 0; background: rgba(0,0,0,.55); z-index: 1000;
    }
    .modal {
      display: none; position: fixed; inset: 50% auto auto 50%; transform: translate(-50%, -50%);
      width: min(560px, calc(100% - 32px)); background: var(--panel); border: 1px solid var(--border);
      border-radius: 16px; z-index: 1001; overflow: hidden;
    }
    .modal-header, .modal-body, .modal-footer,
    .offcanvas-header, .offcanvas-body { padding: 16px; }
    .modal-header, .modal-footer, .offcanvas-header { border-bottom: 1px solid var(--border); }
    .modal-footer { border-top: 1px solid var(--border); border-bottom: 0; display: flex; justify-content: flex-end; gap: 10px; }
    .close-btn {
      width: 36px; height: 36px; border-radius: 10px; border: 1px solid var(--border);
      background: var(--panel-2); color: var(--text); cursor: pointer;
    }
    .tabs, .pills { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px; }
    .tab-btn, .pill-btn {
      padding: 10px 14px; border: 1px solid var(--border); background: var(--panel-2); color: var(--muted);
      border-radius: 12px; cursor: pointer;
    }
    .tab-btn.active, .pill-btn.active { background: rgba(124,92,255,.15); color: var(--text); }
    .tab-content { padding: 14px; border: 1px solid var(--border); border-radius: 12px; background: var(--panel); color: var(--muted); }
    .offcanvas {
      position: fixed; top: 0; left: -320px; width: 320px; max-width: calc(100% - 32px); height: 100vh;
      background: var(--panel); border-right: 1px solid var(--border); z-index: 1001; transition: left .2s ease;
    }
    .offcanvas.show { left: 0; }
    .pagination { display: flex; gap: 8px; list-style: none; padding: 0; margin: 0; }
    .page-item span {
      display: inline-flex; min-width: 38px; min-height: 38px; align-items: center; justify-content: center;
      border-radius: 10px; border: 1px solid var(--border); background: var(--panel); color: var(--text);
    }
    .page-item.active span { background: rgba(124,92,255,.15); }
    .placeholder { display: block; background: linear-gradient(90deg, #222938, #2d364a, #222938); background-size: 200% 100%; animation: shimmer 2.4s infinite; border-radius: 10px; }
    @keyframes shimmer { 0% { background-position: 200% 0; } 100% { background-position: -200% 0; } }
    .popover, .toast {
      max-width: 320px; border: 1px solid var(--border); background: var(--panel); border-radius: 14px; overflow: hidden;
    }
    .popover-header, .toast-header { padding: 12px 14px; background: var(--panel-2); }
    .popover-body, .toast-body { padding: 14px; color: var(--muted); }
    .progress { width: 100%; height: 12px; background: #202736; border-radius: 999px; overflow: hidden; border: 1px solid var(--border); }
    .progress.sm { height: 8px; }
    .progress.lg { height: 16px; }
    .progress-bar { height: 100%; background: var(--primary); }
    .scrollspy a { display: block; padding: 10px 12px; border-left: 2px solid transparent; color: var(--muted); }
    .scrollspy a.active { color: var(--text); border-left-color: var(--primary); background: rgba(124,92,255,.08); }
    .spinner, .spinner-grow {
      width: 32px; height: 32px; border-radius: 50%; display: inline-block;
    }
    .spinner { border: 3px solid #44506a; border-top-color: var(--primary); animation: spin .8s linear infinite; }
    .spinner.sm { width: 18px; height: 18px; }
    .spinner-grow { background: var(--primary); animation: grow 1s ease-in-out infinite; }
    .spinner-grow.sm { width: 18px; height: 18px; }
    @keyframes spin { to { transform: rotate(360deg); } }
    @keyframes grow { 0%,100% { transform: scale(.5); opacity: .5; } 50% { transform: scale(1); opacity: 1; } }
    .tooltip-wrap { position: relative; display: inline-block; }
    .tooltip-text {
      opacity: 0; pointer-events: none; position: absolute; left: 50%; bottom: calc(100% + 8px); transform: translateX(-50%);
      background: var(--panel-2); border: 1px solid var(--border); color: var(--text); padding: 8px 10px; border-radius: 10px; white-space: nowrap; transition: .15s ease;
    }
    .tooltip-wrap:hover .tooltip-text { opacity: 1; }
    .footer { text-align: center; color: var(--muted); padding: 28px 0 42px; }

    @media (max-width: 900px) {
      .grid-4, .grid-3, .grid-2 { grid-template-columns: 1fr; }
      .col-8, .col-6, .col-4, .col-3 { grid-column: span 12; }
      .nav-links { display: none; }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="container navbar-inner">
      <div class="brand">Custom Framework</div>
      <div class="nav-links">
        <a href="#layout">Layout</a>
        <a href="#typography">Content</a>
        <a href="#forms">Forms</a>
        <a href="#accordion">Components</a>
      </div>
    </div>
  </nav>

  <main class="container">
    <section class="hero">
      <h1>Component Showcase</h1>
      <p class="lead">All CSS classes prefixed with <span class="code">.custom-</span></p>

      <div class="card">
        <div class="quick-nav" id="quickNav"></div>
      </div>
    </section>

    <section id="layout" class="section">
      <h2>Layout Overview</h2>
      <div class="hr"></div>
      <p class="muted">Flexbox grid, CSS Grid, containers, breakpoints, gutters, z-index utilities.</p>
    </section>

    <section id="breakpoints" class="section">
      <h2>Breakpoints</h2>
      <div class="hr"></div>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Breakpoint</th><th>Class infix</th><th>Dimensions</th></tr></thead>
          <tbody>
            <tr><td>X-Small</td><td><span class="code">None</span></td><td>&lt;576px</td></tr>
            <tr><td>Small</td><td><span class="code">sm</span></td><td>≥576px</td></tr>
            <tr><td>Medium</td><td><span class="code">md</span></td><td>≥768px</td></tr>
            <tr><td>Large</td><td><span class="code">lg</span></td><td>≥992px</td></tr>
            <tr><td>X-Large</td><td><span class="code">xl</span></td><td>≥1200px</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <section id="grid" class="section">
      <h2>Grid</h2>
      <div class="hr"></div>
      <div class="grid grid-4">
        <div class="box">.custom-col</div>
        <div class="box">.custom-col</div>
        <div class="box">.custom-col</div>
        <div class="box">.custom-col</div>
      </div>
    </section>

    <section id="typography" class="section">
      <h2>Typography</h2>
      <div class="hr"></div>
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p class="lead">Lead paragraph text.</p>
      <p>Regular body text with <mark>highlighted</mark> and <strong>bold</strong> and <em>italic</em> text.</p>
      <div class="blockquote">
        <p>"Design is not just what it looks like. Design is how it works."</p>
        <small class="muted">Steve Jobs</small>
      </div>
      <p style="margin-top:16px;">Inline <span class="code">code</span> example.</p>
      <pre>const greeting = "Hello, World!";
console.log(greeting);</pre>
    </section>

    <section id="forms" class="section">
      <h2>Forms Overview</h2>
      <div class="hr"></div>
      <p class="muted">Complete form system with controls, selects, checks, radios, ranges, input groups, floating labels, and validation.</p>
    </section>

    <section id="form-control" class="section">
      <h2>Form Controls</h2>
      <div class="hr"></div>
      <div class="row">
        <div class="col-6">
          <label class="form-label">Default Input</label>
          <input class="form-control" type="text" placeholder="Enter text..." />
        </div>
        <div class="col-6">
          <label class="form-label">Disabled Input</label>
          <input class="form-control" type="text" placeholder="Disabled" disabled />
        </div>
        <div class="col-12">
          <label class="form-label">Textarea</label>
          <textarea class="form-control" placeholder="Write something..."></textarea>
        </div>
      </div>
    </section>

    <section id="select" class="section">
      <h2>Select</h2>
      <div class="hr"></div>
      <div class="row">
        <div class="col-4">
          <label class="form-label">Default</label>
          <select class="form-select"><option>Option 1</option><option>Option 2</option><option>Option 3</option></select>
        </div>
        <div class="col-4">
          <label class="form-label">Small</label>
          <select class="form-select"><option>Option 1</option><option>Option 2</option></select>
        </div>
        <div class="col-4">
          <label class="form-label">Large</label>
          <select class="form-select"><option>Option 1</option><option>Option 2</option></select>
        </div>
      </div>
    </section>

    <section id="checks-radios" class="section">
      <h2>Checks & Radios</h2>
      <div class="hr"></div>
      <div class="grid grid-3">
        <div class="card"><div class="card-body">
          <h4>Checkboxes</h4>
          <label class="checkline"><input type="checkbox" checked> <span>Checked</span></label>
          <label class="checkline"><input type="checkbox"> <span>Unchecked</span></label>
          <label class="checkline"><input type="checkbox" disabled> <span>Disabled</span></label>
        </div></div>
        <div class="card"><div class="card-body">
          <h4>Radios</h4>
          <label class="checkline"><input type="radio" name="demoRadio" checked> <span>Option 1</span></label>
          <label class="checkline"><input type="radio" name="demoRadio"> <span>Option 2</span></label>
          <label class="checkline"><input type="radio" name="demoRadio"> <span>Option 3</span></label>
        </div></div>
        <div class="card"><div class="card-body">
          <h4>Switches</h4>
          <label class="switchline"><input type="checkbox" checked> <span>On</span></label>
          <label class="switchline"><input type="checkbox"> <span>Default Off</span></label>
        </div></div>
      </div>
    </section>

    <section id="range" class="section">
      <h2>Range</h2>
      <div class="hr"></div>
      <label class="form-label">Range: <span id="rangeValue">50</span>%</label>
      <input id="rangeInput" type="range" class="form-control" min="0" max="100" value="50" />
    </section>

    <section id="input-group" class="section">
      <h2>Input Group</h2>
      <div class="hr"></div>
      <div class="grid">
        <div class="input-group">
          <span class="input-addon">@</span>
          <input class="form-control" type="text" placeholder="Username" />
        </div>
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search..." />
          <button class="btn btn-primary">Go</button>
        </div>
        <div class="input-group">
          <span class="input-addon">$</span>
          <input class="form-control" type="text" placeholder="0.00" />
          <span class="input-addon">.00</span>
        </div>
      </div>
    </section>

    <section id="floating-labels" class="section">
      <h2>Floating Labels</h2>
      <div class="hr"></div>
      <div class="grid grid-2">
        <div class="floating">
          <input id="floatEmail" class="form-control" type="text" placeholder=" " />
          <label for="floatEmail">Email address</label>
        </div>
        <div class="floating">
          <input id="floatPass" class="form-control" type="password" placeholder=" " />
          <label for="floatPass">Password</label>
        </div>
      </div>
    </section>

    <section id="validation" class="section">
      <h2>Validation</h2>
      <div class="hr"></div>
      <div class="grid grid-2">
        <div>
          <label class="form-label">Valid Input</label>
          <input class="form-control" value="Correct" />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div>
          <label class="form-label">Invalid Input</label>
          <input class="form-control" value="" />
          <div class="invalid-feedback">This field is required.</div>
        </div>
      </div>
    </section>

    <section id="accordion" class="section">
      <h2>Accordion</h2>
      <div class="hr"></div>
      <div>
        <div class="accordion-item">
          <button class="accordion-btn">First item</button>
          <div class="accordion-body" style="display:block;">Content for first item. This is the body of the accordion item.</div>
        </div>
        <div class="accordion-item">
          <button class="accordion-btn">Second item</button>
          <div class="accordion-body">Content for second item. This is the body of the accordion item.</div>
        </div>
        <div class="accordion-item">
          <button class="accordion-btn">Third item</button>
          <div class="accordion-body">Content for third item. This is the body of the accordion item.</div>
        </div>
      </div>
    </section>

    <section id="alerts" class="section">
      <h2>Alerts</h2>
      <div class="hr"></div>
      <div class="grid">
        <div class="alert primary">ℹ️ This is a primary alert.</div>
        <div class="alert success">✅ Success! Operation completed.</div>
        <div class="alert danger">❌ Error! Something went wrong.</div>
        <div class="alert warning">⚠️ Warning! Check your input.</div>
        <div class="alert info">💡 Info! Here's some information.</div>
      </div>
    </section>

    <section id="badge" class="section">
      <h2>Badges</h2>
      <div class="hr"></div>
      <div class="btn-group">
        <span class="badge primary">Primary</span>
        <span class="badge">Secondary</span>
        <span class="badge success">Success</span>
        <span class="badge danger">Danger</span>
        <span class="badge warning">Warning</span>
        <span class="badge info">Info</span>
      </div>
    </section>

    <section id="breadcrumb" class="section">
      <h2>Breadcrumb</h2>
      <div class="hr"></div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li>Data</li>
      </ol>
    </section>

    <section id="buttons" class="section">
      <h2>Buttons</h2>
      <div class="hr"></div>
      <div class="btn-group">
        <button class="btn btn-primary">Primary</button>
        <button class="btn btn-secondary">Secondary</button>
        <button class="btn btn-success">Success</button>
        <button class="btn btn-danger">Danger</button>
        <button class="btn btn-warning">Warning</button>
        <button class="btn btn-info">Info</button>
      </div>
    </section>

    <section id="card" class="section">
      <h2>Cards</h2>
      <div class="hr"></div>
      <div class="grid grid-3">
        <div class="card"><div class="card-body"><h5>Simple Card</h5><p class="muted">Basic card with body content.</p></div></div>
        <div class="card"><div class="card-header">Featured</div><div class="card-body"><h5>Card with Header</h5><p class="muted">With header and footer.</p></div><div class="card-footer">Updated 3 mins ago</div></div>
        <div class="card"><div class="card-body"><div class="box">Image Area</div><h5 style="margin-top:12px;">Image Card</h5><p class="muted">Content below the image.</p></div></div>
      </div>
    </section>

    <section id="carousel" class="section">
      <h2>Carousel</h2>
      <div class="hr"></div>
      <div class="carousel">
        <div class="carousel-track" id="carouselTrack">
          <div class="carousel-slide">Slide 1</div>
          <div class="carousel-slide">Slide 2</div>
          <div class="carousel-slide">Slide 3</div>
        </div>
        <button class="carousel-control prev" id="prevSlide">‹</button>
        <button class="carousel-control next" id="nextSlide">›</button>
        <div class="carousel-indicators">
          <button class="carousel-dot active" data-slide="0"></button>
          <button class="carousel-dot" data-slide="1"></button>
          <button class="carousel-dot" data-slide="2"></button>
        </div>
      </div>
    </section>

    <section id="dropdowns" class="section">
      <h2>Dropdowns</h2>
      <div class="hr"></div>
      <div class="dropdown">
        <button class="btn btn-secondary" id="dropdownBtn">Dropdown ▾</button>
        <div class="dropdown-menu" id="dropdownMenu">
          <button>Action</button>
          <button>Another action</button>
          <button>Separated link</button>
        </div>
      </div>
    </section>

    <section id="list-group" class="section">
      <h2>List Group</h2>
      <div class="hr"></div>
      <div class="grid grid-2">
        <div class="list-group">
          <div class="list-item active">Active item</div>
          <div class="list-item">Second item</div>
          <div class="list-item">Third item <span class="badge primary">3</span></div>
          <div class="list-item">Fourth item</div>
        </div>
        <div class="list-group">
          <div class="list-item">Clickable 1</div>
          <div class="list-item">Clickable 2</div>
          <div class="list-item">Clickable 3</div>
        </div>
      </div>
    </section>

    <section id="modal" class="section">
      <h2>Modal</h2>
      <div class="hr"></div>
      <button class="btn btn-primary" id="openModal">Open Modal</button>
    </section>

    <section id="navs-tabs" class="section">
      <h2>Navs & Tabs</h2>
      <div class="hr"></div>
      <h4>Tabs</h4>
      <div class="tabs">
        <button class="tab-btn active" data-tab="tab1">Tab 1</button>
        <button class="tab-btn" data-tab="tab2">Tab 2</button>
        <button class="tab-btn" data-tab="tab3">Tab 3</button>
      </div>
      <div class="tab-content" id="tabContent">Content for tab1.</div>
      <h4 style="margin-top:18px;">Pills</h4>
      <div class="pills">
        <button class="pill-btn active">Pill 1</button>
        <button class="pill-btn">Pill 2</button>
        <button class="pill-btn">Pill 3</button>
      </div>
    </section>

    <section id="offcanvas" class="section">
      <h2>Offcanvas</h2>
      <div class="hr"></div>
      <button class="btn btn-primary" id="openOffcanvas">Open Offcanvas</button>
    </section>

    <section id="pagination" class="section">
      <h2>Pagination</h2>
      <div class="hr"></div>
      <ul class="pagination">
        <li class="page-item"><span>‹</span></li>
        <li class="page-item active"><span>1</span></li>
        <li class="page-item"><span>2</span></li>
        <li class="page-item"><span>3</span></li>
        <li class="page-item"><span>›</span></li>
      </ul>
    </section>

    <section id="placeholders" class="section">
      <h2>Placeholders</h2>
      <div class="hr"></div>
      <div class="grid" style="max-width:400px;">
        <span class="placeholder" style="height:306px;width:75%;"></span>
        <span class="placeholder" style="height:12px;width:50%;"></span>
        <span class="placeholder" style="height:20px;width:100%;"></span>
        <span class="placeholder" style="height:10px;width:25%;"></span>
      </div>
    </section>

    <section id="popovers" class="section">
      <h2>Popovers</h2>
      <div class="hr"></div>
      <div class="popover">
        <div class="popover-header">Popover Title</div>
        <div class="popover-body">And here's some content inside the popover.</div>
      </div>
    </section>

    <section id="progress" class="section">
      <h2>Progress</h2>
      <div class="hr"></div>
      <div class="grid">
        <div><div class="muted">25%</div><div class="progress"><div class="progress-bar" style="width:25%"></div></div></div>
        <div><div class="muted">50%</div><div class="progress"><div class="progress-bar" style="width:50%"></div></div></div>
        <div><div class="muted">75%</div><div class="progress"><div class="progress-bar" style="width:75%"></div></div></div>
        <div><div class="muted">Small</div><div class="progress sm"><div class="progress-bar" style="width:60%"></div></div></div>
        <div><div class="muted">Large</div><div class="progress lg"><div class="progress-bar" style="width:40%"></div></div></div>
      </div>
    </section>

    <section id="scrollspy" class="section">
      <h2>Scrollspy</h2>
      <div class="hr"></div>
      <div class="scrollspy" style="max-width:250px;">
        <a href="#" class="active">Introduction</a>
        <a href="#">Getting Started</a>
        <a href="#">Components</a>
        <a href="#">Utilities</a>
        <a href="#">API Reference</a>
      </div>
    </section>

    <section id="spinners" class="section">
      <h2>Spinners</h2>
      <div class="hr"></div>
      <div class="btn-group">
        <span class="spinner"></span>
        <span class="spinner sm"></span>
        <span class="spinner-grow"></span>
        <span class="spinner-grow sm"></span>
        <button class="btn btn-primary" disabled><span class="spinner sm"></span> Loading...</button>
      </div>
    </section>

    <section id="toasts" class="section">
      <h2>Toasts</h2>
      <div class="hr"></div>
      <div class="toast">
        <div class="toast-header">Notification <span class="muted" style="float:right;">just now</span></div>
        <div class="toast-body">This is a toast notification message.</div>
      </div>
    </section>

    <section id="tooltips" class="section">
      <h2>Tooltips</h2>
      <div class="hr"></div>
      <div class="tooltip-wrap">
        <button class="btn btn-secondary">Hover me</button>
        <span class="tooltip-text">Tooltip text!</span>
      </div>
    </section>

    <div class="hr"></div>
    <p class="footer">Custom Framework — All classes prefixed with <span class="code">.custom-</span></p>
  </main>

  <div class="modal-backdrop" id="modalBackdrop"></div>
  <div class="modal" id="modalBox">
    <div class="modal-header" style="display:flex;justify-content:space-between;align-items:center;">
      <strong>Modal Title</strong>
      <button class="close-btn" id="closeModal">×</button>
    </div>
    <div class="modal-body"><p class="muted">This is the modal body content. You can put any content here.</p></div>
    <div class="modal-footer">
      <button class="btn btn-secondary" id="modalCloseBtn">Close</button>
      <button class="btn btn-primary" id="modalSaveBtn">Save</button>
    </div>
  </div>

  <div class="offcanvas-backdrop" id="offcanvasBackdrop"></div>
  <aside class="offcanvas" id="offcanvasBox">
    <div class="offcanvas-header" style="display:flex;justify-content:space-between;align-items:center;">
      <strong>Offcanvas</strong>
      <button class="close-btn" id="closeOffcanvas">×</button>
    </div>
    <div class="offcanvas-body"><p class="muted">Offcanvas body content goes here.</p></div>
  </aside>

  <script>
    const navSections = [
      "layout", "breakpoints", "grid", "typography", "forms", "form-control", "select", "checks-radios",
      "range", "input-group", "floating-labels", "validation", "accordion", "alerts", "badge", "breadcrumb",
      "buttons", "card", "carousel", "dropdowns", "list-group", "modal", "navs-tabs", "offcanvas", "pagination",
      "placeholders", "popovers", "progress", "scrollspy", "spinners", "toasts", "tooltips"
    ];

    const quickNav = document.getElementById('quickNav');
    quickNav.innerHTML = navSections.map(s => `<a class="badge" href="#${s}">${s}</a>`).join('');

    const rangeInput = document.getElementById('rangeInput');
    const rangeValue = document.getElementById('rangeValue');
    rangeInput.addEventListener('input', () => rangeValue.textContent = rangeInput.value);

    document.querySelectorAll('.accordion-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const body = btn.nextElementSibling;
        const isOpen = body.style.display === 'block';
        document.querySelectorAll('.accordion-body').forEach(el => el.style.display = 'none');
        body.style.display = isOpen ? 'none' : 'block';
      });
    });

    let currentSlide = 0;
    const totalSlides = 3;
    const track = document.getElementById('carouselTrack');
    const dots = document.querySelectorAll('.carousel-dot');
    function renderSlide() {
      track.style.transform = `translateX(-${currentSlide * 100}%)`;
      dots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
    }
    document.getElementById('prevSlide').addEventListener('click', () => {
      currentSlide = Math.max(0, currentSlide - 1); renderSlide();
    });
    document.getElementById('nextSlide').addEventListener('click', () => {
      currentSlide = Math.min(totalSlides - 1, currentSlide + 1); renderSlide();
    });
    dots.forEach(dot => dot.addEventListener('click', () => {
      currentSlide = Number(dot.dataset.slide); renderSlide();
    }));

    const dropdownBtn = document.getElementById('dropdownBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    dropdownBtn.addEventListener('click', () => {
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });
    document.addEventListener('click', e => {
      if (!dropdownBtn.parentElement.contains(e.target)) dropdownMenu.style.display = 'none';
    });

    const modalBackdrop = document.getElementById('modalBackdrop');
    const modalBox = document.getElementById('modalBox');
    function closeModal() { modalBackdrop.style.display = 'none'; modalBox.style.display = 'none'; }
    function openModal() { modalBackdrop.style.display = 'block'; modalBox.style.display = 'block'; }
    document.getElementById('openModal').addEventListener('click', openModal);
    document.getElementById('closeModal').addEventListener('click', closeModal);
    document.getElementById('modalCloseBtn').addEventListener('click', closeModal);
    document.getElementById('modalSaveBtn').addEventListener('click', closeModal);
    modalBackdrop.addEventListener('click', closeModal);

    const offcanvasBackdrop = document.getElementById('offcanvasBackdrop');
    const offcanvasBox = document.getElementById('offcanvasBox');
    function closeOffcanvas() { offcanvasBackdrop.style.display = 'none'; offcanvasBox.classList.remove('show'); }
    function openOffcanvas() { offcanvasBackdrop.style.display = 'block'; offcanvasBox.classList.add('show'); }
    document.getElementById('openOffcanvas').addEventListener('click', openOffcanvas);
    document.getElementById('closeOffcanvas').addEventListener('click', closeOffcanvas);
    offcanvasBackdrop.addEventListener('click', closeOffcanvas);

    const tabContent = document.getElementById('tabContent');
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.tab-btn').forEach(x => x.classList.remove('active'));
        btn.classList.add('active');
        tabContent.textContent = `Content for ${btn.dataset.tab}.`;
      });
    });

    document.querySelectorAll('.pill-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.pill-btn').forEach(x => x.classList.remove('active'));
        btn.classList.add('active');
      });
    });
  </script>
</body>
</html>
