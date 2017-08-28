<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Course Management</title>

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link  rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    </head>

    <body>
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Course Management Form</legend>
                <a href="index.php">Back to home</a>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Course Title <span style="color:red">*</span></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Web App Development" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Web App Development</a></li>
                                    <li><a href="#">Mobile App Development</a></li>
                                    <li><a href="#">Dot net</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Batch No.</label>  
                    <div class="col-md-2">
                        <input id="textinput" name="textinput" placeholder="Php-26" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Lead Trainer</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Trainer Name" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Assistant Trainer</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Trainer Name" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Lab Assistant</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="Full Name" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Start Date</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="yy-mm-dd" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">End Date</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="yy-mm-dd" class="form-control input-md" type="text">

                    </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Start Time</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">End Time</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Day</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="day" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">sun-tues-thurs</a></li>
                                    <li><a href="#">sat-mon-wed</a></li>
                                    <li><a href="#">friday</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
            </fieldset>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>