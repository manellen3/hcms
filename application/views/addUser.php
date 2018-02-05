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
                    <form action="http://<?=$_SERVER['SERVER_NAME']?>/testonly/ayodyaresortbali.com/2018/index.php/user/addUserData" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <legend>Add new team</legend>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="name">Name</label><br>
                                        <?=form_error('name')?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" value="<?= empty($data)?'':$data['name'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="job_title">Job Title</label><br>
                                        <?=form_error('job_title')?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <input class="form-control" type="text" id="job_title" name="job_title" placeholder="Enter your job title" value="<?= empty($data)?'':$data['job_title'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="email">Email</label><br>
                                        <?=form_error('email')?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter your company" value="<?= empty($data)?'':$data['email'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="company">Company</label><br>
                                        <?=form_error('company')?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <input class="form-control" type="text" id="company" name="company" placeholder="Enter your company" value="<?= empty($data)?'':$data['company'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="password">Password</label><br>
                                        <?=form_error('password')?>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" value="<?= empty($data)?'':$data['password'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input class="btn btn-primary" type="submit" id="submit" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
