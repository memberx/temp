<html>
    <head>
        <script type="text/javascript" src="jquery.min.js"></script>
    </head>
    <body>
        <script>
            
            $(document).ready(function(){

                $("#go_btn").click(function(){
                    console.log(document.location.hash);
                });
            });
        </script>
        
        <?php
        
            /*echo '<pre>';
            print_r($_SERVER);
            */
        ?>
        
        
        <span id="go_btn">Go</span>
    </body>
</html>