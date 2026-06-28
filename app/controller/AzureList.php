<?php

namespace app\controller;

use think\helper\Str;

class AzureList
{
    public static function images()
    {
        // az vm image list --publisher Canonical --offer UbuntuServer --all --output table
        // az vm image list --publisher Debian --offer debian-12 --all --output table
        // az vm image list --publisher almalinux --all --output table
        // az vm image list --publisher erockyenterprisesoftwarefoundationinc1653071250513 --all --output table
        // az vm image list --publisher MicrosoftWindowsServer --all --output table
        // az vm image list --publisher MicrosoftWindowsDesktop --offer windows-11 --all --output table

        return [
            // Debian series
            'Debian_12' => [
                'display' => 'Debian 12 (gen2)',
                'sku' => '12-gen2',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-12',
            ],
            'Debian_12_gen1' => [
                'display' => 'Debian 12',
                'sku' => '12',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-12',
            ],
            'Debian_11' => [
                'display' => 'Debian 11 (gen2)',
                'sku' => '11-gen2',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-11',
            ],
            'Debian_11_gen1' => [
                'display' => 'Debian 11',
                'sku' => '11',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-11',
            ],
            'Debian_10' => [
                'display' => 'Debian 10 (gen2)',
                'sku' => '10-gen2',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-10',
            ],
            'Debian_10_gen1' => [
                'display' => 'Debian 10',
                'sku' => '10',
                'publisher' => 'Debian',
                'version' => 'latest',
                'offer' => 'debian-10',
            ],
            // Ubuntu series
            'Ubuntu_24_04' => [
                'display' => 'Ubuntu 24.04 LTS (gen2)',
                'sku' => 'server-gen2',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => 'ubuntu-24_04-lts',
            ],
            'Ubuntu_24_04_gen1' => [
                'display' => 'Ubuntu 24.04 LTS',
                'sku' => 'server',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => 'ubuntu-24_04-lts',
            ],
            'Ubuntu_22_04' => [
                'display' => 'Ubuntu 22.04 LTS (gen2)',
                'sku' => '22_04-lts-gen2',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => '0001-com-ubuntu-server-jammy',
            ],
            'Ubuntu_22_04_gen1' => [
                'display' => 'Ubuntu 22.04 LTS',
                'sku' => '22_04-lts',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => '0001-com-ubuntu-server-jammy',
            ],
            'Ubuntu_20_04' => [
                'display' => 'Ubuntu 20.04 LTS (gen2)',
                'sku' => '20_04-lts-gen2',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => '0001-com-ubuntu-server-focal',
            ],
            'Ubuntu_20_04_gen1' => [
                'display' => 'Ubuntu 20.04 LTS',
                'sku' => '20_04-lts',
                'publisher' => 'Canonical',
                'version' => 'latest',
                'offer' => '0001-com-ubuntu-server-focal',
            ],
            // AlmaLinux series (CentOS replacement)
            'AlmaLinux_9' => [
                'display' => 'AlmaLinux 9 (gen2)',
                'sku' => '9-gen2',
                'publisher' => 'almalinux',
                'version' => 'latest',
                'offer' => 'almalinux-x86_64',
            ],
            'AlmaLinux_9_gen1' => [
                'display' => 'AlmaLinux 9',
                'sku' => '9_1',
                'publisher' => 'almalinux',
                'version' => 'latest',
                'offer' => 'almalinux-x86_64',
            ],
            'AlmaLinux_8' => [
                'display' => 'AlmaLinux 8 (gen2)',
                'sku' => '8-gen2',
                'publisher' => 'almalinux',
                'version' => 'latest',
                'offer' => 'almalinux',
            ],
            'AlmaLinux_8_gen1' => [
                'display' => 'AlmaLinux 8',
                'sku' => '8_7',
                'publisher' => 'almalinux',
                'version' => 'latest',
                'offer' => 'almalinux',
            ],
            // Rocky Linux series (CentOS replacement)
            'RockyLinux_9' => [
                'display' => 'Rocky Linux 9 (gen2)',
                'sku' => '9-gen2',
                'publisher' => 'erockyenterprisesoftwarefoundationinc1653071250513',
                'version' => 'latest',
                'offer' => 'rockylinux-x86_64',
            ],
            'RockyLinux_9_gen1' => [
                'display' => 'Rocky Linux 9',
                'sku' => '9',
                'publisher' => 'erockyenterprisesoftwarefoundationinc1653071250513',
                'version' => 'latest',
                'offer' => 'rockylinux-x86_64',
            ],
            'RockyLinux_8' => [
                'display' => 'Rocky Linux 8 (gen2)',
                'sku' => '8-gen2',
                'publisher' => 'erockyenterprisesoftwarefoundationinc1653071250513',
                'version' => 'latest',
                'offer' => 'rockylinux',
            ],
            'RockyLinux_8_gen1' => [
                'display' => 'Rocky Linux 8',
                'sku' => '8_9',
                'publisher' => 'erockyenterprisesoftwarefoundationinc1653071250513',
                'version' => 'latest',
                'offer' => 'rockylinux',
            ],
            // WinData series
            'WinData_2025' => [
                'display' => 'Windows Server 2025 Datacenter',
                'sku' => '2025-Datacenter-smalldisk',
                'publisher' => 'MicrosoftWindowsServer',
                'version' => 'latest',
                'offer' => 'WindowsServer',
            ],
            'WinData_2022' => [
                'display' => 'Windows Server 2022 Datacenter',
                'sku' => '2022-Datacenter-smalldisk',
                'publisher' => 'MicrosoftWindowsServer',
                'version' => 'latest',
                'offer' => 'WindowsServer',
            ],
            'WinData_2019' => [
                'display' => 'Windows Server 2019 Datacenter',
                'sku' => '2019-Datacenter-smalldisk',
                'publisher' => 'MicrosoftWindowsServer',
                'version' => 'latest',
                'offer' => 'WindowsServer',
            ],
            'WinData_2016' => [
                'display' => 'Windows Server 2016 Datacenter',
                'sku' => '2016-Datacenter-smalldisk',
                'publisher' => 'MicrosoftWindowsServer',
                'version' => 'latest',
                'offer' => 'WindowsServer',
            ],
            // WinDesk series
            'WinDesk_11_24H2' => [
                'display' => 'Windows 11 24H2 中文版',
                'sku' => 'win11-24h2-pro-zh-cn',
                'publisher' => 'MicrosoftWindowsDesktop',
                'version' => 'latest',
                'offer' => 'Windows-11',
            ],
            'WinDesk_11_23H2' => [
                'display' => 'Windows 11 23H2 中文版',
                'sku' => 'win11-23h2-pro-zh-cn',
                'publisher' => 'MicrosoftWindowsDesktop',
                'version' => 'latest',
                'offer' => 'Windows-11',
            ],
            'WinDesk_10_22H2' => [
                'display' => 'Windows 10 22H2 中文版 (gen2)',
                'sku' => 'win10-22h2-pro-zh-cn-g2',
                'publisher' => 'MicrosoftWindowsDesktop',
                'version' => 'latest',
                'offer' => 'Windows-10',
            ],
        ];
    }

    public static function sizes()
    {
        // https://azureprice.net

        return [
            'Standard_B1ls' => [
                'cpu' => '1',
                'memory' => '0.5',
                'cost' => 0.0052 * 720,
                'acc' => false,
            ],
            'Standard_B1s' => [
                'cpu' => '1',
                'memory' => '1',
                'cost' => 0.0104 * 720,
                'acc' => false,
            ],
            'Standard_B2ats_v2' => [
                'cpu' => '2',
                'memory' => '1',
                'cost' => 0.0094 * 720,
                'acc' => false,
            ],
            'Standard_B2pts_v2' => [
                'cpu' => '2',
                'memory' => '1',
                'cost' => 0.0094 * 720,
                'acc' => false,
            ],
            'Standard_B1ms' => [
                'cpu' => '1',
                'memory' => '2',
                'cost' => 0.0207 * 720,
                'acc' => false,
            ],
            'Standard_B2s' => [
                'cpu' => '2',
                'memory' => '4',
                'cost' => 0.0416 * 720,
                'acc' => false,
            ],
            'Standard_B2ms' => [
                'cpu' => '2',
                'memory' => '8',
                'cost' => 0.0832 * 720,
                'acc' => false,
            ],
            'Standard_B4ms' => [
                'cpu' => '4',
                'memory' => '16',
                'cost' => 0.1660 * 720,
                'acc' => false,
            ],
            'Standard_F1s' => [
                'cpu' => '1',
                'memory' => '2',
                'cost' => 0.0497 * 720,
                'acc' => true,
            ],
            'Standard_F2s_v2' => [
                'cpu' => '2',
                'memory' => '4',
                'cost' => 0.0846 * 720,
                'acc' => true,
            ],
            'Standard_F4s_v2' => [
                'cpu' => '4',
                'memory' => '8',
                'cost' => 0.1690 * 720,
                'acc' => true,
            ],
            'Standard_F8s_v2' => [
                'cpu' => '8',
                'memory' => '16',
                'cost' => 0.3380 * 720,
                'acc' => true,
            ],
            'Standard_DS1_v2' => [
                'cpu' => '1',
                'memory' => '3.5',
                'cost' => 0.0730 * 720,
                'acc' => true,
            ],
            'Standard_DS2_v2' => [
                'cpu' => '2',
                'memory' => '7',
                'cost' => 0.1460 * 720,
                'acc' => true,
            ],
            'Standard_DS3_v2' => [
                'cpu' => '4',
                'memory' => '14',
                'cost' => 0.2930 * 720,
                'acc' => true,
            ],
            'Standard_D1' => [
                'cpu' => '1',
                'memory' => '3.5',
                'cost' => 0.0770 * 720,
                'acc' => false,
            ],
            'Standard_D2' => [
                'cpu' => '2',
                'memory' => '7',
                'cost' => 0.1540 * 720,
                'acc' => false,
            ],
            'Standard_D11' => [
                'cpu' => '2',
                'memory' => '14',
                'cost' => 0.1930 * 720,
                'acc' => false,
            ],
        ];
    }

    public static function locations()
    {
        // https://learn.microsoft.com/en-us/azure/reliability/availability-zones-region-support

        return [
            // 亚太
            'eastasia' => '东亚 中国香港',
            'southeastasia' => '东南亚 新加坡',
            'japaneast' => '日本东部 东京',
            'japanwest' => '日本西部 大阪',
            'koreacentral' => '韩国中部 首尔',
            'koreasouth' => '韩国南部 釜山',
            'taiwannorth' => '台湾北部 台北',
            'newzealandnorth' => '新西兰北部 奥克兰',
            // 英国
            // 美国
            'eastus' => '美国东部 弗吉尼亚',
            'eastus2' => '美国东部2 弗吉尼亚',
            'westus' => '美国西部 加利福尼亚',
            'westus2' => '美国西部2 华盛顿',
            'westus3' => '美国西部3 凤凰城',
            'centralus' => '美国中部 爱荷华州',
            'southcentralus' => '美国中南部 德克萨斯州',
            'northcentralus' => '美国中北部 伊利诺伊州',
            'westcentralus' => '美国中西部 怀俄明州',
            'mexicocentral' => '墨西哥中部 圣路易斯波托西',
            // 澳大利亚
            'australiaeast' => '澳大利亚东部 新南威尔士州',
            'australiasoutheast' => '澳大利亚东南部 维多利亚',
            'australiacentral' => '澳大利亚中部 堪培拉',
            // 加拿大
            'canadacentral' => '加拿大中部 多伦多',
            'canadaeast' => '加拿大东部 魁北克',
            // 欧洲
            'westeurope' => '西欧 荷兰',
            'northeurope' => '北欧 爱尔兰',
            'germanywestcentral' => '德国中西部 法兰克福',
            'francecentral' => '法国中部 巴黎',
            'swedencentral' => '瑞典中部 耶夫勒',
            'norwayeast' => '挪威东部 挪威',
            'switzerlandnorth' => '瑞士北部 苏黎世',
            'italynorth' => '意大利北部 米兰',
            'polandcentral' => '波兰中部 华沙',
            'spaincentral' => '西班牙中部 马德里',
            'uksouth' => '英国南部 伦敦',
            // 中东
            'uaenorth' => '阿联酋北部 迪拜',
            'israelcentral' => '以色列中部 特拉维夫',
            'qatarcentral' => '卡塔尔中部 多哈',
            // 印度
            'centralindia' => '印度中部 浦那',
            'southindia' => '印度南部 钦奈',
            'westindia' => '印度西部 孟买',
            'jioindiawest' => '印度西部 Jio 贾姆纳格尔',
            // 其他
            'brazilsouth' => '巴西南部 圣保罗州',
            'southafricanorth' => '南非北部 约翰内斯堡',
        ];
    }

    public static function defaultPersonalise()
    {
        $user = Str::random($length = 8);
        $user = Str::lower($user);

        $personalise = [
            'vm_size' => 'Standard_B2s',
            'vm_image' => 'Debian_12',
            'vm_location' => 'eastasia',
            'vm_disk_size' => '32',
            'vm_default_script' => '',
            'vm_default_identity' => $user,
            'vm_default_credentials' => 'Azure123456789',
        ];

        return json_encode($personalise);
    }

    public static function diskSizes()
    {
        return [
            '32',
            '64',
            '128',
            '256',
            '512',
            '1024',
            '2048',
            '4095',
        ];
    }

    public static function diskTiers()
    {
        // https://azure.microsoft.com/en-us/pricing/details/managed-disks/

        return [
            'P4' => [
                'diskMBpsReadWrite' => 25,
                'diskIOPSReadWrite' => 120,
            ],
            'P6' => [
                'diskMBpsReadWrite' => 50,
                'diskIOPSReadWrite' => 240,
            ],
            'P10' => [
                'diskMBpsReadWrite' => 100,
                'diskIOPSReadWrite' => 500,
            ],
            'P15' => [
                'diskMBpsReadWrite' => 125,
                'diskIOPSReadWrite' => 1100,
            ],
            'P20' => [
                'diskMBpsReadWrite' => 250,
                'diskIOPSReadWrite' => 2300,
            ],
            'P30' => [
                'diskMBpsReadWrite' => 250,
                'diskIOPSReadWrite' => 5000,
            ],
            'P40' => [
                'diskMBpsReadWrite' => 250,
                'diskIOPSReadWrite' => 7500,
            ],
            'P50' => [
                'diskMBpsReadWrite' => 250,
                'diskIOPSReadWrite' => 7500,
            ],
        ];
    }
}
