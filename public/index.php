<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../templates/');
$twig = new \Twig\Environment($loader, []);

$twig->display('page.html.twig', [
    'heading' => 'Lorem ipsum',
    'subheading' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
    'paragraphs' => ['Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque turpis, dignissim et imperdiet a, ultricies id ipsum. Sed vulputate metus dui, sit amet efficitur ante pharetra nec. Maecenas rhoncus lobortis porta. Donec mi purus, vulputate sed iaculis a, pharetra quis nunc. Mauris eu auctor leo. Fusce tincidunt, velit a condimentum convallis, lectus purus lobortis metus, sit amet rhoncus risus ante in nisi. Praesent viverra velit at leo ornare commodo. Nunc tortor massa, consequat suscipit facilisis et, congue vel urna. Curabitur feugiat ligula vitae interdum porttitor. Mauris aliquet tortor a egestas mattis. Donec sed dignissim massa. Morbi et maximus felis, quis iaculis tortor. Aliquam molestie rutrum facilisis. Suspendisse ullamcorper urna quis ornare gravida. In volutpat aliquet nibh, nec ullamcorper nisi maximus accumsan. Donec ut mauris nec erat faucibus scelerisque.', 'Donec et laoreet ex, vel posuere lorem. Nunc dapibus est elit, quis rhoncus lorem vestibulum nec. Vivamus nec placerat augue. Aliquam quis leo est. In pellentesque bibendum odio in rutrum. Integer et mauris condimentum, mollis tortor vel, convallis augue. Vivamus sollicitudin erat ullamcorper ligula blandit pellentesque. Phasellus ex quam, rutrum vel viverra vel, lacinia vitae lorem. Phasellus ut pellentesque sem, suscipit tristique ex. Pellentesque venenatis turpis ex, vitae imperdiet massa egestas id.'],
    'image' => '/assets/images/cat.jpg',
]);
