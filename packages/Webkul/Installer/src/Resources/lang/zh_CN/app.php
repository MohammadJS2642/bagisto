<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => '默認',
            ],

            'attribute-groups' => [
                'description'      => '描述',
                'general'          => '通用',
                'inventories'      => '庫存',
                'meta-description' => '元描述',
                'price'            => '價格',
                'settings'         => '設定',
                'shipping'         => '運送',
            ],

            'attributes' => [
                'brand'                => '品牌',
                'color'                => '顏色',
                'cost'                 => '成本',
                'description'          => '描述',
                'featured'             => '特色',
                'guest-checkout'       => '訪客結帳',
                'height'               => '高度',
                'length'               => '長度',
                'manage-stock'         => '庫存管理',
                'meta-description'     => '元描述',
                'meta-keywords'        => '元關鍵詞',
                'meta-title'           => '元標題',
                'name'                 => '名稱',
                'new'                  => '新品',
                'price'                => '價格',
                'product-number'       => '產品號',
                'short-description'    => '簡短描述',
                'size'                 => '尺寸',
                'sku'                  => 'SKU',
                'special-price'        => '特價',
                'special-price-from'   => '特價起始日期',
                'special-price-to'     => '特價結束日期',
                'status'               => '狀態',
                'tax-category'         => '稅收類別',
                'url-key'              => '網址關鍵字',
                'visible-individually' => '單獨顯示',
                'weight'               => '重量',
                'width'                => '寬度',
            ],

            'attribute-options' => [
                'black'  => '黑色',
                'green'  => '綠色',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => '紅色',
                's'      => 'S',
                'white'  => '白色',
                'xl'     => 'XL',
                'yellow' => '黃色',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => '根分類描述',
                'name'        => '根',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => '關於我們頁面內容',
                    'title'   => '關於我們',
                ],

                'contact-us' => [
                    'content' => '聯繫我們頁面內容',
                    'title'   => '聯繫我們',
                ],

                'customer-service' => [
                    'content' => '客戶服務頁面內容',
                    'title'   => '客戶服務',
                ],

                'payment-policy' => [
                    'content' => '付款政策頁面內容',
                    'title'   => '付款政策',
                ],

                'privacy-policy' => [
                    'content' => '隱私政策頁面內容',
                    'title'   => '隱私政策',
                ],

                'refund-policy' => [
                    'content' => '退款政策頁面內容',
                    'title'   => '退款政策',
                ],

                'return-policy' => [
                    'content' => '退貨政策頁面內容',
                    'title'   => '退貨政策',
                ],

                'shipping-policy' => [
                    'content' => '運送政策頁面內容',
                    'title'   => '運送政策',
                ],

                'terms-conditions' => [
                    'content' => '條款和條件頁面內容',
                    'title'   => '條款和條件',
                ],

                'terms-of-use' => [
                    'content' => '使用條款頁面內容',
                    'title'   => '使用條款',
                ],

                'whats-new' => [
                    'content' => '最新消息頁面內容',
                    'title'   => '最新消息',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'name'             => '默認',
                'meta-title'       => '演示商店',
                'meta-keywords'    => '演示商店元關鍵詞',
                'meta-description' => '演示商店元描述',
            ],

            'currencies' => [
                'AED' => '阿联酋迪拉姆',
                'ARS' => '阿根廷比索',
                'AUD' => '澳大利亚元',
                'BDT' => '孟加拉塔卡',
                'BRL' => '巴西雷亚尔',
                'CAD' => '加拿大元',
                'CHF' => '瑞士法郎',
                'CLP' => '智利比索',
                'CNY' => '人民币',
                'COP' => '哥伦比亚比索',
                'CZK' => '捷克克朗',
                'DKK' => '丹麦克朗',
                'DZD' => '阿尔及利亚第纳尔',
                'EGP' => '埃及镑',
                'EUR' => '欧元',
                'FJD' => '斐济元',
                'GBP' => '英镑',
                'HKD' => '港元',
                'HUF' => '匈牙利福林',
                'IDR' => '印尼盾',
                'ILS' => '以色列新谢克尔',
                'INR' => '印度卢比',
                'JOD' => '约旦第纳尔',
                'JPY' => '日元',
                'KRW' => '韩元',
                'KWD' => '科威特第纳尔',
                'KZT' => '哈萨克斯坦坚戈',
                'LBP' => '黎巴嫩镑',
                'LKR' => '斯里兰卡卢比',
                'LYD' => '利比亚第纳尔',
                'MAD' => '摩洛哥迪拉姆',
                'MUR' => '毛里求斯卢比',
                'MXN' => '墨西哥比索',
                'MYR' => '马来西亚林吉特',
                'NGN' => '尼日利亚奈拉',
                'NOK' => '挪威克朗',
                'NPR' => '尼泊尔卢比',
                'NZD' => '新西兰元',
                'OMR' => '阿曼里亚尔',
                'PAB' => '巴拿马巴波亚',
                'PEN' => '秘鲁新索尔',
                'PHP' => '菲律宾比索',
                'PKR' => '巴基斯坦卢比',
                'PLN' => '波兰兹罗提',
                'PYG' => '巴拉圭瓜拉尼',
                'QAR' => '卡塔尔里亚尔',
                'RON' => '罗马尼亚列伊',
                'RUB' => '俄罗斯卢布',
                'SAR' => '沙特里亚尔',
                'SEK' => '瑞典克朗',
                'SGD' => '新加坡元',
                'THB' => '泰铢',
                'TND' => '突尼斯第纳尔',
                'TRY' => '土耳其里拉',
                'TWD' => '新台币',
                'UAH' => '乌克兰格里夫纳',
                'USD' => '美元',
                'UZS' => '乌兹别克斯坦苏姆',
                'VEF' => '委内瑞拉玻利瓦尔',
                'VND' => '越南盾',
                'XAF' => '中非金融合作法郎',
                'XOF' => '西非金融合作法郎',
                'ZAR' => '南非兰特',
                'ZMW' => '赞比亚克瓦查',
            ],

            'locales' => [
                'ar'    => '阿拉伯語',
                'bn'    => '孟加拉語',
                'de'    => '德語',
                'en'    => '英語',
                'es'    => '西班牙語',
                'fa'    => '波斯語',
                'fr'    => '法語',
                'he'    => '希伯來語',
                'hi_IN' => '印度區區',
                'it'    => '意大利語',
                'ja'    => '日語',
                'nl'    => '荷蘭語',
                'pl'    => '波蘭語',
                'pt_BR' => '巴西葡萄牙語',
                'ru'    => '俄語',
                'sin'   => '僧伽羅語',
                'tr'    => '土耳其語',
                'uk'    => '烏克蘭語',
                'zh_CN' => '簡體中文',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general'   => '普通',
                'guest'     => '訪客',
                'wholesale' => '批發',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => '默認',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name' => '所有产品',

                    'options' => [
                        'title' => '所有产品',
                    ],
                ],

                'bold-collections' => [
                    'content' => [
                        'btn-title'   => '查看收藏',
                        'description' => '隆重推出我们大胆的新系列！通过大胆的设计和充满活力的宣言提升您的风格。探索引人注目的图案和大胆的色彩，重新定义您的衣柜。准备好拥抱非凡吧！',
                        'title'       => '准备好迎接我们全新的大胆系列吧！',
                    ],

                    'name' => '大胆系列',
                ],

                'categories-collections' => [
                    'name' => '类别 收藏',
                ],

                'featured-collections' => [
                    'name' => '特色收藏',

                    'options' => [
                        'title' => '特色产品',
                    ],
                ],

                'footer-links' => [
                    'name' => '页脚链接',

                    'options' => [
                        'about-us'         => '关于我们',
                        'contact-us'       => '联系我们',
                        'customer-service' => '客户服务',
                        'payment-policy'   => '付款政策',
                        'privacy-policy'   => '隐私政策',
                        'refund-policy'    => '退款政策',
                        'return-policy'    => '退货政策',
                        'shipping-policy'  => '运输政策',
                        'terms-conditions' => '条款及条件',
                        'terms-of-use'     => '使用条款',
                        'whats-new'        => '什么是新的',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => '我们的系列',
                        'sub-title-2' => '我们的系列',
                        'title'       => '游戏新增了我们的新内容！',
                    ],

                    'name' => '游戏容器',
                ],

                'image-carousel' => [
                    'name' => '图像轮播',

                    'sliders' => [
                        'title' => '为新系列做好准备',
                    ],
                ],

                'new-products' => [
                    'name' => '新产品',

                    'options' => [
                        'title' => '新产品',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => '第一份订单可享受高达 40% 的折扣 现在购买',
                    ],

                    'name' => '优惠资讯',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info'   => '所有主要信用卡均可免费使用 EMI',
                        'free-shipping-info'   => '所有订单均可享受免费送货',
                        'product-replace-info' => '可轻松更换产品！',
                        'time-support-info'    => '专门的 24/7 支持，通过聊天和电子邮件提供',
                    ],

                    'name' => '服务内容',

                    'title' => [
                        'emi-available'   => 'EMI 可用',
                        'free-shipping'   => '免费送货',
                        'product-replace' => '产品更换',
                        'time-support'    => '24/7 支持',
                    ],
                ],

                'top-collections'        => [
                    'content' => [
                        'sub-title-1' => '我们的系列',
                        'sub-title-2' => '我们的系列',
                        'sub-title-3' => '我们的系列',
                        'sub-title-4' => '我们的系列',
                        'sub-title-5' => '我们的系列',
                        'sub-title-6' => '我们的系列',
                        'title'       => '游戏新增了我们的新内容！',
                    ],

                    'name' => '热门收藏',
                ],
            ],
        ],

        'user' => [
            'roles' => [
                'description' => '该角色用户将拥有所有访问权限',
                'name'        => '行政人员',
            ],

            'users' => [
                'name' => '例子',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => '管理员',
                'bagisto'          => 'Bagisto',
                'confirm-password' => '确认密码',
                'email'            => '电子邮件',
                'email-address'    => 'admin@example.com',
                'password'         => '密码',
                'title'            => '创建管理员',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => '阿尔及利亚第纳尔 (DZD)',
                'allowed-currencies'          => '允许的货币',
                'allowed-locales'             => '允许的语言环境',
                'application-name'            => '应用程序名称',
                'argentine-peso'              => '阿根廷比索 (ARS)',
                'australian-dollar'           => '澳大利亚元 (AUD)',
                'bagisto'                     => 'Bagisto',
                'bangladeshi-taka'            => '孟加拉塔卡 (BDT)',
                'brazilian-real'              => '巴西雷亚尔 (BRL)',
                'british-pound-sterling'      => '英镑 (GBP)',
                'canadian-dollar'             => '加拿大元 (CAD)',
                'cfa-franc-bceao'             => 'CFA 法郎 BCEAO (XOF)',
                'cfa-franc-beac'              => 'CFA 法郎 BEAC (XAF)',
                'chilean-peso'                => '智利比索 (CLP)',
                'chinese-yuan'                => '人民币 (CNY)',
                'colombian-peso'              => '哥伦比亚比索 (COP)',
                'czech-koruna'                => '捷克克朗 (CZK)',
                'danish-krone'                => '丹麦克朗 (DKK)',
                'database-connection'         => '数据库连接',
                'database-hostname'           => '数据库主机名',
                'database-name'               => '数据库名称',
                'database-password'           => '数据库密码',
                'database-port'               => '数据库端口',
                'database-prefix'             => '数据库前缀',
                'database-username'           => '数据库用户名',
                'default-currency'            => '默认货币',
                'default-locale'              => '默认语言环境',
                'default-timezone'            => '默认时区',
                'default-url'                 => '默认网址',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => '埃及镑 (EGP)',
                'euro'                        => '欧元 (EUR)',
                'fijian-dollar'               => '斐济元 (FJD)',
                'hong-kong-dollar'            => '港元 (HKD)',
                'hungarian-forint'            => '匈牙利福林 (HUF)',
                'indian-rupee'                => '印度卢比 (INR)',
                'indonesian-rupiah'           => '印度尼西亚盾 (IDR)',
                'israeli-new-shekel'          => '以色列新谢克尔 (ILS)',
                'japanese-yen'                => '日元 (JPY)',
                'jordanian-dinar'             => '约旦第纳尔 (JOD)',
                'kazakhstani-tenge'           => '哈萨克斯坦坚戈 (KZT)',
                'kuwaiti-dinar'               => '科威特第纳尔 (KWD)',
                'lebanese-pound'              => '黎巴嫩镑 (LBP)',
                'libyan-dinar'                => '利比亚第纳尔 (LYD)',
                'malaysian-ringgit'           => '马来西亚林吉特 (MYR)',
                'mauritian-rupee'             => '毛里求斯卢比 (MUR)',
                'mexican-peso'                => '墨西哥比索 (MXN)',
                'moroccan-dirham'             => '摩洛哥迪拉姆 (MAD)',
                'mysql'                       => 'MySQL',
                'nepalese-rupee'              => '尼泊尔卢比 (NPR)',
                'new-taiwan-dollar'           => '新台币 (TWD)',
                'new-zealand-dollar'          => '新西兰元 (NZD)',
                'nigerian-naira'              => '尼日利亚奈拉 (NGN)',
                'norwegian-krone'             => '挪威克朗 (NOK)',
                'omani-rial'                  => '阿曼里亚尔 (OMR)',
                'pakistani-rupee'             => '巴基斯坦卢比 (PKR)',
                'panamanian-balboa'           => '巴拿马巴尔博亚 (PAB)',
                'paraguayan-guarani'          => '巴拉圭瓜拉尼 (PYG)',
                'peruvian-nuevo-sol'          => '秘鲁新索尔 (PEN)',
                'pgsql'                       => 'PgSQL',
                'philippine-peso'             => '菲律宾比索 (PHP)',
                'polish-zloty'                => '波兰兹罗提 (PLN)',
                'qatari-rial'                 => '卡塔尔里亚尔 (QAR)',
                'romanian-leu'                => '罗马尼亚列伊 (RON)',
                'russian-ruble'               => '俄罗斯卢布 (RUB)',
                'saudi-riyal'                 => '沙特里亚尔 (SAR)',
                'select-timezone'             => '选择时区',
                'singapore-dollar'            => '新加坡元 (SGD)',
                'south-african-rand'          => '南非兰特 (ZAR)',
                'south-korean-won'            => '韩元 (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => '斯里兰卡卢比 (LKR)',
                'swedish-krona'               => '瑞典克朗 (SEK)',
                'swiss-franc'                 => '瑞士法郎 (CHF)',
                'thai-baht'                   => '泰铢 (THB)',
                'title'                       => '商店配置',
                'tunisian-dinar'              => '突尼斯第纳尔 (TND)',
                'turkish-lira'                => '土耳其里拉 (TRY)',
                'ukrainian-hryvnia'           => '乌克兰格里夫纳 (UAH)',
                'united-arab-emirates-dirham' => '阿联酋迪拉姆 (AED)',
                'united-states-dollar'        => '美元 (USD)',
                'uzbekistani-som'             => '乌兹别克斯坦苏姆 (UZS)',
                'venezuelan-bolívar'          => '委内瑞拉玻利瓦尔 (VEF)',
                'vietnamese-dong'             => '越南盾 (VND)',
                'warning-message'             => '警告！默认系统语言和默认货币设置是永久性的，无法再次更改。',
                'zambian-kwacha'              => '赞比亚克瓦查 (ZMW)',
            ],

            'installation-processing' => [
                'bagisto-info'     => '正在创建数据库表，这可能需要一些时间',
                'bagisto'          => 'Bagisto 安装',
                'title'            => '安装',
            ],

            'installation-completed' => [
                'admin-panel'                => '管理员面板',
                'bagisto-forums'             => 'Bagisto 论坛',
                'customer-panel'             => '客户面板',
                'explore-bagisto-extensions' => '探索 Bagisto 扩展',
                'title'                      => '安装已完成',
                'title-info'                 => 'Bagisto 已成功安装在您的系统上。',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => '创建数据库表',
                'install'                 => '安装',
                'install-info'            => 'Bagisto 安装信息',
                'install-info-button'     => '点击下面的按钮',
                'populate-database-table' => '填充数据库表',
                'start-installation'      => '开始安装',
                'title'                   => '准备安装',
            ],

            'start' => [
                'locale'        => '区域设置',
                'main'          => '开始',
                'select-locale' => '选择区域设置',
                'title'         => '您的 Bagisto 安装',
                'welcome-title' => '欢迎来到 Bagisto 2.0。',
            ],

            'server-requirements' => [
                'calendar'    => '日历',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => '文件信息',
                'filter'      => '过滤器',
                'gd'          => 'GD',
                'hash'        => '哈希',
                'intl'        => '国际化',
                'json'        => 'JSON',
                'mbstring'    => '多字节字符串',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'php'         => 'PHP',
                'php-version' => '8.1 或更高版本',
                'session'     => '会话',
                'title'       => '服务器要求',
                'tokenizer'   => '标记器',
                'xml'         => 'XML',
            ],

            'arabic'                   => '阿拉伯语',
            'back'                     => '返回',
            'bagisto'                  => 'Bagisto',
            'bagisto-info'             => '由 Webkul 社区共同开发的项目',
            'bagisto-logo'             => 'Bagisto Logo',
            'bengali'                  => '孟加拉语',
            'chinese'                  => '中文',
            'continue'                 => '继续',
            'dutch'                    => '荷兰语',
            'english'                  => '英语',
            'french'                   => '法语',
            'german'                   => '德语',
            'hebrew'                   => '希伯来语',
            'hindi'                    => '印地语',
            'installation-description' => 'Bagisto 安装通常涉及多个步骤。以下是 Bagisto 安装过程的一般概述：',
            'installation-info'        => '我们很高兴在这里见到你！',
            'installation-title'       => '欢迎安装 Bagisto',
            'italian'                  => '意大利语',
            'japanese'                 => '日语',
            'persian'                  => '波斯语',
            'polish'                   => '波兰语',
            'portuguese'               => '巴西葡萄牙语',
            'russian'                  => '俄语',
            'sinhala'                  => '僧伽罗语',
            'spanish'                  => '西班牙语',
            'title'                    => 'Bagisto 安装程序',
            'turkish'                  => '土耳其语',
            'ukrainian'                => '乌克兰语',
            'webkul'                   => 'Webkul',
        ],
    ],
];
