<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="container">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="/">SiteForever Sandbox</a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
            {menu parent=1 level=0 source="theme" template="menunav"}
        </div>
        <div class="span10">
            {block name="content"}
                <h1>{$request->getTitle()}</h1>
                {$response->getContent()}
            {/block}
        </div>
    </div>
</div>
</body>
</html>