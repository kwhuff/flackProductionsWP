# Install latest Wordpress

class wordpress::install {

  # Create the Wordpress database
  exec { 'create-database':
    unless  => '/usr/bin/mysql -u root -pvagrant wordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute=\'create database wordpress\'',
  }

  exec { 'create-user':
    unless  => '/usr/bin/mysql -u wordpress -pwordpress wordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute="GRANT ALL PRIVILEGES ON wordpress.* TO \'wordpress\'@\'localhost\' IDENTIFIED BY \'wordpress\'"',
  }

  # Get a new copy of the latest wordpress release
  # FILE TO DOWNLOAD: https://wordpress.org/latest.tar.gz

  exec { 'download-wordpress': #tee hee
    command => '/usr/bin/wget https://wordpress.org/latest.tar.gz',
    cwd     => '/vagrant/html/',
    creates => '/vagrant/html/latest.tar.gz'
  }

  exec { 'untar-wordpress':
    cwd     => '/vagrant/html/',
    command => '/bin/tar xzvf /vagrant/html/latest.tar.gz && rm /vagrant/html/latest.tar.gz',
    require => Exec['download-wordpress'],
    creates => '/vagrant/html/wordpress',
  }

  # Import a MySQL database for a basic wordpress site.
  file { '/tmp/wordpress-db.sql':
    source => '/vagrant/Database/wordpress-db.sql'
  }

  exec { 'load-db':
    command => '/usr/bin/mysql -u wordpress -pwordpress wordpress < /tmp/wordpress-db.sql && touch /home/vagrant/db-created',
    creates => '/home/vagrant/db-created',
  }

  # Copy a working wp-config.php file for the vagrant setup.
  file { '/vagrant/html/wordpress/wp-config.php':
    source => 'puppet:///modules/wordpress/wp-config.php',
    require => Exec['untar-wordpress'],
  }

}
