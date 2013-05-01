{extends file="theme:index.tpl"}

{block name="content"}
    {breadcrumbs}
    <h1>{$request->getTitle()}</h1>
    {$response->getContent()}
{/block}