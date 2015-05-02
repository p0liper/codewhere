<html>
    <head>
        <title>Code</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="send" action="/api.php" method="POST"></form>
        <div class="container row">
            <div class="col-lg-8 col-lg-offset-3">
                <textarea form="send" style="width: 100%; height: 45%;" class="form-control" name="code" placeholder="Enter your code here">{$code}</textarea>
                <br>
                <div class="row"><div class="col-lg-5"><select name="lang" form="send" class="form-control">
                    <option value="php">PHP</option>
                    <option value="wct">WCT</option>
                </select></div><div class="col-lg-4 col-lg-offset-1"><input type="submit" form="send" class="btn btn-default"></div></div>
                {if $result}<br><pre>{$result}</pre>{/if}
                
            </div>
        </div>
    </body>
</html>