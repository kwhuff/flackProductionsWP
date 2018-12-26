# Install Apache

class apache2::install {

  package { 'apache2':
    ensure => 'installed',
  }

  service { 'apache2':
    ensure  => running,
    require => Package['apache2'],
  }

  # the httpd.conf change the user/group that apache uses to run its process
  file { '/etc/apache2/conf-available/user.conf':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    source  => '/vagrant/files/etc/apache2/httpd.conf',
    require => Package['apache2'],
    notify  => Service['apache2'],
  }
  file { '/etc/apache2/conf-enabled/user.conf':
    ensure => link,
    target => '/etc/apache2/conf-available/user.conf',
  }

  file { '/etc/apache2/sites-available/default.conf':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    source  => '/vagrant/files/etc/apache2/sites-available/default.conf',
    require => Package['apache2'],
    notify  => Service['apache2']
  }

  file { '/etc/apache2/mods-available/rewrite.load':
    ensure  => file,
    owner   => 'root',
    group   => 'root',
    mode    => '0644',
    source  => '/vagrant/files/etc/apache2/mods-available/rewrite.load',
    require => Package['apache2'],
    notify  => Service['apache2']
  }

  file { '/etc/apache2/sites-enabled/000-default.conf':
    ensure  => link,
    target  => '/etc/apache2/sites-available/default.conf',
    require => Package['apache2'],
    notify  => Service['apache2'],
  }

  file { '/etc/apache2/mods-enabled/rewrite.load':
    ensure  => link,
    target  => '/etc/apache2/mods-available/rewrite.load',
    require => Package['apache2'],
    notify  => Service['apache2'],
  }

}
