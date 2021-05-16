<head>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="/scripts/editor.js"></script>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/editor.css" rel="stylesheet">
    <script type="text/javascript">
            $(document).ready( function() {
                
             $("#txtEditor").Editor();                    
             
        });
    </script>
</head>
<!--source:
http://www.jqueryscript.net/demo/Responsive-WYSIWYG-Text-Editor-with-jQuery-Bootstrap-LineControl-Editor/
view-source:http://www.jqueryscript.net/demo/Responsive-WYSIWYG-Text-Editor-with-jQuery-Bootstrap-LineControl-Editor/
-->
<body>
    <div class="container-fluid">
        <div class="row">
            <div class=" container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 nopadding changeWidth"  style="padding-left:4%; margin-left:auto; margin-right: auto;">
                        <form action="index.php" method="post" id="add_blogEntry_form">
                            <input type="hidden" name="action" value="add_blogEntry">
                            <input type="text" class="form-control" name="blogTitle" placeholder="Please enter a title for this blog."><br>
                            <textarea id="txtEditor" name="blogEntry"></textarea>
                            <!-- <input type="hidden" name="userID"value="<?php echo $user; ?>"> -->
                            <input type="hidden" name="userID"value="<?php echo 12323; ?>">
                            <input type="hidden" name="blogID"value="<?php echo 15; ?>">
                            <input type="hidden" name="creationDate"value="<?php echo date('Y-m-d H:i:s'); ?>">
                            <input type="hidden" name="userIPv4"value="<?php echo '2.2.2.2'; ?>">
                            <br>
                            <button type='submit' class='btn btn-info' value="Add BlogEntry">Save Blog Entry</button>
                            &nbsp;&nbsp;&nbsp;
                            <button class='btn btn-default'>Cancel</button>
                            <label>&nbsp;</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>