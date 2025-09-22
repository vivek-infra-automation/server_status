# DevOps Server Monitor

A real-time server and database monitoring tool with a modern web interface.

## Features

- Database connection status monitoring
- Comprehensive server information dashboard
- System resource monitoring (memory, disk, CPU)
- Network configuration details
- PHP configuration overview
- Modern responsive UI with colorful design

## Installation

### Prerequisites

- Apache Web Server
- PHP 7.0 or higher
- MySQL/MariaDB (optional)

### Setup Steps

1. **Install XAMPP/WAMP/LAMP**
   ```bash
   # Download and install XAMPP from https://www.apachefriends.org/
   # Or install Apache + PHP manually
   sudo  apt install apache2 php php-mysql -y
   ```

2. **Copy Files**
   ```bash
   # Clone the repository
   git clone https://github.com/vivek-infra-automation/server_status.git
   
   # Move to web directory
   sudo mv server_status /var/www/html/
   
   # Set proper permissions
   sudo chown -R www-data:www-data /var/www/html/server_status/
   sudo chmod -R 755 /var/www/html/server_status/
   ```

3. **Configure Database (Optional)**
   - Edit `check_db.php`
   - Update database credentials:
   ```php
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database";
   ```

4. **Start Services**
   ```bash
   # Start Apache and MySQL services
   # XAMPP: Use XAMPP Control Panel
   # Linux: sudo systemctl start apache2 mysql
   ```

5. **Access Application**
   ```
   http://localhost/server_status/
   ```

## File Structure

```
devops-monitor/
├── index.html          # Main dashboard interface
├── server_info.php     # Server information API
├── check_db.php        # Database connection checker
└── README.md          # This file
```

## Usage

1. Open the application in your web browser
2. View real-time server statistics
3. Monitor database connection status
4. Check system resources and configuration

## Customization

- Modify CSS in `index.html` for styling changes
- Add more server metrics in `server_info.php`
- Configure database settings in `check_db.php`

## Requirements

- Web server with PHP support
- Modern web browser
- Network access to server

## License

Open source - feel free to modify and distribute.