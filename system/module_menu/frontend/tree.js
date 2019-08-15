document.addEventListener('DOMContentLoaded', function(){

/* drag-and-drop functionality */

  var trees_draggable = document.querySelectorAll('x-tree[data-managing-mode$="draggable"]');
  if (trees_draggable instanceof NodeList) {
    trees_draggable.forEach(function(c_tree){

      var draggable = c_tree.querySelectorAll('x-icon');
      if (draggable instanceof NodeList) {
        draggable.forEach(function(c_draggable){
          c_draggable.setAttribute('draggable', 'true');
          c_draggable.addEventListener('dragstart', function(event){c_tree.setAttribute   ('data-drag-active', 'true'); c_draggable.parentNode.setAttribute   ('data-drag-out', 'true'); event.dataTransfer.setData('text/plain', c_draggable.parentNode.getAttribute('data-id'));}, false);
          c_draggable.addEventListener('dragend',   function(event){c_tree.removeAttribute('data-drag-active'        ); c_draggable.parentNode.removeAttribute('data-drag-out'        );                                                                                          }, false);
        });
      }

      var droppable = c_tree.querySelectorAll('x-drop_area');
      if (droppable instanceof NodeList) {
        droppable.forEach(function(c_droppable){
          c_droppable.addEventListener('dragover',  function(event){event.preventDefault(); c_droppable.setAttribute   ('data-drop-in', 'true');}, false);
          c_droppable.addEventListener('dragleave', function(event){event.preventDefault(); c_droppable.removeAttribute('data-drop-in'        );}, false);
          c_droppable.addEventListener('drop',      function(event){
            var draggable_id = event.dataTransfer.getData('text/plain'),
                draggable = c_tree.querySelector('[data-id="'+draggable_id+'"]'),
                droppable_type = c_droppable.getAttribute('data-type');
            c_droppable.removeAttribute('data-drop-in');
            if (droppable_type == 'in'                                                 ) c_droppable.parentNode.querySelector('ul').appendChild(draggable                                    );
            if (droppable_type == 'before'                                             ) c_droppable.parentNode.parentNode.insertBefore        (draggable, c_droppable.parentNode            );
            if (droppable_type == 'after' && c_droppable.parentNode.nextSibling != null) c_droppable.parentNode.parentNode.insertBefore        (draggable, c_droppable.parentNode.nextSibling);
            if (droppable_type == 'after' && c_droppable.parentNode.nextSibling == null) c_droppable.parentNode.parentNode         .appendChild(draggable                                    );
            if (draggable.parentNode.parentNode.nodeName == 'X-TREE') draggable.querySelector('input[data-parent="true"]').value = '';
            if (draggable.parentNode.parentNode.nodeName == 'LI'    ) draggable.querySelector('input[data-parent="true"]').value = draggable.parentNode.parentNode.getAttribute('data-real-id');
            var c_weight_num = 0, weights = c_tree.querySelectorAll('[data-id="' + draggable.parentNode.parentNode.getAttribute('data-id') + '"] > ul > li > x-item input[data-weight="true"]');
            if (weights instanceof NodeList) {
              weights.forEach(function(c_weight){
                c_weight.value = c_weight_num--;
              });
            }
          }, false);
        });
      }

    });
  }

});