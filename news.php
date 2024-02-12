<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            color: #4CAF50; /* Green color for agricultural news */
        }

        .article {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .article h3 {
            color: #2196F3; /* Blue color for technological news */
        }
    </style>
</head>
<body>




    <!-- // Simulated database data (you would fetch this from your actual database) -->
   
    <?php
$externalNews = [
    'halokhabar' => [
        ['url' => 'https://halokhabar.com/news-details/14719/2024-02-07', 'title' => 'खाद्य व्यवस्था कार्यालयले प्रतिव्यक्ति २५ किलो चामल उपलब्ध गराउने'],
        ['url' => 'https://halokhabar.com/news-details/14720/2024-02-07', 'title' => 'घरघरमा अण्डा पुर्‍याउन ठाउँठाउँमा डिपो सञ्चालन'],
    ],
    'krishionline'=>[
        ['url' => 'https://krishionline.com/2024/02/02/%e0%a4%95%e0%a5%83%e0%a4%b7%e0%a4%bf-%e0%a4%ae%e0%a4%a8%e0%a5%8d%e0%a4%a4%e0%a5%8d%e0%a4%b0%e0%a5%80%e0%a4%95%e0%a5%8b-%e0%a4%a8%e0%a4%bf%e0%a4%b0%e0%a5%8d%e0%a4%a6%e0%a5%87%e0%a4%b6%e0%a4%a8/', 'title' => 'कृषि मन्त्रीको निर्देशन टेर्दिनन् महानिर्देशक मतिना बैद्य !'],
     
    ]
    // Add more websites and their news articles as needed
];
// $shuffledExternalNews = $externalNews;
// shuffle($shuffledExternalNews);

// // Shuffling subarrays
// foreach ($shuffledExternalNews as &$subArray) {
//     shuffle($subArray);
// }

// // Storing the shuffled array in another array
// $shuffledArray = $shuffledExternalNews;
// ?>

<section class="news mt-4">
    <?php
    echo "<h1 class='text-center'>कृषि खबर </h1>";
    foreach ($externalNews as $website => $articles): 
        echo "<section class ='m-center'>";
        echo "<h2> Reference from $website समाचार</h2>";
        foreach ($articles as $article):
            echo "<div class='article  m-4'>";
            echo "<h3 class ='text-dark '>{$article['title']}</h3>";
            echo "<p><a href='{$article['url']}' target='_blank'>थप पढ्नुहोस्</a></p>";
            echo "</div>";
        endforeach;
        echo "</section>";
    endforeach;
    ?>
</section>

    
    
