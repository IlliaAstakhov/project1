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

function menu (array $input){
    $menu = $input;
    $html = '<ul>';
    for($i = 0; $i < count($menu); $i++) {
        if (array_key_exists('children', $menu[$i])) {
            $html .= "<li>";
            $html .= "<a href='{$menu[$i]['link']}'>{$menu[$i]['title']}</a>";
            $html .= "<ul>";
            for($k = 0; $k < count($menu[$i]['children']); $k++) {
                $html .= "<li><a href='{$menu[$i]['children'][$k]['link']}'>{$menu[$i]['children'][$k]['title']}</a></li>";
            }
            $html .= "</ul>";
            $html .= "</li>";
        } else {
            $html .= "<li><a href='{$menu[$i]['link']}'>{$menu[$i]['title']}</a></li>";
        }
    }
    $html .= '</ul>';
    echo $html;
}

menu ($menu);