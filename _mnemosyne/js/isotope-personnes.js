// bellet-graber script 2.0
// tri des albums par familles

// store filter per group
var filters = {};

var $container = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'masonry',
  masonry: {
    fitWidth: true
  }
});

$container.isotope();
// do stuff when checkbox change
$('.button-group').on( 'change', function( event ) {
  var checkbox = event.target;
  var $checkbox = $( checkbox );
  var group = $checkbox.parents('.row').attr('data-group');
  // create array for filter group, if not there yet
  var filterGroup = filters[ group ];
  if ( !filterGroup ) {
    filterGroup = filters[ group ] = [];
  }
  // add/remove filter
  if ( checkbox.checked ) {
    // add filter
    filterGroup.push( checkbox.value );
  } else {
    // remove filter
    var index = filterGroup.indexOf( checkbox.value );
    filterGroup.splice( index, 1 );
  }
  
  var comboFilter = getComboFilter();
  $container.isotope({ filter: comboFilter });
});



function getComboFilter() {
  var combo = [];
  for ( var prop in filters ) {
    var group = filters[ prop ];
    if ( !group.length ) {
      // no filters in group, carry on
      continue;
    }
    // add first group
    if ( !combo.length ) {
      combo = group.slice(0);
      continue;
    }
    // add additional groups
    var nextCombo = [];
    // split group into combo: [ A, B ] & [ 1, 2 ] => [ A1, A2, B1, B2 ]
    for ( var i=0; i < combo.length; i++ ) {
      for ( var j=0; j < group.length; j++ ) {
        var item = combo[i] + group[j];
        nextCombo.push( item );
      }
    }
    combo = nextCombo;
  }
  var comboFilter = combo.join('');
  return comboFilter;
}
