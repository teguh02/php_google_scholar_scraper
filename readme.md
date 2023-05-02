# PHP Google Scholar Scraper
Implement PHP scraper technique using simple_html_dom library to scrap google scholar results

# How to Use
```php
<?php
// import the class
include_once __DIR__ . '/scraper.php';

// Get scholar data
$scraper = Scraper::query([
    'hl' => 'id',
    'q' => 'Rancang Bangun Pembuatan Game'
])->get();

echo json_encode($scraper);
```

or you can see <code>index.php</code> file