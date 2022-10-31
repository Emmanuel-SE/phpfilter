
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        // function  filter($items ,$fn){

        //     $filtereditems=[];
        //     foreach($items  as $item){
        //         if ($fn($item)){
        //             $filtereditems[]=$item;
        //         }
        //     }
        //     return $filtereditems;


        // };

        $filtereditems=array_filter($books,function ($books){
            return  $books['author']==='Andy Weir';
        });
?>
       <ul>
           <?php foreach ($filtereditems as $book):?>
        
            <li>
                <a href="<?=$book['purchaseUrl']?>">
                    <?=$book['name'];?> <br> 
                </a>
                (<?= $book['releaseYear'] ;?>) by:  <?= $book['author']?>
            </li>
            <?php endforeach;?>
        </ul>
        

</body>
</html>
