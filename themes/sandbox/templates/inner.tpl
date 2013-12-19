{extends file="index.tpl"}

{block name="content"}
    {breadcrumbs}
    {$response->getContent()}
{/block}
