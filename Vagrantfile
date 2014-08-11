Vagrant.configure("2") do |config|
    config.vm.box = 'precise64'
    config.vm.box_url = 'http://files.vagrantup.com/precise64.box'
    config.vm.network 'private_network', ip: '192.168.50.5'
    config.vm.synced_folder 'evalor',
        '/var/www/wp-content/plugins/evalor',
        type: 'rsync', rsync__exclude: '.*.swp'

    config.vm.provision :puppet do |puppet|
        puppet.manifests_path = 'puppet/manifests'
        puppet.manifest_file = 'lamp.pp'
        puppet.module_path = 'puppet/modules'
    end
end

# vim: set ft=ruby :
