<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboardstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/dashboard.css" rel="stylesheet">

</head>

<body>

    <!--Navbar-->
    <div class="navbar">
        <div class="logo-details">

            <span class="logo_name">Cput</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-notepad'></i>
                    <span class="links_name">Job Alerts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar'></i>
                    <span class="links_name">Due Dates</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="/">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <!---Main Content-->
    <section class="main-section">
        <nav>
            <div class="navbar-button">
                <i class='bx bx-menu navbarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
        </nav>

        <!--Small box 1-->
        <div class="content">
            <div class="boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Notifications</div>
                        <div class="number">15</div>
                        <div class="indicator">
                            <span class="text">Unread Emails</span>
                        </div>
                    </div>
                </div>
                <!--Small box 2-->
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Alerts</div>
                        <div class="number">5</div>
                        <div class="indicator">
                            <span class="text">New Job Alerts</span>
                        </div>
                    </div>
                </div>
                <!--Small box 3-->
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Due Dates</div>
                        <div class="number">2</div>
                        <div class="indicator">
                            <span class="text">Submissions Due this week</span>
                        </div>
                    </div>
                </div>
                <!--Small box 4-->
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Alerts</div>
                        <div class="number">5</div>
                        <div class="indicator">
                            <span class="text">New Job Alerts</span>
                        </div>
                    </div>
                </div>
            </div>

            <!--Announcement box-->
            <div class="announcements">
                <div class="announcement box">
                    <div class="title">Announcements</div>
                    <ul class="details">
                        <li>Logbook August due</li>
                        <li>Meeting today</li>
                        <li>progress report due</li>
                        <li>client meeting today</li>
                    </ul>

                    <div class="button">
                        <a href="#">See All</a>
                    </div>
                </div>


                <!--Documents Box-->
                <div class="documents box">
                    <div class="title">Documents</div>
                    <ul class="details">
                        <li>
                            <p>Logbook August</p>
                        </li>
                        <li>
                            <p>Logbook October</p>
                        </li>
                        <li>
                            <p>Logbook November</p>
                        </li>
                        <li>
                            <p>Logbook September</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="dashboardscript.js"></script>

    <script>
        let navbar = document.querySelector(".navbar");
        let navbarBtn = document.querySelector(".navbarBtn");
        navbarBtn.onclick = function() {
            navbar.classList.toggle("active");
            if (navbar.classList.contains("active")) {
                navbarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                navbarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>