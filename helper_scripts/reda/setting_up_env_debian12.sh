#!/usr/bin/env bash



# this func will contain all ssh-related stuff since I like to ssh to my VMs 
debian_ssh_setup() {
    apt update && apt upgrade
    apt install -y  openssh-server
}

# this func will take care of the docker installation proc
debian_docker_install() {
    # I know it's a long shot on a brand new VM but we might have some already present docker holdouts that need to 
    # be eradicated prompty as to not screw us down the road
    old_docker_pkgs=("docker.io" "docker-doc" "docker-compose" "podman-docker" "containerd" "runc")
    for pkg in "${old_docker_pkgs[@]}";do
        apt remove "$pkg"
    done
    # uninstalling an old version of docker (must be done even if comes the official repos)
    old_official_docker_pkgs=("docker-ce"  "docker-ce-cli"  "containerd.io"  "docker-buildx-plugin"  "docker-compose-plugin"  "docker-ce-rootless-extras") 
    for pkg in "${old_official_docker_pkgs[@]}";do
        apt remove "$pkg"
        rm -rf /var/lib/docker /var/lib/containerd
    done
    # adding the repo to our list of apt repos 
    apt install -y  ca-certificates curl
    install -m 0755 -d /etc/apt/keyrings
    curl -fsSL https://download.docker.com/linux/debian/gpg -o /etc/apt/keyrings/docker.asc
    chmod a+r /etc/apt/keyrings/docker.asc
    echo \
      "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/debian \
      $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
          tee /etc/apt/sources.list.d/docker.list > /dev/null
    apt update
    # installing docker
    pkgs_to_install=("docker-ce"  "docker-ce-cli"  "containerd.io"  "docker-buildx-plugin"  "docker-compose-plugin")
    for pkg in "${pkgs_to_install[@]}";do
        apt install -y  "$pkg"
    done
}

# this func for docker's post-installation tweaks
docker_post_install() {
    # verifying the health of our installation
    docker run hello-world
    # to add in here:
    #   how to manage docker as a non-root user [the docker group]
    #   systemd stuff [enable and such]
    #   setting up the logging mechanism for docker
}




# calling the various pieces
debian_ssh_setup;
debian_docker_install;
docker_post_install;
