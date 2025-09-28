<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Roadmap</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Lato', sans-serif;
      background: #F3F4F6; /* light gray background */
      color: #374151; /* dark gray text */
      margin: 0;
      padding: 0;
    }
    .roadmap-header {
      text-align: center;
      padding: 2rem 1rem;
    }
    .roadmap-header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: #166534; /* sage green dark */
      margin-bottom: 0.5rem;
    }
    .roadmap-header p {
      font-family: 'Lato', sans-serif;
      font-size: 1rem;
      color: #374151;
    }
    .roadmap-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 1rem;
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      margin: 2rem 0 1rem;
      color: #166534; /* sage green */
      border-bottom: 2px solid #9CA3AF; /* mid gray */
      padding-bottom: 0.5rem;
    }
    .roadmap-card {
      background: #fff;
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      position: relative;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .roadmap-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
    .roadmap-card h2 {
      font-family: 'Playfair Display', serif;
      margin-top: 0;
      font-size: 1.25rem;
      color: #374151;
    }
    .roadmap-card p, .meta {
      font-family: 'Lato', sans-serif;
      font-size: 0.95rem;
      color: #374151;
    }
    .status {
      position: absolute;
      top: 1rem;
      right: 1rem;
      padding: 0.3rem 0.7rem;
      border-radius: 12px;
      font-size: 0.85rem;
      font-weight: bold;
      font-family: 'Lato', sans-serif;
    }
    .in-progress .status { background: #22C55E; color: #fff; } /* sage green medium */
    .planned .status { background: #FACC15; color: #374151; }  /* golden yellow */
    .backlog .status { background: #9CA3AF; color: #fff; }     /* neutral gray */
    .done .status { background: #166534; color: #fff; }        /* sage green dark */
    .meta {
      margin-top: 1rem;
      font-size: 0.85rem;
      color: #9CA3AF;
    }
  </style>
</head>
<body>
  <header class="roadmap-header">
    <h1>Roadmap</h1>
    <p>High-level plan and status for upcoming features.</p>
  </header>

  <main class="roadmap-container">

    <div class="section-title">In Progress</div>
    <div class="roadmap-card in-progress">
      <h2>Services CRUD</h2>
      <p>Add, update, and deactivate service packages (pricing, description, tags).</p>
      <span class="status">In Progress</span>
      <div class="meta"><strong>Priority:</strong> High</div>
    </div>

    <div class="section-title">Planned</div>
    <div class="roadmap-card planned">
      <h2>Client service request (no account)</h2>
      <p>Allow anonymous users to request a service; capture contact details and preferences.</p>
      <span class="status">Planned</span>
      <div class="meta"><strong>Priority:</strong> High</div>
    </div>
    <div class="roadmap-card planned">
      <h2>Email verification</h2>
      <p>Send verification emails on signup and allow re-sending; gate sensitive actions until verified.</p>
      <span class="status">Planned</span>
      <div class="meta"><strong>Priority:</strong> Medium</div>
    </div>

    <div class="section-title">Backlog</div>
    <div class="roadmap-card backlog">
      <h2>Obituary & Memorial pages</h2>
      <p>Clients with accounts can create memorial pages, upload images, and moderate guestbook entries.</p>
      <span class="status">Backlog</span>
      <div class="meta"><strong>Priority:</strong> Medium</div>
    </div>

    <div class="section-title">Completed</div>
    <div class="roadmap-card done">
      <h2>Employee & Admin accounts (RBAC)</h2>
      <p>Create employee and admin accounts, role assignment, and admin ability to deactivate any account.</p>
      <span class="status">Done</span>
      <div class="meta"><strong>Priority:</strong> High</div>
    </div>

  </main>
</body>
</html>
