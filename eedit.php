
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width" initial-scale=1.0>
    <title>Web Browser With Tab</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="eprofile.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<body>

<div class="container-fluid">

    <div class="row">


        <nav class="navbar navbar-default navbar-inverse responsive col-md-12" role="navigation">

            <div class="col-md-10">
                <div class="navbar-header">
                    <a class="navbar-brand liStyle" href="ehome.html">Home</a>
                    <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target="#navmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="nav navbar-nav">
                        <li class=" liStyle"><a href="eprofile.php">Profile</a></li>
                        <li class="liStyle"><a href="#eedit">Edit</a></li>
                        <li class="dropdown-toggle liStyle " data-toggle="dropdown" data-target="#me">
                            <a href="#">Friends<span class="caret"></span></a>

                            <div class="dropdown" id="me">
                                <ul class="dropdown-menu">
                                    <li>Meaning</li>
                                    <li>Age</li>
                                    <li>Address</li>
                                    <li>Size</li>
                                    <li>Height</li>
                                </ul>
                            </div>
                        </li>
                        <li class="liStyle"><a href="#">About</a></li>


                    </ul>
                </div>
            </div>

            <div class="col-md-1">
                <i class="glyphicon glyphicon-log-in"></i>
                <i class="glyphicon glyphicon-user"></i>
            </div>

            <div class="col-md-1">
                <i class="glyphicon glyphicon-log-out"></i>
            </div>

        </nav>
    </div>

    <div class="row">'
        <div class="col-md-12">
            <div class="col-md-6"><img src="" alt="ADD A PROFILE PICTURE" width="200" HEIGHT="200"></div>
            <div class="col-md-6">
                <?php
                if (isset($row)) {
                    ?>
                    <table class="table-striped">
                        <tbody>
                        <tr>
                            <td>First Name:</td>
                            <td><?php echo $row["firstname"]; ?></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><?php echo $row["lastname"]; ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                        <tr>
                            <td>Birthday:</td>
                            <td><?php echo $row["birthday"]; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                }
                ?>


            </div>
        </div>
    </div>


    <div class="row" id="footer">
        <div class="col-md-1 help-block">
            About
        </div>
        <div class="col-md-1 help-block">
            Blog
        </div>
        <div class="col-md-1 help-block">
            Cookies
        </div>
        <div class="col-md-1 help-block">
            Privacy
        </div>
        <div class="col-md-1 help-block">
            Terms
        </div>
        <div class="col-md-1 help-block">
            Job
        </div>
        <div class="col-md-1 help-block">
            Status
        </div>
        <div class="col-md-1 help-block">
            Brand
        </div>

        <div class="col-md-1 help-block">
            Apps
        </div>

        <div class="col-md-1 help-block">
            Marketing
        </div>


        <div class="col-md-1 help-block">
            Help Center
        </div>

        <div class="col-md-1 help-block">
            &copy; 2018
        </div>
    </div>


    <div class="row" id="xs-footer">
        <div class="col-xs-2 help-block">
            About
        </div>

        <div class="col-xs-2 help-block">
            Cookies
        </div>
        <div class="col-xs-2 help-block">
            Privacy
        </div>
        <div class="col-xs-2 help-block">
            Terms
        </div>

        <div class="col-xs-2 help-block">
            Help
        </div>


        <div class="row"></div>
        <div class="col-xs-12 help-block">
            &copy; 2018
        </div>

    </div>


</div>


</body>
</html>