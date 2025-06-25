<?php
function simpleMarkdownToHtml($md) {
    $lines = explode("\n", $md);
    $html = '';
    $inList = false;
    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '') {
            if ($inList) {
                $html .= '</ul>';
                $inList = false;
            }
            continue;
        }
        // Listenpunkte
        if (strpos($trimmed, '- ') === 0 || strpos($trimmed, '* ') === 0) {
            if (!$inList) {
                $html .= '<ul>';
                $inList = true;
            }
            $item = substr($trimmed, 2);
            $item = htmlspecialchars($item);
            // Links im Listeneintrag
            $item = preg_replace_callback('/\[([^\]]+)\]\(([^\)]+)\)/', function($m) {
                return '<a href="' . htmlspecialchars($m[2]) . '">' . htmlspecialchars($m[1]) . '</a>';
            }, $item);
            $html .= '<li>' . $item . '</li>';
            continue;
        } else if ($inList) {
            $html .= '</ul>';
            $inList = false;
        }
        // Überschriften
        if (strpos($trimmed, '### ') === 0) {
            $content = htmlspecialchars(substr($trimmed, 4));
            // Links in Überschriften
            $content = preg_replace_callback('/\[([^\]]+)\]\(([^\)]+)\)/', function($m) {
                return '<a href="' . htmlspecialchars($m[2]) . '">' . htmlspecialchars($m[1]) . '</a>';
            }, $content);
            $html .= '<h3>' . $content . '</h3>';
        } elseif (strpos($trimmed, '## ') === 0) {
            $content = htmlspecialchars(substr($trimmed, 3));
            $content = preg_replace_callback('/\[([^\]]+)\]\(([^\)]+)\)/', function($m) {
                return '<a href="' . htmlspecialchars($m[2]) . '">' . htmlspecialchars($m[1]) . '</a>';
            }, $content);
            $html .= '<h2>' . $content . '</h2>';
        } elseif (strpos($trimmed, '# ') === 0) {
            $content = htmlspecialchars(substr($trimmed, 2));
            $content = preg_replace_callback('/\[([^\]]+)\]\(([^\)]+)\)/', function($m) {
                return '<a href="' . htmlspecialchars($m[2]) . '">' . htmlspecialchars($m[1]) . '</a>';
            }, $content);
            $html .= '<h1>' . $content . '</h1>';
        } else {
            $content = htmlspecialchars($trimmed);
            // Links im Absatz
            $content = preg_replace_callback('/\[([^\]]+)\]\(([^\)]+)\)/', function($m) {
                return '<a href="' . htmlspecialchars($m[2]) . '">' . htmlspecialchars($m[1]) . '</a>';
            }, $content);
            $html .= '<p>' . $content . '</p>';
        }
    }
    if ($inList) {
        $html .= '</ul>';
    }
    return $html;
}

$srcDir = __DIR__ . '/src';
$bilder = [];
$i = 1;
while (file_exists("$srcDir/$i.jpg")) {
    $bild = [
        'img' => "src/$i.jpg",
        'md' => null
    ];
    if (file_exists("$srcDir/$i.md")) {
        $mdText = file_get_contents("$srcDir/$i.md");
        $bild['md'] = simpleMarkdownToHtml($mdText);
    }
    $bilder[] = $bild;
    $i++;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilder nachladen (PHP)</title>
    <style>
        html {
            margin: 0;
            padding: 0;
        }
        #container {
            font-size: 1rem;
            font-weight: bold;
            margin: 2rem;
        }
        body {
            background-color: #000;
            color: #fff;
        }
        #images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100vw;
        }
        .img-block {
            margin: 10px;
            text-align: center;
        }
        .img-block img {
            width: 200px;
            display: block;
            margin: 0 auto 10px auto;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Portfolio von default in</h1>
        <p>
            default ist ein Künstler, der sich mit Graustufen beschäftigt.
        </p>
    </div>
    <div id="images">
        <?php foreach ($bilder as $bild): ?>
            <div class="img-block">
                <img src="<?= htmlspecialchars($bild['img']) ?>" alt="Bild">
                <?php if ($bild['md']): ?>
                    <div><?= $bild['md'] ?></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>