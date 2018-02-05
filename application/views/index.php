<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ayodya Resort Bali</title>
        <!--<link href="../../assets/bootstrap.min.css" rel="stylesheet">-->
        <?php echo link_tag('assets/bootstrap.min.css'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Our Team</h1>
                    <br>
                    <fieldset>
                        <legend>User data</legend>
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
    //                            var_dump($data);
                                foreach ($data as $key => $value) {
//                                    echo "key:".$key."<br />";
//                                    echo "value:".$value->name."<br />";
                                    ?>
                                    <tr>
                                        <td><?=$value->id?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->job_title?></td>
                                        <td><?=$value->email?></td>
                                        <td><?=$value->company?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>
