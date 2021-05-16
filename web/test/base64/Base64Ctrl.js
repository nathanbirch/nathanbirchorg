testApp.controller('Base64Ctrl', function($scope) {

  $('[data-toggle="tooltip"]').tooltip({
      'placement': 'top'
  });
  $('[data-toggle="popover"]').popover({
      trigger: 'hover',
          'placement': 'top'
  });

  $('#userNameField').tooltip({
      'show': true,
          'placement': 'bottom',
          'title': "Please remember to..."
  });

  $('#userNameField').tooltip('show');

});