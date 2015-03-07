


function __parent_changedpx_get_childnewpx__(childpx,changedpx){return (changedpx/(childpx/100));}



function __pxA_is_what_percent_of_pxB__(pxA,pxB){return (100/(pxB/pxA));}



function __oldpx_to_new_percentbasedpx__(oldpx,pctchange){return oldpx/pctchange;}



function __match_child_zoom_to_parent_changedpx_(currentzoom,changedpx,childpx){return currentzoom*__pxA_is_what_percent_of_pxB__(changedpx,childpx);}
    
    
    
    
    
    
