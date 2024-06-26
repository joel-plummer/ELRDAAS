<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notificationstyles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>ELR Towers Hall Domestic Affairs</title>
</head>
<body>
    <div class="container">
        <!--Sidebar Section-->
        <?php include 'adm_sidebar.php'; ?>
        <!--End of Sidebar Section-->
    
    <main>
        <div class="Notification-Section">
            <h1>Admin Notification Section</h1>
            <button onclick="showNotification()"><h2>Click here to Show Notifications</h2></button>
            
            <div id="notification" class="hidden">
                <ul>
                    <li>There are no requests left to be assigned </li>
                    <li>There are currently 2 unassigned requests</li>
                </ul>
                <span onclick="hideNotification()">X Click the 'X' to close Notifications</span>
            </div>
        </div>
    </main>
        <!--Right Section-->
<?php include 'adm_right_section.php';?>
      <!--End of Right Section-->
    </div>
    </div>
    

    <script src="notifications.js"></script>
    <script>
        const darkModeToggle = document.querySelector('.dark-mode');
        const bodyElement = document.body;
    
        darkModeToggle.addEventListener('click', () => {
            bodyElement.classList.toggle('dark-mode-variables');
            saveModePreference();
            updateModeIndicator();
        });
    
        function saveModePreference() {
            const isDarkMode = bodyElement.classList.contains('dark-mode-variables');
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        }
    
        function loadModePreference() {
            const darkMode = localStorage.getItem('darkMode');
            if (darkMode === 'enabled') {
                bodyElement.classList.add('dark-mode-variables');
            } else {
                bodyElement.classList.remove('dark-mode-variables');
            }
        }
    
        function updateModeIndicator() {
            const isDarkMode = bodyElement.classList.contains('dark-mode-variables');
            const lightIcon = document.querySelector('.dark-mode .light_mode');
            const darkIcon = document.querySelector('.dark-mode .dark_mode');
    
            if (isDarkMode) {
                lightIcon.classList.add('active');
                darkIcon.classList.remove('active');
            } else {
                lightIcon.classList.remove('active');
                darkIcon.classList.add('active');
            }
        }
    
        
        loadModePreference();
        updateModeIndicator();
    </script>
    </body>
    </html>

</body>
</html>