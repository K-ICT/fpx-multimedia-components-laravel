<?php
$filePath = app_path() .'/../vendor/kict/fpx_multimedia_components_laravel/src/resources/views/components/images/FPX.png';

if(!\File::exists($filePath)) {
    $filePath = app_path() .'/../packages/kict/fpx_multimedia_components_laravel/src/resources/views/components/images/FPX.png';
}

# Read image path, convert to base64 encoding.
$imageData = base64_encode(file_get_contents($filePath));

# Format and echo the image SRC: data:{mime};base64,{data};
echo 'data: '.mime_content_type($filePath).';base64,'.$imageData;
