-VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config_values = {
    memory: 512,
    name: "gulfInterviewProject",
    ip: "192.168.33.11"
  }

  #config.vm.box = "generic/centos8"
  config.vm.box = "wbtech/php-dev"

  config.vm.network :private_network, ip: config_values[:ip]

  config.ssh.forward_agent = true

  config.vm.synced_folder "./", "/vagrant", :nfs => true
  config.vm.synced_folder "/Users/dannyrowlands/PHP Projects/gulfInterviewProject", "/var/www/projects/gulfInterviewProject", :nfs => true

  config.vm.provision :ansible do |ansible|
    ansible.limit = "all"
    ansible.playbook = "provisioning/provision.yml"
  end

  config.vm.provider :virtualbox do |vb|
    vb.customize [
       "modifyvm", :id,
       "--name", config_values[:name],
       "--memory", config_values[:memory],
       "--natdnshostresolver1", "on"
    ]
  end
end

