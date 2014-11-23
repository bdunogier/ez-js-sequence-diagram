<p class="diagram">{$content|ezjssd_cleanup}</p>

{ezscript_require( array( 'ezjsc::jquery', 'raphael-min.js', 'underscore-min.js', 'sequence-diagram-min.js' ))}

<script>
    $(".diagram").sequenceDiagram({ldelim}theme: '{$theme}'{rdelim});
</script>
