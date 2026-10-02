<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="dashboard-body">

<div class="dashboard-layout">

    <?php include 'navigation.php'; ?>

    <main class="dashboard-main">

        <?php include 'top-bar.php'; ?>

        <div class="dashboard-content">

            <div class="welcome-box">

                <div>

                    <span class="welcome-label">
                        ADMIN DASHBOARD
                    </span>

                    <h1>
                        Welcome back, Admin 👋
                    </h1>

                    <p>
                        Here's a quick overview of your website.
                    </p>

                </div>

                <button class="outline-btn">
                    View Website
                </button>

            </div>

            <section class="stats-grid">

                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-icon">
                            ◈
                        </span>

                        <span class="status positive">
                            +12%
                        </span>

                    </div>

                    <p>Total Services</p>

                    <h2>24</h2>

                    <small>
                        Updated this month
                    </small>

                </div>

                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-icon">
                            👥
                        </span>

                        <span class="status positive">
                            +8%
                        </span>

                    </div>

                    <p>Total Users</p>

                    <h2>1,248</h2>

                    <small>
                        Registered users
                    </small>

                </div>

                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-icon">
                            ✉
                        </span>

                        <span class="status">
                            18
                        </span>

                    </div>

                    <p>Messages</p>

                    <h2>86</h2>

                    <small>
                        18 unread messages
                    </small>

                </div>

                <div class="stat-card">

                    <div class="stat-top">

                        <span class="stat-icon">
                            👁
                        </span>

                        <span class="status positive">
                            +15%
                        </span>

                    </div>

                    <p>Page Views</p>

                    <h2>8.4K</h2>

                    <small>
                        This month
                    </small>

                </div>

            </section>

            <section class="chart-grid">

                <div class="dashboard-card">

                    <div class="card-header">

                        <div>
                            <h3>Monthly Visitors</h3>
                            <p>Website visitor statistics</p>
                        </div>

                        <button class="small-btn">
                            2026
                        </button>

                    </div>

                    <div class="modern-bar-chart">

                        <div class="chart-column">
                            <span style="height:45%"></span>
                            <small>Jan</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:65%"></span>
                            <small>Feb</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:52%"></span>
                            <small>Mar</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:78%"></span>
                            <small>Apr</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:62%"></span>
                            <small>May</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:88%"></span>
                            <small>Jun</small>
                        </div>

                        <div class="chart-column">
                            <span style="height:72%"></span>
                            <small>Jul</small>
                        </div>

                    </div>

                </div>

                <div class="dashboard-card">

                    <div class="card-header">

                        <div>

                            <h3>Website Activity</h3>

                            <p>
                                Performance overview
                            </p>

                        </div>

                        <span class="live-badge">
                            ● Live
                        </span>

                    </div>

                    <div class="modern-line-chart">

                        <svg
                            viewBox="0 0 500 220"
                            preserveAspectRatio="none"
                        >

                            <polyline
                                points="
                                0,170
                                60,140
                                120,155
                                180,95
                                240,120
                                300,70
                                360,90
                                420,45
                                500,65
                                "
                                fill="none"
                                stroke="currentColor"
                                stroke-width="5"
                            />

                        </svg>

                    </div>

                    <div class="chart-footer">

                        <div>
                            <strong>8,420</strong>
                            <span>Total Visits</span>
                        </div>

                        <div>
                            <strong>3,251</strong>
                            <span>Unique Users</span>
                        </div>

                        <div>
                            <strong>4m 26s</strong>
                            <span>Avg. Time</span>
                        </div>

                    </div>

                </div>

            </section>

            <section class="bottom-grid">

                <div class="dashboard-card">

                    <div class="card-header">

                        <div>
                            <h3>Recent Messages</h3>
                            <p>Latest customer messages</p>
                        </div>

                        <a href="#">
                            View All
                        </a>

                    </div>

                    <div class="message-item">

                        <div class="message-avatar">
                            J
                        </div>

                        <div class="message-info">

                            <strong>John Silva</strong>

                            <p>
                                I would like to know more about your services.
                            </p>

                        </div>

                        <small>10 min</small>

                    </div>

                    <div class="message-item">

                        <div class="message-avatar">
                            M
                        </div>

                        <div class="message-info">

                            <strong>Maria Fernando</strong>

                            <p>
                                Thank you for your quick response.
                            </p>

                        </div>

                        <small>1 hr</small>

                    </div>

                    <div class="message-item">

                        <div class="message-avatar">
                            K
                        </div>

                        <div class="message-info">

                            <strong>Kamal Perera</strong>

                            <p>
                                Can I get more information about pricing?
                            </p>

                        </div>

                        <small>3 hrs</small>

                    </div>

                </div>

                <div class="dashboard-card">

                    <div class="card-header">

                        <div>
                            <h3>Quick Actions</h3>
                            <p>Manage your website</p>
                        </div>

                    </div>

                    <div class="quick-actions">

                        <a href="#">
                            <span>＋</span>
                            Add Service
                        </a>

                        <a href="#">
                            <span>▣</span>
                            Manage Slider
                        </a>

                        <a href="#">
                            <span>✎</span>
                            Edit About Us
                        </a>

                        <a href="#">
                            <span>✉</span>
                            View Messages
                        </a>

                    </div>

                </div>

            </section>

        </div>

    </main>

</div>

</body>

</html>