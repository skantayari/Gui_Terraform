<?php require_once 'config/db.php'; ?>
<?php 
    
session_start();

	include("controllers/functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE php>
<html lang="en">
<head>
    <link rel="icon" href="/img/p.png">

    <title>Get Started</title>
    <link rel="stylesheet" href="css/default.css" id="theme-color">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">
    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
          body {font-family: Arial, Helvetica, sans-serif;}
        * {
           /* box-sizing: border-box;*/
           border-radius: 20px;
        }

    	#content {
            padding: 10px;
            background: linear-gradient(to bottom left, #3333cc 0%, #cc0099 100%);
            overflow: hidden;
        }




    	input[type=text], textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=button]{ 
            width: auto;
            float: right;
            cursor: pointer;
            padding: 7px;
        }
        #p2{
             display:inline;
        }
        .row {
            float: center;
            padding: 210px;
            display: flex;
        }

            /* Create three equal columns that sits next to each other */
        .column {
            flex: 33.33%;
            padding: 2px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .button {
            border-radius: 20px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 25px;
            width: 400px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -50px;
            transition: 0.2s;
        }    

        .button:hover span {
        padding-right: 50px;
        }

        .button:hover span:after {
        opacity: 1;
        right: 0;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }

        .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        }

        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 100vh;
  background: #232427;
}

body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

body .container .card {
  position: relative;
  min-width: 320px;
  height: 440px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

body .container .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container .card:nth-child(2) .box .content a {
  background: #e91e63;
}

body .container .card:nth-child(3) .box .content a {
  background: #23c186;
}

body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
body .container .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

    </style>
</head>
<body>
<!-- <nav>
    <ul>
    </br>
      <a href="contact.html" class="button"><span> Massive creation</span></a>

    </ul>
  </nav>
-->
   <div class="container-fluid" style="background-color: #120024">
        <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand heading-black" href="index.php">
                ADACTIM
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" >Welcome, <?php echo $user_data['username']; ?></a>
                    </li>
                </ul>    
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>

    <div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>LIGHT</h3>
        <p>This form will generate a Terraform file that should provision a single VM</p>
        <a href="light.php">Go ahead!</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>LABS</h3>
        <p>Shoose one of our preconfigured LABS </p>
        <a href="#" onclick="saveFile_veeam();saveFile_ps_config();saveFile_ps_winrm();saveFile_xml();saveFile_ansible_veeam();saveFile_ansible_inventory();">VEEAM </a>
         <p> </p>
        <a href="#" onclick="saveFile_kaspersky();saveFile_ps_config();saveFile_ps_winrm();saveFile_xml();saveFile_ansible_kaspersky();saveFile_ansible_inventory();">KASPERSKY  </a>
        <p> </p>
        <a href="#" onclick="saveFile_huawei();saveFile_ps_config();saveFile_ps_winrm();saveFile_xml();saveFile_ansible_huawei();saveFile_ansible_inventory();">HUAEWI </a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <div class="content">
        <h3>MASSIVE</h3>
        <p>This form will generate a Terraform file that should provision massive number of VMs</p>
        <a href="massive.php">Go ahead!</a>
      </div>
    </div>
  </div>

</div>

<script>  


    let saveFile_veeam = () => {
        
        let data = 

'terraform {' + '\r\n' +'  required_providers {'+ '\r\n' +'    azurerm = {'+ '\r\n' +'      source  = "hashicorp/azurerm"'+ '\r\n' +
'      version = ">= 2.43.0"'+ '\r\n' +'    }'+ '\r\n' +' }'+ '\r\n' +'}'+ '\r\n' +

'provider "azurerm" {'+ '\r\n' +'  features {'+ '\r\n' +'    key_vault {'+ '\r\n' +'      purge_soft_delete_on_destroy = true'+ '\r\n' +
'    }'+ '\r\n' +'  }'+ '\r\n' +'}'+ '\r\n' +

'resource "random_id" "kvname" {' + '\r\n' +'  byte_length = 4'+ '\r\n' +'  prefix = "keyvault"'+ '\r\n' +
'}'+ '\r\n' +

'data "azurerm_client_config" "current" {}'+ '\r\n' +
'resource "azurerm_key_vault" "kv1" {'+ '\r\n' +
'  name                        = random_id.kvname.hex'+ '\r\n' +
'  location                    = "North Europe" '+ '\r\n' +
'  resource_group_name         = "my_terraform_rg" '+ '\r\n' +
'  enabled_for_disk_encryption = true'+ '\r\n' +
'  tenant_id                   = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'  soft_delete_retention_days  = 7'+ '\r\n' +
'  purge_protection_enabled    = false'+ '\r\n' +
'  sku_name = "standard"'+ '\r\n' +

'  access_policy {'+ '\r\n' +
'    tenant_id = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'    object_id = data.azurerm_client_config.current.object_id'+ '\r\n' +

'    key_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +

'    secret_permissions = ['+ '\r\n' +
'      "get", "backup", "delete", "list", "purge", "recover", "restore", "set",'+ '\r\n' +
'    ]'+ '\r\n' +

'    storage_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'  tags = {'+ '\r\n' +
'    environment = "production"'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' +

'resource "random_password" "vmpassword" {'+ '\r\n' +
'  length  = 20'+ '\r\n' +
'  special = false'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_key_vault_secret" "vmpassword" {'+ '\r\n' +
'  name         = "veeampassword"'+ '\r\n' +
'  value        = random_password.vmpassword.result'+ '\r\n' +
'  key_vault_id = azurerm_key_vault.kv1.id'+ '\r\n' +
'  depends_on   = [azurerm_key_vault.kv1]'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_resource_group" "rg" {' + '\r\n' +
'  name ="veeamrg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production"' + '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_network" "vnet" {'+ '\r\n' +
'  name = "veeamvnet" '+ '\r\n' +
'  address_space = ["30.0.0.0/16"]' + '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' + 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_subnet" "subnet" {'+ '\r\n' +
'  name ="veeamsubnet" '+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
'  virtual_network_name = "veeamvnet"'+ '\r\n' +
'  address_prefixes = ["30.0.1.0/24"]'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_public_ip" "public_ip" { '+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name ="veeam-${format("%02d", count.index)}"'+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  allocation_method = "Static"' + '\r\n' +
 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'data "azurerm_public_ip" "pub_ip" {'+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name = element(azurerm_public_ip.public_ip.*.name, count.index)'+ '\r\n' +
'  resource_group_name = "veeamrg"'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_network_security_group" "nsg" { '+ '\r\n' +
'  name ="winrm_nsg" '+ '\r\n' +
'  location ="North Europe"' + '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
'  security_rule {'+ '\r\n' +
'   name= "ssh" '+ '\r\n' +
'   priority = "1001" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "22"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "rdp" '+ '\r\n' +
'   priority = "1002" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "3389"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "winrm" '+ '\r\n' +
'   priority = "1000" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "5985"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +
 
'resource "azurerm_network_interface" "nic" { '+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name ="veeam-${format("%02d", count.index)}"'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
 
' ip_configuration { '+ '\r\n' +
'   name= "nicveeam" '+ '\r\n' +
'   subnet_id = azurerm_subnet.subnet.id  '+ '\r\n' +
'   private_ip_address_allocation = "Dynamic" '+ '\r\n' +
'   public_ip_address_id = element(azurerm_public_ip.public_ip.*.id, count.index)'+ '\r\n' +
'  }'+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'resource "azurerm_subnet_network_security_group_association" "association" { '+ '\r\n' +
'  subnet_id = azurerm_subnet.subnet.id'+ '\r\n' +
'  network_security_group_id = azurerm_network_security_group.nsg.id'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_machine" "veeamserver" {'+ '\r\n' +
'  name ="veeamserver_vm" '+ '\r\n' +
'  depends_on = [ azurerm_key_vault.kv1 ]'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
'  network_interface_ids = [element(azurerm_network_interface.nic.*.id, 0)]   '+ '\r\n' +
'  vm_size = "Standard_D2s_v3" '+ '\r\n' +
'  delete_os_disk_on_termination = true'+ '\r\n' +
  
'  storage_image_reference {'+ '\r\n' +
'    publisher = "MicrosoftWindowsServer"'+ '\r\n' +
'    offer ="WindowsServer"'+ '\r\n' +
'    sku = "2019-Datacenter"  '+ '\r\n' +
'    version = "latest" '+ '\r\n' +
'  }'+ '\r\n' +
'  storage_os_disk {'+ '\r\n' +
'    name              = "veeamserver_disk"'+ '\r\n' +
'    caching           = "ReadWrite"'+ '\r\n' +
'    create_option     = "FromImage"'+ '\r\n' +
'    managed_disk_type = "Standard_LRS"'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile {'+ '\r\n' +
'    computer_name  = "veeamserver"'+ '\r\n' +
'    admin_username = "iskander"'+ '\r\n' +
'    admin_password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'    custom_data    = file("./winrm.ps1")'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile_windows_config {'+ '\r\n' +
'    provision_vm_agent = "true"'+ '\r\n' +
'    winrm {'+ '\r\n' +
'        protocol = "http"'+ '\r\n' +
'    }'+ '\r\n' +

'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "AutoLogon"'+ '\r\n' +
'      content      = "<AutoLogon><Password><Value>${azurerm_key_vault_secret.vmpassword.value}</Value></Password><Enabled>true</Enabled><LogonCount>1</LogonCount><Username>iskander</Username></AutoLogon>"'+ '\r\n' +
'    }'+ '\r\n' +

'    # Unattend config is to enable basic auth in WinRM, required for the provisioner stage.'+ '\r\n' +
'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "FirstLogonCommands"'+ '\r\n' +
'      content      = file("./FirstLogonCommands.xml")'+ '\r\n' +
'    }'+ '\r\n' +
'  }'+ '\r\n' +

'  connection {'+ '\r\n' +
'    host     = "${element(data.azurerm_public_ip.pub_ip.*.ip_address, 0)}"'+ '\r\n' +
'    type     = "winrm"'+ '\r\n' +
'    port     = 5985'+ '\r\n' +
'    https    = false'+ '\r\n' +
'    timeout  = "2m"'+ '\r\n' +
'    user     = "iskander"'+ '\r\n' +
'    password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "file" {'+ '\r\n' +
'    source      = "config.ps1"'+ '\r\n' +
'    destination = "c:/terraform/config.ps1"'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "remote-exec" {'+ '\r\n' +
'    inline = ['+ '\r\n' +
'      "PowerShell.exe -ExecutionPolicy Bypass c:\\terraform\\config.ps1",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_virtual_machine" "veeamagent" {'+ '\r\n' +
'  name ="veeamagent_vm" '+ '\r\n' +
'  depends_on = [ azurerm_key_vault.kv1 ]'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "veeamrg" '+ '\r\n' +
'  network_interface_ids = [element(azurerm_network_interface.nic.*.id, 1)]   '+ '\r\n' +
'  vm_size = "Standard_D2s_v3" '+ '\r\n' +
'  delete_os_disk_on_termination = true'+ '\r\n' +
  
'  storage_image_reference {'+ '\r\n' +
'    publisher = "MicrosoftWindowsServer"'+ '\r\n' +
'    offer ="WindowsServer"'+ '\r\n' +
'    sku = "2019-Datacenter"  '+ '\r\n' +
'    version = "latest" '+ '\r\n' +
'  }'+ '\r\n' +
'  storage_os_disk {'+ '\r\n' +
'    name              = "veeamagent_disk"'+ '\r\n' +
'    caching           = "ReadWrite"'+ '\r\n' +
'    create_option     = "FromImage"'+ '\r\n' +
'    managed_disk_type = "Standard_LRS"'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile {'+ '\r\n' +
'    computer_name  = "veeamagent"'+ '\r\n' +
'    admin_username = "iskander"'+ '\r\n' +
'    admin_password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'    custom_data    = file("./winrm.ps1")'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile_windows_config {'+ '\r\n' +
'    provision_vm_agent = "true"'+ '\r\n' +
'    winrm {'+ '\r\n' +
'        protocol = "http"'+ '\r\n' +
'    }'+ '\r\n' +

'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "AutoLogon"'+ '\r\n' +
'      content      = "<AutoLogon><Password><Value>${azurerm_key_vault_secret.vmpassword.value}</Value></Password><Enabled>true</Enabled><LogonCount>1</LogonCount><Username>iskander</Username></AutoLogon>"'+ '\r\n' +
'    }'+ '\r\n' +

'    # Unattend config is to enable basic auth in WinRM, required for the provisioner stage.'+ '\r\n' +
'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "FirstLogonCommands"'+ '\r\n' +
'      content      = file("./FirstLogonCommands.xml")'+ '\r\n' +
'    }'+ '\r\n' +
'  }'+ '\r\n' +

'  connection {'+ '\r\n' +
'    host     = "${element(data.azurerm_public_ip.pub_ip.*.ip_address, 1)}"'+ '\r\n' +
'    type     = "winrm"'+ '\r\n' +
'    port     = 5985'+ '\r\n' +
'    https    = false'+ '\r\n' +
'    timeout  = "2m"'+ '\r\n' +
'    user     = "iskander"'+ '\r\n' +
'    password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "file" {'+ '\r\n' +
'    source      = "config.ps1"'+ '\r\n' +
'    destination = "c:/terraform/config.ps1"'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "remote-exec" {'+ '\r\n' +
'    inline = ['+ '\r\n' +
'      "PowerShell.exe -ExecutionPolicy Bypass c:\\terraform\\config.ps1",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' 
 


        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'main.tf';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    
    }

    let saveFile_kaspersky = () => {
        
        let data = 

'terraform {' + '\r\n' +'  required_providers {'+ '\r\n' +'    azurerm = {'+ '\r\n' +'      source  = "hashicorp/azurerm"'+ '\r\n' +
'      version = ">= 2.43.0"'+ '\r\n' +'    }'+ '\r\n' +' }'+ '\r\n' +'}'+ '\r\n' +

'provider "azurerm" {'+ '\r\n' +'  features {'+ '\r\n' +'    key_vault {'+ '\r\n' +'      purge_soft_delete_on_destroy = true'+ '\r\n' +
'    }'+ '\r\n' +'  }'+ '\r\n' +'}'+ '\r\n' +

'resource "random_id" "kvname" {' + '\r\n' +'  byte_length = 4'+ '\r\n' +'  prefix = "keyvault"'+ '\r\n' +
'}'+ '\r\n' +

'data "azurerm_client_config" "current" {}'+ '\r\n' +
'resource "azurerm_key_vault" "kv1" {'+ '\r\n' +
'  name                        = random_id.kvname.hex'+ '\r\n' +
'  location                    = "North Europe" '+ '\r\n' +
'  resource_group_name         = "my_terraform_rg" '+ '\r\n' +
'  enabled_for_disk_encryption = true'+ '\r\n' +
'  tenant_id                   = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'  soft_delete_retention_days  = 7'+ '\r\n' +
'  purge_protection_enabled    = false'+ '\r\n' +
'  sku_name = "standard"'+ '\r\n' +

'  access_policy {'+ '\r\n' +
'    tenant_id = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'    object_id = data.azurerm_client_config.current.object_id'+ '\r\n' +

'    key_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +

'    secret_permissions = ['+ '\r\n' +
'      "get", "backup", "delete", "list", "purge", "recover", "restore", "set",'+ '\r\n' +
'    ]'+ '\r\n' +

'    storage_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'  tags = {'+ '\r\n' +
'    environment = "production"'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' +

'resource "random_password" "vmpassword" {'+ '\r\n' +
'  length  = 20'+ '\r\n' +
'  special = false'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_key_vault_secret" "vmpassword" {'+ '\r\n' +
'  name         = "kasperskypassword"'+ '\r\n' +
'  value        = random_password.vmpassword.result'+ '\r\n' +
'  key_vault_id = azurerm_key_vault.kv1.id'+ '\r\n' +
'  depends_on   = [azurerm_key_vault.kv1]'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_resource_group" "rg" {' + '\r\n' +
'  name ="kaspersky_rg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production"' + '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_network" "vnet" {'+ '\r\n' +
'  name = "kasperskyvnet" '+ '\r\n' +
'  address_space = ["20.0.0.0/16"]' + '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' + 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_subnet" "subnet" {'+ '\r\n' +
'  name ="subnetkaspersky" '+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
'  virtual_network_name = "kasperskyvnet"'+ '\r\n' +
'  address_prefixes = ["20.0.1.0/24"]'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_public_ip" "public_ip" { '+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name ="kaspersky-${format("%02d", count.index)}"'+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  allocation_method = "Static"' + '\r\n' +
 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'data "azurerm_public_ip" "pub_ip" {'+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name = element(azurerm_public_ip.public_ip.*.name, count.index)'+ '\r\n' +
'  resource_group_name = "kaspersky_rg"'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_network_security_group" "nsg" { '+ '\r\n' +
'  name ="kaspersky_nsg" '+ '\r\n' +
'  location ="West Europe"' + '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
'  security_rule {'+ '\r\n' +
'   name= "ssh" '+ '\r\n' +
'   priority = "1001" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "22"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "rdp" '+ '\r\n' +
'   priority = "1002" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "3389"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "winrm" '+ '\r\n' +
'   priority = "1000" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "5985"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +
 
'resource "azurerm_network_interface" "nic" { '+ '\r\n' +
'  count ="2"' + '\r\n' +
'  name ="kaspersky-${format("%02d", count.index)}"'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
 
' ip_configuration { '+ '\r\n' +
'   name= "nickaspersky" '+ '\r\n' +
'   subnet_id = azurerm_subnet.subnet.id  '+ '\r\n' +
'   private_ip_address_allocation = "Dynamic" '+ '\r\n' +
'   public_ip_address_id = element(azurerm_public_ip.public_ip.*.id, count.index)'+ '\r\n' +
'  }'+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'resource "azurerm_subnet_network_security_group_association" "association" { '+ '\r\n' +
'  subnet_id = azurerm_subnet.subnet.id'+ '\r\n' +
'  network_security_group_id = azurerm_network_security_group.nsg.id'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_machine" "kasperskyserver" {'+ '\r\n' +
'  name ="kasperskyserver_vm" '+ '\r\n' +
'  depends_on = [ azurerm_key_vault.kv1 ]'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
'  network_interface_ids = [element(azurerm_network_interface.nic.*.id, 0)]   '+ '\r\n' +
'  vm_size = "Standard_D2s_v3" '+ '\r\n' +
'  delete_os_disk_on_termination = true'+ '\r\n' +
  
'  storage_image_reference {'+ '\r\n' +
'    publisher = "MicrosoftWindowsServer"'+ '\r\n' +
'    offer ="WindowsServer"'+ '\r\n' +
'    sku = "2019-Datacenter"  '+ '\r\n' +
'    version = "latest" '+ '\r\n' +
'  }'+ '\r\n' +
'  storage_os_disk {'+ '\r\n' +
'    name              = "kasperskyserver_disk"'+ '\r\n' +
'    caching           = "ReadWrite"'+ '\r\n' +
'    create_option     = "FromImage"'+ '\r\n' +
'    managed_disk_type = "Standard_LRS"'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile {'+ '\r\n' +
'    computer_name  = "kasperskyserver"'+ '\r\n' +
'    admin_username = "iskander"'+ '\r\n' +
'    admin_password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'    custom_data    = file("./winrm.ps1")'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile_windows_config {'+ '\r\n' +
'    provision_vm_agent = "true"'+ '\r\n' +
'    winrm {'+ '\r\n' +
'        protocol = "http"'+ '\r\n' +
'    }'+ '\r\n' +

'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "AutoLogon"'+ '\r\n' +
'      content      = "<AutoLogon><Password><Value>${azurerm_key_vault_secret.vmpassword.value}</Value></Password><Enabled>true</Enabled><LogonCount>1</LogonCount><Username>iskander</Username></AutoLogon>"'+ '\r\n' +
'    }'+ '\r\n' +

'    # Unattend config is to enable basic auth in WinRM, required for the provisioner stage.'+ '\r\n' +
'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "FirstLogonCommands"'+ '\r\n' +
'      content      = file("./FirstLogonCommands.xml")'+ '\r\n' +
'    }'+ '\r\n' +
'  }'+ '\r\n' +

'  connection {'+ '\r\n' +
'    host     = "${element(data.azurerm_public_ip.pub_ip.*.ip_address, 0)}"'+ '\r\n' +
'    type     = "winrm"'+ '\r\n' +
'    port     = 5985'+ '\r\n' +
'    https    = false'+ '\r\n' +
'    timeout  = "2m"'+ '\r\n' +
'    user     = "iskander"'+ '\r\n' +
'    password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "file" {'+ '\r\n' +
'    source      = "config.ps1"'+ '\r\n' +
'    destination = "c:/terraform/config.ps1"'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "remote-exec" {'+ '\r\n' +
'    inline = ['+ '\r\n' +
'      "PowerShell.exe -ExecutionPolicy Bypass c:\\terraform\\config.ps1",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_virtual_machine" "kasperskyagent" {'+ '\r\n' +
'  name ="kasperskyagent_vm" '+ '\r\n' +
'  depends_on = [ azurerm_key_vault.kv1 ]'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "kaspersky_rg" '+ '\r\n' +
'  network_interface_ids = [element(azurerm_network_interface.nic.*.id, 1)]   '+ '\r\n' +
'  vm_size = "Standard_D2s_v3" '+ '\r\n' +
'  delete_os_disk_on_termination = true'+ '\r\n' +
  
'  storage_image_reference {'+ '\r\n' +
'    publisher = "MicrosoftWindowsServer"'+ '\r\n' +
'    offer ="WindowsServer"'+ '\r\n' +
'    sku = "2019-Datacenter"  '+ '\r\n' +
'    version = "latest" '+ '\r\n' +
'  }'+ '\r\n' +
'  storage_os_disk {'+ '\r\n' +
'    name              = "kasperskyagent_disk"'+ '\r\n' +
'    caching           = "ReadWrite"'+ '\r\n' +
'    create_option     = "FromImage"'+ '\r\n' +
'    managed_disk_type = "Standard_LRS"'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile {'+ '\r\n' +
'    computer_name  = "kasperskyagent"'+ '\r\n' +
'    admin_username = "iskander"'+ '\r\n' +
'    admin_password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'    custom_data    = file("./winrm.ps1")'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile_windows_config {'+ '\r\n' +
'    provision_vm_agent = "true"'+ '\r\n' +
'    winrm {'+ '\r\n' +
'        protocol = "http"'+ '\r\n' +
'    }'+ '\r\n' +

'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "AutoLogon"'+ '\r\n' +
'      content      = "<AutoLogon><Password><Value>${azurerm_key_vault_secret.vmpassword.value}</Value></Password><Enabled>true</Enabled><LogonCount>1</LogonCount><Username>iskander</Username></AutoLogon>"'+ '\r\n' +
'    }'+ '\r\n' +

'    # Unattend config is to enable basic auth in WinRM, required for the provisioner stage.'+ '\r\n' +
'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "FirstLogonCommands"'+ '\r\n' +
'      content      = file("./FirstLogonCommands.xml")'+ '\r\n' +
'    }'+ '\r\n' +
'  }'+ '\r\n' +

'  connection {'+ '\r\n' +
'    host     = "${element(data.azurerm_public_ip.pub_ip.*.ip_address, 1)}"'+ '\r\n' +
'    type     = "winrm"'+ '\r\n' +
'    port     = 5985'+ '\r\n' +
'    https    = false'+ '\r\n' +
'    timeout  = "2m"'+ '\r\n' +
'    user     = "iskander"'+ '\r\n' +
'    password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "file" {'+ '\r\n' +
'    source      = "config.ps1"'+ '\r\n' +
'    destination = "c:/terraform/config.ps1"'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "remote-exec" {'+ '\r\n' +
'    inline = ['+ '\r\n' +
'      "PowerShell.exe -ExecutionPolicy Bypass c:\\terraform\\config.ps1",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' 
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'main.tf';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    
    }

    let saveFile_huawei = () => {
        
        let data = 


        'terraform {' + '\r\n' +'  required_providers {'+ '\r\n' +'    azurerm = {'+ '\r\n' +'      source  = "hashicorp/azurerm"'+ '\r\n' +
'      version = ">= 2.43.0"'+ '\r\n' +'    }'+ '\r\n' +' }'+ '\r\n' +'}'+ '\r\n' +

'provider "azurerm" {'+ '\r\n' +'  features {'+ '\r\n' +'    key_vault {'+ '\r\n' +'      purge_soft_delete_on_destroy = true'+ '\r\n' +
'    }'+ '\r\n' +'  }'+ '\r\n' +'}'+ '\r\n' +

'resource "random_id" "kvname" {' + '\r\n' +'  byte_length = 4'+ '\r\n' +'  prefix = "keyvault"'+ '\r\n' +
'}'+ '\r\n' +

'data "azurerm_client_config" "current" {}'+ '\r\n' +
'resource "azurerm_key_vault" "kv1" {'+ '\r\n' +
'  name                        = random_id.kvname.hex'+ '\r\n' +
'  location                    = "North Europe" '+ '\r\n' +
'  resource_group_name         = "my_terraform_rg" '+ '\r\n' +
'  enabled_for_disk_encryption = true'+ '\r\n' +
'  tenant_id                   = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'  soft_delete_retention_days  = 7'+ '\r\n' +
'  purge_protection_enabled    = false'+ '\r\n' +
'  sku_name = "standard"'+ '\r\n' +

'  access_policy {'+ '\r\n' +
'    tenant_id = data.azurerm_client_config.current.tenant_id'+ '\r\n' +
'    object_id = data.azurerm_client_config.current.object_id'+ '\r\n' +

'    key_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +

'    secret_permissions = ['+ '\r\n' +
'      "get", "backup", "delete", "list", "purge", "recover", "restore", "set",'+ '\r\n' +
'    ]'+ '\r\n' +

'    storage_permissions = ['+ '\r\n' +
'      "get",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'  tags = {'+ '\r\n' +
'    environment = "production"'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n' +

'resource "random_password" "vmpassword" {'+ '\r\n' +
'  length  = 20'+ '\r\n' +
'  special = false'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_key_vault_secret" "vmpassword" {'+ '\r\n' +
'  name         = "huaweipassword"'+ '\r\n' +
'  value        = random_password.vmpassword.result'+ '\r\n' +
'  key_vault_id = azurerm_key_vault.kv1.id'+ '\r\n' +
'  depends_on   = [azurerm_key_vault.kv1]'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_resource_group" "rg" {' + '\r\n' +
'  name ="huaweirg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production"' + '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_network" "vnet" {'+ '\r\n' +
'  name = "huaweivnet" '+ '\r\n' +
'  address_space = ["40.0.0.0/16"]' + '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' + 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_subnet" "subnet" {'+ '\r\n' +
'  name ="huaweisubnet" '+ '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' +
'  virtual_network_name = "huaweivnet"'+ '\r\n' +
'  address_prefixes = ["40.0.1.0/24"]'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_public_ip" "public_ip" { '+ '\r\n' +
'  name ="huaweipubip"'+ '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  allocation_method = "Static"' + '\r\n' +
 
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'data "azurerm_public_ip" "pub_ip" {'+ '\r\n' +
'  name = azurerm_public_ip.public_ip.name'+ '\r\n' +
'  resource_group_name = "huaweirg"'+ '\r\n' +
'}'+ '\r\n' +

'resource "azurerm_network_security_group" "nsg" { '+ '\r\n' +
'  name ="huawei_nsg" '+ '\r\n' +
'  location ="West Europe"' + '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' +
'  security_rule {'+ '\r\n' +
'   name= "ssh" '+ '\r\n' +
'   priority = "1001" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "22"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "rdp" '+ '\r\n' +
'   priority = "1002" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "3389"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

'  security_rule {'+ '\r\n' +
'   name= "winrm" '+ '\r\n' +
'   priority = "1000" '+ '\r\n' +
'   direction = "Inbound"'+ '\r\n' +
'   access = "Allow"'+ '\r\n' +
'   protocol = "Tcp"'+ '\r\n' +
'   source_port_range = "*"'+ '\r\n' +
'   destination_port_range = "5985"'+ '\r\n' +
'   source_address_prefix = "*"'+ '\r\n' +
'   destination_address_prefix = "*"'+ '\r\n' +
' }'+ '\r\n' +

' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +
 
'resource "azurerm_network_interface" "nic" { '+ '\r\n' +
'  name ="huaweinic"'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' +
 
' ip_configuration { '+ '\r\n' +
'   name= "nichuawei" '+ '\r\n' +
'   subnet_id = azurerm_subnet.subnet.id  '+ '\r\n' +
'   private_ip_address_allocation = "Dynamic" '+ '\r\n' +
'   public_ip_address_id = azurerm_public_ip.public_ip.id'+ '\r\n' +
'  }'+ '\r\n' +
' tags = {  '+ '\r\n' +
'    environment = "production" '+ '\r\n' +
'  }'+ '\r\n' +
'} '+ '\r\n' +

'resource "azurerm_network_interface_security_group_association" "association" { '+ '\r\n' +
'  network_interface_id = azurerm_network_interface.nic.id'+ '\r\n' +
'  network_security_group_id = azurerm_network_security_group.nsg.id'+ '\r\n' +
'}' + '\r\n' +

'resource "azurerm_virtual_machine" "huaweilab" {'+ '\r\n' +
'  name ="huaweilab" '+ '\r\n' +
'  depends_on = [ azurerm_key_vault.kv1 ]'+ '\r\n' +
'  location ="West Europe" '+ '\r\n' +
'  resource_group_name = "huaweirg" '+ '\r\n' +
'  network_interface_ids = [azurerm_network_interface.nic.id]     '+ '\r\n' +
'  vm_size = "Standard_D2s_v3" '+ '\r\n' +
'  delete_os_disk_on_termination = true'+ '\r\n' +
  
'  storage_image_reference {'+ '\r\n' +
'    publisher = "MicrosoftWindowsServer"'+ '\r\n' +
'    offer ="WindowsServer"'+ '\r\n' +
'    sku = "2019-Datacenter"  '+ '\r\n' +
'    version = "latest" '+ '\r\n' +
'  }'+ '\r\n' +
'  storage_os_disk {'+ '\r\n' +
'    name              = "huaweilab_disk"'+ '\r\n' +
'    caching           = "ReadWrite"'+ '\r\n' +
'    create_option     = "FromImage"'+ '\r\n' +
'    managed_disk_type = "Standard_LRS"'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile {'+ '\r\n' +
'    computer_name  = "huaweilab"'+ '\r\n' +
'    admin_username = "iskander"'+ '\r\n' +
'    admin_password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'    custom_data    = file("./winrm.ps1")'+ '\r\n' +
'  }'+ '\r\n' +
'  os_profile_windows_config {'+ '\r\n' +
'    provision_vm_agent = "true"'+ '\r\n' +
'    winrm {'+ '\r\n' +
'        protocol = "http"'+ '\r\n' +
'    }'+ '\r\n' +

'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "AutoLogon"'+ '\r\n' +
'      content      = "<AutoLogon><Password><Value>${azurerm_key_vault_secret.vmpassword.value}</Value></Password><Enabled>true</Enabled><LogonCount>1</LogonCount><Username>iskander</Username></AutoLogon>"'+ '\r\n' +
'    }'+ '\r\n' +

'    # Unattend config is to enable basic auth in WinRM, required for the provisioner stage.'+ '\r\n' +
'    additional_unattend_config {'+ '\r\n' +
'      pass         = "oobeSystem"'+ '\r\n' +
'      component    = "Microsoft-Windows-Shell-Setup"'+ '\r\n' +
'      setting_name = "FirstLogonCommands"'+ '\r\n' +
'      content      = file("./FirstLogonCommands.xml")'+ '\r\n' +
'    }'+ '\r\n' +
'  }'+ '\r\n' +

'  connection {'+ '\r\n' +
'    host     = data.azurerm_public_ip.pub_ip.ip_address'+ '\r\n' +
'    type     = "winrm"'+ '\r\n' +
'    port     = 5985'+ '\r\n' +
'    https    = false'+ '\r\n' +
'    timeout  = "2m"'+ '\r\n' +
'    user     = "iskander"'+ '\r\n' +
'    password = azurerm_key_vault_secret.vmpassword.value'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "file" {'+ '\r\n' +
'    source      = "config.ps1"'+ '\r\n' +
'    destination = "c:/terraform/config.ps1"'+ '\r\n' +
'  }'+ '\r\n' +

'  provisioner "remote-exec" {'+ '\r\n' +
'    inline = ['+ '\r\n' +
'      "PowerShell.exe -ExecutionPolicy Bypass c:\\terraform\\config.ps1",'+ '\r\n' +
'    ]'+ '\r\n' +
'  }'+ '\r\n' +
'}'+ '\r\n'
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'main.tf';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    
    }



    let saveFile_ps_config = () => {
    let data = 
'Set-ExecutionPolicy Bypass -Scope Process -Force; Invoke-Expression ((New-Object System.Net.WebClient).DownloadString("https://raw.githubusercontent.com/habitat-sh/habitat/master/components/hab/install.ps1"))'+ '\r\n' +
'hab license accept'+ '\r\n' +
'hab pkg install core/windows-service'+ '\r\n' +
'netsh advfirewall firewall add rule name="Habitat Butterfly API" dir=in action=allow protocol=TCP localport=9631'+ '\r\n' +
'Start-Service -Name Habitat'+ '\r\n' 
        
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'config.ps1';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }

    let saveFile_ps_winrm = () => {
    let data = 
'Write-Host "Delete any existing WinRM listeners"'+ '\r\n' +
'winrm delete winrm/config/listener?Address=*+Transport=HTTP  2>$Null'+ '\r\n' +
'winrm delete winrm/config/listener?Address=*+Transport=HTTPS 2>$Null'+ '\r\n' +

'Write-Host "Create a new WinRM listener and configure"'+ '\r\n' +
'winrm create winrm/config/listener?Address=*+Transport=HTTP'+ '\r\n' +
'winrm set winrm/config/winrs "@{MaxMemoryPerShellMB="0"}"'+ '\r\n' +
'winrm set winrm/config "@{MaxTimeoutms="7200000"}"'+ '\r\n' +
'winrm set winrm/config/service "@{AllowUnencrypted="true"}"'+ '\r\n' +
'winrm set winrm/config/service "@{MaxConcurrentOperationsPerUser="12000"}"'+ '\r\n' +
'winrm set winrm/config/service/auth "@{Basic="true"}"'+ '\r\n' +
'winrm set winrm/config/client/auth "@{Basic="true"}"'+ '\r\n' +

'Write-Host "Configure UAC to allow privilege elevation in remote shells"'+ '\r\n' +
'$Key = "HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\System"'+ '\r\n' +
'$Setting = "LocalAccountTokenFilterPolicy"'+ '\r\n' +
'Set-ItemProperty -Path $Key -Name $Setting -Value 1 -Force'+ '\r\n' +

'Write-Host "turn off PowerShell execution policy restrictions"'+ '\r\n' +
'Set-ExecutionPolicy -ExecutionPolicy Bypass -Scope LocalMachine'+ '\r\n' +

'Write-Host "Configure and restart the WinRM Service; Enable the required firewall exception"'+ '\r\n' +
'Stop-Service -Name WinRM'+ '\r\n' +
'Set-Service -Name WinRM -StartupType Automatic'+ '\r\n' +
'netsh advfirewall firewall set rule name="Windows Remote Management (HTTP-In)" new action=allow localip=any remoteip=any'+ '\r\n' +
'Start-Service -Name WinRM'+ '\r\n' 
        
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'winrm.ps1';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }    


    let saveFile_xml = () => {
    let data = 
'<FirstLogonCommands>'+ '\r\n' +
'    <SynchronousCommand>'+ '\r\n' +
'        <CommandLine>cmd /c "mkdir C:\terraform"</CommandLine>'+ '\r\n' +
'        <Description>Create the Terraform working directory</Description>'+ '\r\n' +
'        <Order>11</Order>'+ '\r\n' +
'    </SynchronousCommand>'+ '\r\n' +
'    <SynchronousCommand>'+ '\r\n' +
'        <CommandLine>cmd /c "copy C:\AzureData\CustomData.bin C:\terraform\winrm.ps1"</CommandLine>'+ '\r\n' +
'        <Description>Move the CustomData file to the working directory</Description>'+ '\r\n' +
'        <Order>12</Order>'+ '\r\n' +
'    </SynchronousCommand>'+ '\r\n' +
'    <SynchronousCommand>'+ '\r\n' +
'        <CommandLine>powershell.exe -sta -ExecutionPolicy Unrestricted -file C:\terraform\winrm.ps1</CommandLine>'+ '\r\n' +
'        <Description>Execute the WinRM enabling script</Description>'+ '\r\n' +
'        <Order>13</Order>'+ '\r\n' +
'    </SynchronousCommand>'+ '\r\n' +
'</FirstLogonCommands>'+ '\r\n' 

        
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'FirstLogonCommands.xml';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }    

    let saveFile_ansible_veeam = () => {
    let data = 
'---'+ '\r\n' +
'- hosts: veeamagent'+ '\r\n' +
'  gather_facts: no'+ '\r\n' +
'  tasks:'+ '\r\n' +
'  - name: Install the TFTP Client'+ '\r\n' +
'    win_feature:'+ '\r\n' +
'      name: TFTP-Client'+ '\r\n' +
'      state: present'+ '\r\n' +
'  - name: Install IIS web server'+ '\r\n' +
'    win_feature:'+ '\r\n' +
'      name: Web-Server'+ '\r\n' +
'      state: present'+ '\r\n' +
'      include_sub_features: yes'+ '\r\n' +
'      include_management_tools: yes'+ '\r\n' +
'    register: win_feature'+ '\r\n' +
'  - name: Install the AD-DS services'+ '\r\n' +
'    win_feature:'+ '\r\n' +
'      name: AD-Domain-Services'+ '\r\n' +
'      state: present'+ '\r\n' +
'      include_sub_features: yes'+ '\r\n' +
'      include_management_tools: yes'+ '\r\n' +
'    register: win_feature'+ '\r\n' +
'  - name: Reboot if necessary'+ '\r\n' +
'    win_reboot:'+ '\r\n' +
'    when: win_feature.reboot_required'+ '\r\n' +
'  - name: Ensure veeam-agent installed'+ '\r\n' +
'    win_chocolatey:'+ '\r\n' +
'      name: veeam-agent'+ '\r\n' +
'      state: present'+ '\r\n' +
'      version: 5.0.0.4301'+ '\r\n'+

'- hosts: veeamserver'+ '\r\n'+
'  gather_facts: no'+ '\r\n'+
'  tasks:'+ '\r\n'+
'  - name: Install the TFTP Client'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: TFTP-Client'+ '\r\n'+
'      state: present'+ '\r\n'+
'  - name: Install IIS web server'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: Web-Server'+ '\r\n'+
'      state: present'+ '\r\n'+
'      include_sub_features: yes'+ '\r\n'+
'      include_management_tools: yes'+ '\r\n'+
'    register: win_feature'+ '\r\n'+
'  - name: Install the AD-DS services'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: AD-Domain-Services'+ '\r\n'+
'      state: present'+ '\r\n'+
'      include_sub_features: yes'+ '\r\n'+
'      include_management_tools: yes'+ '\r\n'+
'    register: win_feature'+ '\r\n'+
'  - name: Reboot if necessary'+ '\r\n'+
'    win_reboot:'+ '\r\n'+
'    when: win_feature.reboot_required'+ '\r\n'+
'  - name: Ensure veeam-backup-and-replication-server installed'+ '\r\n'+
'    win_chocolatey:'+ '\r\n'+
'      name: veeam-backup-and-replication-console'+ '\r\n'+
'      state: present'+ '\r\n'+
'      version: 11.0.0.837'+ '\r\n'

        
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'win.yaml';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }    

    let saveFile_ansible_kaspersky = () => {
    let data = 
'---'+ '\r\n'+
'- hosts: kasperskyserver'+ '\r\n'+
'  gather_facts: True'+ '\r\n'+
'  become_method: runas'+ '\r\n'+
'  vars:'+ '\r\n'+
'   sql_instance_name: iskander'+ '\r\n'+
'  tasks:'+ '\r\n'+
'  - name : Copy kaspersky server packages'+ '\r\n'+
'    win_copy:'+ '\r\n'+
'      src: kaspersky/'+ '\r\n'+
'      dest: C:/kaspersky'+ '\r\n'+
'  - debug: var=hostvars[inventory_hostname]'+ '\r\n'+
'  - name: create a directory for installer download'+ '\r\n'+
'    win_file: '+ '\r\n'+

'      path: c:/sql'+ '\r\n'+
'      state: directory'+ '\r\n'+

'  - name: create a directory for installer extraction'+ '\r\n'+
'    win_file: '+ '\r\n'+
'      path: c:/sql/installer'+ '\r\n'+
'      state: directory'+ '\r\n'+

'  - name: create the configuration file'+ '\r\n'+
'    win_template: '+ '\r\n'+
'      src: sql_conf.ini.j2'+ '\r\n'+
'      dest: c:/sql/sql_conf.ini'+ '\r\n'+

'  - name: a pre requisite of sql net-framework-35'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: NET-Framework-Core'+ '\r\n'+
'      state: present'+ '\r\n'+

'  - name: check downloaded file exists'+ '\r\n'+
'    win_stat:'+ '\r\n'+
'      path: c:/sql/sql_installer.exe'+ '\r\n'+
'    register: installer_file'+ '\r\n'+

'  - name: get the installer'+ '\r\n'+
'    win_get_url:'+ '\r\n'+
'      url: "http://download.microsoft.com/download/E/A/E/EAE6F7FC-767A-4038-A954-49B8B05D04EB/ExpressAndTools%2064BIT/SQLEXPRWT_x64_ENU.exe"'+ '\r\n'+
'      dest: "c:/sql/sql_installer.exe"'+ '\r\n'+
'    when: not installer_file.stat.exists'+ '\r\n'+
 
'  - name: extract the installer'+ '\r\n'+
'    win_command: c:/sql/sql_installer.exe /q /x:c:/sql/installer'+ '\r\n'+
'    args:'+ '\r\n'+
'      chdir: c:/sql'+ '\r\n'+
'      creates: c:/sql/installer/setup.exe'+ '\r\n'+

'#   - name: Install the database'+ '\r\n'+
'#     win_command: c:/sql/installer/setup.exe /configurationfile=c:/sql/sql_conf.ini'+ '\r\n'+
'#     args:'+ '\r\n'+
'#       chdir: c:/sql'+ '\r\n'+
'#     become: yes'+ '\r\n'+
'#     become_user: iskander'+ '\r\n'+
   
'  - name: Add or update registry for ip port'+ '\r\n'+
'    win_regedit:'+ '\r\n'+
'        path: "HKLM:/Software/Microsoft/Microsoft SQL Server/MSSQL12.{{ sql_instance_name }}/MSSQLServer/SuperSocketNetLib/Tcp/IPAll"'+ '\r\n'+
'        name: TcpPort'+ '\r\n'+
'        data: 1433'+ '\r\n'+
'    register: win_reg'+ '\r\n'+

'  - name: Restart a service'+ '\r\n'+
'    win_service:'+ '\r\n'+
'      name: "MSSQL${{ sql_instance_name }}"'+ '\r\n'+
'      force_dependent_services: yes'+ '\r\n'+
'      state: restarted'+ '\r\n'+
'    when: win_reg.changed'+ '\r\n'+

'#  - name: install kaspersky security center administration server'+ '\r\n'+
'#    win_package: '+ '\r\n'+
'#      path: c:\kaspersky\setup.exe'+ '\r\n'+
'#      product_id: 7DD95802-9882-11CF-9FA9-00AA006C42C4'+ '\r\n'+
'#      arguments: /s /norestart /vEULA=1 /vPRIVACYPOLICY=1 /vINSTALLATIONMODETYPE=Standard /vNETRANGETYPE=NRT_1_100 '+ '\r\n'+
'#                  /vSERVERACCOUNTNAME=kasperskyserver\iskander /vSERVERACCOUNTPWD=aYxBUahnU0EsSiV3NkYT '+ '\r\n'+
'#                  /vDBTYPE=MSSQL /vMSSQLSERVERNAME=kasperskyserver\BENZ /vMSSQLDBNAME=KAV /vMSSQLAUTHTYPE=Windows'+ '\r\n'+ 
'#                  /vMSSQLACCOUNTNAME=kasperskyserver\iskander /vMSSQLACCOUNTPWD=aYxBUahnU0EsSiV3NkYT'+ '\r\n'+
'#      state: present'+ '\r\n'+

 
'- hosts: kasperskyagent'+ '\r\n'+
'  gather_facts: True'+ '\r\n'+
'  become_method: runas'+ '\r\n'+
'  tasks: '+ '\r\n'+
'  - name : Copy kaspersky security endpoint packages'+ '\r\n'+
'    win_copy:'+ '\r\n'+
'      src: ksa/'+ '\r\n'+
'      dest: C:/ksa'+ '\r\n'+
    
'  - name: Install kaspersky security endpoint'+ '\r\n'+
'    win_command: Powershell.exe msiexec /i C:\ksa\kes_win.msi EULA=1 PRIVACYPOLICY=1 KSN=1 KLLOGIN=Admin KLPASSWD=Admin /qn '+ '\r\n'

        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'win.yaml';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }    

    let saveFile_ansible_huawei = () => {
    let data = 
'---'+ '\r\n'+
'- hosts: huaweilab'+ '\r\n'+
'  gather_facts: no'+ '\r\n'+
'  tasks:'+ '\r\n'+
'  - name: Install the TFTP Client'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: TFTP-Client'+ '\r\n'+
'      state: present'+ '\r\n'+
'  - name: Install IIS web server'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: Web-Server'+ '\r\n'+
'      state: present'+ '\r\n'+
'      include_sub_features: yes'+ '\r\n'+
'      include_management_tools: yes'+ '\r\n'+
'    register: win_feature'+ '\r\n'+
'  - name: Install the AD-DS services'+ '\r\n'+
'    win_feature:'+ '\r\n'+
'      name: AD-Domain-Services'+ '\r\n'+
'      state: present'+ '\r\n'+
'      include_sub_features: yes'+ '\r\n'+
'      include_management_tools: yes'+ '\r\n'+
'    register: win_feature'+ '\r\n'+
'  - name: Reboot if necessary'+ '\r\n'+
'    win_reboot:'+ '\r\n'+
'    when: win_feature.reboot_required'+ '\r\n'+
'  - name : Copy huawei lab packages'+ '\r\n'+
'    win_copy:'+ '\r\n'+
'      src: /ansible/huawei/Demo_for_OceanStor_DeviceManager_2800_V500R007C10.exe'+ '\r\n'+
'      dest: C:/huawei/'+ '\r\n'+
'  - name: Ensure googlechrome installed'+ '\r\n'+
'    win_chocolatey:'+ '\r\n'+
'      name: googlechrome'+ '\r\n'+
'      state: present'+ '\r\n'+
'      version: 91.0.4472.124'+ '\r\n'+
'  - name: Install Huawei Device Manager'+ '\r\n'+
'    win_command: C:/huawei/Demo_for_OceanStor_DeviceManager_2800_V500R007C10.exe /VERYSILENT /SUPPRESSMSGBOXES /NORESTART /SP-'+ '\r\n'+
'    async: 45'+ '\r\n'+
'    poll: 0'+ '\r\n'
        
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'win.yaml';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

            newLink.click(); 
    }    


    let saveFile_ansible_inventory = () => {
    let data = 

'[win]'+ '\r\n' +
'vm_address_goes_here'+ '\r\n' +

'[win:vars]'+ '\r\n' +
'ansible_user= username_goes_here'+ '\r\n' +
'ansible_password= password_goes_here'+ '\r\n' +
'ansible_connection=winrm'+ '\r\n' +
'ansible_port= 5985'+ '\r\n' +
'ansible_winrm_server_cert_validation=ignore'+ '\r\n' 

        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'hosts';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }
    
       newLink.click(); 
    }    

</script>


</body>
</html>