<?php
$menu = [
    [
        'title' => 'Home',
        'link' => '/',
    ],
    [
        'title' => 'Our services',
        'link' => '/our-services',
        'children' => [
            [
            'title' => 'CRM',
            'link' => '/our-services/crm',
            'children' => [
                [
                    'title' => 'Bitrix24',
                    'link' => '/our-services/crm/bitrix24',
                ],
                [
                    'title' => 'AmoCRM',
                    'link' => '/our-services/crm/amo-crm',
                ],
                [
                    'title' => 'YClient',
                    'link' => '/our-services/crm/y-client',
                ],
            ],
            ],
            [
                'title' => 'CRM Marketing',
                'link' => '/our-services/crm-marketing',
            ],
            [
                'title' => 'Call Tracking',
                'link' => '/our-services/call-tracking',
            ],
            [
                'title' => 'IP-Telephony',
                'link' => '/our-services/ip-telephony',
            ],
        ],
    ],
    [
        'title' => 'Prices',
        'link' => '/prices',
        'children' => [
          [
              'title' => 'Introduction',
              'link' => '/prices/introduction',
          ],
           [
              'title' => 'Support',
              'link' => '/prices/support',
          ],
        ]
    ],
    [
        'title' => 'About Us',
        'link' => '/about-us',
    ],
    [
        'title' => 'Contacts',
        'link' => '/contacts',
    ],
    [
        'title' => 'Join Us',
        'link' => '/join-us',
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($menu); $i++) : ?>
        <?php if (array_key_exists('children', $menu[$i])) : ?>
            <li>
                <a href="<? $menu[$i] ['link'] ?>"><?= $menu[$i] ['title'] ?> </a>
                <ul>
                    <?php for($k = 0; $k < count($menu[$i] ['children']); $k++) : ?>
                        <li>
                            <a href="<?= $menu[$i] ['children'] [$k] ['link'] ?>">
                                <?= $menu[$i] ['children'] [$k] ['title'] ?>
                            </a>
                        </li>
                    <?php endfor ?>
                </ul>
            </li>
        <?php else : ?>
            <li><a href="<?= $menu[$i]['link'] ?>"><?= $menu[$i]['title'] ?></a></li>
        <?php endif ?>
        <?php endfor ?>
    </ul>
</body>
</html>