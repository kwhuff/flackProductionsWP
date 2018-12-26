# Install PHP

class php7::install {

  # exec {"Allow Addition of Reposetory":
  #   command => "sudo apt-get install software-properties-common"
  # }
  exec { "add-ondrej-repository":
    command => "sudo add-apt-repository ppa:ondrej/php",
    path    => '/usr/bin',
  }

  exec { "apt-get-update":
    command => "sudo apt-get update",
    path    => '/usr/bin',
  }

  package { [
    'php7.2',
    'php7.2-mysql',
    'php7.2-curl',
    'php7.2-gd',
    'php7.2-fpm',
    'libapache2-mod-php7.2',
    'php7.2-dev',
    'php7.2-xdebug',
    'php7.2-xml',
    'php-pear',
  ]:
    ensure => 'installed',
  }

  # upgrade pear
  exec {"pear upgrade":
    command => "/usr/bin/pear upgrade",
    require => Package['php-pear'],
  }

  # set channels to auto discover
  exec { "pear auto_discover" :
    command => "/usr/bin/pear config-set auto_discover 1",
    require => [Package['php-pear']]
  }

  # update channels
  exec { "pear update-channels" :
    command => "/usr/bin/pear update-channels",
    require => [Package['php-pear']]
  }
}
