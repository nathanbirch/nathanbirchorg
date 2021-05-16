<head>
    <style type='text/css'>
        <?php echo file_get_contents('css contents')?>
    </style>
    <script type='text/javascript'>
    $(function() {
        <?php echo file_get_contents('js contents')?>
    });
    </script>
</head>
<body>
    <?php echo file_get_contents('html contents')?>
</body>