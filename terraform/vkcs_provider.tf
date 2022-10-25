terraform {
    required_providers {
        vkcs = {
            source = "vk-cs/vkcs"
            version = "~> 0.1.12" 
        }
    }
}

provider "vkcs" {
    username = "dmmshishkov@greenatom.ru"
    password = "Parol123!!!"
    project_id = "45837b99c541434bbfd8e542fb30deb0"
    region = "RegionOne"
    auth_url = "https://infra.mail.ru:35357/v3/" 
}
