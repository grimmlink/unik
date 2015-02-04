<?php if (isset($_POST['origin'])) {
        $origin = str_replace("\r\n", "\n", $_POST['origin']);
        
        $origins = array_unique(array_filter(explode("\n", $origin)));
        sort($origins);
        
        // var_dump($origins);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Unik</title>

        <!-- Bootstrap -->
        <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="page-header">
                <h1>Unik <small>Make your list unique</small></h1>
            </div>
            
            <div class="row">
                <div class="col-xs-7">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="origin">Original list</label>
                            <textarea name="origin" class="form-control" id="origin" placeholder="One value per line"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm pull-right">Submit</button>
                    </form>
                </div>
                <div class="col-xs-5">
                    <?php echo (isset($origins) && !empty($origins)) ? '<div class="well">' . implode('<br />', $origins) . '</div>' : ''; ?>
                </div>
            </div>
        </div>

        <script src="/vendor/components/jquery/jquery.min.js"></script>
        <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/vendor/jackmoore/autosize/jquery.autosize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('textarea').autosize();    
            });
        </script>
    </body>
</html>