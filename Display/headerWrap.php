<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ingrid van den Boom">

    <title>Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="Display/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="Display/css/simple-sidebar.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <form method="post" action="index.php">
        
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        Gebruikersmenu
                    </li>
                    <li>
                        <button class="btn btn-link" type="submit" name="submit" value="data">Gegevens</button>
                    </li>
                    <li>
                        <button class="btn btn-link" type="submit" name="submit" value="update">Aanpassen gegevens</button>
                    </li>
                    <li>
                        <button class="btn btn-link" type="submit" name="submit" value="logout">Log uit</button>
                    </li>                
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

