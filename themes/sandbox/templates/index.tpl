<!DOCTYPE html>
<html>
<head>
    {head}
</head>
<body>
<div class="container">
    <div class="row-fluid">
        <div class="span2">
            {menu parent=1}
        </div>
        <div class="span10">
            <h1>{$request->getTitle()}</h1>

            {$request->getContent()}
        </div>
    </div>
</div>
</body>
</html>