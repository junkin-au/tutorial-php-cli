<?php
$profile = [
    'name' => 'junkin',
    'address' => '神奈川県',
];

// 三項演算子（省略）
$userName = $profile['name'] ?: '未登録';
echo $userName; // => junkin

$tel = $profile['tel'] ?: '未登録'; // => Warning: Undefined array key "tel" in /usr/src/myapp/ternary-operator.php on line 11
echo $tel; // => '未登録'

// Null 合体演算子
$address = $profile['address'] ?? '未登録';
echo $address; // => 神奈川県

$email = $profile['email'] ?? '未登録';
echo $email; // => '未登録'
