<!doctype html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>

    {block name="css"}
    {/block}
    
    {block name="js"}
    {/block}
</head>

<body>
    <div class="wrapper">
        {block name="sidebar"}
        {/block}

        {block name="page-content"}
        {/block}        
    </div>
        
{block name="main-js"}
{/block}

</body>
</html>