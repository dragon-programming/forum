<?php
$products = [
    [
        'id' => 1,
        'name' => 'Scanfrost Gas Cooker 4 Burners Grey-ck5400ng',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 35500,
        'featured_img' => 'dgn-contants\dgn-uploads\image\_1564135663.jpg'
    ],
    [
        'id' => 2,
        'name' => 'HP 15 Laptop Intel Celeron N3060 4gb Ram 500gb Hdd Freedos - Black',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 80000,
        'featured_img' => 'dgn-contants/dgn-uploads/image/118566_1540808266.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Infinix Note 4 Pro Black- 5.7" - 3GB, 32GB ROM',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 37500,
        'featured_img' => 'dgn-contants/dgn-uploads/image/_1562000601.jpg'
    ],
    [
        'id' => 4,
        'name' => 'HP 15 Laptop Intel Celeron N3060 4gb Ram 500gb Hdd Freedos - Black',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 80000,
        'featured_img' => 'dgn-contants/dgn-uploads/image/118566_1540808266.jpg'
    ],
    [
        'id' => 5,
        'name' => 'HP 15 Laptop Intel Celeron N3060 4gb Ram 500gb Hdd Freedos - Black',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 80000,
        'featured_img' => 'dgn-contants/dgn-uploads/image/118566_1540808266.jpg'
    ],
    [
        'id' => 6,
        'name' => 'HP 15 Laptop Intel Celeron N3060 4gb Ram 500gb Hdd Freedos - Black',
        'description' => 'The affordable HP Notebook 15 Intel Celeron is armed with a 0.3MP webcam and inbuilt microphone. One can make use of video calling apps such as SKYPE, Hangouts etc. On the storage ground, the device houses a 500GB SATA hard disk which revolves at a speed of 5,400RPM. Touchpad with multi-touch gestures support, standard keyboard and DVD RW Drive.

        TheHP Notebook 15 Intel Celeron laptop comes in an impactfull range and packs in good battery backup. The user can keep a backup of important data files using the DVD writer. The superior RAM drives the system in a steady manner. One can also expand the RAM for better multitasking.',
        'price' => 80000,
        'featured_img' => 'dgn-contants/dgn-uploads/image/118566_1540808266.jpg'
    ]
];

if (isset($_GET['action']) && $_GET['action'] === 'get_product') {
    
    foreach ($products as $product) {
        if (in_array($_GET['id'], $product)) { ?>
            <div>
                <img src="<?= $product['featured_img'] ?>" alt="" />
                <p>Name: <?= $product['name'] ?></p>
                <p>Description: <?= $product['description'] ?></p>
                <p>Price: ₦<?= number_format($product['price']) ?></p>
                
            </div>
        <?php }
    }

} else {
    echo 'Unknown action';
}
