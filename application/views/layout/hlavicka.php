 <head>
    <title>Knihy</title>
    
    <link rel="icon" type="image/png" href="obrazky\icon_book.png"/>
    <link rel="stylesheet/less" type="text/css" href="vzhled.less" />
    <link href="assets\bootstrap\css\bootstrap.min.css"rel="stylesheet">
    
    <script src="//cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip(); });</script>  
    
</head>

 <body>    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php foreach($polozky as $p): ?>
                        <li class="nav-item">
                            <a id="menu" class="nav-link" href="<?php base_url()?><?= $p->id_categorie ?>"><?= $p->categorie ?><span class="sr-only">(current)</span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </nav> 
